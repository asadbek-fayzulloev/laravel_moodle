<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DashboarController extends Controller
{
    public function index(){
        $courses = cache()->remember('Counters', 24*24, function(){
            return Courses::all();
        });
        $users = cache()->remember('Users', 24*24, function(){
            return User::all();
        });
        $students = cache()->remember('Students', 24*24, function(){
            $students_array = DB::table('mdl_role_assignments')->where('roleid', '5')->pluck('userid')->toArray();
            return User::whereIn('id', $students_array)->get();

        });
        $instructors = cache()->remember('Instructors', 24*24, function(){
            $instructors_array = DB::table('mdl_role_assignments')->where('roleid', '4')->pluck('userid')->toArray();
            return User::whereIn('id', $instructors_array)->get();
        });


        return view('sections.dashboard', compact('courses', 'students', 'instructors', 'users'));
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
