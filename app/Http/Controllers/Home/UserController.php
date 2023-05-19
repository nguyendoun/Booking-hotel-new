<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use File;

class UserController extends Controller
{
    use RegistersUsers;

    public function showlogin(){
        return view('home.login');
    }

    public function login(Request $request)
    {
        
        $this->validate($request,[
            'password'=>'min:3|max:30'
        ],[
            
            'password.required' => 'bạn chưa nhập pass',
            'password.min' =>'pass không dc nhỏ hơn 3 ký tự',
            'password.max' =>'pass không được lớn hơn 30 ký tự'
        ]);
        $data = $request->only('email', 'password');
        if(Auth::attempt($data))
        {
            return redirect()->back()->with(['success'=>'đăng nhập thành công']);
        }
        else
        {
            // return redirect('admin.showlogin')->with('thongbao','đăng nhập thất bại');
            return redirect()->back()->with(['error'=>'đăng nhập thất bại']);
        }
        
    }
    public function logout()
    { 
        Auth::logout();
        return redirect('');
    }

    // public function showregister(){
    //     return view('home.register');
    // }

    public function register(Request $request)
    {
        $this->validate($request,[
            'email' =>'unique:users', 'email', 'max:255', 
            'password'=>'min:8|max:30|string', 
            'phone' =>'unique:users|numeric|min:9', 'max:11',
        ],[
            // 'email.required' => 'email không được để trống',
            'email.unique' => 'email này đã được sử dụng',
            'email.email' => 'email không hợp lệ',
            'email.max' => 'email không được quá 255 kí tự',
            

            'password.min' =>'pass không dc nhỏ hơn 8 ký tự',
            'password.max' =>'pass không được lớn hơn 30 ký tự',
            // 'password.required' =>'pass không được để trống',
            // 'password.comfirmed' =>'pass không hợp lệ', 

            'phone.unique' => 'số điện thoại này đã được sử dụng',
            'phone.numeric' => 'số điện thoại phải là dạng số',
            'phone.min' => 'số điện thoại phải lớn hơn 9 kí tự',
            'phone.max' => 'số điện thoại phải không quá 11 kí tự',
            

        ]);
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        $user=User::create($data);
        $this->guard()->login($user);
        return redirect()->to('/'); //sau khi đk xog  bỏ qua bước login chỉ tới trang home
    }
    public function loginthanhtoan(Request $request)
    {
        $this->validate($request,[
            'email' =>['email', 'max:255'], 
            'password'=>'min:3|max:30'
        ],[
            'email.email' => 'email không hợp lệ',
            'email.max' => 'email không được quá 255 kí tự',
            'password.required' => 'bạn chưa nhập pass',
            'password.min' =>'pass không dc nhỏ hơn 3 ký tự',
            'password.max' =>'pass không được lớn hơn 30 ký tự'
        ]);
        $data = $request->only('email', 'password');
        if(Auth::attempt($data))
        {
            return redirect()->back()->with(['success'=>'đăng nhập thành công']);
        }
        else
        {
            return redirect()->back()->with(['error'=>'đăng nhập thất bại']);
        }
        
    }

    // edit
    public function showacc(){
        return view('account.account');
    }
    public function update(Request $request){
        $id = Auth::user()->id;
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');

        if($request->hasfile('image')){
            $des = 'images/'.$user->image;
            if(File::exists($des)){
                File::delete($des);
            }
            $file = $request->file('image');
        $ex = $file->getClientOriginalExtension();
        $filename = time().'.'.$ex;
        $file->move('images/', $filename);
        $user->image = $filename;
        }
        

        $user->update();
        return redirect()->back()->with(['mess'=> "update thành công"]);
    }
}
