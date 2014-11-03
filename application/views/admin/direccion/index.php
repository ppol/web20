<?php $this->load->view('layout/header')?>

<h1><?php echo $titulo?></h1>
<p><a href="<?php echo base_url()?>admin/direccion/agregar" class="btn btn-primary">Agregar</a></p>
<form method="post" accept-charset="utf-8">
	<input type="text" name="filtro" value="<?php echo $filtro; ?>">
	<input type="submit" name="Buscar">
</form>
<table class="table table-bordered table-striped">
	<tr>
		<th>ID</th>
		<th>Calle</th>
		<th>Nro.</th>
		<th>Piso</th>
		<th>Dpto.</th>
		<th>Localidad</th>
		<th>Persona</th>
		<th>Departamento</th>
		<th></th>
	</tr>
<?php foreach ($direcciones as $direccion) { ?>
	<tr>
		<td><?php echo $direccion['id'] ?></td>
		<td><?php echo $direccion['calle'] ?></td>
		<td><?php echo $direccion['numero'] ?></td>
		<td><?php echo $direccion['piso'] ?></td>
		<td><?php echo $direccion['depto'] ?></td>
		<td><?php echo $direccion['localidad'] ?></td>
		<td><?php echo $direccion['persona_id'] ?></td>
		<td><?php echo $direccion['departamento_id'] ?></td>



		<td class="text-right">
			<a href="<?php echo base_url().'admin/direccion/editar/'.$direccion['id']?>" class="btn btn-sm btn-info">Editar</a>
			<button value="<?php echo $direccion['id']?>" class="eliminar btn btn-sm btn-danger">Eliminar</button>
		</td>
	</tr>
<?php } ?>
</table>
<script>
$(document).ready(function(){
	function eliminar(){
		var elimina = confirm('Estás seguro de eliminar: ' + $(this).val() + '?');
		if(elimina){
			//alert('registro eliminado!');
			$.post("<?php echo base_url()?>admin/direccion/eliminar/" + $(this).val(), function(data){
				//alert(data)
				if(data==1){
					$(location).attr('href','<?php echo base_url()?>admin/direccion/index');
				}
			});
		}
	}
	$(".eliminar").click(eliminar);
});
</script>
<?php $this->load->view('layout/footer');
