<?php
/* @var $this ArtikelController */
/* @var $model Artikel */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'artikel-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions' => array(
        'enctype' => 'multipart/form-data',
    ),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idartikel'); ?>
		<?php echo $form->textField($model,'idartikel',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'idartikel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'judul'); ?>
		<?php echo $form->textField($model,'judul',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'judul'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'artikel'); ?>
<?php /*?>		<?php echo $form->textArea($model,'artikel',array('rows'=>6, 'cols'=>50)); ?><?php */?>
		<?php
        $this->widget('application.extensions.cleditor.ECLEditor', array(
        'model'=>$model,
        'attribute'=>'artikel', //Model attribute name. Nome do atributo do modelo.
        'options'=>array(
            'width'=>'400',
            'height'=>250,
            'useCSS'=>true,
        ),
        'value'=>$model->artikel, //If you want pass a value for the widget. I think you will. Se você precisar passar um valor para o gadget. Eu acho irá.
    ));
		
		?>
        
		<?php echo $form->error($model,'artikel'); ?>
	</div>

	<div class="row">
		<?php /*?><?php echo $form->labelEx($model,'gambar'); ?>
		<?php echo $form->filefield($model,'gambar',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'gambar'); ?><?php */?>
        
        <?php echo $form->labelEx($model,'gambar'); ?>
        <?php echo CHtml::activeFileField($model, 'gambar'); ?>  
        <?php echo $form->error($model,'gambar'); ?>
        
	</div>
    
    <?php if($model->isNewRecord!='1'){ ?>
	<div class="row">
     <?php echo CHtml::image(Yii::app()->request->baseUrl.'/upload/'.$model->gambar,"gambar",array("width"=>200)); ?> 
	</div>
    <?php }?>

	<div class="row">
		<?php echo $form->labelEx($model,'lokasi'); ?>
		<?php echo $form->textArea($model,'lokasi',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'lokasi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'maps'); ?>
		<?php echo $form->textArea($model,'maps',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'maps'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->