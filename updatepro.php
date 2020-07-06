<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/main.css">
<script src="js/main.js"></script>
<script >
function getnameeeKK() {

var str=" ",i;
  
  for (i=0;i<myOpti.options.length;i++) {
      if (myOpti.options[i].selected) {
          str = str + myOpti.options[i].value + "-";
      }
  }
  
  var display = document.getElementById('show1d');
  str = str.trim();
  display.innerHTML= str;
  
//alert("Options selected are " + str);
}

</script>
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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto|Source+Sans+Pro&display=swap" rel="stylesheet">

<title>Update project</title>

</head>
<body>
<a href="main.html" style="color: white;"><div class="homb"><i class="material-icons">home</i></div></a>
<div class="container">
  <div class="page-header" style="font-family: 'Roboto', sans-serif;font-size: 34px;">Update project</div>
  
  <div class="col-sm-6">
        <div class="row">
            <form name="myForm" method="GET" action="updatepro.php">
        <div class="inputc">
          <div class="input1">Select work name:</div>

          <?php
                $con=mysqli_connect("localhost","root","","aslampro") or die("not connected");
                $query2 = "select namewor from workdata";
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
    echo '<form name="myForm1" method="GET" action="updatepro.php">
            <div class="row">
            <div class="col-sm-6">
              
                  <div class="inputc">
                    <div class="input1">Enter work name:</div>
                    <input type="text" class="input2" value="'.$row['namewor'].'" readonly name="prjnam" placeholder="work name">
                  </div>
                  
                    <div class="inputc">
                        <div class="input1">Enter location name:</div>
                        <input type="text" class="input2" value="'.$row['locname'].'" name="locidd" placeholder="location name">
                      </div>
                      <div class="inputc">
                          <div class="input1">Enter location id 1:</div>
                          <input type="text" class="input2" value="'.$row['locid1'].'" name="locnam" placeholder="location id 1">
                        </div>
                        <div class="inputc">
                          <div class="input1">Enter location id 2:</div>
                          <input type="text" class="input2" value="'.$row['locid2'].'" name="locnam1" placeholder="location id 2">
                        </div>
                        <div class="inputc">
                          <div class="input1">Total expence:</div>
                          <input type="text" class="input2" value="'.$row['texpro'].'" name="totexpp" placeholder="total expence">
                        </div>
                        <div class="inputc">
                          <div class="input1">Previous employee names:</div>
                          <textarea readonly type="text" class="input2" style="height: 80px;font-size:15px;" text="'.$row['empnames'].'"  placeholder="old employee names">'.$row['empnames'].'</textarea>
                        </div>
                        <div class="inputc">
                          <div class="input1">New employee names:</div>';
                          
