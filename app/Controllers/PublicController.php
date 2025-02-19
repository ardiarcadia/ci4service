<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

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
}
