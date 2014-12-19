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
 * @property integer $rd_6
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
			array('user_ID, tournament_ID, rd_1, rd_2, rd_3, rd_4, rd_5, rd_6, total_points', 'numerical', 'integerOnly'=>true),
			array('code', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, user_ID, tournament_ID, code, rd_1, rd_2, rd_3, rd_4, rd_5, rd_6 total_points', 'safe', 'on'=>'search'),
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
            'rd_5' => 'Rd 6',
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
        $criteria->compare('rd_6',$this->rd_6);
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
            $team_array[$i-1]=$team_name['name'];
        }
        return $team_array;
    }

    public static function find_ticket_by_code($ticket_code){
        $tickets =  Ticket::model()->findAllByAttributes(array('user_ID' => 1, 'code' => $ticket_code));
        foreach($tickets as $ticket){
            if($ticket['code']==$ticket_code){
                return $ticket;
            }
        }
    }

    public static function reassign($ticket){
        $ticket->user_ID = User::model()->get_user_ID();
        $ticket->save();
    }

    public static function reassign_with_IDs($ticket_ID,$user_ID){
        $ticket = Ticket::model()->findByPK($ticket_ID);
        $ticket->user_ID = $user_ID;
        if($ticket->save()){
            return true;
        }
        else{
            return false;
        }
    }

    public static function update_ticket_points($team_1_ID, $team_2_ID, $team_1_score, $team_2_score,$round){
        //grab all the tickets that have team_1_ID selected
        $tickets = Picks::model()->get_tickets_pick($team_1_ID);
        Ticket::model()->update_ticket($tickets,$team_1_score,$round);//pass in tickets, points, round
        //grab all the tickets that have team_2_ID selected
        $tickets = Picks::model()->get_tickets_pick($team_2_ID);
        Ticket::model()->update_ticket($tickets,$team_2_score,$round);//pass in tickets, points, round
        return true;
    }

    /*
     * Update ticket schores for the ones holding the team
     *
     * */
    public static function update_ticket($tickets,$team_score,$round){
        $round = 'rd_'.$round;
        if($tickets != ''){
            foreach($tickets as $ticket){
                $ticket->$round += $team_score;
                $ticket->total_points += $team_score;
                $ticket->save();
            }
        }
    }

    /*
     * Set placments of each teicket and keep track of old spots
     * */
    public static function set_positions(){
        $schools = School::model()->findAll();
        foreach($schools as $school){
            $tickets = $school->get_tickets($school['ID']);
            $placement = 0;
            foreach ($tickets as $ticket) {
                $placement++;
                $ticket['prev_placement'] = $ticket['placement'];
                $ticket['placement'] = $placement;
                $ticket->save();
            }
        }
    }

    /*
     * Create 1,000 tickets for a single school
     * */
    public static function create_tickets($ticket_codes){
        //create all 1,000 tickets
        foreach($ticket_codes as $ticket_code){
            $ticket_model = new Ticket;
            $ticket_model->user_ID = 1;
            $ticket_model->tournament_ID = 1;
            $ticket_model->code = $ticket_code;
            $ticket_model->save();
        }
        //check to see that all 1,000 tickets were created
        $ticket_code_exploded = explode('-',$ticket_codes[0]);
        $school_ID = $ticket_code_exploded[0];
        $count = School::model()->get_ticket_count($school_ID);
        if($count == 1000){
            return true;
        }
        return true;
    }
}
