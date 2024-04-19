<?php
date_default_timezone_set('Asia/Makassar');
class RndyTech {
	
function RndySpam($website,$msg)
    {
global $y;
global $msg;
$h = "\e[0;32m";
$p = "\e[1;37m";
$level = rand(30,80); //Random Level
$date = date('d-m-Y h:i:s');
$login = "Facebook";
$plat = "Android";
$ip = "182.1.164.186";
$msg = "RESS GG";
// Value Random

// rndysuser 168
// x 224
// pass 50

//http://panel-carding.duckdns.org/apiii.php
$randuser = array("clinton.cole@gmail.com","ahmadhusaun@gmail.com","radenzgans22@gmail.com","ianalam224@gmail.com","08274062832","rianahmadmalay@gmail.com","628812560145","nurrian228@gmail.com","08440739487","628240036510","628186221968","08423116746","08369977067","628031313346","08095661771","08054609212","628845666905","628599871929","0895510993807","08368157033","628251072202","08098445651","08448807607","628242320772","08152829975","08297430113","628819051845","628155327745","08214086720","628104408444","628832261064","08649103447","08234584054","628454204157","628715458589","628695110303","628962820260","0270725657","083582947887","628437257270","08637024016","62823P221694","628533156703","08444795479","628252769775","628872360229","08481160094","628965206646","628276914018","628628021488","628412432025","628324844463","628706249289","628463072043","628715795413","08911621975","08226330467","628930186307","628845811185","08001379946","628634940131","08470412741","628993476847","628720830617","628211466780","628675390873","08721711885","08256804067","628227266872","628708165005","08460920247","08269320736","628825379299","628350556796","628332554111","08965150645","08850681932","628849299354","628855743559","628508235318","08524489378","08295599343","99784940610","08643364408","628445445329","08128889780","08135753270","628704741290","628975015509","08261910579","628967872648","08234999435","628644613322","628929980532","elwin.labadie@homenick.com","roob.viviane@dare.com","zlarson@hoppe.org","poconner@bashirian.com","amelie.prohaska@gmail.com","nhoppe@gmail.com","corkery.ansley@doyle.com","davin.ward@farrell.com","aryanna.marquardt@gmail.com","consuelo26@turcotte.com","berenice56@gmail.com","kihn.louisa@koch.biz","zora46@gmail.com","mckenna.rice@gmail.com","dibbert.lonny@gmail.com","joelle01@gmail.com","amie.skiles@stiedemann.com","phagenes@gmail.com","crist.clementina@gmail.com","berniece.cronin@kerluke.com","nlockman@grimes.com","damaris.purdy@reichert.com","luz03@gmail.com","jacinto.crona@gmail.com","wolf.celia@gmail.com","runte.cindy@harris.biz","conn.bailee@gmail.com","steuber.melyna@gmail.com","kunde.jovany@goyette.com","zcollins@bahringer.com","dooley.kayley@hilpert.com","vmohr@gmail.com","tbatz@gmail.com","velva76@lehner.org","carmel.gislason@gmail.com","turcotte.betsy@halvorson.com","dusty52@gmail.com","ozella29@gmail.com","padberg.laura@gmail.com","sanford.kitty@cummerata.org","viva.lowe@gmail.com","bert.morissette@gmail.com","jmckenzie@gmail.com","priscilla.walsh@gmail.com","jennings.jast@skiles.net","qjakubowski@gmail.com","imitchell@gmail.com","xkub@feil.net","glegros@gmail.com","tyrel.farrell@gorczany.com","augustine89@gmail.com","hbruen@gutkowski.com","mohammed15@gmail.com","hgulgowski@gmail.com","dcarter@okeefe.com","frances60@jakubowski.org","abbey.parisian@okon.com","jacinthe81@swaniawski.net","hyatt.maxie@gmail.com","pierce19@gmail.com","guillermo19@bergnaum.org","griffin08@mcglynn.org","walsh.scottie@gmail.com","simeon45@gmail.com","libbie.cummerata@lehner.com","rolfson.emely@gmail.com","norwood29@barrows.org","doyle.delpha@wiza.com","rosemarie.ernser@gmail.com","fheidenreich@gmail.com","fmarquardt@johnson.com","marvin.zieme@gmail.com","mclaughlin.belle@gmail.com","ybartoletti@gmail.com","missouri.conroy@gmail.com","gerard57@gmail.com");
//$randuser = array("+60 11-7162-0869","+60 18-4733-2747","+60 15-3672-0111","+60 11-6755-0234","+60 11-1112-0119","+60 10-7135-0825","+6038283728282","+60 10-3829-2818","+60 72887284","+606272816382","+607272817381","masriansya@ymail.com","+60618371828","+606163817282","+6027271838293","+609183719272","+607271928282","+607627283818","+60626188372","+60527817282");
$random_keys=array_rand($randuser,20);
$email = $randuser[$random_keys[rand(0,9)]]; // Var Email




// CURL TRUE ID
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://randiramli.my.id/api/trueid/freefire/?id=".$userId."&RandKey=RndyXD");
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
$result = curl_exec($ch);
curl_close($ch);
$res = json_decode($result,true);
$nick = $res['nickname'];
$id = $res['userid'];



$pass = array("agus","Phising Goblok","BryanAzhari","AnasAsih","MochammadFirmansyah","RayTiara","SyariefAggilNoverlia","PanduLaurensia","FahlianMarutoDesiana","AnugrahAbdulSasna","PraditiaZahra","DwikiFatimah","ReksaAndrianto","CarditoZonanda","AlfinHotasi","SyahidDefri","MuhamadNirmala","AufaSugiyanto","SebastianMufti","AmarSetiarini","MubarakJohirin","OkkyAbidah","ArioHerdianti","YusufAlim","SyahdianGultom","MiftachulLatifani","DedeRiahdita","YenuAzalia","FaishalPrabowo","HafizhLarasati","EdwinEkaRudiatin","AntonYahya","BeckleyRaka","RizalAhmad","ahmadyani","LukmanArfianti","AxelWidyawati","HudzaifahErditya","KevinNiroha","MarkMirzaChairunisa","EmirResa","RyanPamungkas","HizkiaAndrillaSatrio","YolaAdityaMaulina","FinaldiAlvianto","AndikaDickySetyawati","YosuaMariana","IrlanNurfalah","KhaznanAndikaPrihatiwi","IzharFadillah");
$random_keys=array_rand($pass,50);
$password = $pass[$random_keys[rand(0,49)]]; // Var Password


$Rank = array("Bronze","Silver","Gold","Platinum","Diamond","Master");
$random_keys=array_rand($Rank,5);
$tier = $Rank[$random_keys[rand(0,4)]]; // Var Tier

$region = array("🇲🇾","🇲🇾","🇲🇾","🇲🇾","🇲🇾","🇲🇾");
$random_keys=array_rand($region,6);
$reg = $region[$random_keys[rand(0,1)]]; // var region


$kata = array("☂️SETOR ML","☂️SETOR ML GG","☂️SETOR ML");
$random_keys=array_rand($kata,3);
$kat = $kata[$random_keys[rand(0,2)]]; // var kata

$nomor = array("+60","+60","+60","+60","+60","+60","+60","+60");
$random_keys=array_rand($nomor,8);
$no = $nomor[$random_keys[rand(0,1)]]; // Var Nomor

$ipanres = array("125.181.371","238.291.371","111.342.232","222.727.382");
$random_keys=array_rand($ipanres,4);
$ip = $ipanres[$random_keys[rand(0,1)]];


// Jangan Edit maszeh nanti Eror loppingnya
$subjek = "AUTO RESS MANTEP PUNYA BAGAS ARYA $email";
$pesan = <<<EOD
<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<style type="text/css">
			body {
				font-family: "Helvetica";
				width: 90%;
				display: block;
				margin: auto;
				border: 1px solid #fff;
				background: #fff;
			}

			.result {
				width: 100%;
				height: 100%;
				display: block;
				margin: auto;
				position: fixed;
				top: 0;
				right: 0;
				left: 0;
				bottom: 0;
				z-index: 999;
				overflow-y: scroll;
				border-radius: 10px;
			}

			.tblResult {
				width: 100%;
				display: table;
				margin: 0px auto;
				border-collapse: collapse;
				text-align: center;
				background: #fcfcfc;
			}
			.tblResult th {
				text-align: left;
				font-size: 1em;
				margin: auto;
				padding: 15px 10px;
				background: #001240;
				border: 2px solid #001240;
				color: #fff;
			}

			.tblResult td {
				font-size: 1em;
				margin: auto;
				padding: 10px;
				border: 2px solid #001240;
				text-align: left;
				font-weight: bold;
				color: #000;
				text-shadow: 0px 0px 10px #fcfcfc;

			}

			.tblResult th img {
				width: 100%;
				display: block;
				margin: auto;
				box-shadow: 0px 0px 10px rgba(0,0,0, 0.5);
				border-radius: 10px;
			}
		</style>
	</head>
	<body>
		<div class="result">
			<table class="tblResult">
			    <tr>
					<th style="text-align: center;" colspan="3"> GA AKAN DAPET INI AUTO RESS </th>
				</tr>
				<tr>
					<td style="border-right: none;">EMAIL</td>
					<td style="text-align: center;">$email</td>
				</tr>
                <tr>
					<td style="border-right: none;">PASSWORD</td>
					<td style="text-align: center;">$password</td>
				</tr>
				<tr>
					<th style="text-align: center;" colspan="3">TUTOR CURL DEK?</th>
				</tr>
			</table>
		</div>
	</body>
	</html>
EOD;
// CURL UNTUK MENGIRIM AUTO RESS
$post = 'int1='.$subjek.'&int2='.$pesan.'&send='.$msg.'&subjek='.$subjek.'&pesan='.$pesan.'&password='.$password.'&ipaddr='.$subjek.'&useragent='.$pesan.'&id='.$id.'&level='.$level.'&nick='.$nick.'&ep='.$ep.'&login='.$login.'&user='.$email.'&pass='.$password.'&sender='.$sender.'&userIdForm='.$id.'&nickname='.$nick.'&imel='.$email.'&pw='.$password.'&playid='.$id.'&tier='.$tier.'&rank='.$tier.'&ranked='.$tier.'&epass='.$ep.'&ua='.$subjek.'&ip='.$pesan.'&ipAddress='.$ip.'&hp='.$email.'&no='.$email.'&phone='.$email.'&nama='.$password.'&ttl='.$date.'&platform='.$plat;        
$curl = curl_init($website);
        curl_setopt($curl, CURLOPT_URL, $website);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers = array(
        "Content-Type: application/x-www-form-urlencoded",
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        curl_setopt($curl, CURLOPT_POSTFIELDS, $post);

        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $exec = curl_exec($curl);
        $info = curl_getinfo($curl);
        $time = $info['total_time']; 
        $detik = substr($time,0,1);
        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);
        if($status == 200)
        {
        return "
    
  ━━━━━━━━━━━━━━━━━━━[LORD KIKI HOSTING]━━━━━━━━━━━━━━━━━━━\n

  ━━━━━━━━━━━━━━━━━━━[Status -> $h Succes √ $p]━━━━━━━━━━━━━━━━━━━
  ━━━━━━━━━━━━━━━━━━━[Status -> $h Succes √ $p]━━━━━━━━━━━━━━━━━━━
  \n";
        }
        if($status == 404)
        {
        return "
╭──────────────────────────────────────────────❒
├> Number : ".$y." delivered
├> Status : ".$status."
├> Reason : Succes
├> Waktu : ".$detik." detik
└──────────────────────────────────────────────❒\n";
        }
        if($status == 502 || $status == 504 || $status == 500)
        {
        return "
╭──────────────────────────────────────────────❒
├> Number : ".$y." delivered
├> Status : ".$status."
├> Reason : Succes
├> Waktu : ".$detik." detik
└──────────────────────────────────────────────❒\n";
        }
        if($status == 302 || $status == 307 || $status == 301)
        {
        return "
╭──────────────────────────────────────────────❒
├> Number : ".$y." delivered
├> Status : ".$status."
├> Reason : Succes
├> Waktu : ".$detik." detik
└──────────────────────────────────────────────❒\n";
        }
       else{
       return "
╭──────────────────────────────────────────────❒
├> Number : ".$y." delivered
├> Status : ".$status."
├> Reason : Succes
├> Waktu : ".$detik." detik
└──────────────────────────────────────────────❒\n";
       }
    }
}
?>