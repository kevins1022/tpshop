<?php

namespace Home\Controller;

use User\Api\UserApi;

/**
 * 用户控制器
 * 包括用户中心，用户登录及注册
 */
class UserController extends HomeController
{

    /* 用户中心首页 */
    public function index()
    {
       if(empty(session('nickname'))){
           $this->error("非法请求");
       }
        echo 1;

    }

    /* 注册页面 */
    public function register($username = "", $password = "", $repassword = "", $email = "", $verify = "")
    {

        if (!C("USER_ALLOW_REGISTER")) {
            $this->error("注册已关闭");
        }
        if (IS_POST) { //注册用户
            /* 检测验证码 */

            extract($_POST);
            if (!check_verify($verify)) {
                $this->error("验证码输入错误！");
            }

            /* 检测密码 */
            if ($password != $repassword) {
                $this->error("密码和重复密码不一致！");
            }

            $data['nickname'] = $username;
            $data['password'] = md5($password);
            $data['sex'] =$sex;
            $res = M('member')->add($data);
            if ($res) {
                $this->success("注册成功！", U('User/index'));
            } else {
                $this->error("注册失败，请重新注册！");
            }

        } else {

            $this->meta_title = '会员注册';
            $this->display();
        }
    }

    /* 登录页面 */
    public function login($username = "", $password = "", $verify = "")
    {

        if (IS_POST) {
            extract($_POST);
            $data['nickname'] = $nickname;
            $data['password'] = md5($password);
            $memberModel = M("member");
            //var_dump($data);
            $res = $memberModel->where($data)->find();
            if($res){
                session('nickname', $data['nickname']);
                $this->success("登录成功", U('User/index'));
            }else{
                $this->error("用户名或密码错误");
            }

        } else {
            $this->meta_title = '会员登录';
            $this->display();
        }
    }




    /* 退出登录 */
    public function logout()
    {
        if (!empty(session('nickname'))) {
            session('nickname',null);
            $this->success("退出成功！");
        } else {
            $this->redirect("User/login");
        }
    }



    /* 验证码，用于登录和注册 */
    public function verify()
    {
        $config = array(
            'fontSize' => 15,    // 验证码字体大小
            'length' => 4,     // 验证码位数
            'useNoise' => false, // 关闭验证码杂点
            'imageW' => '120',
            'imageH' => '30',
            'useCurve' => false,
            ''
        );
        $verify = new \Think\Verify($config);
        $verify->entry(1);
    }



    public function cart()
    {
        $cart = $_SESSION["cart"];
        if ($cart) {
            foreach ($cart as $k => $val) {
                $id = $val["id"];
                $table->goodid = $id;
                $member = D("member");
                $uid = $member->uid();
                $table->uid = $uid;
                $table->partnerid = get_partnerid($uid);
                $num = M("shopcart")->where("goodid='$id'")->getField("num");
                if ($num) {
                    $table->num = $val["num"] + $num;
                    $table->save();
                } else {
                    $table->num = $val["num"];
                    $table->add();
                }
            }
            return $uid;
        }
    }

    /**
     * 修改密码提交
     * @author huajie <banhuajie@163.com>
     */
    public function profile()
    {
        if (!is_login()) {
            $this->error("您还没有登陆", U("User/login"));
        }
        if (IS_POST) {
            //获取参数
            $uid = is_login();
            $password = I("post.old");
            $repassword = I("post.repassword");
            $data["password"] = I("post.password");
            empty($password) && $this->error("请输入原密码");
            empty($data["password"]) && $this->error("请输入新密码");
            empty($repassword) && $this->error("请输入确认密码");

            if ($data["password"] !== $repassword) {
                $this->error("您输入的新密码与确认密码不一致");
            }

            $Api = new UserApi();
            $res = $Api->updateInfo($uid, $password, $data);
            if ($res['status']) {
                $this->success("修改密码成功！");
            } else {
                $this->error($res["info"]);
            }
        } else {
            $this->meta_title = '修改密码';
            $this->display();
        }
    }

    public function checkcode()
    {
        /***接受代码统计 */
        $code = $_POST["couponid"];
        $fcoupon = M("fcoupon");
        $id = $fcoupon->where("code='$code' ")->getfield("id");
        /***获取优惠券id,优惠券存在 */
        if (isset($id)) {
            $member = D("member");
            $uid = $member->uid();
            $coupon = M("usercoupon");
            /***用户优惠券存在 */
            if ($coupon->where("uid='$uid'and couponid='$id' and status='1'")->select()) {
                $data["info"] = "该优惠券可以使用";
                $data["msg"] = "yes";
                $data["status"] = "1";
                $this->ajaxreturn($data);

            } else {
                $data["info"] = "该优惠券已使用或未领取";
                $data["msg"] = "no";
                $data["status"] = "1";
                $this->ajaxreturn($data);

            }
        } /***获取优惠券id,优惠券不存在 */
        else {
            $data["info"] = "查询不到该优惠券";
            $data["msg"] = "out of date";
            $data["status"] = "1";
            $this->ajaxreturn($data);

        }

    }

    /*****领优惠券
     ***************/
    public function getcoupon()
    {
        $id = $_POST["couponid"];
        $member = D("member");
        $uid = $member->uid();
        $coupon = M("usercoupon");
        if ($coupon->where("uid='$uid'and couponid='$id'")->select()) {
            $data["msg"] = "已领取过";
            $data["status"] = "0";
            $this->ajaxreturn($data);
        } else {
            $data["uid"] = $uid;
            $data["couponid"] = $id;
            $data["time"] = NOW_TIME;
            $data["status"] = "1";
            $data["info"] = "未使用";
            $coupon->add($data);
            $data["msg"] = "已成功领取，请刷新查看";

            $this->ajaxreturn($data);

        }

    }

    public function cut()
    {
        if (!is_login()) {
            $this->error("您还没有登陆", U("User/login"));
        }

        $member = D("member");
        $uid = $member->uid();
        $info = M("ucenter_member")->where("id='$uid'")->find();
        $this->assign('info', $info);
        $this->meta_title = '修改图像';
        $this->display();


    }

    public function saveface()
    {
        if (IS_POST) {
            $member = D("member");
            $uid = $member->uid();
            $data["face"] = I("post.face");
            $res = M("UcenterMember")->where("id='$uid'")->setField('face', $data["face"]);
            if ($res) {
                $this->success("修改成功！" . $res);
            } else {
                $this->error('修改失败' . $face);
            }


        }
    }
}
