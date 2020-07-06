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
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<title>Search project</title>

</head>
<body>
<a href="main.html" style="color: white;"><div class="homb"><i class="material-icons">home</i></div></a>
<div class="container">
  <div class="page-header" style="font-family: 'Roboto', sans-serif;font-size: 34px;">Search project</div>
  <div class="row">
      <div class="col-sm-12">
        
            <form name="myForm" method="GET" action="search.php">
        <div class="inputc">
          <div class="input34">Select project name:</div>
          <?php
                $con=mysqli_connect("localhost","root","","aslampro") or die("not connected");
                $query2 = "select namewor from workdata  ORDER BY stardate ASC";
                $result = $con->query($query2);
                if ($result->num_rows > 0) {
                  // output data of each row
                  echo'<select name="ewname1"   class="input2" >';
                  while($row = $result->fetch_assoc()) {
                   
                    
                    echo  '<option value="'.$row['namewor'].'">'.$row['namewor'].'</option> ';
                    
                   
                  }
                  echo"</select>";
                } else {
                  echo "0 results";
                }
                
                ?>
          
          <input type="submit" class="butt" value="Get" name="getempdat">
        
        </div>
    </form>
    <?php
    $con=mysqli_connect("localhost","root","","aslampro") or die("not connected");
    if(isset($_GET['getempdat'])){
      
      $name = $_GET['ewname1'];
      
      $qq = "select * from workdata where namewor ='". $name. "'";
      $result3 = $con->query($qq);
      if ($result3->num_rows > 0) {
      while($row = $result3->fetch_assoc())
    {
    echo '
            <div class="row">
            <div class="col-sm-6">
              
                  <div class="inputc">
                    <div style="color:#FF5733;" class="input34">work name:</div>
                    <label  >'.$row['namewor'].'</label>
                    
                  </div>
                  
                    <div class="inputc">
                        <div class="input34">Location name:</div>
                        <label  >'.$row['locname'].'</label>
                      </div>
                      <div class="inputc">
                          <div class="input34">location id 1:</div>
                          <label  >'.$row['locid1'].'</label>
                        </div>
                        <div class="inputc">
                            <div class="input34">location id 2:</div>
                            <label  >'.$row['locid2'].'</label>
                          </div>
                        <div class="inputc">
                            <div class="input34">Estimated price:</div>
                            <label  >'.$row['worprice'].'</label>
                          </div>
                          <div class="inputc">
                            <div class="input34">Vehicle used:</div>
                            <label  >'.$row['vehname'].'</label>
                          </div>
                          
                          
                            
                
                
                </div>
                <div class="col-sm-6">
                  <div class="inputc" style="margin-bottom: 15px;">
                      
                          <div class="input34">Selected employees:</div>
                          
                  
                  
                    
                  <label>'.$row['empnames'].'</label>
          
                  </div>';
          
              echo  '<div class="inputc" style="margin-bottom: 15px;">
              <div class="input34">Work type:</div>
              <label>'.$row['wortypeee'].'</label>
                </div>
          
          <div class="inputc">
              <div class="input34" >Fund released:</div>
          
              
              <label>'.$row['fundrel'].'</label>
          
              
            </div>
            <div class="inputc">
                <div class="input34" >Other expences 1:</div>
                <label>'.$row['othrex1'].'</label>
                <div class="input34" >Other amount 1:</div>
                <label>'.$row['othram1'].'</label>
                <div class="input34" >Other expences 2:</div>
                <label>'.$row['otherx2'].'</label>
                <div class="input34" >Other amount 2:</div>
                <label>'.$row['othram2'].'</label>
            
                
              
                
              </div>
            
                </div>
                
           
            ';
    
    
            
    
    } 
    }else {
      echo "0 results";
    }
    
   
      
  
     
    
    
  


$query5 = "select * from dates where projctname ='". $name. "'  ORDER BY stardate ASC";
$result = $con->query($query5);
if ($result->num_rows > 0) {
  // output data of each row
  echo  '<div class="inputc">
  <div class="input34">Dates:</div>';
  while($row = $result->fetch_assoc()) {
   
    
    echo  '
        <label>'.$row['date'].'</label><br>
      ';
    
   
  }
  echo '</div>';
  echo"</div></div>
";
} else {
  echo "0 results";
}
    }
