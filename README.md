Harvest Time Tracker
====================
Simple time tracking, fast online invoicing, and powerful reporting software. Simplify employee timesheets and billing.
Its Sample Utility for interaction with harvest api.
Its Completly for my persional use . i will it more usefull in future.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist codfayakun/yii2-harvest "*"
```

or add

```
"codfayakun/yii2-harvest": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :
Add it to your config component array 
```php
'harvest'=> [
    'class'          => 'codfayakun\yii2-harvest\Harvest',
    'account_id'     => 'YOUR_ACCOUNT_ID',
    'access_token'   => 'YOUR_SECRET',
    'user_agent'     => 'APP (example@email.com)'
],
?>
```

```php
<?php 
    // Get Current user information..
    $result = \codefayakun\harvest\Harvest::getInfo('me');
    $result->response;

    // Create Client 
    \codefayakun\harvest\Harvest::creatClient(
        array(
            'name' => 'Jon'
        )
    );

 ?>```