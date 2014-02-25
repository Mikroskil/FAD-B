<?php
/* @var $this KategoriController */
/* @var $model Kategori */

$this->breadcrumbs=array(
	'Kategoris'=>array('index'),
	$model->idkategori=>array('view','id'=>$model->idkategori),
	'Update',
);

$this->menu=array(
	array('label'=>'List Kategori', 'url'=>array('index')),
	array('label'=>'Create Kategori', 'url'=>array('create')),
	array('label'=>'View Kategori', 'url'=>array('view', 'id'=>$model->idkategori)),
	array('label'=>'Manage Kategori', 'url'=>array('admin')),
);
?>

<h1>Update Kategori <?php echo $model->idkategori; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>