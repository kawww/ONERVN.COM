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

$blockbegin=1634594;

//$blockbegin=1597035;

$dogenum=2849;

$carda="KEVA.APP/CYBER/BITDOGE";

$carda1="KEVA.APP/CYBER/BITDOGE.RAVEN";

$carda2="KEVA.APP/CYBER/BITDOGE.KEVA";

$carda3="KEVA.APP/CYBER/DOGE";

$carda4="KEVA.APP/CYBER/RAVEN";


//b

$cardb="KEVA.APP/CYBER/PIP_BOY";

$cardbnum=10000;

//c

$cardc="KEVA.APP/CYBER/WSB";

$cardcnum=8278;

//d

$cardd="KEVA.APP/CYBER/DOGECEO";

$carddnum=8850;

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

$capc=$rpc->listmyassets($cardc);

$capd=$rpc->listmyassets($cardd);

$gasset=$rpc->listassetbalancesbyaddress($_SESSION['baddress']);

$gcap=$gasset[$carda];

if(!$gcap){$gcap=$gasset[$carda1];}


if(!$gcap){$gcap=$gasset[$carda2];}



$cardan=str_replace("KEVA.APP/CYBER/","",$carda);

$cardbn=str_replace("KEVA.APP/CYBER/","",$cardb);

$cardcn=str_replace("KEVA.APP/CYBER/","",$cardc);

$carddn=str_replace("KEVA.APP/CYBER/","",$cardd);



	if(!$cap[$carda]){	echo "<div style=\"width: 370px;height: auto;margin: auto;padding:0px;top:50px;text-align: center;font-size: 12px;font-weight: 400;overflow:hidden;position:absolute;\"><center>";
	echo "<h2>0 ".$cardan." left <br><br>Get <a href=https://kevacoin.org/>kevacoin</a> app to recieve bitdoge news. <br><br>Short code is  62441741"; echo "<br><br><form action=\"/bit/\" method=\"post\"><input type=\"hidden\" name=\"change\" value=\"logout\"><br>&nbsp;&nbsp;<input type=\"submit\" value=\"logout\"></form>";exit;}else
		
	{	echo "<div style=\"width: 370px;height: auto;margin: auto;padding:0px;top:50px;text-align: center;font-size: 12px;font-weight: 400;overflow:hidden;position:absolute;\"><img src=/bit/doge.gif width=200><center>";
	echo "<h2>".$cap[$carda]." ".$cardan." HERE<br>";


	
	
	}

	if(!$gcap){$gcap=0;}

	else{echo "<img src=bitdogewho.png><br><br><br><br>You already have bitdoge."; echo "<form action=\"/bit/\" method=\"post\"><input type=\"hidden\" name=\"change\" value=\"logout\"><br>&nbsp;&nbsp;<input type=\"submit\" value=\"logout\"></form><br>";$_SESSION['onedoge']="";exit;}

	if($_SESSION['onedoge']!="")
	{echo "<img src=bitdogewho.png><br><br><br><br>You already have bitdoge."; echo "<form action=\"/bit/\" method=\"post\"><input type=\"hidden\" name=\"change\" value=\"logout\"><br>&nbsp;&nbsp;<input type=\"submit\" value=\"logout\"></form><br>";$_SESSION['onedoge']="";exit;}

	echo "<br><br><input type=button value=\"catch a doge\" onclick=\"location.reload()\"> <br><br>".$_SESSION['getcap']."";

				echo "<br><br><form action=\"/bit/\" method=\"post\"><input type=\"hidden\" name=\"change\" value=\"logout\"><br>&nbsp;&nbsp;<input type=\"submit\" value=\"logout\"></form><br><br></div>";





