<?php

class SavingsAccount {
    /*
    Account properties 
    */
    private $bankName;
    private $accountNumber;
    private $customerName;
    protected $accountBalance;
    protected $minimumAccountBalance;
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

    /**
     * Return name of the customer
     */

    public function getCustomer() {
        return $this->customerName;
    }

    /**
     * Return the bank name.
     */

    public function getBank() {
        return $this->bankName;
    }

    /**
     * Return the account identifying number.
     */
    
    public function getAccount() {
        return $this->accoutNumber;
    }

    /**
     * Return withdrawal limit
     */

    public function getLimit() {
        return $this->withdrawalLimit;
    }

    
    /**
     * Return current balance.
     */

    public function getBalance() {
        return $this->accountBalance;
    }

    /**
     * Deposit given amount. Interest added for each deposit.
     * @param amount to deposit
     */

    public function deposit($amount) {
        $interest = 0.01 * $amount;

        $this->accountBalance = $this->accountBalance + $amount + $interest;
    }

     /**
     * Withdraw given amount from account, assuming sufficient account balance and withdrawal limit not exceeded.
     * @param amount to withdraw
     * This function is more efficient than that below
     * 
     */
      
    public function withdraw($amount) {
        if($amount > $this -> withdrawalLimit) {
            // withdrawal limit exceeded
            echo 'Hi ' . $this->customerName . ', you cannot withdraw more than ' .$this -> withdrawalLimit . 'at a go.';
            
            return -1;
        }

        $availableBalance = $this -> getBalance() - $this -> withdrawalLimit;

        if($amount <= $availableBalance){ //check if enough balance for withdrawal
            $this -> accountBalance = $this -> accountBalance - $amount;

            // withdrawal success
            return 1;
        } else{
            // insuficient funds
            return 0;
        }

    }

   /*                                                         
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
*/
}

?>