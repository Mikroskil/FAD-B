<?php

/**
 * This is the model class for table "artikel".
 *
 * The followings are the available columns in table 'artikel':
 * @property string $idartikel
 * @property string $judul
 * @property string $artikel
 * @property string $gambar
 * @property string $lokasi
 * @property string $maps
 *
 * The followings are the available model relations:
 * @property Kategori[] $kategoris
 * @property Komentar[] $komentars
 */
class Artikel extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'artikel';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idartikel, judul, artikel, gambar, lokasi, maps', 'required'),
			array('idartikel', 'length', 'max'=>15),
			array('judul', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idartikel, judul, artikel, gambar, lokasi, maps', 'safe', 'on'=>'search'),
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
			'kategoris' => array(self::HAS_MANY, 'Kategori', 'idartikel'),
			'komentars' => array(self::HAS_MANY, 'Komentar', 'idartikel'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idartikel' => 'Idartikel',
			'judul' => 'Judul',
			'artikel' => 'Artikel',
			'gambar' => 'Gambar',
			'lokasi' => 'Lokasi',
			'maps' => 'Maps',
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

		$criteria->compare('idartikel',$this->idartikel,true);
		$criteria->compare('judul',$this->judul,true);
		$criteria->compare('artikel',$this->artikel,true);
		$criteria->compare('gambar',$this->gambar,true);
		$criteria->compare('lokasi',$this->lokasi,true);
		$criteria->compare('maps',$this->maps,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Artikel the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
