<?php

ob_start();
session_start();

include 'baglan.php';
include '../fonksiyon.php';

  
if (isset($_POST['admingiris'])) {

  

  $sifrele = md5($_POST['kullanici_password']);
  $kullanici_mail=$_POST['kullanici_mail'];
  $data = [
    'kullanici_mail' => $kullanici_mail,
    'kullanici_password' => $sifrele,
    'kullanici_yetki' => 5
  ];
  $sql = "SELECT * FROM kullanici where kullanici_mail=:kullanici_mail and kullanici_password=:kullanici_password and kullanici_yetki=:kullanici_yetki";
  $stmt= $db->prepare($sql);  
  $stmt->execute($data);

  echo $say=$stmt->rowCount();
  
  if ($say=='1'){

    $_SESSION['kullanici_mail']=$kullanici_mail;
    header('Location:../production/index.php');
    exit;

  }
  else{

    header('Location:../production/login.php?durum=no');
    exit;
  }
  

  exit;





}


if (isset($_POST['genelayarkaydet'])) {

 
  $data = [
    'ayar_title' => $_POST['ayar_title'],
    'ayar_description' => $_POST['ayar_description'],
    'ayar_keywords' => $_POST['ayar_keywords'],
    'ayar_author' => $_POST['ayar_author'],
    'ayar_id' => 11,
    ];
  $sql = "UPDATE ayar SET ayar_title=:ayar_title, ayar_description=:ayar_description, ayar_keywords=:ayar_keywords, ayar_author=:ayar_author WHERE ayar_id=:ayar_id";
  $stmt= $db->prepare($sql);  
  $stmt->execute($data);


  if ($stmt) {
    
    header("Location:../production/genel-ayar.php?durum=ok");
  }
  else {

    header("Location:../production/genel-ayar.php?durum=no");
  }

}


if (isset($_POST['iletisimayarkaydet'])) {

  

  $data = [
    'ayar_tel' => $_POST['ayar_tel'],
    'ayar_gsm' => $_POST['ayar_gsm'],
    'ayar_faks' => $_POST['ayar_faks'],
    'ayar_mail' => $_POST['ayar_mail'],
    'ayar_eyalet' => $_POST['ayar_eyalet'],
    'ayar_sehir' => $_POST['ayar_sehir'],
    'ayar_adres' => $_POST['ayar_adres'],
    'ayar_id' => 11,
    ];
  $sql = "UPDATE ayar SET ayar_tel=:ayar_tel, ayar_gsm=:ayar_gsm, ayar_faks=:ayar_faks, ayar_mail=:ayar_mail, ayar_eyalet=:ayar_eyalet, ayar_sehir=:ayar_sehir, ayar_adres=:ayar_adres WHERE ayar_id=:ayar_id";
  $stmt= $db->prepare($sql);  
  $stmt->execute($data);
   
   if ($stmt) {
    
    header("Location:../production/iletisim-ayarlar.php?durum=ok");
  }
  else {

    header("Location:../production/iletisim-ayarlar.php?durum=no");
  }
   

}

if (isset($_POST['apiayarkaydet'])) {

  

  $data = [
    'ayar_analystic' => $_POST['ayar_analystic'],
    'ayar_maps' => $_POST['ayar_maps'],
    'ayar_zopim' => $_POST['ayar_zopim'],
    'ayar_id' => 11,
    ];
  $sql = "UPDATE ayar SET ayar_analystic=:ayar_analystic, ayar_maps=:ayar_maps, ayar_zopim=:ayar_zopim WHERE ayar_id=:ayar_id";
  $stmt= $db->prepare($sql);  
  $stmt->execute($data);

  if ($stmt) {
    
    header("Location:../production/api-ayarlar.php?durum=ok");
  }
  else {

    header("Location:../production/api-ayarlar.php?durum=no");
  }

}

if (isset($_POST['sosyalayarkaydet'])) {

 
  $data = [
    'ayar_facebook' => $_POST['ayar_facebook'],
    'ayar_instagram' => $_POST['ayar_instagram'],
    'ayar_youtube' => $_POST['ayar_youtube'],
    'ayar_id' => 11,
    ];
  $sql = "UPDATE ayar SET ayar_facebook=:ayar_facebook, ayar_instagram=:ayar_instagram, ayar_youtube=:ayar_youtube WHERE ayar_id=:ayar_id";
  $stmt= $db->prepare($sql);  
  $stmt->execute($data);

  if ($stmt) {
    
    header("Location:../production/sosyal-ayar.php?durum=ok");
  }
  else {

    header("Location:../production/sosyal-ayar.php?durum=no");
  }


}

if (isset($_POST['mailayarkaydet'])) {

 

  $data = [
    'ayar_smtphost' => $_POST['ayar_smtphost'],
    'ayar_smtppassword' => $_POST['ayar_smtppassword'],
    'ayar_smtpport' => $_POST['ayar_smtpport'],
    'ayar_id' => 11,
    ];
  $sql = "UPDATE ayar SET ayar_smtphost=:ayar_smtphost, ayar_smtppassword=:ayar_smtppassword, ayar_smtpport=:ayar_smtpport WHERE ayar_id=:ayar_id";
  $stmt= $db->prepare($sql);  
  $stmt->execute($data);

  if ($stmt) {
    
    header("Location:../production/mail-ayar.php?durum=ok");
  }
  else {

    header("Location:../production/mail-ayar.php?durum=no");
  }


}

