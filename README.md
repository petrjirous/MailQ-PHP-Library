# MailQ PHP library

## Instalation

### Composer
```
composer require quanti/mailq-connector
```

### Using in Nette

Add this section to your config. You should use different URL and API key for development and production environment.

## Usage
There is MailQ object which is facade to whole MailQ REST API. Most common use case is only one company in MailQ per customer. You need to instantiate MailQ object with company ID. Because there are also customers with multiple companies there is MailQFactory which creates MailQ for specific company.
 
```php
$apiKey = "6e2211bf472a9478f03420fb5897e324c57d05fc27bc0e871083275e98eec344";
$apiUrl = "http://mailq-test.quanti.cz/api/v2";
$mailqFactory = new MailQFactory($apiUrl,$apiKey);
$companyId = 1;
$mailq = $mailqFactory->createMailQ($companyId);
```


### [Campaign resource](http://docs.newmailing.apiary.io/#campaigns)



#### Get all campaigns

```php
$campaigns = $mailq->getCampaigns();
```

#### Get single campaign

```php
$campaignId = 1;
$campaigns = $mailq->getCampaign();
```

### [Company resource](http://docs.newmailing.apiary.io/#companies)



#### Get company

```php
$company = $mailq->getCompany();
```

#### Regenerate API key

Use this with caution! After regenerating API key application will throw errors because you have already create connection 

```php
$apiKey = $mailq->regenerateApiKey();
```

### [Log message resource](http://docs.newmailing.apiary.io/#logmessages)

#### Get all log messages

```php
$logMessagesEntity = $mailq->getLogMessages();
```

#### Get single log message

```php
$logMessageId = 1;
$logMessageEntity = $mailq->getLogMessage($logMessageId);
```

### [Newsletter resource](http://docs.newmailing.apiary.io/#newsletters)

#### Create newsletter


```php
$data = [
 	"name" => "Awesome newsletter",
     "campaign"=> "Spring 2016",
     "subject" => "Buy our new product",
     "senderEmail" => "newsletter@example.org",
     "sendAs" => "Awesome Company",
     "from" => "2015-06-12T06:00:00.000",
     "to" => "2016-06-19T06:00:00.000",
     "text"=> "QWx0ZXJuYXRpdmUgYmFzZTY0IGVtYWlsIHRleHQ=",
     "automaticTime"=> false,
     "recipientsListId"=>1,
     "templateUrl" => "http://example.org/newsletter.html",
     "unsubscribeTemplateUrl" => "http://example.org/unsubscribe.html"
];
$newsletter = new \MailQ\Entities\v2\NewsletterEntity($data);
$mailq->createNewsletter($newsletter);
$newsletterId = $newsletter->getId();
```

#### Update newsletter


```php
$data = [
 	"name" => "Awesome newsletter",
     "campaign" => "Spring 2016",
     "subject" => "Buy our new product",
     "senderEmail" => "newsletter@example.org",
     "sendAs" => "Awesome Company",
     "from" => "2015-06-12T06:00:00.000",
     "to" => "2016-06-19T06:00:00.000",
     "text" => "QWx0ZXJuYXRpdmUgYmFzZTY0IGVtYWlsIHRleHQ=",
     "automaticTime" => false,
     "recipientsListId" => 1,
     "templateUrl" => "http://example.org/newsletter.html",
     "unsubscribeTemplateUrl" => "http://example.org/unsubscribe.html"
];
$newsletter = new \MailQ\Entities\v2\NewsletterEntity($data);
$mailq->updateNewsletter($newsletter);
$newsletterId = $newsletter->getId();
```
#### Get all newsletters

```php
$newsletters = $mailq->getNewsletters();
```

#### Get newsletter

```php
$newsletterId = 1;
$newsletter = $mailq->getNewsletter($newsletterId);
```

#### Send test e-mail

```php
$newsletterId = 1;
$email = "test@example.org";
$mailq->sendTestEmail($email,$newsletterId);
```


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

### [Notification resource](http://docs.newmailing.apiary.io/#notifications)

#### Create notification

