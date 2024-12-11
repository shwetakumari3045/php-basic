<?php
 $pageTitle = "Numberic-Array";
 include("header.php");
?>
  <h1>PHP Forms</h1>
  <div class="form-container">
    <h1>Student Registration Form</h1>
    <form action="submit.php" method="get">
      <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your full name" required>
      </div>

      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
      </div>

      <div class="form-group">
        <label for="dob">Date of Birth</label>
        <input type="date" id="dob" name="dob" required>
      </div>

      <div class="form-group">
        <label for="gender">Gender</label>
        <select id="gender" name="gender">
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select>
      </div>

      <div class="form-group">
        <label for="address">Home Address</label>
        <textarea id="address" name="address" placeholder="Enter your home address" required></textarea>
      </div>

      <div class="form-group">
        <label for="course">Course</label>
        <input type="text" id="course" name="course" placeholder="Enter course name" required>
      </div>

      <div class="form-group">
        <button type="submit" class="submit-btn">Submit</button>
      </div>
    </form>
  </div>

    <?php
    include("footer.php")
    ?>