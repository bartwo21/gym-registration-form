<?php
    include('baglan.php');


    function security($text){
        $text=trim($_POST[$text]);
        $text=stripslashes ($text) ;
        $text=htmlspecialchars ($text) ;
        return $text;
    }


    if ($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST['mysubmit'])) {
        $name=security("adsoyad");
        $gender=security("cinsiyet");
        $age=security("yas");
        $no=security("no");
        $membershipTime=security("uyeliksuresi");

        if (empty($name) or empty($gender) or empty($age) or empty($no) or empty($membershipTime)) {
            $messagee="Lütfen boş alan bırakmayın";
        }else{
            $adsoyad=$_POST["adsoyad"];
            $cinsiyet=$_POST["cinsiyet"];
            $yas=$_POST["yas"];
            $telno=$_POST["no"];
            $uyeliksuresi=$_POST["uyeliksuresi"];

                        


                        $ekle = "INSERT INTO user(user_name, user_gender, user_age, user_phone, user_membershipTime_month) VALUES ('".$adsoyad."','".$cinsiyet."','".$yas."','".$telno."','".$uyeliksuresi."')";
                        
                        if($conn->query($ekle)===TRUE){
                            
                            
                            header("Location:uye.php#customers");
                            
                           
                        }
                        else{
                            echo "<script>alert('Mesajınız Gönderilirken bir hata oluştu.')</script>
                            ";
                        }
        }
    }

    


?>