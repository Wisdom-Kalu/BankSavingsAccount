<?php

class SavingsAccount {
    /*
    Account properties 
    */
    private $bankName;
    private $accountNumber;
    private $customerName;
    private $accountBalance;
    private $minimumAccountBalance;
    protected $withdrawalLimit;

    /* Initializes account properties inside the constructor */

    function __construct($bankName, $customerName, $accountNumber) {
        $this->bankName = $bankName;
        $this->customerName = $customerName;
        $this->accountNumber = $accountNumber;
        $this->accountBalance = 0;
        $this->minimumAccountBalance = 50;
        $this->withdrawalLimit = 1000;
    }

    public function getCustomer() {
        return $this->customerName;
    }

    public function getBank() {
        return $this->bankName;
    }
    
    public function getAccount() {
        return $this->accoutNumber;
    }

    public function getLimit() {
        return $this->withdrawalLimit;
    }

    public function getBalance() {
        return $this->accountBalance;
    }

    public function deposit($amount) {
        $interest = 0.01 * $amount;

        $this->accountBalance = $this->accountBalance + $amount + $interest;
    }

    public function withdraw($amount) {
        $enoughBalance = $amount <= $this->accountBalance - $this->minimumAccountBalance;
        
        if (!$enoughBalance) {
            if($amount < $this->withdrawalLimit) {
               echo " account balance is " . $this->accountBalance = $this->accountBalance - $amount;

            } else {
                echo "insufficient funds "; //+ $this->withdrawalLimit;
            }
        }
    }
}

?>