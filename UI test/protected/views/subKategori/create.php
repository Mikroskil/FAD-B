<?php
/* @var $this SubKategoriController */
/* @var $model SubKategori */

$this->breadcrumbs=array(
	'Sub Kategoris'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SubKategori', 'url'=>array('index')),
	array('label'=>'Manage SubKategori', 'url'=>array('admin')),
);
?>

<h1>Create SubKategori</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>