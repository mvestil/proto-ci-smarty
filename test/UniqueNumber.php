<?php
class UniqueNumber{

	function UniqueNumber(){

    }
 	
	function increment_sequence($key1 = 'DEFAULT',$key2 = '', $key3='',$max = 9999999) {
		//No more time, do no take care of maximum for now
    	if($mysql_dblink = @mysql_connect("localhost","root","", true)){
    		echo "Connected!";
			@mysql_select_db("simple",$mysql_dblink);
			
			$seq_no = "1";
			mysql_query("LOCK TABLES SYS_NUM_GENERATOR");
			$result_query = mysql_query("select fseqno from sys_num_generator where key1 = '$key1' and key2 = '$key2' and key3 = '$key3'");
			$row = mysql_fetch_object($result_query);
			
			if ($data = mysql_fetch_object($result_query)) {
				$seq_no = $data[0];
				$result_query = mysql_query("update sys_num_generator set fseqno = $seq_no + 1 where key1 = '$key1' and key2 = '$key2' and key3 = '$key3'");
			} else {
				mysql_query("insert into sys_num_generator values('$key1','$key2','$key3',2)");
			}
			mysql_commit();
			mysql_query("UNLOCK TABLES");
			return $seq_no;
    	}else{
    		echo "Not connected!";
    	}
	}

}

$num = new UniqueNumber();
$val = $num->increment_sequence("1","1","1");

echo $val;

?>
