<?php
    header('Content-Type:text/html;charset=UTF-8');
	$pat = dirname(__FILE__).'/bfy';
	if(file_exists($pat))
	{
		$times = time()- filemtime($pat);
		if($times > 600)
		{
			//unlink($pat);
			$josn = get_post_data();
        	$access_token = get_access_token($josn);
	    	$obj = json_decode ($access_token);
        	$acctoken = $obj->{'access_token'};
	    	$device_id = $obj->{'device_id'};
			file_put_contents($pat,$acctoken.'|'.$device_id);
		}
		else
		{
			$date = file_get_contents($pat);
			$arr = explode('|',$date);
			$acctoken = $arr[0];
			$device_id = $arr[1];
		}
	}
	else
	{
		//unlink($pat);
		$josn = get_post_data();
        $access_token = get_access_token($josn);
	    $obj = json_decode ($access_token);
        $acctoken = $obj->{'access_token'};
	    $device_id = $obj->{'device_id'};
		file_put_contents($pat,$acctoken.'|'.$device_id);
	}
    
    $lid = $_GET['id'];
	$data = get_play_data($acctoken,$lid,$device_id);
	$josn = json_decode($data);
	//var_dump($josn );
	$livetvurl = $josn->livetv_url[0];
	$playtoken = $josn->play_token;
	$ratelist = 'abc';
	$laytype = '?playtype=live&protocol=hls&accesstoken=';
	$programid = '&programid=';
	$verifycode = '&verifycode=';
	$play_token = '&playtoken=';
	$rate_list = '&rate=';
	$m3u8 = $livetvurl.$laytype.$acctoken.$programid.$lid.$play_token.$playtoken.$rate_list.$ratelist.$verifycode.$device_id;

	header('Location:'. $m3u8);


    function get_play_data($a,$b,$c)
    {
        $url = 'http://slave.bfgd.com.cn/media/channel/get_info?accesstoken='.$a.'&chnlid='.$b.'&verifycode='.$c;
        $header = array("Connection: Keep-Alive",
					    "Accept-Encoding: gzip",
					    "User-Agent: Dalvik/2.1.0"
				    );
		$ch = curl_init(); 
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    	curl_setopt($ch, CURLOPT_HEADER,0);
    	curl_setopt($ch,CURLOPT_TIMEOUT,300);
		$data = curl_exec($ch);   
		curl_close($ch); 
		return $data;
	}		
    
    function get_access_token($val)
    {
	    $header = array("Connection: Keep-Alive",
	                    "Content-Type: text/html",
					    "Accept-Encoding: gzip",
					    "User-Agent: Mozilla/5.0"
				    );
	    $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"http://access.bfgd.com.cn/account/user/v2/login");
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	    curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	    curl_setopt($ch, CURLOPT_POSTFIELDS,$val);
        curl_setopt($ch, CURLOPT_POST, 1);
        $access = curl_exec($ch);
        curl_close($ch);
	    return $access;
    }
	
	function get_post_data()
    {
        $timestamp = strval(time()).'000';
        $str = "F76072B40F5C4D3017C3E40DB9E6E9D3e|yuj|2|0293005200000611|$timestamp";
        $harr = array(
                       "operatingsystem"=>"Android",
			           "systemversion"=>"4.4.4",
			           "model"=>"E1E1",
			           "appversion"=>"V1.3.3"	   
			        );
        $extendinfo = json_encode($harr);				
        $signature = md5($str);
        $arr = array(
                   "deviceno"=>"F76072B40F5C4D3017C3E40DB9E6E9D3e",
			       "devicetype"=>"yuj",
			       "accounttype"=>2,
			       "account"=>"0293005200000611",
			       "pwd"=>"96e79218965eb72c92a549dd5a330112",
			       "timestamp"=>$timestamp,
			       "isforce"=>"1",
			       "signature"=>$signature,
			       "serverVersion"=>"V1.2.13",
			       "extendinfo"=>$extendinfo
			    );
			
	    $josn = json_encode($arr);
		return $josn;
    }

?>