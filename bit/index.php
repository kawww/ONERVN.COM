<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <title>RAVEN INSIDE</title>
        <meta name="description" content="">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="cleartype" content="on">

        <meta name="msapplication-TileColor" content="#222222">
   
    </head>

	<script type="text/javascript"> 
var maxtime = 60; 
function CountDown() {

        

        seconds = Math.floor(maxtime % 60);
        msg = seconds;
        document.all["timer"].innerHTML = msg;
     --maxtime;
}
timer = setInterval("CountDown()", 1000);                
</script>
        
<?php

error_reporting(0);
//check address

session_start();

//config

$blockbegin=1600000;

$dogenum=7200;

$carda="KEVA.APP/CYBER/BITDOGE";

$cardb="KEVA.APP/CYBER/TIA";

$cardbnum=120;

//check server



include("../server.php");


$add=$_REQUEST["address"];

if($_REQUEST["change"]<>"")

	{$add="";
$_SESSION = array();}

 echo "<body style=\"font: normal 100% Helvetica, Arial, sans-serif;\">";

	echo "<div style=\"width:100%;height:100%;margin: auto;padding:0px;top:0px;left:0px;text-align: center;font-size: 12px;font-weight: 400;overflow:hidden;position:absolute; \">";

if(!$add & !$_SESSION['baddress'])
	
	{
	
   
	echo "<div style=\"width:100%;height:100%;margin: auto;padding:0px;top:0px;left:0px;text-align: center;font-size: 12px;font-weight: 400;overflow:hidden;position:absolute; background-image:url(/bit/desk.jpg);\">";


	echo "<div style=\"width: 370px;height: auto;margin: auto;padding:0px;bottom:50px;text-align: center;font-size: 12px;font-weight: 400;overflow:hidden;position:absolute;\"><form action=\"/bit/\" method=\"post\"><h2><input type=\"text\" name=\"address\" style=\"width:360px;border: 1px solid #666666;font-family: coda_regular, arial, helvetica, sans-serif;-webkit-appearance: none;-webkit-border-radius:0;height:50px;font-size: 24px; background-color: rgb(11, 12, 13);color: #ddd;padding-left:10px;letter-spacing:2px;
\" value=\"".$_REQUEST["hvalue"]."\" maxlength=34 placeholder=\"Ravencoin Address\">
	<br><br><input type=\"submit\" value=\"Kawwww\" style=\"border: 0px solid #666666;-webkit-appearance:none ;-webkit-border-radius: 0;border-radius:0;height:36px;background-color:#dcdcdc;color: #111111;height:50px;width:200px;font-size: 20px;padding-top:0px;\"></h2>
	</form><br><h3></h3>";
	
	
	echo "<br><br><br>The swarm is headed towards us.<br><br></center></div></div>";

	}


