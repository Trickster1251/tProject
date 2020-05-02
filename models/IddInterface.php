<?php


namespace app\models;


interface IddInterface
{
    public function login(string $user);
    public function logout($user);


}