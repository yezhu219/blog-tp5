<?php
/**
 * Created by : yezhu219
 * User: yezhu219
 * Date: 2019/11/19
 * Time: 11:42
 */

namespace app\api\behavior;

use think\Response;
class CORS
{
    public function appInit($params)
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: token,Origin, X-Requested-With, Content-Type, Accept");
        header('Access-Control-Allow-Methods: POST,GET');
        if(request()->isOptions()){
            exit();
        }
    }
}