<?php

/**
 * This is the model class for table "sub_kategori".
 *
 * The followings are the available columns in table 'sub_kategori':
 * @property string $idsub
 * @property string $idkategori
 * @property string $idartikel
 * @property string $subkategori
 *
 * The followings are the available model relations:
 * @property Artikel $idartikel0
 * @property Kategori $idkategori0
 */
class SubKategori extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sub_kategori';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idsub, idkategori, idartikel, subkategori', 'required'),
			array('idsub, idkategori, idartikel', 'length', 'max'=>15),
			array('subkategori', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idsub, idkategori, idartikel, subkategori', 'safe', 'on'=>'search'),
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
			'idartikel0' => array(self::BELONGS_TO, 'Artikel', 'idartikel'),
			'idkategori0' => array(self::BELONGS_TO, 'Kategori', 'idkategori'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idsub' => 'Idsub',
			'idkategori' => 'Idkategori',
			'idartikel' => 'Idartikel',
			'subkategori' => 'Subkategori',
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

		$criteria->compare('idsub',$this->idsub,true);
		$criteria->compare('idkategori',$this->idkategori,true);
		$criteria->compare('idartikel',$this->idartikel,true);
		$criteria->compare('subkategori',$this->subkategori,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SubKategori the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
