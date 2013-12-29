<?php
/* @var $this TamLokController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tam Loks',
);

$this->menu=array(
	/*array('label'=>'Create TamLok', 'url'=>array('create')),*/
	array('label'=>'Manage Tambah Lokasi', 'url'=>array('admin')),
);
?>

<h1>Tambah Lokasi</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
