<?php
/* @var $this PagesController */
/* @var $model Pages */

$this->breadcrumbs=array(
	'Pages'=>array('admin'),
	$model->pageid=>array('view','id'=>$model->pageid),
	'Update',
);
$this->menu=array(
	array('icon' => 'icon-home','label'=>'Manage Pages', 'url'=>array('admin')),
	array('icon' => 'icon-plus-sign','label'=>'Create Pages', 'url'=>array('create')),
	array('icon' => 'icon-zoom-in','label'=>'View Pages', 'url'=>array('view', 'id'=>$model->pageid)),
);
?>

<h1>Update Pages <?php echo $model->pageid; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>