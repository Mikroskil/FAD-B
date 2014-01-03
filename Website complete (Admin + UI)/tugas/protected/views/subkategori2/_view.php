<?php
/* @var $this Subkategori2Controller */
/* @var $data Subkategori2 */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idsub')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idsub), array('view', 'id'=>$data->idsub)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kategori')); ?>:</b>
	<?php echo CHtml::encode($data->kategori); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subkategori')); ?>:</b>
	<?php echo CHtml::encode($data->subkategori); ?>
	<br />


</div>