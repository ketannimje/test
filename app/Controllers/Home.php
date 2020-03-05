<?php

namespace App\Controllers;

class Home extends BaseController {

    public function index() {
        return view('welcome_message');
    }

    public function test() {
        if (!$this->request->isSecure()) {
            $this->forceHTTPS();
        }
    }

    public function hello() {

        $db = \Config\Database::connect();
        $db = db_connect();
        echo $db;
        return view('welcome_message');
    }

//    public function _remap($method, ...$params) {
//        if ($method === 'test') {
//            $this->$method();
//        } else {
//            $this->default_method();
//        }
//
//        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
//    }
}
