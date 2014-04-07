<?php
/* @var $this SlideController */
/* @var $model Slide */

$this->breadcrumbs=array(
	'Slides'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('icon' => 'icon-home','label'=>'Manage Slide', 'url'=>array('admin')),
);
?>

<h1>Create Slide</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>