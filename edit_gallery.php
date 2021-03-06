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
    <?php include "private_navbar.php" ?>
    <div class="container">
        <div class="page-header">
            <h1>Gallery <small>Edit mode</small></h1></div>
        <a class="btn btn-success" type="button" href='add_image.php'><i class="fa fa-picture-o"></i> Add Image</a>
        <br>
        <br>
        <br>
        <form>
            <div class="table-responsive">
                <table class="table table-striped table-hover" id="tbl_developers">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Source </th>
                            <th>Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        
                            
                            <?php
                                $db = new Database();
                                $dbh = $db->getConnection();
                    
                                $gallery = new Gallery($dbh);
                                $result = $gallery->getDetails();
    
                                foreach($result as $row => $key){
                                    $id = $key['gallery_id'];
                                    $title = $key['title'];
                                    $src = $key['src'];


                        
                        
                                     print("
                                       <tr>
                                         <td>$title</td>
                                         <td>$src</td>
                                         <td>
                                            <div class='btn-group btn-group-sm' role='group'>
                                                <a class='btn btn-danger' role='button' href='assets/php/remove_image.php?gallery_id=$id'><i class='fa fa-remove'></i> Delete </a>
                                            </div>
                                         </td>
                                        </tr>
                                     ");
                                }
    
                            ?>
                        
                    </tbody>
                </table>
            </div>
        </form>
    </div>
    <?php include "private_footer.php" ?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js "></script>
    <script src="assets/js/DataTable.js"></script>
</body>

</html>