
<header>
   <div class="widget-controls">
      <a href="#"><i class="glyphicon glyphicon-cog"></i></a>
      <a href="#"><i class="fa fa-refresh"></i></a>
      <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
   </div>
</header>
<div class="widget-body">
   <form class="form-horizontal" role="form">
      <fieldset>
         <legend><strong>Formulario de registro de torneo</strong></legend>
         <div class="form-group row">
            <label for="normal-field" class="col-md-4 form-control-label text-md-right">Nombre del torneo</label>
            <div class="col-md-7">
               <input type="text" id="normal-field" class="form-control" placeholder="Nombre al torneo como desea">
            </div>
         </div>
         <div class="form-group row">
            <label for="hint-field" class="col-md-4 control-label text-md-right">
             Número de equipos
            </label>
              <div class="col-md-7">
                <select data-placeholder="Which galaxy is closest to Milky Way?"
                        data-width="auto"
                        data-minimum-results-for-search="5"
                        tabindex="-1"
                        class="select2 form-control" id="default-select">
                    <option value="">Número de equipos en el torneo</option>
                    <option value="Magellanic">4</option>
                    <option value="Andromeda">6</option>
                    <option value="Sextans">8</option>
                </select>
              </div>  
            </div>

            <div class="form-group row">
            <label for="hint-field" class="col-md-4 control-label text-md-right">
             Zona 
            </label>
              <div class="col-md-7">
                <select data-placeholder="Which galaxy is closest to Milky Way?"
                        data-width="auto"
                        data-minimum-results-for-search="5"
                        tabindex="-1"
                        class="select2 form-control" id="default-select">
                    <option value="">Lugar del torneo</option>
                    <option value="Magellanic">Medellín</option>
                    <option value="Andromeda">Sabaneta</option>
                    <option value="Sextans">Envigado</option>
                </select>
              </div>  
            </div>
        
         </div>
                <div class="form-group row">
                                    <label class="control-label col-md-4 text-md-right" for="fileupload1">
                                       Foto para el torneo
                                    </label>
                                    <div class="col-md-7">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                <img data-src="holder.js/100%x100%" alt="..." src="">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                            <div>
                                                <span class="btn btn-secondary btn-file"><span class="fileinput-new">Selecionar imagen</span><span class="fileinput-exists">Cambiar</span><input type="file" name="..."></span>
                                                <a href="#" class="btn btn-secondary fileinput-exists" data-dismiss="fileinput">Borrar</a>
                                            </div>
                                        </div>
                                        <span class="help-block"><strong>Seleccione la imagen que representará al torneo</strong></span>
                                    </div>
                                </div>
          
      </fieldset>
      <div class="form-actions">
         <div class="row">
            <div class="col-md-offset-4 col-md-7">
               <button type="submit" class="btn btn-primary">Registrar torneo</button>
               <button type="button" class="btn btn-inverse">Cancelar</button>
            </div>
         </div>
      </div>
   </form>
</div>

