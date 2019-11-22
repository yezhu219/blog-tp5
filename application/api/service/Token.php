<?php
/**
 * Created by : yezhu219
 * User: yezhu219
 * Date: 2019/11/21
 * Time: 17:51
 */

namespace app\api\service;


use think\facade\Cache;

class Token
{
    private function  generateToken() {
        $str = $this->randomChar(32);
        $sort = config('setting.salt');
        $timestamp = time();
        return md5($str.$timestamp.$sort);

    }

    private function randomChar($len=32) {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $str = "";
        for ($i = 0; $i < $len; $i++) {
            $str .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
        }
        return $str;
    }

    public function getToken(){
        $cacheToken = Cache::get('token');
        $token= $this->generateToken();
//        $this->saveTokenCache($token);
        $expire_in = config('setting.expire_in');
        Cache::set('token',$token,$expire_in);
        return $token;
    }

    public function saveTokenCache($token) {

    }
}