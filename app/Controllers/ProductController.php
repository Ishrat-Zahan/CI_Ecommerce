<?php

namespace App\Controllers;

use App\Models\ProductModel;
use CodeIgniter\Files\File;
use App\Models\CategoryModel;
use CodeIgniter\API\ResponseTrait;
use App\Controllers\BaseController;

class ProductController extends BaseController
{

    use ResponseTrait;
    protected $db;
    protected $security;
    private $model;
    protected $helpers = ['form'];
    public function __construct()
    {
        $this->model = new ProductModel();
        $this->db = \Config\Database::connect();
        $this->security = \Config\Services::security();
    }
    public function index()
    {
        $cats = $this->db
            ->table('categories')
            ->select('id, name,image')
            ->get()->getResultArray();

        $subcats = $this->db
            ->table('subcategories')
            ->select('id, name')
            ->get()->getResultArray();

        $builder = $this->db->table('products');
        $builder->select('products.*,categories.name as catname,subcategories.name as subcatname,images.name as imgname,categories.image as catimg');
        $builder->join('categories', 'categories.id = products.category_id', 'inner');
        $builder->join('subcategories', 'subcategories.id = products.subcategory_id', 'inner');
        $builder->join('images', 'images.product_id = products.id', 'inner');
        $data = $builder->get()->getResultArray();
        // dd($data);


        $builder = $this->db->table('products');
        $builder->select('products.*, categories.name as catname, subcategories.name as subcatname, images.name as imgname, categories.image as catimg');
        $builder->join('categories', 'categories.id = products.category_id', 'inner');
        $builder->join('subcategories', 'subcategories.id = products.subcategory_id', 'inner');
        $builder->join('images', 'images.product_id = products.id', 'inner');
        $builder->orderBy('products.id', 'desc'); 
        $builder->limit(4); 
        $data2 = $builder->get()->getResultArray();
        // dd($data2);


        return view("layouts/content", [
            'product' => $data,
            'latest' => $data2,
            'subcats' => $subcats,
            'cats' => $cats,
            'security' => $this->security
        ]);
    }


    public function details($id)
    {
        $builder = $this->db->table('products');
        $builder->select('products.*, images.name AS image_name');
        $builder->join('images', 'images.product_id = products.id', 'left');
        $builder->where('products.id', $id);
        $result = $builder->get()->getRow();

        if ($result !== null) {
            $info = get_object_vars($result);
        } else {

            $info = null;
        }
        return view('single', compact('info'));
    }


    public function cart()
    {
        return view("cart");
    }
}
