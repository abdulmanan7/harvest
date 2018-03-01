<?php
namespace codefayakun\harvest\models;

use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class User extends Model
{
  public $id;
  public $first_name;
  public $last_name;
  public $email;
  public $telephone;
  public $timezone;
  public $has_access_to_all_future_projects;
  public $is_contractor;
  public $is_admin;
  public $is_project_manager;
  public $can_see_rates;
  public $can_create_projects;
  public $can_create_invoices;
  public $is_active;
  public $weekly_capacity;
  public $default_hourly_rate;
  public $cost_rate;
  public $roles;
  public $avatar_url;
  public $created_at;
  public $updated_at;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name','last_name','email'], 'filter', 'filter' => 'trim'],
            [['first_name','last_name','email'], 'required'],
            ['email', 'email']
        ];
    }
    
}
