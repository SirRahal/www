<?php

/**
 * This is the model class for table "ads".
 *
 * The followings are the available columns in table 'ads':
 * @property integer $ID
 * @property string $url
 * @property string $img_name
 * @property integer $clicks
 * @property string $end_date
 * @property string $ad_type
 */
class Ads extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ads';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('url, img_name, end_date', 'required'),
			array('clicks', 'numerical', 'integerOnly'=>true),
			array('url, img_name', 'length', 'max'=>100),
			array('ad_type', 'length', 'max'=>7),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, url, img_name, clicks, end_date, ad_type', 'safe', 'on'=>'search'),
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
			'url' => 'Url',
			'img_name' => 'Img Name',
			'clicks' => 'Clicks',
			'end_date' => 'End Date',
			'ad_type' => 'Ad Type',
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
		$criteria->compare('url',$this->url,true);
		$criteria->compare('img_name',$this->img_name,true);
		$criteria->compare('clicks',$this->clicks);
		$criteria->compare('end_date',$this->end_date,true);
		$criteria->compare('ad_type',$this->ad_type,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ads the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public static function select_ads($amount,$type){


        $qry_str = "SELECT * FROM ads WHERE ad_type = '".$type."' AND end_date < CURDATE() ORDER BY RAND() LIMIT ".$amount;

        $ads = Yii::app()->db->createCommand($qry_str)->queryAll();

        return $ads;
}

}
