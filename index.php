<?php

declare(strict_types = 1);

include './includes/classes/Employee.php';
include './includes/classes/Pay.php';

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