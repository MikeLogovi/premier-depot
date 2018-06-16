
<div class='container'>
	<div class='row'>
		<div class='col-xs-12'>
			<div class='panel panel-primary' id='messageList' >
			     <div id='centre'>
			     	  <center>
			     	  	      <span ><img style="width:50px ;height:50px;" src="src/public/images/forumMessage.gif"/></span><br/>
                              <span id='load' style="color:blue; ">Chargement....</span>
			     	  </center>
			     </div>
			</div>
		</div>
    </div>
</div>
<div class='container'>
	 <div class='row'>
	 	  <div class='col-xs-12'>
	 	  	  <form method='post' action='#' id='form'>
	 	  	  	    <textarea class='form-control' placeholder="Entrez un message" name='fmessage' id='fmessage'></textarea>
	 	  	  	    <br/>
	 	  	  	    
	 	  	  </form>
	 	  	  <div class='row'>
	 	  	  	    	<div class='col-xs-2 col-xs-offset-5'>
	 	  	  	    		 <button class='btn btn-lg btn-primary' id='envoyer'>E N V O Y E R</button>
	 	  	  	    	</div>
	 	  	  	    	
	 	  	  	    </div>
	 	  </div>
	 	  <?php echo $_SESSION['user']['id'];?>
	 </div>
</div>
