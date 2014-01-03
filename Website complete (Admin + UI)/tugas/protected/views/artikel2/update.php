<?php
/* @var $this Artikel2Controller */
/* @var $model Artikel2 */

$this->breadcrumbs=array(
	'Artikels'=>array('index'),
	$model->idartikel=>array('view','id'=>$model->idartikel),
	'Update',
);

$this->menu=array(
	array('label'=>'List Artikel', 'url'=>array('index')),
	array('label'=>'Create Artikel', 'url'=>array('create')),
	array('label'=>'View Artikel', 'url'=>array('view', 'id'=>$model->idartikel)),
	array('label'=>'Manage Artikel', 'url'=>array('admin')),
);
?>

<h1>Update Artikel <?php echo $model->idartikel; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>