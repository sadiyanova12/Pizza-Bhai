<!DOCTYPE html>
<html lang="en">
<head>
  
  <link rel="stylesheet" href="style.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
</head>
<body>
<?php
  $conn= mysqli_connect("localhost","root","","dbstudentinfo");
  $query1= "SELECT * FROM tbl1";
  $result1= mysqli_query($conn, $query1);
  $numOfRow= mysqli_num_rows($result1);
  echo '<h1 id=heading></h1>';
  echo '<h1 id=heading-2></h1>';
  if($numOfRow>0){
    echo '<div class=container>';
    echo '
    <table class=table-data-show>
    <thead>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Department</th>
    <th>Email</th>
    <th>Phone Number</th>
    <th>Photo</th>
    <th></th>
    <th></th>
    </tr>
    </thead>';
    while($row= mysqli_fetch_array($result1)){
      //
      echo "<tr>
      <td>$row[id]</td>
      <td>$row[name]</td>
      <td>$row[department]</td>
      <td>$row[email]</td>
      <td>$row[phoneNumber]</td>
      <td>
      <img src=upload/$row[photo] width= 50px>
      <a href=download.php?id=$row[id]>download</a>
      </td>
      <td><a href=deleteProcess.php?id=$row[id]>Delete</a></td>
      <td><a href=edit.php?id=$row[id]>Update</a></td>
      </tr>
      ";
    }
    echo '</table>';
    echo '</div>';
    echo '<a class=button href=insert.php>Insert Another Student</a>';
  }
  else{
    echo "
    <br><br><br><br>
    <p class=para>*currently there are no students listed</p>
    <a class=button href=insert.php>Insert A Student</a>";
  }
?>
<script src="script.js"></script>
</body>
</html>

