<?php

/**
 * This is the model class for table "listings".
 *
 * The followings are the available columns in table 'listings':
 * @property integer $ID
 * @property string $list_by
 * @property string $inventory
 * @property string $date
 * @property string $photo_numbers
 * @property string $description
 * @property string $internal_number
 * @property string $price
 * @property string $manufacturer
 * @property string $serial_number
 * @property string $model_number
 * @property string $more_info
 * @property integer $condition
 * @property string $condition_info
 * @property string $weight
 * @property string $length_1
 * @property string $width_1
 * @property string $height_1
 * @property string $dims_2
 * @property string $length_2
 * @property string $width_2
 * @property string $height_2
 * @property string $listing_note
 * @property integer $ebay_listed
 * @property string $ebay_lister
 * @property string $ebay_date
 */
class Listings extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'listings';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('list_by, inventory, date, photo_numbers, description, internal_number, price, manufacturer, serial_number, model_number, more_info, condition, condition_info, weight, length_1, width_1, height_1, dims_2, length_2, width_2, height_2, listing_note, ebay_lister, ebay_date', 'required'),
			array('condition, ebay_listed', 'numerical', 'integerOnly'=>true),
			array('list_by, photo_numbers, internal_number, manufacturer, condition_info, ebay_lister', 'length', 'max'=>100),
			array('inventory, weight, length_1, width_1, height_1, dims_2, length_2, width_2, height_2', 'length', 'max'=>15),
			array('description', 'length', 'max'=>1000),
			array('price', 'length', 'max'=>10),
			array('serial_number, model_number', 'length', 'max'=>50),
			array('more_info, listing_note', 'length', 'max'=>1500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, list_by, inventory, date, photo_numbers, description, internal_number, price, manufacturer, serial_number, model_number, more_info, condition, condition_info, weight, length_1, width_1, height_1, dims_2, length_2, width_2, height_2, listing_note, ebay_listed, ebay_lister, ebay_date', 'safe', 'on'=>'search'),
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
			'ID' => 'ID',
			'list_by' => 'List By',
			'inventory' => 'Inventory',
			'date' => 'Date',
			'photo_numbers' => 'Photo Numbers',
			'description' => 'Description',
			'internal_number' => 'Internal Number',
			'price' => 'Price',
			'manufacturer' => 'Manufacturer',
			'serial_number' => 'Serial Number',
			'model_number' => 'Model Number',
			'more_info' => 'More Info',
			'condition' => 'Condition',
			'condition_info' => 'Condition Info',
			'weight' => 'Weight',
			'length_1' => 'Length 1',
			'width_1' => 'Width 1',
			'height_1' => 'Height 1',
			'dims_2' => 'Dims 2',
			'length_2' => 'Length 2',
			'width_2' => 'Width 2',
			'height_2' => 'Height 2',
			'listing_note' => 'Listing Note',
			'ebay_listed' => 'Ebay Listed',
			'ebay_lister' => 'Ebay Lister',
			'ebay_date' => 'Ebay Date',
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
		$criteria->compare('list_by',$this->list_by,true);
		$criteria->compare('inventory',$this->inventory,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('photo_numbers',$this->photo_numbers,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('internal_number',$this->internal_number,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('manufacturer',$this->manufacturer,true);
		$criteria->compare('serial_number',$this->serial_number,true);
		$criteria->compare('model_number',$this->model_number,true);
		$criteria->compare('more_info',$this->more_info,true);
		$criteria->compare('condition',$this->condition);
		$criteria->compare('condition_info',$this->condition_info,true);
		$criteria->compare('weight',$this->weight,true);
		$criteria->compare('length_1',$this->length_1,true);
		$criteria->compare('width_1',$this->width_1,true);
		$criteria->compare('height_1',$this->height_1,true);
		$criteria->compare('dims_2',$this->dims_2,true);
		$criteria->compare('length_2',$this->length_2,true);
		$criteria->compare('width_2',$this->width_2,true);
		$criteria->compare('height_2',$this->height_2,true);
		$criteria->compare('listing_note',$this->listing_note,true);
		$criteria->compare('ebay_listed',$this->ebay_listed);
		$criteria->compare('ebay_lister',$this->ebay_lister,true);
		$criteria->compare('ebay_date',$this->ebay_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Listings the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
