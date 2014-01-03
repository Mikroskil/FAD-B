<?php
/* @var $this KomentarController */
/* @var $data Komentar */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idkomentar')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idkomentar), array('view', 'id'=>$data->idkomentar)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idartikel')); ?>:</b>
	<?php echo CHtml::encode($data->idartikel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iduser')); ?>:</b>
	<?php echo CHtml::encode($data->iduser); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('komentar')); ?>:</b>
	<?php echo CHtml::encode($data->komentar); ?>
	<br />


</div>