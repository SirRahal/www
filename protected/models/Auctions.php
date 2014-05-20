<?php

/**
 * This is the model class for table "auctions".
 *
 * The followings are the available columns in table 'auctions':
 * @property integer $ID
 * @property integer $company_ID
 * @property string $company
 * @property string $url
 * @property string $info
 * @property string $date
 * @property string $location
 * @property string $title
 * @property integer $clicks
 *
 * The followings are the available model relations:
 * @property Auctioneer $company0
 */
class Auctions extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'auctions';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('company_ID, company, url, info, date, location, title', 'required'),
			array('company_ID, clicks', 'numerical', 'integerOnly'=>true),
			array('company, url, location, title', 'length', 'max'=>200),
			array('info', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, company_ID, company, url, info, date, location, title, clicks', 'safe', 'on'=>'search'),
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
			'company0' => array(self::BELONGS_TO, 'Auctioneer', 'company_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'company_ID' => 'Company ID',
			'company' => 'Company',
			'url' => 'Url',
			'info' => 'Info',
			'date' => 'Date',
			'location' => 'Location',
			'title' => 'Title',
			'clicks' => 'Clicks',
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
		$criteria->compare('company_ID',$this->company_ID);
		$criteria->compare('company',$this->company,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('info',$this->info,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('clicks',$this->clicks);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Auctions the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public static function select_upcoming_auctions(){
        $qry_str = "SELECT *  FROM `auctions` WHERE `date` >= CURRENT_DATE ORDER BY date ASC";

        $auctions = Yii::app()->db->createCommand($qry_str)->queryAll();

        return $auctions;
    }
}
