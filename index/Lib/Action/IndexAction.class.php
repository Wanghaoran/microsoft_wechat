<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
        $tpl = rand(1,4);
        $tpl_arr = array(
            1 => 'safe',
            2 => 'guimi',
            3 => 'gexing',
            4 => 'work',
        );
        $this -> assign('tpl', $tpl);
        $this -> assign('pic_name', $tpl_arr[$tpl]);
        $this -> display();
    }

    public function rules(){
        $this -> display();
    }

    public function winnerslist(){
        $this -> display();
    }

    public function question(){
        $result = $this -> _get('result', 'intval');
        if($result % 2 == 1){
            $this -> show('真心话');
        }else{
            $this -> show('大冒险');
        }
    }
}