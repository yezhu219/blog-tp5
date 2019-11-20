<?php


namespace app\api\model;


use think\Model;

class ArticleList extends Model
{
    protected $autoWriteTimestamp = 'datetime';


    public function setAuthorImgAttr($value) {
        return $value?$value:'/static/img/user-default.jpg';
    }

    public function setDesImgAttr($value) {
        return $value?$value:'/static/img/des-default.jpg';
    }

    public function setIsDelAttr($value) {
        return $value?$value:'false';
    }

    public function setTagAttr($value)
    {
        return implode(',',$value);
    }


        //    取值操作
    public function getTagAttr($value)
    {
        return explode(',',$value);
    }
    public function getDesImgAttr($value) {
        return config('setting.host').$value;
    }
    public function getAuthorImgAttr($value) {
        return config('setting.host').$value;
    }
}