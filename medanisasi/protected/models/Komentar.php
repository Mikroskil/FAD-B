<?php

/**
 * This is the model class for table "komentar".
 *
 * The followings are the available columns in table 'komentar':
 * @property integer $idkomentar
 * @property integer $idartikel
 * @property string $iduser
 * @property string $komentar
 *
 * The followings are the available model relations:
 * @property Artikel2 $idartikel0
 * @property User $iduser0
 */
class Komentar extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'komentar';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idartikel, iduser, komentar', 'required'),
			array('idartikel', 'numerical', 'integerOnly'=>true),
			array('iduser', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idkomentar, idartikel, iduser, komentar', 'safe', 'on'=>'search'),
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
			'idartikel0' => array(self::BELONGS_TO, 'Artikel2', 'idartikel'),
			'iduser0' => array(self::BELONGS_TO, 'User', 'iduser'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idkomentar' => 'Idkomentar',
			'idartikel' => 'Idartikel',
			'iduser' => 'Iduser',
			'komentar' => 'Komentar',
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

		$criteria->compare('idkomentar',$this->idkomentar);
		$criteria->compare('idartikel',$this->idartikel);
		$criteria->compare('iduser',$this->iduser,true);
		$criteria->compare('komentar',$this->komentar,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Komentar the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
