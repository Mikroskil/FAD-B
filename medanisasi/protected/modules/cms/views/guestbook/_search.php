<?php
/* @var $this GuestbookController */
/* @var $model Guestbook */
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
		<?php echo $form->label($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>40,'maxlength'=>40,'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>30,'maxlength'=>30,'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'alamat'); ?>
		<?php echo $form->textField($model,'alamat',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'pesan'); ?>
		<?php echo $form->textArea($model,'pesan',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'tanggal'); ?>
		<?php echo $form->textField($model,'tanggal',array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::submitButton('Search',array('class'=>'btn btn-lg btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</form>
</div>
</div><!-- search-form -->
</div>