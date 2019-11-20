<?php


namespace app\api\controller\v1;


use app\api\model\ArticleList;

class article
{
    public function articleList() {
        return 'aaa';
    }
    public function articleDetail() {
        return input('id');
    }

    public function addOrUpdateArticle() {
        $data = input('post.');
//        $id = input('post.id') ||'';
        return (new ArticleList())::create($data);

    }


}