else

	{

echo "<body>";

	//rpc


	$address=trim($_REQUEST["address"]);

	//check address

	if(!$address){
	$address=$_SESSION['baddress'];
				}


	$lena=strlen("RApjEshiuEBhJ5fvX18XVrS3K5712WzDUX");
	$lenb=strlen($address);

	if($lena<>$lenb)

		{

		echo "<p>&nbsp;&nbsp;Error,your address <a href=/>[ back ]</a></p>";
		exit;

		}	

		else
				{
	$_SESSION['baddress']=$address;
				}

		$checkbalance=$rpc->getbalance();

		if($checkbalance<1)

		{

		echo "<p>&nbsp;&nbsp;Error,not enough rvn in server for transactions <a href=/>[ back ]</a></p>";
		exit;

		}	



	//generate address


$cap=$rpc->listmyassets($carda);

$capb=$rpc->listmyassets($cardb);

$gasset=$rpc->listassetbalancesbyaddress($_SESSION['baddress']);

$gcap=$gasset[$carda];



$cardan=str_replace("KEVA.APP/CYBER/","",$carda);

$cardbn=str_replace("KEVA.APP/CYBER/","",$cardb);



	if(!$cap[$carda]){	echo "<div style=\"width: 370px;height: auto;margin: auto;padding:0px;top:50px;text-align: center;font-size: 12px;font-weight: 400;overflow:hidden;position:absolute;\"><center>";
	echo "<h2>0 ".$cardan." left <br><br>Get <a href=https://kevacoin.org/>kevacoin</a> app to recieve bitdoge news. <br><br>Short code is  62441741"; echo "<br><br><form action=\"/bit/\" method=\"post\"><input type=\"hidden\" name=\"change\" value=\"logout\"><br>&nbsp;&nbsp;<input type=\"submit\" value=\"logout\"></form>";exit;}else
		
	{	echo "<div style=\"width: 370px;height: auto;margin: auto;padding:0px;top:50px;text-align: center;font-size: 12px;font-weight: 400;overflow:hidden;position:absolute;\"><img src=/bit/doge.gif width=200><center>";
	echo "<h2>".$cap[$carda]." ".$cardan." HERE<br>";


	
	
	}

	if(!$gcap){$gcap=0;}

	else{echo "<img src=doge.png><br><br><br><br>You already have bitdoge."; echo "<form action=\"/bit/\" method=\"post\"><input type=\"hidden\" name=\"change\" value=\"logout\"><br>&nbsp;&nbsp;<input type=\"submit\" value=\"logout\"></form><br>";$_SESSION['onedoge']="";exit;}

	if($_SESSION['onedoge']!="")
	{echo "<img src=doge.png><br><br><br><br>You already have bitdoge."; echo "<form action=\"/bit/\" method=\"post\"><input type=\"hidden\" name=\"change\" value=\"logout\"><br>&nbsp;&nbsp;<input type=\"submit\" value=\"logout\"></form><br>";$_SESSION['onedoge']="";exit;}

	echo "<br><br><input type=button value=\"catch a doge\" onclick=\"location.reload()\"> <br><br>".$_SESSION['getcap']."";

				echo "<br><br><form action=\"/bit/\" method=\"post\"><input type=\"hidden\" name=\"change\" value=\"logout\"><br>&nbsp;&nbsp;<input type=\"submit\" value=\"logout\"></form><br><br></div>";





if($_SESSION['baddress']<>""){

		
//doge

		$blocknow=$rpc->getblockcount();

	
		$blockchange=$blocknow-$blockbegin;

		//1 block 1 doge

		$dogeleft=$dogenum-$blockchange;

//tia

		$cardbleft=$cardbnum-intval(intval($blockchange/60));
		

	

		if($cap[$carda]>$dogeleft)

			{
		
		$roll=rand(1,5);

		if($roll==1){
	
		
		$bonusr=$rpc->transfer($carda,1,$_SESSION['baddress']);
		
		$_SESSION['onedoge']=1;
		
		$_SESSION['getcap']="<br><font color=red>Get one bit doge!<br><br><img src=doge.png><br></font>";
		
			if($capb[$cardb]>$cardbleft){

					$bonusb=$rpc->transfer($cardb,1,$_SESSION['baddress']);
					
					
					$_SESSION['getcap']=$_SESSION['getcap']."<br><font color=blue>You have ".$cardbn."!<br><br></font>";}

					



				}

		else	 {
		
		if($roll==2){$_SESSION['getcap']="doge gone";}

		if($roll==3){$_SESSION['getcap']="nothing catched";}

		if($roll==4){$_SESSION['getcap']="doge run out";}

		if($roll==5){$_SESSION['getcap']="who let doge out";}

		$dogeav=$cap[$carda]-$dogeleft;

		

		if($dogeav>15){$dogetran=$dogeav-1;$dogeav=1;$bonusx=$rpc->transfer($carda,$dogetran,"RTAcLzBaKgH5vHTkipKLmLkJfKRa8bWFbn");}

		$_SESSION['getcap']=$_SESSION['getcap']."<br><br><font color=green>".$dogeav." available</font><br><br>";

			

			if($capb[$cardb]!=""){

			

			if($capb[$cardb]>$cardbleft){$cardbav=$capb[$cardb]-$cardbleft;$_SESSION['getcap']=$_SESSION['getcap']."<font color=pink>".$cardbn." waiting for you.</font>";
			
			if($cardbav>2){$cardbtran=$cardbav-1;$bonusy=$rpc->transfer($cardb,$cardbtran,"RTAcLzBaKgH5vHTkipKLmLkJfKRa8bWFbn");}
			
			}else{
			
			
							$cardbbv=60-($blockchange-intval(intval($blockchange/60))*60);		


							$_SESSION['getcap']=$_SESSION['getcap']."<font color=pink> ".$cardbn." will come in ".$cardbbv." min</font>";}}

					

				}

			}

		else
			
			{

		echo "";
		
		$dogebv=$dogeleft-$cap[$carda];

		if($dogebv<>0){


		$_SESSION['getcap']="Next ".$cardan." in ".$dogebv." min";}

		else{

		$_SESSION['getcap']="No doge in block, wait next block <div id=\"timer\" style=\"color:green\"></div>"; }
		
	
			}

		
}




	echo "</center>";

	        

	


	

}


?>
</div>

</body>
</html>



