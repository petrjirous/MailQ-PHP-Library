<?php

namespace MailQ\Entities;

use Nette\Utils\ArrayHash;
use Nette\Utils\Json;
use Nette\Utils\Strings;

class BaseEntity extends \Nette\Object {

    const INVERT_NAMES = true;

    /**
     * @var ArrayHash
     */
    private $attributeNames;

    /**
     * Create new entity from array or string which is JSON
     * @param string|array $data
     * @param bool $inverse
     * @throws \Nette\Utils\JsonException
     */
    public function __construct($data = NULL, $inverse = false) {
        if ($data !== null) {
            if (is_string($data)) {
                $data = Json::decode($data);
            }
            $this->initMapping($inverse ? 'out' : 'in');
            foreach ($data as $key => $value) {
                if ($value instanceof \stdClass) {
                    $value = (array) $value;
                }
                $reflection = $this->getReflection();
                if ($this->attributeNames->offsetExists($key)) {
                    $propertyName = $this->attributeNames->offsetGet($key);
                    if ($reflection->hasProperty($propertyName)) {
                        $property = $reflection->getProperty($propertyName);
                        $type = $property->getAnnotation('var');
                        if (Strings::endsWith($type, 'Entity')) {
                            $classWithNamespace = sprintf("\\%s\\%s", $reflection->getNamespaceName(), (string) $type);
                            if (is_array($value) && $property->hasAnnotation('collection')) {
                                $arrayData = array();
                                foreach ($value as $valueData) {
                                    $arrayData[] = new $classWithNamespace($valueData, $inverse);
                                }
                                $this->$propertyName = $arrayData;
                            } else {
                                $this->$propertyName = new $classWithNamespace($value);
                            }
                        } else {
                            $this->$propertyName = $value;
                        }
                    }
                }
            }
        }
    }

    /**
     * Creates ArrayHash where key is in annotation name
     * and value is property name
     * It is used to find property name by in annotation value
     */
    private function initMapping($mapping) {
        $this->attributeNames = new ArrayHash();
        $properties = $this->getReflection()->getProperties();
        foreach ($properties as $property) {
            if ($property->hasAnnotation($mapping)) {
                $annotation = $property->getAnnotation($mapping);
                if ($annotation !== true) {
                    $this->attributeNames[$annotation->name] = $property->getName();
                } else {
                    $this->attributeNames[$property->getName()] = $property->getName();
                }
            }
        }
    }

    public function toArray($inverse = false) {
        $data = array();
        $mapping = $inverse ? 'in' : 'out';
        $properties = $this->getReflection()->getProperties();
        foreach ($properties as $key => $property) {
            if ($property->hasAnnotation($mapping)) {
                $propertyName = $property->getName();
                $annotation = $property->getAnnotation($mapping);
                if ($annotation !== true) {
                    $outputName = $annotation->name;
                } else {
                    $outputName = $property->getName();
                }
                $value = $this->$propertyName;
                if ($value instanceof BaseEntity) {
                    $data[$outputName] = $value->toArray($inverse);
                } else if (is_array($value) && $property->hasAnnotation('collection')) {
                    $array = array();
                    foreach ($value as $item) {
                        if ($item instanceof BaseEntity) {
                            $array[] = $item->toArray($inverse);
                        }
                    }
                    $data[$outputName] = $array;
                } else if ($value !== NULL) {
                    $data[$outputName] = $value;
                }
            }
        }
        if (count($data) == 0) {
            return (object) $data;
        } else {
            return $data;
        }
    }

}
