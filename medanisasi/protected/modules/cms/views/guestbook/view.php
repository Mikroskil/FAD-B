<?php
/* @var $this GuestbookController */
/* @var $model Guestbook */

$this->breadcrumbs=array(
	'Guestbooks'=>array('admin'),
	$model->id,
);

$this->menu=array(
	array('icon' => 'icon-home','label'=>'Manage Guestbook', 'url'=>array('admin')),
	array('icon' => 'icon-plus-sign','label'=>'Create Guestbook', 'url'=>array('create')),
	array('icon' => 'icon-pencil','label'=>'Update Guestbook', 'url'=>array('update', 'id'=>$model->id)),
	array('icon' => 'icon-trash','label'=>'Delete Guestbook', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View Guestbook #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama',
		'email',
		'alamat',
		'pesan',
		array(
		'name'=>'tanggal',
		'type'=>'datetime'
		)
		
	),
)); ?>
