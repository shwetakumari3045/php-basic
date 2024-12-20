<?php
 $pageTitle ="Form";
 include('header.php');
 ?>
 
 <h2>File Uploading</h2>
   
 <form action="upload.php" method="POST" enctype="multipart/form-data">
  <input type="file" name="image" accept="jpg.png">
<button>Upload</button>
</form>

<?php
include('footer.php')
?>