<?php
namespace MyApp\Controllers;

use MyApp\Models\Users;
use Phalcon\Mvc\Controller;

class UserController extends Controller
{
    /**
     * @param string $name
     * @param string $mail
     * @param string $password
     */
    public function addAction(string $name, string $mail, string $password): bool
    {
        $user = new Users();
        $user->name = $name;
        $user->email = $mail;
        $user->password = $password;

        return $user->save();
    }


    // delete by id
    /**
     * @param int $id
     */
    public function deleteAction(int $id) {
        $user = new Users();
        $curr = $user::findFirst(['id' => $id]);
        return $curr -> delete();
    }

    // update user details
    /**
     * @param int $id
     * @param string $name
     * @param string $mail
     * @param string $password
     */

    public function updateAction(int $id, string $name, string $mail, string $password) {
        $user = new Users();
        $curr = $user::findFirst(['id' => $id]);
        $curr -> name = $name;
        $curr -> mail = $mail;
        $curr -> password = $password;
        return $curr->save();
    }

    
}
