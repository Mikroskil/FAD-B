<?php
/* @var $this Artikel2Controller */
/* @var $data Artikel2 */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idartikel')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idartikel), array('view', 'id'=>$data->idartikel)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kategori')); ?>:</b>
	<?php echo CHtml::encode($data->kategori); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subkategori')); ?>:</b>
	<?php echo CHtml::encode($data->subkategori); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('judul')); ?>:</b>
	<?php echo CHtml::encode($data->judul); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('artikel')); ?>:</b>
	<?php echo $data->artikel;; ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gambar')); ?>:</b>
	<?php /*?>	<?php echo CHtml::encode($data->gambar); ?><?php */?>
	<img src="<?php echo Yii::app()->request->baseUrl.'/../upload/'.$data->gambar;?> "  width="100" style="margin-left:5px;"/>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lokasi')); ?>:</b>
	<?php echo CHtml::encode($data->lokasi); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('maps')); ?>:</b>
	<?php echo CHtml::encode($data->maps); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_date')); ?>:</b>
	<?php echo CHtml::encode($data->create_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_by')); ?>:</b>
	<?php echo CHtml::encode($data->create_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modify_date')); ?>:</b>
	<?php echo CHtml::encode($data->modify_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modify_by')); ?>:</b>
	<?php echo CHtml::encode($data->modify_by); ?>
	<br />

	*/ ?>

</div>