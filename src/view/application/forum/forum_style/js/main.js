var reloadTime=20000;
var timeout=3000;
function getMessage(){
   $.getJSON('src/view/application/forum/forumGetMessage.php',function(data){
         $('centre').remove();
         $('#messageList').html(data);
         
  });
}
function postMessage(){
  var message=encodeURIComponent($('#fmessage').val());
  $.ajax({
    type:'POST',
    url:'src/view/application/forum/forumPostMessage.php',
    data:'message='+message,
    success:function(){
      getMessage();
      $('#fmessage').val('');
      $('#beep')[0].play();
      }
  });
   
}
$(function(){
 
  $('.ap').tooltip();
  window.setTimeout(getMessage,timeout);
   window.setInterval(getMessage,reloadTime);
  //$("#f-main").animate({"scrollTop":$("#f-main").height()}, "slow");
  $('body').append("<audio id='beep'><source type='audio/mpeg' src='src/view/application/forum/forum_style/son2.mp3' >");
  $('#fmessage').focus();
  
  $('#envoyer').click(function(){
     postMessage();
  });
});