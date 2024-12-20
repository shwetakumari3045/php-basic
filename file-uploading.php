<?php 
$pageTitle = "File uploading";
include('header.php');
?>



<h1>File Uploading</h1>
<form method="POST" action="upload.php" enctype="multipart/form-data">
    <input type="file" name="image" accept=".jpg,.png">
    <button>Upload</button>
</form>

<?php
include('footer.php');
?>