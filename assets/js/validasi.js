$(document).ready(function(){

	//Menyembunyikan glype icon
	$("#gagal").hide();  
	$("#sukses").hide();    
   $("#suksesp").hide();
    $("#gagalp").hide();

	$("#cpassword, #password").change(function(){
         var password		= $("#password").val();
         var cpassword		= $("#cpassword").val();

         if(password!=cpassword){
         	//alert('Password Didnt Match');
         	$("#cpassword").focus();
         	$("#cpassword").css('border','2px red solid');
         	$("#pesan").html("Password Didnt Match"); 
         	$("#gagal").show(); 
         	$("#sukses").hide(); 
            $("#gagalp").show(); 
            $("#suksesp").hide();         	
         }else{
         	//alert('Password Match');
         	$("#cpassword").css('border','');
         	$("#pesan").html("Password Match");   
         	$("#gagal").hide();
         	$("#sukses").show();     
            $("#gagalp").hide();
            $("#suksesp").show();   	
         }
	})

	$("#submit_pass").click(function(){
      var password		= $("#password").val();
      var cpassword		= $("#cpassword").val();

         if(password!=cpassword){
         	alert('Password Didnt Match');
         	$("#cpassword").focus();
         	$("#cpassword").css('border','2px red solid');
         	$("#pesan").html("Password Didnt Match");
         	$("#gagal").show(); 
         	$("#sukses").hide(); 
         	return false;
         }else{

         }
	})

   $("#submit_pass").click(function(){
      var password      = $("#password").val();
      var cpassword     = $("#cpassword").val();

         if(password!=cpassword){
            alert('Password Didnt Match');
            $("#cpassword").focus();
            $("#cpassword").css('border','2px red solid');
            $("#pesan").html("Password Didnt Match");
            $("#gagal").show(); 
            $("#sukses").hide(); 
            return false;
         }else{

         }
   })

   //Membedakan antara sepatu dan baju
   $("#kategorii").click(function(){
      var e = document.getElementById("kategorii");
      var struser = e.options[e.selectedIndex].value;

      if (struser == 1 ||struser == 2){
            $("#baju").show();
             $("#sepatuu").hide();          
      }
      else if (struser == 3){
          $("#baju").hide();
            $("#sepatuu").show();             
      }else{
            $("#baju").hide();
            $("#sepatuu").hide();             
      }

   })

   $("#invoice").change(function(){
      var e = document.getElementById("invoice");
      var struser = e.options[e.selectedIndex].value;

      if (struser == 0){
             $("#details").hide();    
      }else{
           $("#details").show();       
      }

   })

   $(".deluser").click(function(){
           $(this).prop('disabled',true);
   })

   //Modal Selain sepatu futsal
   $(".mymodal2").click(function(){
      var element = $(this);
      var clas = element.attr("id");
     
      $.ajax({
        url:"http://localhost/ppl2ez/ajax/get?id="+clas,              
        dataType : "json",
        type: "POST",

        success: function(data){
          document.getElementById("modal_namabarang").innerHTML     = data.nama; 
          document.getElementById("s").innerHTML     = data.s;   
          document.getElementById("m").innerHTML     = data.m;
          document.getElementById("l").innerHTML     = data.l;
          document.getElementById("xl").innerHTML     = data.xl;      
        }
      });                        
    });        

    //Modal sepatu futsal
   $(".mymodal").click(function(){
      var element = $(this);
      var clas = element.attr("id");
     
      $.ajax({
        url:"http://localhost/ppl2ez/ajax/get?id="+clas,              
        dataType : "json",
        type: "POST",

        success: function(data){
          document.getElementById("ukur").innerHTML     = data.ukur; 
          document.getElementById("jml").innerHTML     = data.jml;   
 
        }
      });                        
    });

});