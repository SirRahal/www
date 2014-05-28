<?php

/**
 * This is the model class for table "tournament_region".
 *
 * The followings are the available columns in table 'tournament_region':
 * @property integer $ID
 * @property integer $tournament_ID
 * @property integer $region_ID
 *
 * The followings are the available model relations:
 * @property Ticket[] $tickets
 * @property Region $region
 * @property Tournament $tournament
 */
class TournamentRegion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tournament_region';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tournament_ID, region_ID', 'required'),
			array('tournament_ID, region_ID', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, tournament_ID, region_ID', 'safe', 'on'=>'search'),
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
			'tickets' => array(self::HAS_MANY, 'Ticket', 'tournament_region_ID'),
			'region' => array(self::BELONGS_TO, 'Region', 'region_ID'),
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
			'region_ID' => 'Region',
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
		$criteria->compare('region_ID',$this->region_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TournamentRegion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
