<?php
namespace codefayakun\harvest\models;

use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class Project extends Model
{
    
       public $id;
       public $name;
       public $code;
       public $is_active = true;
       public $bill_by;
       public $budget;
       public $budget_by;
       public $notify_when_over_budget = false;
       public $over_budget_notification_percentage;
       public $over_budget_notification_date;
       public $show_budget_to_all=false;
       public $created_at;
       public $updated_at;
       public $starts_on;
       public $ends_on;
       public $is_billable;
       public $is_fixed_fee=false;
       public $notes;
       public $client_id;
       public $cost_budget;
       public $cost_budget_include_expenses=false;
       public $hourly_rate;
       public $fee;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['client_id','name','is_billable','bill_by','budget_by'], 'filter', 'filter' => 'trim'],
            [['client_id','name','is_billable','bill_by','budget_by'], 'required'],
            [['is_fixed_fee','show_budget_to_all','cost_budget_include_expenses'], 'boolean'],
        ];
    }
    
}
