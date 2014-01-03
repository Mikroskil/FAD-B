<?php
/* @var $this Artikel2Controller */
/* @var $model Artikel2 */

$this->breadcrumbs=array(
	'Artikels'=>array('index'),
	$model->idartikel,
);

$this->menu=array(
	array('label'=>'List Artikel', 'url'=>array('index')),
	array('label'=>'Create Artikel', 'url'=>array('create')),
	array('label'=>'Update Artikel', 'url'=>array('update', 'id'=>$model->idartikel)),
	array('label'=>'Delete Artikel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idartikel),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Artikel', 'url'=>array('admin')),
);
?>

<h1>View Artikel #<?php echo $model->idartikel; ?></h1>
<center><img src="<?php echo Yii::app()->request->baseUrl.'/upload/'.$model->gambar;?> "  width="300" style="margin-left:0px;"/></center>
<br />

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idartikel',
		'kategori',
		'subkategori',
		'judul',
		'artikel:html',
		//'gambar',
		'lokasi',
		//'maps',
		'create_date',
		'create_by',
		'modify_date',
		'modify_by',
	),
)); ?>
<br /><center>
<?php echo $model->maps; ?></center>