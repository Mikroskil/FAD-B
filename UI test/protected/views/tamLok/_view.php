<?php
/* @var $this TamLokController */
/* @var $data TamLok */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idtambah')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idtambah), array('view', 'id'=>$data->idtambah)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('judul')); ?>:</b>
	<?php echo CHtml::encode($data->judul); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('artikel')); ?>:</b>
	<?php echo CHtml::encode($data->artikel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lokasi')); ?>:</b>
	<?php echo CHtml::encode($data->lokasi); ?>
	<br />


</div>