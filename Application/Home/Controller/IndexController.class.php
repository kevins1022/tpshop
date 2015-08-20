<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// |  Author: 烟消云散 <1010422715@qq.com> 
// +----------------------------------------------------------------------

namespace Home\Controller;
use OT\DataDictionary;
/**
 * 前台首页控制器
 * 主要获取首页聚合数据
 $url= $_SERVER[HTTP_HOST]; //获取当前域名  
 */
class IndexController extends HomeController {
 

	/**系统首页**/
    public function index()
    {

        $jflp = M('document')->order('id desc')->where("category_id='151'")->limit(8)->select();
        $this->jflp = $jflp;
        $lphd= M('document')->order('id desc')->where("category_id='152'")->limit(8)->select();
        $this->lphd = $lphd;
        $jfhq = M('document')->order('id desc')->where("category_id='153'")->limit(8)->select();
        $this->jfhq = $jfhq;


        $this->meta_title = '首页';
        $this->display();
    }
		/**无限极分类菜单调用**/
 public function menulist(){
		$field = 'id,name,pid,title';
		$categoryq = D('Category')->field($field)->order('sort desc')->where('display="1"and ismenu="1" ')->select();
		$catelist = $this->unlimitedForLevel($categoryq);
		return $catelist;
		}
		/**限时抢购**/
 public function timelist(){

		$time=M('document_product')->order('id desc')->where('mark="2"')->limit("6")->select();
		return $time;

		}
		/**幻灯片**/
		public function Carousel(){

		$Carousel=M('document')->where('position="4"')->select();
		return $Carousel;

		}
	/**热门搜索热词**/
 public function getHotsearch(){
		$arr = array();
		$str=M('config')->where('id="40"')->getField("value");
		$hotsearch=explode(",",$str);
		return $hotsearch;

		}
		/**最新上架**/
  public function bytime(){

		$bytime=M('document_product')->order('id desc')->limit("6")->select();
		return $bytime;

		}
		/**热卖商品**/
		public function totalsales(){

		$totalsales=M('document')->order('sale desc')->limit("6")->select();
		return $totalsales;

		}
  public function unlimitedForLevel($cate,$name = 'child',$pid = 0){
		$arr = array();
		foreach ($cate as $key => $v) {
		//判断，如果$v['pid'] == $pid的则压入数组Child
		if ($v['pid'] == $pid) {
		//递归执行
		$v[$name] = self::unlimitedForLevel($cate,$name,$v['id']);
		$arr[] = $v;
		}
		}
		return $arr;
		}

		/**分类商品**/
 public function goodlist(){

		$str=M('brand')->where('status="1"')->order('ypid')->select();
		return $str;

		}


		/**循环遍历**/
 public function makeTree(){
		$category = D ( 'Category' )->getTree ();
		foreach ( $category as $k => $v ) {
		$cid=array();$arr=array();
		array_push($cid,$v['id']);
	    array_push($arr,$v['id']);
		foreach ( $v ['_'] as $ks => $vs ) {
		array_push($cid,$vs['id']);
		foreach ( $vs ['_'] as $kgs => $vgs ) {
		array_push($cid,$vgs['id']);
		}
		}
		$category [$k] ['doc'] = array ();
		$map['category_id']=array("in",$cid);
		$map['status']=1;
		$category [$k] ['chi']= array ();	
		$condition['pid'] = array('in',$arr);
        $condition['ismenu'] = 1;
		$category [$k] ['chi']= M('category')->where($condition)->limit(10)->order("id desc")->select();
		$category [$k]['doc'] = M('Document')->where($map)->order("id desc")->limit(10)->select();
		}
		return $category;

		}
}