<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/main.css">
<script src="js/main.js"></script>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
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
  <script type="text/javascript">



function amtchg(){
  var am1= document.getElementById('ammm1');
  var am2= document.getElementById('ammm2');
  var tot= document.getElementById('tottxp');
  if(am1.value==""||am2.value==""){
    tot.value="";
  }
  else{
     
  tot.innerHTML = +am1.value + +am2.value;
  }
}
function checkalert(){
  var retVal = confirm("Do you want to continue ?");
               if( retVal == true ) {
                  document.write ("User wants to continue!");
                  return 1;
               } else {
                  document.write ("User does not want to continue!");
                  
                  return 0;
               }
}
function getnameee() {

  var str=" ",i;
    
    for (i=0;i<myForm.myOption.options.length;i++) {
        if (myForm.myOption.options[i].selected) {
            str = str + myForm.myOption.options[i].value + "-";
        }
    }
    
    var display = document.getElementById('show1');
    str = str.trim();
    display.value= str;
    
//alert("Options selected are " + str);
}

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


    </script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto|Source+Sans+Pro&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<title>Create page</title>

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
  <div class="page-header" style="font-family: 'Roboto', sans-serif;font-size: 34px;">Project details</div>
  <form name="myForm" method="GET" action="createpage.php">
  <div class="row">
  <div class="col-sm-6">
    
        <div class="inputc">
          <div class="input1">Enter work name:</div>
          <input type="text" class="input2" required name="ewname" placeholder="work name">
        </div>
        <div class="inputc">
            <div class="input1">Enter date:</div>
            <input type="date" class="input2" name="endate" placeholder="date">
          </div>
          <div class="inputc">
              <div class="input1">Enter location name:</div>
              <input type="text" class="input2" name="locidd" placeholder="location name">
            </div>
            <div class="inputc">
                <div class="input1">Enter location id 1:</div>
                <input type="text" class="input2" name="locnam" placeholder="location id 1">
              </div>
              <div class="inputc">
                <div class="input1">Enter location id 2:</div>
                <input type="text" class="input2" name="locnam1" placeholder="location id 2">
              </div>
              <div class="inputc" >
      <div class="input1" >Other expenses:</div>
  
      
      <input name="exp1" class="input2" style="
      margin: 5px 0px 3px 0px;
  " type="text" placeholder="Expense name 1" >
      <input name="amd1" class="input2" style="
      margin: 3px 0px 12px 0px;
  " type="number" oninput="amtchg()" id="ammm1" value="0" placeholder="Amount 1" ><br>
      <input name="exp2" class="input2" style="
      margin: 5px 0px 3px 0px;
  " type="text" placeholder="Expense name 2" >
      <input oninput="amtchg()" id="ammm2" value="0" name="amd2" class="input2" style="
      margin: 3px 0px 10px 0px;
  " type="number" placeholder="Amount 2" >  
      
    </div>
    
        <div class="inputc">
        <div class="input2"  style="text-align: center;
    width: inherit;" id="tottxp">Total expence</div>
    
</div>
      
      
      </div>
      <div class="col-sm-6">
        <div class="row" style="margin-bottom: 15px;"><div class="col-sm-3"style="width: auto">
            <div class="inputc">
                <div class="input1">Select employees:</div>
                <?php
$con=mysqli_connect("localhost","root","","aslampro") or die("not connected");
$query2 = "select ename from empdata";
$result = $con->query($query2);
if ($result->num_rows > 0) {
  // output data of each row
  echo'<select  onchange="getnameee()" id="myOption" class="input2" multiple>';
  while($row = $result->fetch_assoc()) {
   
    
    echo  '<option value="'.$row['ename'].'">'.$row['ename'].'</option> ';
    
   
  }
  echo"</select>";
} else {
  echo "0 results";
}
?>
              </div>
        </div>
        
        <div class="col-sm-3 inputc"style="width: auto;/* top: 30px; */margin-top: 20px;"> 
          
          <textarea class="input2" name="txtarea"  style="height: 123px;" type="text" placeholder="selected employees" id="show1"></textarea>

        </div></div>
<div class="row">
    <div class="col-sm-3 " style="width: auto"><div class="inputc" >
        <div class="input1">Select work type:</div>
        <?php
$con=mysqli_connect("localhost","root","","aslampro") or die("not connected");
$query25 = "select nmofwork from workdetails";
$result11 = $con->query($query25);
if ($result11->num_rows > 0) {
  // output data of each row
  echo'<select name="selty" id="myOption3" class="input2">';
  while($row = $result11->fetch_assoc()) {
   
    
    echo  '<option value="'.$row['nmofwork'].'">'.$row['nmofwork'].'</option> ';
    
   
  }
  echo"</select>";
} else {
  echo "0 results";
}
?>
      </div></div>

      
