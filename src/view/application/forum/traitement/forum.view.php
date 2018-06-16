<div class='container'>
	<div class='row'>
		<div class='col-xs-12'>
			<div class='panel panel-info'>
			     <div class='panel-heading'>
			     	   <div class='panel-title'>
			     	   	<p>BLUEBEARD-FORUM <span>(<?=$nbMessage->count;?> messages postes)</span></p>
			     	   </div>
			     </div>
			     <div class="panel-body forum-main">
			     	
			     	   <table class='table table-responsive table-striped'>
			     	   	     <thead>
			     	   	     	 <th>Membres</th>
			     	   	     	 <th class='text-center'>Messages</th>
			     	   	     	 <th>Date publication</th>
			     	   	     </thead>
			     	   	     <tbody >
			     	   	     	<?php while($data=$req->fetch(PDO::FETCH_OBJ)){ ?>
			     	   	     	<tr>
			     	   	     		<div class='col-xs-3'>
				     	   	     	   <td><a data-toggle='tooltip' class='ap' href='#' <?php echo "title=' ".$data->prenom." ".$data->nom." '";?> > <?=$data->pseudo;?></a></td>
				     	   	     	</div>
				     	   	     	<div class='col-xs-6'>
				     	   	     	   <td><?=$data->message;?></td>
				     	   	     	</div>
				     	   	     	<div class='col-xs-3'>
				     	   	     	   <td><?=$data->datePostMessage;?></td>
				     	   	     	</div>
			     	   	     	</tr>
			     	   	     	<?php } ?>
			     	   	     </tbody>
			     	   </table>
			     	
			     </div>
			</div>
		</div>
    </div>
</div>
<div class='container'>
	 <div class='row'>
	 	  <div class='col-xs-12'>
	 	  	  <form method='post' action='forumTreatment'>
	 	  	  	    <textarea class='form-control' placeholder="Entrez un message" name='fmessage' id='fmessage'></textarea>
	 	  	  	    <br/>
	 	  	  	    <div class='row'>
	 	  	  	    	<div class='col-xs-2 col-xs-offset-5'>
	 	  	  	    		 <button type='submit' class='btn btn-lg btn-primary'>E N V O Y E R</button>
	 	  	  	    	</div>
	 	  	  	    	
	 	  	  	    </div>
	 	  	  </form>
	 	  	  <div class='col-xs-2 col-xs-offset-5'>
	 	  	  	    		 <button  class='btn btn-lg btn-warning' id='aj'>Test</button>
	 	  	  </div>
	 	  </div>
	 </div>
</div>