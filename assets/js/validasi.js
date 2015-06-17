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

   $("#kategorii").change(function(){
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


});