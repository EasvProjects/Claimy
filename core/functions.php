<?php

class functions
{
    /**
     * @param $input -> String to be encrypted
     * @return string -> Encrypted version of the $input
     * @throws Exception -> Will throw exception
     */
    public function encrypt($input)
    {
        try {
            if (is_null(getenv("key"))) {
                $key = random_bytes(SODIUM_CRYPTO_SECRETBOX_KEYBYTES);
                putenv("key=$key");
            }

            $nonce = random_bytes(SODIUM_CRYPTO_SECRETBOX_NONCEBYTES);
            $ciphertext = sodium_crypto_secretbox($input, $nonce, $key);

            return $encoded = base64_encode($nonce . $ciphertext);
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }
    }

    /**
     * @param $input -> The encoded string you want to decrypt.
     * @return decrypted version of the $input
     */
    public function decrypt($input)
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

    public function isPasswordsAMatch($inputtedPassword, $savedPassword){
        if($inputtedPassword === $this->decrypt($savedPassword)){
            return true;
        }
        return false;
    }
}

