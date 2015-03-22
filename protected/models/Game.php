<?php

/**
 * This is the model class for table "game".
 *
 * The followings are the available columns in table 'game':
 * @property integer $ID
 * @property integer $tournament_ID
 * @property string $date
 * @property string $time
 * @property string $location
 * @property integer $team_1_ID
 * @property integer $team_2_ID
 * @property integer $team_1_score
 * @property integer $team_2_score
 * @property integer $round
 *
 * The followings are the available model relations:
 * @property Team $team1
 * @property Team $team2
 * @property Tournament $tournament
 */
class Game extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'game';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tournament_ID, team_1_ID, team_2_ID, team_1_score, team_2_score, round', 'required'),
			array('tournament_ID, team_1_ID, team_2_ID, team_1_score, team_2_score, round', 'numerical', 'integerOnly'=>true),
			array('location', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, tournament_ID, date, time, location, team_1_ID, team_2_ID, team_1_score, team_2_score, round', 'safe', 'on'=>'search'),
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
			'team1' => array(self::BELONGS_TO, 'Team', 'team_1_ID'),
			'team2' => array(self::BELONGS_TO, 'Team', 'team_2_ID'),
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
			'tournament_ID' => 'Tournament',
			'date' => 'Date',
			'time' => 'Time',
			'location' => 'Location',
			'team_1_ID' => 'Team 1',
			'team_2_ID' => 'Team 2',
			'team_1_score' => 'Team 1 Score',
			'team_2_score' => 'Team 2 Score',
			'round' => 'Round',
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
		$criteria->compare('tournament_ID',$this->tournament_ID);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('time',$this->time,true);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('team_1_ID',$this->team_1_ID);
		$criteria->compare('team_2_ID',$this->team_2_ID);
		$criteria->compare('team_1_score',$this->team_1_score);
		$criteria->compare('team_2_score',$this->team_2_score);
		$criteria->compare('round',$this->round);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Game the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public static function games_in_tournament($tournament_ID){
        $games = Game::model()->findAllByAttributes(array('tournament_ID'=>$tournament_ID));
        return $games;
    }

    public static function get_scores($tournament_ID,$team_1_ID,$team_2_ID){

        $game = Game::model()->findByAttributes(array('tournament_ID'=>$tournament_ID, 'team_1_ID'=>$team_1_ID, 'team_2_ID'=>$team_2_ID));
        if(isset($game)){
            return $game;
        }else{
            return '';
        }

    }


}
