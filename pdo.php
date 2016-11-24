<?php
//增，删，改，查。
//字符串的生成
$data= array();
$data['ss']=1;
$data['sss']="aaa";


$s="inserrt into`JingyueWechatPay` (";
$s1="";
$s2="values(";
$i=1;
foreach($data as $key => $value)
	   {	
			
			$s1.="$key,";
            $s2.="?,";
    // $stmt->bindParam($i, $value);
    		$i++;
			
	   }
$s1=trim($s1,",");
	   $s1.=")";
$s2=trim($s2,",");
	   $s2.=")";

$s.=$s1." ".$s2;
echo $s;
//  专门为数组插入table准备。
