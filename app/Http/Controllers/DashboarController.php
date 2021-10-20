<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DashboarController extends Controller
{
    public function index(){
//        $dt = User::where('id', 2)->first()->firstaccess;
//        dd(date('Y-m-d', jdtounix(gregoriantojd(date('m', $dt), date('d', $dt), date('Y', $dt)))));

        $courses = cache()->remember('Courses', 24*24, function(){
            return DB::table('mdl_course')->select(DB::raw('count(id) as tot_course'))->first()->tot_course;
        });
        $users = cache()->remember('User', 24*24, function(){
            return DB::table('mdl_user')->select(DB::raw('count(id) as tot_users'))->first()->tot_users;
        });
        $students = cache()->remember('Total_student', 24*24, function(){

            $students_array = DB::select('SELECT count(id) as tot_students FROM mdl_user WHERE id IN (SELECT userid FROM mdl_role_assignments WHERE roleid = 5)')[0]->tot_students;
            return $students_array;

        });
        $recentCourses = Courses::orderby('timecreated', 'DESC')->get()->take(4);
        $course_enrol = DB::select('SELECT firstname, lastname FROM mdl_user_enrolments as U JOIN mdl_enrol as E ON U.enrolid=E.id JOIN mdl_user as A ON A.id=U.userid WHERE E.courseid=3');
        dd($course_enrol);
        $instructors = cache()->remember('Instructors', 24*24, function(){
            $instructors_array = DB::table('mdl_role_assignments')->where('roleid', '4')->pluck('userid')->toArray();
            return User::whereIn('id', $instructors_array)->get();
        });


        return view('sections.dashboard', compact('courses', 'students', 'instructors', 'users', 'recentCourses'));
    }
    public function showTables(){
        $courses = Courses::all();
        $users = DB::select('SELECT users.email, users.firstname, users.lastname, enrol, fullname, u_enrols.status as status, roles.shortname FROM mdl_user_enrolments as u_enrols, mdl_enrol as enrols, mdl_course as course, mdl_user as users, mdl_role as roles WHERE u_enrols.enrolid = enrols.id AND users.id=u_enrols.userid AND course.id = enrols.courseid AND roles.id =enrols.roleid  ORDER BY userid LIMIT 20');
        // dd($s[0]);
        return view('sections.table', compact('courses', 'users'));
    }
    public function showChart(){
        return view('sections.chart');
    }
}
