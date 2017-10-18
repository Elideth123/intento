@extends('index')

@section('contenido')

<form action=""  class="form-inline">
<div class="row mt">
          		<div class="col-lg-12">
          			<div class="form-panel">
                  	  <h3 class="mb">Carreras</h3>
                      <form class="form-inline" role="form">
                          <div class="form-group">Nombre: &nbsp;
                              <label class="sr-only" for="exampleInputEmail2">Nombre</label>
                              <input type="text" class="form-control" placeholder="carrera">
                              <i class="fa fa-pencil" aria-hidden="true"></i>
                          </div>
<br><br>
                          <div class="form-group">Duración: &nbsp;
                              <label class="sr-only" for="exampleInputEmail2">Duración</label>
                              <input type="text" class="form-control" name="dur" placeholder="ej: 5 años">
							  <i class="fa fa-calendar" aria-hidden="true"></i>
                          </div>                
<br><br>       
						  <div class="form-group">
						  	Modalidad:&nbsp;
                                <select class="form-control">
								<option>Bimestral</option>
								<option>Trimestral</option>
								<option>Cuatrimestral</option>
								</select>
							<i class="fa fa-calendar" aria-hidden="true"></i>
                          </div>
                          <br><br>       
						  <div class="form-group">
						  	Escuela:&nbsp;
                                <select class="form-control">
		                        <option>UTVT</option>
		                        <option>UPVT</option>
		                        <option>UAM</option>
		                        <option>UVM</option>
	                            </select>
							<i class="fa fa-calendar" aria-hidden="true"></i>
                          </div>
 <br><br>                                            
		<button type="submit" class="btn btn-theme">Guardar</button>
                      </form>
          			</div><!-- /form-panel -->
          		</div><!-- /col-lg-12 -->
          	</div><!-- /row -->
<br><br>
</form>


@stop