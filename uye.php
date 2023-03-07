<!DOCTYPE html>
<html lang="en">
<?php
include('baglan.php');
?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bar2 Gym</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->

</head>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container2 {
  padding: 16px;
  background-color: transparent;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  color: black;
  padding: 8px;
  margin: 2px 0 12px 0;
  display: inline-block;
  border: 1px solid grey;
  background: #B5B0AD;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid black;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #F1C503;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 1;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  border: 1px solid #000;
  width: 100%;
}

#customers td, #customers th {
  
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #6D6E69;}

#customers tr:hover {opacity: 85%;}

#customers th {
    border: 1px solid #000;
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #111015;
  color: white;
}
#customers td{
    border: 1px solid #000;
    color: #FEC503;
}
label{
    color: #F1C503;
}
.container2 h1{
    color: #F1C503;
}
</style>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="index.php">Bar2 Gym</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    
                    
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
    <div class="container">

<form id="myForm" action="action.php" method="POST">
    <div class="container2">
        <h1>Kayıt Formu</h1>
        <p>Kayıt isteği oluşturmak için lütfen formu doldurunuz.</p>
        <hr>

        <label for="name"><b>Ad Soyad</b></label>
        <input type="text" id="adsoyad" name="adsoyad" required><br><br>

        <label for="gender"><b>Cinsiyet</b></label>
        <input type="text" id="cinsiyet" name="cinsiyet" required><br><br>

        <label for="age"><b>Yaş</b></label>
        <input type="text" id="yas" name="yas" required><br><br>

        <label for="no"><b>Telefon Numarası</b></label>
        <input type="text" id="no" name="no" required><br><br>

        <label for="membershipTime"><b>Üyelik Süresi (Ay Olarak)</b></label>
        <input type="text" id="uyeliksuresi" name="uyeliksuresi" required><br><br>


        <hr>
    
        <button name="mysubmit" type="submit" class="registerbtn">Kayıt Ol</button>


    </div>


</form>          
    
</div>
</header>
        
        <section id="portfolio" class="bg-secondary">
        

            <div class="container">
                <div class="intro-text">
                    <table id="customers">
                        <tr>
                            <th>Ad Soyad</th>
                            <th>Cinsiyet</th>
                            <th>Yaş</th>
                            <th>Telefon No</th>
                            <th>Üyelik Süresi (Ay)</th>
                        </tr>
                        

                        <?php
                            $sec = "SELECT * FROM user";
                            $sonuc = $conn->query($sec);
                            if($sonuc->num_rows>0)
                            {
                                while ($cek=$sonuc->fetch_assoc()) {
                                    echo "
                                    <tr>
                                        <td>".$cek['user_name']."</td>
                                        <td>".$cek['user_gender']."</td>
                                        <td>".$cek['user_age']."</td>
                                        <td>".$cek['user_phone']."</td>
                                        <td>".$cek['user_membershipTime_month']."</td>
                                    </tr>
                                    ";
                                }
                            }
                            else
                            {
                                echo "Veritabanında kayıtlı hiçbir veri bulunamamıştır.";
                            }

                        ?>
                    </table>
                </div>
            </div>
        </section>
        
    



    
   
        
</body>