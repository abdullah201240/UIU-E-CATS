<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Response;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

use Illuminate\Support\Facades\Storage;

class student_course_enroll extends Controller
{
    public function index()
    {
        $id = Session::get('$sid');
        $data = DB::select("SELECT * FROM `take_courses` WHERE sid='$id'");
        return view('home', ['data' => $data]);
    }

    public function destroy($id)
    {


        DB::delete('DELETE FROM `take_courses` where id = ?', [$id]);

        return redirect("home");
    }
    public function studentinfo()
    {
        $id = Session::get('$sid');
        $data = DB::select("SELECT * FROM `bokking` WHERE sid='$id' ORDER BY id DESC");

        return view('counsilling', ['data' => $data]);
    }

    public function login(Request $req)
    {

        $username = $_GET['username'];
        $pass = md5($_GET['password']);



        $users = DB::select("SELECT * FROM `student` WHERE id= '$username' AND password='$pass'");

        foreach ($users as $user) {

            Session::put('$sid', $user->id);
            Session::put('$sname', $user->name);
            Session::put('$simage', $user->image);
            Session::put('$scgpa', $user->cgpa);
            $data = DB::select("SELECT * FROM `take_courses` WHERE sid='$user->id'");

            return redirect("home");
        }
        if ($users == false) {

            return redirect("login");
        }
    }
    public function addcourse()
    {

        $data = DB::select("SELECT * FROM `course`");
        return view('addcourses', ['data' => $data]);
    }

    public function searchcourses(Request $req)

    {

        $cid = $_GET['courses'];
        $data = DB::select("Select distinct(section),id,cname,cid,Room,ctimestart,ctimeend,tname,department from course where cid like'%$cid%' or  cname like'%$cid%'");
        return view('searchcourses', ['data' => $data]);
    }

    public function addcourses($id)

    {

        echo $id;

        $data = DB::select("SELECT * FROM `course` WHERE id='$id'");
        foreach ($data as $u) {
            $cname = $u->cname;
            $cid = $u->cid;
            $tname = $u->tname;
            $department = $u->department;
            $section = $u->section;
            $room = $u->Room;
            $ctimestart = $u->ctimestart;
            $ctimeend = $u->ctimeend;
            $sid = Session::get('$sid');
            $sname = Session::get('$sname');
            $image = Session::get('$simage');
        }
        $data = array('sid' => $sid, "cid" => $cid, "sname" => $sname, "tname" => $tname, "department" => $department, "cname" => $cname, "section" => $section, "Room" => $room, "ctimestart" => $ctimestart, "ctimeend" => $ctimeend, "image" => $image);
        DB::table('take_courses')->insert($data);


        return redirect("home");
    }
    public function slogout()

    {
        session()->forget('$sid');
        session()->forget('$sname');

        return redirect("/");
    }
    public function destroys($id)
    {


        DB::delete('DELETE FROM `bokking` WHERE id= ?', [$id]);

        return redirect("counsilling");
    }
    public function showallteacher()
    {

        $data = DB::select("SELECT * FROM `teacher`");
        return view('studentaddcounsilling', ['data' => $data]);
    }

    public function  showteacherprofile($id)
    {




        //$birthday=$request->birthday;


        $data = DB::select("SELECT * FROM `teacher` where id='$id'");
        $data1 = DB::select("SELECT * FROM `course` WHERE tid='$id'");

        $data2 = DB::select(" SELECT * FROM time_schedule WHERE tid='$id'");

        $data3 = DB::select("SELECT * FROM `bokking` WHERE tid='$id'");

         $data6=[];


            // $birthday = $_GET['birthday'];
            // $newDate = date('l', strtotime($birthday));
            // $data6 = DB::select("SELECT * FROM `time_schedule` WHERE tid='$id' and day='$newDate' and  NOT EXISTS(SELECT * from bokking WHERE bokking.date='$birthday' and time_schedule.id=bokking.bid)");





        return view('show_teacher_profile')->with(['data' => $data, 'data1' => $data1, 'data2' => $data2, 'data3' => $data3, 'data6' => $data6]);
    }

