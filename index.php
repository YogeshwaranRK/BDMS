<?php
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>VCET BDMS</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/modern-business.css" rel="stylesheet">
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
        display: block;
    }
    </style>

</head>

<body>

    <!-- Navigation -->
<?php include('includes/header.php');?>
<?php include('includes/slider.php');?>
   
    <!-- Page Content -->
    <div class=" pt-5 container">

<div class="section-heading  title-style4 border-bottom padding-25px-bottom sm-padding-15px-bottom">
    <h3><span style="color:#c22323">BLOOD </span> DONATION</h3>
    <p class="width-55 sm-width-75 xs-width-95">The reason to donate is simple…it helps save lives. In fact, every two seconds of every day, someone needs blood. Since blood cannot be manufactured outside the body and has a limited shelf life, the supply must constantly be replenished by generous blood donors.</p>
</div>

<div class="row mt-60">
    <div class="col-lg-4 col-md-6 margin-30px-bottom xs-margin-20px-bottom">
        <div class="service-block4 h-100">
            <div class="service-icon">
                <i class="icon-tools"></i>
            </div>
            <div class="service-desc">
                <h4>Why to donate</h4>
                <h5>Blood</h5>
                <p>Regular blood donation is linked to lower blood pressure and a lower risk for heart attacks. “It definitely helps to reduce cardiovascular risk factors</p>
            </div>

        </div>
    </div>
    <div class="col-lg-4 col-md-6 margin-30px-bottom xs-margin-20px-bottom">
        <div class="service-block4 h-100">
            <div class="service-icon">
                <i class="icon-layers"></i>
            </div>
            <div class="service-desc">
                <h4>Guidelines for donating</h4>
                <h5>Blood</h5>
                <p> Be in good general health and feeling well. · Be at least 17 years old </p>
            </div>

        </div>
    </div>
    <div class="col-lg-4 col-md-6 margin-30px-bottom xs-margin-20px-bottom">
        <div class="service-block4 h-100">
            <div class="service-icon">
                <i class="icon-hotairballoon"></i>
            </div>
            <div class="service-desc">
                <h4>Tips to donate </h4>
                <h5>Blood</h5>
                <p>Eat something light before donating blood and hydrate yourself as it helps you to avoid weakness.Avoid drinking alcohol the day prior to blood donation.
</p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 sm-margin-30px-bottom xs-margin-20px-bottom">
        <div class="service-block4 h-100">
            <div class="service-icon">
                <i class="icon-mobile"></i>
            </div>
            <div class="service-desc">
                <h4>How to donate</h4>
                <h5>Blood</h5>
                <p>Medical Check up (5 Mins) Donors Medical History & life style is asked, check up of temperature, blood pressure, pulse and haemoglobin.</p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 xs-margin-20px-bottom">
        <div class="service-block4 h-100">
            <div class="service-icon">
                <i class="icon-presentation"></i>
            </div>
            <div class="service-desc">
                <h4>Blood Camps for donating</h4>
                <h5>Blood</h5>
                <p>The purpose to organize a blood donation camp is to motivate people to donate blood and social works</p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-xs-12">
        <div class="service-block4 h-100">
            <div class="service-icon">
                <i class="icon-genius"></i>
            </div>
            <div class="service-desc">
                <h4>Who recieves your</h4>
                <h5>Blood</h5>
                <p>The people who can benefit from your donated blood are: Patients suffering from severe blood loss. Leukemia patients. Hemophilia patients.</p>
            </div>
        </div>
    </div>
</div>
</div>
<style>
    .container{margin-top:20px;}

.service-block4 {
    position: relative;
    border: 1px solid #f7f7f7;
    background: #fff;
    box-shadow: 0px 10px 30px 0px rgba(50, 50, 50, 0.16);
    border-radius: 5px;
    overflow: hidden;
    padding: 30px
}

.service-block4:before {
    position: absolute;
    top: -42px;
    right: -100px;
    z-index: 0;
    content: " ";
    width: 250px;
    height: 120px;
    background: #f7f7f7;
    border-bottom-left-radius: 0;
    transition: all 0.4s ease-in-out;
    transform: rotate(45deg);
    -moz-transition: all 0.4s ease-in-out;
    -ms-transition: all 0.4s ease-in-out;
    -webkit-transition: all 0.4s ease-in-out;
    -o-transition: all 0.4s ease-in-out
}

.service-block4:hover:before {
    background: #c22323
}

.service-block4 .service-icon {
    position: absolute;
    top: 18px;
    right: 18px;
    z-index: 1;
    text-align: center
}

