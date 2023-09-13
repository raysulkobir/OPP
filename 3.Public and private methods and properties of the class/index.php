<?php
    class Fund{
        public $fund;

        function __construct($interestFund=0){
            $this->fund = $interestFund;
        }

        function addFund($money){
            $this->fund += $money;
        }

        function deductFund($money){
            $this->fund -= $money;
        }

        function getTotalFund(){
            echo "Total fund: {$this->fund}";
        }
    }

$f = new Fund(25000);
$f->addFund(30000);
$f->deductFund(40000);
$f->getTotalFund( );

