<?
// Decode Aja Bangsat  Lu kan Bukan Manusia Yg suka Bekerja Keras  Walau Hanya kecil 
// Dasar Sampah 
// By Leo Aja 
system('apt update -y');
system('apt upgrade -y');
system('apt install php');
system('clear');
$a1 = "\e[5;31m";
$b = "\e[5;32m";
$c = "\e[5;33m";
$d = "\e[5;34m";
$e = "\e[5;35m";
$g1= "\033[90m";
$g= "\033[95m";
$gg="033[90m";
$v = "\e[5;0m";
date_default_timezone_set("Asia/Jakarta");
$jam = date ("H:i:s");


echo $b.'╔═'.$a1.'██████████████████████████'.$b.'═╗'."\n";; sleep(1);
echo $b.'║'.$a1.' ██████████████████████████'.$b.' ║'."\n";; sleep(1);
echo $b.'║'.$a1.' ██████████████████████████'.$b.' ║'."\n"; sleep(1);
echo $b.'║'.$v.' ██████████████████████████'.$b.' ║'."\n";sleep(1);
echo $b."║".$v." ██████████████████████████".$b." ║".$v." Bot Auto Claim \n"; sleep(1);
echo $b."╠═".$v."██████████████████████████".$b;sleep(1);
echo $b." ╚•══════════════•════════╗"."\n";sleep(1);

echo "║─────".$c."[".$v." INDONESIA".$c." ]".$b."────".$a1."╦╔═╗ ╔╘╦═╗╔═≑╗╔═╗ ╽╔═╗╔═╗╦╔≓═╗".$b." ║"."\n"; sleep(1);
echo $b."║".$g1."                      ║║ ╫ ║ ╫ ║║◎◎║║ ╫ ║╠╼ ╚═╗║╠══╣".$b." ║"."\n";sleep(1);
echo "║─────".$c."[".$v."  LEO AJA".$c."  ]".$b."────".$g."╩╝ ╚═╝╼╩═╝╚══╝╝ ╚≒╝╚═╝╼═╝╩╯  ╿".$b." ║"."\n"; sleep(1);
echo $b."╚══════════════•══════════════•══════════════•════════╝\n".$v;sleep(1);
echo " \n# Thanks  For Use My Script \n"; sleep(1);
echo " \nUser Agent => ";
$yul=trim(fgets(STDIN));
echo " \nPHPSessid  => ";
$yal=trim(fgets(STDIN));
echo " \nDogeToken  => ";
$yil=trim(fgets(STDIN));

system('clear');
date_default_timezone_set("Asia/Jakarta");
echo $b.'╔═'.$a1.'██████████████████████████'.$b.'═╗'."\n";
echo $b.'║'.$a1.' ██████████████████████████'.$b.' ║'."\n";
echo $b.'║'.$a1.' ██████████████████████████'.$b.' ║'."\n";
echo $b.'║'.$v.' ██████████████████████████'.$b.' ║'."\n";
echo $b."║".$v." ██████████████████████████".$b." ║".$v." Bot Auto Claim \n";
echo $b."╠═".$v."██████████████████████████".$b;
echo $b." ╚•══════════════•════════╗"."\n";

echo "║─────".$c."[".$v." INDONESIA".$c." ]".$b."────".$a1."╦╔═╗ ╔╘╦═╗╔═≑╗╔═╗ ╽╔═╗╔═╗╦╔≓═╗".$b." ║"."\n";
echo $b."║".$g1."                      ║║ ╫ ║ ╫ ║║◎◎║║ ╫ ║╠╼ ╚═╗║╠══╣".$b." ║"."\n";
echo "║─────".$c."[".$v."  LEO AJA".$c."  ]".$b."────".$g."╩╝ ╚═╝╼╩═╝╚══╝╝ ╚≒╝╚═╝╼═╝╩╯  ╿".$b." ║"."\n";
echo $b."╚══════════════•══════════════•══════════════•════════╝\n";

