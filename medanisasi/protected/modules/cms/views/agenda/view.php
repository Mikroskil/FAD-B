<?php
/* @var $this AgendaController */
/* @var $model Agenda */

$this->breadcrumbs=array(
	'Agendas'=>array('admin'),
	$model->id,
);

$this->menu=array(
	array('icon' => 'icon-home','label'=>'Manage Agenda', 'url'=>array('admin')),
	array('icon' => 'icon-plus-sign','label'=>'Create Agenda', 'url'=>array('create')),
	array('icon' => 'icon-pencil','label'=>'Update Agenda', 'url'=>array('update', 'id'=>$model->id)),
	array('icon' => 'icon-trash','label'=>'Delete Agenda', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View Agenda #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'tanggal',
		'judul',
		'ket',
	),
)); ?>
