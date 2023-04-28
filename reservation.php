<?php
//CODE FOR FEEDBACK
$mailid = $_POST['email'];
$msg = $_POST['message'];

if (!empty($mailid) || !empty($msg)){
    # code...
}
else{
    echo "Fill"
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="submit.php" method="post">
  <div>
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
  </div>
  <div>
    <label for="email">Email ID:</label>
    <input type="email" id="email" name="email" required>
  </div>
  <div>
    <label for="phone">Phone Number:</label>
    <input type="tel" id="phone" name="phone" required>
  </div>
  <div>
    <label for="people">Number of People:</label>
    <input type="number" id="people" name="people" required>
  </div>
  <div>
    <label for="table_position">Table Position:</label>
    <select id="table_position" name="table_position" required>
      <option value="">Select One</option>
      <option value="Window">Window</option>
      <option value="Middle">Middle</option>
      <option value="Bar">Bar</option>
    </select>
  </div>
  <div>
    <label for="date">Date:</label>
    <input type="date" id="date" name="date" required>
  </div>
  <div>
    <label for="time">Time:</label>
    <input type="time" id="time" name="time" required>
  </div>
  <button type="submit">Submit</button>
</form>

</body>
</html>