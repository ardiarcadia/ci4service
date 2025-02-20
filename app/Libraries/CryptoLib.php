<?php
namespace App\Libraries;

class CryptoLib
{
    private $key;
    private $iv;

    public function __construct() {
        $this->key = "6fa55bc3c634533240fd736f8ce9e87d"; // 32 karakter untuk AES-256
        $this->iv = "a5901236d186f237"; // 16 karakter IV
    }

    public function encrypt($text) {
        $encrypted = openssl_encrypt($text, 'AES-256-CBC', $this->key, OPENSSL_RAW_DATA, $this->iv);
        return base64_encode($encrypted);
    }

    public function decrypt($encryptedText) {
        $decoded = base64_decode($encryptedText);
        return openssl_decrypt($decoded, 'AES-256-CBC', $this->key, OPENSSL_RAW_DATA, $this->iv);
    }
}
