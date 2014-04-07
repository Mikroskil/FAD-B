<?php
/* @var $this AgendaController */
/* @var $model Agenda */
/* @var $form CActiveForm */
?>

<div class="panel">
	<div class="panel-heading">
		<h5>Fields with * <span class="label label-danger">required</span></h5>
	</div>
	<div class="panel-body">
	<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'agenda-form',
			'enableAjaxValidation'=>false,
			)); ?>
	<?php echo $form->errorSummary($model); ?>
				
	
				<div class="form-group">
				<?php echo $form->labelEx($model,'judul'); ?>
				<?php echo $form->textField($model,'judul',array('size'=>50,'maxlength'=>50,'class'=>'form-control')); ?>
				<?php echo $form->error($model,'judul'); ?>
			</div>
	
				<div class="form-group">
				<?php echo $form->labelEx($model,'ket'); ?>
				<?php echo $form->textArea($model,'ket',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
				<?php echo $form->error($model,'ket'); ?>
			</div>
	<div class="form-group">
				<?php echo $form->labelEx($model,'tanggal'); ?>
				
				<?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
      					'name'=>'Agenda[tanggal]',
      					'options'=>array(
          							'showAnim'=>'fold',
     								),
     					
      					'htmlOptions'=>array(
          									'class'=>'form-control'
      									),
  						));
  				?>
				<?php echo $form->error($model,'tanggal'); ?>
				</div>
		<div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-lg btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>
	</div>
</div>	