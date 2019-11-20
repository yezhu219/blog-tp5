<?php


namespace app\api\model;


use think\Model;

class ArticleList extends Model
{
    protected $autoWriteTimestamp = 'datetime';
    public function getall() {

    }
    public function getOneById($id) {

    }
    public function addOne() {
        $data = input('post.');
        $res = $this-> save($data);
        return $res;
//        if($res) {
//            return false;
//        }else {
//            return $this->id;
//        }
    }
    public function delOne() {

    }

    public function updateOne() {

    }

}