<?php
/* @var $this SubKategoriController */
/* @var $data SubKategori */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idsub')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idsub), array('view', 'id'=>$data->idsub)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idkategori')); ?>:</b>
	<?php echo CHtml::encode($data->idkategori); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idartikel')); ?>:</b>
	<?php echo CHtml::encode($data->idartikel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subkategori')); ?>:</b>
	<?php echo CHtml::encode($data->subkategori); ?>
	<br />


</div>