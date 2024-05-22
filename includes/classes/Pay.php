<?php

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

?>
