<?php

function validate_gender($gender, $valid)
{
    if (empty($gender)) {
        return [null, "Geschlecht ist erforderlich", false];
    }
    return [$gender, "", $valid];
}

function validate_string($input, $errorMsg, $valid)
{
    if (empty($input)) {
        return [null, $errorMsg, false];
    }
    return [$input, "", $valid];
}

function validate_age($age, $valid)
{
    if (empty($age) || !filter_var($age, FILTER_VALIDATE_INT) || $age < 12 || $age > 100) {
        return [null, "Alter muss zwischen 12 und 100 liegen", false];
    }
    return [$age, "", $valid];
}

function validate_phone($phone, $valid)
{
    if (empty($phone) || !preg_match("/^\+?[0-9]+$/", $phone)) {
        return [null, "Ungültige Telefonnummer", false];
    }
    return [$phone, "", $valid];
}

function validate_email($email, $valid)
{
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return [null, "Ungültige E-Mail-Adresse", false];
    }
    return [$email, "", $valid];
}

function validate_image($file, $valid)
{
    if ($file["error"] != 0) {
        return ["Bild ist erforderlich", false];
    }

    $allowed = ["jpg" => "image/jpeg", "png" => "image/png"];
    $filename = $file["name"];
    $filetype = $file["type"];
    $filesize = $file["size"];

    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if (!array_key_exists($ext, $allowed) || !in_array($filetype, $allowed)) {
        return ["Nur JPG und PNG Dateien sind erlaubt", false];
    } elseif ($filesize > 4 * 1024 * 1024) {
        return ["Dateigröße darf maximal 4MB betragen", false];
    }

    return ["", $valid];
}
