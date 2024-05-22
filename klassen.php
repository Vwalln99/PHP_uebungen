
<?php
class Costumer
{
    public string $forename;
    public string $surname;
    public string $email;
    public string $password;
}

class BankAccount
{
    public string $accountNumber;
    public string $type;
    public float $balance = 0;

    public function deposit(float $amount)
    {
        $this->balance += $amount;
        return $this->balance;
    }

    public function withdraw(string $amount)
    {
        $this->balance -= $amount;
        return $this->balance;
    }
}

$costumer = new Costumer();
$account = new BankAccount();
$bank_account = new BankAccount();

$costumer->forename = "John";
$costumer->surname = "Doe";
$account->balance = 10000.00;


$bank_account->deposit(amount: 1200);
echo $bank_account->balance . "<br>";

$bank_account->withdraw(amount: 500);
echo $bank_account->balance . "<br>";


echo '<div style="padding: 20px; backgrund-color: #afbbc4; border-radius: 5px; width: fit-content ">';
echo "Name: $costumer->forename $costumer->surname <br>";
echo "Balance: € $account->balance </div>";
