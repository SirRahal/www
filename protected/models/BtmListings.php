<?php

/**
 * This is the model class for table "btm_listings".
 *
 * The followings are the available columns in table 'btm_listings':
 * @property integer $ID
 * @property integer $auction_ID
 * @property string $lot
 * @property string $description
 * @property string $manufacturer
 * @property string $model
 * @property string $more_info
 * @property string $condition
 *
 * The followings are the available model relations:
 * @property Btmimages[] $btmImages
 * @property Btmauctions $auction
 */
class Btmlistings extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'btm_listings';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('auction_ID, lot, description', 'required'),
			array('auction_ID', 'numerical', 'integerOnly'=>true),
			array('lot, condition', 'length', 'max'=>10),
			array('description, more_info', 'length', 'max'=>1000),
			array('manufacturer, model', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, auction_ID, lot, description, manufacturer, model, more_info, condition', 'safe', 'on'=>'search'),
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
			'btmImages' => array(self::HAS_MANY, 'Btmimages', 'btm_listing_ID'),
			'auction' => array(self::BELONGS_TO, 'Btmauctions', 'auction_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'auction_ID' => 'Auction',
			'lot' => 'Lot',
			'description' => 'Description',
			'manufacturer' => 'Manufacturer',
			'model' => 'Model',
			'more_info' => 'More Info',
			'condition' => 'Condition',
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

		$criteria->compare('ID',$this->ID);
		$criteria->compare('auction_ID',$this->auction_ID);
		$criteria->compare('lot',$this->lot,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('manufacturer',$this->manufacturer,true);
		$criteria->compare('model',$this->model,true);
		$criteria->compare('more_info',$this->more_info,true);
		$criteria->compare('condition',$this->condition,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Btmlistings the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
