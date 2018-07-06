<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home(){
    	return view('index');
    }
    public function signup(){
    	return view('signup');
    }
    public function signup1(){
    	return view('signup1'); 
    }
    public function appfrom1(Request $request){
    	$this->validate($request,[
		            'name'			=> 'required', 
		            'fname'			=> 'required', 
		            'nid'			=> 'required|integer', 
		            'contact_no'	=> 'required|integer',
		            'email'			=> 'required|email',
		            'password' 		=> 'required|min:6|confirmed',
					'password_confirmation' => 'required|min:6',  
		            'dateofbirth'	=> 'required|date',
		            'gender'		=> 'required',
		            'address'		=> 'required'
		        ]);
  
 		session(
 			[
 				'own_name' 			=> $request->name,
 				'own_father_name' 	=> $request->fname,
 				'own_nid' 			=> $request->nid,
 				'own_mobile' 		=> $request->contact_no,
 				'own_passport' 		=> $request->passport, 
 				'own_email' 		=> $request->email,
 				'own_password' 		=> $request->password,
 				'own_lincence' 		=> $request->licence,
 				'own_address' 		=> $request->address,  
 				'own_birth_date' 	=> $request->dateofbirth,
 				'own_gender' 		=> $request->gender,
 			]
 		); 
 		return redirect('carinfo'); 
    }

    public function district(Request $request){

    	$district = \DB::table('tbl_car_reg')
                ->where('district', 'like', $request->area.'%')
                ->distinct()
                ->get();

        $result = '';
		$result .= '<div class = "dist"><ul>';
		if(!empty($district)){
			foreach ($district->unique('district') as $data) {
				$result.='<li>'.$data->district.'</li>';
			}
		}else{
			$result .= '<li>Result Not Found</li>';
		}
		echo $result;
    }

    public function keyword(Request $request){

    	$district = \DB::table('tbl_car_reg')
                ->where('keyword', 'like', $request->keyword.'%')
                ->distinct()
                ->get();

        $result = '';
		$result .= '<div class = "key">';
		if(!empty($district)){
			foreach ($district->unique('keyword') as $data) {
				$result.='<span>'.$data->keyword.'</span>';
			}
		}else{
			$result .= '<span>Result Not Found</span>';
		}
		echo $result;
    }


}

