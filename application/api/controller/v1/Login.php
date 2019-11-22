<?php
/**
 * Created by : yezhu219
 * User: yezhu219
 * Date: 2019/11/21
 * Time: 16:33
 */

namespace app\api\controller\v1;

use app\api\model\User;
use app\api\service\Token;
class Login
{
    public function userLogin() {
        $data = input('post.');
        $userName = input('post.userName');
        $user = (new User())->where('userName',$data['userName'])->find();
        $err=1;
        $msg='';
        if(!$user){
            $msg='用户不存在';
        }
        if($user['password']== $data['password']) {
            $token = (new Token())->getToken();
            $msg = 'success';
        }else {
            $msg = '密码错误';
        }
        return tpl(['token'=>$token],1,$msg);

    }
    public  function register() {

    }
}