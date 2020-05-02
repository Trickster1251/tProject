<?php


namespace app\models;
use app\models\Users;

class UserTest implements IddInterface
{

    public $name;

    public static function findOne(int $id)
    {
        $realModel = Users::findOne($id);
//        $userTest = new UserTest();
        $userTest = new self;

        $userTest->name = $realModel->name;
        return $userTest;

    }

    public function login(string $name)
    {

        var_dump($name);
    }

    public function logout($user)
    {
        // TODO: Implement logout() method.
    }
}