<?php
namespace Home\Model;
use Think\Model;//看评论添加的

class UserModel extends Model{
    public function getinfo(){
        //添加自己的业务逻辑
        return 'hello world';
    }
}
?>