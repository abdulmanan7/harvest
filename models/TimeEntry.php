<?php
namespace codefayakun\harvest\models;

use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class TimeEntry extends Model
{
    public $user_id;
    public $project_id;
    public $task_id;
    public $spent_date; //format 2017-03-21
    public $started_time; //format 8:00am
    public $ended_time;
    public $hours;
    public $notes;
    public $external_reference;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['currency','name'], 'filter', 'filter' => 'trim'],
            [['project_id','task_id','spent_date'], 'required'],
        ];
    }
    
}
