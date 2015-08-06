<?php   require 'import_.php';     ?>


<script type="text/javascript">

//-- total register
$(function(){
    

    $("#total_fee").click(function()
    {  
          
           var  cr1=$("#course").val();
           var  cr2=$("#course2").val();
           var  total = cr1 + " " + cr2;
           var  text_total = "(" + cr1 + ")" + "+" + "("  +  cr2  +  ")" ;
           var  res = total.split(" ");
           var  usall = parseInt( res[0]) + parseInt( res[5] );
           var  thall =  parseInt( res[3]) + parseInt( res[8] );
           
           if( cr1.length > 0   &&  cr2.length == 0  )
           {
               $("#total_fee").val(cr1);
           }
           else if( cr1.length > 0   &&  cr2.length > 0  )
           {
               // alert(  text_total  );
                 // alert(  total  );
                //$("#total_fee").val(   total  );              
                var  ch_thai =  Math.round( usall * 33.33 );               
                $("#total_fee").val(    usall +  " USD / "  +  ch_thai  +  " Baht"  );
           }
           
          
    });
});

function  begin_load()
{
       //alert('test');
       
                     $("#total_fee").val('');  
                     $("#total_fee").attr("disabled","disabled");
                     $("#total_fee").css("background-color","black");
                     
                     $("#hidden_course").val('');   
                     $("#hidden_course").attr("disabled","disabled");
                     $("#hidden_course").css("background-color","black");
                     
                     $("#course").val('');
                     $("#course").attr("disabled","disabled");
                     $("#course").css("background-color","black");

                     $("#hidden_course2").val('');   
                     $("#hidden_course2").attr("disabled","disabled");
                     $("#hidden_course2").css("background-color","black");
                     
                     $("#course2").val('');
                     $("#course2").attr("disabled","disabled");
                     $("#course2").css("background-color","black");
                     
                     
                       $("#id_course").val('');
                       $("#id_course").attr("disabled","disabled");
                       $("#id_course").css("background-color","black");
                       
                       $("#id_course2").val('');
                       $("#id_course2").attr("disabled","disabled");
                       $("#id_course2").css("background-color","black");
    
}



