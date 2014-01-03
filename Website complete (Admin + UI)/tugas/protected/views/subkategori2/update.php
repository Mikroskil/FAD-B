<?php
/* @var $this Subkategori2Controller */
/* @var $model Subkategori2 */

$this->breadcrumbs=array(
	'Subkategoris'=>array('index'),
	$model->idsub=>array('view','id'=>$model->idsub),
	'Update',
);

$this->menu=array(
	array('label'=>'List Subkategori', 'url'=>array('index')),
	array('label'=>'Create Subkategori', 'url'=>array('create')),
	array('label'=>'View Subkategori', 'url'=>array('view', 'id'=>$model->idsub)),
	array('label'=>'Manage Subkategori', 'url'=>array('admin')),
);
?>

<h1>Update Subkategori <?php echo $model->idsub; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>