$con=mysqli_connect("localhost","root","","aslampro") or die("not connected");
$query2 = "select ename from empdata";
$result = $con->query($query2);
if ($result->num_rows > 0) {
  // output data of each row
  echo'<select  onchange="getnameeeKK()" id="myOpti" class="input2" multiple>';
  while($row = $result->fetch_assoc()) {
   
    
    echo  '<option value="'.$row['ename'].'">'.$row['ename'].'</option> ';
    
   
  }
  echo"</select>";
} else {
  echo "0 results";
}
echo'<textarea style="height:123px;    margin-top: 8px;fontsize:20px;" class="input2" readonly name="empol" id="show1d" placeholder="new employees"></textarea>';
echo'
                        </div>
                        
                          
                          <div class="inputc">
                  <div class="input1">Vehicle used:</div>
                  <input type="text" class="input2" value="'.$row['vehname'].'" name="vehu" placeholder="vehicle used">
                </div>
                ';
                      /*      
                <div class="inputc">
                <div class="input1" style="margin: 4px;">Other expenses:</div>
            
                
                <input name="exp1" value="'.$row['othrex1'].'" class="input2" style="
                margin: 5px 0px 3px 0px;
            " type="text" placeholder="Expence name 1">
                <input name="amd1" class="input2" value="'.$row['othram1'].'" style="
                margin: 3px 0px 12px 0px;
            " type="text" placeholder="Amount 1"><br>
                <input name="exp2" class="input2" value="'.$row['otherx2'].'" style="
                margin: 5px 0px 3px 0px;
            " type="text" placeholder="Expence name 2">
                <input name="amd2" class="input2" value="'.$row['othram2'].'" style="
                margin: 3px 0px 10px 0px;
            " type="text" placeholder="Amount 2">  
                
              </div>
                
                </div>';*/
                //<div class="col-sm-6">
                  //  <div class="col-sm-3" style="width: auto;/* top: 30px; */margin-top: 20px;"> 
                    
                    //  <textarea class="input2"  name="wornmt" type="text" style="font-size:22px;height: 100px;" placeholder="selected employees" id="show1">'.$row['empnames'].'</textarea>
            
                   // </div>
                  //<div  style="margin-bottom: 15px;"><div class="col-sm-3" style="width: auto">
                      
                         // <div>
                              /*<div class="input1">Select employees:</div>';
                              
              $con=mysqli_connect("localhost","root","","aslampro") or die("not connected");
              $query2 = "select ename from empdata";
              $result = $con->query($query2);
              if ($result->num_rows > 0) {
                // output data of each row
                echo'<select  onchange="getnameee1()" id="myOption2" class="input2" multiple>';
                while($row = $result->fetch_assoc()) {
                 
                  
                  echo  '<option value="'.$row['ename'].'">'.$row['ename'].'</option> ';
                  
                 
                }
                echo"</select>";
              } else {
                echo "0 results";
              }
               echo'
                            </div>
                                      </div>
                  </div>
                
                  </div>
                  echo'
          <div class="col-sm-12"><div class="inputc" style="margin: 20px 10px 10px 0px;">';
          $query25 = "select nmofwork from workdetails";
    
          
          $result = $con->query("select wortypeee from workdata where namewor ='". $name. "'");
          $row = $result->fetch_assoc();
          $authorid = $row['wortypeee'];
           
          $result11 = $con->query($query25);
          if ($result11->num_rows > 0) {
            // output data of each row
            echo '<div class="input1">Select work type:</div>';
            echo'<select  required style="display:block;" name="selty" id="myOption3" class="input2">';
            
            
              
            echo  '<option selected value="'.$authorid.'">'.$authorid.'</option> ';
            
            
            while($row = $result11->fetch_assoc()) {
             
              
              echo  '<option value="'.$row['nmofwork'].'">'.$row['nmofwork'].'</option> ';
              
             
            }
            echo"</select> </div>";
          } else {
            echo "0 results";
          }
          
              echo  '
          </div>*/
          echo '
          <div class="inputc" style="display: -webkit-inline-box;">
              <div class="input1" style="margin: 4px;">Fund released:</div>
          
              
              <input type="radio" class="input2" name="choice" style=" width: 20px;  height: 20px;" value="yes">Yes
              <input type="radio" checked class="input2" name="choice" style=" width: 20px;  height: 20px;" value="no">No
          
              
            </div>
            <div class="inputc" style="display: -webkit-inline-box;">
              <div class="input1" style="margin: 4px;">Engineer attended:</div>
          
              
              <input type="radio" class="input2" name="choice2" style=" width: 20px;  height: 20px;" value="yes">Yes
              <input type="radio" checked class="input2" name="choice2" style=" width: 20px;  height: 20px;" value="no">No
          
              
            </div>
            
              <div >
            <input type="submit" class="butt" value="Update" name="deletbutt2">
            <input type="submit" class="butt" value="Delete" name="deletbutt">
                      </div>
        </div>
          
                
              
           
            ';
            $name = $_GET['ewname1'];
           // $query29 = "select date from dates where projctname = '". $name. "' ";
           // $result = $con->query($query29);
            //if ($result->num_rows > 0) {
              // output data of each row

              //echo' <div class="inputc"><div class="input1" style="margin: 4px;">Select date to change:</div><select  name="enddate56"  class="input2">';
             // while($row = $result->fetch_assoc()) {
               
                
                //echo  '<option value="'.$row['date'].'">'.$row['date'].'</option> ';
                
               
              //}
             // echo"</select></div>";
            //} else {
             // echo "0 results";
            //}
            
          //}
        
       //   echo '</select></div>';
         // echo' <div class="inputc">
               // <div class="input1">Enter new date:</div>
               // <input type="date" required class="input2" name="enddate5" placeholder="date">
              //</div></div></form>';
    
        
         
              
      }
    }
          
    else{
      echo "0 Results";
    }
    
    
  }
       /* if(isset($_GET['updatebutt'])){
            $name = $_GET['prjnam'];
            
            
            
            
             // $dat3 = $_GET['enddate5'];
             //$dat = $_GET['enddate56'];
              
            $locnm = $_GET['locidd'];
            $loi = $_GET['locnam'];
            $loi1 = $_GET['locnam1'];
    
            $pri = $_GET['espri'];
            $veh = $_GET['vehu'];
           
            $worn = $_GET['selty'];
    
            $sel = $_GET['wornmt'];
            $choi = $_GET['choice'];
            $ex1 = $_GET['exp1'];
            $nam1 = $_GET['amd1'];
    
            $dex2 = $_GET['exp2'];
            $am2 = $_GET['amd2'];
        $up = "update workdata set locname='".$locnm."',locid1='".$loi."',locid2='".$loi1."',worprice='".$pri."',empnames='".$sel."',wortypeee='".$worn."',fundrel='".$choi."',othrex1='".$ex1."',otherx2='".$dex2."',othram1='".$nam1."',othram2='".$am2."',vehname='".$veh."' where namewor ='".$_GET['prjnam']."'";
        
        
        $io = "update dates set date = '".$dat3."' where projctname ='".$_GET['prjnam']."' and date = '".$dat."'";
      
        mysqli_query($con,$up)or die(mysqli_error($con));
        mysqli_query($con,$io)or die(mysqli_error($con));
        echo "<script type='text/javascript'>alert('Updated succcessfully');</script>";
        }
      */
      
          if(isset($_GET['deletbutt'])){
        $del = "delete  from workdata where namewor ='".$_GET['prjnam']."'";
        $del4 = "delete  from empat where proname ='".$_GET['prjnam']."'";
        $del2 = "delete  from dates where projctname ='".$_GET['prjnam']."'";
        mysqli_query($con,$del)or die(mysqli_error($con));
        mysqli_query($con,$del4)or die(mysqli_error($con));
        mysqli_query($con,$del2)or die(mysqli_error($con));
        echo "<script type='text/javascript'>alert('Deleted succcessfully');</script>";
          }
          
         
        
          if(isset($_GET['deletbutt2'])){
            /*echo 'asdasds';
            $dat3 = $_GET['enddate5'];
    $dat = $_GET['enddate56'];
    $name = $_GET['prjnam'];
    echo $dat3;
    echo'<br>';
    echo $dat;
    echo $name;*/
    $name = $_GET['prjnam'];
            
            
            
            
             // $dat3 = $_GET['enddate5'];
             //$dat = $_GET['enddate56'];
              
            $locnm = $_GET['locidd'];
            $loi = $_GET['locnam'];
            $loi1 = $_GET['locnam1'];
            $emplloo = $_GET['empol'];
            
    
            
            $veh = $_GET['vehu'];
            $totx = $_GET['totexpp'];
            
           
            //$worn = $_GET['selty'];
    
           // $sel = $_GET['wornmt'];
            $choi = $_GET['choice'];
            $choi2 = $_GET['choice2'];
           // $ex1 = $_GET['exp1'];
           // $nam1 = $_GET['amd1'];
    
           // $dex2 = $_GET['exp2'];
           // $am2 = $_GET['amd2'];
           // $as = "select pricee from workdetails where nmofwork = '".$worn."'";
        //$re = mysqli_query($con,$as);
        //$row = $re->fetch_assoc();  
//$test= $row['pricee'];
//$totam = $nam1 + $am2;
        $up = "update workdata set locname='".$locnm."',locid1='".$loi."',empnames='".$emplloo."',locid2='".$loi1."',fundrel='".$choi."',engn='".$choi2."',vehname='".$veh."',texpro='".$totx."' where namewor ='".$_GET['prjnam']."'";
        
        
        //$io = "update dates set date = '".$dat3."',totexp='".$totam."' where projctname ='".$_GET['prjnam']."' and date = '".$dat."'";
      
        mysqli_query($con,$up)or die(mysqli_error($con));
        //mysqli_query($con,$io)or die(mysqli_error($con));
        echo "<script type='text/javascript'>alert('Updated succcessfully');</script>";
          }
             
        
        ?>
    
            </div>
            
            <div class="col-sm-6">
                <div class="butt"   onclick="openfor()">Show work list</div>
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
            