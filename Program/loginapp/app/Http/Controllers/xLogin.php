<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mlogin;

class Login extends Controller
{
    // buat variabel 
    protected $model;
    function __construct()
    {
        // inisialisasi model "Mlogin"
        $this->model = new Mlogin();
    }
    function index ()
    {
        // manggil view login
        
        return view("login");
    }
    // buat fungsi baru untuk ambil data
    function getLogin(Request $req)
    {
        // collecting data input (username dan password)
        // "username" = nama variabel array
        // "$req->username" = nama object yang di kirim dari "fetch"
        $data = [
            "username" => $req->username,
            "password" => base64_encode(md5 ($req->password)),
        ];
        // cek data/record dari "tb_user"
        // jika data di temukan
        if(count($this->model->getData($data["username"],$data["password"])) ==1)
        {
            // buat session
            $req -> session()->put("username_loginapp",$data["username"]);
            $output = 1;
        }
        // jika data tidak di temukan
        else
        {
            $output = 0;
        }
        // kirim nilai variabel "$output" ke "then (result)" dari pada fetch
        echo json_encode(["output" => $output]); 
    }
}
