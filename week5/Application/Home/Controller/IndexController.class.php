<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        if(IS_AJAX){
            $title = $_GET['title'];
            $where = "title like '%$title%'";
        }
        $article = M('article'); // 实例化User对象
        $count      = $article->where($where)->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,1);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $article->where($where)->order('addtime')->limit($Page->firstRow.','.$Page->listRows)->select();
        if(IS_AJAX){
            $ax = json_encode($list);
            returnAjax($ax);
        }
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display();

    }
}