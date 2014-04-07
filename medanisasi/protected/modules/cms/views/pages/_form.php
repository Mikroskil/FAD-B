<?php
/* @var $this PagesController */
/* @var $model Pages */
/* @var $form CActiveForm */
?>
<?php
$this->Widget('ext.tinymce.tinymceWidget', 
	array(
		'elfinder'=>$this->createUrl('/elfinder'), 
		'element'=>'Pages_content',
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
			'id'=>'pages-form',
			'enableAjaxValidation'=>false,
			)); ?>
	<?php echo $form->errorSummary($model); ?>
				<div class="form-group">
				<?php echo $form->labelEx($model,'menutitle'); ?>
				<?php echo $form->textField($model,'menutitle',array('size'=>50,'maxlength'=>50,'class'=>'form-control')); ?>
				<?php echo $form->error($model,'menutitle'); ?>
			</div>
	
				<div class="form-group">
				<?php echo $form->labelEx($model,'parent'); ?>
				 <?php echo $form->dropDownList($model,'parent',
								CHtml::listData(Pages::model()->findAll(), 
								'pageid', 'menutitle'),
								array(	'empty'=>'Parent','class'=>'form-control',)
							 ); 
			?>
				
				<?php echo $form->error($model,'parent'); ?>
			</div>
	
				<div class="form-group">
				<?php echo $form->labelEx($model,'headtitle'); ?>
				<?php echo $form->textField($model,'headtitle',array('size'=>50,'maxlength'=>50,'class'=>'form-control')); ?>
				<?php echo $form->error($model,'headtitle'); ?>
			</div>
	
				<div class="form-group">
				<?php echo $form->labelEx($model,'url'); ?>
				<?php echo $form->textField($model,'url',array('size'=>30,'maxlength'=>30,'class'=>'form-control')); ?>
				<?php echo $form->error($model,'url'); ?>
			</div>
	
				<div class="form-group">
				<?php echo $form->labelEx($model,'content'); ?>
				<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
				<?php echo $form->error($model,'content'); ?>
			</div>
	
		<div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-lg btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>
	</div>
</div>	