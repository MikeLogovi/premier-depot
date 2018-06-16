<?php
namespace App\classes\application;
    Class Functions{
          public function not_empty_by_post($fields=[]){
                if(count($fields)!=0){
                    foreach($fields as $field){
                        if(empty($_POST[$field])||trim($_POST[$field])==""){
                            return false;
                        }
                    }
                    return true;
                }
            }
            public function not_empty_by_get($fields=[]){
                if(count($fields)!=0){
                    foreach($fields as $field){
                        if(empty($_GET[$field])||trim($_GET[$field])==""){
                            return false;
                        }
                    }
                    return true;
                }
            }
             public function xssControl($value){
              return htmlspecialchars($value);
            }
            public function urlLink($content=''){
                  $content=preg_replace('#(((https?://(w{3}\.))|(https?://)|(w{3}\.))([a-zA-Z-0-9-_\#%&\$])+\.([a-zA-z0-9-_]){2,4}((\?)(([a-zA-Z0-9_])+((=)([a-zA-Z0-9_])+)(&([a-zA-Z0-9_])+((=)([a-zA-Z0-9_])+)){0,}))?)#', '<a href=$0 target=_blank>$0</a>', $content);
                  return $content;
            }
    	  public function setActive($lien){
             return $_SERVER['REQUEST_URI']=='/projet_bluebeard/'.$lien ?'active': null;
    	  }
    	  public function requestChatCssLink(){
             return $_SERVER['REQUEST_URI']=='/projet_bluebeard/messagerie'||$_SERVER['REQUEST_URI']=='/projet_bluebeard/' ? '
                 <link href="src/view/application/chat/chat_style/css/font-awesome.css" rel="stylesheet" />
                 <link href="src/view/application/chat/chat_style/css/style.css" rel="stylesheet" />
        	     ': null;
    	  }
    	  public function requestChatJsLink(){
    	  	 return $_SERVER['REQUEST_URI']=='/projet_bluebeard/messagerie' ? '
                 
                 <script src="src/view/application/chat/chat_style/js/main.js"></script>
        	     ': null;
    	  }
            public function requestCodingCssLink(){
             return $_SERVER['REQUEST_URI']=='/projet_bluebeard/code_source' ? '
                 <link href="src/view/application/codage/coding_style/css/style.css" rel="stylesheet" />': null;
          }
            public function requestcodingJsLink(){
             return $_SERVER['REQUEST_URI']=='/projet_bluebeard/code_source' ? '
                <script src="src/view/application/codage/coding_style/js/taby.js"></script>
                 <script src="src/view/application/codage/coding_style/js/main.js"></script>
                ' 
                : null; 
             }
        public function requestCodingViewCssLink(){
             return $_SERVER['REQUEST_URI']=='/projet_bluebeard/code_source_view' ? '
                <link href="src/view/application/codage/coding_style/js/code-prettify-master/distrib/google-code-prettify/prettify.css" rel="stylesheet" />
                 <link href="src/view/application/codage/coding_style/css/style.css" rel="stylesheet" />': null;
          }
        public function requestcodingViewJsLink(){
             return $_SERVER['REQUEST_URI']=='/projet_bluebeard/code_source_view' ? '
                <script src="src/view/application/codage/coding_style/js/code-prettify-master/distrib/google-code-prettify/prettify.js"></script>
                <script>prettyPrint();</script>
                 <script src="src/view/application/codage/coding_style/js/main.js"></script>
                ' 
                : null; 
             }
        public function requestForumCssLink(){
            return $_SERVER['REQUEST_URI']=='/projet_bluebeard/forum' ? '
               <link href="src/view/application/forum/forum_style/css/style.css" rel="stylesheet" />': null;
          }
        public function requestForumJsLink(){
             return $_SERVER['REQUEST_URI']=='/projet_bluebeard/forum' ? '
                 <script src="src/view/application/forum/forum_style/js/main.js"></script>
                ' 
                : null; 
             }

         public function requestProfilCssLink(){
            return $_SERVER['REQUEST_URI']=='/projet_bluebeard/profil' ? '
               <link href="src/view/application/profil/profil_style/css/main.css" rel="stylesheet" />

                <link href="src/view/application/profil/profil_style/css/header.css" rel="stylesheet" />': null;
          }
    }
