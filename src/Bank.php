<?php

namespace View\Poo2;

class Bank {
    private string $name;
    private array $accounts = [];

    public function __construct(string $name){
        $this->name = $name;

    }

    public function addAccount(BankAccount $account): void{
        $this->accounts[] = $account;
    }

    public function getAccounts(): array{
        return $this->accounts;
    }

    //BankAccount et une union de type, ce qui veux dire que la methode retourne un bankAccount ou un null
    public function findAccountByNumber(string $accountNumber) : ?BankAccount{
        foreach($this->accounts as $account){
            if ($account -> getAccountNumber() === $accountNumber){
               return $account; 
            }
            
        }return null;
    }
}