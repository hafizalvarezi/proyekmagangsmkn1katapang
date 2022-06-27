<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        
    }

    public function simpanregistrasi(Request $request){
        $data = [
            'email' =>$request->input('email'),
            'password' =>$request->input('password'),
            'level' => 'pelanggan',
            'api_token' => '123456',
            'status' => '1',
            'relasi' =>$request->input('email'),
        ];

        User::create($data);

        return response()->json($data);
    }

    public function index(){

        echo "Halaman Login";
    }

    public function postlogin(Request $request){
        
        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::where('email',$email)->first();

        if ($user->password === $password) {
            $token = Str::random(40);

            $user->update([
                'api_token' => $token
            ]);

            return response()->json([
                'pesan' => 'login berhasil',
                'token' => $token,
                'data' => $user
            ]);
        }else{
            return response()->json([
                'pesan' => 'login gagal',
                'data' => ''
            ]);
        }
    }
}