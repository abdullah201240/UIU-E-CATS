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
    public function deleteua($id){

        DB::delete('DELETE FROM `apply` WHERE id= ?', [$id]);

        return redirect("uahome");
    }
    public function deletegrader($id){

        DB::delete('DELETE FROM `apply` WHERE id= ?', [$id]);

        return redirect("graderhome");
    }
    public function hostel_registration_form(Request $req){
        $data = array('sid' => $req->id, "email" => $req->email, "sname" => $req->name, "phone" => $req->phoneNumber, "gender" => $req->gender, "status" => "Panding");
        DB::table('hostel')->insert($data);

return redirect("hostel_registration_form");

    }
}
