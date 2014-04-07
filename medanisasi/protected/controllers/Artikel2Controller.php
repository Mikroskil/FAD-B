<?php

class Artikel2Controller extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('@'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				//'actions'=>array('create','update','loadcities'),
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		/*$model=new Artikel2;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Artikel2']))
		{
			$model->attributes=$_POST['Artikel2'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idartikel));
		}

		$this->render('create',array(
			'model'=>$model,
		));*/
		
		$model=new Artikel2;  // this is my model related to table
        if(isset($_POST['Artikel2']))
        {
            $rnd = rand(0,9999);  // generate random number between 0-9999
            $model->attributes=$_POST['Artikel2'];
 
            $uploadedFile=CUploadedFile::getInstance($model,'gambar');
            $fileName = "{$rnd}-{$uploadedFile}";  // random number + file name
            $model->gambar = $fileName;
 
            if($model->save())
            {
				if($uploadedFile != null){
                $uploadedFile->saveAs(Yii::app()->basePath.'/../upload/'.$fileName); } // image will uplode to rootDirectory/banner/
                //$this->redirect(array('admin'));
				$this->redirect(array('view','id'=>$model->idartikel));
            }
        }
        $this->render('create',array(
            'model'=>$model,
        ));
		
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		/*$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Artikel2']))
		{
			$model->attributes=$_POST['Artikel2'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idartikel));
		}

		$this->render('update',array(
			'model'=>$model,
		));*/
		
		$model=$this->loadModel($id);
 
        if(isset($_POST['Artikel2']))
        {
            $_POST['Artikel2']['gambar'] = $model->gambar;
            $model->attributes=$_POST['Artikel2'];
 
            $uploadedFile=CUploadedFile::getInstance($model,'gambar');
 
            if($model->save())
            {
                if(!empty($uploadedFile))  // check if uploaded file is set or not
                {
                    $uploadedFile->saveAs(Yii::app()->basePath.'/../themes/front/views/site/upload/'.$model->gambar);
                }
                //$this->redirect(array('admin'));
				$this->redirect(array('view','id'=>$model->idartikel));
            }
 
        }
 
        $this->render('update',array(
            'model'=>$model,
        ));
		
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Artikel2');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Artikel2('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Artikel2']))
			$model->attributes=$_GET['Artikel2'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Artikel2 the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Artikel2::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Artikel2 $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='artikel2-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	
		
	/*public function actionLoadcities()
	{
	   $data=subkategori2::model()->findAllByAttributes( 
	   array('kategori'=>$_POST['kategori']));
	 
	   $data=CHtml::listData($data,'subkategori','subkategori');
	 
	   echo "<option value=''>Pilih Subkategori</option>";
	   foreach($data as $value=>$city_name)
	   echo CHtml::tag('option', array('value'=>$value),CHtml::encode($city_name),true);
	}*/
		
}
