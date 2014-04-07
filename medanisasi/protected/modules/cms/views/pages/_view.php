<?php
/* @var $this PagesController */
/* @var $data Pages */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pageid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pageid), array('view', 'id'=>$data->pageid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('menutitle')); ?>:</b>
	<?php echo CHtml::encode($data->menutitle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parent')); ?>:</b>
	<?php echo CHtml::encode($data->parent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('headtitle')); ?>:</b>
	<?php echo CHtml::encode($data->headtitle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url')); ?>:</b>
	<?php echo CHtml::encode($data->url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />


</div>