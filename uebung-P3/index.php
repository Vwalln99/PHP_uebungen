<?php
spl_autoload_register(function ($class) {
    include $class . ".php";
});

$microsoft = new Stock(id: '1', label: 'MSFT', price: 240.0,);
$apple = new Stock(id: '2', label: 'AAPL', price: 304.0,);
$paypal = new Stock(id: '3', label: 'PYPL', price: 102.0,);
$nvidia = new Stock(id: '4', label: 'NVDA', price: 756.0,);

$depot = new Depot([], balance: 1000.0, iban: 'AT124567890', owner: 'Lucia Ludwig');
$depot->deposit(amount: 4000.0);
$depot->buyStock($microsoft, amount: 10);
$depot->buyStock($apple, amount: 5);
$depot->buyStock($paypal, amount: 2);
$depot->buyStock($nvidia, amount: 1);

include 'header.php';
?>
<main style="padding: 0;">
    <table>
        <tr>
            <th>Label</th>
            <th>Price/Piece</th>
            <th>Amount</th>
            <th>Value</th>
        </tr>
        <?php foreach ($depot->getStocks() as $stock) : ?>
            <tr>
                <td><?= $stock->label ?></td>
                <td><?= $stock->price ?></td>
                <td><?= $stock->amount ?></td>
                <td><?= $stock->price * $stock->amount ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <tr>
        <td>Balance: </td>
        <td></td>
        <td></td>
        <td><?= $depot->balance ?></td>
    </tr>
</main>

<?php include 'footer.php'; ?>