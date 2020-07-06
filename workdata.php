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
<title>Work details</title>
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
        <div class="page-header" style="font-family: 'Roboto', sans-serif;font-size: 34px;">Work details</div>
        <div class="detailss">Add work</div>
        <form name="myForm" method="get" action="workdata.php">
        <div class="row">
        <div class="col-sm-6">
                <div class="inputc">
                        <div class="input1">Work name:</div>
                        <input type="text"  class="input2" required name="emname" placeholder="Work name">
                      </div>
                      <div class="inputc">
                            <div class="input1">Work price:</div>
                            <input type="text" class="input2"  name="emtyp" placeholder="work price">
                          </div>
                          
                              <input style="width: inherit"  value="Save" class="butt" type="submit" name="cretesub">

                              <?php

                              $con=mysqli_connect("localhost","root","","aslampro") or die("not connected");
                              
                              
                              if(isset($_GET['cretesub'])){
                                      $name = $_GET['emname'];
                                  $typ = $_GET['emtyp'];
                                  
                                
                                $query = "replace into workdetails(nmofwork,pricee)values('$name','$typ')";
                                mysqli_query($con,$query);
                                echo "<script type='text/javascript'>alert('Inserted succcessfully');</script>";
                              
                              }
                              
                                ?>
                              </form>
                                  

    </div>
    <div class="col-sm-6">
    <div class="detailss">Update/delete work</div>
    <div class="inputc">
<div class="input1">Select work name:</div>
<?php
$query2 = "select * from workdetails";
$result = $con->query($query2);
                if ($result->num_rows > 0) {
                  echo '<form method="get">';
                  echo'<select  name="getempn"   class="input2" style="padding: 8px;">';
                  while($rowr = $result->fetch_assoc()) {
                   
                    
                    echo  '<option value="'.$rowr['nmofwork'].'">'.$rowr['nmofwork']. '</option> ';
                    
                   
                  }
                  echo"</select>";
                  //echo"";
                }
                else {
                  echo "0 results";
                }
?>
<input type="submit" class="butt" value="Get" name="getempdat2">



            
</form>


</div>



<?php
$con=mysqli_connect("localhost","root","","aslampro") or die("not connected");
if(isset($_GET['getempdat2'])){
  $name = $_GET['getempn'];
  $qq = "select * from workdetails where nmofwork ='". $name. "'";
  $result3 = $con->query($qq);
  if ($result3->num_rows > 0) {
  while($row = $result3->fetch_assoc())
{
echo '<form method="get">
<div class="inputc">
<div class="input1">Work name:</div>
<input type="text" readonly  class="input2" name="emname13" value="'.$row['nmofwork'].'"></div>';
echo '<div class="inputc">
<div class="input1">Work price:</div>
<input type="text"  class="input2" name="jobtyp1" value="'.$row['pricee'].'"></div>';

echo'<input type="submit" class="butt" value="Update" name="updatebutt">';
echo'<input type="submit" class="butt" value="Delete" name="deletbutt"></form>';




} 
}else {
  echo "0 results";
}
}
if(isset($_GET['updatebutt'])){
 // if (isset($_GET['emname13'])) {
  //$output.=$_GET['emname13']; // there is no error here
//}
$up = "update workdetails set pricee = '".$_GET['jobtyp1']."' where nmofwork ='".$_GET['emname13']."'";



 
mysqli_query($con,$up)or die(mysqli_error($con));
echo "<script type='text/javascript'>alert('Updated succcessfully');</script>";
}
  

  if(isset($_GET['deletbutt'])){
$del = "delete from workdetails where nmofwork= '".$_GET['emname13']."'";
mysqli_query($con,$del)or die(mysqli_error($con));
echo "<script type='text/javascript'>alert('Deleted succcessfully');</script>";
  }



?>

<div class="butt"   onclick="openfor()">Show work list</div>
<div id="Mydiv" style="display:none;">
<ul style="height:300px;">
<?php

  
$con=mysqli_connect("localhost","root","","aslampro") or die("not connected");

$query2 = "select nmofwork from workdetails";
$result = $con->query($query2);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   
    echo"<li>";
    echo   $row['nmofwork'];
    echo"</li>";
   
  }
} else {
  echo "0 results";
}

?>
</ul>
</div>
</div>
    
    </div>
    </div>
    </body>
    </html>
   