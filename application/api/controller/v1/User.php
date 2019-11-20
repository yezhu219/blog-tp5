<?php


namespace app\api\controller\v1;
use app\api\model\User as userModel;

class User
{

    public function addUser() {
        $user = new userModel();
//        $data = input('post.');
//         $user->save($data);
         $res =  $user->addOne();
        return $res;
    }
    public function updateUser() {

    }
    public function delUser() {

    }
    public function  findUser() {
        $user = new userModel();
        $res = $user->findUser();
        return $res;
    }
}