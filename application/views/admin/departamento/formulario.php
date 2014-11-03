<?php $this->load->view('layout/header')?>
<h1><?php echo $accion ?> Departamento</h1>
<form action="<?php echo base_url().'admin/departamento/'.strtolower($accion); echo !empty($id)?"/$id":''; ?>" method="post" role="form">
	<div class="form-group">
	<label for="departamento">Departamento</label>
	<input type="text" class="form-control" name="departamento" id="departamento"
	value="<?php echo isset($reg['nombre'])? $reg['nombre']:'' ?>"
	placeholder="Escriba el nombre de la Provincia">
	</div>
	<button type="submit" class="btn btn-primary">Guardar</button>
	<a href="<?php echo base_url()?>admin/departamento/index" class="btn btn-sm btn-default">Cancelar</a>
</form>
<?php $this->load->view('layout/footer');
