<?php
/* @var $this PostController */
/* @var $model Post */

$this->pageTitle=$model->title;
?>

<?php $this->renderPartial('_view', array(
	'data'=>$model,
)); ?>
