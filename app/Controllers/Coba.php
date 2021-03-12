<?php

namespace App\Controllers;
use App\Libraries\Redis;
class Coba extends BaseController
{
    public function index()
    {
		
		$redis=new Redis();
		$redis = $redis->config();
	
        $cekCache = $redis->ttl('cacheCoba');
		if($cekCache<0){
			echo "---Non Redis---<br>";
			$arr['nama']="Altino Ansaldo";
			$arr['job']="Freelance Programmer";
			$arr['telp']="+6283808475774";
			$redis->set("cacheCoba", json_encode($arr), 'ex', 60);
			
			echo json_encode($arr);
		}else{
			echo "---Redis---<br>";
			$dataCache=json_decode($redis->get('cacheCoba'),true);
			echo json_encode($dataCache);
		}

    }
}