$(function(){
    
    $("#status_register").change(function(){
              if(  $("#status_register").val() == 1   ||  $("#status_register").val() == 0  )
              {
                     $("#total_fee").val('');  
                     $("#total_fee").attr("disabled","disabled");
                     $("#total_fee").css("background-color","black");
                     
                     $("#hidden_course").val('');   
                     $("#hidden_course").attr("disabled","disabled");
                     $("#hidden_course").css("background-color","black");
                     
                     $("#course").val('');
                     $("#course").attr("disabled","disabled");
                     $("#course").css("background-color","black");

                     $("#hidden_course2").val('');   
                     $("#hidden_course2").attr("disabled","disabled");
                     $("#hidden_course2").css("background-color","black");
                     
                     $("#course2").val('');
                     $("#course2").attr("disabled","disabled");
                     $("#course2").css("background-color","black");
                     
                     
                     
                       $("#id_course").val('');
                       $("#id_course").attr("disabled","disabled");
                       $("#id_course").css("background-color","black");
                       
                       $("#id_course2").val('');
                       $("#id_course2").attr("disabled","disabled");
                       $("#id_course2").css("background-color","black");
                   
            
              }
              else
              {
                    $("#total_fee").removeAttr("disabled");
                    $("#total_fee").css("background-color","white");
                    
                    $("#hidden_course").removeAttr("disabled"); 
                     $("#hidden_course").css("background-color","white");
                    
                    $("#course").removeAttr("disabled"); 
                    $("#course").css("background-color","white");
                    
                    $("#hidden_course2").removeAttr("disabled");
                    $("#hidden_course2").css("background-color","white");
                    
                    $("#course2").removeAttr("disabled");
                    $("#course2").css("background-color","white");
                    
                       $("#id_course").removeAttr("disabled");
                       $("#id_course").css("background-color","white");
            
                       
                       $("#id_course2").removeAttr("disabled");
                       $("#id_course2").css("background-color","white");
                   
              }
    });
    
    
    /*
        $("#status_register").click(function(){
              if(  $("#status_register").val() == 1   )
              {
                     $("#total_fee").val('');  
                     $("#total_fee").attr("disabled","disabled");
                     $("#total_fee").css("background-color","black");
                     
                     $("#hidden_course").val('');   
                     $("#hidden_course").attr("disabled","disabled");
                     $("#hidden_course").css("background-color","black");
                     
                     $("#course").val('');
                     $("#course").attr("disabled","disabled");
                     $("#course").css("background-color","black");

                     $("#hidden_course2").val('');   
                     $("#hidden_course2").attr("disabled","disabled");
                     $("#hidden_course2").css("background-color","black");
                     
                     $("#course2").val('');
                     $("#course2").attr("disabled","disabled");
                     $("#course2").css("background-color","black");
            
              }
              else
              {
                    $("#total_fee").removeAttr("disabled");
                    $("#total_fee").css("background-color","white");
                    
                    $("#hidden_course").removeAttr("disabled"); 
                     $("#hidden_course").css("background-color","white");
                    
                    $("#course").removeAttr("disabled"); 
                    $("#course").css("background-color","white");
                    
                    $("#hidden_course2").removeAttr("disabled");
                    $("#hidden_course2").css("background-color","white");
                    
                    $("#course2").removeAttr("disabled");
                    $("#course2").css("background-color","white");
                    
               }
    });
    */
    
    
    
});


    $(function()
    {
       // var  url="http://www.thaicleft2015.org/serv/insertregister.php";    
        var  url="http://127.0.0.1/serv/insertregister.php"; 
        $("#btnsave").click(function(){
            
            
            function diacheck(title,html)
            {
               //alert("Select  Course :" );
              $("#dialog-check").attr("title",title);
              $("#p_check").html(html);
              $("#dialog-check").dialog({
                   resizabled:false,
                   modal:true,           
                    position: "center",
                   show:"fade",
                   hide:"explode" 
                   
                   /*
                   buttons:[{
                           text:"Close",
                           icons:{  primary: "ui-icon-closethick"  },
                           click:function(){ $(this).dialog("close");  }    
                           
                   }]
                   */
                    
                  });
                  
               //$("#course").focus();
                    
             }
             
            
          // if(  $("#course").val() ==  ""  )
          if( $("#status_register").val() == ""   )
           {
                  alert("Select  Status Register :" );
                  $("#status_register").focus();
           }
          else if(  $("#total_fee").val() ==  ""  &&  $("#status_register").val() != 1  )
           {
                 //diacheck("Check Register fee !! ","Select  Register Fee " );
                 alert("Select  Register Fee :" );
                 $("#total_fee").focus();
           }
          else if( $("#lastname").val()  == ""  )
           {
                   alert("Select  Lastname :" );
                     $("#lastname").focus();
            }        
           else if( $("#firstname").val()  == ""  )
            {
                   alert("Select firstname :" );
                   
                 $("#firstname").focus();
            } 
           else{
            
            // alert(''+$('#title').val() );
             $.post(url,{
               title: $("#title").val(),
               lastname: $("#lastname").val(),
               firstname: $("#firstname").val(),
               email: $("#email").val(),
               phone: $("#phone").val(),
               fax:$("#fax").val(),
               organization:$("#organization").val(),
               address:$("#address").val(),
               notaddress:$("#notaddress").val(),
               city:$("#city").val(),
               zipcode:$("#zipcode").val(),
               country:$("#country").val(),
               payment:$("#payment").val(),
               course:$("#course").val(),
               id_course:$("#id_course").val(),
               total_fee:$("#total_fee").val(),  //total_fee
               status_register:$("#status_register").val(),
               
        }).success(function(data,result){  
            
    //alert("Register Complete welcome");
    //  window.location.href="http://127.0.0.1/report_pdf/report_cleft.php?lastname=" + $("#lastname").val()  +  "&firstname=" + $("#firstname").val()  +   "&id_course="   +  $("#id_course").val() ;       

    $( "#dialog-confirm" ).dialog({
                       resizable:false,
                       height:100,
                      width:500,
                       modal:true, 
                      buttons:[
                          {
                              text:"Print Register",
                              icons:{
                                  primary: "ui-icon-print"
                              },
                              click:function(){
                                   $(this).dialog("close");                                
                                //  window.location.href="http://www.thaicleft2015.org/report_pdf/report_cleft.php?lastname=" + $("#lastname").val()  +  "&firstname=" + $("#firstname").val()  +   "&id_course1="   +  $("#id_course").val()  +  "&id_course2=" + $("#id_course2").val() + "&total_fee="  +  $("#total_fee").val();         
                                window.location.href="http://127.0.0.1/report_pdf/report_cleft.php?lastname=" + $("#lastname").val()  +  "&firstname=" + $("#firstname").val()  +   "&id_course1="   +  $("#id_course").val()  +  "&id_course2=" + $("#id_course2").val() + "&total_fee="  +  $("#total_fee").val();      
                              }
                          },
                          {
                              text:"Abstracts submit",
                              icons:{
                                    primary: "ui-icon-pencil"
                              },
                              click:function(){
                                      $(this).dialog("close");                                     
                                        window.location.href="http://127.0.0.1/abstract.php" 
                                    //  window.location.href="http://www.thaicleft2015.org/abstract.php" 
                                      
                              }
                          },
                          {
                             text:"Cancel ",
                             icons:{
                                  primary: "ui-icon-cancel"
                             },
                             click:function(){
                                 $(this).dialog("close");
                             }
                          }
                                  ]                     
                   });
   
  
  

    
                   
        });
              
        }//end else   
              
              
              
         });       
    });


    $(function(){
        
  //---------------***-total price register-***----------------------------------
      function  ch_total()
    {
        
           var  cr1=$("#course").val();
           var  cr2=$("#course2").val();
        
        /*
           var  total = cr1 + " " + cr2;
           var  text_total = "(" + cr1 + ")" + "+" + "("  +  cr2  +  ")" ;                  
           var  res = total.split(" ");
           var  usall = parseInt( res[0]) + parseInt( res[5] );
           var  thall =  parseInt( res[3]) + parseInt( res[8] );
           if( cr1.length > 0   &&  cr2.length == 0  )
           {
               $("#total_fee").val(cr1);
           }
           else
           {
               // alert(  text_total  );
                 // alert(  total  );
                //$("#total_fee").val(   total  );              
                var  ch_thai =  Math.round( usall * 33.33 );               
                $("#total_fee").val(    usall +  " USD / "  +  ch_thai  +  " Baht"  );
           }
          */
         
           if( cr1.length > 0   &&  cr2.length == 0  )
           {
               var  total = cr1;
               //var  text_total = "(" + cr1 + ")";
               var  res = total.split(" ");
               var  usall = parseInt( res[0]);
                var  ch_thai =  Math.round( usall * 33.33 );               
              // alert( usall  );
               $("#total_fee").val(    usall +  " USD / "  +  ch_thai  +  " Baht"  );
           }
           else if( cr1.length == 0   &&  cr2.length > 0  )
           {
              var  total = cr2;
               //var  text_total = "(" + cr1 + ")";
               var  res = total.split(" ");
               var  usall = parseInt( res[0]);
                var  ch_thai =  Math.round( usall * 33.33 );               
              // alert( usall  );
               $("#total_fee").val(    usall +  " USD / "  +  ch_thai  +  " Baht"  );
           }
           else
           {
                var  total = cr1 + " " + cr2;
                var  text_total = "(" + cr1 + ")" + "+" + "("  +  cr2  +  ")" ;
                var  res = total.split(" ");
                var  usall = parseInt( res[0]) + parseInt( res[5] );
                var  thall =  parseInt( res[3]) + parseInt( res[8] );
                var  ch_thai =  Math.round( usall * 33.33 );  
                $("#total_fee").val(    usall +  " USD / "  +  ch_thai  +  " Baht"  );
           }
           
    } 
  //---------------***-total price register-***----------------------------------
        
        
          select_course("#cr11","15 USD / 500 Baht","Docter/Dentist Pre-Congress 17 Nov,15","11");
          select_course("#cr12","15 USD / 500 Baht","Mulitdisciplinary( Non physician / Non dentist ) Pre-Congress 17 Nov,15","12");
        //  select_course("#cr13","15 USD / 500 Baht","Resident Pre-Congress 17 Nov,15","13");
         select_course("#cr13","15 USD / 500 Baht","Trainee Pre-Congress 17 Nov,15","13");
  
  //------------------------------ splite ---------------------------------------------------------------------------------------
  
          select_course2("#cr21","75 USD / 2,500 Baht","Docter/Dentist Early Bird  15 October,2015","21");
          select_course2("#cr22","45 USD / 1,500 Baht","Mulitdisciplinary( Non physician / Non dentist ) Early Bird 15 October,2015","22");
         // select_course2("#cr23","30 USD / 1,000 Baht","Resident Early Bird October,2015","23");
          select_course2("#cr23","30 USD / 1,000 Baht","Trainee Early Bird October,2015","23");
          
          select_course2("#cr31","90 USD / 3,000 Baht","Docter/Dentist August-before16 Nov,15","31");
          select_course2("#cr32","60 USD / 2,000 Baht","Mulitdisciplinary( Non physician / Non dentist ) August-before16 Nov,15","32");
         // select_course2("#cr33","45 USD / 1,500 Baht","Resident August-before16 Nov,15","33");
           select_course2("#cr33","45 USD / 1,500 Baht","Trainee August-before16 Nov,15","33");
          
          select_course2("#cr41","105 USD / 3,500 Baht","Docter/Dentist  Onsite","41");
          select_course2("#cr42","75 USD / 2,500 Baht","Mulitdisciplinary( Non physician / Non dentist )  Onsite","42");
         // select_course2("#cr43","60 USD / 2,000 Baht","Resident  Onsite","43");
           select_course2("#cr43","60 USD / 2,000 Baht","Trainee  Onsite","43");
             
        function  select_course(btn,va,list,id)
        {
             $(btn).click(function(){
                   // alert(""+btn);
                // if(  $("#status_register").val() != 1  ||  $("#status_register").val() != 0   )  
                 if(  $("#status_register").val() == 2  ||  $("#status_register").val() == 3   )  
                 {    
                   $("#course").val(va);
                   $("#hidden_course").val(list);
                  
                   //$("#id_course").val(id);
                   switch(id)
                   {
                       case '11':
                           $("#id_course").val('1');
                       break;
                       case '12':
                           $("#id_course").val('2');
                       break;  
                       case '13':
                           $("#id_course").val('3');
                       break; 
                      default:
                           $("#id_course").val('4');
                       
                   }
                   
                    ch_total();
                }  
             });    
        }
        
          function  select_course2(btn,va,list,id)
        {
             $(btn).click(function(){
                 
                 //  if(  $("#status_register").val() != 1    ||  $("#status_register").val() != 0    )  
                   if(  $("#status_register").val() == 2    ||  $("#status_register").val() == 3   )  
                   {
                   // alert(""+btn);
                   $("#course2").val(va);
                   $("#hidden_course2").val(list);
                   
                   //$("#id_course2").val(id);
                   switch(id)
                   {
                       case '21':
                           $("#id_course2").val('1');
                       break;
                       case '22':
                           $("#id_course2").val('2');
                       break;  
                       case '23':
                           $("#id_course2").val('3');
                       break; 
                       
                       case '31':
                          $("#id_course2").val('1');
                       break;
                       case '32':
                           $("#id_course2").val('2');
                       break;  
                       case '33':
                           $("#id_course2").val('3');
                       break; 
                       
                       case '41':
                          $("#id_course2").val('1');
                       break;
                       case '42':
                           $("#id_course2").val('2');
                       break;  
                       case '43':
                           $("#id_course2").val('3');
                       break;

                      default:
                           $("#id_course2").val('4');
                         

                   }
                   
                   
                    ch_total();
                   }
                    
                   
             });    
        }
        
 
        
        
        
    });
    
