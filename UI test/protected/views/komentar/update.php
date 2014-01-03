<?php
/* @var $this KomentarController */
/* @var $model Komentar */

$this->breadcrumbs=array(
	'Komentars'=>array('index'),
	$model->idkomentar=>array('view','id'=>$model->idkomentar),
	'Update',
);

$this->menu=array(
	array('label'=>'List Komentar', 'url'=>array('index')),
	array('label'=>'Create Komentar', 'url'=>array('create')),
	array('label'=>'View Komentar', 'url'=>array('view', 'id'=>$model->idkomentar)),
	array('label'=>'Manage Komentar', 'url'=>array('admin')),
);
?>

<h1>Update Komentar <?php echo $model->idkomentar; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>