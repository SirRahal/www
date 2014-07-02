<?php

/**
 * This is the model class for table "team_tournament_region".
 *
 * The followings are the available columns in table 'team_tournament_region':
 * @property integer $ID
 * @property integer $team_ID
 * @property integer $tournament_region_ID
 * @property integer $seed
 * @property integer $overall_seed
 * @property integer $starting_placement
 * @property integer $total_points
 *
 * The followings are the available model relations:
 * @property Team $team
 * @property TournamentRegion $tournamentRegion
 * @property TournamentResults[] $tournamentResults
 */
class TeamTournamentRegion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'team_tournament_region';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('team_ID, tournament_region_ID, seed, overall_seed, starting_placement', 'required'),
			array('team_ID, tournament_region_ID, seed, overall_seed, starting_placement, total_points', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, team_ID, tournament_region_ID, seed, overall_seed, starting_placement, total_points', 'safe', 'on'=>'search'),
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
			'tournamentRegion' => array(self::BELONGS_TO, 'TournamentRegion', 'tournament_region_ID'),
			'tournamentResults' => array(self::HAS_MANY, 'TournamentResults', 'team_tournament_region_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'team_ID' => 'Team',
			'tournament_region_ID' => 'Tournament Region',
			'seed' => 'Seed',
			'overall_seed' => 'Overall Seed',
			'starting_placement' => 'Starting Placement',
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
		$criteria->compare('team_ID',$this->team_ID);
		$criteria->compare('tournament_region_ID',$this->tournament_region_ID);
		$criteria->compare('seed',$this->seed);
		$criteria->compare('overall_seed',$this->overall_seed);
		$criteria->compare('starting_placement',$this->starting_placement);
		$criteria->compare('total_points',$this->total_points);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TeamTournamentRegion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public static function select_tournament_roster($tournament_ID)
    {
        /*$qry_str = "SELECT * FROM `team_tournament_region` WHERE `tournament_ID` = ".$tounament_ID;
        $roster = Yii::app()->db->createCommand($qry_str)->queryAll();*/
        $roster = TeamTournamentRegion::model()->findAllByAttributes(array('tournament_region_ID'=>$tournament_ID));
        return $roster;

    }
    public static function select_tournament_roster_by_seed($tournament_ID)
    {
        /*$qry_str = "SELECT * FROM `team_tournament_region` WHERE `tournament_ID` = ".$tounament_ID;
        $roster = Yii::app()->db->createCommand($qry_str)->queryAll();*/
        $roster = TeamTournamentRegion::model()->findAllByAttributes(array('tournament_region_ID'=>$tournament_ID ),array('order' => 'seed ASC'));
        return $roster;
    }

    public static function slect_tournament_placement($tournament_ID)
    {
        $postion = TeamTournamentRegion::model()->findByAttributes(array('tournament_region_ID'=>$tournament_ID));
        return $postion;
    }

    public static function select_team_total_points($team_ID){
        $row = TeamTournamentRegion::model()->findByAttributes(array('team_ID'=>$team_ID));
        return $row['total_points'];
    }


}
