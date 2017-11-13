<?php
namespace app\index\controller;

use think\Controller;
use app\index\model\Posts;
use think\Request;
use think\Db;

class IndexController extends Controller
{

    public function index()
    {

        $id = Request::instance()->param('id');
        $id = empty($id) ? 1 : $id;
        $map['status'] = ['=',$id];
        $list =  Posts::where($map)
            ->order('create_time', 'DESC')
            ->paginate();
        $all =  Posts::where(1)
            ->order('create_time', 'DESC')
            ->paginate();
        $this->assign('area',$id);
        $this->assign('list',$list);
        $this->assign('all',$all);
        return $this->fetch();
    }

    public function terms(){
        return $this->fetch();
    }

    public function single(){
        $id = Request::instance()->param('id');
        $item = Posts::get($id);
        $this->assign('item',$item);
        return $this->fetch();
    }

    public function contact(){

        return $this->fetch();
    }
}
