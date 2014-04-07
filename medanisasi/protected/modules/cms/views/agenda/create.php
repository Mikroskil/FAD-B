<?php
/* @var $this AgendaController */
/* @var $model Agenda */

$this->breadcrumbs=array(
	'Agenda'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('icon' => 'icon-home','label'=>'Manage Agenda', 'url'=>array('admin')),
);
?>

<h1>Create Agenda</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>