<?php


$gecici=$_POST['mail'];
$message = "Hoşgeldin $gecici --> Tamam tuşuna basınca ana sayfaya yönlendirileceksiniz...";

if(!($_POST['mail']==""))
{
    if($_POST['mail']=="b221210036@sakarya.edu.tr" )
    {
       
        if(!($_POST['sifre']=="221210036"))
        {
            echo "Şifre hatalı girilmiştir.";
            echo "<p><a href='Giris.html'>&lt;GERİ DÖN&gt;></a></p> ";
        }
        else{
            echo "<script type='text/javascript'>alert('$message');</script>";
            header("Refresh: 0.1; url=http://localhost//ayse_aktas_web_proje/Hakkinda.html"); 
            exit();
        }
    }
    else{
        echo "E-posta hatalı girilmiştir.";
        echo "<p> <a href='Giris.html'>&lt;GERİ DÖN&gt;</a></p> ";
    }
}else
{
    echo "E-posta ve şifre alanını doldurunuz.";
}

?>