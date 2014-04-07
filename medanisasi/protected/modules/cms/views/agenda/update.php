<?php
/* @var $this AgendaController */
/* @var $model Agenda */

$this->breadcrumbs=array(
	'Agendas'=>array('admin'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);
$this->menu=array(
	array('icon' => 'icon-home','label'=>'Manage Agenda', 'url'=>array('admin')),
	array('icon' => 'icon-plus-sign','label'=>'Create Agenda', 'url'=>array('create')),
	array('icon' => 'icon-zoom-in','label'=>'View Agenda', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Update Agenda <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>