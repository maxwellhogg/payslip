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

declare(strict_types = 1);
class Pay
{
    public  float   $starting_wage;
    public  float   $hours;
    public  float   $overtime;
    public  float   $ot_hours;
    public  float   $bonus;
    public  float   $bonus_wks;
    public  float   $tax;
    public  float   $nic;
    public  float   $student_loan;

    public function __construct
    (
        float   $starting_wage,
        float   $hours,
        float   $overtime,
        float   $ot_hours,
        float   $bonus,
        float   $bonus_wks,
        float   $tax,
        float   $nic,
        float   $student_loan,
    )
    {
        
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="shared.css">
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Company Payslip</title>
</head>
<body>
    
</body>
</html>