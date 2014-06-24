<?php

/**
 * This is the model class for table "team".
 *
 * The followings are the available columns in table 'team':
 * @property integer $ID
 * @property string $name
 * @property string $logo
 *
 * The followings are the available model relations:
 * @property Game[] $games
 * @property Game[] $games1
 * @property Placement[] $placements
 * @property TeamRegion[] $teamRegions
 */
class Team extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'team';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, logo', 'required'),
			array('name, logo', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, name, logo', 'safe', 'on'=>'search'),
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
			'games' => array(self::HAS_MANY, 'Game', 'team_2_ID'),
			'games1' => array(self::HAS_MANY, 'Game', 'team_1_ID'),
			'placements' => array(self::HAS_MANY, 'Placement', 'team_ID'),
			'teamRegions' => array(self::HAS_MANY, 'TeamRegion', 'team_ID'),
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
			'logo' => 'Logo',
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
		$criteria->compare('logo',$this->logo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Team the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public static function get_scores($team_ID,$round){

        /*try one*/
        $game = Game::model()->find('(team_1_ID=:team_ID OR team_2_ID=:team_ID) AND round=:round', array(
            ':team_ID' => $team_ID,
            ':round' => $round,
        ));
        if($team_ID == $game['team_1_ID']){
            $score = $game['team_1_score'];
        }
        else if  ($team_ID == $game['team_2_ID']){
            $score = $game['team_2_score'];
        }else{
            $score = 0;
        }

        return $score;
}
}
