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
        $data = array('sid' => $req->sid,'password'=>'', 'date' => $req->date, "seatNum" => $req->seat, "email" => $req->semail, "sname" => $req->sname, "phone" => $req->sphone, "gender" => $req->gender, "status" => "Panding");
        DB::table('hostel')->insert($data);

        return redirect("hostel_registration_form");
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
        $pass=md5("1234");
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
    public function student_login(Request $req) {
        $pass=md5($req->password);
        $data1 = DB::select("SELECT * FROM `hostel` where sid='$req->username' and password='$pass'");
      foreach($data1 as $row){

        Session::put('$hid', $row->sid);
        Session::put('$hname', $row->sname);
        return redirect("hostel_home");
      }
      if ($data1 == false) {

        return redirect("student_login");
    }

    }
    public function hostel_home(){
        $hid = Session::get('$hid');

        $data1 = DB::select(" SELECT * FROM `hostel` where sid='$hid'");
        return view('hostel_home')->with(['data1' => $data1]);

    }
}
