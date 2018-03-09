<!DOCTYPE html>
<html>
<?php
    require "assets/pdo/Database.php";
    require "assets/pdo/Gallery.php";

?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web_001</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Mockup-MacBook-Pro.css">
    <link rel="stylesheet" href="assets/css/Mockup-iPhone-6.css">
    <link rel="stylesheet" href="assets/css/Hero-Technology.css">
    <link rel="stylesheet" href="assets/css/Pretty-Header.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.min.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/developers.css">
    <link rel="stylesheet" href="assets/css/gallery.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
    <link rel="stylesheet" href="assets/css/administrator.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="assets/css/donation.css">
    <link rel="stylesheet" href="assets/css/form.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Fredericka+the+Great|Macondo|Righteous|Shrikhand">
</head>

<body>
    <?php include "navbar.php" ?>
    <div class="container">
        <div class="page-header">
            <h1>Gallery <small>see it all</small></h1></div>
        <div id="gallery">
            <div class="row set">
                <?php
                    $db = new Database();
                    $dbh = $db->getConnection();
                    
                    $gallery = new Gallery($dbh);
                    $result = $gallery->getDetails();
    
                    foreach($result as $row => $key){
                        $title = $key['title'];
                        $src = $key['src'];


                        
                        
                        print("
                            <div class='col-md-3 col-sm-4 col-xs-4'>
                                <div class='img-limit'>
                                    <a href='$src' data-lightbox='gallery' data-title='$title'><img class='img-responsive' src='$src'></a>
                                </div>
                            </div>
                        ");
                    }
    
                ?>
                

            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 footer-navigation">
                    <h3><a href="#">U<span>GAMES </span></a></h3>
                    <ol class="breadcrumb">
                        <li><a><span>Home</span></a></li>
                        <li><a><span>Projects </span></a></li>
                        <li><a><span>Download </span></a></li>
                        <li><a><span>About </span></a></li>
                        <li><a><span>Developers </span></a></li>
                        <li><a><span>Donate </span></a></li>
                        <li><a><span>Gallery </span></a></li>
                    </ol><a href="#">Login (For admin only)</a>
                    <p class="company-name">UGAMES © 2018 </p>
                </div>
                <div class="col-md-4 col-sm-6 footer-contacts">
                    <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                        <p><span class="new-line-span">21 Revolution Street</span> Paris, France</p>
                    </div>
                    <div><i class="fa fa-phone footer-contacts-icon"></i>
                        <p class="footer-center-info email text-left"> +1 555 123456</p>
                    </div>
                    <div><i class="fa fa-envelope footer-contacts-icon"></i>
                        <p> <a href="#" target="_blank">yanganoah404@gmail.com</a></p>
                    </div>
                </div>
                <div class="clearfix visible-sm-block"></div>
                <div class="col-md-4 footer-about">
                    <h4>About the company</h4>
                    <p> Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
                    </p>
                    <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a></div>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js "></script>
    <script src="assets/js/DataTable.js"></script>
</body>

</html>