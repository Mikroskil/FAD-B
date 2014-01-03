<?php
/* @var $this SubKategoriController */
/* @var $model SubKategori */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sub-kategori-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idsub'); ?>
		<?php echo $form->textField($model,'idsub',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'idsub'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idkategori'); ?>
		<?php echo $form->textField($model,'idkategori',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'idkategori'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idartikel'); ?>
		<?php echo $form->textField($model,'idartikel',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'idartikel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subkategori'); ?>
		<?php echo $form->textField($model,'subkategori',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'subkategori'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->