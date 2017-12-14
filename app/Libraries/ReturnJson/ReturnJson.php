<?php
/**
 * Created by PhpStorm.
 * User: huangchengwen
 * Date: 2017/11/14
 * Time: 11:01
 */

namespace App\Libraries\ReturnJson;


class ReturnJson
{
    protected $_response = ['errCode' => ReturnJsonCode::SUCCESS, 'data' => [], 'errMsg' => ''];


    public function Success($data = []){
        $this->_response['data'] = $data;
        return $this->_response;
    }

    public function Error($code, $msg){
        $this->_response['errCode'] = $code;
        $this->_response['errMsg'] = $msg;
        return $this->_response;
    }
}