<?php

class AjaxController extends Controller{
	
	protected $postObject;
  	protected $userObject;
  	protected $categoryObject;
   	
	public function index(){
		$this->set(response, "Invalid Request");
	}
	
	public function get_post_content() {
		$this->postObject = new Post();
		$post = $this->postObbject->getPost($_GET['pID']);
		$this->set('response',$post['content']);


	}

}

?>