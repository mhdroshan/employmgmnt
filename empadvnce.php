<html>
<head>
        <head>
                <meta charset="utf-8">
                <link rel="stylesheet" type="text/css" href="css/main.css">
                <script src="js/main.js"></script>
                
                  <meta name="viewport" content="width=device-width, initial-scale=1">
                  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
                  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
                  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
                  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto|Source+Sans+Pro&display=swap" rel="stylesheet">
                  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<title>Add Advance details</title>
<style>
.homb{
    padding: 10px;
    background: #008000;
    color: white;
    text-align: center;
    cursor: pointer;
    margin: 12px;
    position: sticky;
    top: 20px;
    width:fit-content;
    right: 10%;
    font-size: 22px;
    z-index:1000;
    border-radius: 5px;
    float:right;
    font-family: 'Roboto', sans-serif;
    -webkit-transition: all 0.4s ease;
    -moz-transition: all 0.4s ease;
    -o-transition: all 0.4s ease;
    transition: all 0.4s ease; 
}
.homb:hover{
    background: white;
    letter-spacing: 1.3px;
    color: #008000;
}
  </style>
</head>
<body>
<a href="main.html" style="color: white;"><div class="homb"><i class="material-icons">home</i></div></a>
<div class="container">
        <div class="page-header detailss" style="font-family: 'Roboto', sans-serif;font-size: 34px;">Employee advance details</div>
        
        <form name="myForm" method="get" action="empadvnce.php">
        <div class="row">
            <div class="inputc">
                <div class="input1">Select employees name:</div>

                <?php
$con=mysqli_connect("localhost","root","","aslampro") or die("not connected");
$query2 = "select ename from empdata";
$result = $con->query($query2);
if ($result->num_rows > 0) {
  // output data of each row
  echo'<select name="emppnn"  id="myOption" class="input2" >';
  while($row = $result->fetch_assoc()) {
   
    
    echo  '<option value="'.$row['ename'].'">'.$row['ename'].'</option> ';
    
   
  }
  echo"</select>";
} else {
  echo "0 results";
}

?>
            </div>
            <div class="inputc">
                <div class="input1">Enter date:</div>
                <input type="date" class="input2" name="date1" placeholder="date of advance bought">
              </div>
              <div class="inputc">
                  <div class="input1">Enter amount:</div>
                  <input type="text" class="input2" name="amtt" placeholder="amount">
                </div>
                <input style="width: inherit"  value="Save" class="butt" type="submit" name="cretesub8">
                <?php

$con=mysqli_connect("localhost","root","","aslampro") or die("not connected");


if(isset($_GET['cretesub8'])){
        $name = $_GET['emppnn'];
    $dat = $_GET['date1'];
    $amt = $_GET['amtt'];
    
  
  $query = "replace into empadv(empname,date,amount)values('$name','$dat','$amt')";
  mysqli_query($con,$query);
  echo "<script type='text/javascript'>alert('Inserted succcessfully');</script>";
  header('location:main.html');
}

  ?>
</div>
</form>
</div>
</body>

</html>