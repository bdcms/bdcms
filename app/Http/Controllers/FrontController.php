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
    public function signup2(){
    	return view('signup2'); 
    }
    public function appfrom1(Request $request){
    	$this->validate($request,[
		            'name'			=> 'required', 
		            'fname'			=> 'required', 
		            'nid'			=> 'required|numeric', 
		            'contact_no'	=> 'required|numeric',
		            'email'			=> 'required|email|unique:owners,own_email',
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

	public function appfrom2(Request $request){
	    	$this->validate($request,[
			            'carname_id'		=> 'required', 
			            'car_wheel'			=> 'required', 
			            'car_chasis'		=> 'required', 
			            'car_metro'			=> 'required',
			            'car_key'			=> 'required',
			            'car_num' 			=> 'required',
						'car_color' 		=> 'required',  
			            'car_insurence'		=> 'required', 
			            'car_engine_num'	=> 'required',
			            'driver_mob'		=> 'required',
			            'car_reg_date'		=> 'required|date',
			            'driver_mob'		=> 'required|exists:drivers,dri_mobile',
			        ]);
	 
	  			$driver_id = \DB::table('drivers')->where('dri_mobile',$request->driver_mob)->first();  
		  		$car_reg = $request->car_metro.' '.$request->car_key.' '.$request->car_num;
		 		session(
		 			[
		 				'carname_id' 			=> $request->carname_id,
		 				'car_wheel' 			=> $request->car_wheel,
		 				'car_chasis' 			=> $request->car_chasis,
		 				'car_metro' 			=> $request->car_metro,
		 				'car_reg_num'			=> $car_reg,
		 				'car_reg_date'			=> $request->car_reg_date,
		 				'car_insurence' 		=> $request->car_insurence,
		 				'car_road_permit_no' 	=> $request->car_road_permit_no,
		 				'car_engine_num' 		=> $request->car_engine_num,
		 				'driver_id'				=> $driver_id->id,
		 				'car_color' 			=> $request->car_color, 
		 			]
		 		);  
		 		return redirect('cardocument'); 
	    }
	public function appfrom3(Request $request){ 
	    	$this->validate($request,[
			            'image'				=> 'required|mimetypes:image/jpeg,image/png,image/jpg,image/gif,image/svg|max:250', 
			           'document_pdf'		=> 'required|max:2000'
			        ]);

	    		if ($request->hasFile('image') && $request->image->isValid() && $request->hasFile('document_pdf') && $request->document_pdf->isValid()) { 
					$file = $request->file('image');
					$pdf = $request->file('document_pdf');

		        	 $imagePath = $request->image->store('');
		        	 $imagePath = url('Frontend/images/woner/').'/'.$imagePath; 
		        	 session(['own_profile_pic' => $imagePath]);

		        	 $pdfPath = $request->document_pdf->store('');
		        	 $pdfPath = url('Frontend/images/document/').'/'.$pdfPath; 
		        	 session(['car_document_pdf' => $pdfPath]);


		        	$file->move(public_path('Frontend/images/woner/'),$imagePath);
		        	$pdf->move(public_path('Frontend/images/document/'),$pdfPath);

		    	}else{
		    		echo "no file";
		    		exit();
		    	} 


		    $ownId = \DB::table('owners')->insertGetId([
		    	'own_name'			=> session('own_name'),
		    	'own_father_name'	=> session('own_father_name'),
		    	'own_nid'			=> session('own_nid'),
		    	'own_mobile'		=> session('own_mobile'),
		    	'own_passport'		=> session('own_passport'),
		    	'own_email'			=> session('own_email'),
		    	'own_password'		=> md5(session('own_password')),
		    	'own_lincence'		=> session('own_lincence'),
		    	'own_address'		=> session('own_address'),
		    	'own_birth_date'	=> session('own_birth_date'),
		    	'own_gender'		=> session('own_gender'),
		    	'own_profile_pic'	=> session('own_profile_pic'),
		    ]);

		    $carId = \DB::table('cars')->insertGetId([
		    	'carname_id'			=> session('carname_id'),
		    	'car_wheel'				=> session('car_wheel'),
		    	'car_chasis'			=> session('car_chasis'),
		    	'car_metro'				=> session('car_metro'),
		    	'car_reg_num'			=> session('car_reg_num'),
		    	'car_reg_date'			=> session('car_reg_date'),
		    	'car_insurence'			=> session('car_insurence'),
		    	'car_road_permit_no'	=> session('car_road_permit_no'),
		    	'car_engine_num'		=> session('car_engine_num'),
		    	'driver_id'				=> session('driver_id'),
		    	'owner_id'				=> $ownId,
		    	'car_document_pdf'		=> session('car_document_pdf'),
		    	'car_color'				=> session('car_color'), 
		    ]);

		    $done = \DB::table('owners')->where('id',$ownId)->update(['car_id' => $carId]);
		    $request->session()->flush();
		    if($done){ 
            	return redirect('/')->with('msg','Your application submited successfully. Please wait for approvement.');
        	}
	    } 

	    public function login(){ 
	    	return view('login');
	    }
	    public function checkLogin(Request $request){
	    	$this->validate($request,[
	            'email'			=> 'required|email', 
	            'password'		=> 'required',  
	        ]);
	        //$check = \DB::table('')
	    }












//ajax request
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

