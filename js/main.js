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
      
    function openfor(){
        var x = document.getElementById("Mydiv");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
    }

    function openfor2(){
        var x = document.getElementById("Mydiv2");
        
  if (x.style.display === "none") {
    x.style.display = "block";
    document.getElementById("getff").focus();
  } else {
    x.style.display = "none";
  }
    }
    function mysho(){
        var x = document.getElementById("myOption3");
      x.style.display = "block";
        }

       
          function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<html><head><title></title></head><body >" + 
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;

          
        }
        function amtchg(){
          var am1= document.getElementById('ammm1');
          var am2= document.getElementById('ammm2');
          var tot= document.getElementById('tottxp');
          if(am1.value==""||am2.value==""){
            tot.value="";
          }
          else{
            var tott = +am1.value + +am2.value;
          tot.value = tott;
          }
        }
        function getper(){
          var am1= document.getElementById('espro');
          var am2= document.getElementById('mpro');
          var per= document.getElementById('perc');
          am2.value = am1.value *per.value/100;
        
        }


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
      }