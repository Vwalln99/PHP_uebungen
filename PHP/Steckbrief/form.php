<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Steckbrief Formular</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php
    require 'form_functions.php';

    $gender = $firstName = $lastName = $age = $phone = $email = $street = $zip = $city = "";
    $genderErr = $firstNameErr = $lastNameErr = $ageErr = $phoneErr = $emailErr = $streetErr = $zipErr = $cityErr = $imageErr = "";
    $valid = true;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valid = true;

        list($gender, $genderErr, $valid) = validate_gender($_POST["gender"], $valid);
        list($firstName, $firstNameErr, $valid) = validate_string($_POST["firstName"], "Vorname ist erforderlich", $valid);
        list($lastName, $lastNameErr, $valid) = validate_string($_POST["lastName"], "Nachname ist erforderlich", $valid);
        list($age, $ageErr, $valid) = validate_age($_POST["age"], $valid);
        list($phone, $phoneErr, $valid) = validate_phone($_POST["phone"], $valid);
        list($email, $emailErr, $valid) = validate_email($_POST["email"], $valid);
        list($street, $streetErr, $valid) = validate_string($_POST["street"], "Straße inkl. Hausnummer ist erforderlich", $valid);
        list($zip, $zipErr, $valid) = validate_string($_POST["zip"], "Postleitzahl ist erforderlich", $valid);
        list($city, $cityErr, $valid) = validate_string($_POST["city"], "Ort ist erforderlich", $valid);
        list($imageErr, $valid) = validate_image($_FILES["image"], $valid);

        echo "<h2>Steckbrief</h2>";
        if ($valid) {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $_FILES["image"]["name"])) {
                echo "<p class='image'><img src='uploads/" . $_FILES["image"]["name"] . "' alt='Bild der Person' style='max-width:200px;'></p>";
            } else {
                echo "<p>Fehler beim Hochladen des Bildes.</p>";
            }
            echo '<pre>';
            echo "<p>Vorname:" . "\t" . "\t" . "\t" . "\t" . " $firstName</p>";
            echo '</pre>';
            echo '<pre>';
            echo "<p>Nachname: " . "\t" . "\t" . "\t" . "\t" . " $lastName</p>";
            echo '</pre>';
            echo '<pre>';
            echo "<p>Alter: " . "\t" . "\t" . "\t" . "\t" . "\t" . " $age</p>";
            echo '</pre>';
            echo '<pre>';
            echo "<p>Geschlecht:" . "\t" . "\t" . "\t" . "\t" . " $gender</p>";
            echo '</pre>';
            echo '<pre>';
            echo "<p>Telefonnummer: "  . "\t" . "\t" . "\t" . " $phone</p>";
            echo '</pre>';
            echo '<pre>';
            echo "<p>E-Mail: " . "\t" . "\t" . "\t" . "\t" . " $email</p>";
            echo '</pre>';
            echo '<pre>';
            echo "<p>Straße: " . "\t" . "\t" . "\t" . "\t" . " $street</p>";
            echo '</pre>';
            echo '<pre>';
            echo "<p>Postleitzahl: "  . "\t" . "\t" . "\t" . " $zip</p>";
            echo '</pre>';
            echo '<pre>';
            echo "<p>Ort: " . "\t" . "\t" . "\t" . "\t" . "\t" . " $city</p>";
            echo '</pre>';
            $formclass = 'hidden';
        } else {
            $formclass = '';
        }
    }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data" class="<?php echo $formclass; ?>">

        <label for="image">Profilbild:</label>
        <input type="file" name="image">
        <span class="error">* <?php echo $imageErr; ?></span>
        <br><br>

        <label for="gender">Geschlecht:</label>
        <input type="radio" name="gender" value="männlich" <?php if ($gender == "männlich") echo "checked"; ?>> Männlich
        <input type="radio" name="gender" value="weiblich" <?php if ($gender == "weiblich") echo "checked"; ?>> Weiblich
        <span class="error">* <?php echo $genderErr; ?></span>
        <br><br>

        <label for="firstName">Vorname:</label>
        <input type="text" name="firstName" value="<?php echo $firstName; ?>">
        <span class="error">* <?php echo $firstNameErr; ?></span>
        <br><br>

        <label for="lastName">Nachname:</label>
        <input type="text" name="lastName" value="<?php echo $lastName; ?>">
        <span class="error">* <?php echo $lastNameErr; ?></span>
        <br><br>

        <label for="age">Alter:</label>
        <input type="text" name="age" value="<?php echo $age; ?>">
        <span class="error">* <?php echo $ageErr; ?></span>
        <br><br>

        <label for="phone">Telefonnummer:</label>
        <input type="text" name="phone" value="<?php echo $phone; ?>">
        <span class="error">* <?php echo $phoneErr; ?></span>
        <br><br>

        <label for="email">E-Mail:</label>
        <input type="text" name="email" value="<?php echo $email; ?>">
        <span class="error">* <?php echo $emailErr; ?></span>
        <br><br>

        <label for="street">Straße inkl. Hausnummer:</label>
        <input type="text" name="street" value="<?php echo $street; ?>">
        <span class="error">* <?php echo $streetErr; ?></span>
        <br><br>

        <label for="zip">Postleitzahl:</label>
        <input type="text" name="zip" value="<?php echo $zip; ?>">
        <span class="error">* <?php echo $zipErr; ?></span>
        <br><br>

        <label for="city">Ort:</label>
        <input type="text" name="city" value="<?php echo $city; ?>">
        <span class="error">* <?php echo $cityErr; ?></span>
        <br><br>

        <input type="submit" value="Absenden">
    </form>

</body>

</html>