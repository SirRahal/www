<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $ID
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property string $phone
 * @property string $user_name
 * @property string $password
 * @property string $terms
 *
 * The followings are the available model relations:
 * @property Ticket[] $tickets
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('first_name, last_name, email, city, state, zip, phone, user_name, password, terms', 'required'),
            array('terms', 'numerical', 'min'=>1),
			array('first_name, last_name, city, user_name, password', 'length', 'max'=>100),
			array('email', 'length', 'max'=>200),
			array('state', 'length', 'max'=>2),
			array('zip', 'length', 'max'=>8),
			array('phone', 'length', 'max'=>18),
            array('user_name', 'unique'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, first_name, last_name, email, city, state, zip, phone, user_name, password', 'safe', 'on'=>'search'),
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
			'tickets' => array(self::HAS_MANY, 'Ticket', 'user_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'email' => 'Email',
			'city' => 'City',
			'state' => 'State',
			'zip' => 'Zip',
			'phone' => 'Phone',
			'user_name' => 'User Name',
			'password' => 'Password',
            'terms' => 'Terms & Conditions'
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
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('zip',$this->zip,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('user_name',$this->user_name,true);
		$criteria->compare('password',$this->password,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public static function get_user_ID(){
        //user user_name to return user ID
        $user_name = Yii::app()->user->id;
        $user = User::model()->findByAttributes(array('user_name'=>$user_name));
        $ID = $user['ID'];
        return $ID;
    }

    public static function get_user_first_name(){
        //user user_name to return user ID
        $user_name = Yii::app()->user->id;
        $user = User::model()->findByAttributes(array('user_name'=>$user_name));
        $first_name = $user['first_name'];
        return $first_name;
    }

    public static function isUser($ID){
        $loged_id = User::model()->get_user_ID();
        if($ID == $loged_id)
        {
            return true;
        }
        else{
            return false;
        }

    }

    public static function ownsTicket($ticket_ID){
        //get user ID
        $user_ID = User::model()->get_user_ID();
        //get ticket user ID
        $ticket_user_ID = Ticket::model()->get_ticket_user_ID($ticket_ID);
        //if ticket_user_ID == user_ID return true to view the page if not reject
        if($ticket_user_ID == $user_ID){
            return true;
        }
        else{
            return false;
        }
    }

    public static function checkValid(){
        return true;
    }

    public static function password_reset($ID){
        $user = User::model()->findByPk($ID);

        if(isset($user) && $user->ID > 1){
            $newPassword = $user->randomPassword();
            $user->password = $newPassword;
            $user->save();
            return $newPassword;
        }else{
            return 'error';
        }
    }

    public static function randomPassword() {
        $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }
}