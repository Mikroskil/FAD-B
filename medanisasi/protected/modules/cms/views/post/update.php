<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('admin'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);
$this->menu=array(
	array('icon' => 'icon-home','label'=>'Manage Post', 'url'=>array('admin')),
	array('icon' => 'icon-plus-sign','label'=>'Create Post', 'url'=>array('create')),
	array('icon' => 'icon-zoom-in','label'=>'View Post', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Update Post <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>