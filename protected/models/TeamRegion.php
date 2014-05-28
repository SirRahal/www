<?php

/**
 * This is the model class for table "team_region".
 *
 * The followings are the available columns in table 'team_region':
 * @property integer $ID
 * @property integer $team_ID
 * @property integer $tournament_ID
 * @property integer $seed
 * @property integer $overall_seed
 * @property integer $starting_placement
 *
 * The followings are the available model relations:
 * @property Team $team
 * @property Tournament $tournament
 */
class TeamRegion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'team_region';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('team_ID, tournament_ID, seed, overall_seed, starting_placement', 'required'),
			array('team_ID, tournament_ID, seed, overall_seed, starting_placement', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, team_ID, tournament_ID, seed, overall_seed, starting_placement', 'safe', 'on'=>'search'),
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
			'team_ID' => 'Team',
			'tournament_ID' => 'Tournament',
			'seed' => 'Seed',
			'overall_seed' => 'Overall Seed',
			'starting_placement' => 'Starting Placement',
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
		$criteria->compare('tournament_ID',$this->tournament_ID);
		$criteria->compare('seed',$this->seed);
		$criteria->compare('overall_seed',$this->overall_seed);
		$criteria->compare('starting_placement',$this->starting_placement);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TeamRegion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