```php
$data = [
 	"name" => "First Notification",
    "code" => "N1",
    "subject" => "{{orderNumber}} order is ready",
    "sendAs" => "Awesome Company",
    "text" => "QWx0ZXJuYXRpdmUgYmFzZTY0IGVtYWlsIHRleHQ=",
    "template" => "QWx0ZXJuYXRpdmUgYmFzZTY0IGVtYWlsIHRleHQ=",
    "appliedSenderEmail" => "notification@example.org"
];
$notification = new \MailQ\Entities\v2\NotificationEntity($data);
$mailq->createNotification($notification);
$notificationId = $notification->getId();
```

#### Update notification

```php
$data = [
 	"name" => "First Notification",
    "code" => "N1",
    "subject" => "{{orderNumber}} order is ready",
    "sendAs" => "Awesome Company",
    "text" => "QWx0ZXJuYXRpdmUgYmFzZTY0IGVtYWlsIHRleHQ=",
    "template" => "QWx0ZXJuYXRpdmUgYmFzZTY0IGVtYWlsIHRleHQ=",
    "appliedSenderEmail" => "notification@example.org"
];
$notification = new \MailQ\Entities\v2\NotificationEntity($data);
$mailq->updateNotification($notification);
```

#### Get all notifications

```php
$notifications = $mailq->getNotifications();
```

#### Delete notification

```php
$notificationId = 1;
$mailq->deleteNotification($notificationId);
```

#### Send notification e-mail

In data section are all values which will be used in notification. Keys of associative array are variable names and values are values. 

```php
$data = [
    "recipientEmail" => "recipient@example.org",
    "data" => [
        "key1" => "value1", 
        "key2" => "value2"
    ],
    "attachments" => [
        [
            "displayName" =>  "Priloha 1",
            "link" => "http://example.org/test.txt",
            "source" => "dGVzdHM=",
            "mimeType" => "text/plain"
        ],
        [
            "displayName" => "Priloha 2",
            "link" => "http://example.org/image.png",
            "source" => "R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==",
            "mimeType" => "image/png"
        ]
    ]
];
$notificationId = 1;
$notificationData = new \MailQ\Entities\v2\NotificationDataEntity($data); 
$mailq->sendNotificationEmail($notificationData,$notificationId);
$notificationDataId = $notificationData->getId();
```

#### Get notification e-mail

```php
$notificationId = 1;
$notificationDataId = 2;
$notificationData = $mailq->getNotificationData($notificationId,$notificationDataId);
```

#### Get all notification e-mails
```php
$notificationId = 1;
$email = "recipiet@example.org";
$notificationsData = $mailq->getNotificationsData($notificationId,$email);
```


### [Recipients list resource](http://docs.newmailing.apiary.io/#recipientslist)

#### Create recipients list

```php
$mailq = $mailqFactory->createMailQ($companyId);
$data = [
    "name" => "All clients",
    "description" => "All clients of our awesome company",
    "variables" => ["salutation","gender"],
    "formVisible" => true
];
$recipientsList = new \MailQ\Entities\v2\RecipientsListEntity($data);
$mailq->createRecipientsList($recipientsList);
$recipientsListId = $recipientsList->getId();
```

#### Delete recipients list

```php
$recipientsListId = 1;
$mailq->deleteRecipientsList($recipientListId);
```

#### Get recipients list

```php
$recipientsListId = 1;
$recipientsList = $mailq->getRecipientsList($recipientListId);
```

#### Get recipients lists

You can specify e-mail and API returns only recipients list which contains this e-mail

```php
$email = "recipient@example.org";
$recipientsLists = $mailq->getRecipientsLists($email);
```

#### Get all recipients


```php
$recipientsListId = 1;
$recipients = $mailq->getRecipients($recipientsListId);
```

#### Add multiple recipients at once

```php
$data = [
	"recipients" => [
		[
			"email" => "recipient@example.org",
	        "data" => [
	            "key1" => "value1",
	            "key2" => "value2"
	        ]
		]
	]
];
$recipients = new \MailQ\Entities\v2\RecipientsEntity($data);
$recipientsListId = 1;
$validate = false;
$mailq->addRecipients($recipients,$recipientsListId,$validate);
```

