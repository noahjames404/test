

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/logo.png" type="image/x-icon" />
    <title>UGAMES</title>
    <meta property="og:url"                content="http://ugames.cf/" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="Philly: The fragments of time" />
    <meta property="og:description"        content="Phily, the protagonist of the game, is an average office worker from Manila, who was abducted by a mysterious man from the future who needed help to save the timeline of the Philippines. Phily must go back in time to collect the parts the machine that will save the Philippines. The fate of the Philippines is in the hands of Phily." />
    <meta property="og:image"              content="assets/img/logo.png" />
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
    
    <style>
        .introduction {
            font-size:20px;
            margin-bottom:100px;
        }
        
        .introduction p {
            font-size:25px;
        }
        
        .title {
            text-align: center;
        }
        
        .title h1 {
            font-size :80px;
            text-shadow: 0px 0px 10px #903;
            animation:sparks 5s linear infinite;
/*            opacity: 0;*/
            animation:show 3s linear;
        }
        
        @keyframes sparks {
            0%{text-shadow: 0px 0px 20px #903;}
            25%{text-shadow: 0px 0px 40px #903;}
            50%{text-shadow: 0px 0px 20px #309;}
            75%{text-shadow: 0px 0px 40px #309;}
            100%{text-shadow: 0px 0px 20px #903;}
        }
        
        @keyframes show {
            0%{opacity: 0;}
            100%{opacity: 1;}
        }
        
        .contact-us-box {

            background:#e67e22;
            border-radius: 5px;
        }
        
        .contact-us-box p {
            margin:10px;
            color:#fff;
            padding:10px;
            
        }
        
        
        .send-message {
            width: 100%;
            margin-top:10px;
        }
        
        #send_email input {
            margin-bottom: 10px;
        }
        
        .contact-us textarea {
            height: 200px;
        }
        
        .error {
            color:darkorange;
        }
        
        #project p {
                height: 130px;
            }
        
        @media (max-width:767px) {
            #project p {
                height: 100px;
                
            }
         
            #introduction p{
                font-size:14px;
            }
            
            #introduction h1 {
                font-size:25px;
            }
            
            #main-title {
                font-size:25px;
            }
            
            #googlemap {
                width: 400px;
                height: 300px;
            }
            
            
        }

        
        
    </style>
</head>