?>
    <div class="col-sm-12">
    
        <div class="row">
            <form name="myForm" method="GET" action="search.php">
        <div class="inputc">
          <div class="input34">Select project location:</div>
          <?php
                
                $query2 = "select locname from workdata";
                $result = $con->query($query2);
                if ($result->num_rows > 0) {
                  // output data of each row
                  echo'<select name="eloc1"   class="input2" >';
                  while($row = $result->fetch_assoc()) {
                   
                    
                    echo  '<option value="'.$row['locname'].'">'.$row['locname'].'</option> ';
                    
                   
                  }
                  echo"</select>";
                } else {
                  echo "0 results";
                }
                
                ?>
          
          
          <input type="submit" class="butt" value="Get" name="locgett1">
        
        </div>
    </form>
    <?php
    $con=mysqli_connect("localhost","root","","aslampro") or die("not connected");
    if(isset($_GET['locgett1'])){
      
      $name = $_GET['eloc1'];
      $qq = "select * from workdata where locname ='". $name. "'";
     
      $result3 = $con->query($qq);
      if ($result3->num_rows > 0) {
      while($row = $result3->fetch_assoc())
    {
    echo '<div style="      margin: 0px 10px;   overflow-x: auto;
    width: auto;" >
            <div class="row">
            <div style="display: -webkit-box;" class="col-sm-12">
              
                  <div class="inputc">
                    <div class="input34">Work name:</div>
                    <label  >'.$row['namewor'].'</label>
                    
                  </div>
                  
                    <div class="inputc">
                      <div class="input34">Work type:</div>
                      <label  >'.$row['wortypeee'].'</label>
                    </div>
                    <div class="inputc">
                        <div style="color:#FF5733;" class="input34">Location name:</div>
                        <label  >'.$row['locname'].'</label>
                      </div>
                      <div class="inputc">
                          <div class="input34">location id 1:</div>
                          <label  >'.$row['locid1'].'</label>
                        </div>
                        <div class="inputc">
                            <div class="input34">location id 2:</div>
                            <label  >'.$row['locid2'].'</label>
                          </div>
                          <div class="inputc">
                            <div class="input34">Employee names:</div>
                            <label  >'.$row['empnames'].'</label>
                          </div>
                        
                          
                          
                            
                
                
                </div>
                
              </div>
           </div>
            ';
    
    
            
    
    } 
    }else {
      echo "0 results";
    }
    }
   
      
  
     
    
    
    ?>

        </div>
        
  </div>
  <div class="col-sm-12">
    
    <div class="row">
        <form name="myForm" method="GET" action="search.php">
    
    <div class="inputc">
    <div class="input34">Select dates:</div>
                                <div class="input1">Enter from date:</div>
                                <input required type="date" class="input2" name="datefrom5" placeholder="date">
                        </div>
                        <div class="inputc">
                                <div  class="input1">Enter to date:</div>
                                <input required type="date" class="input2" name="dateto5" placeholder="date">
                        </div>
                        <input   value="Get" class="butt" type="submit" name="getdatee">
      
      
    
    
</form>
<?php

if(isset($_GET['getdatee'])){
  $from = $_GET['datefrom5'];
  $to = $_GET['dateto5'];
  $qt = "select * from dates where date between '$from' and '$to' order by date asc";
  if ($resulty = mysqli_query($con, $qt)) {

    /* fetch associative array */
    while ($row = mysqli_fetch_assoc($resulty)) {
      $test =$row["projctname"];
      
    
 // $row = $qt->fetch_assoc();  
//$test= $row['projctname'];

 $qp = "select * from workdata where namewor = '".$test."' order by stardate asc";
  $result6 = $con->query($qp);
  
  if ($result6->num_rows > 0) {
  while($row = $result6->fetch_assoc())
{
echo '<div style="      margin: 0px 10px;   overflow-x: auto;
width: auto;" >
        <div class="row">
        <div style="display: -webkit-box;" class="col-sm-12">
        <div class="inputc">

        <div class="input34" style="color:#FF5733;">Start date:</div>
        <label  >'.$row['stardate'].'</label>
        
      </div><div class="inputc">

      <div class="input34" style="color:#337ab7;">End date:</div>
      <label  >'.$row['enddate'].'</label>
      
    </div>
              <div class="inputc">

                <div class="input34">Work name:</div>
                <label  >'.$row['namewor'].'</label>
                
              </div>
              <div class="inputc">
                    <div class="input34">No: of days:</div>
                    <label  >'.$row['ndys'].'</label>
                  </div>
                <div class="inputc">
                    <div class="input34">Location name:</div>
                    <label  >'.$row['locname'].'</label>
                  </div>
                  <div class="inputc">
                    <div class="input34">Work type:</div>
                    <label  >'.$row['wortypeee'].'</label>
                  </div>
                  <div class="inputc">
                      <div class="input34">location id 1:</div>
                      <label  >'.$row['locid1'].'</label>
                    </div>
                    <div class="inputc">
                        <div class="input34">location id 2:</div>
                        <label  >'.$row['locid2'].'</label>
                      </div>
                      <div class="inputc">
                        <div class="input34">Vehicle used:</div>
                        <label  >'.$row['vehname'].'</label>
                      </div>
                      <div class="inputc">
                        <div class="input34">Price:</div>
                        <label  >'.$row['worprice'].'</label>
                      </div>
                      <div class="inputc">
                        <div class="input34">Totan expence:</div>
                        <label  >'.$row['texpro'].'</label>
                      </div>
                      <div class="inputc">
                        <div class="input34">Profit:</div>
                        <label  >'.$row['bal'].'</label>
                      </div>
                    
                      
                      
                        
            
            
            </div>
            
          </div>
       </div>
        ';


        

} 
}else {
  echo "0 results";
}
}
}
}
  

 


?>
    </div>
    
</div>
        
        </div>
      
        <div class="col-sm-6">
            <div class="butt"   onclick="openfor()">Show project list</div>
            <div id="Mydiv" style="display:none;">
            <ul style="height:300px;">
            <?php
            
              
            $con=mysqli_connect("localhost","root","","aslampro") or die("not connected");
            
            $query2 = "select namewor from workdata";
            $result = $con->query($query2);
            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
               
                echo"<li>";
                echo   $row['namewor'];
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











  

        
        </body>
        </html>
        