<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Database\Migrations\OrderItems;
use App\Models\OrderitemModel;
use App\Models\ProductModel;
use App\Models\OrderModel;

use CodeIgniter\API\ResponseTrait;

class CartController extends BaseController
{
    use ResponseTrait;
    protected $db;
    protected $security;
    private $model;
    protected $helpers = ['form'];

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->model = new OrderModel();
        $this->security = \Config\Services::security();
    }

    public function index()
    {
        if (session()->get("ss_id")) {
            $builder = $this->db->table('products');
            $builder->select('products.*,categories.name as catname,subcategories.name as subcatname,images.name as imgname');
            $builder->join('categories', 'categories.id = products.category_id', 'inner');
            $builder->join('subcategories', 'subcategories.id = products.subcategory_id', 'inner');
            $builder->join('images', 'images.product_id = products.id', 'inner');
            $data = $builder->get()->getResultArray();

            return $this->respond($data, 200);
        } else {
            return view("login");
        }
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

        return $this->respond($result, 200);
    }
    public function test()
    {
        $test = $this->model->findAll();
        dd($test);
    }

    public function checkout()
    {
        $request = service('request');
        $items = $request->getPost('orders');
    
        $arr = [
            'customer_id' => $request->getPost('ss_id'),
            'b_address' => $request->getPost('bAddress'),
            's_address' => $request->getPost('sAddress'),
            'total' => $request->getPost('grandtotal'),
            'discount' => $request->getPost('discount'),
            'comment' => $request->getPost('comment'),
            'status' => $request->getPost('status'),
        ];
    
        $this->model->db->transStart(); 
    
        try {
            $this->model->insert($arr);
            $invoiceId = $this->model->db->insertID();
    
            if ($invoiceId) {
                $orderitem = new OrderitemModel();
    
                foreach ($items as $item) {
                    $p_id = $item['pid'];
                    $p_price = $item['price'];
                    $qun = $item['quantity'];
    
                    $arr2 = [
                        'order_id' => $invoiceId,
                        'product_id' => $p_id,
                        'price' => $p_price,
                        'quantity' => $qun,
                    ];
    
                   
                    $this->model->db->table('order_details')->insert($arr2);
                }
    
                $this->model->db->transCommit();
                return $this->response->setJSON(['status' => 'success', 'message' => $invoiceId]);
            } else {
                $this->model->db->transRollback();  
                return $this->response->setJSON(['status' => 'error', 'message' => 'Failed to insert order.']);
            }
        } catch (\Exception $e) {
            $this->model->db->transRollback(); 
    
            return $this->response->setJSON(['status' => 'error', 'message' => 'An error occurred during checkout.']);
        }
    }
    
}
