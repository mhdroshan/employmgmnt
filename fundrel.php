<html>
<head>
        <head>
                <meta charset="utf-8">
                <link rel="stylesheet" type="text/css" href="css/main.css">
                <script src="js/main.js"></script>
                <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
                  <meta name="viewport" content="width=device-width, initial-scale=1">
                  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
                  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
                
                  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto|Source+Sans+Pro&display=swap" rel="stylesheet">
                  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<title>Add Fund released</title>
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
        <div class="page-header detailss" style="font-family: 'Roboto', sans-serif;font-size: 34px;">Fund released</div>
        
        <form name="myForm" method="get" action="fundrel.php">
        <div class="row">
        <div class="inputc">
                                <div class="input1">Enter from date:</div>
                                <input  type="date" class="input2" name="datefrom5" placeholder="date">
                        </div>
                        <div class="inputc">
                                <div  class="input1">Enter to date:</div>
                                <input  type="date" class="input2" name="dateto5" placeholder="date">
                        </div>
                        <input   value="Get" class="butt" type="submit" name="cretesub83">
            <div style="    width: auto;" class="inputc">
                <div class="input1">Select work name:</div>
                <?php
                $con=mysqli_connect("localhost","root","","aslampro") or die("not connected");
                if(isset($_GET['cretesub83'])){
                  $from = $_GET['datefrom5'];
                  $to = $_GET['dateto5'];
                
                $query2 = "select * from workdata where stardate between '$from' and '$to'";
                $result = $con->query($query2);
                if ($result->num_rows > 0) {
                  // output data of each row
                  echo'<select  name="emppnn[]"  id="myOption" class="input2" style="    height: 50%;
                  padding: 10px;
                  width: 100%;
                  overflow-x: auto;" multiple >';
                  while($row = $result->fetch_assoc()) {
                     
                    
                    echo  '<option style="    padding: 8px;
                    border: 0.7px dashed black;
                    font-size: 16px;
                    margin: 5px 0px;
                    width: max-content;
                    border-radius: 6px;
                    letter-spacing: 1px;
                    text-align: center;
                    font-weight: bold;
                    font-family: Open Sans, sans-serif" value="'.$row['namewor'].'">

                    '.$row['namewor']. ' - [ '.$row['stardate'].' , '.$row['wortypeee'].' , '.$row['locname'].' ] 

                    
                    
                    
                    </option> ';
                   
                   
                  }
                  echo"</select>";
                } else {
                  echo "0 results";
                }
              }
                ?>

                </div>
                
                <div class="inputc">
                
          
              <input type="submit" class="butt" value="Add" name="deletbutt">
<?php
if(isset($_GET['deletbutt'])){
  $i=0;
foreach($_GET['emppnn'] as $selop){
  $yes = "yes";
$fg = "update workdata set fundrel = '".$yes."' where namewor = '".$selop."'";
mysqli_query($con,$fg)or die(mysqli_error($con));

  //$i++;
  //echo $selop."\n";
  //echo $i;
}
//echo $selop."\n";

//$empn = $_GET['emppnn'];


echo "<script type='text/javascript'>alert('Updated succcessfully');</script>";
//$sq = "replace into empat(empname,proname,date)values('$empn','$pron','$dat')";
//mysqli_query($con,$sq)or die(mysqli_error($con));
//echo "<script type='text/javascript'>alert('Attendance added');</script>";
}
?>
                </div>
                </form>
                </div>
                </body>
                
                </html>
