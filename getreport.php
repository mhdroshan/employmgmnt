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
<title>Report page</title>
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
        

<style type="text/css">



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
<div class="container" style="width:100%;">
<div class="page-header detailss" style="font-family: 'Roboto', sans-serif;font-size: 34px;">Report page</div>
                <div class="detailss">Get employee attendance/salary</div>
<div class="row">
<div class="col-sm-12">

        <form name="myforrm" method="GET" action="getreport.php">
                <div class="inputc">
                                <div class="input1">Select employees name:</div>

                                <?php
                $con=mysqli_connect("localhost","root","","aslampro") or die("not connected");
                $query2 = "select ename from empdata ";
                $result = $con->query($query2);
                if ($result->num_rows > 0) {
                  // output data of each row
                  echo'<select name="emppnn"   class="input2" >';
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
                                <div class="input1">Enter from date:</div>
                                <input required type="date" class="input2" name="datefrom5" placeholder="date">
                        </div>
                        <div class="inputc">
                                <div  class="input1">Enter to date:</div>
                                <input required type="date" class="input2" name="dateto5" placeholder="date">
                        </div>
                        <input  style="width: 30%;" value="Get" class="butt" type="submit" name="cretesub85">
        </form>
</div>
<div id="printablediv9">
<?php
if(isset($_GET['cretesub85'])){
        $from = $_GET['datefrom5'];
        $cc = 0;
        $ad =0;
        $sa = 0;
        $sd = 0;
       // $getbal = 0;
        $ii =0;
        $emnm = $_GET['emppnn'];
        
        $to = $_GET['dateto5'];
$gg = "select * from empdata where ename = '".$emnm."' ";
$resd = $con->query($gg);
if ($resd->num_rows > 0) {
        
        while($rowp = $resd->fetch_assoc()){
                $wag = $rowp['dailywage'];
                //echo $wag;

        $ql="select * from empat where date between '$from' and '$to' and empname = '".$emnm."'  order by date asc ";

        if($res = mysqli_query($con,$ql))
{//echo "dasdass";
        while($row = $res->fetch_assoc()){
                //

                $cc++;
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

                

                

        </div>
</div>
';


        }
        echo'
        <div class="inputc">
                <div class="input34">Days present:</div>
                <label  >'.$cc.'</label>
                </div>
                <div class="inputc">
                <div class="input34">Daily wage:</div>
                <label  >'.$wag.'</label>
                </div>
                
                <div class="inputc">
                <div class="input34">Salary for the selected period:</div>
                <label  >'.$wag*$cc.'</label>
                </div>
                
                
                ';
               // $getbal = $wag*$cc- $ad;
                
               
                //echo $ad;            
}
else{
        echo'0 results';
}
//echo $ad;
}

}
$oo = "select * from empadv where empname = '".$emnm."' and date between '$from' and '$to'";
        $fullbal = 0;
        if($resa = mysqli_query($con,$oo))
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

$sa = $wag*$cc;
$sd = $sa - $fullbal;
echo '
                <div class="inputc">
                <div class="input34">Balance paiment:</div>
                <label  >'.$sd.'</label>
                </div>';
 
}
?>

</div>

</div>


        
<div class="detailss">Report 1</div>
<div class="row">
<div class="col-sm-12">
        <form name="myform" method="GET" action="">
        <div class="inputc">
                <div class="input1">Enter from date:</div>
                <input type="date" class="input2" name="datefrom" placeholder="date">
        </div>
        <div class="inputc">
                <div class="input1">Enter to date:</div>
                <input type="date" class="input2" name="dateto" placeholder="date">
        </div>
        <input   style="width: 30%;" value="Get" class="butt" type="submit" name="cretesub8">

</form>
</div>
<div id="printablediv">
<?php


$con=mysqli_connect("localhost","root","","aslampro") or die("not connected");
if(isset($_GET['cretesub8'])){
        $from = $_GET['datefrom'];
    $to = $_GET['dateto'];
    $ql="select * from dates where date between '$from' and '$to'  order by date asc";
if($res = mysqli_query($con,$ql))
{
        while($row = mysqli_fetch_assoc($res)){
                $test = $row['projctname'];
                $kl = "select * from workdata where namewor ='". $test. "' order by stardate asc ";
                $result3 = $con->query($kl);
                if ($result3->num_rows > 0) {
                        
                        while($row2 = $result3->fetch_assoc())
                        {
echo '<div style="      margin: 0px 10px;   overflow-x: auto;
width: 100%;" >
        
        <div style="border: none;
        border-bottom: 1px dashed black;display: -webkit-box;" class="col-sm-12">


<div class="inputc">
<div style="color:#FF5733;" class="input34">Date:</div>
<label  >'.$row['date'].'</label>
</div>

<div class="inputc">
<div   class="input34">Site name:</div>
<label  >'.$row2['locname'].'</label>
</div>

<div class="inputc">
<div   class="input34">Site id 1:</div>
<label  >'.$row2['locid1'].'</label>
</div>

<div class="inputc">
<div   class="input34">Site id 2:</div>
<label  >'.$row2['locid2'].'</label>
</div>

<div class="inputc">
<div   class="input34">Type of work:</div>
<label  >'.$row2['wortypeee'].'</label>
</div>

<div class="inputc">
<div   class="input34">Price of work:</div>
<label  >'.$row2['worprice'].'</label>
</div>
<div class="inputc">
<div  class="input34">Expence (day):</div>
<label  >'.$row['totexp'].'</label>
</div>
<div class="inputc">
<div   class="input34">Engineer:</div>
<label  >'.$row2['engn'].'</label>
</div>

<div class="inputc">
<div   class="input34">Fund released:</div>
<label  >'.$row2['fundrel'].'</label>
</div>


</div>
</div>

';
                        }

                }
        }
}
else{
        echo "0 results";   
}
}

?>
</div>




</div>
<div style="width:20%; display:none;   background: #337ab7;" id="printer" onclick="javascript:printDiv('printablediv')" class="butt"><i style="font-size: 35px;" class="material-icons">print</i><div>Print</div></div>


<div class="detailss">Report 2</div>
<div class="row">
<div class="col-sm-12">
        <form name="myform2" method="GET" action="getreport.php">
        <div class="inputc">
                <div class="input1">Enter from date:</div>
                <input type="date" class="input2" name="datefrom1" placeholder="date">
        </div>
        <div class="inputc">
                <div class="input1">Enter to date:</div>
                <input type="date" class="input2" name="dateto2" placeholder="date">
        </div>
        <input  style="width: 30%;" value="Get" class="butt" type="submit" name="cretesub83">

</form>
</div>
<div id="printablediv2">
<?php



if(isset($_GET['cretesub83'])){
        
       
        $from = $_GET['datefrom1'];
        $allexp =0;
        $allbal =0;
        $totprc = 0;
       // $bol =0;
        
    $to = $_GET['dateto2'];
    //$ql="select * from dates where date between '$from' and '$to'";
    $qlt="select * from workdata where stardate between '$from' and '$to'  order by stardate asc";     
    
    //$rowq = mysqli_fetch_assoc($resi);
    //$test8 = $rowq['projctname'];
   // $qli =  "select * from workdata where namewor ='". $test8. "' ";
    
  if($resi = mysqli_query($con,$qlt)){
   

   while($rowf = mysqli_fetch_assoc($resi))
   {

        $totprc += $rowf['worprice'];
        $allexp +=$rowf['texpro'];
        $allbal +=$rowf['bal'];
                   // $test = $rowf['projctname'];
                
               // $qli =  "select * from workdata where namewor ='". $test. "' ";
               // $myresl = $con->query($qli);
                //if ($myresl->num_rows > 0) {
                        
                       // while($rowq = $myresl->fetch_assoc())
                       
                        {
                                
                                
echo '<div style="     margin:0px 10px;    overflow-x: auto;
width: 100%;" >
        
<div style="border: none;
border-bottom: 1px dashed black;display: -webkit-box;" class="col-sm-12">



<div class="inputc">
<div style="color:#FF5733;" class="input34">Start date:</div>
<label  >'.$rowf['stardate'].'</label>
</div>
<div class="inputc">
<div style="color:#337ab7;" class="input34">End date:</div>
<label  >'.$rowf['enddate'].'</label>
</div>
<div class="inputc">
<div class="input34">No of days:</div>
<label  >'.$rowf['ndys'].'</label>
</div>
<div class="inputc">
<div   class="input34">Work name:</div>
<label  >'.$rowf['namewor'].'</label>
</div>
<div class="inputc">
<div   class="input34">Site name:</div>
<label  >'.$rowf['locname'].'</label>
</div>

<div class="inputc">
<div   class="input34">Site id 1:</div>
<label  >'.$rowf['locid1'].'</label>
</div>




<div class="inputc">
<div   class="input34">Total expence:</div>
<label  >'.$rowf['texpro'].'</label>
</div>

<div class="inputc">
<div   class="input34">Work price:</div>
<label  >'.$rowf['worprice'].'</label>
</div>

<div class="inputc">
<div   class="input34">Balance:</div>
<label  >'.$rowf['bal'].'</label>
</div>


';
//$bol =$bol- $row['totexp']; 
echo'
<div class="inputc">
<div   class="input34">Fund released:</div>
<label  >'.$rowf['fundrel'].'</label>
</div>






</div>
</div>



';

      
                   
        
                
                //$bol =$bol- $row['totexp'];  
                
        }
        //$wp = 
}




}

echo'<div class="inputc">
<div   class="input34">Total expence:</div>
<label  >'.$allexp.'</label>
</div>
<div class="inputc">
<div   class="input34">Total price:</div>
<label  >'.$totprc.'</label>
</div>


<div class="inputc">
<div   class="input34">Estimated profit:</div>
<label  >'.$allbal.'</label>
</div>


';
//$bol =$bol- $row['totexp'];
}
?>

</div>
</div>
<div style="width:20%;    background: #337ab7;" onclick="javascript:printDiv('printablediv2')" class="butt"><i style="font-size: 35px;" class="material-icons">print</i><div>Print</div></div>
</div>



        
        </body>
        
        </html>