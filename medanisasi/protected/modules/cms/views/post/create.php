<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('icon' => 'icon-home','label'=>'Manage Post', 'url'=>array('admin')),
);
?>

<h1>Create Post</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>