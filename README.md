# MailQ PHP library

## Usage

There is MailQ object which is facade to whole MailQ REST API. Most common use case is only one company in MailQ per customer. You need to instantiate MailQ object with company ID. Because there are also customers with multiple companies there is MailQFactory which creates MailQ for specific company.
 
```php
$apiKey = "6e2211bf472a9478f03420fb5897e324c57d05fc27bc0e871083275e98eec344";
$apiUrl = "http://mailq-test.quanti.cz/api/v2";
$mailqFactory = new MailQFactory($apiUrl,$apiKey);
$companyId = 1;
$mailq = $mailqFactory = $factory->createMailQ($companyId);
```


### Campaign resource

http://docs.newmailing.apiary.io/#campaigns

#### Get all campaings

```php
$mailq->get
```

### Company resource

http://docs.newmailing.apiary.io/#companies

#### Get company

```php
$company = $mailq->getCompany();
```

#### Regenerate API key

Use this with caution! After regenerating API key application will throw errors because you have already create connection 

```php
$apiKey = $mailq->regenerateApiKey();
```

### Log message resource

#### Get all log messages

```php
$logMessagesEntity = $mailq->getLogMessages();
```

#### Get single log message

```php
$logMessageId = 1;
$logMessageEntity = $mailq->getLogMessage($logMessageId);
```

### Newsletter resource

#### Start preparation of newsletter

```php
$newsletterId = 1;
$mailq->startNewsletter($newsletterId);
```

#### Stop preparation of newsletter

```php
$newsletterId = 1;
$mailq->stopNewsletter($newsletterId);
```