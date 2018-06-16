<div class="coding-main">
     <div clas="container">
     	<div class="row">
     		<div class="col-xs-10 col-xs-offset-1">
                   
     			<form  method="post" action="codingTreatment" autocomplete="off">
             <div class="row">
                              <div class="col-xs-4  col-xs-offset-9" id='group-bouton'>
                                 <div class="btn-group">
                                       <input type='reset' class="btn btn-danger" id='reset' value='TOUT EFFACER'>
                                       <input type='submit' class="btn btn-success" value='E N V O Y E R'  >
                                 </div>
                             </div>
              </div>
             <div class='row'>
                <textarea class="form-control" id="code" name="code" placeholder="code tout ce que vous voulez ici !!" required="required">
     				    </textarea>
            </div>
            <br/><br/>
             <div class='row'>
                  <div class='form-group'>
                           <div class='col-xs-2 col-xs-offset-2'>
                               <label for='nomFichier' class='control-label' >Nom du fichier<span class='x'>*</span></label>
                           </div>
                         <div class='col-xs-6 '>
                              <input type='text' class='form-control' id='nomFichier' name='nomFichier' required="required" />
                         </div>
                  </div>
             </div>
              <br/>
             <div class='row'>
                  <div class='form-group'>
                     <div class='col-xs-2 col-xs-offset-2'>
                         <label for='typeFichier' class='control-label'>Type du fichier<span class='x'>*</span></label>
                     </div>
                     <div class='col-xs-6 '>
                          <select name='typeFichier' class='form-control' required="required">
                             <option value='c' selected="selected">c</option>
                             <option value='c++' selected="selected">c++</option>
                          </select>
                     </div>
                  </div>
              </div>
              <div class='row'>
                   <div class='form-group'>
                        <div class='col-xs-2 col-xs-offset-10'>
                           <input type='submit' class='btn btn-success' value='ENREGISTRER'>
                       </div>
                  </div>
              </div>
     			</form>
     		</div>
     	</div>
     </div>
     <div class="container">
          <div class="row">
               <div class="col-xs-6">
                    <div class="modal fade" id="save">
                        <div class="modal-dialog">
                              <div class="modal-content"></div>
                        </div>
                    </div>
               </div>
          </div>
     </div>
</div>