</div>
<div class="inputc" style="display: -webkit-inline-box;">
    <div class="input1" style="margin: 4px;" style="margin-right: 5px;">Fund released:</div>

    
    <input  type="radio" class="input2" name="choice" style=" width: 20px;  height: 20px;" value="yes">Yes
    <input  type="radio" checked class="input2" name="choice" style=" width: 20px;  height: 20px;" value="no">No

    
  </div>
  <div class="inputc" style="display: -webkit-inline-box;">
    <div class="input1" style="margin: 4px;" style="margin-right: 5px;">Engineer attended:</div>

    
    <input  type="radio" class="input2" name="choice2" style=" width: 20px;  height: 20px;" value="yes">Yes
    <input  type="radio" checked class="input2" name="choice2" style=" width: 20px;  height: 20px;" value="no">No

    
  </div>
  
    
    <div class="inputc">
                  <div class="input1">Vehicle used:</div>
                  <input type="text" class="input2" name="vehu"  id="mpro1" placeholder="vehicle used">
                </div>
    
    
    <?php
    $con=mysqli_connect("localhost","root","","aslampro") or die("not connected");
     
    /*if(isset($_GET['showmodel'])){
      $selr = $_GET['wornmt'];
      echo $selr;
      $vehi = $_GET['vehu'];
      $vehi = $selr;
      echo "adasd";

      echo'<script type="text/javascript">',
      'function caallUi();',
      '</script>';
     // echo "asdads";
      echo'
    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Select employee names to add wage expence</h4>
        </div>
        <div class="modal-body">';
          
           
       // $sfg = $_GET['vehu'];
        //echo $sfg;
        
       
$bb = rtrim($selr);
$slw=explode("-",$bb);
$acf=substr_count($selr, '-');
$avc= $acf;

echo'<select name="modelsel" class="input2" multiple>';
for ($i=0;$i < $avc;$i++)
{

  echo'<option value="'.$slw[$i].'">'.$slw[$i].'</option>';
}
echo'</select>';
           
          

         echo' 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" type="submit" name="submitsave" data-dismiss="modal">Save</button>
        </div>
      </div>
      
    </div></div>';
}
    */
    ?>
  </div>

    <?php

  
    
    
    if(isset($_GET['submitsave'])){
      
      $dat = $_GET['endate'];
      $locnm = $_GET['locidd'];
      $loi = $_GET['locnam'];
      $loi1 = $_GET['locnam1'];

      $texta = $_GET['txtarea'];

      
      $veh = $_GET['vehu'];
     
      $worn = $_GET['selty'];

      //$sel = $_GET['wornmt'];
      $choi = $_GET['choice'];
      $choi2 = $_GET['choice2'];
      $ex1 = $_GET['exp1'];
      $nam1 = $_GET['amd1'];

      $dex2 = $_GET['exp2'];
      $am2 = $_GET['amd2'];
    $sel = $_GET['wornmt'];
    $sl2 =rtrim($sel);
    $sl3 =rtrim($texta);
    $sl=explode("-",$sl2);
    $sl2f=explode("-",$sl3);
    $acou=substr_count($sel, '-');
    $acou2=substr_count($texta, '-');
$ac= $acou;
$ac2= $acou2;
$cvo = 0;
      $name = $_GET['ewname']; 
      $chk = "select * from workdata where namewor = '".$name."'";
      if($vb = mysqli_query($con,$chk)){
        if(mysqli_num_rows($vb) >0){
          echo "<script type='text/javascript'>
          alert('Work name already exists.!')
          </script>
          ";
        }
        else{
          for($i =0;$i < $ac;$i++){

            // echo $sl[$i];
            $fl = "select * from empdata where ename='".$sl[$i]."'";
            $rqq = mysqli_query($con,$fl)or die(mysqli_error($con));
                   $rot = $rqq->fetch_assoc();  
            
            $cvo += $rot['dailywage'];
            
            
            
            
            
            // echo $sl[$i];
            }

            for($i =0;$i < $ac2;$i++){
            $dd = "replace into empat(empname,proname,date)values('$sl2f[$i]','$name','$dat')";
            mysqli_query($con,$dd)or die(mysqli_error($con));
            
            }
                  $as = "select pricee from workdetails where nmofwork = '".$worn."'";
                  $re = mysqli_query($con,$as);
                  $row = $re->fetch_assoc();  
            $test= $row['pricee'];
            $totam = $nam1 + $am2 + $cvo;
            $test2 = $test - $totam;
            $ndy = 1;
            //$rr = "replace into workdata(worprice)values('$test') where namewor = '".$name."'";
                $qw = "replace into dates(projctname,date,totexp)values('$name','$dat','$totam')";
                $query = "replace into workdata(ndys,texpro,enddate,stardate,engn,worprice,bal,namewor,locname,locid1,locid2,empnames,wortypeee,fundrel,othrex1,otherx2,othram1,othram2,vehname)values
                ('$ndy','$totam','$dat','$dat','$choi2','$test','$test2','$name','$locnm','$loi','$loi1','$texta','$worn','$choi','$ex1','$dex2','$nam1','$am2','$veh')";
                
                
                mysqli_query($con,$query)or die(mysqli_error($con));
                mysqli_query($con,$qw)or die(mysqli_error($con));
               // mysqli_query($con,$rr)or die(mysqli_error($con));
                
               
               
                //echo "<script type='text/javascript'>alert('Inserted succcessfully');</script>";
                
                //$sl = rtrim($sl2);
                //echo $sl[0];
               // echo $sl[1];
                //echo $sl[2];
            //echo $sel;
            
            //echo $ac;
            
            
            
            echo "<script type='text/javascript'>alert('Inserted succcessfully');</script>";
            
         
          
        }
        
      }
    }

/*
        }
      }
     // if($vb->num_rows > 0){
//while($rxz = $vb ->fetch_assoc()){
  //if($name == $rxz['namewor']){
   // echo "<script type='text/javascript'>checkalert();</script>";
    //if("checkalert()" == 1){
      
  //}
  //else if("checkalert()" == 0){
  //  echo "<script type='text/javascript'>alert('Inserted dad');</script>";
 // }
    //}
//  }

//}

       
      
*/
      
        
    
      ?>
      
          
            
      
      
      
          
          
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
          <input type="submit" class="btn btn-default"  name="submitsave"  value="Save">
        </div>
      </div>
      
    </div>
    
      </div>
      </form>
    <button type="button" style="width: inherit" onclick="caallU();" style="width: inherit" class="butt" data-toggle="modal" data-target="#myModal"  name="showmodl">Submit</button>
    
</div>
</div>
    


</body>
</html>

