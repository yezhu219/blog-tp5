<?php
/**
 * Created by : yezhu219
 * User: yezhu219
 * Date: 2019/11/18
 * Time: 21:00
 */

namespace app\api\controller\v1;

use app\api\model\Tag as TagModel;
class Tag
{
    public function getClassify() {
        $res = (new TagModel())::all();
        return $res;
    }
    public function addClassify() {
        $data = input('post.');
        return (new TagModel())::create($data);
    }
    public function updateClassify() {
        $data = input('post.');
        $id = input('post.id');
        return (new TagModel())->save($data,['id'=>$id]);
    }
    public function deleteClassify() {
        $id = input('post.id');
        return (new TagModel())::where('id',$id)->delete();
    }
}