<?php
/* @var $this KategoriController */
/* @var $model Kategori */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kategori-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idkategori'); ?>
		<?php echo $form->textField($model,'idkategori',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'idkategori'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kategori');?>
		<?php echo $form->textField($model,'kategori',array('size'=>50,'maxlength'=>50)); 
		//echo $form->dropDownList($model, 'kategori', CHtml::listData(subkategori2::model()->findAll(),'kategori','kategori'),
		//array('prompt' => '-- None --'));
		//echo $form->dropDownList($model, 'kategori', CHtml::listData(subkategori2::model()->findAllByAttributes(array(
        //'kategori'=>'Kampus')),'subkategori','subkategori'),array('prompt' => '-- None --'));
		
		/*echo CHtml::dropDownList('country_id','', array(1=>'USA',2=>'France',3=>'Japan'),
		array(
		'ajax' => array(
		'type'=>'POST', //request type
		'url'=>CController::createUrl('currentController/dynamiccities'), //url to call.
		//Style: CController::createUrl('currentController/methodToCall')
		'update'=>'#city_id', //selector to update
		//'data'=>'js:javascript statement' 
		//leave out the data key to pass all form values through
		))); 
		 
		//empty since it will be filled by the other dropdown
		echo CHtml::dropDownList('city_id','', array());*/
		
		 ?>
		<?php echo $form->error($model,'kategori'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->