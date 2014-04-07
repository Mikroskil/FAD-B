<?php
/* @var $this GuestbookController */
/* @var $model Guestbook */

$this->breadcrumbs=array(
	'Guestbooks'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('icon' => 'icon-home','label'=>'Manage Guestbook', 'url'=>array('admin')),
);
?>

<h1>Create Guestbook</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>