<?php
/* @var $this Subkategori2Controller */
/* @var $model Subkategori2 */

$this->breadcrumbs=array(
	'Subkategoris'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Subkategori', 'url'=>array('index')),
	array('label'=>'Manage Subkategori', 'url'=>array('admin')),
);
?>

<h1>Create Subkategori</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>