<?php
/* @var $this KomentarController */
/* @var $model Komentar */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'komentar-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idkomentar'); ?>
		<?php echo $form->textField($model,'idkomentar',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'idkomentar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idartikel'); ?>
		<?php echo $form->textField($model,'idartikel',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'idartikel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'iduser'); ?>
		<?php echo $form->textField($model,'iduser',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'iduser'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'komentar'); ?>
		<?php echo $form->textArea($model,'komentar',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'komentar'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->