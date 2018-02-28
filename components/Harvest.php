<?php

namespace codefayakun\components;
use Yii;
use yii\base\Component;
/**
 * This is just an example.
 */
class Harvest extends Component
{
	public $account_id;
	public $access_token;
	public $user_agent;
	public $response;
	public function init()
	{

	}
	public function getInfo($user='me'){
		$url = "https://api.harvestapp.com/v2/users/$user";
		return $this->_httpRequest($url);
	}
	public function createUser($data){
		return $this->_httpRequest('https://api.harvestapp.com/v2/users',$data);
	}
	public function createProject($data){
		return $this->_httpRequest('https://api.harvestapp.com/v2/projects',$data);
		// $data = array(
		// 	'client_id'=>$clientId,
		// 	'name'=>'New Project -'.date('d-m-Y'),
		// 	'is_billable'=>true,
		// 	'bill_by'=>"Project",
		// 	'budget'=>true,
		// 	'budget_by'=>true,
		// 	'hourly_rate'=>true
		// );
		
	} 
	public function updateProject($id,$data)
	{
		$url = 'https://api.harvestapp.com/v2/projects/'.$id;
		return $this->_httpRequest($url,$data,'PATCH');
	}
	public function deleteProject($id)
	{
        $url = 'https://api.harvestapp.com/v2/projects/'.$id;
        return $this->_httpRequest($url,NULL,'DELETE');
	}
	public function createClient($client)
	{
        $url = 'https://api.harvestapp.com/v2/clients/'.$id;
        return $this->_httpRequest($url,$client);
	}
	private function _httpRequest($url,$data=NULL,$method=NULL){

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		if ($data) {	
			curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
			curl_setopt($ch, CURLOPT_POST, 1);
		}
		if ($method) {
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
		}

		$headers = array(
			"Authorization: Bearer ".$this->access_token,
			"Harvest-Account-ID: ".$this->account_id,
			"User-Agent: ".$this->user_agent,
			"Content-Type: application/json"
		);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$result = curl_exec($ch);
		if (curl_errno($ch)) {
			$this->response = curl_error($ch);
		}else{
			$this->response = json_decode($result);
		}
		curl_close ($ch);
		return $this;
	}
}
