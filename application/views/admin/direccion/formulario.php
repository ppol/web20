<?php $this->load->view('layout/header')?>
<h1><?php echo $accion ?> Direccion</h1>
<form action="<?php echo base_url().'admin/direccion/'.strtolower($accion); echo !empty($id)?"/$id":''; ?>" method="post" role="form">
	<div class="form-group">
		<label for="calle">Calle</label>
		<input type="text" class="form-control" name="calle" id="calle"
		value="<?php echo isset($reg['calle'])? $reg['calle']:'' ?>"
		placeholder="Escriba el nombre de la calle">
	</div>
	<div class="form-group">
		<label for="numero">Nro.</label>
		<input type="text" class="form-control" name="numero" id="numero"
		value="<?php echo isset($reg['numero'])? $reg['numero']:'' ?>"
		placeholder="Escriba el numero">
	</div>
	<div class="form-group">
		<label for="piso">Piso</label>
		<input type="text" class="form-control" name="piso" id="piso"
		value="<?php echo isset($reg['piso'])? $reg['piso']:'' ?>"
		placeholder="Escriba el piso">
	</div>
	<div class="form-group">
		<label for="depto">Depto</label>
		<input type="text" class="form-control" name="depto" id="depto"
		value="<?php echo isset($reg['depto'])? $reg['depto']:'' ?>"
		placeholder="Escriba el depto">
	</div>
	<div class="form-group">
		<label for="localidad">Localidad</label>
		<input type="text" class="form-control" name="localidad" id="localidad"
		value="<?php echo isset($reg['localidad'])? $reg['localidad']:'' ?>"
		placeholder="Escriba la localidad">
	</div>
	<div class="form-group">
		<label for="persona_id">Persona ID</label>
		<input type="text" class="form-control" name="persona_id" id="persona_id"
		value="<?php echo isset($reg['persona_id'])? $reg['persona_id']:'' ?>"
		placeholder="Persona ID">
	</div>
	<div class="form-group">
		<label for="departamento_id">Departamento ID</label>
		<input type="text" class="form-control" name="departamento_id" id="departamento_id"
		value="<?php echo isset($reg['departamento_id'])? $reg['departamento_id']:'' ?>"
		placeholder="Persona ID">
	</div>
	<button type="submit" class="btn btn-primary">Guardar</button>
	<a href="<?php echo base_url()?>admin/direccion/index" class="btn btn-sm btn-default">Cancelar</a>
</form>
<?php $this->load->view('layout/footer');
