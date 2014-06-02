<?php

/**
 * This is the model class for table "auctioneer".
 *
 * The followings are the available columns in table 'auctioneer':
 * @property integer $ID
 * @property string $auctioneer
 * @property string $address
 * @property string $city
 * @property string $state
 * @property integer $zip
 * @property string $info
 * @property string $url
 *
 * The followings are the available model relations:
 * @property Auctions[] $auctions
 */
class Auctioneer extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'auctioneer';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('auctioneer, address, city, state, zip, info , url', 'required'),
            array('zip', 'length', 'max'=>8),
			array('auctioneer, address, city', 'length', 'max'=>100),
			array('state', 'length', 'max'=>2),
			array('info', 'length', 'max'=>500),
            array('url', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, auctioneer, address, city, state, zip, info', 'safe', 'on'=>'search'),
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
			'auctions' => array(self::HAS_MANY, 'Auctions', 'company_ID','order'=>'date ASC'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'auctioneer' => 'Auctioneer',
			'address' => 'Address',
			'city' => 'City',
			'state' => 'State',
			'zip' => 'Zip',
			'info' => 'Info',
            'url' => 'URL'
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
		$criteria->compare('auctioneer',$this->auctioneer,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('zip',$this->zip);
		$criteria->compare('info',$this->info,true);
        $criteria->compare('url',$this->url,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Auctioneer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
