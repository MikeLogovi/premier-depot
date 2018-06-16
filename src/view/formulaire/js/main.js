
(function ($) {
    "use strict";



  
  
    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit',function(){
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }

        return check;
    });
    $('#checkbox1').click(function(){
         if($('#checkbox1').prop('checked')){
            $('#motpass').attr("type","text");
         }
         else{
           $('#motpass').attr("type","password"); 
         }
    });
    $('#checkbox2').click(function(){
         if($('#checkbox2').prop('checked')){
            $('#confpass').attr("type","text");
         }
         else{
            $('#confpass').attr("type","password");
         } 
    });

    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
        });
    });

    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
    

})(jQuery);
$(function(){
    $('#motpass').blur(function(){
        $('#information').html('');
    })
});
document.getElementById("motpass").addEventListener("input",function(e){
   var mdp=e.target.value;
   var reg1=/[\*\?&#\$@!{}\-()]/;
   var reg2=/[a-z]/;
   var reg3=/[A-Z]/;
   if(mdp.length<=3){
    document.getElementById("motpass").style.color="red";
    document.getElementById("information").innerHTML="<p style='color:red'>Mot de passe trop court, c'est imprudent pour votre sécurité</p>";
   
  } else if(!reg1.test(mdp) || !reg2.test(mdp) || !reg3.test(mdp)){
    document.getElementById("motpass").style.color="orange";
    document.getElementById("information").innerHTML="<p style='color:orange'>Mot de passe acceptable,mais ajoutez des chiffres,des lettres majuscules,des caracteres spéciaux pour le rendre meilleur</p>";
   }
   else{
    document.getElementById("motpass").style.color="green";
    document.getElementById("information").innerHTML="<p style='color:green'>Mot de passe fort et digne de confiance!</p>";
   }
});