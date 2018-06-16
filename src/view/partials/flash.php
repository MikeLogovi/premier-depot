<?php if(isset($_SESSION['notification']['message'])):?>
     <div class="container">
                  	   <div class="row">
                  	   	     <div <?="class='col-xs-6 alert alert-dismissable alert-".$_SESSION['notification']['type']."'";?>>
                  	   	     	
                  	   	     	  <p><strong><?=$_SESSION['notification']['message'];?></strong></p>
                  	   	     </div>
                  	   </div>
    </div>
<?php $_SESSION['notification']=[]; endif;