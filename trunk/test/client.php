<?php
// Disable WSDL cache for debugging
ini_set("soap.wsdl_cache_enabled", 0);

// Credentials
class LoginToken {
	public $authcompanyid;
    public $authuserid;
    public $authpassword;
   
    public function __construct($company, $username, $password) {
    	$this->authcompanyid = $company;
    	$this->authuserid = $username;
    	$this->authpassword = $password;
    }
}

$namespace = "http://schemas.xmlsoap.org/ws/2002/07/utility";
$obj_login_token = new LoginToken("ASI", "iamuser", "iampassword");
//$soap_hdr = new SoapHeader($namespace, 'Authenticate', $obj_login_token);

// Data
if (file_exists('data.xml')) {
    $dataXml = simplexml_load_file('data.xml');
} else {
    exit('Failed to open data file.');
}

//echo "<pre>";
//print_r($dataXml);

//echo "<pre>";
//print_r($dataXml->mst_product);

$p_cnt = count($dataXml->mst_product); 
print "count: ".$p_cnt;
for($i = 0; $i < $p_cnt; $i++) {
  $param = $dataXml->mst_product[$i];
} 

echo "<pre>";
print_r($param);

//foreach ($dataXml->xpath('//mst_product') as $character) {
////foreach ($dataXml->xpath('//mst_account') as $character) {
//	//print "<pre>".print_r($character,true)."</pre>";
//}

// Service call
//try {
//	$client = new SoapClient("account.wsdl",array( "trace" => 1,
//												  	  "exceptions" => 0));
//	$client->__setSoapHeaders(array($soap_hdr));
//	
//	print $client->batchUpdate($dataXml);
//
//	print "<pre>";
//	print "Request :\n".htmlspecialchars($client->__getLastRequest()) ."\n";
//	print "Response:\n".htmlspecialchars($client->__getLastResponse())."\n";
//	print "</pre>";
//
//} catch (SoapFault $e) {
//	print $e;
//}