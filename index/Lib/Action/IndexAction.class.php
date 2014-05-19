<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
        /*
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
        */
        dump($_SERVER);
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

        //文字
        if($_GET['choice'] == 'no'){
            $text = '挑战Lumia真心话大冒险赢大奖！！';
        }else{
            $text_arr = array(
                1 => array(
                    'zxh' => '亲，你早该脱离单调的生活了！',
                    'dmx' => '小伙伴，你的生活单调得掉渣啦！',
                ),
                2 => array(
                    'zxh' => '小伙伴，你的节奏要加快啊！',
                    'dmx' => '小伙伴，你慢得让人捉急啊～',
                ),
                3 => array(
                    'zxh' => '亲，是时候换种方式享受工作啦！',
                    'dmx' => '亲，你是个办公室工作狂你造吗！',
                ),
                4 => array(
                    'zxh' => '小伙伴，大胆亮出你的个性吧！',
                    'dmx' => '小伙伴，你造你特别没个性吗？',
                ),
                5 => array(
                    'zxh' => '小伙伴，你太不懂自我保护啦！',
                    'dmx' => '亲，你给人的安全感弱爆了你造嘛！',
                ),
            );
            $text = $text_arr[$_GET['number']][$_GET['type']];
        }
        $this -> assign('text', $text);

        dump($_SERVER);
        /*

        if(!empty($_SERVER['HTTP_REFERER'])){
            $this -> display('answer');
        }else{
            if($_GET['choice'] == 'no'){
                $this -> redirect('Index/index');
            }
            $this -> display('answer2');
        }
        */
    }
}