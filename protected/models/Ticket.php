<?php

/**
 * This is the model class for table "ticket".
 *
 * The followings are the available columns in table 'ticket':
 * @property integer $ID
 * @property integer $user_ID
 * @property integer $tournament_ID
 * @property string $code
 *
 * The followings are the available model relations:
 * @property Picks[] $picks
 * @property Placement[] $placements
 * @property Tournament $tournament
 * @property User $user
 */
class Ticket extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ticket';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_ID, tournament_ID, code', 'required'),
			array('user_ID, tournament_ID', 'numerical', 'integerOnly'=>true),
			array('code', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, user_ID, tournament_ID, code', 'safe', 'on'=>'search'),
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
			'picks' => array(self::HAS_MANY, 'Picks', 'ticket_ID'),
			'placements' => array(self::HAS_MANY, 'Placement', 'ticket_ID'),
			'tournament' => array(self::BELONGS_TO, 'Tournament', 'tournament_ID'),
			'user' => array(self::BELONGS_TO, 'User', 'user_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'user_ID' => 'User',
			'tournament_ID' => 'Tournament',
			'code' => 'Code',
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
		$criteria->compare('user_ID',$this->user_ID);
		$criteria->compare('tournament_ID',$this->tournament_ID);
		$criteria->compare('code',$this->code,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ticket the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public static function get_ticket_user_ID($ticket_ID){
        $ticket = Ticket::model()->findByAttributes(array('ID'=>$ticket_ID));
        $ticket_ID = $ticket['user_ID'];
        return $ticket_ID;
    }

    public static function find_ticket_by_ID($ticket_ID){
        $ticket = Ticket::model()->findByAttributes(array('ID'=>$ticket_ID));
        return $ticket;
    }
}
