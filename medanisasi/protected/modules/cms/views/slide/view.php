<?php
/* @var $this SlideController */
/* @var $model Slide */

$this->breadcrumbs=array(
	'Slides'=>array('admin'),
	$model->id,
);

$this->menu=array(
	array('icon' => 'icon-home','label'=>'Manage Slide', 'url'=>array('admin')),
	array('icon' => 'icon-plus-sign','label'=>'Create Slide', 'url'=>array('create')),
	array('icon' => 'icon-pencil','label'=>'Update Slide', 'url'=>array('update', 'id'=>$model->id)),
	array('icon' => 'icon-trash','label'=>'Delete Slide', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View Slide #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'file',
		'judul',
		'ket',
	),
)); ?>
