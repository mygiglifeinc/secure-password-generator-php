# Secure Password Generator (PHP)

> A PHP script that generates a secure password based on user-defined length.

This repository contains a PHP script that generates a secure password based on the length specified by the user. The generated password includes a combination of uppercase letters, lowercase letters, numbers, and special characters, providing a high level of security.

## Usage

1. Clone the repository or download the PHP script file.

2. Ensure you have PHP installed on your system.

3. Open a terminal or command prompt and navigate to the directory containing the PHP script.

4. Run the script using the following command:

   ```shell
   php generate_password.php
   
You will be prompted to enter the desired length of the password. Provide a positive numeric value and press Enter.

The script will generate a secure password based on the specified length and display it in the terminal.

# Security Considerations
The script uses random_int() for generating random numbers, which provides better cryptographic strength compared to other random number generators in PHP.

Ensure that you securely handle and store the generated passwords to maintain their confidentiality and integrity.

Customize the character set in the generateSecurePassword function to suit your specific password requirements. For example, you may remove or add characters to the $characterSet variable.

# License
This project is licensed under the MIT License.
