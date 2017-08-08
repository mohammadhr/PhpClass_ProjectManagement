<?php 

/**
 * Project Class
 */
class Employee
{
	private $id;
	private $firstName;
	private $lastName;
	private $nId;

	/**
	 * Set Id
	 * @param [type] $id [description]
	 */
	public function setId ($id)
	{
		$this->id = $id;
	}
	
	/**
	 * Get Id
	 * @return [type] [description]
	 */
	public function getId ()
	{
		return $this->id;
	}
}