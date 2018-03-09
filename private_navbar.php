<nav class="navbar navbar-default navbar-fixed-top">
        <?php
            @session_start();
            if(empty($_SESSION['user'])){
                echo "
                <script>
                    open('index.php','_self');
                </script>
                ";
                    
                    
            }
    
        ?>
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand navbar-link" href="#"><img src="assets/img/logo.png" id="logo"> Administrator</a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="index.php">Home </a></li>
                    <li role="presentation"><a href="index.php#projects">Projects </a></li>
                    <li role="presentation"><a href="index.php#download">Download </a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Settings <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="dashboard.php">Dashboard </a></li>
                            <li role="presentation"><a href="edit_developers.php">Developers </a></li>
                            <li role="presentation"><a href="edit_gallery.php">Gallery </a></li>
                            <li role="presentation"><a href="logout.php">Logout </a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Others <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="developers.php">Developers </a></li>
                            <li role="presentation"><a href="index.php#donate">Donate </a></li>
                            <li role="presentation"><a href="gallery.php">Gallery </a></li>
                            <li role="presentation"><a href="index.php#about">About </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>