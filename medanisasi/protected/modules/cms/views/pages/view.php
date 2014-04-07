<?php
/* @var $this PagesController */
/* @var $model Pages */

$this->breadcrumbs=array(
	'Pages'=>array('admin'),
	$model->pageid,
);

$this->menu=array(
	array('icon' => 'icon-home','label'=>'Manage Pages', 'url'=>array('admin')),
	array('icon' => 'icon-plus-sign','label'=>'Create Pages', 'url'=>array('create')),
	array('icon' => 'icon-pencil','label'=>'Update Pages', 'url'=>array('update', 'id'=>$model->pageid)),
	array('icon' => 'icon-trash','label'=>'Delete Pages', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pageid),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View Pages #<?php echo $model->pageid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pageid',
		'menutitle',
		'parent',
		'headtitle',
		'url',
		'content',
	),
)); ?>
