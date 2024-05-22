<?php

include("header.php");
require_once("account.php");
$giro = new Bank_Account(account_number: "123456", type: "Giro", balance: 1000.00);
$savings = new Bank_Account(account_number: "654321", type: "Savings", balance: 5000.00);
?>

<main style="padding: 0;">
    <table>
        <tr>
            <th>Date</th>
            <th><?= $giro->type ?></th>
            <th><?= $savings->type ?></th>
        </tr>
        <tr>
            <th>19. Sept.</th>
            <th><?= $giro->balance ?></th>
            <th><?= $savings->balance ?></th>
        </tr>
        <tr>
            <th>11. Nov.</th>
            <th><?= $giro->deposit(amount: 800) ?></th>
            <th><?= $savings->withdraw(amount: 1233) ?></th>
        </tr>
        <tr>
            <th>15. Nov.</th>
            <th><?= $giro->withdraw(amount: 1455) ?></th>
            <th><?= $savings->deposit(amount: 657) ?></th>
        </tr>
    </table>
</main>

<?php include("footer.php"); ?>