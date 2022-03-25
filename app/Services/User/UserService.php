<?php
/**
 * author: zhoulong
 * date: 2022/3/25
 */


namespace App\Services\User;


use App\Services\BaseService;

class UserService extends BaseService
{
// 获取用户信息
    public function getUserInfo()
    {
        return ['id' => 1, 'nickname' => '张三', 'age' => 18];
    }
}
