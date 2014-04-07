<?php
/* @var $this AgendaController */
/* @var $data Agenda */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('judul')); ?>:</b>
	<?php echo CHtml::encode($data->judul); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ket')); ?>:</b>
	<?php echo CHtml::encode($data->ket); ?>
	<br />


</div>