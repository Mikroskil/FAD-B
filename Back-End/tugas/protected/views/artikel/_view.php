<?php
/* @var $this ArtikelController */
/* @var $data Artikel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idartikel')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idartikel), array('view', 'id'=>$data->idartikel)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('judul')); ?>:</b>
	<?php echo CHtml::encode($data->judul); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('artikel')); ?>:</b>
	<?php echo $data->artikel; ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gambar')); ?>:</b>
	<?php /*?><?php echo CHtml::encode($data->gambar); ?><?php */?>
    <img src="<?php echo Yii::app()->request->baseUrl.'/upload/'.$data->gambar;?> "  width="100" style="margin-left:5px;"/>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lokasi')); ?>:</b>
	<?php echo CHtml::encode($data->lokasi); ?>
	<br />

	<b><?php /*?><?php echo CHtml::encode($data->getAttributeLabel('maps')); ?>:</b>
    <?php echo $data->maps; ?><?php */?>
	<?php /*?><?php echo CHtml::encode($data->maps); ?><?php */?>
	<br />


</div>