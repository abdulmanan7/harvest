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
    public $billable_by_default;
    public $default_hourly_rate;
    public $is_default;
    public $is_active;

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
