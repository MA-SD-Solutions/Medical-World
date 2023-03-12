<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UpdatePasswordRequest;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;
use App\Models\User;
class ChangePasswordController extends Controller {


    public function passwordResetProcess(Request $request){
      $lang = $request->header('lang');
      
        if($this->updatePasswordRow($request)->count() != 0){
          return response()->json([
            'status' => 'success',
            'message' => $lang == 'ar' ? 'تم تأكيد البريد الالكترونى' : 'Email Verified',
            'data' => ['message' => 'Email Verified']
          ]);
        }else{
          return response()->json([
            'status' => 'error',
            'message' => $lang == 'ar' ? 'خطأ فى البريدالالكترونى او الكود' : 'Either your email or OTP is wrong.',
            'data' => ['message' => 'Either your email or OTP is wrong']
          ]);
        }
      
      }
    
    
    // Verify if token is valid
    private function updatePasswordRow($request){
       return DB::table('password_resets')->where([
           'email' => $request->email,
           'token' => $request->token
       ]);
    }    
    
    // Reset password
    public function resetPassword(Request $request) {
      $lang = $request->header('lang');

      try{
        //  find email
        $userData = User::whereEmail($request->email)->first();
        if($userData != NULL){
           // update password

          $userData->update([
            'password'=>bcrypt($request->password)
          ]);
        }else{
          return response()->json([
            'status' => 'error',
            'message' => $lang == 'ar' ? 'خطأ فى البريد الاكترونى' : 'Email is Wrong',
            'data' => ['message' => 'Email is Wrong']
          ]);
        }
       
        
        // remove verification data from db
        
        $this->updatePasswordRow($request)->delete();
        // reset password response

        return response()->json([
          'status' => 'success',
          'message' => $lang == 'ar' ? 'تم تغيير الرقم السرى بنجاح' : 'Password has been updated.',
          'data' => ['message' => 'password has been updated']
        ]);
    
      }catch(Exception $e){
        return response()->json([
          'status' => 'error',
          'message' => $lang == 'ar' ? 'لم يتم تغيير الرقم السري' : 'Updating Failed',
          'data' => ['message' => 'Updating Failed']
        ]);
      }
    
    } 

}