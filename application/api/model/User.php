<?php


namespace app\api\model;


use think\Model;

class User extends Model
{
    protected $autoWriteTimestamp = 'datetime';
    public  static function addOne() {
         $data = input('post.');
         $res = User::create($data);

        return $res;
    }
    public  function findUser() {
        $id = input('post.id');
        $res = User::where('id',$id)->find();
        return $res;
    }
}