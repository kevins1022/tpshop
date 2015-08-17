<?php
// +----------------------------------------------------------------------
// | yershop [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// |  Author: 烟消云散 <1010422715@qq.com> 
// +----------------------------------------------------------------------
namespace Home\Controller;
use Think\Controller;

class ActivityController extends Controller {
  /* 商品预约处理操作 */
    public function index($cellphone='') { 
	 $reserve = M('reserve');
     $cellphone=I('post.phone');
     $goodid=I('post.goodid');
     $map['cellphone'] = $cellphone;
     $map['goodid'] = $goodid;
     $info=$reserve->where($map)->find(); 
      if ( empty($info) ) {
			$data['cellphone'] = $cellphone;
            $data['create_time'] = NOW_TIME;
            $data['status'] = 1;
            $data['goodid'] = $goodid;
            $data['title'] = get_good_name($goodid);
            $reserve->add($data);
			$data['info']='预约成功!';
		}  
       else{
            $data['status'] = -1;
			$data['info']='您已经预约过了!';
		}  
      $this->ajaxreturn($data); 
    }
}