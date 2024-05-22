<?php

class Employee
{
    public  string  $forename;
    public  string  $surname;
    public  string  $department;
    public  string  $employee_num;
    public  string  $email;
    public  string  $contact_num;

    public function __construct
    (
        string  $forename,
        string  $surname,
        string  $department,
        string  $employee_num,
        string  $email,
        string  $contact_num,
    )
    {
        $this->forename         =   $forename;
        $this->surname          =   $surname;
        $this->department       =   $department;
        $this->employee_num     =   $employee_num;
        $this->email            =   $email;
        $this->contact_num      =   $contact_num;
    }

    public function getFullName()
    {
        return $this->forename . ' ' . $this->surname;
    }
}

?>