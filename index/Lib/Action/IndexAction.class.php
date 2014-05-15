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
            $question_type = 'zxh';
        }else{
            $question_type = 'dmx';
        }
        $question_number = rand(1,5);
        $this -> assign('question_number', $question_number);
        $this -> assign('question_type', $question_type);
        $this -> display();
    }

    public function answer(){
        $this -> assign('question_type', $this -> _get('type'));
        $this -> assign('question_number', $this -> _get('number'));
        $this -> assign('question_choice', $this -> _get('choice'));
        if(!empty($_SERVER['HTTP_REFERER'])){
            $this -> display('answer');
        }else{
            $this -> display('answer2');
        }
    }
}