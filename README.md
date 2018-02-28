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