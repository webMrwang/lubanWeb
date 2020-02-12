<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi@vip.qq.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------
namespace Think;

class Page1{
    public $firstRow; // 起始行数
    public $listRows; // 列表每页显示行数
    public $parameter; // 分页跳转时要带的参数
    public $totalRows; // 总行数
    public $totalPages; // 分页总页面数
    public $rollPage   = 5;// 分页栏每页显示的页数
    public $lastSuffix = true; // 最后一页是否显示总页数

    private $p       = 'p'; //分页参数名
    private $url     = ''; //当前链接URL
    private $nowPage = 1;

    // 分页显示定制
    /*修改
    private $config  = array(
        'header' => '<span class="rows">共 %TOTAL_ROW% 条记录</span>',
        'prev'   => '<<',
        'next'   => '>>',
        'first'  => '1...',
        'last'   => '...%TOTAL_PAGE%',
        'theme'  => '%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%',
    );*/
    private $config  = array(
        'header' => '',
        'prev'   => '<<',
        'next'   => '>>',
        'first'  => '1...',
        'last'   => '...%TOTAL_PAGE%',
        'theme'  => '%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%',
    );

    /**
     * 架构函数
     * @param array $totalRows  总的记录数
     * @param array $listRows  每页显示记录数
     * @param array $parameter  分页跳转的参数
     */
    public function __construct($totalRows, $listRows=20, $parameter = array()) {
        C('VAR_PAGE') && $this->p = C('VAR_PAGE'); //设置分页参数名称
        /* 基础设置 */
        $this->totalRows  = $totalRows; //设置总记录数
        $this->listRows   = $listRows;  //设置每页显示行数
        $this->parameter  = empty($parameter) ? $_GET : $parameter;
        $this->nowPage    = empty($_GET[$this->p]) ? 1 : intval($_GET[$this->p]);
        $this->nowPage    = $this->nowPage>0 ? $this->nowPage : 1;
        $this->firstRow   = $this->listRows * ($this->nowPage - 1);
    }

    /**
     * 定制分页链接设置
     * @param string $name  设置名称
     * @param string $value 设置值
     */
    public function setConfig($name,$value) {
        if(isset($this->config[$name])) {
            $this->config[$name] = $value;
        }
    }

    /**
     * 生成链接URL
     * @param  integer $page 页码
     * @return string
     */
    private function url($page){
        return $this->url;
    }

    /**
     * 组装分页链接
     * @return string
     */
    public function show($iscount = true) {
        if(0 == $this->totalRows) return '';

        /* 生成URL */
        $this->parameter[$this->p] = $this->nowPage;
        //var_dump($this->parameter);exit();
        $this->url = U(ACTION_NAME, $this->parameter);
        //var_dump($this->url);exit();
        /* 计算分页信息 */
        $this->totalPages = ceil($this->totalRows / $this->listRows); //总页数
        if(!empty($this->totalPages) && $this->nowPage > $this->totalPages) {
            $this->nowPage = $this->totalPages;
        }

        /* 计算分页零时变量 */
        $now_cool_page      = $this->rollPage/2;
        $now_cool_page_ceil = ceil($now_cool_page);
        $this->lastSuffix && $this->config['last'] = $this->totalPages;

        //上一页
        $up_row  = $this->nowPage - 1;
        $this->parameter[$this->p] = $up_row;
        $this->url = U(ACTION_NAME, $this->parameter);
        $up_page = $up_row > 0 ? '<a href="' . $this->url($up_row) . '"><div class="pagebox">' . $this->config['prev'] . '</div></a>' : '';

        //下一页
        $down_row  = $this->nowPage + 1;
        $this->parameter[$this->p] = $down_row;
        $this->url = U(ACTION_NAME, $this->parameter);
        $down_page = ($down_row <= $this->totalPages) ? '<a href="' . $this->url($down_row) . '"><div class="pagebox">' . $this->config['next'] . '</div></a>' : '';

        //第一页
        $the_first = '';
        $this->parameter[$this->p] = 1;
        $this->url = U(ACTION_NAME, $this->parameter);
        if($this->totalPages > $this->rollPage && ($this->nowPage - $now_cool_page) >= 1){
            $the_first = '';
        }

        //最后一页
        $the_end = '';
        $this->parameter[$this->p] = $this->totalPages;
        $this->url = U(ACTION_NAME, $this->parameter);
        if($this->totalPages > $this->rollPage && ($this->nowPage + $now_cool_page) < $this->totalPages){
            $the_end = '';
        }

        //数字连接
        $link_page = "";
        for($i = 1; $i <= $this->rollPage; $i++){
            if(($this->nowPage - $now_cool_page) <= 0 ){
                $page = $i;
            }elseif(($this->nowPage + $now_cool_page - 1) >= $this->totalPages){
                $page = $this->totalPages - $this->rollPage + $i;
            }else{
                $page = $this->nowPage - $now_cool_page_ceil + $i;
            }
            if($page > 0 && $page != $this->nowPage){

                if($page <= $this->totalPages){
                    if( $i==$this->rollPage ){
                        $setpage = $page+3 ;
                        $page = $setpage > $this->totalPages ? $this->totalPages : $setpage;
                        $this->parameter[$this->p] = $page;
                        $this->url = U(ACTION_NAME, $this->parameter);
                        $link_page .= '<a href="' . $this->url($page) . '"><div class="pagebox">...</div></a>'; 
                    }else{
                        $this->parameter[$this->p] = $page;
                        $this->url = U(ACTION_NAME, $this->parameter);
                        $link_page .= '<a href="' . $this->url($page) . '"><div class="pagebox">' . $page . '</div></a>'; 
                    }
                    
                }else{
                    break;
                }
            }else{
                if($page > 0 && $this->totalPages != 1){
                    $link_page .= '<div class="pagebox" style="background-color:gray;color:white;">' . $page . '</div>';
                }
            }
        }

        //替换分页内容
        $page_str = str_replace(
            array('%HEADER%', '%NOW_PAGE%', '%UP_PAGE%', '%DOWN_PAGE%', '%FIRST%', '%LINK_PAGE%', '%END%', '%TOTAL_ROW%', '%TOTAL_PAGE%'),
            array($this->config['header'], $this->nowPage, $up_page, $down_page, $the_first, $link_page, $the_end, $this->totalRows, $this->totalPages),
            $this->config['theme']);

        return $page_str;
    }
}

