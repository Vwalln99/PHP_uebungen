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
            echo "<p>Geschlecht: $gender</p>";
            echo "<p>Vorname: $firstName</p>";
            echo "<p>Nachname: $lastName</p>";
            echo "<p>Alter: $age</p>";
            echo "<p>Telefonnummer: $phone</p>";
            echo "<p>E-Mail: $email</p>";
            echo "<p>Straße: $street</p>";
            echo "<p>Postleitzahl: $zip</p>";
            echo "<p>Ort: $city</p>";
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