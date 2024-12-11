<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle;?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
  @import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Parkinsans:wght@300..800&family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap');
        *{
        box-sizing: border-box;
        margin-top: 0;
         }

         body{
            margin: 0;
            font-family: "Nunito", sans-serif;
         }

         header{
            /* background-color: #ffffff */
             background-color: #DBD3D3
         }
         header nav{
            display:flex;
            justify-content: end;
            margin-right: 80px;
            
         }
         
         header nav .nav-link a{
            display: block;
            text-decoration: none; 
            padding: 25px 10px; 
            letter-spacing: 4px;
            color: black;
        }
        a{
            color: black;
        }
        h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
}
/* ------------menu--------------- */

.fakeimg {
    height: 200px;
    background: #aaa;
  }



  /* -------------contact---------- */
  .container{
  max-width: 860px !important;

  .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

}

     
     </style>
</head>
<body>
   <header>
   
    <nav class="container">
        <div class="nav-link">
            <a href="about.php">About</a>
        </div>
        <div class="nav-link">
            <a href="menu.php">Menu</a>
        </div>
        <div class="nav-link">
            <a href="contact.php">Contact</a>
        </div>
        
    </nav>
    </header>
