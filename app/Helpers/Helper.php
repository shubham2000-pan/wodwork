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
if (! function_exists('dateformate')) {
    function dateformate($int) {
        
       if(!empty($int)){
            $date= $int;
            $res=date('F j, Y',$date);
        }else{
            $res = '';
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
if (! function_exists('member')) {
    function member($orgUser_id) {
     
        $data = DB::table('orguser')->where('id',$orgUser_id)->first();
        if(!empty($data)){
            $res = $data->fullName;
        }else{
            $res = '(not set)';
        }
        return $res;
    }
}
if (! function_exists('item')) {
    function item($orgUserPlan_id) {
     
        $data = DB::table('orguserplan')->where('id',$orgUserPlan_id)->first();
        if(!empty($data)){
            $res = $data->name;
        }else{
            $res = '';
        }
        return $res;
    }
}
if (! function_exists('create_by')) {
    function create_by($create_by) {
     
        $data = DB::table('orguser')->where('id',$create_by)->first();
        if(!empty($data)){
            $res = $data->fullName;
        }else{
            $res = '(not set)';
        }
        return $res;
    }
}
?>