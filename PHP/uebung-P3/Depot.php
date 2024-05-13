<?php

declare(strict_types=1);

class Depot
{
    public function __construct(
        private array $stocks = [],
        public float $balance = 0.0,
        public string $iban = "",
        public string $owner = "",
    ) {
    }

    public function deposit(float $amount): void
    {
        $this->balance += $amount;
    }

    public function getStocks(): array
    {
        return $this->stocks;
    }

    public function buyStock(object $stock, int $amount): void
    {
        $price = $stock->price * $amount;
        if ($this->balance >= $price) {
            $this->balance -= $price;
            $stock->amount += $amount;
            $this->stocks[$stock->label] = $stock;
        }
    }

    public function sellStock(string $label, int $amount): void
    {
        $stock = $this->stocks[$label];
        if (!isset($stock)) {
            return;
        }
        if ($stock->amount >= $amount) {
            $stock->amount -= $amount;
            $this->balance += $stock->price * $amount;
        }
    }
    public static function fromArray(array $data): Depot
    {
        return new Depot(

            (array) $data["stocks"],
            (float) ($data["balance"]),
            (string) ($data["iban"]),
            (string) ($data["owner"]),
        );
    }
}

$data = [
    "balance" => 3000.00,
    'iban' => 'AT0987654321',
    "owner" => "Lukas Ludwig",
    'stocks' => [
        ['label' => 'MSFT', 'price' => 240.0, 'amount' => 10],
        ['label' => 'APPL', 'price' => 304.0, 'amount' => 5],
        ['label' => 'PYPL', 'price' => 102.0, 'amount' => 2],
        ['label' => 'NVDA', 'price' => 756.0, 'amount' => 1],
    ]
];

$my_depot = Depot::fromArray($data);
var_dump($my_depot);
