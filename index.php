<?php 
include('current.php');

$savings_account = new SavingsAccount('Ecobank', 'Wisdom', '2167543653636');
$current_account = new CurrentAccount('GCB', 'Wizzy', '4598759875696895');

echo 'Hi ' . $savings_account->getCustomer() . ', welcome to ' . $savings_account->getBank() . '<br>';
echo 'Hi ' . $current_account->getCustomer() . ', welcome to ' . $current_account->getBank() . '<br>';


echo $savings_account->getCustomer() . ', your savings account balance is : ' . $savings_account->getBalance() . '<br>';
echo $current_account->getCustomer() . ', your current account balance is : ' . $current_account->getBalance() . '<br>';

$savings_account->deposit(200);
echo $savings_account->getCustomer() . ', your savings account balance is : ' . $savings_account->getBalance() . '<br>';

$current_account->deposit(1000);
echo $current_account->getCustomer() . ', your current account balance is : ' . $current_account->getBalance() . '<br>';

$savings_account->withdraw(500);
$savings_account->withdraw(20);
echo $savings_account->getCustomer() . ', your savings account balance is : ' . $savings_account->getBalance() . '<br>';

$current_account->withdraw(300);
echo $current_account->getCustomer() . ', your current account balance is : ' . $current_account->getBalance() . '<br>';


echo $savings_account->getCustomer() . ', your savings account withdrawal limit is : ' . $savings_account->getLimit() . '<br>';
echo $current_account->getCustomer() . ', your current account withdrawal limit is : ' . $current_account->getLimit() . '<br>';


?>