<?php
/*namespace App\view\application\forum;
use App\classes\application\forum\ForumManager;*/
require('traitement/ForumManager.php');
          $forumManager=new ForumManager();
          $req=$forumManager->getMessage();
          $nbMessage=$forumManager->getNbMessage()->fetch(PDO::FETCH_OBJ);
          //if($nbMessage->rowCount()!=0){
          ob_start();
 ?>
         <div class='panel-heading'>
			     	   <div class='panel-title'>
			     	   BLUEBEARD-FORUM <span>(<?=$nbMessage->count;?> messages postes)</span>
			     	   </div>
		</div>
			    <div class='forum-main'>
			     	      <table class='table  table-bordered table-striped' id='tableau'>
			     	   	     <thead>
			     	   	     	 <th class='th text-info'>Membres</th>
			     	   	     	 <th class='text-center text-info th'>Messages</th>
			     	   	     	 <th class='text-center  text-info th'>Date de publication</th>
			     	   	     </thead>
			     	   	     <tbody>
			     	   	     	   	<?php
         while($data=$req->fetch(PDO::FETCH_OBJ)){ ?>
  	     	<tr>
			     	   	   <div class='col-xs-3'>
				     	   	     	  <td>
				     	   	     	   	<div class='col-xs-6 forumImage'>
				     	   	     	   		<img style="width:75px;height:25px;" class=' img-responsive img-thumbnails fImage'<?= "src='$data->photoDeProfil'";?> alt='photoMembre'/>
				     	   	     	   </div>
				     	   	     	   <div class='row'>
	                                        <div class='col-xs-6'>
					     	   	     	  		 <a data-toggle='tooltip' class='ap' href='#' <?php echo "title=' ".$data->prenom." ".$data->nom." '";?> ><span class='forumPseudo'> <?=$data->pseudo;?></span></a>
	                                         </div>
                                     </div>
				     	   	     	  </td>
				     	   </div>
				     	   	<div class='col-xs-6'>
				     	   	     	   <td >
				     	   	     	   	 <div class='col-xs-2 th'>
				     	   	     	     <?=$data->message;?>
				     	   	     	   	 </div>	
				     	   	     	   	</td>
				         	</div>
		     	   	     	<div class='col-xs-3'>
				     	   	     	   <td>
				     	   	     	   	<?=$data->datePostMessage;?>	
				     	   	     	   	</td>
		     	   	     	</div>
			 </tr>
			<?php 
			    } 
			?>
			     	   	     </tbody>
			     	   </table>
			     	</div>
			     
			     <script>
			     	$('.ap').tooltip({placement:'bottom'});
			     	$('.forum-main').animate({"scrollTop" : $('forum-main').height()},"slow");
			     </script>

<?php
       $data=ob_get_clean();
       echo json_encode($data);
      /* else{
       $json['message']="Aucun message posté pour l'instant";
       echo json_encode($json['message']);
       }*/
?>