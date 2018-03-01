Harvest Time Tracker Yii2 Wrapper
====================
Simple time tracking, fast online invoicing, and powerful reporting software. Simplify employee timesheets and billing.
Its Sample Utility for interaction with harvest api.
Its Completly for my persional use . i will it more usefull in future.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist codefayakun/yii2-harvest "*"
```
or try 

php composer.phar require  codefayakun/yii2-harvest "dev-master"

or add

```
"codefayakun/yii2-harvest": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :
Add it to your config component array 
```php
'harvest'=> [
    'class'          => 'codefayakun\yii2-harvest\Harvest',
    'account_id'     => 'YOUR_ACCOUNT_ID',
    'access_token'   => 'YOUR_SECRET',
    'user_agent'     => 'APP (example@email.com)'
],
?>
```

```php
<?php 
    // Get Current user information..
    $result = \Yii::$app->harvest->getInfo('me');
    print_r($result->response);

    Other GET functions you can called.

    // getting listing

    \Yii::$app->harvest->listUsers();
    \Yii::$app->harvest->listTasks();
    \Yii::$app->harvest->listProjects();
    \Yii::$app->harvest->listClients();
    \Yii::$app->harvest->listContacts();
    \Yii::$app->harvest->listTimeEntries();

    // getting single record base on ID.

    \Yii::$app->harvest->getCompany();
    \Yii::$app->harvest->getUser($id);
    \Yii::$app->harvest->getTask($id);
    \Yii::$app->harvest->getProject($id);
    \Yii::$app->harvest->getClient($id);
    \Yii::$app->harvest->getContact($id);
    \Yii::$app->harvest->getTimeEntry($id);

    // Create Client 
    $data = array(
            'name' => 'Jon'
        );
     \Yii::$app->harvest->createClient($data);

    // Update client
     \Yii::$app->harvest->updateClient($id,$data);


    // Create Project 
    $data = array(
            'client_id'=>'clientId',
            'name'=>'New Project',
            'is_billable'=>true,
            'bill_by'=>"Project",
            'budget'=>true,
            'budget_by'=>true,
            'hourly_rate'=>true
        );
     \Yii::$app->harvest->createProject($data);

    // Update Project
     \Yii::$app->harvest->updateProject($id,$data);

    // similar we have for data format you can pass to these method. you can visit official site. 

     createTask();
     updateTask();
     createUser();
     updateUser();
     createTimeEntry();
     updateTimeEntry();
     createContact();
     updateContact();

     // delete methods
     
     \Yii::$app->harvest->deleteClient($id);
     \Yii::$app->harvest->deleteTask($id);
     \Yii::$app->harvest->deleteTimeEntry($id);
     \Yii::$app->harvest->deleteContact($id);
     \Yii::$app->harvest->deleteProject($id);
 ?>
 ```