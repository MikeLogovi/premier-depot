var time=1000;
function getMessage(){
	$.getJSON('src/view/application/chat/chatGetMessage.php',function(data){
         $('#main-chat').html(data);
	});
}
function getOnlineUser(){
	$.getJSON('src/view/application/chat/chatGetOnlineUser.php',function(data){
         
         $('#online-user').html(data);
	});
}
function getCurrentMessage(param){
   user=document.getElementsByClassName('user')[0];
   $.ajax({
   	type:"POST",
   	url:"src/view/application/chat/chatCurrentMessage.php",
   	data:{
   		userId:user.id,
   		friendId:param.id
   	},
   	success:function(data){
         $('#main-prop-chat').html(data) ;
   	}
   });
  /* $.getJSON('src/view/application/chat/chatCurrentMessage.php',function(data){
   	     $('#main-prop-chat').html(data) ;
   });*/
}
$(document).ready(function(){
           
           //getMessage()
           window.setInterval(getOnlineUser,time);
           console.log(document.getElementById('main-prop-chat'));
});