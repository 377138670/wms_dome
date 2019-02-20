<?php
namespace backend\libs;

class Helper{
    static public $code = [
      '200'=>'success',
    ];

    static public function msg($code,$data=array()){
        $msg = [
            'code'=>$code,
            'msg'=>Helper::$code[$code],
            'data'=>$data,
        ];
        echo json_encode($msg,JSON_UNESCAPED_UNICODE);exit;
    }
}