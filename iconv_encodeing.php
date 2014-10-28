<?php

	function iconv_encodeing($GET){

		if(@iconv('euc-kr','euc-kr', $GET) == $GET){ 
			$GET = $GET;
			}
			else if(iconv('utf-8','utf-8', $GET) == $GET)
				{ 
				       $GET = iconv('utf-8', 'euc-kr', $GET); 
                 }
				 return $GET;
	}
?>