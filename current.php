<?php

require_once ("savings.php");

class CurrentAccount extends SavingsAccount {
   
    /* Initializes account properties inside the constructor */

    function __construct($bankName, $customerName, $accountNumber) {
       parent::__construct($bankName, $customerName, $accountNumber);
        $this->withdrawalLimit = 0;
    }

    /**
     * Deposit given amount. Overrides method. No Interest added for deposits.
     * @param amount to deposit
     */

    public function deposit($amount) {
        $interest = 0.01 * $amount;

        $this->accountBalance = $this->accountBalance + $amount + $interest;
    }

        /**
     * Withdraw given amount from account, assuming sufficient account balance.
     * Overrides method.
     * @param amount to withdraw
     */

    public function withdraw($amount) {
        $enoughBalance = $amount <= $this->accountBalance - $this->minimumAccountBalance;
        
        if (!$enoughBalance) {
            if($amount < $this->withdrawalLimit) {
                $this->accountBalance = $this->accountBalance - $amount;

            } else {
                echo "insufficient funds " + $this->withdrawalLimit;
            }
        }
    }
}

?>