<?php
/**
 * Created by : yezhu219
 * User: yezhu219
 * Date: 2019/11/18
 * Time: 21:03
 */

namespace app\api\model;


use think\Model;

class Tag extends Model
{
    public static function getAll() {
        return Tag::all();
    }

//    public static function addOne() {
//        $req = input('post.');
//        return Tag::create($req);
//    }

}