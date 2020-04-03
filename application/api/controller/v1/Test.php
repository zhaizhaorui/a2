<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 2020/3/17
 * Time: 20:36
 */

namespace app\api\controller\v1;


use app\api\controller\Base;

class Test extends Base
{
    /**
     * @note 测试
     * @http get
     * @url  /api/v1/users
     * @return \think\response\Json
     */
    public function index()
    {
        $data = [];
        $data['code'] = 0;
        $data['mesg'] = 'success';
        $data['data'] = 'hello world';
        return json($data);
    }

    /**
     * @note 测试
     * @http get
     * @url  /api/v1/test/test
     * @return \think\response\Json
     */
    public function updateStatus()
    {
        $data = [];
        $data['code'] = 0;
        $data['mesg'] = 'success';
        $data['data'] = '';
        return json($data);
    }

}