<?php

/**
 * This is the model class for table "slide".
 *
 * The followings are the available columns in table 'slide':
 * @property integer $id
 * @property string $file
 * @property string $judul
 * @property string $ket
 */
class Slide extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public $alt_text;
	public function tableName()
	{
		return 'slide';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('file, judul, ket', 'required'),
			//array('file', 'file', 'types'=>'jpg, gif, png'),
			array('file', 'EImageValidator', 'types' => "gif, jpg, png", 'typesError' => 'File harus Ext. gif,jpg,pdf'),
			array( 'file', 'EImageValidator', 'size' => 200,'sizeError'=>'Ukuran file tidak lebih dari 200kb'),
			array( 'file', 'EImageValidator', 'width' => 600, 'height' => 350,'dimensionError'=>'Min.Dimensi image 950x350 '),
			array('judul', 'length', 'max'=>60),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, file, judul, ket', 'safe', 'on'=>'search'),
		);
	}
	
	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'file' => 'File',
			'judul' => 'Judul',
			'ket' => 'Ket',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('file',$this->file,true);
		$criteria->compare('judul',$this->judul,true);
		$criteria->compare('ket',$this->ket,true);

		return new CActiveDataProvider($this, array(
		'pagination'=>array(
        	'pageSize'=> Yii::app()->user->getState('pageSize',Yii::app()->params['defaultPageSize']),
    	),
			'criteria'=>$criteria,
		));
	}
   
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Slide the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
