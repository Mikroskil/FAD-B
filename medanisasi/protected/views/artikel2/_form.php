<?php
/* @var $this Artikel2Controller */
/* @var $model Artikel2 */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'artikel2-form',
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
		<?php echo $form->labelEx($model,'kategori'); ?>
		<?php //echo $form->textField($model,'kategori',array('size'=>25,'maxlength'=>25));
		echo $form->dropDownList($model, 'kategori', CHtml::listData(kategori::model()->findAll(),'kategori','kategori'),
		array('prompt' => '-- Pilih Kategori --'));
		
		/*echo CHtml::dropDownList('kategori','', 
		  CHtml::listData(subkategori2::model()->findAll(),'kategori','kategori'),
		 
		  array(
			'prompt'=>'Pilih Kategori',
			'ajax' => array(
			'type'=>'POST', 
			'url'=>CController::createUrl('loadcities'),
			'update'=>'#subkategori', 
		  'data'=>array('kategori'=>'js:this.value', 'YII_CSRF_TOKEN' => Yii::app()->request->csrfToken),
		  )));*/
		
		?>
		<?php echo $form->error($model,'kategori'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subkategori'); ?>
		<?php //echo $form->textField($model,'subkategori',array('size'=>25,'maxlength'=>25));
		/*		echo $form->dropDownList($model, 'kategori', CHtml::listData(subkategori2::model()->findAllByAttributes(array(
    	'kategori'=>'Kampus')),'subkategori','subkategori'),array('prompt' => '-- None --'));*/
		echo $form->dropDownList($model, 'subkategori', CHtml::listData(subkategori2::model()->findAll(),
		'subkategori','subkategori'),array('prompt' => '-- Pilih Sub_kategori --'));
		
		//echo CHtml::dropDownList('subkategori','', array(), array('prompt'=>'Pilih Sub_kategori'));
		
		?>
		<?php echo $form->error($model,'subkategori'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'judul'); ?>
		<?php echo $form->textField($model,'judul',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'judul'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'artikel'); ?>
		<?php /*?><?php echo $form->textArea($model,'artikel',array('rows'=>6, 'cols'=>50)); ?><?php */?>
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
		<?php echo $form->textArea($model,'gambar',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'gambar'); ?><?php */?>
        
        <?php echo $form->labelEx($model,'gambar'); ?>
        <?php echo CHtml::activeFileField($model, 'gambar'); ?>  
        <?php echo $form->error($model,'gambar'); ?>
        
	</div>
    
    <?php if($model->isNewRecord!='1'){ ?>
	<div class="row" style="margin-left:130px;">
     <?php echo CHtml::image(Yii::app()->request->baseUrl.'/../upload/'.$model->gambar,"gambar",array("width"=>200)); ?> 
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

	<!--<div class="row">
		<?php echo $form->labelEx($model,'create_date'); ?>
		<?php echo $form->textField($model,'create_date'); ?>
		<?php echo $form->error($model,'create_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_by'); ?>
		<?php echo $form->textField($model,'create_by',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'create_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modify_date'); ?>
		<?php echo $form->textField($model,'modify_date'); ?>
		<?php echo $form->error($model,'modify_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modify_by'); ?>
		<?php echo $form->textField($model,'modify_by',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'modify_by'); ?>
	</div>
-->
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->