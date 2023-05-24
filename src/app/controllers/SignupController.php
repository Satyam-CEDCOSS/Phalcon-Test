<?php
namespace MyApp\Controllers;

use MyApp\Models\Users;
use Phalcon\Mvc\Controller;

class SignupController extends Controller
{
    public function indexAction()
    {
        // Redrect To View
    }
    public function addAction()
    {
        $user = new Users();
        $user->assign(
            $this->request->getPost(),
            [
                'name',
                'email',
                'password',
            ]
        );
        $done = $user->save();
        if ($done) {
            $this->response->redirect('/');
        }
    }
}