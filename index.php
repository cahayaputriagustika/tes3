<?php

class Company {
  public $name;

  public function setCompanyName($name){
    $this->name = $name;
  }

  public function getCompanyName(){
    return $this->name;
  }
}

class Department {
  public $name;

  public function setDepartmentName($name){
    $this->name = $name;
  }

  public function getDepartmentName(){
    return $this->name;
  }
}

class Employee
{
  public $name;
  public $title;
  public $salary;
  
    public function setEmployeeName($name){
    return $this->name = $name;
  }
 
  public function getEmployeeName()
  {
    return $this->name;
  }
 
  public function getEmployeeTitle()
  {
    return $this->title;
  }
 
  public function getEmployeeMonthlySalary()
  {
    return $this->salary;
  }
}

  function getEmployeeProfile(){
  $obEmployee = new Employee;
  $obEmployee->setEmployeeName('Cahaya Putri');
  $obEmployee->title = 'QA Tester';
  $obEmployee->salary = 50000000;
  echo 'Name : '.$obEmployee->getEmployeeName();
  echo '<br> Title : '.$obEmployee->getEmployeeTitle();
  echo '<br> Salary : Rp.'.$obEmployee->getEmployeeMonthlySalary();
  }
  getEmployeeProfile();

?>