<?php
namespace App\view\application\codage;
use App\classes\application\code\codeManager;
use App\classes\application\Functions;
/*echo'<pre>';
var_dump($_SESSION['code']);
echo'</pre>';
;*/
?>
<div class="coding-main">
     <div clas="container">
      <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
                   
             <div class="row">
                              <div class="col-xs-4  col-xs-offset-9" id='group-bouton'>
                                 <div class="btn-group">
                                       <a href='#' class="btn btn-warning" id='reset'>C L O N E R</a>
                                       <a href='code_source' class="btn btn-primary"  >N O U V E A U</a>
                                 </div>
                             </div>
              </div>
             <div class='row'>

                <div id='codeshow'>
                      <pre class=" linenums prettyprint ">
                            <?=isset($_SESSION['code'])? $_SESSION['code']:null;
                            ?>
                      </pre>
                </div>
            </div>
            <br/>

              <div class='row'>
                   <div >
                        <div class='col-xs-2 col-xs-offset-10'>
                           <a  href='' class='btn btn-info'>P A R T A G E R</a>
                       </div>
                  </div>
              </div>
          
        </div>
      </div>
     </div>
     
</div>