if($_SESSION['baddress']<>""){

		
//doge

		$blocknow=$rpc->getblockcount();

	
		$blockchange=$blocknow-$blockbegin;

		//1 block 1 doge

		$dogeleft=$dogenum-$blockchange;

//tia

		$cardbleft=$cardbnum-intval(intval($blockchange/10));
		

//wsb	

		$cardcleft=$cardcnum-intval(intval($blockchange/20));

//dogeceo

		$carddleft=$carddnum-intval(intval($blockchange/30));

		if($cap[$carda]>$dogeleft)

			{
		
		$roll=rand(1,7);

		if($roll==1){
		
		$rolln=rand(1,9);
		
		if($rolln==1){$bonusr=$rpc->transfer($carda,1,$_SESSION['baddress']);}
		
		else{

		if($rolln==2 or $rolln==6){$bonusr=$rpc->transfer($carda1,1,$_SESSION['baddress']);}

		if($rolln==3 or $rolln==7){$bonusr=$rpc->transfer($carda2,1,$_SESSION['baddress']);}

		if($rolln==4 or $rolln==8){$bonusr=$rpc->transfer($carda3,1,$_SESSION['baddress']);}

		if($rolln==5 or $rolln==9){$bonusr=$rpc->transfer($carda4,1,$_SESSION['baddress']);}
		
		}

		

		
		$_SESSION['onedoge']=1;
		
		$_SESSION['getcap']="<br><font color=red>Get one bit doge!<br><br><img src=bitdogewho.png><br></font>";

		//b
		
			if($capb[$cardb]>$cardbleft){

					$bonusb=$rpc->transfer($cardb,1,$_SESSION['baddress']);
					
					
					$_SESSION['getcap']=$_SESSION['getcap']."<br><font color=blue>You have ".$cardbn."!<br><br></font>";}

					
		//c

				if($capc[$cardc]>$cardcleft){

					$bonusc=$rpc->transfer($cardc,1,$_SESSION['baddress']);
					
					
					$_SESSION['getcap']=$_SESSION['getcap']."<br><font color=blue>You have ".$cardcn."!<br><br></font>";}

							
		//d

				if($capd[$cardd]>$carddleft){

					$bonusd=$rpc->transfer($cardd,1,$_SESSION['baddress']);
					
					
					$_SESSION['getcap']=$_SESSION['getcap']."<br><font color=blue>You have ".$carddn."!<br><br></font>";}


				}

		else	 {
		
		if($roll==2){$_SESSION['getcap']="doge gone";}

		if($roll==3){$_SESSION['getcap']="nothing catched";}

		if($roll==4){$_SESSION['getcap']="doge run out";}

		if($roll==5){$_SESSION['getcap']="who let doge out";}

		if($roll==6){$_SESSION['getcap']="doge run fast";}

		if($roll==7){$_SESSION['getcap']="doge running";}

		$dogeav=$cap[$carda]-$dogeleft;

		

		//if($dogeav>180){$dogetran=$dogeav-2;$dogeav=1;$bonusx=$rpc->transfer($carda,$dogetran,"RTAcLzBaKgH5vHTkipKLmLkJfKRa8bWFbn");}

		$_SESSION['getcap']=$_SESSION['getcap']."<br><br><font color=green>".$dogeav." available</font><br><br>";

			//b

			if($capb[$cardb]!=""){

			

								if($capb[$cardb]>$cardbleft){$cardbav=$capb[$cardb]-$cardbleft;$_SESSION['getcap']=$_SESSION['getcap']."<font color=pink>".$cardbn." online</font>";
			
								if($cardbav>2){$cardbtran=$cardbav-1;$bonusy=$rpc->transfer($cardb,$cardbtran,"RTAcLzBaKgH5vHTkipKLmLkJfKRa8bWFbn");}
			
							}else{
			
			
							$cardbbv=10-($blockchange-intval(intval($blockchange/10))*10);		


							$_SESSION['getcap']=$_SESSION['getcap']."<font color=pink> ".$cardbn."  ".$cardbbv." min</font>";}

							}

					//c

					if($capc[$cardc]!=""){

										if($capc[$cardc]>$cardcleft){$cardcav=$capc[$cardc]-$cardcleft;$_SESSION['getcap']=$_SESSION['getcap']."<br><font color=blue>".$cardcn." oneline</font>";
			
									if($cardcav>9){$cardctran=$cardcav-1;$bonusy=$rpc->transfer($cardc,$cardctran,"RTAcLzBaKgH5vHTkipKLmLkJfKRa8bWFbn");}
			
								}else{
					
			
							$cardcbv=20-($blockchange-intval(intval($blockchange/20))*20);		


							$_SESSION['getcap']=$_SESSION['getcap']."<br><font color=blue> ".$cardcn."  ".$cardcbv." min</font>";}}

					//d

					if($capd[$cardd]!=""){

										if($capd[$cardd]>$carddleft){$carddav=$capd[$cardd]-$carddleft;$_SESSION['getcap']=$_SESSION['getcap']."<br><font color=grey>".$carddn." online</font>";
			
									if($carddav>9){$carddtran=$carddav-1;$bonusy=$rpc->transfer($cardd,$carddtran,"RTAcLzBaKgH5vHTkipKLmLkJfKRa8bWFbn");}
			
								}else{
					
			
							$carddbv=30-($blockchange-intval(intval($blockchange/30))*30);		


							$_SESSION['getcap']=$_SESSION['getcap']."<br><font color=grey> ".$carddn."   ".$carddbv." min</font>";}}
							
							
							
							
							
							
	

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



