<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <style>
    body, h2, form {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}
body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f4f4f9;
}

.form-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 300px;
    box-sizing: border-box;
}

h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}
label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    color: #555;
}

input[type="text"],
input[type="email"],
textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 16px;
    box-sizing: border-box;
}
textarea {
    resize: vertical;
}
    </style>
</head>
<body>
<div class="form-container">
        <h2>Forms</h2>
        <form action="save-notepad1.php" method="POST">
            <label for="filename">Filename:</label>
            <input type="text" name="title" placeholder="Enter your filename">

            <label for="note">Message:</label>
            <textarea name="note" rows="4"></textarea>

            <button>Save Note</button>
        </form>
    </div>
