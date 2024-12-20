<?php
 $pageTitle ="Form";
 include('header.php');
 ?>

 <?php
if(isset($_REQUEST['username'])){
  $username =$_REQUEST['username'];
  // var_dump($username);
  $email =$_REQUEST['email'];
  $phone =$_REQUEST['phone'];
  $message =$_REQUEST['message'];
  $terms =$_REQUEST['terms'];
  $city =(isset($_REQUEST['city']))?$_REQUEST['city']:[];
   
// $city =implode("," $city);
// var_dump($city);
for($i=0;$i<sizeof($city);$i++){
    echo $city[$i];
    echo "<br>";
}
// var_dump($_POST);
}
 ?>
 <div class="container mt-5">
    <h2>Contact Us</h2>
    
    <form action="" method="POST">

      <div class="mb-3">
        <label for="name" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="name" name="username" placeholder="Enter your full name" required>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
      </div>

      <div class="mb-3">
        <label for="phone" class="form-label">Phone Number</label>
        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required>
      </div>

      <h3>Select Cities:</h3>
        <label>
            <input type="checkbox" name="city[]" value="New York"> New York
        </label>
        <label>
            <input type="checkbox" name="city[]" value="Los Angeles"> Los Angeles
        </label>
        <label>
            <input type="checkbox" name="city[]" value="Chicago"> Chicago
        </label>
        <label>
            <input type="checkbox" name="city[]" value="Houston"> Houston
        </label>
        <br> 

      <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" id="message" name="message" rows="4" placeholder="Your message here" required></textarea>
      </div>

      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="terms" name="terms" required>
        <label class="form-check-label" for="terms">Agree to terms and conditions</label>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

  </div>

<?php
include('footer.php')
?>