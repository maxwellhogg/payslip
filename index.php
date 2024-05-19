<?php
declare(strict_types = 1);
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
        $this->starting_wage    =   $starting_wage;
        $this->hours            =   $hours;
        $this->overtime         =   $overtime;
        $this->ot_hours         =   $ot_hours;
        $this->bonus            =   $bonus;
        $this->bonus_wks        =   $bonus_wks;
        $this->tax              =   $tax;
        $this->nic              =   $nic;
        $this->student_loan     =   $student_loan;
    }

    public function setStartingWage()
    {
        $this->starting_wage *= $this->hours;
        return number_format($this->starting_wage, 2, '.', '');
    }

    public function setOvertime()
    {
        $this->overtime *= $this->ot_hours;
        return number_format($this->overtime, 2, '.', '');
    }

    public function setBonus()
    {
        $this->bonus *= $this->bonus_wks;
        return number_format($this->bonus, 2, '.', '');
    }

    public function setTax()
    {
        $top_line = $this->starting_wage + $this->overtime + $this->bonus;
        return number_format($top_line * $this->tax, 2, '.', '');
    }

    public function setNatIns()
    {
        $top_line = $this->starting_wage + $this->overtime + $this->bonus;
        return number_format($top_line * $this->nic, 2, '.', '');
    }

    public function setStudentLoan()
    {
        $top_line = $this->starting_wage + $this->overtime + $this->bonus;
        return number_format($top_line * $this->student_loan, 2, '.', '');
    }

    public function setTotalWage()
    {
        $top_line = $this->starting_wage + $this->overtime + $this->bonus;
        $deduct_tax = $top_line * $this->tax;
        $deduct_nic = $top_line * $this->nic;
        $deduct_sl = $top_line * $this->student_loan;
        return number_format($top_line - $deduct_tax - $deduct_nic - $deduct_sl, 2, '.', '');
    }
}

$employee = new Employee
(
    'Maxwell',               // $forename
    'Hogg',                  // $surname
    'Warehouse',             // $department
    '230978',                // $employee_num
    'maxy.hogg@email.com',   // $email
    '07656454443',           // $contact_num
);

$pay = new Pay
(
    15.44,                   // $starting_wage
    40,                      // $hours
    18.96,                   // $overtime
    10,                      // $ot_hours
    20,                      // $bonus
    0,                       // $bonus_wks
    20 / 100,                // $tax
    5 / 100,                 // $nic
    2 / 100,                 // $student_loan
);



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
    <p>Starting Wage:       £<?= $pay->setStartingWage() ?></p>
    <p>Overtime:            £<?= $pay->setOvertime() ?></p>
    <p>Bonus:               £<?= $pay->setBonus() ?></p>
    <p>Tax:                 £<?= $pay->setTax() ?></p>
    <p>National Insurance:  £<?= $pay->setNatIns() ?></p>
    <p>Student Loan:        £<?= $pay->setStudentLoan() ?></p>
    <p>Total Pay:           £<?= $pay->setTotalWage() ?></p>
</body>
</html>