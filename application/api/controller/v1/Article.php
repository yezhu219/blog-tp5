<?php


namespace app\api\controller\v1;


use app\api\model\ArticleList;

class article
{
    public function articleList() {
        $pageSize = input('get.pageSize');
        $pageNumber = input('get.pageNumber');
        $article = new ArticleList();
        $total = $article->where('isDel','=','false')->count();
        $res = $article->where('isDel','=','false')
            ->paginate($pageSize,true,['page'=>$pageNumber]);
        return ['data'=>$res,'count'=>$total];
    }
    public function articleDetail() {
        $id =input('id');
        return (new ArticleList())->where('id',$id)->find();
    }

    public function addOrUpdateArticle() {
        $data = input('post.');
        $id = input('post.id');
        if($id) {
            return (new ArticleList())->save($data,['id'=>$id]);
        }
        return (new ArticleList())::create($data);
    }

    public function delArticleOne() {
        $id = input('post.id');
        return (new ArticleList())->where('id',$id)->delete();
    }

    public function delArticleMany() {
        $ids = input('post.ids');
        foreach ($ids as $id) {
           $ar =  ArticleList::where('id',$id)->find();
           $ar->isDel ='true';
          $res= $ar->save();
        }
        return $res;
    }



}