    public function freetime(Request $request)
    {
        $birthday = $request->birthday;
        $newDate = date('l', strtotime($birthday));
        $tid = $request->custId;

        $data = DB::select("SELECT * FROM `teacher` where id='$tid'");
        $data1 = DB::select("SELECT * FROM `course` WHERE tid='$tid'");

        $data2 = DB::select(" SELECT * FROM time_schedule WHERE tid='$tid'");

        $data3 = DB::select("SELECT * FROM `bokking` WHERE tid='$tid'");


        $data6 = DB::select("SELECT * FROM `time_schedule` WHERE tid='$tid' and day='$newDate' and  NOT EXISTS(SELECT * from bokking WHERE bokking.date='$birthday' and time_schedule.id=bokking.bid)");



        return view('show_teacher_profile')->with(['data' => $data, 'data1' => $data1, 'data2' => $data2, 'data3' => $data3, 'data6' => $data6,'data7'=>$birthday]);
    }
    public function addcounselling($tname,$tid,$day,$id,$date){
        $data6 = DB::select("SELECT * FROM `time_schedule` WHERE tid='$tid' and id='$id'");
        foreach ($data6 as $u) {
            $start=$u->start;
            $end=$u->end;
        }



        $sid = Session::get('$sid');
        $sname = Session::get('$sname');
        $data = array('sid' => $sid, "sname" => $sname, "tid" => $tid,"tname" => $tname,"day" => $day,"bid" => $id,"start" => $start,"end" => $end,"date" => $date,"states"=>"Pending","comment"=>"");
        DB::table('bokking')->insert($data);

        return redirect("counsilling");

    }
    public function counsellingasp($id){
        DB::update("UPDATE `bokking` SET `states`='Accepted' WHERE id=?", [$id]);


        return redirect("teacherhome");


    }
    public function counsellingrej($id){
        DB::update("UPDATE `bokking` SET `states`='Rejected' WHERE id=?", [$id]);


        return redirect("teacherhome");


    }

    public function  studentprofile()
    {
        $sid = Session::get('$sid');
        $data20 = DB::select("SELECT * FROM `student` WHERE id= '$sid'");

        $data21 = DB::select("SELECT * FROM `education` WHERE sid='$sid'");

        $data22 = DB::select(" Select * from project where sid='$sid'");

        $data26 = DB::select(" Select * from experience where  sid='$sid'");

        $data27 = DB::select(" SELECT * FROM `achievements` WHERE sid='$sid'");

        $data23 = [];
        $data24 = [];
        $data25 = [];

        foreach ($data22 as $u) {

            $project_id = $u->project_id;
            $data23 = DB::select(" SELECT * FROM `project_partner` WHERE project_id='$project_id'");


            $data24 = DB::select(" SELECT * FROM `project_faculty` WHERE project_id='$project_id'");

            $data25 = DB::select("  SELECT * FROM `project_image` WHERE id='$project_id'");
        }
        return view('studentprofile')->with(['data20' => $data20, 'data21' => $data21, 'data22' => $data22, 'data23' => $data23, 'data24' => $data24, 'data25' => $data25, 'data26' => $data26, 'data27' => $data27]);
    }
    public function  showallbook()
    {

        //$data = DB::select(" SELECT * FROM `book` ORDER BY(coursename)");
        $data = DB::select(" SELECT DISTINCT(cid),cname FROM `course` ");


        return view('allbook', ['data' => $data]);

    }
    public function allqustion($id){


        $data30 = DB::select("SELECT * FROM `book` where coursename=?", [$id]);
        return view('allqustion', ['data30' => $data30]);


    }

    public function  mybook()
    {
        $id = Session::get('$sid');

        $data = DB::select(" SELECT * FROM `book` where sid='$id' ORDER BY(coursename)");
        $data1 = DB::select(" SELECT DISTINCT(cid),cname FROM `course`");


        return view('mybook', ['data' => $data,'data1'=>$data1]);
    }

    public function  uploadbook(Request $req)
    {
        $course=$req->course;
        $dis = $req->dis;
        $file = $req->file;
        $id = Session::get('$sid');


            $img_name = $_FILES['file']['name'];
            $img_size = $_FILES['file']['size'];
            $tmp_name = $_FILES['file']['tmp_name'];
            $error = $_FILES['file']['error'];

            if ($error === 0) {

                    $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                    $img_ex_lc = strtolower($img_ex);

                    $allowed_exs = array("jpg", "jpeg", "png","pdf","doc","ppt");

                    if (in_array($img_ex_lc, $allowed_exs)) {
                        $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                        $img_upload_path = 'allbooks/'.$new_img_name;
                        move_uploaded_file($tmp_name, $img_upload_path);

                        // Insert into Database
                        $data = array('sid' => $id, "coursename" => $course, "name" =>  $new_img_name,"dis"=>$dis,);
                         DB::table('book')->insert($data);
                         $data = DB::select(" SELECT * FROM `book` where sid='$id' ORDER BY(coursename)");
                         $data1 = DB::select(" SELECT DISTINCT(cid),cname FROM `course`");


                         return view('mybook', ['data' => $data,'data1'=>$data1]);

                    }

            }




















    }
    public function  download($id)
    {




        return response()->download(public_path('allbooks/' . $id));
    }


    public function deletebook($id)
    {

        DB::delete('DELETE FROM `book` WHERE id= ?', [$id]);

        return redirect("mybook");
    }
    public function participations($id)
    {



        $data = DB::select(" SELECT * FROM `take_courses` WHERE id='$id'");



        foreach ($data as $u) {

            $cid = $u->cid;
            $section = $u->section;
        }


        $data1 = DB::select(" SELECT * FROM `take_courses` WHERE cid='$cid' AND section='$section'");
        return view('participation', ['data1' => $data1]);
    }

