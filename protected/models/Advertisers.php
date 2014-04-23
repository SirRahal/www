<?php

/**
 * This is the model class for table "advertisers".
 *
 * The followings are the available columns in table 'advertisers':
 * @property integer $ID
 * @property string $company
 * @property string $state
 * @property string $zip
 * @property string $email
 * @property string $category
 * @property string $first
 * @property string $last
 * @property integer $phone1
 * @property integer $phone2
 * @property integer $phone3
 * @property integer $phone
 * @property string $url
 */
class Advertisers extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'advertisers';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('company, state, zip, email, category, first, last, phone1, phone2, phone3, phone, url', 'required'),
			array('phone1, phone2, phone3, phone', 'numerical', 'integerOnly'=>true),
			array('company, email, category, first, last, url', 'length', 'max'=>100),
			array('state', 'length', 'max'=>2),
			array('zip', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, company, state, zip, email, category, first, last, phone1, phone2, phone3, phone, url', 'safe', 'on'=>'search'),
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
			'company' => 'Company',
			'state' => 'State',
			'zip' => 'Zip',
			'email' => 'Email',
			'category' => 'Category',
			'first' => 'First',
			'last' => 'Last',
			'phone1' => 'Phone1',
			'phone2' => 'Phone2',
			'phone3' => 'Phone3',
			'phone' => 'Phone',
			'url' => 'Url',
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
		$criteria->compare('company',$this->company,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('zip',$this->zip,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('category',$this->category,true);
		$criteria->compare('first',$this->first,true);
		$criteria->compare('last',$this->last,true);
		$criteria->compare('phone1',$this->phone1);
		$criteria->compare('phone2',$this->phone2);
		$criteria->compare('phone3',$this->phone3);
		$criteria->compare('phone',$this->phone);
		$criteria->compare('url',$this->url,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Advertisers the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
