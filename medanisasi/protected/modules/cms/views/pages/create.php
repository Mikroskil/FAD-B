<?php
/* @var $this PagesController */
/* @var $model Pages */

$this->breadcrumbs=array(
	'Pages'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('icon' => 'icon-home','label'=>'Manage Pages', 'url'=>array('admin')),
);
?>

<h1>Create Pages</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>