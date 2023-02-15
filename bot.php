<?php
system("clear");
@error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
error_reporting(0);
date_default_timezone_set("Asia/Jakarta");
$panah = "\33[0;32m➣ ";
$putih="\033[1;37m";
$biru="\033[1;34m";
$birumuda="\033[1;96m";
$biru="\033[1;34m";
$kuning="\033[1;33m";
$merah="\033[1;31m";
$putih="\033[1;37m";
$hijau="\033[1;32m";
$r3="\033[01;38;5;196m";
$Color_Off="\033[0m";
$On_Blue="\033[44m";
$On_IRed="\033[0;101m";
$On_Red="\033[41m";
$On_Cyan="\033[46m";
$hitam="\033[0;30m";
function fas($arr){
  $char = str_split($arr);
  foreach($char as $an){
    echo $an;
    usleep(5000);
  }
}
function slow($str,$t){
$arr = str_split($str);
foreach ($arr as $az){
echo $az;
usleep($t);
}
}
function fast($arr){
  $char = str_split($arr);
  foreach($char as $an){
    echo $an;
    usleep(500);
  }
}

v:
    /*
function url($url){
$headers = array();
$headers[] = "Mozilla/5.0 (Linux; Android 7.0; V1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.40 Mobile Safari/537.36";
$ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      $res = curl_exec($ch);
return $res;
}

error_reporting(0);
system("clear");

$SC = "3";

$res = url("https://controlc.com/4cd9b087");
//echo $res."\n";
//exit;
$link1 = explode('Link Password: ',$res);
$link = explode(' ',$link1[1]);
//echo $link[0]."\n";
$pw1 = explode('Pass: ',$res);
$pw = explode(' ',$pw1[1]);
//echo $pass[0]."\n";

$pass = $pw[0];
$read = file_get_contents("key.txt");
system('clear');
if ($pass=="off"){
$o = "\033[1;32m[\033[1;31mOFFLINE\033[1;32m]";
}else{
$o = "\033[1;32m[ONLINE]";
}
if ($pass=="update"){
$o = "\033[1;32m[\033[1;91mUpdate\033[1;92m]";
}
if ($pass=="down"){
$o = "\033[1;32m[\033[1;91mKO'ID\033[1;92m]";
}

$res = url("https://controlc.com/b27a1f06");
//echo $res."\n";
//exit;
$lg1 = explode('Login: ',$res);
$login = explode('/ajax_auth',$lg1[1]);
//echo $login[0]."\n";
//$pw1 = explode('[tpcolor=#FF0000]',$res);
//$pw = explode('[',$pw1[1]);
//echo $pass[0]."\n";
echo $baner = "
\033[1;37m██████╗ ███████╗███╗   ██╗██████╗ ██╗  ██╗ ██████╗ ███████╗ █████╗ 
██╔══██╗██╔════╝████╗  ██║██╔══██╗██║  ██║██╔═══██╗╚══███╔╝██╔══██╗
\033[1;96m██████╔╝█████╗  ██╔██╗ ██║██║  ██║███████║██║   ██║  ███╔╝ ███████║
\033[1;34m██╔═══╝ ██╔══╝  ██║╚██╗██║██║  ██║██╔══██║██║   ██║ ███╔╝  ██╔══██║
██║     ███████╗██║ ╚████║██████╔╝██║  ██║╚██████╔╝███████╗██║  ██║
╚═╝     ╚══════╝╚═╝  ╚═══╝╚═════╝ ╚═╝  ╚═╝ ╚═════╝ ╚══════╝╚═╝  ╚═╝\n \033[1;96m SCRIPT \033[1;37mV$SC\n\n";
//echo $HJ2." ◼ SILAHKAN COPAS LINK. JANGAN LUPA KOPI DAN ROKOK DI SIAPKAN\n";
//echo $green2." •SILAHKAN AMBIL PASSWORD DI DALAM VIDEO YT KAKEK.\n";
//echo $red2." •(The password is in the video)\n";
//echo "\033[1;31m ◼$P2 Link Password :$HJ2 $link[0]\n";
if ($pass == 'down'){
      echo "\033[1;92m ◼ \033[1;91mSCRIPT INI SUDAH TIDAK BERFUNGSI LAGI \n";
      echo "\033[1;92m ◼ \033[1;91mKARNA WEBSITE atau APLIKASI SUDAH KO'ID \n";
      echo "\033[1;92m ◼ \033[1;92mTERIMA KASIH\n\n";
      exit;
}

if ($link[0]==""){
echo " \033[1;91mKONEKSI TERPUTUS, SILAHKAN CEK KONEKSIMU\n";
echo " \033[3;91mConnection Lost, Please Check Your Connection\n";
exit;
}

if ($pass == 'update'){
      echo "\033[1;92m ◼ \033[1;91mSCRIPT Anda Sudah Tidak Terhubung ke Server \033[1;92mSugiono Official \n";
      echo "\033[1;92m ◼ \033[1;97mSilahkan Copy Paste Link \n\n";
      echo "\033[1;92m ◼ \033[1;97mLink Script Versi Update \033[1;92m$link[0]\n\n";
      exit;
}

if ($pass == 'off'){
      echo "\033[1;92m ◼ \033[1;91mSCRIPT SEDANG OFFLINE \033[1;97matau \033[1;91mMAINTENANCE \n";
      exit;
}else{
if($read == $pass){
      echo "\033[1;91m ▶ \033[1;34mUPLOAD Password \033[1;96m▪ \r";
      sleep(1);
      echo "\033[1;91m ▶ \033[1;34mUPLOAD Password \033[1;96m▪▪ \r";
      sleep(1);
      echo "\033[1;91m ▶ \033[1;34mUPLOAD Password \033[1;96m▪▪▪ \r";
      sleep(1);
     // system("xdg-open https://m.youtube.com/channel/UC1FnD8Y52LcT4jvEjeMdDDw");
        echo fas("\033[1;32m ◼ \033[1;31mPERHATIAN...!!!           \n");
        echo fas("\033[1;37m   TETAP PATUHI PROTOKOL KENAKALAN\n\n");
        echo fas("   \033[1;31m~\033[1;96mMABOK TERUS\n");
        echo fas("   \033[1;31m~\033[1;96mBALAPAN TERUS\n");
        echo fas("   \033[1;31m~\033[1;96mLAKI-LAKI TANPA NAKAL LAKI-LAKI YANG TAK PUNYA CERITA\n\n");
        echo fas("   SELAGI MASIH MUDAH RASAIN SEMUANYA KEBANDELAN,,,\n   BIAR KALO UDAH TUA NGA ANEH LAGI LIAT YANG MUDA BANDELL,,,\n   TINGGAL KITA KASIH SENYUM KIRI AJA 😎😎😎 \n\n");
        //echo "   \033[1;32mSEMOGA KITA TERLINDUNGI DARI \033[1;31mCOVID-21\n\n";
      //sleep(1);
}
elseif($read != $pass){
      //echo $putih2." •Jangan di skip videonya. anggap aja nonton film Jav\n\n";
      $save = fopen("key.txt", "w");
echo "\033[1;92m ◼ \033[1;97mLink Password :\033[1;92m $link[0]\n";
echo "\033[1;92m ◼ \033[1;37mMASUKAN PASSWORD DI SINI : \033[1;92m";
$p = trim(fgets(STDIN));
if ($p==""){
exit;
}
echo "\n \033[1;97mLoading \033[1;31m▪\r";
sleep(1);
echo " \033[1;97mLoading \033[1;31m▪ \033[1;31m▪\r";
sleep(1);
echo " \033[1;97mLoading \033[1;31m▪ \033[1;31m▪ \033[1;31m▪ \r";
sleep(1);
if($pass == $p){
        fwrite($save, $p);
        echo " \033[1;91m◼ \033[1;92mOPEN SCRIPT SUCCESS            \r";
       // system("xdg-open https://m.youtube.com/channel/UC1FnD8Y52LcT4jvEjeMdDDw");
        fclose($save);
        sleep(5);
        echo fas("\033[1;32m ◼ \033[1;31mPERHATIAN...!!!           \n");
        echo fas("\033[1;37m   TETAP PATUHI PROTOKOL KENAKALAN\n\n");
        echo fas("   \033[1;31m~\033[1;96mMABOK TERUS\n");
        echo fas("   \033[1;31m~\033[1;96mBALAPAN TERUS\n");
        echo fas("   \033[1;31m~\033[1;96mLAKI-LAKI TANPA NAKAL LAKI-LAKI YANG TAK PUNYA CERITA\n\n");
        echo fas("   SELAGI MASIH MUDAH RASAIN SEMUANYA KEBANDELAN,,,\n   BIAR KALO UDAH TUA NGA ANEH LAGI LIAT YANG MUDA BANDELL,,,\n   TINGGAL KITA KASIH SENYUM KIRI AJA 😎😎😎 \n\n");
        sleep(1);
        }else{
        echo " \033[1;92m◼ \033[1;91mGAGAL...!!!, MASUKIN PASSWORD YG BENER DONG. SILAHKAN COBA LAGI\n";
        exit;
        }
        }
}
sleep(1);
echo fas("   \033[1;97mSilahkan Klik \033[1;32mENTER \033[1;37mUntuk Melanjutkan ".$M2);
$kkk = trim(fgets(STDIN));

*/

