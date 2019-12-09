<?php
class security
{
    /**
     * This is the optimal encryption function
     * @param $input -> String to be encrypted
     * @return string -> Encrypted version of the $input
     * @throws Exception -> Will throw exception
     */
    //this is a test
    function encrypt($input)
    {
        if (is_null(getenv("key"))) {
            $key = random_bytes(SODIUM_CRYPTO_SECRETBOX_KEYBYTES);
            putenv("key=$key");
        } else {
            $key = getenv("key");
        }
        $nonce = random_bytes(24); // 24 bytes

        $ciphertext = sodium_crypto_secretbox($input, $nonce, $key);
        return $encoded = base64_encode($nonce . $ciphertext);
    }

    /**
     * This is the optimal decryption function
     * @param $input -> The encoded string you want to decrypt.
     * @return string -> version of the $input
     */
    function decrypt($input)
    {
        try {
            $key = getenv("key");
            $decoded = base64_decode($input);

            $nonce = mb_substr($decoded, 0, SODIUM_CRYPTO_SECRETBOX_NONCEBYTES, '8bit');
            $ciphertext = mb_substr($decoded, SODIUM_CRYPTO_SECRETBOX_NONCEBYTES, null, '8bit');
            return $plaintext = sodium_crypto_secretbox_open($ciphertext, $nonce, $key);
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }
    }

    /**
     * This is the function for matching libsodium encryptions
     * @param $inputtedPassword
     * @param $savedPassword
     * @return bool
     */
    function isPasswordsAMatch($inputtedPassword, $savedPassword)
    {
        echo $inputtedPassword;

        if ($inputtedPassword === $savedPassword) {
            return true;
        }

        return false;
    }

    /**
     * This is the sub-optimal encryption form using OpenSSL
     * @param $input -> The string you want to encrypt
     * @return false|string -> Based on the result of the encryption process.
     */
    function openSSLEncrypt($input){
        // Store the cipher method
        $ciphering = "AES-128-CTR";

        // Use OpenSSl Encryption method
        $iv_length = openssl_cipher_iv_length($ciphering);
        $options = 0;

        // Non-NULL Initialization Vector for encryption
        $encryption_iv = '1234567891011121';

        // Store the encryption key
        $encryption_key = "GeeksforGeeks";

        // Use openssl_encrypt() function to encrypt the data
        $encryption = openssl_encrypt($input, $ciphering,
            $encryption_key, $options, $encryption_iv);

        // Display the encrypted string
        return $encryption;
    }

    /**
     * @param $encryption
     * @return false|string
     */
    function openSSLDecrypt($encryption){
        $options = 0;
        $ciphering = "AES-128-CTR";

        // Non-NULL Initialization Vector for decryption
        $decryption_iv = '1234567891011121';

        // Store the decryption key
        $decryption_key = "GeeksforGeeks";

        // Use openssl_decrypt() function to decrypt the data
        $decryption=openssl_decrypt ($encryption, $ciphering,
            $decryption_key, $options, $decryption_iv);

        // Display the decrypted string
        return $decryption;
    }

    function isPasswordsAMatchOpenSSL($inputtedPassword, $savedPassword)
    {
        echo $inputtedPassword;

        if ($inputtedPassword === $savedPassword) {
            return true;
        }

        return false;
    }

}

