<?php
namespace codefayakun\harvest\models;

use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class Contact extends Model
{
    public $id;
    public $title;
    public $first_name;
    public $last_name;
    public $email;
    public $phone_office;
    public $phone_mobile;
    public $fax;
    public $created_at;
    public $updated_at;
    public $client_id;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name','client_id'], 'required']
        ];
    }
    
}
