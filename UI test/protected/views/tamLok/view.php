<?php
/* @var $this TamLokController */
/* @var $model TamLok */

$this->breadcrumbs=array(
	'Tam Loks'=>array('index'),
	$model->idtambah,
);

$this->menu=array(
	array('label'=>'List TamLok', 'url'=>array('index')),
	array('label'=>'Create TamLok', 'url'=>array('create')),
	array('label'=>'Update TamLok', 'url'=>array('update', 'id'=>$model->idtambah)),
	array('label'=>'Delete TamLok', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idtambah),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TamLok', 'url'=>array('admin')),
);
?>

<h1>View TamLok #<?php echo $model->idtambah; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idtambah',
		'judul',
		'artikel',
		'lokasi',
	),
)); ?>
