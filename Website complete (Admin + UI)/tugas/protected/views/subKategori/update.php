<?php
/* @var $this SubKategoriController */
/* @var $model SubKategori */

$this->breadcrumbs=array(
	'Sub Kategoris'=>array('index'),
	$model->idsub=>array('view','id'=>$model->idsub),
	'Update',
);

$this->menu=array(
	array('label'=>'List SubKategori', 'url'=>array('index')),
	array('label'=>'Create SubKategori', 'url'=>array('create')),
	array('label'=>'View SubKategori', 'url'=>array('view', 'id'=>$model->idsub)),
	array('label'=>'Manage SubKategori', 'url'=>array('admin')),
);
?>

<h1>Update SubKategori <?php echo $model->idsub; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>