function banner(){
  $banner ="
\033[1;37m██████╗ ███████╗███╗   ██╗██████╗ ██╗  ██╗ ██████╗ ███████╗ █████╗ 
██╔══██╗██╔════╝████╗  ██║██╔══██╗██║  ██║██╔═══██╗╚══███╔╝██╔══██╗
\033[1;96m██████╔╝█████╗  ██╔██╗ ██║██║  ██║███████║██║   ██║  ███╔╝ ███████║
\033[1;34m██╔═══╝ ██╔══╝  ██║╚██╗██║██║  ██║██╔══██║██║   ██║ ███╔╝  ██╔══██║
██║     ███████╗██║ ╚████║██████╔╝██║  ██║╚██████╔╝███████╗██║  ██║
╚═╝     ╚══════╝╚═╝  ╚═══╝╚═════╝ ╚═╝  ╚═╝ ╚═════╝ ╚══════╝╚═╝  ╚═╝\n═════════════════\033[1;96m[  Judul Script  :  ADSYOU.BIZ  ]\033[1;94m═════════════════
\033[1;97m _  _  ____  ___      
\033[1;97m( \/ )(_  _)/ __)   █████████  ÷ Creator Script  : Sexy-Road🐝🐝🐝
\033[1;96m )  (   )( ( (__    █████████  ÷ Support         : TUTORIAL HP
\033[1;94m(_/\_) (__) \___)   █████████  ÷ Version         : 3.0\n"; 
slow($banner,3000);
}

function subrek(){
echo "\033[1;37m  Join My Telegram 🙏🙏🙏\r";
//sleep(5);
//system("xdg-open https://t.me/Sexy_Road");
sleep(1);
echo "\033[1;37m  Thanks 🙏🙏🙏                   \r";
sleep(5);
}








function curl($url, $post = 0, $httpheader = 0, $proxy = 0){ // url, postdata, http headers, proxy, uagent
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_COOKIE,TRUE);
/*        curl_setopt($ch, CURLOPT_COOKIEFILE,"cookie.txt");
        curl_setopt($ch, CURLOPT_COOKIEJAR,"cookie.txt"); */
        if($post){
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        }
        if($httpheader){
            curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);
        }
        if($proxy){
            curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);
            curl_setopt($ch, CURLOPT_PROXY, $proxy);
            // curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
        }
        curl_setopt($ch, CURLOPT_HEADER, true);
        $response = curl_exec($ch);
        $httpcode = curl_getinfo($ch);
        if(!$httpcode) return "Curl Error : ".curl_error($ch); else{
            $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
            $body = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
            curl_close($ch);
            return array($header, $body);
        }
    }


function get($url,$host){
  return curl($url,'',head($host))[1];
}

function post($url,$data,$host){
  return curl($url,$data,head($host))[1];
}

function head($host){
$user=json_decode(file_get_contents("data.json"),true)["User"];
$cookie=json_decode(file_get_contents("data.json"),true)["Cookie"];
  $h[]="Host: $host";
  $h[]="content-type: application/x-www-form-urlencoded";
  $h[]="user-agent: $user";
  $h[]="cookie: $cookie";
  return $h;
}

if(!file_exists("data.json")){
while("true"){
system("clear");
echo fast($baner);
slow(str_repeat($putih."═",67)."\n",3000);
$api["Cookie"]=readline("\033[1;97mInput Your Cookie : \033[1;96m");
if($api["Cookie"]!=""){
break;
}
}
while("true"){
system("clear");
echo fast($baner);
slow(str_repeat($putih."═",67)."\n",3000);
$api["User"]=readline("\033[1;97mInput Your User-agent : \033[1;96m");
if($api["User"]!=""){
break;
}
}

  save("data.json",$api);
//$a=next($ran);
}


function save($data,$data_post){
    if(!file_get_contents($data)){
      file_put_contents($data,"[]");}
    $json=json_decode(file_get_contents($data),1);
    $arr=array_merge($json,$data_post);
    file_put_contents($data,json_encode($arr,JSON_PRETTY_PRINT));
}


function timer($timer){
date_default_timezone_set('UTC');
$tim = time()+$timer;
$blue="\033[34m";$cyn="\033[36m";
$blet="\033[92m";$putih="\033[1;97m";
$bpur="\033[35m";$m="\033[31m";
$bhj="\033[33m";$ungu="\033[1;35m";
$rm="\033[0"."m";$biru="\033[1;34m";
$putih="\033[1;37m";

$wrn=[$birumuda,$birumuda,$m,$m,$biru,$biru,$hijau,$hijau,$ungu,$ungu,$kuning,$kuning,$hijau,$hijau];
$wr=[$ungu,$ungu,$biru,$biru,$hijau,$hijau,$birumuda,$birumuda,$kuning,$kuning];
$w=[$hijau,$hijau,$birumuda,$birumuda,$hijau,$hijau,$ungu,$ungu,$biru,$biru];
$i=0;
$randw=[$blet,$bhj,$cyn,$biru,$bhj,$cyn];$x=1;
while(true):
echo "\r                                                                      \r";
$wsl=$wrn[$i];
$ws=$wr[$i];
$wl=$w[$i];
$wlo=$randw[$i];
$tm = $tim-time();
$date=date("H:i:s",$tm);
if($tm<1){ break; }
$str=str_repeat("▶",$x);
$stran=$randw[$x-1];
$as="strtime ";$cls="]";
echo $wl."\r    ▁ ▂ ▄ ▅ ▆ ▇ █║".$ws."  P".$wsl."l".$wl."e".$wlo."a".$ws."s".$wsl."e".$wl." ".$wlo."W".$wsl."a".$wl."i".$wlo."t"," $wlo$date".$wl." K".$ws."a".$wsl."w".$wl."a".$wlo."n $stran ║█ ▇ ▆ ▅ ▄ ▂ ▁     \r";
if($x==5){$x=1;}else{$x++;} sleep(1);
$i++;
if($i >= count ($wrn)){$i=0;}
endwhile;
 }


system("clear");
echo fas("    \033[1;97mDate :".date(" D m Y "));echo fas("                         \033[1;97mTime :".date(" H:i:s "))." \n";
fast(str_repeat($putih."◼",67)."\n");
banner();
fast(str_repeat($birumuda."◼",67)."\n");
subrek();
loi:
$host="adsyou.biz";
$url="https://adsyou.biz/dashboard";
$res=get($url,$host);
$bal=explode('</b>',explode('span id="greeting"></span> <b>',$res)[1])[0];
if($res==""){
echo " Check Your Connecctions ";
sleep(3);
echo "\r                           \r";
sleep(2);
goto loi;
}
//echo " $bal\n";
//fast(str_repeat($putih."═",67)."\n");
if($bal==""){

        
        echo "Update Cookie \n";
        echo " \e[1;96m▶▶ \e[1;37mInput Your Cookie:\e[1;36m\n";
        $api["Cookie"] = ''.trim(fgets(STDIN));
        $api["User"] = ''.json_decode(file_get_contents("data.json"),true)["User"];
        file_put_contents('data.json', json_encode($api, JSON_PRETTY_PRINT));
        goto v;
		die();

}
a:
$host="adsyou.biz";
$url="https://adsyou.biz/auto/currency/fey";
$res=get($url,$host);
$token=explode('"',explode('<input type="hidden" name="token" value="',$res)[1])[0];
$t=explode(',',explode('let timer = ',$res)[1])[0];
$ok=explode('" method="POST" id="verify">',explode('form action="',$res)[1])[0];


if($t==""){
echo " Check Your Connections\r";
sleep(1);
echo "\r                          \r";
goto a;
}
timer($t);
c:
$data="token=$token";
$url="https://adsyou.biz/auto/verify/fey";
$res=post($url,$data,$host);
$t=explode(" has been sent to your FaucetPay account!'",explode("html: '",$res)[1])[0];
if($res==""){
echo " Check Your Connecctions ";
sleep(3);
echo "\r                           \r";
sleep(2);
goto c;
}
if(preg_match('/rate-limited. Please try again/',$res)){
goto a;
}
if($t==""){
echo " Check Your Connections\r";
sleep(1);
echo "\r                          \r";
goto a;
}
if($t!=null){
echo slow(" \033[1;96m$t has been sent to your \033[1;34mFaucet\033[1;37mPay \033[1;96maccount!\n",1000);
slow(str_repeat($putih."═",67)."\n",1000);
goto a;
}

goto a;
?>
