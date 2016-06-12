<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use Input;
//use Request;
class TestController extends Controller
{
    public function resulttest(Request $request)
    {

        $couter = 0;
        $radio1 = $request->input('1');

        $radio2 = $request->input('2');
        $radio3 = $request->input('3');
        $radio4 = $request->input('4');
        $radio5 = $request->input('5');
        $radio6 = $request->input('6');
        $radio7 = $request->input('7');
        $radio8 = $request->input('8');
        $radio9 = $request->input('9');
        $radio10 = $request->input('10');


        $a1 = DB::table('tests')->select('answer')->get();


        $counter = 1;


        foreach ($a1 as $a) {
            $answers[$counter] = $a->answer;

            $counter++;

        }


        if($radio1==$answers[1])$couter++;
        if($radio2==$answers[2])$couter++;
        if($radio3==$answers[3])$couter++;
        if($radio4==$answers[4])$couter++;
        if($radio5==$answers[5])$couter++;
        if($radio6==$answers[6])$couter++;
        if($radio7==$answers[7])$couter++;
        if($radio8==$answers[8])$couter++;
        if($radio9==$answers[9])$couter++;
        if($radio10==$answers[10])$couter++;

        return view('tests.couter', compact('couter'));


    }


    public function testview()
    {

        return view('tests.createtest');
    }

    public function create()
    {
        DB::table('tests')->delete();
        DB::table('tests')->insert(['id' => '1', 'qustion' => Input::get('q1'),
            'chooseone' => Input::get('text1'), 'choosetwo' => Input::get('text2'),
            'choosethree' => Input::get('text3'), 'answer' => Input::get('c1')]);
        DB::table('tests')->insert(['id' => '2', 'qustion' => Input::get('q2'),
            'chooseone' => Input::get('text4'), 'choosetwo' => Input::get('text5'),
            'choosethree' => Input::get('text6'), 'answer' => Input::get('c2')]);
        DB::table('tests')->insert(['id' => '3', 'qustion' => Input::get('q3'),
            'chooseone' => Input::get('text7'), 'choosetwo' => Input::get('text8'),
            'choosethree' => Input::get('text8'), 'answer' => Input::get('c3')]);
        DB::table('tests')->insert(['id' => '4', 'qustion' => Input::get('q4'),
            'chooseone' => Input::get('text10'), 'choosetwo' => Input::get('text11'),
            'choosethree' => Input::get('text12'), 'answer' => Input::get('c4')]);
        DB::table('tests')->insert(['id' => '5', 'qustion' => Input::get('q5'),
            'chooseone' => Input::get('text13'), 'choosetwo' => Input::get('text14'),
            'choosethree' => Input::get('text15'), 'answer' => Input::get('c5')]);
        DB::table('tests')->insert(['id' => '6', 'qustion' => Input::get('q6'),
            'chooseone' => Input::get('text16'), 'choosetwo' => Input::get('text17'),
            'choosethree' => Input::get('text18'), 'answer' => Input::get('c6')]);
        DB::table('tests')->insert(['id' => '7', 'qustion' => Input::get('q7'),
            'chooseone' => Input::get('text19'), 'choosetwo' => Input::get('text20'),
            'choosethree' => Input::get('text21'), 'answer' => Input::get('c7')]);
        DB::table('tests')->insert(['id' => '8', 'qustion' => Input::get('q8'),
            'chooseone' => Input::get('text22'), 'choosetwo' => Input::get('text23'),
            'choosethree' => Input::get('text24'), 'answer' => Input::get('c8')]);
        DB::table('tests')->insert(['id' => '9', 'qustion' => Input::get('q9'),
            'chooseone' => Input::get('text25'), 'choosetwo' => Input::get('text26'),
            'choosethree' => Input::get('text27'), 'answer' => Input::get('c9')]);
        DB::table('tests')->insert(['id' => '10', 'qustion' => Input::get('q10'),
            'chooseone' => Input::get('text28'), 'choosetwo' => Input::get('text29'),
            'choosethree' => Input::get('text30'), 'answer' => Input::get('c10')]);

        $test = DB::table('tests')->get();


        return view('tests.finaltest', compact('test'));
    }


    public function finaltest()
    {
        $test = DB::table('tests')->get();
        return view('tests.finaltest', compact('test'));
    }

}
