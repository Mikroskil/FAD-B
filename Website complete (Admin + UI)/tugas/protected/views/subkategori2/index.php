<?php
/* @var $this Subkategori2Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Subkategoris',
);

$this->menu=array(
	array('label'=>'Create Subkategori', 'url'=>array('create')),
	array('label'=>'Manage Subkategori', 'url'=>array('admin')),
);
?>

<h1>Subkategoris</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