    public function allans($id){


        $data1 = DB::select("SELECT * FROM `qusans` WHERE qid='$id'");
        return view('allans', ['data1' => $data1,'qid'=>$id]);
    }
    public function allansupload(Request $req ){

          $sid = Session::get('$sid');
          $comment=$req->comment;
          $qid=$req->qid;
          $img_name = $_FILES['file']['name'];
          $img_size = $_FILES['file']['size'];
          $tmp_name = $_FILES['file']['tmp_name'];
          $error = $_FILES['file']['error'];

          if ($error === 0) {

                  $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                  $img_ex_lc = strtolower($img_ex);

                  $allowed_exs = array("jpg", "jpeg", "png","pdf","doc","ppt");

                  if (in_array($img_ex_lc, $allowed_exs)) {
                      $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                      $img_upload_path = 'allbooks/'.$new_img_name;
                      move_uploaded_file($tmp_name, $img_upload_path);

                      // Insert into Database
                      $data = array('sid' => $sid, "qid" => $qid, "file" =>  $new_img_name,"answer"=>$comment,);
                       DB::table('qusans')->insert($data);



                       $data1 = DB::select("SELECT * FROM `qusans` WHERE qid='$qid'");
                       return view('allans', ['data1' => $data1,'qid'=>$qid]);

                  }

          }


    }
    public function showprofile($id)
    {



        $data20 = DB::select("SELECT * FROM `student` WHERE id= '$id'");

        $data21 = DB::select("SELECT * FROM `education` WHERE sid='$id'");

        $data22 = DB::select(" Select * from project where sid='$id'");

        $data26 = DB::select(" Select * from experience where  sid='$id'");

        $data27 = DB::select(" SELECT * FROM `achievements` WHERE sid='$id'");

        foreach ($data22 as $u) {
            $project_id = $u->project_id;
            $data23 = DB::select(" SELECT * FROM `project_partner` WHERE project_id='$project_id'");


            $data24 = DB::select(" SELECT * FROM `project_faculty` WHERE project_id='$project_id'");

            $data25 = DB::select("  SELECT * FROM `project_image` WHERE id='$project_id'");
            return view('showstudentprofile')->with(['data20' => $data20, 'data21' => $data21, 'data22' => $data22, 'data23' => $data23, 'data24' => $data24, 'data25' => $data25, 'data26' => $data26, 'data27' => $data27]);
        }
        return view('showstudentprofile')->with(['data20' => $data20, 'data21' => $data21, 'data22' => $data22, 'data26' => $data26, 'data27' => $data27]);
    }
    public function  formet()
    {
        $sid = Session::get('$sid');
        $data20 = DB::select("SELECT * FROM `student` WHERE id= '$sid'");

        $data21 = DB::select("SELECT * FROM `education` WHERE sid='$sid'");

        $data22 = DB::select(" Select * from project where sid='$sid'");


        $data26 = DB::select(" Select * from experience where  sid='$sid'");

        $data27 = DB::select(" SELECT * FROM `achievements` WHERE sid='$sid'");

        foreach ($data22 as $u) {
            $project_id = $u->project_id;
            $data23 = DB::select(" SELECT * FROM `project_partner` WHERE project_id='$project_id'");


            $data24 = DB::select(" SELECT * FROM `project_faculty` WHERE project_id='$project_id'");

            $data25 = DB::select("  SELECT * FROM `project_image` WHERE id='$project_id'");
            return view('formetresume')->with(['data20' => $data20, 'data21' => $data21, 'data22' => $data22, 'data23' => $data23, 'data24' => $data24, 'data25' => $data25, 'data26' => $data26, 'data27' => $data27]);
        }
        return view('formetresume')->with(['data20' => $data20, 'data21' => $data21, 'data22' => $data22, 'data26' => $data26, 'data27' => $data27]);
    }

