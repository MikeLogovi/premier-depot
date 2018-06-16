<?php 
     session_start();
     ob_start();
?>
  
     <img src="assets/img/user.png" alt="bootstrap Chat box user image" class="img-circle" />
                        (@Justine)
                           
     <hr class="hr-clas-low" />

<?php
    $content=ob_get_clean();
    echo json_encode($content);

      