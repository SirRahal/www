<?php

/**
 * This is the model class for table "ticket".
 *
 * The followings are the available columns in table 'ticket':
 * @property integer $ID
 * @property integer $user_ID
 * @property integer $tournament_ID
 * @property string $code
 * @property integer $rd_1
 * @property integer $rd_2
 * @property integer $rd_3
 * @property integer $rd_4
 * @property integer $rd_5
 * @property integer $total_points
 *
 * The followings are the available model relations:
 * @property Picks[] $picks
 * @property Placement[] $placements
 * @property User $user
 * @property Tournament $tournament
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
			array('user_ID, tournament_ID, rd_1, rd_2, rd_3, rd_4, rd_5, total_points', 'numerical', 'integerOnly'=>true),
			array('code', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, user_ID, tournament_ID, code, rd_1, rd_2, rd_3, rd_4, rd_5, total_points', 'safe', 'on'=>'search'),
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
			'user' => array(self::BELONGS_TO, 'User', 'user_ID'),
			'tournament' => array(self::BELONGS_TO, 'Tournament', 'tournament_ID'),
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
			'rd_1' => 'Rd 1',
			'rd_2' => 'Rd 2',
			'rd_3' => 'Rd 3',
			'rd_4' => 'Rd 4',
			'rd_5' => 'Rd 5',
			'total_points' => 'Total Points',
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
		$criteria->compare('rd_1',$this->rd_1);
		$criteria->compare('rd_2',$this->rd_2);
		$criteria->compare('rd_3',$this->rd_3);
		$criteria->compare('rd_4',$this->rd_4);
		$criteria->compare('rd_5',$this->rd_5);
		$criteria->compare('total_points',$this->total_points);

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

    public static function get_tickets_by_user_ID(){
        $user_ID = User::model()->get_user_ID();
        $tickets = Ticket::model()->findAllByAttributes(array('user_ID'=>$user_ID));
        return $tickets;
    }

    public static function select_ticket_total_points($ticket_ID){
        $total_points = Ticket::model()->findByAttributes(array('ID'=>$ticket_ID));
        return $total_points['total_points'];
    }

    public static function easy_pick(){
       $m =0;
        for($j=0;$j<4;$j++){
            for($k=1;$k<5;$k++){
                $start_array[$m]=$k;
                $m++;
            }
        }
        $start_array[16] = shuffle($start_array);
        $i=0;
        foreach($start_array as $region_selected){
            $i++;
            $team = TeamTournamentRegion::model()->findByAttributes(array('tournament_region_ID' => $region_selected, 'seed' => $i));
            $team_name = Team::model()->findByAttributes(array('ID' => $team['team_ID']));
            $team_array[$i-1]=$team_name['ID'];
        }
        return $team_array;
    }

    public static function find_ticket_by_code($ticket_code){
        return Ticket::model()->findByAttributes(array('user_ID' => 1, 'code' => $ticket_code));
    }

    public static function reassign($ticket){
        $ticket->user_ID = User::model()->get_user_ID();
        $ticket->save();
    }


}
