<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Makeup;

class MakeupstudioController extends Controller
{
 
    function index() {
        return view('index');
}

function FAQ() {
    return view('FAQ');
}

function Description() {
    return view('Description');
}

function PrivacyPolicy() {
    return view('PrivacyPolicy');
}

function TermsAndConditions() {
    return view('TermsAndConditions');
}

function Thankyou() {
    return view('Thankyou');
}


function Signin() {
    return view('Signin');
}
/*
function Signup() {
    return view('Signup');

}*/
function adminpanel(){
    return view('adminpanel');
}
public function store(Request $request) { 
    $ProductName = $request->input('Name');
     $Price= $request->input('Price');
    $Description = $request->input('Description');
        /*$Image = $request->file('Image');
         $ImageName = $Image->getClientOriginalName(); 
        $ImageType = $Image->getClientOriginalExtension(); 
        $ImageSize = $Image->getSize();
         $Image->move('uploads',$ImageName); $place = 'uploads/'.$ImageName;*/

          DB::unprepared("insert into products (Product Name,Price,Description)
            values ('$ProductName','$Price,'$Description')");
            return redirect('/adminpanel'); }


}

/*
 function store(Request $request) {
     //print_r($request->input());
     $makeup=new Makeup;
     $makeup->Name = $request->Name;
     $makeup->Username = $request->Username;
     $makeup->Password = $request->Password;
     $makeup->Renterpassword = $request->Renterpassword;
     echo $makeup->store();

     /*DB::unprepared("insert into signup (Name, Username, Password, Renterpassword) values
      ('$Name','$Username','$Password','$Renterpassword')"); 
      return redirect('Signup'); */
    
   

    



