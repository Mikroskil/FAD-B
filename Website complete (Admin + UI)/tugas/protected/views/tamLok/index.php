<?php
/* @var $this TamLokController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tambah Lokasis',
);

$this->menu=array(
	//array('label'=>'Create Tambah Lokasi', 'url'=>array('create')),
	array('label'=>'Manage Tambah Lokasi', 'url'=>array('admin')),
);
?>

<h1>Tambah Lokasis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
