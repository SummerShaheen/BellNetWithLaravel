<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use Input;
class ScheduleController extends Controller
{
    public function content()
    {


        return view('schedules.coursecontent');
    }

    public function schedule()
    {


        $schedule = DB::table('schedules')->get();
        return view('schedules.schedule', compact('schedule'));
    }


    public function create_content()
    {


        DB::table('schedules')->insert(['course_name' => Input::get('name'), 'id' =>
            Input::get('id'), 'timeOfCourse' => Input::get('time'), 'start_time' => Input::
            get('start'), 'end_time' => Input::get('end')]);


    }

    //

}
