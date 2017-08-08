<?php 

include_once ('Employee.php');

/**
 * Project Class
 */
class Project
{
	private $id;
	private $title;
	private $startDate;
	private $endDate;
	private $budget;

	private $emplyees = [];
	private $tasks = [];


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




	/**
	 * Clear Employees list
	 */
	public function clearEmployees ()
	{
		$this->employees = [];
	}

	/**
	 * Remove new employee
	 * @param Employee $employee [description]
	 */
	public function removeEmployee ($id)
	{
		// Find and remove from list
	}

	/**
	 * Add new employee
	 * @param Employee $employee [description]
	 */
	public function addEmployee (Employee $employee)
	{
		$this->employees[] = $employee;
	}


	/**
	 * Clear Task list
	 */
	public function clearTasks ()
	{
		$this->tasks = [];
	}

	/**
	 * Remove a Task
	 * @param Task $task [description]
	 */
	public function removeTask ($id)
	{
		// Find and remove from list
	}

	/**
	 * Add new Task
	 * @param Task $task [description]
	 */
	public function addTask (Task $task)
	{
		$this->tasks[] = $task;
	}


	/**
	 * Assign an employee to task
	 * @param  [type] $taskId     [description]
	 * @param  [type] $employeeId [description]
	 * @return [type]             [description]
	 */
	public function assignEmployeeToTask($taskIndex, $employeeIndex)
	{
		$task     = $this->tasks[$taskIndex];
		$employee = $this->employees[$employeeIndex];

		$task->addEmployee ($employee);
	}
}