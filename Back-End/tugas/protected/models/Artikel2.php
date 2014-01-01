<?php

/**
 * This is the model class for table "artikel2".
 *
 * The followings are the available columns in table 'artikel2':
 * @property integer $idartikel
 * @property string $kategori
 * @property string $subkategori
 * @property string $judul
 * @property string $artikel
 * @property string $gambar
 * @property string $lokasi
 * @property string $maps
 * @property string $create_date
 * @property string $create_by
 * @property string $modify_date
 * @property string $modify_by
 */
class Artikel2 extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'artikel2';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kategori, subkategori, judul, artikel, gambar, lokasi, maps', 'required'),
			array('kategori, subkategori, create_by, modify_by', 'length', 'max'=>25),
			array('judul', 'length', 'max'=>50),
			array('judul','unique','className'=>'Artikel2'),
			array('gambar', 'length', 'max'=>255, 'allowEmpty' => true, 'on'=>'insert,update'),
			
			array('create_date', 'default', 'value'=>date('Y-m-d H:i:s'), 'on'=>'insert'),
			array('create_by', 'default', 'value'=>Yii::app()->user->name, 'on'=>'insert'),
			array('modify_date', 'default', 'value'=>date('Y-m-d H:i:s'), 'on'=>'update', 'setOnEmpty'=>false),
			array('modify_by', 'default', 'value'=>Yii::app()->user->name,'on'=>'update', 'setOnEmpty'=>false),
			
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idartikel, kategori, subkategori, judul, artikel, gambar, lokasi, maps, create_date, create_by, modify_date, modify_by', 'safe', 'on'=>'search'),
			array('gambar', 'file','types'=>'jpg, gif, png', 'allowEmpty'=>true, 'on'=>'update'),
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
			'kategori' => 'Kategori',
			'subkategori' => 'Subkategori',
			'judul' => 'Judul',
			'artikel' => 'Artikel',
			'gambar' => 'Gambar',
			'lokasi' => 'Lokasi',
			'maps' => 'Maps',
			'create_date' => 'Create Date',
			'create_by' => 'Create By',
			'modify_date' => 'Modify Date',
			'modify_by' => 'Modify By',
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

		$criteria->compare('idartikel',$this->idartikel);
		$criteria->compare('kategori',$this->kategori,true);
		$criteria->compare('subkategori',$this->subkategori,true);
		$criteria->compare('judul',$this->judul,true);
		$criteria->compare('artikel',$this->artikel,true);
		$criteria->compare('gambar',$this->gambar,true);
		$criteria->compare('lokasi',$this->lokasi,true);
		$criteria->compare('maps',$this->maps,true);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('create_by',$this->create_by,true);
		$criteria->compare('modify_date',$this->modify_date,true);
		$criteria->compare('modify_by',$this->modify_by,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Artikel2 the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
