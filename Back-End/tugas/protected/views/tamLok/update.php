<?php
/* @var $this TamLokController */
/* @var $model TamLok */

$this->breadcrumbs=array(
	'Tam Loks'=>array('index'),
	$model->idtambah=>array('view','id'=>$model->idtambah),
	'Update',
);

$this->menu=array(
	array('label'=>'List TamLok', 'url'=>array('index')),
	array('label'=>'Create TamLok', 'url'=>array('create')),
	array('label'=>'View TamLok', 'url'=>array('view', 'id'=>$model->idtambah)),
	array('label'=>'Manage TamLok', 'url'=>array('admin')),
);
?>

<h1>Update TamLok <?php echo $model->idtambah; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>