.service-block4 i {
    color: #c22323;
    font-size: 38px;
    line-height: normal;
    transition: all 0.4s ease-in-out;
    -moz-transition: all 0.4s ease-in-out;
    -ms-transition: all 0.4s ease-in-out;
    -webkit-transition: all 0.4s ease-in-out;
    -o-transition: all 0.4s ease-in-out;
    margin-bottom: 0
}

.service-block4:hover i {
    color: #fff
}

.service-block4 .service-desc {
    position: relative
}

.service-block4 .service-desc h4 {
    margin-bottom: 8px;
    font-size: 18px;
    font-weight: 600
}

.service-block4 .service-desc h5 {
    margin-bottom: 5px;
    font-size: 12px;
    font-weight: 500
}

.service-block4 .service-desc h5:after {
    content: '';
    display: block;
    width: 80px;
    height: 2px;
    background: #c22323;
    margin-top: 10px;
    margin-bottom: 15px;
    -moz-transition-duration: .4s;
    -ms-transition-duration: .4s;
    -webkit-transition-duration: .4s;
    -o-transition-duration: .4s;
    transition-duration: .4s
}

.service-block4 p {
    margin-top: 25px;
    padding-right: 50px;
    margin-bottom: 0
}

@media screen and (max-width: 1199px) {
    .service-block4:before {
        right: -110px
    }
    .service-block4 .service-desc h4 {
        font-size: 16px;
        margin-bottom: 5px
    }
    .service-block4 p {
        padding-right: 40px;
        margin-top: 20px
    }
    .service-block4 i {
        font-size: 34px
    }
}

@media screen and (max-width: 991px) {
    .service-block4 {
        padding: 25px
    }
    .service-block4 .service-desc h4 {
        font-size: 15px
    }
    .service-block4 i {
        font-size: 32px
    }
    .service-block4 p {
        margin-top: 15px;
        padding-right: 30px
    }
}

@media screen and (max-width: 767px) {
    .service-block4 {
        padding: 20px
    }
    .service-block4:before {
        right: -130px
    }
    .service-block4 i {
        font-size: 28px
    }
    .service-block4 .service-icon {
        top: 13px;
        right: 12px
    }
}

.margin-30px-bottom {
    margin-bottom: 30px;
}
</style>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <div class="pt-5 container">
      
        <div class="row justify-content-center">
          <div class="col-12 col-sm-8 col-lg-6">
            <!-- Section Heading-->
            <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
              <h3>Our Best <span> Donors</span></h3>
              <p>The mentioned peoples have donated blood more than 10 times &amp; They are real superheroes</p>
              <div class="line"></div>
            </div>
          </div>
        </div>
        <div class="row don">
            
                   <?php 
$status=1;
$sql = "SELECT * from tblblooddonars where status=:status order by rand() limit 4";
$query = $dbh -> prepare($sql);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>

           
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css" integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />

<div class="container bootdey">
        

        <div class="row">
            <div class="mt-4 pt-2">
                <div class="team text-center rounded p-3 py-4">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="img-fluid avatar avatar-medium shadow rounded-pill" alt="">
                    <div class="content mt-3">
                        <h4 class="title mb-0"><?php echo htmlentities($result->FullName);?></h4>
                        <small class="text-muted"><?php echo htmlentities($result->BloodGroup);?></small>
                        <ul class="list-unstyled mt-3 social-icon social mb-0">
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-facebook" title="Facebook"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-instagram" title="Instagram"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-twitter" title="Twitter"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-google-plus" title="Google +"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-linkedin" title="Linkedin"></i></a></li>
                        </ul><!--end icon-->
                    </div>
                </div>
            </div><!--end col-->
            
          </div><!--end row-->
    </div>

    <style>
        .container{margin-top:20px;}
        .don{display:flex;flex-direction:row;flex-wrap:nowrap;}

.team-list img {
  width: 50%;
}

.team-list .content {
  width: 50%;
}

.team-list .content .follow {
  position: absolute;
  bottom: 24px;
}

.team-list:hover {
  -webkit-transform: scale(1.05);
          transform: scale(1.05);
}

.team, .team-list {
  -webkit-transition: all 0.5s cubic-bezier(0.68, -0.55, 0.27, 1.55) 0s;
  transition: all 0.5s cubic-bezier(0.68, -0.55, 0.27, 1.55) 0s;
}

.team .content .title, .team-list .content .title {
  font-size: 18px;
}

.team .overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  opacity: 0;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

.team .member-position, .team .team-social {
  position: absolute;
  bottom: -35px;
  right: 0;
  left: 0;
  margin: auto 10%;
  z-index: 99;
}

