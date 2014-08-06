<?php

/**
 * This is the model class for table "picks".
 *
 * The followings are the available columns in table 'picks':
 * @property integer $ID
 * @property integer $ticket_ID
 * @property integer $team_ID
 *
 * The followings are the available model relations:
 * @property Team $team
 * @property Ticket $ticket
 */
class Picks extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'picks';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ticket_ID, team_ID', 'required'),
			array('ticket_ID, team_ID', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, ticket_ID, team_ID', 'safe', 'on'=>'search'),
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
			'team' => array(self::BELONGS_TO, 'Team', 'team_ID'),
			'ticket' => array(self::BELONGS_TO, 'Ticket', 'ticket_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'ticket_ID' => 'Ticket',
			'team_ID' => 'Team',
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
		$criteria->compare('ticket_ID',$this->ticket_ID);
		$criteria->compare('team_ID',$this->team_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Picks the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public static function find_tickets_by_ID($ticket_ID){

        $my_picks = Picks::model()->findAllByAttributes(array('ticket_ID'=>$ticket_ID ),array('order' => 'ID ASC'));
        $i=0;
        foreach($my_picks as $pick){
            $team = Team::model()->findByAttributes(array('ID'=>$pick['team_ID']));
            $my_picks_array[$i] =  $team['name'];
            $i++;
        }
        for ($j=$i; $j<16; $j++){
            $my_picks_array[$j] = 'TBA';
        }
        return $my_picks_array;

    }

    public static function get_tickets_pick($team_ID){
        $picks = Picks::model()->findAllByAttributes(array('team_ID'=>$team_ID));
        $tickets = '';
        foreach($picks as $pick){
            $tickets[] = $pick->ticket;
        }
        return $tickets;
    }
}
