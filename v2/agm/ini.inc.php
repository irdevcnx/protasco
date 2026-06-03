
<?php
	if($_SERVER["HTTP_HOST"] == "localhost")
	{
		$ir_link = "/IRv2/IR_Client_Site_rce";
		$co_link = "/IRv2/IR_Client_Site_rce";
	}
	else if(preg_match("/^.*irchartnexus\.com.*$/",$_SERVER["HTTP_HOST"]))
	{	
		$host = explode(".", $_SERVER["HTTP_HOST"]);
		if(count($host) == 3)
		{
			//for DEV & UAT
			include($_SERVER["DOCUMENT_ROOT"]."/../html/s/ircnx.php");
		}
		else
		{
			include($_SERVER["DOCUMENT_ROOT"]."/../../irchart/public_html/s/ircnx.php");
		}
		
	}
	else 
	{
		$ir_link = "https://ir2.chartnexus.com";
		$co_link = "https://www.protasco.com.my/";
	?>	
		<script>
		if (location.protocol != 'https:')
		{
		 location.href = 'https:' + window.location.href.substring(window.location.protocol.length);
		}
		
		</script>
<?php 	}
	
	$ir_link .= "/protasco/";
	$co_link .= "/";
	
	$companyID 		= 76;
	$companyname 	= "Eastland Equity Bhd";
	$companyImage	="2097";
	$countryListed	="klse";
	$marketID		="2";

?>