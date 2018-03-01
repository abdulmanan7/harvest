<?php
namespace codefayakun\harvest\models;

use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class Client extends Model
{
    public $id;
    public $name;
    public $is_active = true;
    public $address;
    public $currency;
    public $updated_at;
    public $created_at;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['currency','name'], 'filter', 'filter' => 'trim'],
            ['name', 'required'],
        ];
    }
    
}
