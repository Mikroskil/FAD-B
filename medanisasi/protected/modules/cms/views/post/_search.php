<?php
/* @var $this PostController */
/* @var $model Post */
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
		<?php echo $form->label($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>128,'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'tags'); ?>
		<?php echo $form->textArea($model,'tags',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time',array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'update_time'); ?>
		<?php echo $form->textField($model,'update_time',array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'author_id'); ?>
		<?php echo $form->textField($model,'author_id',array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::submitButton('Search',array('class'=>'btn btn-lg btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</form>
</div>
</div><!-- search-form -->
</div>