 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  
   <!--<script type="js/jquery-3.4.1.js"></script>-->






  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="new.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     

 <script>

$(document).ready(function(){

   display();
});


 	function display(){
     $.ajax({
        url: "display.php",
        success: function(display){
         $("#tdata").html(display);

        }

     });
}

    
function add(){ 

var cname = $("#cname").val();
var cmobile = $("#cmobile").val();
var cwork = $("#cwork").val();
var cbudget = $("#cbudget").val();


$.ajax({

     url: "addclients.php",
     type: "POST",
     data : {cname:cname, cmobile:cmobile, cwork:cwork, cbudget:cbudget},
     success: function(msg){

       display();
       $("#addmsg").html(msg);

     }

});

}

 function deli(id){

    var conf = confirm("Are you sure to delete ?");

    if(conf==true){

    	//alert("deleted");

       $.ajax({
        url: "delete.php",
        type: "POST",
        data: {id:id},
        success: function(msg){

        	display();
        	$("#addmsg").html(msg);
        }


       });


    }

 }


 function edi(id){

    $("#hidden_field").val(id);

    $.post("edit.php",
    	   { id:id },

    	   function(data,status){

    	   	var user = JSON.parse(data);
            
            $("#up_cname").val(user.cname);
            $("#up_cmobile").val(user.cmobile);
            $("#up_cwork").val(user.cwork);
            $("#up_cbudget").val(user.cbudget);


    	   }
    	);



 	$("#up_myModal").modal("show");
 }


 function update(){

 	var hidden_id = $("#hidden_field").val();
 	var up_cname = $("#up_cname").val();
 	var up_cmobile = $("#up_cmobile").val();
 	var up_cwork = $("#up_cwork").val();
 	var up_cbudget = $("#up_cbudget").val();

    $.post("update.php",{
               
           hidden_id : hidden_id,
           cname : up_cname,
           cmobile : up_cmobile,
           cwork : up_cwork,
           cbudget : up_cbudget

    },

    function(data){
         $("#up_myModal").modal("hide");
         display();
        $("#addmsg").html(data);
      }
    	



   );



 }




 </script>