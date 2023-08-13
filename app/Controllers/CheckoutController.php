<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;

class CheckoutController extends BaseController
{

    protected $db;
    protected $security;
    private $model;
    protected $helpers = ['form'];
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->security = \Config\Services::security();
    }
    public function index()
    {
        if (session()->get("ss_id")) {
            return view("cart");
        } else {
            return view("login");
        }
    }
    public function create()
    {

        $request = request();

    $arr =[
        'total' => $request->getPost('grandtotal')

    ];
    dd($arr);
    }
}