    public function hideeducation($id)
    {
        DB::update("UPDATE `education` SET `hide`='1' WHERE id=?", [$id]);
        //DB::table('education') ->where('id', '$id') ->limit(1) ->update( [ 'hide' =>'1' ]);

        return redirect("formetresume");
    }
    public function  formetapi()
    {
        $id = Session::get('$sid');

        DB::update("UPDATE `education` SET `hide`='0' WHERE sid=?", [$id]);
        DB::update("UPDATE `achievements` SET `hide`='0' WHERE  sid=?", [$id]);
        DB::update("UPDATE `experience` SET `hide`='0' WHERE  sid=?", [$id]);
        DB::update("UPDATE `project` SET `hide`='0' WHERE  sid=?", [$id]);

        return redirect("formetresume");
    }
    public function hideproject($id)
    {
        DB::update("UPDATE `project` SET `hide`='1' WHERE  project_id=?", [$id]);
        //DB::table('education') ->where('id', '$id') ->limit(1) ->update( [ 'hide' =>'1' ]);

        return redirect("formetresume");
    }
    public function hideexprience($id)
    {

        DB::update("UPDATE `experience` SET `hide`='1' WHERE  id=?", [$id]);
        //DB::table('education') ->where('id', '$id') ->limit(1) ->update( [ 'hide' =>'1' ]);

        return redirect("formetresume");
    }
    public function hidecertificated($id)
    {
        DB::update("UPDATE `achievements` SET `hide`='1' WHERE  id=?", [$id]);
        //DB::table('education') ->where('id', '$id') ->limit(1) ->update( [ 'hide' =>'1' ]);

        return redirect("formetresume");
    }
    public function studentinfoedit()
    {

        $id = Session::get('$sid');
        $data = DB::select("SELECT * FROM `student` WHERE id= '$id'");
        return view('studentinfoedit', ['data' => $data]);
    }
    public function simage(Request $req)
    {
        $id = Session::get('$sid');
        $file = $req->file;
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $req->file->move('images', $filename);
        DB::update("UPDATE `student` SET `image`='$filename' WHERE  id=?", [$id]);

        return redirect("formetresume");
    }
    public function adminlogin(Request $req)
    {
        $user = $req->username;
        $pass = $req->password;
        if ($user = "Admin" && $pass = "1234") {
            //return redirect("formetresume");
            return redirect("adminhome");
        } else {
            return redirect("adminlogin");
        }
    }
    public function  addstudent(Request $req)
    {
        $data = array("name" => $req->name, "id" => $req->id, "department" => $req->department, "email" => $req->email, "number" => $req->number, "gender" => $req->gender, "password" => md5($req->password), "dob" => $req->birthdaytime, "image" => "", "cgpa" => "", "github" => "", "website" => "", "linkedin" => "", "address" => "", "intro" => "", "about" => "");
        DB::table('student')->insert($data);
        try {
            $mail = new PHPMailer(true);
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'uiu.ecats@gmail.com';                     //SMTP username
            $mail->Password   = 'aeuzdymxmohxcdxq';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('uiu.ecats@gmail.com', 'UIU E-CATS Administrator (via eCATS)');
            $mail->addAddress($req->email, $req->name);     //Add a recipient




            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'UIU E-CATS: New user account';
            $mail->Body    = "Hi " . $req->id . "  " . $req->name . "<br>

            A new account has been created for you at <b>'UIU E-CATS'</b>
            and you have been issued with a new temporary password.<br>

            Your current login information is now:<br>
            username:" . $req->id . "<br>
            password: 1234<br>
            (you will have to change your password
            when you login for the first time)

            To start using 'UIU E-CATS’,login at
            http://lms.uiu.ac.bd/login/?lang=en

            <br> In most mail programs, this should appear as a blue link
            which you can just click on. If that doesn't work,
            then cut and paste the address into the address
            line at the top of your web browser window.<br>

            Cheers from the 'UIU E-CATS’ administrator,

            <br> UIU E-CATS Administrator
            <br> uiu.ecats@gmail.com";


            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }


        return redirect("addstudent");
    }
    public function  addteacher(Request $req)
    {
        $data = array("name" => $req->name, "id" => $req->id, "department" => $req->department, "email" => $req->email, "number" => $req->number, "gender" => $req->gender, "password" => md5($req->password), "profession" => $req->profession, "dob" => $req->birthdaytime, "room" => "", "pid" => "6", "image" => "");
        DB::table('teacher')->insert($data);
        try {
            $mail = new PHPMailer(true);
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'uiu.ecats@gmail.com';                     //SMTP username
            $mail->Password   = 'aeuzdymxmohxcdxq';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('uiu.ecats@gmail.com', 'UIU E-CATS Administrator (via eCATS)');
            $mail->addAddress($req->email, $req->name);     //Add a recipient




            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'UIU E-CATS: New user account';
            $mail->Body    = "Hi " . $req->id . "  " . $req->name . "<br>

            A new account has been created for you at <b>'UIU E-CATS'</b>
            and you have been issued with a new temporary password.<br>

            Your current login information is now:<br>
            username:" . $req->id . "<br>
            password: 1234<br>
            (you will have to change your password
            when you login for the first time)

            To start using 'UIU E-CATS’,login at
            http://lms.uiu.ac.bd/login/?lang=en

            <br> In most mail programs, this should appear as a blue link
            which you can just click on. If that doesn't work,
            then cut and paste the address into the address
            line at the top of your web browser window.<br>

            Cheers from the 'UIU E-CATS’ administrator,

            <br> UIU E-CATS Administrator
            <br> uiu.ecats@gmail.com";


            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }



        return redirect("addteacher");
    }


