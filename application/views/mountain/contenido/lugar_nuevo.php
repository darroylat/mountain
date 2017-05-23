<div id="page-wrapper" >
            <div id="page-inner">
			           <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           Agregando <small>Nueva localidad</small>
                        </h1>
                    </div>
                </div>

                <div class="row">
                  <div class="col-lg-12">
                      <div class="panel panel-default">
                          <div class="panel-heading">
                              Basic Form Elements
                          </div>
                          <div class="panel-body">
                              <div class="row">
                                <form role="form" method="post" action="<?php echo base_url(); ?>ubicacion/agregar">
                                    <div class="col-lg-6">
                                      <!--Nombre del lugar -->
                                      <div class="form-group">
                                          <label>Nombre del lugar</label>
                                          <input name="nombre" class="form-control">
                                      </div>
                                      <!--Fotografia para identificar el lugar -->
                                      <div class="form-group">
                                          <label>Fotografia</label>
                                          <input name="foto" type="file">
                                      </div>
                                      <!--Caracteristicas -->
                                      <div class="form-group">
                                          <label>Caracteristicas</label>
                                          <textarea name="caracteristica" class="form-control" rows="3"></textarea>
                                      </div>
                                      <!--Informacion -->
                                      <div class="form-group">
                                          <label>Informacion</label>
                                          <textarea name="informacion" class="form-control" rows="5"></textarea>
                                      </div>
                                      <!--Riesgos -->
                                      <div class="form-group">
                                          <label>Riesgos</label>
                                          <textarea name="riesgo" class="form-control" rows="3"></textarea>
                                      </div>

                                    </div>

                                    <div class="col-lg-6">
                                      <!--Datos utiles -->
                                      <div class="form-group">
                                          <label>Datos utiles</label>
                                          <textarea name="utiles" class="form-control" rows="3"></textarea>
                                      </div>
                                      <!--Equipamiento sugerido -->
                                      <div class="form-group">
                                          <label>Equipamiento sugerido</label>
                                          <textarea name="equipamiento" class="form-control" rows="3"></textarea>
                                      </div>
                                      <!--Recomendaciones -->
                                      <div class="form-group">
                                          <label>Recomendaciones</label>
                                          <textarea name="recomendacion" class="form-control" rows="3"></textarea>
                                      </div>
                                      <!--Costos -->
                                      <div class="form-group">
                                          <label>Costo</label>
                                          <input name="costo" class="form-control">
                                      </div>
                                      <!--Rutas -->
                                      <div class="form-group">
                                          <label>Rutas</label>
                                          <input name="ruta" class="form-control">
                                      </div>

                                    </div>
                                    <div class="col-lg-12">
                                      <!--Botones para guardar el evento o volver a la pagina de inicio -->
                                      <input type="submit" class="btn btn-default" value="Guardar"/>
                                      <!--a href="#" class="btn btn-default">Cancelar</a-->
                                    </div>
                                </form>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
                 <!-- /. ROW  -->
				 <footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez</a></p></footer>
				   </div>
             <!-- /. PAGE INNER  -->
      </div>
