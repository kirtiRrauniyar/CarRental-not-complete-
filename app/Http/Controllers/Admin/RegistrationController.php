<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class RegistrationController extends Controller
{
   public function index()
   {
      $getcabownerdata = Admin::where('type','Cab-Owner')->get();
     return view('admin.registration.cab_registration_list')->with(compact('getcabownerdata'));
   }
   public function create($id=null)
   {
    $getcabownerdata= Admin::where('type','Cab-Owner')->find($id);
     return view('admin.registration.cab_registration_addupdate')->with(compact('getcabownerdata'));
   }
   public function store(Request $request)
   {
    $request->validate([
             
        'name' => 'required',
        'mobile' => 'required|numeric:10',
        'email' => 'required',
        'image' => 'required',
        'address' => 'required',
        'registration_fee' => 'required',
        'password' => 'min:6|required_with:confrim_password|same:confrim_password',
        'confrim_password' => 'min:6'
         
    ]);
      $storecabdata = new Admin();
      if($request->hasFile('image'))
       {
        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $filename = time().'.'.$ext;
        $file->move('admin/uploads/cabowner/',$filename);
        $storecabdata->image = $filename;

       }
      $storecabdata->name = $request->input('name');
      $storecabdata->email = $request->input('email');
      $storecabdata->mobile = $request->input('mobile');
      $storecabdata->password = Hash::make($request->input('password'));
      $storecabdata->type = $request->input('type');
      $storecabdata->registration_fee = $request->input('registration_fee');
      $storecabdata->address = $request->input('address');
      $storecabdata->save();
      return redirect('/admin/cab-regitration');
   }
  
   public function update(Request $request,$id)
   {
    $request->validate([
             
        'name' => 'required',
        'mobile' => 'required|numeric:10',
        // 'email' => 'required',/
        'image' => 'required',
        'address' => 'required',
        'registration_fee' => 'required',
        'password' => 'min:6|required_with:confrim_password|same:confrim_password',
        'confrim_password' => 'min:6'
         
    ]);
      $storecabdata = new Admin();
      if($request->hasFile('image'))
      {
        $path = 'admin/uploads/cabowner/'.$storecabdata->image;
        if(File::exists($path))
        {
          File::delete($path);
        }
       $file = $request->file('image');
       $ext = $file->getClientOriginalExtension();
       $filename = time().'.'.$ext;
       $file->move('admin/uploads/cabowner/',$filename);
       $storecabdata->image = $filename;

      }
      $storecabdata->name = $request->input('name');
    //   $getcabownerdata= Admin::where('type','Cab-Owner')->find($id);
    //   $storecabdata->email =  $getcabownerdata->email;
      $storecabdata->mobile = $request->input('mobile');
      $storecabdata->password = Hash::make($request->input('password'));
      $storecabdata->type = $request->input('type');
      $storecabdata->registration_fee = $request->input('registration_fee');
      $storecabdata->address = $request->input('address');
      $storecabdata->save();
      return redirect('/admin/cab-regitration');
   }
}