    public function tlogin(Request $req)
    {

        $username = $req->username;
        $pass = md5($req->password);



        $users = DB::select("SELECT * FROM `teacher` WHERE id= '$username' AND password='$pass'");

        foreach ($users as $user) {

            Session::put('$tid', $user->id);
            Session::put('$tname', $user->name);
            Session::put('$timage', $user->image);


            return redirect("teacherhome");
        }
        if ($users == false) {

            return redirect("admin_faculty_login");
        }
    }
    public function thome()
    {
        $tid = Session::get('$tid');
        $users = DB::select("Select * from course where tid='$tid'");
        $data = DB::select("SELECT * FROM `bokking` WHERE tid='$tid' ORDER BY id DESC");
        return view('teacherhome')->with(['data' => $data, 'users' => $users]);
    }
    public function ua()
    {
        $id = Session::get('$sid');
        $data = DB::select("SELECT * FROM `course` WHERE Occupied > '34' AND credit='1'");

        $data1 = DB::select("SELECT * FROM `apply` WHERE sid='$id' AND credit='1'");
        return view('uahome')->with(['data' => $data, 'data1' => $data1]);
    }

    public function uaapply(Request $req)
    {
        $sid = Session::get('$sid');
        $sname = Session::get('$sname');
        $cgpa = Session::get('$scgpa');


        $data2 = DB::select("SELECT * FROM `course` WHERE cname='$req->course' and section='$req->section'");
        foreach ($data2 as $da2) {
            $cname = $da2->cname;
            $tname = $da2->tname;
            $tid = $da2->tid;
            $section = $da2->section;
            $start = $da2->ctimestart;
            $end = $da2->ctimeend;
            $cid = $da2->cid;
            $credit = $da2->credit;
        }
        $data20 = array('cname' => $cname, "cid" => $cid, "sname" => $sname, "tname" => $tname, "tid" => $tid, "sid" => $sid, "section" => $section, "ctimestart" => $start, "ctimeend" => $end, 'cgpa' => $cgpa, 'credit' => $credit);
        DB::table('apply')->insert($data20);

        $data = DB::select("SELECT * FROM `course` WHERE Occupied > '34' AND credit='1'");

        $data1 = DB::select("SELECT * FROM `apply` WHERE sid='$sid' AND credit='1'");
        return view('uahome')->with(['data' => $data, 'data1' => $data1]);
    }


    public function grader()
    {
        $id = Session::get('$sid');
        $data = DB::select("SELECT * FROM `course` WHERE Occupied > '34' AND credit='3'");

        $data1 = DB::select("SELECT * FROM `apply` WHERE sid='$id'AND credit='3'");
        return view('graderhome')->with(['data' => $data, 'data1' => $data1]);
    }

