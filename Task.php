<?php 

include_once ('User.php');

/**
 * Project Class
 */
class Task
{
	private $id;
	private $title;
	private $weight;
	private $startDate;
	private $endDate;

	private $assignedEmployees = [];


	/**
	 * Add new employee to list
	 * @param Employee $emplyee [description]
	 */
	public function addEmployee (Employee $emplyee)
	{
		/// TODO: Check for duplicate
		$this->assignedEmployees[] = $employee;

		echo ("Employee added: {$employee->getId ()}");
	}
}