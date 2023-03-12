<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Notifications\PasswordReset;
use App\Models\Notifications;
use Illuminate\Support\Facades\Notification;


class PasswordResetRequestController extends Controller {
  
    public function sendPasswordResetEmail(Request $request){
        $lang = $request->header('lang');
        // If email does not exist
        if(!$this->validEmail($request->email)) {
            return response()->json([
                'status' => 'error',
                'message' => $lang == 'ar' ? 'خطأ فى البريد الالكترونى' : 'Email does not exist.',
                'data'=>['message' => 'Email does not exist']
            ]);
        } else {
            // If email exists
            // dd($request->email);
            $this->sendMail($request->email);
            return response()->json([
                'status' => 'success',
                'message' => $lang == 'ar' ? 'رجاء تفقد بريدك الالكترونى لاستعادة كلمة المرور' : 'Check your inbox, we have sent a code to reset email.',
                'data' => ['message' => 'Check your inbox, we have sent a code to reset email.']                
            ]);            
        }
    }

    public function sendMail($email){

        $user = User::where('email', $email)->first();
        $token = $this->generateToken($email);
        $data = [
            'subject'=>'Reset Password',
            'greeting' => 'Dear, '. $user->name ,
            'body' => 'Verfication Code: ' . $token,
            'thanks' => 'thanks',
        ];
            Notification::send($user, new PasswordReset($data));
    }

    public function validEmail($email) {
        return !!User::where('email', $email)->first();
        
    }

    public function generateToken($email){

      $token = mt_rand(1111,9999);
      $this->storeToken($token, $email);
      return $token;
    }
    public function storeToken($token, $email){
        DB::table('password_resets')->insert([
            'email' => $email,
            'token' => $token,
            'created_at' => Carbon::now()            
        ]);
    }
    
}