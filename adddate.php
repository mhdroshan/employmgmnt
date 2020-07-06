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
<title>Add dates</title>
<script type="text/javascript">
function getnameee2() {

var str=" ",i;

for (i=0;i<myForm.mysel.options.length;i++) {
    if (myForm.mysel.options[i].selected) {
        str = str + myForm.mysel.options[i].value + "-";
    }
}
var display2 = document.getElementById('show2');

str = str.trim();

display2.value= str;
//alert("Options selected are " + str);
}
function getnameee1() {

var str=" ",i;

for (i=0;i<myForm.employnm.options.length;i++) {
    if (myForm.employnm.options[i].selected) {
        str = str + myForm.employnm.options[i].value + "-";
    }
}
var display2 = document.getElementById('show1');

str = str.trim();

display2.value= str;
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
</head>
<body>
<script>
function caallU(){
  var veh1= document.getElementById("show1");
                var txt = veh1.value;
                txt = txt.trim();
                var ppl = txt.split("-");
                var nom = txt.match(/-/gi).length;
                for(i=0;i<nom;i++)
                {
                  var x = document.getElementById("mysel");
  var option = document.createElement("option");
  option.text = ppl[i];
  x.add(option);
                }
                

        }</script>

<a href="main.html" style="color: white;"><div class="homb"><i class="material-icons">home</i></div></a>
<div class="container">
        <div class="page-header detailss" style="font-family: 'Roboto', sans-serif;font-size: 34px;">Add dates</div>
        
        <form name="myForm" method="get" action="adddate.php">
        <div class="row">
        <div class="col-sm-6">
                <div class="inputc">
                <div class="input34">Select project name:</div>
                <?php
                $con=mysqli_connect("localhost","root","","aslampro") or die("not connected");
                $query2 = "select namewor from workdata order by stardate ASC";
                $result = $con->query($query2);
                if ($result->num_rows > 0) {
                  // output data of each row
                  echo'<select name="emname"   class="input2" >';
                  while($row = $result->fetch_assoc()) {
                   
                    
                    echo  '<option value="'.$row['namewor'].'">'.$row['namewor'].'</option> ';
                    
                   
                  }
                  echo"</select>";
                } else {
                  echo "0 results";
                }
                
                ?>

                
               
              </div>
              <div class="inputc">
                    <div class="input1">Add date:</div>
                    <input type="date" required class="input2"  name="emtyp" placeholder="work price">
                  </div>
                  <div class="inputc">
                  <div class="input1">Add total expence:</div>
                    <input type="number" class="input2" value ="0"  name="adtox" placeholder="total expence of the day">
                  </div>

                  <div class="inputc">
                <div class="input34">Select employees:</div>
                <?php
                $con=mysqli_connect("localhost","root","","aslampro") or die("not connected");
                $query2 = "select ename from empdata order by ename ASC";
                $result = $con->query($query2);
                if ($result->num_rows > 0) {
                  // output data of each row
                  echo'<select onclick="getnameee1()" id="employnm"  multiple  class="input2" >';
                  while($row = $result->fetch_assoc()) {
                   
                    
                    echo  '<option value="'.$row['ename'].'">'.$row['ename'].'</option> ';
                    
                   
                  }
                  echo"</select>";
                } else {
                  echo "0 results";
                }
                
                ?>

                
               
              </div>
              <div class="col-sm-3 inputc"style="width: auto;/* top: 30px; */margin-top: 20px;"> 
          
          <textarea class="input2" name="txtarea"  style="height: 123px;" type="text" placeholder="selected employees" id="show1"></textarea>

        </div>

                  
                  <?php

                  $con=mysqli_connect("localhost","root","","aslampro") or die("not connected");
                  
                  
                  if(isset($_GET['cretesub22'])){
                    //echo "asdasdsadads";
                    $cvo = 0;
                          $name = $_GET['emname'];
                          
                      $typ = $_GET['emtyp'];
                      $ex = $_GET['adtox'];
                      
                      $we = "select * from workdata where namewor = '".$name."'";
                      if($res = mysqli_query($con,$we))
{
        while($row = mysqli_fetch_assoc($res)){
          //$bal2 = 0;
          $bal2  =  $row['bal'] - $ex;
          $nday = +$row['ndys'] + 1;
          $sel = $_GET['wornmt'];
          $txta = $_GET['txtarea'];
//$sel = $row['sel1'];
$sl2 =rtrim($sel);
    $sl3 =rtrim($txta);
$sl=explode("-",$sel);
$sl5=explode("-",$txta);
$acou=substr_count($sel, '-');
$acou2=substr_count($txta, '-');
$ac= $acou;
$ac2= $acou2;
for($i =0;$i < $ac;$i++){

  $fl = "select * from empdata where ename='".$sl[$i]."'";
  $rqq = mysqli_query($con,$fl)or die(mysqli_error($con));
          $rot = $rqq->fetch_assoc();  
  
  $cvo += $rot['dailywage'];


  


 // echo $sl[$i];
}

for($i =0;$i < $ac2;$i++){
  $dd = "replace into empat(empname,proname,date)values('$sl5[$i]','$name','$typ')";
  mysqli_query($con,$dd)or die(mysqli_error($con));
  
  }
$exx = +$row['texpro'] + +$ex + +$cvo;
//echo $cvo;

          $ww = "update workdata set bal ='".$bal2."',enddate='".$typ."',texpro = '".$exx."',ndys='".$nday."' where namewor = '".$name."' ";
          mysqli_query($con,$ww)or die(mysqli_error($con));

        }
      }


                    
                    $query = "replace into dates(projctname,date,totexp)values('$name','$typ','$ex')";
                    mysqli_query($con,$query);
                   echo "<script type='text/javascript'>alert('Inserted succcessfully');</script>";
                    
                  }
                  
                    ?>
</div>
<div class="col-sm-6">
    
        <div class="butt"   onclick="openfor()">Show project list</div>
        <div id="Mydiv" style="display:none;">
        <ul style="height:300px;">
        <?php
        
          
        
        
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
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Select employee names to add wage expence</h4>
        </div>
        <div class="modal-body">
        <select onclick="getnameee2()" class="input2" multiple id="mysel" name=""> </select>
        <textarea class="input2"  name="wornmt" style="height: 123px;" type="text" placeholder="selected employees" id="show2"></textarea>
        
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-default"  name="cretesub22" value="Save">
        </div>
      </div>
      
    </div>
    
      </div>
      </form>
    <button type="button" style="width: 50%" onclick="caallU();"  class="butt" data-toggle="modal" data-target="#myModal"  >Submit</button>
</div>
</div>
</body>
</head>
</html>