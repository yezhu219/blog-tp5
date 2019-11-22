<?php
/**
 * Created by : yezhu219
 * User: yezhu219
 * Date: 2019/11/22
 * Time: 14:07
 */

namespace app\api\lib\exception;


class TokenMissExcepiton extends BaseException
{
    public $code = 404;
    public $msg = 'token不存在';
    public $error_Code = 1;
}