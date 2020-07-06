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
<title>Partners page</title>
<script> function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<html><head><title></title></head><body>" + 
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;

          
        }
        </script>
<style>
        
#display {
	
        display: block;
    margin: 14px 1px;
    height: 42px;
    width: 191px;
    padding: 0 10px;
    border-radius: 4px;
    border-top: 2px solid #C1C1C1;
    border-right: 2px solid #C1C1C1;
    border-bottom: 2px solid #FFF;
    border-left: 2px solid #FFF;
    background-color: #FFF;
    box-shadow: inset 0px 0px 10px #030303, inset 0px -20px 1px rgba(150, 150, 150, .2);
    font-size: 28px;
    color: #666;
    text-align: right;
    font-weight: 400;
}
button, input, select, textarea {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}

.button {
	display: inline-block;
	margin: 2px;
	width: 42px;
	height: 42px;
	font-size: 16px;
	font-weight: bold;
	border-radius: 4px;
}

.mathButtons {
	margin: 2px 2px 6px 2px;
	color: #FFF;
	text-shadow: -1px -1px 0px #44006F;
	background-color: #434343;
	border-top: 2px solid #C1C1C1;
	border-right: 2px solid #C1C1C1;
	border-bottom: 2px solid #181818;
	border-left: 2px solid #181818;
	box-shadow: 0px 0px 2px #030303, inset 0px -20px 1px #2E2E2E;
}

.digits {
	color: #181818;
	text-shadow: 1px 1px 0px #FFF;
	background-color: #EBEBEB;
	border-top: 2px solid #FFF;
	border-right: 2px solid #FFF;
	border-bottom: 2px solid #C1C1C1;
	border-left: 2px solid #C1C1C1;
	border-radius: 4px;
	box-shadow: 0px 0px 2px #030303, inset 0px -20px 1px #DCDCDC;
}

.digits:hover,
.mathButtons:hover,
#clearButton:hover {
	background-color: #FFBA75;
	box-shadow: 0px 0px 2px #FFBA75, inset 0px -20px 1px #FF8000;
	border-top: 2px solid #FFF;
	border-right: 2px solid #FFF;
	border-bottom: 2px solid #AE5700;
	border-left: 2px solid #AE5700;
}

