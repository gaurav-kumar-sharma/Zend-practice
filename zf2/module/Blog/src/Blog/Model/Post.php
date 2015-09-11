<?php
namespace Blog\Model;

class Post implements PostInterface {
	
	protected $id;
	
	protected $title;
	
	protected $text;
	/**
	 * @return the $id
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return the $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * @return the $text
	 */
	public function getText() {
		return $this->text;
	}

	/**
	 * @param field_type $id
	 */
	public function setId($id) {
		$this->id = $id;
	}

	/**
	 * @param field_type $title
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * @param field_type $text
	 */
	public function setText($text) {
		$this->text = $text;
	}

	
	
	
}