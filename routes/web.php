<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\student_course_enroll;
use App\Http\Controllers\secend;
use App\Http\Controllers\SslCommerzPaymentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::view('home', 'home');

Route::get('home', [student_course_enroll::class, 'index']);

Route::get('addcourses', [student_course_enroll::class, 'addcourse']);
Route::get('studentdeletecourse/{id}', [student_course_enroll::class, 'destroy']);
Route::get('counsilling', [student_course_enroll::class, 'studentinfo']);

Route::get("slogin", [student_course_enroll::class, 'login']);
Route::view("login", "slogin");
// Route::get('slogin', function () {
//     return view('slogin');
// });
Route::get("searchcourses", [student_course_enroll::class, 'searchcourses']);

Route::get("addcoursesapi/{id}", [student_course_enroll::class, 'addcourses']);
Route::get('slogout', [student_course_enroll::class, 'slogout']);
Route::get('deletecounsling/{id}', [student_course_enroll::class, 'destroys']);

Route::get('studentaddcounsilling', [student_course_enroll::class, 'showallteacher']);

Route::get('show_teacher_profile/{id}', [student_course_enroll::class, 'showteacherprofile']);

Route::get('studentprofile', [student_course_enroll::class, 'studentprofile']);
Route::get('allbook', [student_course_enroll::class, 'showallbook']);
Route::get('allqustion/{id}', [student_course_enroll::class, 'allqustion']);
Route::get('mybook', [student_course_enroll::class, 'mybook']);

Route::post("mybook", [student_course_enroll::class, 'uploadbook']);
Route::get("/download/{id}", [student_course_enroll::class, 'download']);
//Route::post("mybook", [student_course_enroll::class, 'save']);

Route::get("deletebook/{id}", [student_course_enroll::class, 'deletebook']);
Route::get('allans/{id}', [student_course_enroll::class, 'allans']);
Route::post('allans/{id}', [student_course_enroll::class, 'allansupload']);

Route::get("participation/{id}", [student_course_enroll::class, 'participations']);
Route::get('showstudentprofile/{id}', [student_course_enroll::class, 'showprofile']);
Route::get('formetresume', [student_course_enroll::class, 'formet']);
Route::get('formetresumeapi', [student_course_enroll::class, 'formetapi']);
Route::get('hideeducation/{id}', [student_course_enroll::class, 'hideeducation']);
Route::get('hideproject/{id}', [student_course_enroll::class, 'hideproject']);
Route::get('hideexprience/{id}', [student_course_enroll::class, 'hideexprience']);

Route::get('hidecertificated/{id}', [student_course_enroll::class, 'hidecertificated']);

Route::get('studentinfoedit', [student_course_enroll::class, 'studentinfoedit']);
Route::post("studentinfoedit", [student_course_enroll::class, 'simage']);

Route::get('print', [student_course_enroll::class, 'formet']);
Route::post('adminlogin', [student_course_enroll::class, 'adminlogin']);
Route::view("adminlogin", "adminlogin");
Route::view("adminhome", "adminhome");

Route::post("addstudent", [student_course_enroll::class, 'addstudent']);
Route::view("addstudent", "addstudent");
Route::post("addteacher", [student_course_enroll::class, 'addteacher']);
Route::view("addteacher", "addteacher");
Route::get('teacherhome', [student_course_enroll::class, 'thome']);
Route::post("tlogin", [student_course_enroll::class, 'tlogin']);
Route::view("tlogin", "tlogin");
Route::get('uahome', [student_course_enroll::class, 'ua']);
Route::post('uahome', [student_course_enroll::class, 'uaapply']);
Route::get('graderhome', [student_course_enroll::class, 'grader']);
Route::post('graderhome', [student_course_enroll::class, 'graderapply']);

Route::get('teacher_ua_list', [student_course_enroll::class, 'showua']);
Route::get('teacher_request', [student_course_enroll::class, 'myua']);
Route::get('uarej/{id}', [student_course_enroll::class, 'uarej']);
Route::get('uaasp/{id}', [student_course_enroll::class, 'uaasp']);
Route::get('teacherua/{id}/{cid}', [student_course_enroll::class, 'ualist']);
Route::get('uaadd/{sid}/{sname}/{cid}/{cname}/{section}/{tid}', [student_course_enroll::class, 'addua']);
Route::get('deleteuas/{id}', [student_course_enroll::class, 'deleteuas']);
Route::get('teacher_grader_list', [student_course_enroll::class, 'showgrader']);
Route::get('teachergrader/{id}/{cid}', [student_course_enroll::class, 'graderlist']);
Route::get('graderadd/{sid}/{sname}/{cid}/{cname}/{section}/{tid}', [student_course_enroll::class, 'addgrader']);

Route::get('publicgrader', [student_course_enroll::class, 'publicgrader']);
Route::get('publicua', [student_course_enroll::class, 'publicua']);

Route::get('projectshowhome', [student_course_enroll::class, 'projectshowhome']);
Route::get('p_details/{id}', [student_course_enroll::class, 'p_details']);

Route::get('p_rating/{id}', [student_course_enroll::class, 'p_rating']);
Route::post('p_rating/{id}', [student_course_enroll::class, 'p_ratingone']);

Route::view("addeducation", "addeducation");

Route::post('addeducation', [student_course_enroll::class, 'addeducation']);

Route::get('deleteeducation/{id}', [student_course_enroll::class, 'deleteeducation']);
Route::view("addproject", "addproject");
Route::post('addproject', [student_course_enroll::class, 'addproject']);