if (isset($_POST['hakkimizdakaydet'])) {

  

  $data = [
    'hakkimizda_baslik' => $_POST['hakkimizda_baslik'],
    'hakkimizda_icerik' => $_POST['hakkimizda_icerik'],
    'hakkimizda_amac' => $_POST['hakkimizda_amac'],
    'hakkimizda_id' => 0,
    ];
  $sql = "UPDATE hakkimizda SET hakkimizda_baslik=:hakkimizda_baslik, hakkimizda_icerik=:hakkimizda_icerik, hakkimizda_amac=:hakkimizda_amac WHERE hakkimizda_id=:hakkimizda_id";
  $stmt= $db->prepare($sql);  
  $stmt->execute($data);

  if ($stmt) {
    
    header("Location:../production/hakkimizda.php?durum=ok");
  }
  else {

    header("Location:../production/hakkimizda.php?durum=no");
  }


}

if (isset($_POST['kullaniciduzenle'])) {

  

  $data = [
    'kullanici_mail' => $_POST['kullanici_mail'],
    'kullanici_adsoyad' => $_POST['kullanici_adsoyad'],
    'kullanici_tel' => $_POST['kullanici_tel'],
    'kullanici_password' => $_POST['kullanici_password'],
    'kullanici_unvan' => $_POST['kullanici_unvan'],
    'kullanici_il' => $_POST['kullanici_il'],
    'kullanici_ilce' => $_POST['kullanici_ilce'],
    'kullanici_adres' => $_POST['kullanici_adres'],
    'kullanici_durum' => $_POST['kullanici_durum'],
    'kullanici_yetki' => $_POST['kullanici_yetki'],
    'kullanici_id' => $_POST['kullanici_id'],
    ];
  $sql = "UPDATE kullanici SET kullanici_mail=:kullanici_mail, kullanici_adsoyad=:kullanici_adsoyad, kullanici_tel=:kullanici_tel, kullanici_password=:kullanici_password, kullanici_unvan=:kullanici_unvan, kullanici_il=:kullanici_il, kullanici_ilce=:kullanici_ilce, kullanici_adres=:kullanici_adres, kullanici_durum=:kullanici_durum, kullanici_yetki=:kullanici_yetki WHERE kullanici_id=:kullanici_id";
  $stmt= $db->prepare($sql);  
  $stmt->execute($data);
   
   if ($stmt) {
     $id = $data['kullanici_id'];
    
    header("Location:../production/kullanici-duzenle.php?kullanici_id=$id&durum=ok");
  }
  else {

    header("Location:../production/kullanici-duzenle.php?durum=no");
  }
   

}


if (isset($_POST['menuekle'])) {

  
  $seourl=seflink($_POST['menu_ad']);
   
  $data = [
    'menu_ad' => $_POST['menu_ad'],
    'menu_detay' => $_POST['menu_detay'],
    'menu_url' => $_POST['menu_url'],
    'menu_seourl' => $seourl,
    'menu_sira' => $_POST['menu_sira'],
    'menu_durum' => $_POST['menu_durum']
  ];
    
    
  $sql = "INSERT INTO menu SET menu_ad=:menu_ad, menu_detay=:menu_detay, menu_url=:menu_url, menu_seourl=:menu_seourl, menu_sira=:menu_sira, menu_durum=:menu_durum ";
  $stmt= $db->prepare($sql);  
  $stmt->execute($data);
   
   if ($stmt) {
    
    header("Location:../production/menu.php?durum=ok");
    
  }
  else {

    header("Location:../production/menu.php?durum=no");
    
  }

  
   

}


if (isset($_POST['menuduzenle'])) {

  
  $seourl=seflink($_POST['menu_ad']);
   
  $data = [
    'menu_ad' => $_POST['menu_ad'],
    'menu_detay' => $_POST['menu_detay'],
    'menu_url' => $_POST['menu_url'],
    'menu_seourl' => $seourl,
    'menu_sira' => $_POST['menu_sira'],
    'menu_durum' => $_POST['menu_durum'],
    'menu_id' => $_POST['menu_id']
    
    ];
  $sql = "UPDATE menu SET menu_ad=:menu_ad, menu_detay=:menu_detay, menu_url=:menu_url, menu_seourl=:menu_seourl, menu_sira=:menu_sira, menu_durum=:menu_durum WHERE menu_id=:menu_id";
  $stmt= $db->prepare($sql);  
  $stmt->execute($data);
   
   if ($stmt) {
     $id = $data['menu_id'];
    
    header("Location:../production/menu-duzenle.php?menu_id=$id&durum=ok");
    exit;
  }
  else {

    header("Location:../production/menu-duzenle.php?durum=no");
    exit;
  }

  exit;
   

}


