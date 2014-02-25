<?php
/* @var $this SubKategoriController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sub Kategoris',
);

$this->menu=array(
	array('label'=>'Create SubKategori', 'url'=>array('create')),
	array('label'=>'Manage SubKategori', 'url'=>array('admin')),
);
?>

<h1>Sub Kategoris</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
