<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DashboarController extends Controller
{
    public function index(){
        $courses = Courses::all();
        $students_array = DB::table('mdl_role_assignments')->where('roleid', '5')->pluck('userid')->toArray();
        $students = User::whereIn('id', $students_array)->get();
        $instructors_array = DB::table('mdl_role_assignments')->where('roleid', '4')->pluck('userid')->toArray();
        $instructors = User::whereIn('id', $instructors_array)->get();
        // $instructors = Instructors::all();
        $users = User::all();
        // dd($students);
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
