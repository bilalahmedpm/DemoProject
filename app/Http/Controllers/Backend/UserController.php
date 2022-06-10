<?php

namespace App\Http\Controllers\Backend;
use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function UserView ()
    {
        $allusers['alldata']  = User::All();
        return view ('Backend.User.View_User',$allusers);
    }

    public function UserAdd()
    {

        return view('Backend.User.Add_User');
    }
    public function UserStore(Request $request)
    {

        $users = new user();
        $users->usertype = $request->usertype;
        $users->name = $request->username;
        $users->email = $request->useremail;
        $users->password =bcrypt($request->userpassword);
        $users->save();

        $notification = array(
            'alert-type' => 'success',
            'message' => 'User Added Successfully'

        );

        return redirect()->route('user.view')->with($notification);
    }

public function UserEdit($id)
{
    // $users = user::all();
    $users = User::find($id);
    return view ('Backend.User.Edit_User' , compact('users'));
    // return $users;
}

public function UserUpdate(request $request ,  $id)
{
    $users = User::find($id);
    $users->usertype = $request->usertype;
    $users->name = $request->username;
    $users->email = $request->useremail;
    $users->save();

    $notification = array(
        'alert-type' => 'info',
        'message' => 'User Update Successfully'

    );

    return redirect()->route('user.view')->with($notification);

}

public function UserDelete($id){
    $users = User::find($id);
    $users->delete();

    $notification = array(
        'message' => 'User Deleted Successfully',
        'alert-type' => 'success'
    );

    return redirect()->route('user.view')->with($notification);

}



}
