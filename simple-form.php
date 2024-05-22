<?php
// Hier steht der Formular-Validierung-Code
declare(strict_types=1);
require 'validate.php';

$user = [
    'name' => '',
    'age' => '',
    'terms' => false,
];
$errors = [
    'name' => '',
    'age' => '',
    'terms' => '',
    'email' => '',
];

$info = '';
$filters = [
    'email' => FILTER_VALIDATE_EMAIL,
    'age' => [
        'filter' => FILTER_VALIDATE_INT,
        'options' => ['min_range' => 18, 'max_range' => 90],
    ],
    'terms' => FILTER_VALIDATE_BOOLEAN,
];
$filter['email'] = '';
$filter['age'] = '';
$filter['terms'] = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $filter = filter_input_array(INPUT_POST, $filters);
    $errors['email'] = $filter['email'] ? '' : 'Name must be between 3 and 50 characters.';
    $errors['age'] = $filter['age'] ? '' : 'Age must be between 18 and 90';
    $errors['terms'] = $filter['terms'] ? '' : 'You must agree to the terms and conditions';

    $user['email'] = $_POST['email'];
    $user['age'] = $_POST['age'];
    $user['terms'] = isset($_POST['terms']) && $_POST['terms'] == true;


    if (empty(array_filter($errors))) {
        $info = 'Form was submitted successfully';
    } else {
        $info = 'Form has errors, please correct the folowing fields';
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/pico.classless.min.css">
    <title>Document</title>
</head>

<body>
    <main>
        <?php echo "<pre> $info </pre>" ?>
        <form action="simple-form.php" method="POST">
            <label for="email">E-Mail
                <input type="text" id="email" name="email" placeholder="Your E-Mail" value="<?= e($filter['email']) ?>">
                <span style="color: red"><?= $errors['email'] ?></span>
            </label>
            <label for="age">Age
                <input type="text" id="age" name="age" placeholder="Your age" value="<?= e((string)$filter['age']) ?>">
                <span style="color: red"><?= $errors['age'] ?></span>
            </label>
            <label for="terms">I agree to the terms and conditions
                <input type="checkbox" id="terms" name="terms" <?= $filter['terms'] ? 'checked' : '' ?>>
                <span style="color: red"><?= $errors['terms'] ?></span>
            </label>
            <button type="submit">Send</button>
        </form>
    </main>
</body>

</html>