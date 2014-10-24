<?php $this->load->view('layout/header')?>

<h1><?php echo $titulo?></h1>
<p><a href="<?php echo base_url()?>admin/provincia/agregar" class="btn btn-primary">Agregar</a></p>
<table class="table table-bordered table-striped">
	<tr>
		<th>ID</th>
		<th>Nombre</th>
		<th></th>
	</tr>
<?php
foreach ($provincias as $provincia) {
?>
	<tr>
		<td><?php echo $provincia['id']?></td>
		<td><?php echo $provincia['nombre']?></td>
		<td class="text-right">
			<a href="<?php echo base_url().'admin/provincia/editar/'.$provincia['id']?>" class="btn btn-sm btn-info">Editar</a>
			<button value="<?php echo $provincia['id']?>" class="eliminar btn btn-sm btn-danger">Eliminar</button>
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
			$.post("ajax/test.html", function(data){
				$(".result").html(data);
			})
		}
	}
	$(".eliminar").click(eliminar);
});
</script>
<?php $this->load->view('layout/footer');