</script>


<body onload="begin_load();">
    
          <h3>
              <p>  <p class="button-style2"><a href="#"> 8 <sup>th</sup> Annual Meeting of The Thai Cleft Lip-Palate and Craniofacial Association : Registration / Personal information </a>   </p>             
          </h3>
       
    <form role="form" >
   
        
   <!--     
  <div class="form-group radio">
      <label for="title"> 
 <div class="radio">
     <input type="radio" name="title"      value="1"   checked="true" >Mr.
    &nbsp; &nbsp; &nbsp;
    <input type="radio" name="title"        value="2" >Miss
   &nbsp; &nbsp; &nbsp;
   <input type="radio" name="title"      value="3" >Mrs.      
</div>
     </label>
  </div>
        -->
   
   <div class="form-group has-success has-feedback"> 
       <label for="status_register">Status Register
             <select class="form-control input-lg" id="status_register" >
        <option value="0">Select</option>  
        <option value="1">1. Keynote speaker | Invited speaker ( วิทยากร )</option>
        <option value="2">2. Persentation ( ผู้นำเสนอผลงาน )</option>
        <option value="3">3. Participants ( ผู้เข้าร่วมประชุม )</option>
              </select> 
       </label>
</div>  

     
<div class="table-responsive">
     <label >Select  Registration fee  Pre-congress 17 Nov,15 : Click Below</label> 
     
     <table class="table table-striped">
