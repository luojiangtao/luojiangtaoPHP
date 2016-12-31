<?php
/**
 * 首页，文章控制器
 * @Author   罗江涛
 * @DateTime 2016-08-18T16:09:56+0800
 */
class IndexController extends Controller
{
    /**
     * 首页
     * @Author   罗江涛
     * @DateTime 2016-08-18T16:29:13+0800
     */
    public function index()
    {	
        $this->assign('name','taotao');
        $this->display();
    }

}