    public function graderapply(Request $req)
    {
        $sid = Session::get('$sid');
        $sname = Session::get('$sname');
        $cgpa = Session::get('$scgpa');


        $data2 = DB::select("SELECT * FROM `course` WHERE cname='$req->course' and section='$req->section'");
        foreach ($data2 as $da2) {
            $cname = $da2->cname;
            $tname = $da2->tname;
            $tid = $da2->tid;
            $section = $da2->section;
            $start = $da2->ctimestart;
            $end = $da2->ctimeend;
            $cid = $da2->cid;
            $credit = $da2->credit;
        }
        $data21 = DB::select("SELECT * FROM `result` WHERE Student_Id='$sid' AND Course_Id='$cid'");
        foreach ($data21 as $row) {
            if ($row->Result == 'A') {
                $data20 = array('cname' => $cname, "cid" => $cid, "sname" => $sname, "tname" => $tname, "tid" => $tid, "sid" => $sid, "section" => $section, "ctimestart" => $start, "ctimeend" => $end, 'cgpa' => $cgpa, 'credit' => $credit);
                DB::table('apply')->insert($data20);

                $data = DB::select("SELECT * FROM `course` WHERE Occupied > '34' AND credit='3'");

                $data1 = DB::select("SELECT * FROM `apply` WHERE sid='$sid' AND credit='3'");
                return view('graderhome')->with(['data' => $data, 'data1' => $data1]);
            } else {
                $data = DB::select("SELECT * FROM `course` WHERE Occupied > '34' AND credit='3'");

                $data1 = DB::select("SELECT * FROM `apply` WHERE sid='$sid' AND credit='3'");
                return view('graderhome')->with(['data' => $data, 'data1' => $data1]);
            }
        }
        $data = DB::select("SELECT * FROM `course` WHERE Occupied > '34' AND credit='3'");

        $data1 = DB::select("SELECT * FROM `apply` WHERE sid='$sid' AND credit='3'");
        return view('graderhome')->with(['data' => $data, 'data1' => $data1]);
    }
    public function showua()
    {
        $data = DB::select("SELECT * FROM `course` WHERE Occupied > '34' AND credit='1'");

        $data100 = DB::select("SELECT * FROM `ta` where credit='1'");
        return view('teacher_ua_list')->with(['data' => $data, 'data100' => $data100]);
    }
    public function myua()
    {
        $tid = Session::get('$tid');

        $data = DB::select("SELECT * FROM `ta` WHERE tid='$tid'");
        $data2 = DB::select("SELECT * FROM `graderpyment` WHERE tid='$tid'");
        return view('teacher_request')->with(['data' => $data, 'data2' => $data2]);
    }
    public function uarej($id)
    {

        DB::UPDATE("UPDATE `ta` SET `status`='Reject' WHERE id='$id'");
        return redirect('teacher_request');
    }
    public function uaasp($id)
    {

        $data = DB::UPDATE("UPDATE `ta` SET `status`='Accept' WHERE id='$id'");
        return redirect('teacher_request');
    }
    public function ualist($id, $cid)
    {

        $data = DB::select("SELECT *
    FROM apply
    INNER JOIN student ON apply.sid=student.id WHERE apply.cid='$cid' and section='$id' ORDER BY(student.cgpa) DESC");
        return view('teacherua')->with(['data' => $data]);
    }
    public function addua($sid, $sname, $cid, $cname, $section, $tid)
    {

        $data = array('sid' => $sid, "cid" => $cid, "sname" => $sname, "tid" => $tid,  "cname" => $cname, "section" => $section, "status" => "Pending", "credit" => "1");
        DB::table('ta')->insert($data);
        return redirect('teacher_ua_list');
    }
    public function deleteuas($id)
    {
        DB::delete('DELETE FROM `ta` WHERE id = ?', [$id]);
        return redirect('teacher_ua_list');
    }
    public function showgrader()
    {
        $data = DB::select("SELECT * FROM `course` WHERE Occupied > '34' AND credit='3'");

        $data100 = DB::select("SELECT * FROM `ta` where credit='3'");
        return view('teacher_grader_list')->with(['data' => $data, 'data100' => $data100]);
    }
    public function graderlist($id, $cid)
    {

        $data = DB::select("SELECT *
    FROM apply
    INNER JOIN student ON apply.sid=student.id WHERE apply.cid='$cid' and section='$id' ORDER BY(student.cgpa) DESC");
        return view('teachergrader')->with(['data' => $data]);
    }
    public function addgrader($sid, $sname, $cid, $cname, $section, $tid)
    {


        $data = array('sid' => $sid, "cid" => $cid, "sname" => $sname, "tid" => $tid,  "cname" => $cname, "section" => $section, "status" => "Pending", "credit" => "3");
        DB::table('ta')->insert($data);
        return redirect('teacher_grader_list');
    }
    public function publicgrader()
    {



        $data = DB::select("SELECT *
     FROM ta
     INNER JOIN student ON ta.sid=student.id WHERE ta.credit='3' and ta.status='Accept'");
        foreach ($data as $row) {
            try {
                $mail = new PHPMailer(true);
                //Server settings
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'uiu.ecats@gmail.com';                     //SMTP username
                $mail->Password   = 'ybfxpahehsebhzpj';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom('uiu.ecats@gmail.com', 'UIU E-CATS Administrator (via eCATS)');
                $mail->addAddress($row->email, $row->name);     //Add a recipient




                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'UIU E-CATS: New user account';
                $mail->Body    = "Hi " . $row->id . "  " . $row->name . "<br>

            A new account has been created for you at <b>'UIU E-CATS'</b>
            and you have been issued with a new temporary password.<br>

            Your current login information is now:<br>
            username:" . $row->id . "<br>
            password: 1234<br>
            (you will have to change your password
            when you login for the first time)

            To start using 'UIU E-CATS’,login at
            http://lms.uiu.ac.bd/login/?lang=en

            <br> In most mail programs, this should appear as a blue link
            which you can just click on. If that doesn't work,
            then cut and paste the address into the address
            line at the top of your web browser window.<br>

            Cheers from the 'UIU E-CATS’ administrator,

            <br> UIU E-CATS Administrator
            <br> uiu.ecats@gmail.com";


                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
            //return redirect('teacher_grader_list');
        }
    }

    public function publicua()
    {



        $data = DB::select("SELECT *
    FROM ta
    INNER JOIN student ON ta.sid=student.id WHERE ta.credit='1' and ta.status='Accept'");
        foreach ($data as $row) {
            try {
                $mail = new PHPMailer(true);
                //Server settings
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'uiu.ecats@gmail.com';                     //SMTP username
                $mail->Password   = 'aeuzdymxmohxcdxq';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom('uiu.ecats@gmail.com', 'UIU E-CATS Administrator (via eCATS)');
                $mail->addAddress($row->email, $row->name);     //Add a recipient




                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Selected as a UA';
                $mail->Body    = "
           Dear " . "$row->name" . ",<br>

Congratulations! You have been selected as an undergraduate assistant for the following course.

Course Code:" . "$row->cid" . "<br>
Course Title:" . " $row->cname " . "<br>
Section:" . " $row->section " . "<br>


Student ID: " . " $row->sid " . "<br>
Student Name: " . " $row->name " . "<br>
Contact No:" . " $row->number " . "<br>

Please be present in due time and feel free to contact us if you have any further query.<br>

Regards,<br>

Farhan Anan Himu<br>
Lecturer<br>
Department of Computer Science & Engineering<br>
United International University<br>

           ";


                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
            return redirect('teacher_grader_list');
        }
    }

    public function projectshowhome()
    {

        $data = DB::select("SELECT * FROM `project` WHERE  cid!=''");


        return view('projectshowhome')->with(['data' => $data]);
    }
    // public function projectshowhomes(Request $request)
    // {

    //     $data = DB::select("SELECT * FROM `project` WHERE  cid!=''");
    //     if($request->ajax){
    //         $data = DB::select("SELECT * FROM `project` WHERE  cid='$request->cid'");
    //         return response()->json(['cid'=>$data]);

    //     }

    //     return view('projectshowhome')->with(['data' => $data]);
    // }

    public function p_details($id)
    {
        $data = DB::select("SELECT * FROM `project` WHERE project_id='$id'");

        $data1 = DB::select("SELECT * FROM `project_partner` WHERE  project_id='$id'");

        $data2 = DB::select("SELECT * FROM `project_image` WHERE id='$id'");
        $data3 = DB::select("SELECT * FROM `review` WHERE  pid='$id'");

        $data4 = DB::select("SELECT SUM(star) as a, COUNT(id) as b FROM review WHERE   pid='$id'");



        return view('p_details')->with(['data' => $data, 'data1' => $data1, 'data2' => $data2, 'data3' => $data3, 'data4' => $data4]);
    }
    public function p_rating($id)
    {

        // $comment = $req->com;
        // $star = $req->rate;

        // $sid = Session::get('$sid');
        // $sname = Session::get('$sname');
        // $data = array('star' => $star, "comment" => $comment,  "sid" => $sid, "sname" => $sname, "pid" => "$id");
        // DB::table('review')->insert($data);


        return view('p_rating');
    }
    public function p_ratingone($id, Request $req)
    {

        $comment = $req->com;
        $star = $req->rate;

        $sid = Session::get('$sid');
        $sname = Session::get('$sname');
        $data = array('star' => $star, "comment" => $comment,  "sid" => $sid, "sname" => $sname, "pid" => "$id");
        DB::table('review')->insert($data);


        return redirect('projectshowhome');
    }
    public function addeducation(Request $req)
    {
        $pname = $req->pname;
        $pd = $req->pd;
        $pl = $req->pl;
        $end = $req->end;
        $id = Session::get('$sid');
        $sname = Session::get('$sname');
        $data = array('name' => $pname, "subject" => $pd, "start" => $pl, "end" => $end, "sid" => $id, "sname" => $sname, "hide" => "0");
        DB::table('education')->insert($data);


        return redirect("studentprofile");
    }
    public function deleteeducation($id)
    {
        DB::delete('DELETE FROM `education` WHERE  id = ?', [$id]);

        return redirect("studentprofile");
    }
    public function addproject(Request $req)
    {

        $pname = $req->pname;
        $pd = $req->pd;
        $pl = $req->pl;
        $id = Session::get('$sid');
        $sname = Session::get('$sname');
        $data = array('project_name' => $pname, "project_dis" => $pd, "project_link" => $pl, "sid" => $id, "sname" => $sname, "fid" => "", "hide" => "0", "tri" => "", "cid" => "", "cname" => "", "sec" => "", "tn" => "", "image" => "", "video" => "", "position" => "");
        DB::table('project')->insert($data);
        return redirect("studentprofile");
    }
    public function projectpropojalfrom(Request $req)
    {
        $id = Session::get('$sid');
        $sname = Session::get('$sname');
        $pt = $req->pt;
        $tn = $req->tn;
        $tri = $req->tri;
        $cn = $req->cn;
        $ci = $req->ci;
        $sec = $req->sec;
        $faculty = $req->faculty;
        $de = $req->de;

        $data = array('project_name' => $pt, "project_dis" => $de, "project_link" => "", "sid" => $id, "sname" => $sname, "fid" => "$faculty", "hide" => "0", "tri" => "$tri", "cid" => "$ci", "cname" => "$cn", "sec" => "$sec", "tn" => "$tn", "image" => "", "video" => "", "position" => "");
        DB::table('project')->insert($data);
        return redirect("projectpropojalfrom");
    }
    public function showtacherinprojectfrom()
    {
        $sid = Session::get('$sid');
        $data2 = DB::select("SELECT * FROM `project` WHERE sid='$sid'");
        $data = DB::select("SELECT * FROM `teacher`");
        return view('projectpropojalfrom', ['data' => $data], ['data2' => $data2]);
    }
    public function myproject()
    {

        $sid = Session::get('$sid');
        $data4 = DB::select("SELECT * FROM `project` WHERE sid='$sid'");
        return view('myproject', ['data4' => $data4]);
    }
    public function grader_payment_form()
    {
        $sid = Session::get('$sid');


        $data5 = DB::select(" SELECT * FROM `graderpyment` WHERE sid='$sid'");
        return response()->json(['data5' => $data5]);
        // return view('grader_payment_form', ['data4' => $data4,'data5' => $data5]);
    }
    public function grader_payment_formone(Request $req)
    {
        $sid = Session::get('$sid');

        $name = $req->name;
        $cid = $req->cid;
        $as1 = $req->as1;
        $as2 = $req->as2;
        $as3 = $req->as3;
        $as4 = $req->as4;
        $sec = $req->sec;
        $tid = $req->tid;



        $data = array('sid' => $sid, "sname" => $name, "as1" => "$as1", "as2" => $as2, "as3" => $as3, "as4" => "$as4", "section" => "$sec", "cid" => $cid, "status" => "Pending", "tid" => $tid);
        DB::table('graderpyment')->insert($data);






        return redirect("grader_payment_form_show");
    }
    public function grader_payment_form_show()
    {
        $data4 = DB::select("SELECT DISTINCT(cid),cname FROM `course` WHERE credit='3' ");
        $data5 = DB::select(" SELECT * FROM `teacher`");
        return view('grader_payment_form_show', ['data4' => $data4, 'data5' => $data5]);
    }
    public function deleteuser($id)
    {

        DB::delete('DELETE FROM `graderpyment` where id = ?', [$id]);

        return redirect("grader_payment_form_show");
    }
    public function projectshowedit($id)
    {
        $data5 = DB::select(" SELECT * FROM `teacher`");
        $data6 = DB::select("SELECT * FROM `project` WHERE project_id='$id'");
        $data7 = DB::select("SELECT * FROM `project_image` WHERE id='$id'");


        $data8 = DB::select("SELECT * FROM `project_partner` WHERE project_id='$id'");
        $data9 = DB::select(" SELECT * FROM `student`");

        return view('projectshowedit', ['data' => $data5,'data6'=>$data6,'data7'=>$data7,'data8'=>$data8,'data9'=>$data9]);
    }
    public function teacherprofile()
    {
        $tid = Session::get('$tid');

        $data = DB::select("SELECT * FROM `teacher` where id='$tid'");
        $data1 = DB::select("SELECT * FROM `course` WHERE tid='$tid'");

        $data2 = DB::select(" SELECT * FROM time_schedule WHERE tid='$tid'");

        $data3 = DB::select("SELECT * FROM `bokking` WHERE tid='$tid'");





        return view('teacherprofile')->with(['data' => $data, 'data1' => $data1, 'data2' => $data2, 'data3' => $data3]);
    }

    public function teacherprofilefrom(Request $request)
    {
        $tid = Session::get('$tid');



        $tname = Session::get('$tname');

        $day = $request->day;
        $start = $request->start;
        $end = $request->end;

        $data20 = array('tid' => $tid, "tname" => $tname, "day" => $day, "start" => $start, "end" => $end);
        DB::table('time_schedule')->insert($data20);
        $data = DB::select("SELECT * FROM `teacher` where id='$tid'");
        $data1 = DB::select("SELECT * FROM `course` WHERE tid='$tid'");

        $data2 = DB::select(" SELECT * FROM time_schedule WHERE tid='$tid'");

        $data3 = DB::select("SELECT * FROM `bokking` WHERE tid='$tid'");

        return redirect("teacherprofile");

        //return view('teacherprofile')->with(['data' => $data, 'data1' => $data1, 'data2' => $data2, 'data3' => $data3]);
    }
    public function timage(Request $request)
    {
        $tid = Session::get('$tid');
        $request->image;



        // Move the uploaded image to the storage location
        $image =  $request->image;;
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('images'), $imageName);












        DB::update("UPDATE `teacher` SET `image`='$imageName' WHERE  id=?", [$tid]);

        $data = DB::select("SELECT * FROM `teacher` where id='$tid'");
        $data1 = DB::select("SELECT * FROM `course` WHERE tid='$tid'");

        $data2 = DB::select(" SELECT * FROM time_schedule WHERE tid='$tid'");

        $data3 = DB::select("SELECT * FROM `bokking` WHERE tid='$tid'");



        return view('teacherprofile')->with(['data' => $data, 'data1' => $data1, 'data2' => $data2, 'data3' => $data3]);
    }


    public function projectshowprofile(){
        $sid = Session::get('$sid');
        $data = DB::select("SELECT * FROM `project` WHERE sid='$sid'");


         return view('projectshowprofile')->with(['data' => $data]);

    }
    public function get_states(Request $request){
        $cname=$request->course;
        $data = DB::select("SELECT * FROM `course` WHERE cname='$cname'");
        return response()->json($data);


    }
    public function get_uacourse(Request $request){

        $cname=$request->course;
        $data = DB::select("SELECT * FROM `course` WHERE cname='$cname'");
        return response()->json($data);


    }
    public function addpatners($id,$pid){
        $data = DB::select("SELECT * FROM `student` WHERE id='$id'");
         foreach($data as $da){
            $name=$da->name;
            $sid=$da->id;
            $image=$da->image;


         }
         $data = array('project_id' => $pid, "partnerName" => $name, "partnerID" => $sid, "image" => $image);
        DB::table('project_partner')->insert($data);


        return redirect("projectshowedit/$pid");


    }

}
