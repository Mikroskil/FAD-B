<?php
/* @var $this GuestbookController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Guestbooks',
);

$this->menu=array(
	array('label'=>'Create Guestbook', 'url'=>array('create')),
	array('label'=>'Manage Guestbook', 'url'=>array('admin')),
);
?>

<h1>Guestbooks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
