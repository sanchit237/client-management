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




 </script>