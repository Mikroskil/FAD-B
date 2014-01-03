<?php
/* @var $this Subkategori2Controller */
/* @var $model Subkategori2 */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'subkategori2-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'kategori'); ?>
		<?php //echo $form->textField($model,'kategori',array('size'=>25,'maxlength'=>25));
		echo $form->dropDownList($model, 'kategori', CHtml::listData(kategori::model()->findAll(),'kategori','kategori'),
		array('prompt' => '-- None --'));
		?>
		<?php echo $form->error($model,'kategori'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subkategori'); ?>
		<?php echo $form->textField($model,'subkategori',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'subkategori'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->