if ($_GET['slidersil']=="ok") {


  $data = [
    
    'id' => $_GET['slider_id']
    ];
  $sql = "DELETE FROM slider where slider_id=:id";
  $stmt= $db->prepare($sql);  
  $stmt->execute($data);

  if ($stmt) {

    $resimsilunlink=$_GET['resimyol'];
		unlink("../../$resimsilunlink");
    
    header("Location:../production/slider.php?durum=ok");
  }
  else {

    header("Location:../production/slider.php?durum=no");
  }


}



if ($_GET['kullanicisil']=="ok") {


  $data = [
    
    'id' => $_GET['kullanici_id']
    ];
  $sql = "DELETE FROM kullanici where kullanici_id=:id";
  $stmt= $db->prepare($sql);  
  $stmt->execute($data);

  if ($stmt) {
    
    header("Location:../production/kullanici.php?durum=ok");
  }
  else {

    header("Location:../production/kullanici.php?durum=no");
  }


}

if ($_GET['menusil']=="ok") {


  $data = [
    
    'id' => $_GET['menu_id']
    ];
  $sql = "DELETE FROM menu where menu_id=:id";
  $stmt= $db->prepare($sql);  
  $stmt->execute($data);

  if ($stmt) {
    
    header("Location:../production/menu.php?durum=ok");
  }
  else {

    header("Location:../production/menu .php?durum=no");
  }


}
  

if (isset($_POST['logoduzenle'])) {

	

	$uploads_dir = '../../dimg';

	@$tmp_name = $_FILES['ayar_logo']["tmp_name"];
	@$name = $_FILES['ayar_logo']["name"];

	$benzersizsayi4=rand(20000,32000);
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizsayi4.$name;

	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizsayi4$name");

	
  $data = [
    'ayar_logo' => $refimgyol,
    'id' => 11
    ];
  $sql = "UPDATE ayar SET ayar_logo=:ayar_logo where ayar_id=:id";
  $stmt= $db->prepare($sql);  
  $stmt->execute($data);


	if ($stmt) {

		$resimsilunlink=$_POST['eski_yol'];
		unlink("../../$resimsilunlink");

		Header("Location:../production/genel-ayar.php?durum=ok");

	} else {

		Header("Location:../production/genel-ayar.php?durum=no");
	}

}


if (isset($_POST['sliderekle'])) {

  $uploads_dir = '../../dimg/slider';

	@$tmp_name = $_FILES['slider_resimyol']["tmp_name"];
	@$name = $_FILES['slider_resimyol']["name"];
  $benzersizsayi1=rand(20000,32000);
  $benzersizsayi2=rand(20000,32000);
  $benzersizsayi3=rand(20000,32000);
  $benzersizsayi4=rand(20000,32000);
  $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;

	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
  
   
  $data = [
    'slider_ad' => $_POST['slider_ad'],
    'slider_resimyol' => $refimgyol,
    'slider_sira' => $_POST['slider_sira'],
    'slider_link' => $_POST['slider_link'],
    'slider_durum' => $_POST['slider_durum']
    
  ];
    
    
  $sql = "INSERT INTO slider SET slider_ad=:slider_ad, slider_resimyol=:slider_resimyol, slider_sira=:slider_sira, slider_link=:slider_link, slider_durum=:slider_durum ";
  $stmt= $db->prepare($sql);  
  $stmt->execute($data);
   
   if ($stmt) {
    
    header("Location:../production/slider.php?durum=ok");
    
  }
  else {

    header("Location:../production/slider.php?durum=no");
    
  }

  
   

}

if (isset($_POST['sliderduzenle'])) {

  $uploads_dir = '../../dimg/slider';

	@$tmp_name = $_FILES['slider_resimyol']["tmp_name"];
	@$name = $_FILES['slider_resimyol']["name"];
  $benzersizsayi1=rand(20000,32000);
  $benzersizsayi2=rand(20000,32000);
  $benzersizsayi3=rand(20000,32000);
  $benzersizsayi4=rand(20000,32000);
  $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;

	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
  
   
  $data = [
    'slider_id' => $_POST['slider_id'],
    'slider_ad' => $_POST['slider_ad'],
    'slider_resimyol' => $refimgyol,
    'slider_sira' => $_POST['slider_sira'],
    'slider_link' => $_POST['slider_link'],
    'slider_durum' => $_POST['slider_durum']
    
  ];
    
    
  $sql = "UPDATE slider SET slider_ad=:slider_ad, slider_resimyol=:slider_resimyol, slider_sira=:slider_sira, slider_link=:slider_link, slider_durum=:slider_durum WHERE slider_id=:slider_id";
  $stmt= $db->prepare($sql);  
  $stmt->execute($data);
   
   if ($stmt) {

    $resimsilunlink=$_POST['eski_yol'];
		unlink("../../$resimsilunlink");
    
    header("Location:../production/slider.php?durum=ok");
    
  }
  else {

    header("Location:../production/slider.php?durum=no");
    
  }

  
   

}






?>