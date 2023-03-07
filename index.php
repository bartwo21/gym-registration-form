<!DOCTYPE html>
<?php
include('baglan.php');
?>
<html lang="en">

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

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Bar2 Gym</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Workout Planları</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Ödeme Yöntemleri</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Sıkça Sorulan Sorular</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Antrenör Kadromuz</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Bize Ulaşın</a>
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
            <div class="intro-text">
                
                <div class="intro-heading">Hoşgeldiniz</div>
                <a href="./uye.php" class="page-scroll btn btn-xl">Üyelik Formu Yollamak İçİn Tıklayın</a>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Workout Planları</h2>
                    <h3 class="section-subheading text-muted">Size en uygunu seçip bize bildirin ya da biz size seçelim.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa- fa-stack-1x fa-inverse"></i>
                    </span>
                    <?php
                                    $sec = "SELECT * FROM workout where workout_id=1";
                                    $sonuc = $conn->query($sec);
                                    if($sonuc->num_rows>0)
                                    {
                                        while ($cek=$sonuc->fetch_assoc()) {
                                            echo "
                                            <h4 class='service-heading'>".$cek['workout_name']."</h4>
                                            <p>".$cek['workout_plan']."</p>
                                            <p class='text-muted'>".$cek['workout_days']."</p>
                                            ";
                                            
                                        }
                                    }
                                    else
                                    {
                                        echo "Veritabanında kayıtlı hiçbir veri bulunamamıştır.";
                                    }
                                ?>
                    
                    
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa fa-stack-1x fa-inverse"></i>
                    </span>
                    <?php
                                    $sec = "SELECT * FROM workout where workout_id=2";
                                    $sonuc = $conn->query($sec);
                                    if($sonuc->num_rows>0)
                                    {
                                        while ($cek=$sonuc->fetch_assoc()) {
                                            echo "
                                            <h4 class='service-heading'>".$cek['workout_name']."</h4>
                                            <p>".$cek['workout_plan']."</p>
                                            <p class='text-muted'>".$cek['workout_days']."</p>
                                            ";
                                            
                                        }
                                    }
                                    else
                                    {
                                        echo "Veritabanında kayıtlı hiçbir veri bulunamamıştır.";
                                    }
                                ?>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa  fa-stack-1x fa-inverse"></i>
                    </span>
                    <?php
                                    $sec = "SELECT * FROM workout where workout_id=3";
                                    $sonuc = $conn->query($sec);
                                    if($sonuc->num_rows>0)
                                    {
                                        while ($cek=$sonuc->fetch_assoc()) {
                                            echo "
                                            <h4 class='service-heading'>".$cek['workout_name']."</h4>
                                            <p>".$cek['workout_plan']."</p>
                                            <p class='text-muted'>".$cek['workout_days']."</p>
                                            ";
                                            
                                        }
                                    }
                                    else
                                    {
                                        echo "Veritabanında kayıtlı hiçbir veri bulunamamıştır.";
                                    }
                                ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Ödeme Yöntemleri</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cc.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Kredi veya Banka kartı</h4>
                        
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/nakit.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Nakit</h4>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Sıkça Sorulan Sorular</h2>
                    <h3 class="section-subheading text-muted">Sıkça Sorulan Sorular</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/gymphoto55.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                <?php
                                    $sec = "SELECT * FROM faq where faq_id=0";
                                    $sonuc = $conn->query($sec);
                                    if($sonuc->num_rows>0)
                                    {
                                        while ($cek=$sonuc->fetch_assoc()) {
                                            echo "
                                            <h4>".$cek['faq_title']."</h4>
                                            <h6>".$cek['faq_description']."</h6>
                                            ";
                                            
                                        }
                                    }
                                    else
                                    {
                                        echo "Veritabanında kayıtlı hiçbir veri bulunamamıştır.";
                                    }
                                ?>
                                    
                                    
                                </div>
                                
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/gymphoto44.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                <?php
                                    $sec = "SELECT * FROM faq where faq_id=1";
                                    $sonuc = $conn->query($sec);
                                    if($sonuc->num_rows>0)
                                    {
                                        while ($cek=$sonuc->fetch_assoc()) {
                                            echo "
                                            <h4>".$cek['faq_title']."</h4>
                                            <h6>".$cek['faq_description']."</h6>
                                            ";
                                            
                                        }
                                    }
                                    else
                                    {
                                        echo "Veritabanında kayıtlı hiçbir veri bulunamamıştır.";
                                    }
                                ?>
                                </div>
                                
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/gymphoto33.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                <?php
                                    $sec = "SELECT * FROM faq where faq_id=2";
                                    $sonuc = $conn->query($sec);
                                    if($sonuc->num_rows>0)
                                    {
                                        while ($cek=$sonuc->fetch_assoc()) {
                                            echo "
                                            <h4>".$cek['faq_title']."</h4>
                                            <h6>".$cek['faq_description']."</h6>
                                            ";
                                            
                                        }
                                    }
                                    else
                                    {
                                        echo "Veritabanında kayıtlı hiçbir veri bulunamamıştır.";
                                    }
                                ?>
                                </div>
                                
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/gymphoto2.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                <?php
                                    $sec = "SELECT * FROM faq where faq_id=3";
                                    $sonuc = $conn->query($sec);
                                    if($sonuc->num_rows>0)
                                    {
                                        while ($cek=$sonuc->fetch_assoc()) {
                                            echo "
                                            <h4>".$cek['faq_title']."</h4>
                                            <h6>".$cek['faq_description']."</h6>
                                            ";
                                            
                                        }
                                    }
                                    else
                                    {
                                        echo "Veritabanında kayıtlı hiçbir veri bulunamamıştır.";
                                    }
                                ?>
                                </div>
                                
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Sen de
                                    <br>Bize
                                    <br>Katıl!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Kadromuzdaki bazı kişiler</h2>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/cbum1.png" class="img-responsive img-circle" alt="">
                        <?php
                            $sec = "SELECT * FROM trainer where trainer_id=1";
                            $sonuc = $conn->query($sec);
                            if($sonuc->num_rows>0)
                            {
                                while ($cek=$sonuc->fetch_assoc()) {
                                    echo "
                                    <h4 class='service-heading'>Ad Soyad: ".$cek['trainer_name']."</h4>
                                    <p>Yaş: ".$cek['trainer_age']."</p>
                                    <p class='text-muted'>Telefon no: ".$cek['trainer_phone']."</p>
                                    ";
                                            
                                }
                            }
                            else
                            {
                                echo "Veritabanında kayıtlı hiçbir veri bulunamamıştır.";
                            }
                        ?>
                        
                        
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/women1.jpg" class="img-responsive img-circle" alt="">
                        <?php
                            $sec = "SELECT * FROM trainer where trainer_id=2";
                            $sonuc = $conn->query($sec);
                            if($sonuc->num_rows>0)
                            {
                                while ($cek=$sonuc->fetch_assoc()) {
                                    echo "
                                    <h4 class='service-heading'>Ad Soyad: ".$cek['trainer_name']."</h4>
                                    <p>Yaş: ".$cek['trainer_age']."</p>
                                    <p class='text-muted'>Telefon no: ".$cek['trainer_phone']."</p>
                                    ";
                                            
                                }
                            }
                            else
                            {
                                echo "Veritabanında kayıtlı hiçbir veri bulunamamıştır.";
                            }
                        ?>
                        
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/egefitness1.png" class="img-responsive img-circle" alt="">
                        <?php
                            $sec = "SELECT * FROM trainer where trainer_id=3";
                            $sonuc = $conn->query($sec);
                            if($sonuc->num_rows>0)
                            {
                                while ($cek=$sonuc->fetch_assoc()) {
                                    echo "
                                    <h4 class='service-heading'>Ad Soyad: ".$cek['trainer_name']."</h4>
                                    <p>Yaş: ".$cek['trainer_age']."</p>
                                    <p class='text-muted'>Telefon no: ".$cek['trainer_phone']."</p>
                                    ";
                                            
                                }
                            }
                            else
                            {
                                echo "Veritabanında kayıtlı hiçbir veri bulunamamıştır.";
                            }
                        ?>
                        
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
          
        </div>
    </section>

    <!-- Clients Aside -->
    

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Bize Ulaşın</h2>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Ad Soyad *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Telefon Numarası *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Mesajınız *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Mesaj Gönder</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; <a href="https://www.free-css.com/free-css-templates/page235/agency" target="_blank">Orjinal Template</a></span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="https://www.linkedin.com/in/bartu-%C3%A7ak%C4%B1r-98021b216/" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </li>
                        
                    </ul>
          
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="121620201020.pdf" target="_blank">Proje Raporu</a>
                        </li>
                        <li><a href="#"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Kredi veya Banka Kartı</h2>
                                <p class="item-intro text-muted">Ödemenizi salonumuza gelerek rahatça yapabilirsiniz.</p>

                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>Pencereyi Kapat</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Nakit</h2>
                                <p class="item-intro text-muted">Ödemenizi salonumuza gelerek rahatça yapabilirsiniz.</p>

                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>Pencereyi Kapat</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

</body>

</html>
