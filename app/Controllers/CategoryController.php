<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use App\Models\CategoryModel;

class CategoryController extends BaseController
{
    use ResponseTrait;
    protected $db;
    protected $security;
    private $model;
    protected $helpers = ['form'];
    public function __construct()
    {
        $this->model = new CategoryModel();
        $this->db = \Config\Database::connect();
        $this->security = \Config\Services::security();
    }
    public function index()
    {
        
    }
    public function details($subcatid)
    {
        $data = [];
        $data['products'] = $this->db
            ->table('products')
            ->select('products.*, images.name as image_name')
            ->join('images', 'images.product_id = products.id', 'left')
            ->where('products.subcategory_id', $subcatid)
            ->get()
            ->getResultArray();
            // dd($data);
        
        return view("product/category", $data);

    }
}
