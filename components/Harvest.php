<?php

namespace codefayakun\harvest\components;
use Yii;
use yii\base\Component;
use codefayakun\harvest\models\Client;
use codefayakun\harvest\models\Project;
use codefayakun\harvest\models\User;
use codefayakun\harvest\models\TimeEntry;
use codefayakun\harvest\models\Contact;
use codefayakun\harvest\models\Task;
/**
 * This is just an example.
 */
class Harvest extends Component
{
	public $account_id;
	public $access_token;
	public $user_agent;
	public $response;
	public $apiUrl = 'https://api.harvestapp.com/v2/';
	public function init()
	{

	}
	public function getCompany($user='me'){
		$url = $this->apiUrl."company/";
		return $this->_httpRequest($url);
	}public function getInfo($user='me'){
		$url = $this->apiUrl."users/$user";
		return $this->_httpRequest($url);
	}
	public function listUsers(){
		$url = $this->apiUrl."users/";
		return $this->_httpRequest($url);
	}
	public function userProjects($id){
		$url = $this->apiUrl."users/$id/project_assignments";
		return $this->_httpRequest($url);
	}
	public function createUser($data){
		$model = new User();
		if ($model->load($data,'') && $model->validate()) {
			$url = $this->apiUrl.'users/';
			return $this->_httpRequest($url,$model);
		}else{
			return $model->errors;
		}
		return $this;
	}
	public function updateUser($id,$data){

		$model = new User();
		if ($model->load($data,'') && $model->validate()) {
			$url = $this->apiUrl."users/$id";
			return $this->_httpRequest($url,$model,'PATCH');
		}else{
			return $model->errors;
		}
		return $this;
	}
	public function deleteUser($id)
	{
		$url = $this->apiUrl.'users/'.$id;
		return $this->_httpRequest($url,NULL,'DELETE');
	}

	public function getContact($id){
		$url = $this->apiUrl."contacts/$id";
		return $this->_httpRequest($url);
	}
	public function listContacts(){
		$url = $this->apiUrl."contacts/";
		return $this->_httpRequest($url);
	}
	public function createContact($data){
		$model = new Contact();
		if ($model->load($data,'') && $model->validate()) {
			$url = $this->apiUrl.'contacts/';
			return $this->_httpRequest($url,$model);
		}else{
			return $model->errors;
		}
		return $this;
	}
	public function updateContact($id,$data){

		$model = new Contact();
		if ($model->load($data,'') && $model->validate()) {
			$url = $this->apiUrl."contacts/$id";
			return $this->_httpRequest($url,$model,'PATCH');
		}else{
			return $model->errors;
		}
		return $this;
	}
	public function deleteContact($id)
	{
		$url = $this->apiUrl.'contacts/'.$id;
		return $this->_httpRequest($url,NULL,'DELETE');
	}
	public function getTask($id){
		$url = $this->apiUrl."tasks/$id";
		return $this->_httpRequest($url);
	}
	public function listTasks(){
		$url = $this->apiUrl."tasks/";
		return $this->_httpRequest($url);
	}
	public function createTask($data){
		$model = new Task();
		if ($model->load($data,'') && $model->validate()) {
			$url = $this->apiUrl.'tasks/';
			return $this->_httpRequest($url,$model);
		}else{
			return $model->errors;
		}
		return $this;
	}
	public function updateTask($id,$data){

		$model = new Task();
		if ($model->load($data,'') && $model->validate()) {
			$url = $this->apiUrl."tasks/$id";
			return $this->_httpRequest($url,$model,'PATCH');
		}else{
			return $model->errors;
		}
		return $this;
	}
	public function deleteTask($id)
	{
		$url = $this->apiUrl.'tasks/'.$id;
		return $this->_httpRequest($url,NULL,'DELETE');
	}
	public function getTimeEntry($id){
		$url = $this->apiUrl."time_entries/$id";
		return $this->_httpRequest($url);
	}
	public function listTimeEntries(){
		$url = $this->apiUrl."time_entries/";
		return $this->_httpRequest($url);
	}
	public function createTimeEntry($data){
		$model = new TimeEntry();
		if ($model->load($data,'') && $model->validate()) {
			$url = $this->apiUrl.'time_entries/';
			return $this->_httpRequest($url,$model);
		}else{
			return $model->errors;
		}
		return $this;
	}
	public function updateUpdateTimeEntry($id,$data){

		$model = new TimeEntry();
		if ($model->load($data,'') && $model->validate()) {
			$url = $this->apiUrl."time_entries/$id";
			return $this->_httpRequest($url,$model,'PATCH');
		}else{
			return $model->errors;
		}
		return $this;
	}
	public function deleteTimeEntry($id)
	{
		$url = $this->apiUrl.'time_entries/'.$id;
		return $this->_httpRequest($url,NULL,'DELETE');
	}
	public function restartTimeEntry($id)
	{
		$url = $this->apiUrl."time_entries/$id/restart/";
		return $this->_httpRequest($url,null,'PATCH');
	}
	public function stopTimeEntry($id)
	{
		$url = $this->apiUrl."time_entries/$id/stop/";
		return $this->_httpRequest($url,null,'PATCH');
	}
	public function listProjects()
	{
		$url = $this->apiUrl.'projects/';
		return $this->_httpRequest($url);
	}
	public function getProject($id)
	{
		$url = $this->apiUrl.'projects/'.$id;
		return $this->_httpRequest($url);
	}
	public function getProjectUserAssignment($project_id,$user_assig_id)
	{
		$url = $this->apiUrl."projects/$project_id/user_assignments/$user_assig_id/";
		return $this->_httpRequest($url);
	}
	public function createProject($data){
		$model = new Project();
		if ($model->load($data,'') && $model->validate()) {
			$url = $this->apiUrl.'projects/';
			return $this->_httpRequest($url,$model);
		}else{
			return $model->errors;
		}
		return $this;


	} 
	public function updateProject($id,$data)
	{
		$model = new Project();
		if ($model->load($data,'') && $model->validate()) {
			$url = $this->apiUrl.'projects/'.$id;
			return $this->_httpRequest($url,$model,'PATCH');
		}else{
			return $model->errors;
		}
		return $this;
	}
	public function deleteProject($id)
	{
		$url = $this->apiUrl.'projects/'.$id;
		return $this->_httpRequest($url,NULL,'DELETE');
	}
	public function listClients()
	{
		$url = $this->apiUrl.'clients/';
		return $this->_httpRequest($url);
	}
	public function getClient($id)
	{
		$url = $this->apiUrl.'clients/'.$id;
		return $this->_httpRequest($url);
	}
	public function createClient($client)
	{
		$model = new Client();
		if ($model->load($client,'') && $model->validate()) {
			$url = $this->apiUrl.'clients/';
			return $this->_httpRequest($url,$model);
		}else{
			return $model->errors;
		}
		return $this;
	}
	public function updateClient($id,$data)
	{
		$model = new Client();
		if ($model->load($client,'') && $model->validate()) {
			$url = $this->apiUrl.'clients/'.$id;
			return $this->_httpRequest($url,$model,'PATCH');
		}else{
			return $model->errors;
		}
		return $this;
	}
	public function deleteClient($id)
	{
		$url = $this->apiUrl.'clients/'.$id;
		return $this->_httpRequest($url,NULL,'DELETE');
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
