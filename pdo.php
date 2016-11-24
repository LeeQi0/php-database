<?php
//增，删，改，查。
try {
				$dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
				$stmt = $dbh->prepare($s);
				
				if($stmt->execute())
					//echo 'success';
					Log::DEBUG("create success:".$s);
				else
				   //echo 'fail';
					Log::DEBUG("create fail:".$s);				   
	    
				$dbh = null;
			} catch (PDOException $e) 
			{
				 Log::DEBUG("Error!: " . $e->getMessage());
				//die();
			}
//专业搞事情。。。










//字符串的生成
			   	$s="insert into `JingyueWechatPay` (";
				$s1="";
				$s2="values(";
				$i=1;
		foreach($data as $key => $value)
	   {	
			if(!is_int($value))
			{
				$s1.="$key,";
				$s2.="'$value',";
			}
			else
			{
				$s1.="$key,";
				$s2.="$value,";
			}
			
    		
	   }
$s1=trim($s1,",");
	   $s1.=")";
$s2=trim($s2,",");
	   $s2.=")";

$s.=$s1." ".$s2;
//  专门为数组插入table准备。



$s="create table `JingyueWechatPay` (";
	   foreach($data as $key => $value)
	   {	
		
			
			if(!is_int($value))
			{
				$s.="$key varchat(128),";
			}
			else
			{
				$s.="$key int,";
			}
	   }
	   $s=trim($s,",");
	   $s.=")";
		$user="root";
		$pass=123456;
		
// 专业建表