#### Update or create recipient

```php
$data = [
	"email" => "recipient@example.org",
    "data" => [
        "key1" => "value1",
        "key2" => "value2"
    ]
];
$recipient = new \MailQ\Entities\v2\RecipientEntity($data);
$recipientsListId = 1;
$validate = false;
$mailq->updateRecipient($recipient,$recipientsListId,$validate);
```

#### Get all recipients list unsubscriber

```php
$recipientsListId = 1;
$unsubscribers = $mailq->getRecipientListUnsubscribers($recipientsListId);
```

#### Add recipients list unsubscriber

```php
$recipientsListId = 1;
$email = "recipient@example.org";
$mailq->addRecipientListUnsubscriber($emails,$recipientsListId);
```

#### Add recipients list unsubscribers

```php
$data = [
	"emails" => [
		[
			"email" => "recipient@example.org"
		],
		[
			"email" => "recipient2@example.org"
		]
	]
];
$recipientsListId = 1;
$emails = new \MailQ\Entities\v2\EmailAddressesEntity($data);
$mailq->addRecipientListUnsubscribers($emails,$recipientsListId);
```

#### Delete recipients list unsubscriber

```php
$recipientsListId = 1;
$email = "recipient@example.org";
$mailq->deleteRecipientListUnsubscriber($emails,$recipientsListId);
```

### [SMS Notifications](http://docs.newmailing.apiary.io/#smsnotifications)

### Create single SMS notification


```php
$data = [
	"name" => "SMS notification",
    "code" => "S1",
    "template" => "U01TIHRlc3Qge3t2YXJpYWJsZX19"
];
$smsNotification = new \MailQ\Entities\v2\SmsNotificationEntity($data);
$mailq->createSmsNotification($smsNotification);
$smsNotificationId = $smsNotification->getId();
```

### Update single SMS notification


```php
$data = [
	"name" => "SMS notification",
    "code" => "S1",
    "template" => "U01TIHRlc3Qge3t2YXJpYWJsZX19"
];
$smsNotification = new \MailQ\Entities\v2\SmsNotificationEntity($data);
$mailq->updateSmsNotification($smsNotification);
```

### Delete SMS notification

```php
$smsNotificationId = 1;
$mailq->deleteSmsNotification($smsNotification);
```

#### Get all SMS notifications

```php
$notifications = $mailq->getSmsNotifications();
```

#### Get single SMS notification

```php
$smsNotificationId = 1;
$notifications = $mailq->getSmsNotification($smsNotificationId);
```

#### Send SMS

```php
$smsNotificationId = 1;
$data = [
	"toNumber" => "+420123456789",
    "data" => [
        "key1" => "value1", 
        "key2" => "value2"
    ]
];
$sms = new \MailQ\Entities\v2\SmsEntity($data);
$mailq->sendSms($sms,$smsNotificationId);
$smsId = $sms->getId();
```

#### Send SMS batch

```php
$smsNotificationId = 1;
$data = [
	"batch" => [
        [    
            "id" => 1,
            "toNumber" => "+420123456789", 
            "data" => [         
                "text" => "value1"   
            ]
        ],
        [     
            "id" => 2,
            "toNumber" => "+420123456789", 
            "data" => [        
                "text" => "value2"   
            ]
        ]

    ]
];
$smsBatch = new \MailQ\Entities\v2\SmsBatchEntity($data);
$smsBatchResultEntity = $mailq->sendSmsBatch($smsBatch,$smsNotificationId);
```


### [Sender emails](http://docs.newmailing.apiary.io/#senderemails)

#### Get all sender emails

```php
$senderEmails = $mailq->getSenderEmails();
```

#### Get single sender email

```php
$senderEmailId = 1;
$senderEmail = $mailq->getSenderEmail($senderEmailId);
```

### [Users](http://docs.newmailing.apiary.io/#users)

#### Get all users

```php
$users = $mailq->getUsers();
```

#### Get single user

```php
$userId = 1;
$user = $mailq->getUser($userId);
```