#clearButton {
	color: #FFF;
	text-shadow: -1px -1px 0px #44006F;
	background-color: #D20000;
	border-top: 2px solid #FF8484;
	border-right: 2px solid #FF8484;
	border-bottom: 2px solid #800000;
	border-left: 2px solid #800000;
	box-shadow: 0px 0px 2px #030303, inset 0px -20px 1px #B00000;
}
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
    right: 30px;
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
.homb1{
    padding: 10px;
    background: #008000;
    color: white;
    text-align: center;
    cursor: pointer;
    margin: 12px;
    position: sticky;
    top: 20px;
    width:fit-content;
    right: 40px;
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
.homb1:hover{
    background: white;
    letter-spacing: 1.3px;
    color: #008000;
}
  </style>
   <script type="text/javascript">
   function openfor(){
        var x = document.getElementById("Mydiv");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
    }</script>
</head>
<body>
<a href="main.html" style="color: white;"><div class="homb"><i class="material-icons">home</i></div></a>
<div onclick="openfor()" class="homb1"><i class="material-icons">dialpad</i></div>
<div class="container" style="width:100%;">
<div class="page-header detailss" style="font-family: 'Roboto', sans-serif;font-size: 34px;">Partners page</div>
                <div class="detailss">Get partner salary</div>
<div class="row">
<div class="col-sm-6">

        <form name="myforrm" method="GET" action="profitpage.php">
                <div class="inputc">
                                <div class="input1">Select employees name:</div>

                               
                
                
                  <select name="emppnn"  id="myOption" class="input2" >
                  
                   
                    
                  <option value="Aslam">Aslam</option>
                    
              <option value="Jinu">Jinu</option>
                   
                  
                  </select>
                
              
                     
                </div>
                <div class="inputc">
                                <div class="input1">Enter from date:</div>
                                <input type="date" class="input2" name="datefrom5" placeholder="date">
                        </div>
                        <div class="inputc">
                                <div class="input1">Enter to date:</div>
                                <input type="date" class="input2" name="dateto5" placeholder="date">
                        </div>
                        <input style="    width: 50%"  value="Get" class="butt" type="submit" name="cretesub85">
        </form>
</div>
<div class="col-sm-6">

<div id="Mydiv" style="display:none;">
        
                <fieldset id="container">
                        <form name="calculator">
        
                                <input id="display" type="text" name="display" readonly>
        
                                <input class="button digits" type="button" value="7" onclick="calculator.display.value += '7'">
                                <input class="button digits" type="button" value="8" onclick="calculator.display.value += '8'">
                                <input class="button digits" type="button" value="9" onclick="calculator.display.value += '9'">
                                <input class="button mathButtons" type="button" value="+" onclick="calculator.display.value += ' + '">
                                <br>
                                <input class="button digits" type="button" value="4" onclick="calculator.display.value += '4'">
                                <input class="button digits" type="button" value="5" onclick="calculator.display.value += '5'">
                                <input class="button digits" type="button" value="6" onclick="calculator.display.value += '6'">
                                <input class="button mathButtons" type="button" value="-" onclick="calculator.display.value += ' - '">
                                <br>
                                <input class="button digits" type="button" value="1" onclick="calculator.display.value += '1'">
                                <input class="button digits" type="button" value="2" onclick="calculator.display.value += '2'">
                                <input class="button digits" type="button" value="3" onclick="calculator.display.value += '3'">
                                <input class="button mathButtons" type="button" value="x" onclick="calculator.display.value += ' * '">
                                <br>
                                <input id="clearButton" class="button" type="button" value="C" onclick="calculator.display.value = ''">
                                <input class="button digits" type="button" value="0" onclick="calculator.display.value += '0'">
                                <input class="button mathButtons" type="button" value="=" onclick="calculator.display.value = eval(calculator.display.value)">
                                <input class="button mathButtons" type="button" value="/" onclick="calculator.display.value += ' / '">
                        </form>
                </fieldset>
       
        
</div>

</div>

<?php
if(isset($_GET['cretesub85'])){
  $con=mysqli_connect("localhost","root","","aslampro") or die("not connected");
  $balt = 0;
  $tex = 0;
  $allb = 0;
  $fullbal = 0;
  $thr = 0;
  $ad =0;
        $sa = 0;
        $sd = 0;
  $prov = 0;
  $ii =0;
  $cc = 0;
 // $proff = 0;

  $from = $_GET['datefrom5'];
  $to = $_GET['dateto5'];
  $emnm = $_GET['emppnn'];

  $ql="select * from empat where date between '$from' and '$to' and empname = '".$emnm."'";

        if($res = mysqli_query($con,$ql))
        {
        while($row = mysqli_fetch_assoc($res)){
$dd = "select * from workdata where stardate = '".$row['date']."'  ORDER BY stardate ASC";
$re1 = mysqli_query($con,$dd);
$redd = mysqli_fetch_assoc($re1);
//echo $redd['bal'];
$balt += $redd['worprice'];
$tex += $redd['texpro'];
$allb +=$redd['bal'];
//$prov =  - $redd['texpro'];
//echo $prov;
$fk = $redd['bal'] * 30 /100;

$thr += $fk;

                $cc++;
                echo '<div id="printablediv">';
                echo '<div style="      margin: 0px 10px;   overflow-x: auto;
width: 100%;" >
        
        <div style="display: -webkit-box;" class="col-sm-12">


<div class="inputc">
<div style="color:#FF5733;" class="input34">Date:</div>
<label  >'.$row['date'].'</label>
</div>
<div class="inputc">
                <div class="input34">Employee name:</div>
                <label  >'.$row['empname'].'</label>
                </div>

                <div class="inputc">
                <div class="input34">Work attended:</div>
                <label  >'.$row['proname'].'</label>
                </div>
                <div class="inputc">
                <div class="input34">Work price:</div>
                <label  >'.$redd['worprice'].'</label>
                </div>
                

                <div class="inputc">
                <div class="input34">Total expence:</div>
                <label  >'.$redd['texpro'].'</label>
                </div>
                <div class="inputc">
                <div class="input34">Profit:</div>
                <label  >'.$redd['bal'].'</label>
                </div>
                <div class="inputc">
                <div class="input34">Engineer:</div>
                <label  >'.$redd['engn'].'</label>
                </div>
                <div class="inputc">
                <div class="input34">Profit share (30%):</div>
                <label  >'.$fk.'</label>
                </div>
                
                

                

                

        </div>
</div>
';


        }
       // echo $row['date'];
        //echo 'sdasdas';
        echo'
        <div class="inputc">
                <div class="input34">Works present:</div>
                <label  >'.$cc.'</label>
                </div>';


        }

      
      else{
        echo '0 results';
      }
      echo '
      <div class="inputc">
      <div class="input34">Total work price:</div>
      <label  >'.$balt.'</label>
      </div>
      <div class="inputc">
      <div class="input34">Total expence:</div>
      <label  >'.$tex.'</label>
      </div>
      ';
      //$proff =$balt-$tex;
      echo'
      <div class="inputc">
      <div class="input34">Estimated profit:</div>
      <div id="espro" style="font-weight: 700;" >'.$allb.'</div>
      </div>
      
      

      <div class="inputc">
      <div class="input34">Estimated Share:</div>
      <div style="font-weight: 700;"  >'.$thr.'</div>
      </div>
<script type = "text/javascript">
getper();
</script>

      ';
$myname = $_GET['emppnn'];

      $vv ="select * from empadv where empname ='".$myname."' and date between '$from' and '$to' ";
      
      if($resa = mysqli_query($con,$vv))
{
      echo '<div  style="display: -webkit-box;    overflow-x: auto;">';
      while($rowzz = mysqli_fetch_assoc($resa)){
$ii += 1; 
      $ad = $rowzz['amount'];
      $av = $rowzz['date'];
      //echo $ad;
      
      //echo $av;
      echo '<div style="border: none;
      border-bottom: 1px solid black;border-top: 1px solid black;    margin-left: 8px;" ><div class="inputc">
      <div class="input34">Advance bought: '.$ii.' th time</div>
      
      <p>Amount '.$ii.':</p>
      <label  >'.$ad.'</label>
      <br>
      <p>Date :</p>
      <label  >'.$av.'</label>
      </div></div>';
      $fullbal +=$ad;
      }
      echo '</div>';
      
}
echo'
<div class="inputc">
              <div class="input34">Advance total:</div>
              <label  >'.$fullbal.'</label>
              </div>
';

    }
 //echo '</div>';
?>

</div>
<div style="width:30%;    background: #337ab7;" onclick="javascript:printDiv('printablediv')" class="butt"><i style="font-size: 35px;" class="material-icons">print</i><div>Print</div></div>
</div>

</div>

</body>
</html>
