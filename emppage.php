<html>
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
<title>Employee details</title>
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
        <div class="page-header" style="font-family: 'Roboto', sans-serif;font-size: 34px;">Employee details</div>
        <div class="detailss">Add employee</div>
        
        <div class="row">
        <div class="col-sm-6">
            <form name="myForm" method="get" >
                <div class="inputc">
                        <div class="input1">Employee name:</div>
                        <input type="text"  class="input2" required name="emname" placeholder="employee name">
                      </div>
                      <div class="inputc">
                            <div class="input1">Job type:</div>
                            <input type="text" class="input2"  name="emtyp" placeholder="job type">
                          </div>
                          <div class="inputc">
                                <div class="input1">Employee address:</div>
                                <textarea class="input2"  name="emadd" placeholder="employee address"></textarea>
                                
                              </div>
                              <div class="inputc">
                                    <div class="input1">Employee phone:</div>
                                    <input type="text" class="input2"  name="emphn" placeholder="employee phone">
                                  </div>
                                  <div class="inputc">
                                        <div class="input1">Daily wage</div>
                                        <input type="text" class="input2"  name="emwage" placeholder="daily wage">
                                      </div>
                                      <input style="width: inherit"  value="Save" class="butt" type="submit" name="cretesub">
                                      </form>
                                      <?php

$con=mysqli_connect("localhost","root","","aslampro") or die("not connected");


if(isset($_GET['cretesub'])){
		$name = $_GET['emname'];
	$typ = $_GET['emtyp'];
	$add = $_GET['emadd'];
	$phn = $_GET['emphn'];
	$wag = $_GET['emwage'];
  $query9 = "insert into empdata(ename,jobtype,address,phone,dailywage)values('$name','$typ','$add','$phn','$wag')";
  mysqli_query($con,$query9) or die(mysqli_error($con));
  echo "<script type='text/javascript'>alert('Inserted succcessfully');</script>";

}

  ?>
           
    </div>
    <div class="col-sm-6">
    

        <div class="detailss">Update/delete employee</div>
        
<div class="inputc">
<div class="input1">Select employee name:</div>

<?php
$query2 = "select * from empdata";
$result = $con->query($query2);
                if ($result->num_rows > 0) {
                  echo '<form method="get">';
                  echo'<select  name="getemp"   class="input2" style="padding: 8px;">';
                  while($rowr = $result->fetch_assoc()) {
                   
                    
                    echo  '<option value="'.$rowr['ename'].'">'.$rowr['ename']. '</option> ';
                    
                   
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
        
        if(isset($_GET['getempdat2'])){
          //echo "adasd";
          $namet = $_GET['getemp'];
          $qq = "select * from empdata where ename ='". $namet. "'";
          $result3 = $con->query($qq);
          if ($result3->num_rows > 0) {
          while($row = $result3->fetch_assoc())
        {
          echo '<form method="get">
          <div class="inputc">
        <div class="input1">Employee name:</div>
        <input type="text" readonly class="input2" name="emname1" value="'.$row['ename'].'"></div>';
        echo '<div class="inputc">
        <div class="input1">Job type:</div>
        <input type="text"  class="input2" name="jobtyp1" value="'.$row['jobtype'].'"></div>';
        echo '<div class="inputc">
        <div class="input1">Employee address:</div>
        <textarea class="input2"  name="emadd1"  placeholder="employee address">'.$row['address'].'</textarea></div>';
        echo '<div class="inputc">
        <div class="input1">Employee phone:</div>
        <input type="text"  class="input2" name="emphne1" value="'.$row['phone'].'"></div>';
        echo '<div class="inputc">
        <div class="input1">Daily wage:</div>
        <input type="text"  class="input2" name="ewage1" value="'.$row['dailywage'].'"></div>';
        echo'<input type="submit" class="butt" value="Update" name="updatebutty">';
        echo'<input type="submit" class="butt" value="Delete" name="deletbuttt"></form>';
        
        
        
        
        } 
        }else {
          echo "0 results";
        }
        }
        if(isset($_GET['updatebutty'])){
          
        $up = "update empdata set jobtype = '".$_GET['jobtyp1']."',address='".$_GET['emadd1']."',phone='".$_GET['emphne1']."',dailywage= '".$_GET['ewage1']."' where ename = '".$_GET['emname1']."'";
        //jobtype = '.$_GET['jobtyp1'].',address='.$_GET['emadd1'].',phone='.$_GET['emphne1'].',dailywage= '.$_GET['ewage1'].'  
        mysqli_query($con,$up ) or die(mysqli_error($con));
        echo "<script type='text/javascript'>alert('Updated succcessfully');</script>";
        }
        
        
          if(isset($_GET['deletbuttt'])){
        $del = "delete from empdata where ename= '".$_GET['emname1']."'";
        mysqli_query($con,$del) or die(mysqli_error($con));
        echo "<script type='text/javascript'>alert('Deleted succcessfully');</script>";
          }
        
        
        
        ?>
       

       <div class="butt"   onclick="openfor()">Show employee list</div>
        <div id="Mydiv" style="display:none;">
        <ul style="height:300px;">
        <?php
        
          
        $con=mysqli_connect("localhost","root","","aslampro") or die("not connected");
        
        $query2 = "select ename from empdata";
        $result = $con->query($query2);
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
           
            echo"<li>";
            echo   $row['ename'];
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

  