<?php
/* @var $this ArtikelController */
/* @var $model Artikel */
/* @var $form CActiveForm */
?>

<div class="form">

<?php 
	

	$form=$this->beginWidget('CActiveForm', array(
	'id'=>'artikel-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idartikel'); ?>
		<?php echo $form->textField($model,'idartikel',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'idartikel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'judul'); ?>
		<?php echo $form->textField($model,'judul',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'judul'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'artikel'); ?>
		<?php echo $form->textArea($model,'artikel',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'artikel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gambar'); ?>
		<?php echo $form->fileField($model,'gambar',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'gambar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lokasi'); ?>
		<?php echo $form->textArea($model,'lokasi',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'lokasi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'maps'); ?>
		<?php echo $form->textArea($model,'maps',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'maps'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->