<?php

namespace View\Poo2;

class BankAccount {
    private string $owner;

    private string $accountNumber;

    private float $balance;

    public function __construct(string $owner, string $accountNumber, float $initBalance = 0){
        $this->owner = $owner;
        $this->accountNumber = $accountNumber;
        $this->balance = $initBalance;
    }

    /**
     * Get the value of owner
     */ 
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set the value of owner
     *
     * @return  self
     */ 
    public function setOwner($owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get the value of accountNumber
     */ 
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * Get the value of balance
     */ 
    public function getBalance()
    {
        return $this->balance;
    }
    /**
     * Déposer l'argent sur le compte
     */ 
    public function deposit(float $amount) : void{
        if ($amount > 0){
            $this->balance += $amount;

        }else{
            throw new \InvalidArgumentException("La valeur ne peut pas etre négatif");
        }
    }

        /**
     * Débiter l'argent sur le compte
     */ 
    public function withdraw(float $amount) : void{
        if ($amount <= 0){
            throw new \InvalidArgumentException("La valeur ne peut pas etre négatif");
        }
        if ($amount > $this->balance){
            throw new \RuntimeException("Fond insufisant");
        }
           $this->balance -= $amount; 
        } 
          /**
     * Virement de l'argent de ce compte a un autre
     */ 
    public function transfer(float $amount, BankAccount $toAccount){
            if ($amount <= 0){
                throw new \InvalidArgumentException("La virement ne peut pas etre négatif");
            }$this->withdraw($amount);
            $toAccount->deposit($amount);
    }
        
    }
