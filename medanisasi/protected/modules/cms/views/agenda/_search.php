<?php
/* @var $this AgendaController */
/* @var $model Agenda */
/* @var $form CActiveForm */
?>
<div class="col-xs-5">
<div class="panel">
<div class="panel-heading">
Search..
</div>
<div class="panel-body">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'tanggal'); ?>
		<?php echo $form->textField($model,'tanggal',array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'judul'); ?>
		<?php echo $form->textField($model,'judul',array('size'=>50,'maxlength'=>50,'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'ket'); ?>
		<?php echo $form->textArea($model,'ket',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::submitButton('Search',array('class'=>'btn btn-lg btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</form>
</div>
</div><!-- search-form -->
</div>