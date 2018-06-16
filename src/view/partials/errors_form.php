            <?php if(isset($_SESSION['errors'])){ ?>
            
                 <div class="container">
                  	   <div class="row">
                  	   	     <div class="col-xs-12 alert alert-danger alert-dismissable">
                  	   	     	<button type="button" class="close" data-dismiss='alert' >&times;</button>
                  	   	     	<?php
                                     foreach($_SESSION['errors'] as $errors =>$error){
                                     	echo '<p>'.$error.'</p>';
                                     }
                  	   	     	?>
                  	   	     </div>
                  	   </div>
                  </div>
             <?php } unset($_SESSION['errors']);?> 