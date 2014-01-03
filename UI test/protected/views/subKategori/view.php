<?php
/* @var $this SubKategoriController */
/* @var $model SubKategori */

$this->breadcrumbs=array(
	'Sub Kategoris'=>array('index'),
	$model->idsub,
);

$this->menu=array(
	array('label'=>'List SubKategori', 'url'=>array('index')),
	array('label'=>'Create SubKategori', 'url'=>array('create')),
	array('label'=>'Update SubKategori', 'url'=>array('update', 'id'=>$model->idsub)),
	array('label'=>'Delete SubKategori', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idsub),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SubKategori', 'url'=>array('admin')),
);
?>

<h1>View SubKategori #<?php echo $model->idsub; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idsub',
		'idkategori',
		'idartikel',
		'subkategori',
	),
)); ?>
