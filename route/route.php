<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------




Route::get('api/:version/articleList','api/:version.article/articleList');
Route::get('api/:version/articleDetail','api/:version.article/articleDetail');
Route::post('api/:version/updateArticle','api/:version.article/addOrUpdateArticle');




Route::get('api/:version/getClassify','api/:version.tag/getClassify');
Route::post('api/:version/addClassify','api/:version.tag/addClassify');
Route::post('api/:version/editeClassify','api/:version.tag/updateClassify');
Route::post('api/:version/delClassify','api/:version.tag/deleteClassify');


Route::post('api/:version/addUser','api/:version.user/addUser');
Route::post('api/:version/findUser','api/:version.user/findUser');



return [

];