.team .team-social {
  bottom: 40px;
  opacity: 0;
  -webkit-transition: all 0.5s cubic-bezier(0.68, -0.55, 0.27, 1.55) 0s;
  transition: all 0.5s cubic-bezier(0.68, -0.55, 0.27, 1.55) 0s;
}

.team:hover {
  -webkit-transform: translateY(-7px);
          transform: translateY(-7px);
  -webkit-box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
          box-shadow: 0 0 105px rgba(0, 0, 0, 0.15);
}

.team:hover .overlay {
  opacity: 0.6;
}

.team:hover .team-social {
  opacity: 1;
}

@media (max-width: 768px) {
  .team-list img,
  .team-list .content {
    width: 100%;
    float: none !important;
  }
  .team-list img .follow,
  .team-list .content .follow {
    position: relative;
    bottom: 0;
  }
}

.social-icon.social li a {
    color: #adb5bd;
    border-color: #adb5bd;
}
.social-icon li a {
    color: #35404e;
    border: 1px solid #35404e;
    display: inline-block;
    height: 32px;
    text-align: center;
    font-size: 15px;
    width: 32px;
    line-height: 30px;
    -webkit-transition: all 0.4s ease;
    transition: all 0.4s ease;
    overflow: hidden;
    position: relative;
}
.rounded {
    border-radius: 5px !important;
}

.para-desc {
    max-width: 600px;
}
.text-muted {
    color: #8492a6 !important;
}

.section-title .title {
    letter-spacing: 0.5px;
    font-size: 30px;
}
    </style>
      
            <?php }} ?>
          
 



        </div>
        </div>
        <!-- /.row -->
        <div class="pt-5 container bootstrap snippets bootdeys">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-8 col-lg-6">
            <!-- Section Heading-->
            <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
              <h3>Common <span style="color:red;">Blood</span> groups</h3>
              <p>Most common blood types &amp; with their des</p>
              <div class="line"></div>
            </div>
          </div>
        </div>
<div class="row">
    <div class="col-md-4 col-sm-6 content-card">
        <div class="card-big-shadow">
            <div class="card card-just-text" data-background="color" data-color="blue" data-radius="none">
                <div class="content">
                    <h6 class="category">O+</h6>
                    <h4 class="title"><a href="#">O POSITIVE</a></h4>
                    <p class="description">Is one of the most common and, consequently, most transfused blood types — 30% of the world population has type O+ Can give blood products to all Rh+ types (A+, B+, O+ and AB+) and receive all O types. </p>
                </div>
            </div> <!-- end card -->
        </div>
    </div>
    
    <div class="col-md-4 col-sm-6 content-card">
        <div class="card-big-shadow">
            <div class="card card-just-text" data-background="color" data-color="green" data-radius="none">
                <div class="content">
                    <h6 class="category">O-</h6>
                    <h4 class="title"><a href="#">O NEGATIVE</a></h4>
                    <p class="description">Is one of the rarest blood types — only 5% of the world population has type O- Is a universal donor, meaning anyone can receive type O- blood products Is an ideal whole blood or double red blood cell donor. </p>
                </div>
            </div> <!-- end card -->
        </div>
    </div>
    
    <div class="col-md-4 col-sm-6 content-card">
        <div class="card-big-shadow">
            <div class="card card-just-text" data-background="color" data-color="yellow" data-radius="none">
                <div class="content">
                    <h6 class="category">B+</h6>
                    <h4 class="title"><a href="#">B POSTIVE</a></h4>
                    <p class="description">Is one of the rarest blood types — only 8.5% of the world population has type B+ Can give blood products to types B+ and AB+, and receive all B. </p>
                </div>
            </div> <!-- end card -->
        </div>
    </div>
    
    <div class="col-md-4 col-sm-6 content-card">
        <div class="card-big-shadow">
            <div class="card card-just-text" data-background="color" data-color="brown" data-radius="none">
                <div class="content">
                    <h6 class="category">B-</h6>
                    <h4 class="title"><a href="#">B NEGATIVE</a></h4>
                    <p class="description">Is one of the rarest blood types — only 1.5% of the world population has type B- Can give blood products to all B and AB types and receive types O- and B- Is an ideal whole blood. </p>
                </div>
            </div> <!-- end card -->
        </div>
    </div>
    
    <div class="col-md-4 col-sm-6 content-card">
        <div class="card-big-shadow">
            <div class="card card-just-text" data-background="color" data-color="purple" data-radius="none">
                <div class="content">
                    <h6 class="category">AB-</h6>
                    <h4 class="title"><a href="#">AB NEGATIVE</a></h4>
                    <p class="description"> 
