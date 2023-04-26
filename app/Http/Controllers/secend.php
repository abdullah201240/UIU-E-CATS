<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Datetime;
use Response;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

use Illuminate\Support\Facades\Storage;


class secend extends Controller
{
    public function deleteua($id)
    {

        DB::delete('DELETE FROM `apply` WHERE id= ?', [$id]);

        return redirect("uahome");
    }
    public function deletegrader($id)
    {

        DB::delete('DELETE FROM `apply` WHERE id= ?', [$id]);

        return redirect("graderhome");
    }
    public function hostel_registration_form(Request $req)
    {
        $data = array('sid' => $req->sid, 'floor' => $req->floor, 'password' => '', 'date' => $req->date, "seatNum" => $req->seat, "email" => $req->semail, "sname" => $req->sname, "phone" => $req->sphone, "gender" => $req->gender, "status" => "Panding");
        DB::table('hostel')->insert($data);

        return redirect("hostel_registration_form");
    }

    public function hostel_registration()
    {
        $data = DB::select("SELECT * FROM `hostel` WHERE floor='1(A)'");
        $data1 = DB::select("SELECT * FROM `hostel` WHERE floor='1(B)'");
        $data2 = DB::select("SELECT * FROM `hostel` WHERE floor='2(A)'");
        $data3 = DB::select("SELECT * FROM `hostel` WHERE floor='2(B)'");
        $data4 = DB::select("SELECT * FROM `hostel` WHERE floor='3(A)'");
        $data5 = DB::select("SELECT * FROM `hostel` WHERE floor='3(B)'");
        $data6 = DB::select("SELECT * FROM `hostel` WHERE floor='4(A)'");
        $data7 = DB::select("SELECT * FROM `hostel` WHERE floor='4(B)'");
        $data8 = DB::select("SELECT * FROM `hostel` WHERE floor='5(A)'");
        $data9 = DB::select("SELECT * FROM `hostel` WHERE floor='5(B)'");
        $data10 = DB::select("SELECT * FROM `hostel` WHERE floor='6(A)'");
        $data11 = DB::select("SELECT * FROM `hostel` WHERE floor='6(B)'");
        return view('hostel_registration_form')->with(['data' => $data, 'data1' => $data1, 'data2' => $data2, 'data3' => $data3, 'data4' => $data4, 'data5' => $data5, 'data6' => $data6, 'data7' => $data7, 'data8' => $data8, 'data9' => $data9, 'data10' => $data10, 'data11' => $data11]);
    }
    public function get_info(Request $req)
    {

        $sid = $req->sid;
        $data = DB::select("SELECT * FROM `student` WHERE sid='$sid'");
        return response()->json($data);
    }
    public function admin_hostel_bokking_table()
    {

        $data = DB::select("SELECT * FROM `hostel`");
        return view('admin_hostel_bokking_table')->with(['data' => $data]);
    }
    public function hostledle($id)
    {

        DB::update("UPDATE `hostel` SET `status`='Cancel' WHERE id=?", [$id]);

        return redirect("admin_hostel_bokking_table");
    }
    public function hostleasp($id)
    {
        $pass = md5("1234");
        DB::update("UPDATE `hostel` SET `status`='Accept',password='$pass' WHERE id=?", [$id]);

        // $data1 = DB::select("SELECT * FROM `hostel` where id='$id'");
        // foreach($data1 as $da1){

        //     $sname=$da1->sname;
        //     $sid=$da1->sid;
        //     $email=$da1->email;
        //     $phone=$da1->phone;
        //     $seat=$da1->seatNum;
        // }

        // $data = array('sid' => $req->sid, 'date' => $req->date, "seatNum" => $req->seat, "email" => $req->semail, "sname" => $req->sname, "phone" => $req->sphone, "gender" => $req->gender, "status" => "Panding");
        // DB::table('hostel')->insert($data);
        return redirect("admin_hostel_bokking_table");
    }
    public function student_login(Request $req)
    {
        $pass = md5($req->password);
        $data1 = DB::select("SELECT * FROM `hostel` where sid='$req->username' and password='$pass'");
        foreach ($data1 as $row) {

            Session::put('$hid', $row->sid);
            Session::put('$hname', $row->sname);
            return redirect("hostel_home");
        }
        if ($data1 == false) {

            return redirect("student_login");
        }
    }
    public function hostel_home()
    {
        $hid = Session::get('$hid');
        $t = 0;
        $data2 = DB::select(" SELECT * FROM `hostel_pay` WHERE sid='$hid'");
        foreach ($data2 as $row2) {
            $t = $t + $row2->amount;
        }


        $data1 = DB::select(" SELECT * FROM `hostel` where sid='$hid'");

        foreach ($data1 as $row) {
            $birthday = $row->date;
            //$date = new DateTime($row->date);
            $birthdate = new DateTime($birthday);
            $currentdate = new DateTime();
            $age = $birthdate->diff($currentdate);
        }





        return view('hostel_home')->with(['data1' => $data1, 'diff' => $age, 't' => $t, 'data2' => $data2]);
    }
    public function addalumni(Request $req)
    {
        $pass = md5("1234");
        $data = array('id' => $req->id, 'name' => $req->name, 'password' => $pass, 'bdate' => $req->birthdaytime, "department" => $req->department, "email" => $req->email, "phone" => $req->number, "gender" => $req->gender);
        DB::table('alumni')->insert($data);

        return redirect("addalumni");
    }

