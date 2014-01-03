<?php
/* @var $this TamLokController */
/* @var $model TamLok */

$this->breadcrumbs=array(
	'Tambah Lokasis'=>array('index'),
	$model->idtambah,
);

$this->menu=array(
	array('label'=>'List Tambah Lokasi', 'url'=>array('index')),
	//array('label'=>'Create Tambah Lokasi', 'url'=>array('create')),
	array('label'=>'Update Tambah Lokasi', 'url'=>array('update', 'id'=>$model->idtambah)),
	array('label'=>'Delete Tambah Lokasi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idtambah),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tambah Lokasi', 'url'=>array('admin')),
);
?>

<h1>View Tambah Lokasi #<?php echo $model->idtambah; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idtambah',
		'nama',
		'email',
		'judul',
		'artikel',
		'lokasi',
	),
)); ?>
