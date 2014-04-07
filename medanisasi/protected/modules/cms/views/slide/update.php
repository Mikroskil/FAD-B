<?php
/* @var $this SlideController */
/* @var $model Slide */

$this->breadcrumbs=array(
	'Slides'=>array('admin'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);
$this->menu=array(
	array('icon' => 'icon-home','label'=>'Manage Slide', 'url'=>array('admin')),
	array('icon' => 'icon-plus-sign','label'=>'Create Slide', 'url'=>array('create')),
	array('icon' => 'icon-zoom-in','label'=>'View Slide', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Update Slide <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>