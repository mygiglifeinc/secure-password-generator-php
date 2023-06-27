<?php

function generateSecurePassword($length) {
    // Define the character set for the password
    $characterSet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()';

    // Get the total length of the character set
    $characterSetLength = strlen($characterSet);

    // Initialize an empty password string
    $password = '';

    // Generate random characters to build the password
    for ($i = 0; $i < $length; $i++) {
        // Generate a random index within the character set
        $randomIndex = random_int(0, $characterSetLength - 1);

        // Append the random character to the password string
        $password .= $characterSet[$randomIndex];
    }

    return $password;
}

// Prompt the user for the desired password length
$validLength = false;
while (!$validLength) {
    $length = readline("Enter the desired password length: ");
    if (is_numeric($length) && $length > 0) {
        $validLength = true;
    } else {
        echo "Invalid length. Please enter a positive numeric value.\n";
    }
}

// Generate a secure password with the specified length
$password = generateSecurePassword($length);

// Output the generated password
echo "Generated password: " . $password . "\n";
