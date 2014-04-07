<?php
/* @var $this GuestbookController */
/* @var $model Guestbook */

$this->breadcrumbs=array(
	'Guestbooks'=>array('admin'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);
$this->menu=array(
	array('icon' => 'icon-home','label'=>'Manage Guestbook', 'url'=>array('admin')),
	array('icon' => 'icon-plus-sign','label'=>'Create Guestbook', 'url'=>array('create')),
	array('icon' => 'icon-zoom-in','label'=>'View Guestbook', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Update Guestbook <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>