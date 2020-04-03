<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 2020/3/17
 * Time: 21:07
 */

namespace app\api\controller\v1;


use app\api\controller\Base;
use think\Request;
use think\Route;

class User extends Base
{
    /**
     * @note 获取全部用户信息
     * @http get
     * @url  /api/v1/users
     * @return \think\response\Json
     */
    public function getUsers()
    {
        $data = [];
        $data['code'] = 0;
        $data['mesg'] = 'success';
        $data['data'] = '';
        return json($data);
    }

    /**
     * @note 获取指定用户信息
     * @http get
     * @url  /api/v1/user/:id
     * @return \think\response\Json
     */
    public function getUser($id)
    {
        $data = [];
        $data['code'] = 0;
        $data['mesg'] = 'success';
        $data['data'] = $id;
        return json($data);
    }

    /**
     * @note 新加账号
     * @http get
     * @url  /api/v1/user/:id
     * @return \think\response\Json
     */
    public function createAccount()
    {
        $params = Request::instance()->post();
        $data = [];
        $data['code'] = 0;
        $data['mesg'] = 'success';
        $data['data'] = $params;
        return json($data);
    }

    /**
     * @note 新加账号
     * @http put
     * @url  /api/v1/user/:id
     * @return \think\response\Json
     */
    public function updateAccount()
    {
        $params = Request::instance()->put();
        $data = [];
        $data['code'] = 0;
        $data['mesg'] = 'success';
        $data['data'] = $params;
        return json($data);
    }

}