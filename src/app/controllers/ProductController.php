<?php
namespace MyApp\Controllers;

use MyApp\Models\Products;
use Phalcon\Mvc\Controller;

class ProductController extends Controller
{
    public function indexAction()
    {
        // Redrect To View
    }
    public function addAction()
    {
        $product = new Products();
        $product->assign(
            $this->request->getPost(),
            [
                'name',
                'email',
                'password',
            ]
        );
        $done = $product->save();
        if ($done) {
            $this->response->redirect('product');
        }
    }
}