<?php
/* @var $this PagesController */
/* @var $model Pages */
/* @var $form CActiveForm */
?>
<div class="col-xs-5">
<div class="panel">
<div class="panel-heading">
Search..
</div>
<div class="panel-body">
<form role="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'pageid'); ?>
		<?php echo $form->textField($model,'pageid',array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'menutitle'); ?>
		<?php echo $form->textField($model,'menutitle',array('size'=>50,'maxlength'=>50,'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'parent'); ?>
		<?php echo $form->textField($model,'parent',array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'headtitle'); ?>
		<?php echo $form->textField($model,'headtitle',array('size'=>50,'maxlength'=>50,'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'url'); ?>
		<?php echo $form->textField($model,'url',array('size'=>30,'maxlength'=>30,'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::submitButton('Search',array('class'=>'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</form>
</div>
</div><!-- search-form -->
</div>