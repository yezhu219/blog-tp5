<?php
/**
 * Created by : yezhu219
 * User: yezhu219
 * Date: 2019/11/22
 * Time: 10:05
 */

namespace app\api\lib\exception;


use think\Exception;

use Throwable;

class BaseException extends Exception
{
    public $code =400;
    public $msg = '参数错误';
    public $err_code = 1;
    public function __construct($params=[])
    {
        if(!is_array($params)) {
            return ;
        }
        if(array_key_exists('code',$params)) {
            $this->code = $params['code'];
        }
        if(array_key_exists('msg',$params)){
            $this->msg=$params['msg'];

        }
        if(array_key_exists('err_code',$params)){
            $this->err_code=$params['err_code'];
        }
    }

    public function check() {
        $req = request()->header();
        $token=$req['token'];
        if(!$token) {
            new TokenMissExcepiton();
        }else {

        }
    }
}