Is the rarest blood type — only 0.6% of the world population has type AB- Is a universal plasma donor, meaning anyone can receive AB- plasma Is an ideal whole blood. </p>
                </div>
            </div> <!-- end card -->
        </div>
    </div>
    
    <div class="col-md-4 col-sm-6 content-card">
        <div class="card-big-shadow">
            <div class="card card-just-text" data-background="color" data-color="orange" data-radius="none">
                <div class="content">
                    <h6 class="category">AB+</h6>
                    <h4 class="title"><a href="#">AB POSITIVE</a></h4>
                    <p class="description">Is one of the rarest blood types — only 3.4% of the world population has type AB+ Is a universal recipient, meaning you can receive blood products of any blood type Is a universal plasma donor. </p>
                </div>
            </div> <!-- end card -->
        </div>
    </div>
</div>
</div>
<style>
    body{margin-top:20px;}

.card-big-shadow {
    max-width: 320px;
    position: relative;
}

.coloured-cards .card {
    margin-top: 30px;
}

.card[data-radius="none"] {
    border-radius: 0px;
}
.card {
    border-radius: 8px;
    box-shadow: 0 2px 2px rgba(204, 197, 185, 0.5);
    background-color: #FFFFFF;
    color: #252422;
    margin-bottom: 20px;
    position: relative;
    z-index: 1;
}


.card[data-background="image"] .title, .card[data-background="image"] .stats, .card[data-background="image"] .category, .card[data-background="image"] .description, .card[data-background="image"] .content, .card[data-background="image"] .card-footer, .card[data-background="image"] small, .card[data-background="image"] .content a, .card[data-background="color"] .title, .card[data-background="color"] .stats, .card[data-background="color"] .category, .card[data-background="color"] .description, .card[data-background="color"] .content, .card[data-background="color"] .card-footer, .card[data-background="color"] small, .card[data-background="color"] .content a {
    color: #FFFFFF;
}
.card.card-just-text .content {
    padding: 50px 65px;
    text-align: center;
}
.card .content {
    padding: 20px 20px 10px 20px;
}
.card[data-color="blue"] .category {
    color: #7a9e9f;
}

.card .category, .card .label {
    font-size: 14px;
    margin-bottom: 0px;
}
.card-big-shadow:before {
    background-image: url("http://static.tumblr.com/i21wc39/coTmrkw40/shadow.png");
    background-position: center bottom;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    bottom: -12%;
    content: "";
    display: block;
    left: -12%;
    position: absolute;
    right: 0;
    top: 0;
    z-index: 0;
}
h4, .h4 {
    font-size: 1.5em;
    font-weight: 600;
    line-height: 1.2em;
}
h6, .h6 {
    font-size: 0.9em;
    font-weight: 600;
    text-transform: uppercase;
}
.card .description {
    font-size: 16px;
    color: #66615b;
}
.content-card{
    margin-top:30px;    
}
a:hover, a:focus {
    text-decoration: none;
}

/*======== COLORS ===========*/
.card[data-color="blue"] {
    background: #b8d8d8;
}
.card[data-color="blue"] .description {
    color: #506568;
}

.card[data-color="green"] {
    background: #d5e5a3;
}
.card[data-color="green"] .description {
    color: #60773d;
}
.card[data-color="green"] .category {
    color: #92ac56;
}

.card[data-color="yellow"] {
    background: #ffe28c;
}
.card[data-color="yellow"] .description {
    color: #b25825;
}
.card[data-color="yellow"] .category {
    color: #d88715;
}

.card[data-color="brown"] {
    background: #d6c1ab;
}
.card[data-color="brown"] .description {
    color: #75442e;
}
.card[data-color="brown"] .category {
    color: #a47e65;
}

.card[data-color="purple"] {
    background: #baa9ba;
}
.card[data-color="purple"] .description {
    color: #3a283d;
}
.card[data-color="purple"] .category {
    color: #5a283d;
}

.card[data-color="orange"] {
    background: #ff8f5e;
}
.card[data-color="orange"] .description {
    color: #772510;
}
.card[data-color="orange"] .category {
    color: #e95e37;
}
</style>
        <!-- Features Section -->

    
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="container">
        <div class="row mb-4">
            <div class="col-md-8">
            <h4>UNIVERSAL DONORS AND RECIPIENTS</h4>
                <p>
The most common blood type is O, followed by type A.

Type O individuals are often called "universal donors" since their blood can be transfused into persons with any blood type. Those with type AB blood are called "universal recipients" because they can receive blood of any type.</p>
            </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-secondary btn-block" href="become-donar.php">Become a Donar</a>
            </div>
        </div>

    </div>
</div>
    <!-- /.container -->

    <!-- Footer -->
  <?php include('includes/footer.php');?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
