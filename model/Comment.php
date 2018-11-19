<?php

class Post
	
{
	private $id;
	private $createdBy;
	private $createdAt;
	private $content;
	private $post;
		
	public function getId(){
		return $this->id;
	} 
		public function setId($id){
		$this->id=$id;
	} 
	
	
	public function getcreatedBy(){
		return $this->createdBy;
	} 
		public function createdBy($createdBy){
		$this->createdBy=$createdBy;
	} 
	
	
	public function getCreatedAt(){
		return $this->createdAt;
	} 
		public function setCreatedAt($createdAt){
		$this->createdAt=$createdAt;
	}
	
	
	public function getContent(){
		return $this->content;
	} 
		public function setContent($content){
		$this->content=$content;
	} 
		
	public function getpost(){
		return $this->post;
	} 
		public function setpost($post){
		$this->post=$post;
	} 
}

