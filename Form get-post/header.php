<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap');
    *{
        box-sizing: border-box;
        margin-top: 0;
    }
    body{
        margin: 0;
        font-family: "Nunito", sans-serif;
        background-color: #2c2c2c;
        color: white;
    }
    header{
        background-color: tomato;
    }
    header nav{
        display: flex;
    }
    header nav .nav-link{

    }
    header nav .nav-link a{
        display: block;
        color: white;
        text-decoration: none;
        padding: 14px 20px;
    }
    .container{
      
        max-width: 1280px;
        margin: auto;
    }
    .container-inner{
        padding: 20px 0;
    }
    input[type='text'],input[type='email'],input[type='password'],input[type='file']{
        width: 250px;
        height: 40px;
        padding-left: 10px;
        outline: none;
        border: 1px solid #ccc;
        display: block;
        margin-bottom: 10px;
        border-radius: 4px;
    }
    button{
        display: inline-block;
        padding: 10px 20px;
        background-color: teal;
        color: white;
        border: none;
        border-radius: 4px;
    }
    /* --------------------------------form------------------------------- */

  
    form{
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color:green;
        }
        input[type="text"], input[type="email"], input[type="password"], textarea {
            width: 100%;
            padding: 8px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 3px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: black;
            border: none;
            padding: 10px 15px;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <header>
        <nav class="container">
            <div class="nav-link">
                <a href="home.php">Home</a>
            </div>
            <div class="nav-link">
                <a href="numeric-arrays.php">Indexed Arrays</a>
            </div>
            <div class="nav-link">
                <a href="associative-arrays.php">Associative Arrays</a>
            </div>
            
            <div class="nav-link">
                <a href="array-map.php">Array Mapping</a>
            </div>
            <div class="nav-link">
                <a href="php-forms.php">PHP Forms</a>
            </div>
        </nav>
    </header>

