<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use Input;

class CourseController extends Controller
{


    public function cs()
    {


        $cs = DB::table('courses')->where('category', '=', 'cs')->get();


        return view('courses.cs', compact('cs'));
    }

    public function art()
    {

        $art = DB::table('courses')->where('category', '=', 'art')->get();


        return view('courses.art', compact('art'));
    }


    public function business()
    {

        $business = DB::table('courses')->where('category', '=', 'business')->get();


        return view('courses.business', compact('business'));
    }


    public function datascience()
    {

        $datascience = DB::table('courses')->where('category', '=', 'datascience')->get();


        return view('courses.datascience', compact('datascience'));
    }

    public function language()
    {

        $language = DB::table('courses')->where('category', '=', 'language')->get();


        return view('courses.language', compact('language'));
    }
    public function life()
    {

        $life = DB::table('courses')->where('category', '=', 'lifesciences')->get();


        return view('courses.lifescience', compact('life'));
    }

    public function math()
    {

        $math = DB::table('courses')->where('category', '=', 'mathandlogic')->get();


        return view('courses.mathandlogic', compact('math'));
    }

    public function personal()
    {

        $personal = DB::table('courses')->where('category', '=', 'personaldevelopment')->get();


        return view('courses.personal', compact('personal'));
    }



public function physical()
    {

        $physical = DB::table('courses')->where('category', '=', 'physicalscience')->get();


        return view('courses.physical', compact('physical'));
    }



public function social()
    {

        $social = DB::table('courses')->where('category', '=', 'socialsciences')->get();


        return view('courses.social', compact('social'));
    }


}
