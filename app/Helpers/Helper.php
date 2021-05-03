<?php

if (! function_exists('dob')) {
    function dob($date) {
    	

      if ($date) {
            $dt = new DateTime($date);
            $res= $dt->format('F j, Y'); // 10/27/,/2021
    
    }
    else if($date == null) {
		$res = '(Not set)';
    }
		return $res;
    }

}

if (! function_exists('gender')) {
    function gender($id) {
    	$data = DB::table('user')->where('gender',$id)->first();
    	if(!empty($data->gender)){
    		$res = $data->gender;
    	}
		else if($data->gender == null) {
    		
    		$res = '(Not set)';
    	}
    	
        return $res;
    }
}


?>