<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use CodeIgniter\Files\File;
use App\Models\SubategoryModel;
use CodeIgniter\API\ResponseTrait;

class SubcategoryController extends BaseController
{
    use ResponseTrait;
    protected $db;
    protected $security;
    private $model;
    protected $helpers = ['form'];
    public function __construct()
    {
        $this->model = new SubategoryModel();
        $this->db = \Config\Database::connect();
        $this->security = \Config\Services::security();
    }
    public function index()
    {
        
    }
    public function details($catid)
    {
        $data = [];
        $data['subcats'] = $this->db
            ->table('subcategories')
            ->select('id, name,image')
            ->where('category_id', $catid)
            ->get()->getResultArray();
            
            $data['products'] = $this->db
            ->table('products')
            ->select('products.*, images.name as image_name')
            ->join('images', 'images.product_id = products.id', 'left')
            ->where('products.category_id', $catid)
            ->get()
            ->getResultArray();
        
        return view("product/subcat", $data);
    }
}
