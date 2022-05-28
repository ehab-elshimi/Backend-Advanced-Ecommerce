<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class IndexController extends Controller
{
    public function index(){
        return view('frontend.index');
    }
    public function UserProfile(){
        $id=Auth::user()->id;
        $user = User::find($id);
        return view('frontend.profile.user_profile',compact('user'));
    }
    public function UserLogout(){
        Auth::logout();
        return redirect()->route('login');
    }
    public function UserProfileUpdate(){
        $id=Auth::user()->id;
        $user = User::find($id);
        return view('frontend.profile.user',compact('user'));

    }
    public function UserProfileStore(Request $request){
        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        if($request->file('profile_photo_path')){
            $file = $request->file('profile_photo_path');
            if(!empty($data->profile_photo_path)){
            unlink(public_path('upload\user_images\\'.$data->profile_photo_path));
            }
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_images'),$filename);
            $data['profile_photo_path'] = $filename;
        }
        $data->save();
        $notification = array(
            'message' => 'User Profile Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('dashboard')->with($notification);
    }
    public function UserChangePassword(){
        $id=Auth::user()->id;
        $user = User::find($id);
        return view('frontend.profile.change_password',compact('user'));
    }
    public function UserUpdateChangePassword(Request $request){


        $hashedPassword = User::find(Auth::user()->id)->password;
        if(Hash::check($request->oldpassword,$hashedPassword)){
            $data = User::find(Auth::user()->id);
            $data->password = Hash::make($request->password);
            $data->save();
            $notification = array(
                'message' => 'Password Updated Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('user.logout')->with($notification);
        }else{
            return redirect()->back();
        }

    }
}
