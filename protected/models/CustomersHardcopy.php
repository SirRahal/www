<?php

/**
 * This is the model class for table "customers_hardcopy".
 *
 * The followings are the available columns in table 'customers_hardcopy':
 * @property integer $ID
 * @property string $name
 * @property string $l_name
 * @property string $email
 * @property string $company
 * @property string $address
 * @property string $city
 * @property string $state
 * @property integer $zip
 * @property string $phone
 * @property string $signed_up
 * @property string $terms
 */
class CustomersHardcopy extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'customers_hardcopy';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, l_name, email, company, address, city, state, zip, phone, signed_up', 'required'),
			array('zip', 'numerical', 'integerOnly'=>true),
			array('name, l_name, email, company, address, city, state, phone', 'length', 'max'=>100),
			array('terms', 'length', 'max'=>3),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, name, l_name, email, company, address, city, state, zip, phone, signed_up, terms', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'l_name' => 'L Name',
			'email' => 'Email',
			'company' => 'Company',
			'address' => 'Address',
			'city' => 'City',
			'state' => 'State',
			'zip' => 'Zip',
			'phone' => 'Phone',
			'signed_up' => 'Signed Up',
			'terms' => 'Terms',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('l_name',$this->l_name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('company',$this->company,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('zip',$this->zip);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('signed_up',$this->signed_up,true);
		$criteria->compare('terms',$this->terms,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CustomersHardcopy the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
