<?php $this->load->view('layout/header')?>

<h1><?php echo $titulo?></h1>
<p><a href="<?php echo base_url()?>admin/departamento/agregar" class="btn btn-primary">Agregar</a></p>
<form method="post" accept-charset="utf-8">
	<input type="text" name="filtro" value="<?php echo $filtro; ?>">
	<input type="submit" name="Buscar">
</form>
<table class="table table-bordered table-striped">
	<tr>
		<th>ID</th>
		<th>Nombre</th>
		<th></th>
	</tr>
<?php foreach ($departamentos as $departamento) { ?>
	<tr>
		<td><?php echo $departamento['id']?></td>
		<td><?php echo $departamento['nombre']?></td>
		<td class="text-right">
			<a href="<?php echo base_url().'admin/departamento/editar/'.$departamento['id']?>" class="btn btn-sm btn-info">Editar</a>
			<button value="<?php echo $departamento['id']?>" class="eliminar btn btn-sm btn-danger">Eliminar</button>
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
			$.post("<?php echo base_url()?>admin/departamento/eliminar/" + $(this).val(), function(data){
				//alert(data)
				if(data==1){
					$(location).attr('href','<?php echo base_url()?>admin/departamento/index');
				}
			});
		}
	}
	$(".eliminar").click(eliminar);
});
</script>
<?php $this->load->view('layout/footer');
