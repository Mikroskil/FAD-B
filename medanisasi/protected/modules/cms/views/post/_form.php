<?php
/* @var $this PostController */
/* @var $model Post */
/* @var $form CActiveForm */
?>
<?php
$this->Widget('ext.tinymce.tinymceWidget', 
	array(
		'elfinder'=>$this->createUrl('/elfinder'), 
		'element'=>'Post_content',
		'width'=>'100%',
		'height'=>450,
		'skin'=>'o2k7',
	));
?>
<div class="panel">
	<div class="panel-heading">
		<h5>Fields with * <span class="label label-danger">required</span></h5>
	</div>
	<div class="panel-body">
	<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'post-form',
			'enableAjaxValidation'=>false,
			)); ?>
	<?php echo $form->errorSummary($model); ?>
				<div class="form-group">
				<?php echo $form->labelEx($model,'title'); ?>
				<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>128,'class'=>'form-control')); ?>
				<?php echo $form->error($model,'title'); ?>
			</div>
	
				<div class="form-group">
				<?php echo $form->labelEx($model,'content'); ?>
				<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
				<?php echo $form->error($model,'content'); ?>
			</div>
	
				<div class="form-group">
				<?php echo $form->labelEx($model,'tags'); ?>
				<?php $this->widget('CAutoComplete', array(
						'model'=>$model,
						'attribute'=>'tags',
						'url'=>array('suggestTags'),
						'multiple'=>true,
						'htmlOptions'=>array('size'=>50,'class'=>'form-control'),
					)); 
				?>
				<?php echo $form->error($model,'tags'); ?>
			</div>
	
				<div class="form-group">
				<?php echo $form->labelEx($model,'status'); ?>
				<?php echo $form->dropDownList($model,'status',Lookup::items('PostStatus'),array('class'=>'form-control')); ?>
				<?php echo $form->error($model,'status'); ?>
			</div>
	
		<div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-lg btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>
	</div>
</div>	