    public function uapyrej($id)
    {

        DB::update("UPDATE `graderpyment` SET `status`='Cancel' WHERE id=?", [$id]);

        return redirect("teacher_request");
    }
    public function uapyasp($id)
    {
        DB::update("UPDATE `graderpyment` SET `status`='Accpect' WHERE id=?", [$id]);

        return redirect("teacher_request");
    }
    public function admingrader()
    {

        $data = DB::select("SELECT * FROM `graderpyment`");

        return view('admingrader')->with(['data' => $data]);
    }
    public function ready($id)
    {
        DB::update("UPDATE `graderpyment` SET `status`='Ready for Payment' WHERE id=?", [$id]);

        return redirect("admingrader");
    }
    public function unlucky($id)
    {
        DB::update("UPDATE `graderpyment` SET `status`='Cancel from admin' WHERE id=?", [$id]);

        return redirect("admingrader");
    }
    public function alumnilogin(Request $req)
    {
        $pass = md5($req->password);
        $data1 = DB::select("SELECT * FROM `alumni` WHERE id='$req->id' and password='$pass'");
        foreach ($data1 as $row) {

            Session::put('$aid', $row->id);
            Session::put('$aname', $row->name);
            Session::put('$aimage', $row->image);
            return redirect("newsfeed");
        }
        if ($data1 == false) {

            return redirect("alumnilogin");
        }
    }
    public function newsfeed()
    {
        $aid = Session::get('$aid');
        $data = DB::select("SELECT * FROM `alumni` WHERE id='$aid' ");
        $data1 = DB::select("SELECT * FROM `newspost` ORDER BY(id) DESC ");

        return view('newsfeed')->with(['data' => $data,'data1'=>$data1]);
    }
    public function newspost(Request $req)
    {
        $aid = Session::get('$aid');
        $aname = Session::get('$aname');
        $aimage=Session::get('$aimage');
        $file = $req->file;
        $time=date("Y-m-d h:m:s");

        $img_name = $_FILES['file']['name'];
        $img_size = $_FILES['file']['size'];
        $tmp_name = $_FILES['file']['tmp_name'];
        $error = $_FILES['file']['error'];

        if ($error === 0) {

            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png", "pdf", "doc", "ppt");

            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                $img_upload_path = 'images/' . $new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                // Insert into Database
                $data = array('aid' => $aid, 'userimage'=>$aimage,'time'=>$time,'aname' => $aname, 'image' => $new_img_name, 'text' => $req->postText);
                DB::table('newspost')->insert($data);

                return redirect("newsfeed");
            }
        }
    }
    public function comment(Request $req){
        $data = array('aid' => $req->aid, 'userimage'=>$req->userimage,'cid'=>$req->cid,'aname' => $req->aname,  'comment' => $req->comments);
                DB::table('postcomment')->insert($data);
                return redirect("newsfeed");
    }
    public function showcomment($id){
        $data = DB::select("SELECT * FROM `postcomment` WHERE cid='$id' ");
        return response()->json(['data' => $data]);

    }
public function alumniprofile(){
    $aid = Session::get('$aid');

    $data = DB::select(" SELECT * FROM `alumni` WHERE id='$aid' ");
    $data1 = DB::select(" SELECT * FROM `alumnieducation` WHERE aid='$aid' ");
    $data2 = DB::select(" SELECT * FROM `alumniskill` WHERE aid='$aid' ");
    $data3 = DB::select(" SELECT * FROM `alumnilanguage` WHERE aid='$aid' ");
    $data4 = DB::select(" SELECT * FROM `newspost` WHERE aid='$aid' ");

    return view('alumniprofile')->with(['data' => $data,'data1'=>$data1,'data2'=>$data2,'data3'=>$data3,'data4'=>$data4]);

}
public function alumnieducation(Request $req){
    $aid = Session::get('$aid');
    $aname = Session::get('$aname');
    $data = array('aid' => $aid, 'aname' => $aname,'name'=>$req->name,'degree'=>$req->degree,  'year' => $req->year);
    DB::table('alumnieducation')->insert($data);
    return redirect("alumniprofile");
}
public function alumni_delete_education($id){
    DB::delete('DELETE FROM `alumnieducation` WHERE id= ?', [$id]);


    return redirect("alumniprofile");
}
public function alumniaddexprience(Request $req){

 $aid = Session::get('$aid');
    $aname = Session::get('$aname');
    $data = array('aid' => $aid, 'aname' => $aname,'description'=>$req->description,'employment_type'=>$req->employment_type,  'job_title' => $req->job_title,'company_name'=>$req->company_name);
    DB::table('alumniexprience')->insert($data);
    return redirect("alumniprofile");

}
public function alumniaddskill(Request $req){
    $aid = Session::get('$aid');
    $aname = Session::get('$aname');
    $data = array('aid' => $aid, 'aname' => $aname,'skill'=>$req->skill_name);
    DB::table('alumniskill')->insert($data);
    return redirect("alumniprofile");
}
public function alumniaddlanguage(Request $req){
    $aid = Session::get('$aid');
    $aname = Session::get('$aname');
    $data = array('aid' => $aid, 'aname' => $aname,'lang'=>$req->lang);
    DB::table('alumnilanguage')->insert($data);
    return redirect("alumniprofile");
}
public function dletepost($id){
    DB::delete('DELETE FROM `newspost` WHERE id= ?', [$id]);

    return redirect("alumniprofile");
}
}