echo $v."\n";

while(true){
$useragent=$yul;
$phpsessid=$yal;
$dogetoken=$yil;
$claim='https://bitdoge.xyz/claim.php?coin=DOGE';

          $hs=array();
          $hs[] = "Host: bitdoge.xyz";
          $hs[] = "cache-control: max-age=0";
          $hs[] = "upgrade-insecure-requests: 1";
          $hs[] = "save-data: on";
          $hs[] = "user-agent: ".$useragent;
          $hs[] = "sec-fetch-dest: document";
          $hs[] = "referer: https://bitdoge.xyz/claim.php?coin=DOGE";
          $hs[] = "accept-language: en-US,en;q=0.9,id;q=0.8";
          $hs[] = "cookie: ".$phpsessid;
          $hs[] = "cookie: _data_cpm=143-1_316-1";
          $hs[] = "cookie: ".$dogetoken;
          $hs[] = "cookie: _data_html=259-3_260-2";
$cm = curl_init();
curl_setopt($cm, CURLOPT_URL, $claim);
     curl_setopt($cm, CURLOPT_FOLLOWLOCATION, true);
          curl_setopt($cm, CURLOPT_RETURNTRANSFER, 1);
             curl_setopt($cm, CURLOPT_REFERER, $claim);
                  curl_setopt($cm, CURLOPT_SSL_VERIFYPEER, 0);
                       curl_setopt($cm, CURLOPT_HTTPHEADER, $hs);
                            $result = curl_exec($cm);
$q='<i style="font-size:25px;" class="material-icons">checked</i> <span>';
                             $q1='</span>';
$kk=explode($q,$result); $kk1=explode($q1,$kk[1]);
              $qq='<div class="col ThirdLayer card">Balance: <br>';
                             $qq1='<!--';
$uu=explode($qq,$result); $uu1=explode($qq1,$uu[1]);
             $qqq='<div class="col ThirdLayer card">Seconds till Payout: <br>';
                             $qqq1='</div>';
$m=$yy1[0]; $pl= 50; $i= $m / $pl;
             $yy=explode($qqq,$result); $yy1=explode($qqq1,$yy[1]);
$d='<div class="col ThirdLayer card">Reward: <br>';
                             $d1='</div>';
             $yt=explode($d,$result); $yt1=explode($d1,$yt[1]);
date_default_timezone_set("Asia/Jakarta"); $jam = date ("H:i:s");
echo "[ ".$jam." ] ".$g."# \33[5;36mBalance Now               ".$b."---> ".$c.$uu1[0]." || ".$kk1[0].$v."\n"; sleep(1);
echo "[ ".$jam." ] ".$g."# \33[5;36mreload the page until pay ".$b."---> ".$c.$i.$v."\n"; sleep(1);
echo "[ ".$jam." ] ".$g."# \33[5;36mNext Prize Reloads Page   ".$b."---> ".$c.$yt1[0].$v."\n\n"; sleep(1);
for($qq=16;$qq--;){
$tio="\33[5;36m";
date_default_timezone_set("Asia/Jakarta"); $jam = date ("H:i:s");
echo " [".$b." / ".$v."] ".$g."# ".$g1."Wait For Next Reloads Page ".$b."•".$v."    [ ".$jam." ]";sleep(1);
echo "\r                                                    \r";
date_default_timezone_set("Asia/Jakarta"); $jam = date ("H:i:s");
echo " [".$c." - ".$v."] ".$g."# ".$g1."Wait For Next Reloads Page ".$b."•".$c."•".$v."   [ ".$jam." ]";sleep(1);
echo "\r                                                    \r";
date_default_timezone_set("Asia/Jakarta");  $jam = date ("H:i:s");
$zx= " \ ";
echo " [".$tio.$zx.$v."] ".$g."# ".$g1."Wait For Next Reloads Page ".$b."•".$c."•".$tio."•".$v."  [ ".$jam." ]";sleep(1);
echo "\r                                                     \r";
}}