<tr>
    <td>Registration fee</td>
    <td>Physician/Dentist</td>
   <!-- <td>Multidisciplinary</td> -->
     <td>Multidisciplinary ( Non physician / Non dentist )</td>
    <!--<td>Physician in training and allies</td>-->
    <td>Trainee</td>
</tr>
   <tr>
    <td class="active">Pre-congress<br>17 Nov,15</td>
  <td class="active"><button type="button" class="btn btn-warning" id="cr11">500 Baht / 15 USD</button></td>
  <td class="active"><button type="button" class="btn btn-warning" id="cr12">500 Baht / 15 USD</button></td>
  <td class="active"><button type="button" class="btn btn-warning" id="cr13">500 Baht / 15 USD</button></td>
</tr>





</table>
</div>   
     
 <div class="form-group has-success has-feedback">      
     <label>
           Select  Registration fee  Pre-congress 17 Nov,15
            <input type="text" class="form-control input-lg" id="hidden_course" maxlength="50" size="50"  placeholder=" " readonly="true">            
           <input type="text" class="form-control input-lg" id="course" maxlength="10" size="20"  placeholder="" readonly="true">
           
           <input type="hidden" class="form-control input-lg" id="id_course"  maxlength="50" size="50"  readonly="true"  > <!-- ประเภทของผู้ลงทะเบียน -->
           
           
            </label>
 </div>
        
        
        <div class="table-responsive">
          <label for="">Select  Registration fee  Early Bird : Click Below</label>   
            <table class="table table-striped">
