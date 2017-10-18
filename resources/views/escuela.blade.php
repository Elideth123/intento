@extends('index')

@section('contenido')

<form action=""  class="form-inline">
<div class="row mt">
          		<div class="col-lg-12">
          			<div class="form-panel">
                  	  <h3 class="mb">Escuelas</h3>
                      <form class="form-inline" role="form">
                          <div class="form-group">Escuelas: &nbsp;
                              <label class="sr-only" for="exampleInputEmail2">Escuela</label>
                              <input type="text" class="form-control" name="nomb" placeholder="Nombre escuela" >
							  <i class="fa fa-pencil" aria-hidden="true"></i>
                          </div>
<br><br>
                          <div class="form-group">Calle: &nbsp;
                              <label class="sr-only">Calle</label>
                              <input type="text" class="form-control" name="calle" placeholder="Calle">
                              <i class="fa fa-map-marker" aria-hidden="true"></i>
                          </div>                
<br><br>       
						<div class="form-group">Número: &nbsp;
                              <label class="sr-only">Número</label>
                              <input type="text" class="form-control" name="num" placeholder="Número">
                              <i class="fa fa-map-marker" aria-hidden="true"></i>
                         </div> 
<br><br>
                         <div class="form-group">Telefono: &nbsp;
                              <label class="sr-only">Telefono</label>
                              <input type="text" class="form-control" name="tel" placeholder="Telefono">
						      <i class="fa fa-phone" aria-hidden="true"></i>
                         </div> 
<br><br>
                         <div class="form-group">E-mail: &nbsp;
                              <label class="sr-only">E-mail</label>
                              <input type="text" class="form-control" name="em" placeholder="ejemplo@gmail.com">
						      <i class="fa fa-envelope-o" aria-hidden="true"></i>
                         </div> 
<br><br>
						<div class="form-group">Pagína Web:: &nbsp;
                              <label class="sr-only">Pagína Web:</label>
                              <input type="text" class="form-control" name="pw" placeholder="www.tuvocacion.online">
						      <i class="fa fa-laptop" aria-hidden="true"></i>
                         </div>                          				 
 <br><br>                                            
						Municipio:&nbsp;
						<select class="form-control">
						<option>Toluca</option>
						<option>Lerma</option>
						<option>Metepec</option>
						<option>Otzolotepec</option>
						<option>Temoaya</option>
						</select>
						<i class="fa fa-globe" aria-hidden="true"></i>	
<br><br>
		<button type="submit" class="btn btn-theme">Guardar</button>
                      </form>
          			</div><!-- /form-panel -->
          		</div><!-- /col-lg-12 -->
          	</div><!-- /row -->
<br><br>
</form>

@stop