<!DOCTYPE html>
<html>

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
            <h1>Developer <small>edit mode</small></h1></div>
        <form id="add_developer" class="add_form form-group has-danger" method='post' action='assets/php/add_developer.php' enctype="multipart/form-data">
            <h3>Add Developer</h3>
            <div class="input-group">
                <div class="input-group-addon"><span>Name </span></div>
                <input class="form-control has-danger" type="text" name='name'>
            </div>
            <div class="input-group">
                <div class="input-group-addon" ><span>Position </span></div>
                <input class="form-control" type="text" name='position'>
            </div>
            <div class="input-group">
                <div class="input-group-addon"><span>Facebook </span></div>
                <input class="form-control" type="text" name='facebook'>
            </div>
            <div class="input-group">
                <div class="input-group-addon"><span>Twitter </span></div>
                <input class="form-control" type="text" name='twitter'>
            </div>
            <div class="input-group">
                <div class="input-group-addon"><span>Gmail </span></div>
                <input class="form-control" type="text" name='gmail'>
            </div>
            <div class="input-group">
                <div class="input-group-addon"><span>Description </span></div>
                <input class="form-control" type="text" name='description'>
            </div>
            <div class="input-file">
                <p><i class="fa fa-image"></i> Set Picture</p>
                <input type="file" name='picture'>
            </div>
            <p class="p-center">
                <button class="btn btn-success" type="submit">Add </button>
            </p>
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