<tr>
    <td>Registration fee</td>
    <td>Physician/Dentist</td>
   <!-- <td>Multidisciplinary</td> -->
    <td>Multidisciplinary ( Non physician / Non dentist )</td>
   
<!-- <td>Physician in training and allies</td> -->
     <td>Trainee</td>
</tr>
               <tr>
  <td class="active">Early Bird<br> 15 October,2015</td>
  <td class="active"><button type="button" class="btn btn-success" id="cr21">2,500 Baht / 75 USD</button></td>
  <td class="active"><button type="button" class="btn btn-success" id="cr22">1,500 Baht / 45 USD</button></td>
  <td class="active"><button type="button" class="btn btn-success" id="cr23">1,000 Baht / 30 USD</button></td>
              </tr>
              
              <tr>
    <td class="active"> 16 October,15 November</td>
  <td class="active"><button type="button" class="btn btn-info"  id="cr31">3,000 Baht / 90 USD</button></td>
  <td class="active"><button type="button" class="btn btn-info"  id="cr32">2,000 Baht / 60 USD</button></td>
  <td class="active"><button type="button" class="btn btn-info"  id="cr33">1,500 Baht / 45 USD</button></td>
             </tr>
             <tr>
    <td class="active">Onsite</td>
  <td class="active"><button type="button" class="btn btn-danger"  id="cr41">3,500 Baht / 105 USD</button></td>
  <td class="active"><button type="button" class="btn btn-danger"  id="cr42">2,500 Baht / 75 USD</button></td>
  <td class="active"><button type="button" class="btn btn-danger"  id="cr43">2,000 Baht / 60 USD</button></td>
</tr>
                
            </table>
        </div>
        
        
   <div class="form-group has-success has-feedback">      
     <label>
           Registration fee Early Bird 
            <input type="text" class="form-control input-lg" id="hidden_course2" maxlength="50" size="50"  placeholder="" readonly="true">            
           <input type="text" class="form-control input-lg" id="course2" maxlength="10" size="20"  placeholder="" readonly="true">
           
           <input type="hidden" class="form-control input-lg" id="id_course2" maxlength="50" size="50"   readonly="true" >      <!-- ประเภทของผู้ลงทะเบียน -->    
            </label>
 </div>
        
    
        <div class="form-group has-success has-feedback">
            <label for="total_fee">
                Total Registration fee : Click Below
                  <input type="text" class="form-control input-lg" id="total_fee" maxlength="10" size="50"  placeholder="" readonly="true">
                  
            </label>
        </div>
        
        
 <div class="form-group has-success has-feedback"> 
   <label for="title">Title 
      &nbsp; &nbsp; &nbsp;
      <select class="form-control input-lg" id="title" >
        <option value="">Select</option>  
        <option value="1">Mr.</option>
        <option value="2">Ms.</option>
        <option value="3">Mrs.</option>
  </select>  
   </label>
 </div>  
     
        
        
     
  <div class="form-group has-success has-feedback">
       <label for="lastname">
        Last name  
      <input type="text" class="form-control input-lg" id="lastname" maxlength="20" size="50"  placeholder="Enter Last Name">
        <!-- <span class="glyphicon glyphicon-ok form-control-feedback"></span> -->
       </label>      
  </div>
        
    <div class="form-group has-success has-feedback">
    <label for="firstname">First name  
    <input type="text" class="form-control input-lg" id="firstname" maxlength="20" size="50" placeholder="Enter First Name">
    </label>
  </div>
     
       <div class="form-group has-success has-feedback">
    <label for="email">E-Mail  
        <input type="email" class="form-control input-lg" id="email" maxlength="40" size="50" placeholder="Enter E-Mail">
    </label>
  </div>
     
     
     <div class="form-group has-success has-feedback">
  <label for="phone">Phone 
      <input type="text" class="form-control input-lg" id="phone" maxlength="13" size="50" placeholder="Enter Phone">
  </label>
