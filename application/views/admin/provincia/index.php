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
		<td><a href="<?php echo base_url().'admin/provincia/editar/'.$provincia['id']?>" class="btn btn-danger">Editar</a></td>
	</tr>
<?php } ?>
</table>
<?php $this->load->view('layout/footer');
