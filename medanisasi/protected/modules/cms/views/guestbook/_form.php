<?php
/* @var $this GuestbookController */
/* @var $model Guestbook */
/* @var $form CActiveForm */
?>

<div class="panel">
	<div class="panel-heading">
		<h5>Fields with * <span class="label label-danger">required</span></h5>
	</div>
	<div class="panel-body">
	<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'guestbook-form',
			'enableAjaxValidation'=>false,
			)); ?>
	<?php echo $form->errorSummary($model); ?>
				<div class="form-group">
				<?php echo $form->labelEx($model,'nama'); ?>
				<?php echo $form->textField($model,'nama',array('size'=>40,'maxlength'=>40,'class'=>'form-control')); ?>
				<?php echo $form->error($model,'nama'); ?>
			</div>
	
				<div class="form-group">
				<?php echo $form->labelEx($model,'email'); ?>
				<?php echo $form->textField($model,'email',array('size'=>30,'maxlength'=>30,'class'=>'form-control')); ?>
				<?php echo $form->error($model,'email'); ?>
			</div>
	
				<div class="form-group">
				<?php echo $form->labelEx($model,'alamat'); ?>
				<?php echo $form->textField($model,'alamat',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
				<?php echo $form->error($model,'alamat'); ?>
			</div>
	
				<div class="form-group">
				<?php echo $form->labelEx($model,'pesan'); ?>
				<?php echo $form->textArea($model,'pesan',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
				<?php echo $form->error($model,'pesan'); ?>
			</div>
	
	
		<div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-lg btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>
	</div>
</div>	