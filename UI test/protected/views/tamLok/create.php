<?php
/* @var $this TamLokController */
/* @var $model TamLok */

$this->breadcrumbs=array(
	'Tam Loks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TamLok', 'url'=>array('index')),
	array('label'=>'Manage TamLok', 'url'=>array('admin')),
);
?>

<h1>Create TamLok</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>