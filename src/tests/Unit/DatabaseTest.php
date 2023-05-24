<?php

declare(strict_types=1);

namespace Tests\Unit;

use MyApp\Controllers\UserController;
use MyApp\Models\Users;
use MyApp\Models\Products;

class DatabaseTest extends AbstractUnitTest
{
    public function dataProvider()
    {
        return [
            ["Satyam", "sa@mail.com", "123"],
            ["Anuj", "aj@mail.com", "456"],
            ["Ayush", "ay@mail.com", "789"],
        ];
    }

    // /**
    //  * @dataProvider dataProvider
    // */

    public function testAddUser()
    {
        $user = new Users();
        $user->name = 'Satyam';
        $user->email = 's@s.com';
        $user->password = '123';
        $success = $user->save();
        $this->assertEquals($success, true);
    }

    public function testUpdateUser()
    {
        $success = UserController::updateAction(10, "Bajpai", "b@b.com", "123");
        $this->assertEquals($success, true);
    }

    public function testDeleteUser()
    {
        $success = UserController::deleteAction(1);
        $this->assertEquals($success, true);
    }

    public function testAddProduct()
    {
        $product = new Products();
        $product->name = 'OnePlus';
        $product->price = 60000;
        $product->type = 'Electronics';
        $product->quantity = 99;
        $success = $product->save();
        $this->assertEquals($success, true);
    }

    public function passwordcheck()
    {
        $password = 'Satyam@123';
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);

        if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
            $result = true;
        } else {
           $result = false;
        }
        $this->assertEquals($result, true);
    }
}
