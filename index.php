<?php

require_once "vendor/autoload.php";

use View\Poo2\Bank;
use View\Poo2\BankAccount;

$bank = new Bank('EscrocBanque');


$compteA = new BankAccount("Jupiter Joe", "1845684684254688", "10000");
$compteB = new BankAccount("Ollie la Griffe", "625858458468386832", "1000000000000");

$bank->addAccount($compteA);
$bank->addAccount($compteB);

$compteARechercher = $bank->findAccountByNumber(625858458468386832);
echo $compteARechercher->getOwner()."<br>";

$compteA->withdraw(47.1);
echo "Le compte de " . $compteA->getOwner() . " a un solde de " . $compteA->getBalance() ." de plumes <br>";

$compteB->transfer(18546.2, $compteA);
echo "Apres une enieme defaite Olllie La Griffe s'est fait s'aisir par Jupiter Joe <br>";
echo "Le compte de " . $compteA->getOwner() . " a un solde de " . $compteA->getBalance() ." de plumes <br>";
echo "Le compte de " . $compteB->getOwner() . " a un solde de " . $compteB->getBalance() ." de plumes <br>";