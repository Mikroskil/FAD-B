<?php
/* @var $this Subkategori2Controller */
/* @var $model Subkategori2 */

$this->breadcrumbs=array(
	'Subkategoris'=>array('index'),
	$model->idsub,
);

$this->menu=array(
	array('label'=>'List Subkategori', 'url'=>array('index')),
	array('label'=>'Create Subkategori', 'url'=>array('create')),
	array('label'=>'Update Subkategori', 'url'=>array('update', 'id'=>$model->idsub)),
	array('label'=>'Delete Subkategori', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idsub),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Subkategori', 'url'=>array('admin')),
);
?>

<h1>View Subkategori #<?php echo $model->idsub; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idsub',
		'kategori',
		'subkategori',
	),
)); ?>
