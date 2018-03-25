<?php
namespace codefayakun\harvest\models;

use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class Task extends Model
{
    public $name;
    public $billable_by_default=true;
    public $default_hourly_rate=0;
    public $is_default=false;
    public $is_active=true;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['name', 'required']
        ];
    }
    
}
