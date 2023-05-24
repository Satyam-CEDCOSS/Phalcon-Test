<?php
namespace MyApp\Controllers;

use Phalcon\Mvc\Controller;
use MyApp\Models\Users;

class IndexController extends Controller
{
    public function indexAction()
    {
        // Redrect To View
    }
    public function checkAction()
    {
        $sql = 'SELECT * FROM users WHERE email = :email: AND password = :password:';
        $query = $this->modelsManager->createQuery($sql);
        // $user = $query->execute(
        //     [
        //         'email' => $_POST['email'],
        //         'password' => $_POST['password'],
        //     ]
        // );
        $this->response->redirect('product');
    }

    /**
     * @param int $a
     * @param int $b
     */
    public function addAction(int $a, int $b): int
    {
        return $a + $b;
    }
    
}
