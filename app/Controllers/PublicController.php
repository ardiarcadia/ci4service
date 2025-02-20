<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Libraries\CryptoLib;

class PublicController extends BaseController
{
    public function index()
    {
        $data = [
            'success' => true,
            'data'      => 'Hello Codeigniter 4',
        ];

        return $this->response->setJSON($data);
    }

    public function authTesting()
    {
        $data = [
            'success' => true,
            'data'      => 'Testing API KEY Success !',
        ];

        return $this->response->setJSON($data);
    }

    public function generateKey()
    {
        $serverApiKey = "bzLzw84ImG5XpOzai";
        $libEncrypt = new CryptoLib();
        $encryptedclientApiKey = $libEncrypt->encrypt($serverApiKey);

        $data = [
            'success' => true,
            'API_KEY'      => $encryptedclientApiKey
        ];

        return $this->response->setJSON($data);
    }
}
