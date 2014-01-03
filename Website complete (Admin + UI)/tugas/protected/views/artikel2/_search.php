<?php
/* @var $this Artikel2Controller */
/* @var $model Artikel2 */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<!--<div class="row">
		<?php echo $form->label($model,'idartikel'); ?>
		<?php echo $form->textField($model,'idartikel'); ?>
	</div>-->

	<div class="row">
		<?php echo $form->label($model,'kategori'); ?>
		<?php echo $form->textField($model,'kategori',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subkategori'); ?>
		<?php echo $form->textField($model,'subkategori',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'judul'); ?>
		<?php echo $form->textField($model,'judul',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<!--<div class="row">
		<?php echo $form->label($model,'artikel'); ?>
		<?php echo $form->textArea($model,'artikel',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gambar'); ?>
		<?php echo $form->textArea($model,'gambar',array('rows'=>6, 'cols'=>50)); ?>
	</div>-->

	<div class="row">
		<?php echo $form->label($model,'lokasi'); ?>
		<?php echo $form->textArea($model,'lokasi',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<!--<div class="row">
		<?php echo $form->label($model,'maps'); ?>
		<?php echo $form->textArea($model,'maps',array('rows'=>6, 'cols'=>50)); ?>
	</div>-->

	<div class="row">
		<?php echo $form->label($model,'create_date'); ?>
		<?php echo $form->textField($model,'create_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'create_by'); ?>
		<?php echo $form->textField($model,'create_by',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'modify_date'); ?>
		<?php echo $form->textField($model,'modify_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'modify_by'); ?>
		<?php echo $form->textField($model,'modify_by',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->