</div>
     
     
<div class="form-group has-success has-feedback">
  <label for="fax">Fax 
  <input type="text" class="form-control input-lg" id="fax" maxlength="10" size="50" placeholder="Enter Fax">
  </label>
</div>
     
     <div class="form-group has-success has-feedback">
  <label for="organization">Organization 
  <input type="text" class="form-control input-lg" id="organization" maxlength="100" size="90" placeholder="Enter Organization">
  </label>
</div>
     
          <div class="form-group has-success has-feedback">
  <label for="address">Address 
  <input type="text" class="form-control input-lg" id="address" maxlength="100" size="90" placeholder="Enter Address">
  </label>
</div>
  
     <div class="form-group has-success has-feedback">
  <label for="notaddress">Address (cont' d) 
      <input type="text" class="form-control input-lg"  id="notaddress" maxlength="100" size="90" placeholder="Enter Address (cont' d)">
  </label>
</div>
     
     
<div class="form-group has-success has-feedback">
  <label for="city">City 
  <input type="text" class="form-control input-lg" id="city" maxlength="20" size="50" placeholder="Enter City">
  </label>
</div>

     <div class="form-group has-success has-feedback">
  <label for="zipcode">Zip/Postal code 
  <input type="text" class="form-control input-lg" id="zipcode" maxlength="7" size="50" placeholder="Enter Zip/Postal code " >
  </label>
</div>
  
          <div class="form-group has-success has-feedback">
  <label for="country">Country 
  <input type="text" class="form-control input-lg" id="country" maxlength="20" size="50" placeholder="Enter Country ">
  </label>
</div>
 
        <!--
<div class="form-group">
  <label for="payment">Possible payment method are 


 <div class="radio">
     <input type="radio" name="payment" value="1"> Credit cards
    &nbsp; &nbsp; &nbsp;
    <input type="radio" name="payment" checked="true" value="2"> Bank Tranfers    
</div>
      -->
      
       <div class="form-group has-success has-feedback"> 
   <label for="payment">Possible payment method are
      &nbsp; &nbsp; &nbsp;
      <select class="form-control input-lg" id="payment" >
        <option value="">Select</option>  
       <!-- <option value="1">Credit cards</option> -->
       <option value="2" selected>Bank Tranfers</option>    
  </select>
   </label>
 </div>  


  </label>

</div>
     
     
     <!--
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
     -->
     

<!-- <button type="button" class="btn btn-primary btn-lg"  id="btnsave"   data-target="#exampleModal" data-toggle="modal" > Submit </button>  -->
<button type="button" class="btn btn-primary btn-lg"  id="btnsave"   > Submit </button> 
<button type="reset" class="btn btn-danger  btn-lg"> Clear </button>  


  
</form>
    
<!--
    data-toggle="modal"  data-target="#basicModal"
    <div class="modal fade" id="basicModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h2>Register Form</h2>
            </div>
            <div class="modal-body">
                
            </div>
            <div class="modal-footer">
                Please fill your information.
            </div>
            
            <button type="submit" class="btn btn-default"> Save </button>
            
        </div>
    </div>
</div>
-->



<div id="dialog-confirm" title="Success Register " style="display:none">  
</div>

<div id="dialog-check" title="Status Check Register!! " style="display:none">
    <p id="p_check"></p>
</div>
  
   
</body>