<body>
    <?php 
        @session_start();
        if(isset($_SESSION['user'])){
            include "private_navbar.php";
        }
        else {
            include "navbar.php";
        }
    
    
    ?>
    
    <div class="jumbotron hero-technology">
        <h1 class="text-primary hero-title text-devine"> <span class="text-danger">U</span>GAMES</h1>
        <p class="hero-subtitle text-devine">UGames aims to become the 1st Game Company to develop a game which features Philippine History.</p>
        <p><a class="btn btn-info btn-lg hero-button" role="button" href="#story">Learn more</a></p>
    </div>
    <div class='container title '>
        <h1 class=' text-mystic' id='main-title'>Phily The Fragments of Time</h1>
    </div>
    <div class="container-fluid" id="story">
        
        <div class="jumbotron">
            <h1 class="text-devine"><img src="assets/img/Game Icon.png" id="game_icon">Story </h1>
            <p>Phily, the protagonist of the game, is an average office worker from Manila, who was abducted by a mysterious man from the future who needed help to save the timeline of the Philippines. Phily must go back in time to collect the parts the machine that will save the Philippines. The fate of the Philippines is in the hands of Phily.    &nbsp;&nbsp; </p>

        </div>
    </div>
    <div class="container">
        
        <div class='text-justify introduction' id='introduction'>
        <h1 class='text-old'>Introduction</h1>
        <p>
            In today’s generation, video games are a common thing. Countless numbers of games, regardless of it being successful or not, are being developed and released to the public almost every month. Despite this, the proponents noticed that games are often educational in the form of puzzle games, logical games, and reflex-based game, and a few had there been a mobile educational game in a form of historical, such as <a href='https://www.ubisoft.com/en-us/game/assassins-creed/' target='_blank'> ©Ubisoft's Assassin's Creed™ </a> series. With that in mind, our team also observed that junior high school students tend to lose interest in learning the history of the Philippines, but at the same time at the same time, this is the age where they usually understand, and learn quicker. The team agreed to create a game that would catch the interest of gamers, as well as showcase the history of the Philippines by implementing it in the storyline, as well as the gameplay of the game itself. 
        </p>
        </div>
        <div id="project">
            <h1 class="text-old">Game Difficulty</h1>
            <div class="row" id="projects">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 item">
                    <a href="assets/img/prologue.png" class="project-img" data-lightbox="projects-set" data-title="title here"><img class="img-responsive" src="assets/img/prologue.png"></a>
                    <div class="info">
                        <h3 class="text-mystic">Prologue </h3>
                        <p>Phily The Fragments of Time teaches us to value everything in the present, which we will not be hunted by the past just to save our future. </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 item">
                    <a href="assets/img/Native_Idle.png" class="project-img" data-lightbox="projects-set" data-title="title here"><img class="img-responsive" src="assets/img/Native_Idle.png"></a>
                    <div class="info">
                        <h3 class="text-mystic">Native Era</h3>
                        <p>This Era represents the time of the Datus. Including Ferdinand Magellan and his adventures.  </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 item">
                    <a href="assets/img/Spanish_Idle.png" class="project-img" data-lightbox="projects-set" data-title="title here"><img class="img-responsive" src="assets/img/Spanish_Idle.png"></a>
                    <div class="info">
                        <h3 class="text-mystic">Spanish Era</h3>
                        <p> The history of the Philippines from 1521 to 1898, also known as the Spanish Colonial Period</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 item">
                    <a href="assets/img/WW2_Idle.png" class="project-img" data-lightbox="projects-set" data-title="title here"><img class="img-responsive" src="assets/img/WW2_Idle.png"></a>
                    <div class="info">
                        <h3 class="text-mystic">WWII </h3>
                        <p>The Commonwealth of the Philippines was attacked by the Empire of Japan on 8 December 1941 nine hours after the attack on Pearl Harbor</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="preview">
        <div class="row">
            <div class="col-md-6">
                <div class="iphone-mockup"><img src="assets/img/Android1.png" class="device">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/0wAUb_XU7gE"></iframe>
                    </div>
                </div>
                <div id="phone-alt">
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/0wAUb_XU7gE"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h1 class="text-devine">Travel the <span class="text-danger">past </span> to save the <span class="text-info">future </span></h1>
                <p>Phily The Fragments of Time teaches us to value everything in the present, which we will not be hunted by the past just to save our future. </p>
            </div>
        </div>
    </div>
    
    <div class="container" id="download">
        <h1 class="text-devine">Download Now</h1>
        <div class="row">
            <div class="col-md-12" id="btn_downloads">
                <p><span class="btn-group"><button class="btn btn-warning btn-lg" id='btn_support' type="button">Support Us</button><button class="btn btn-success btn-lg" type="button">Get It Free</button></span></p>
                <h2 class="text-center">OR </h2>
                <p><img src="assets/img/google_play.png" id="play_store"></p>
            </div>
        </div>
        <div id='contact_us' class='row '>
                    <h1 class='text-center text-devine'>Send us your Feedback</h1>
            <div class='col-sm-5'>
                 <div class='contact-us-box'>
                     <p>We can improve our game by giving us feedbacks or suggestions</p>
                 </div>
                <form class='contact-us' id='send_email'>
                    <p class='form-group' class='row'>
                        <span class='col-sm-5'>
                            <label>Name</label>
                        </span>
                        <span class='col-sm-7'>
                            <input class='form-control' name='name' placeholder="Your name" required>
                        </span>
                        
                    </p>
               
             
                    
                    <p class='form-group' class='row'>
                        <span class='col-sm-5'>
                            <label>Email</label>
                        </span>
                        <span class='col-sm-7'>
                            <input class='form-control' name='email' placeholder="Your email" type='email'  required>
                        </span>
                        
                    </p>
               
                    <p class='form-group' class='row'>
                        <span class='col-sm-5'>
                            <label>Subject</label>
                        </span>
                        <span class='col-sm-7'>
                            <input class='form-control' name='subject' placeholder="Subject of feedback" type='text'  required>
                        </span>
                        
                    </p>
              
                    
                    <p class='form-group' class='row'>
                        <span class='col-sm-5'>
                            <label>Message</label>
                        </span>
                        <span class='col-sm-7'>
                            <textarea name='content' class='form-control' placeholder="Enter your feedback or suggestion" required></textarea>
                            <button class='btn btn-primary send-message'>Send Feedback</button>
                        </span>
                        
                    </p>
                </form>
                
            </div>
            <div class='col-sm-7 '>
                <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.294634909946!2d121.12383351408427!3d14.582279781436547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c7867829fe41%3A0x910ca6046c2a1a2f!2sSTI+Academic+Center%2C+Ortigas+Cainta!5e0!3m2!1sen!2sph!4v1519052021238" width="600" height="450" frameborder="0" style="border:0" allowfullscreen id='googlemap'></iframe>
                
            </div>
        </div>
        
        
    </div>
    
    <?php include "footer.php" ?>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <script  src="assets/js/index.js?random=<?php echo rand() ?>"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>
    <script>
                    $("#send_email").validate({
                       rules:{
                           content:{
                               required:true,
                               minlength:20,
                               maxlength:255
                           }
                       },
                       message:{
                           
                           
                       },
                       submitHandler: function(form){
                           try{
                               $.ajax({
                                   cache:false,
                                   type:"POST",
                                   data:$(form).serialize(),
                                   url:"sendFeedback.php",
                                   success:function(val){
                                       if(val.trim() == "limit"){
                                           console.log("Fail to send message please try again");
                                           alert("You already sent a feedback");
                                           $("#send_email")[0].reset();
                                       }
                                       else if(val){
                                           console.log("Fail to send message please try again");
                                           alert("Something went wrong, please try again later");
                                           $("#send_email")[0].reset();
                                        
                                       }
                                       else {
                                           alert("We appreciate your feedback");
                                           $("#send_email")[0].reset();
                                       }
                                   }
                               });
                           }
                           catch(error){
                               console.log(error.toString());
                           }
                       }
                    });
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js "></script>
    <script src="assets/js/DataTable.js"></script>
    <script src="assets/js/custom.js?random=<?php echo rand() ?>"></script>
</body>

</html>