Route::view("projectpropojalfrom", "projectpropojalfrom");
Route::post('projectpropojalfrom', [student_course_enroll::class, 'projectpropojalfrom']);

Route::get('projectpropojalfrom', [student_course_enroll::class, 'showtacherinprojectfrom']);


Route::get('myproject', [student_course_enroll::class, 'myproject']);
Route::view("projectedit", "projectedit");

Route::get('grader_payment_form', [student_course_enroll::class, 'grader_payment_form']);

Route::post('grader_payment_form', [student_course_enroll::class, 'grader_payment_formone']);
Route::get('grader_payment_form_show', [student_course_enroll::class, 'grader_payment_form_show']);

Route::get('delete-user/{id}', [student_course_enroll::class, 'deleteuser']);

Route::get('projectshowedit/{id}', [student_course_enroll::class, 'projectshowedit']);

Route::post('show_teacher_profile/{id}', [student_course_enroll::class, 'freetime']);
Route::get('teacherprofile', [student_course_enroll::class, 'teacherprofile']);
Route::post('timeadd', [student_course_enroll::class, 'teacherprofilefrom']);

Route::post('teacherprofile', [student_course_enroll::class, 'timage']);

Route::get('addcounselling/{tname}/{tid}/{day}/{id}/{date}', [student_course_enroll::class, 'addcounselling']);



Route::get('counsellingasp/{id}', [student_course_enroll::class, 'counsellingasp']);
Route::get('counsellingrej/{id}', [student_course_enroll::class, 'counsellingrej']);
Route::post('counsellingrej/{id}', [student_course_enroll::class, 'counsellingrej']);

Route::get('projectshowprofile', [student_course_enroll::class, 'projectshowprofile']);

Route::post('get_states', [student_course_enroll::class, 'get_states']);

Route::post('get_uacourse', [student_course_enroll::class, 'get_uacourse']);

Route::get('deleteua/{id}', [secend::class, 'deleteua']);

Route::get('deletegrader/{id}', [secend::class, 'deletegrader']);

Route::get('/addpatners/{id}/{pid}', [student_course_enroll::class, 'addpatners']);

Route::post('hostel_registration_form', [secend::class, 'hostel_registration_form']);

Route::get('/hostel_registration_form', [secend::class, 'hostel_registration']);

Route::view("student_login", "student_login");


Route::view("paymenttest", "paymenttest");

Route::view("exampleEasycheckout", "exampleEasycheckout");


Route::get('/admin_hostel_bokking_table', [secend::class, 'admin_hostel_bokking_table']);

Route::get('/hostledle/{id}', [secend::class, 'hostledle']);

Route::get('/hostleasp/{id}', [secend::class, 'hostleasp']);

Route::post('student_login', [secend::class, 'student_login']);

Route::get('hostel_home', [secend::class, 'hostel_home']);
Route::view("alumnilogin", "alumnilogin");

Route::view("addalumni", "addalumni");
Route::post('addalumni', [secend::class, 'addalumni']);

Route::view("admin_faculty_login", "admin_faculty_login");

Route::get('uapyrej/{id}', [secend::class, 'uapyrej']);


Route::get('uapyasp/{id}', [secend::class, 'uapyasp']);

Route::get('admingrader', [secend::class, 'admingrader']);

Route::get('ready/{id}', [secend::class, 'ready']);

Route::get('unlucky/{id}', [secend::class, 'unlucky']);

Route::post('alumnilogin', [secend::class, 'alumnilogin']);
Route::get('newsfeed', [secend::class, 'newsfeed']);
Route::post('newsfeed', [secend::class, 'newspost']);

Route::post('comment', [secend::class, 'comment']);

Route::get('showcomment/{id}', [secend::class, 'showcomment']);

Route::get('alumniprofile', [secend::class, 'alumniprofile']);

Route::post('alumnieducation', [secend::class, 'alumnieducation']);


Route::get('alumni_delete_education/{id}', [secend::class, 'alumni_delete_education']);



Route::post('alumniaddexprience', [secend::class, 'alumniaddexprience']);

Route::post('alumniaddskill', [secend::class, 'alumniaddskill']);

Route::post('alumniaddlanguage', [secend::class, 'alumniaddlanguage']);


Route::post('alumniaddpost', [secend::class, 'newspost']);

Route::get('dletepost/{id}', [secend::class, 'dletepost']);

Route::get('alumnieditprofile', [secend::class, 'alumnieditprofile']);

Route::post('editalumniabout', [secend::class, 'editalumniabout']);

Route::post('EditAlumniProfilePicture', [secend::class, 'EditAlumniProfilePicture']);

Route::post('EditAlumniCoverPicture', [secend::class, 'EditAlumniCoverPicture']);


Route::get('alumnifind', [secend::class, 'alumnifind']);

Route::get('connectallumni/{name}/{image}/{id}/{email}', [secend::class, 'connectallumni']);

Route::get('mynetwork', [secend::class, 'mynetwork']);

Route::get('networkremove/{id}', [secend::class, 'networkremove']);

Route::get('showalumniprofile/{id}', [secend::class, 'showalumniprofile']);
Route::get('chat', [secend::class, 'chat']);
Route::post('send_massage', [secend::class, 'send_massage']);

Route::get('indivisual_chat/{id}', [secend::class, 'indivisual_chat']);

Route::get('alumninotificatin', [secend::class, 'alumninotificatin']);


// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
