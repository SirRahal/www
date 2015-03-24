<?php

/**
 * This is the model class for table "school".
 *
 * The followings are the available columns in table 'school':
 * @property integer $ID
 * @property string $name
 * @property string $state
 */
class School extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'school';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, state', 'required'),
			array('name', 'length', 'max'=>100),
            array('contact_name', 'length', 'max'=>100),
            array('address', 'length', 'max'=>100),
            array('city', 'length', 'max'=>100),
            array('state', 'length', 'max'=>2),
            array('zip', 'length', 'max'=>10),
            array('phone','length', 'max'=>16),
            array('email', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, name, state', 'safe', 'on'=>'search'),
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
            'address' => 'Address',
            'city' => 'City',
			'state' => 'State',
            'zip' => 'Zip',
            'contact_name' => 'Contact Name',
            'phone' => 'Phone',
            'email' => 'Email',
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
		$criteria->compare('state',$this->state,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return School the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public static function get_name_by_ID($school_ID){
        $school = School::model()->findByAttributes(array('ID'=>$school_ID));
        return $school['name'];
    }

    //http://www.yiiframework.com/wiki/199/creating-a-parameterized-like-query/
    public static function get_tickets($school_ID){
        $school_ID = intval($school_ID);
        if (!$school_ID)
            return null;

        $q = new CDbCriteria( array(
            'condition' => "code LIKE :match",
            'params'    => array(':match' => $school_ID . "-%")
        ) );
        $q->order = "total_points DESC, rd_6 DESC, rd_5 DESC, rd_4 DESC, rd_3 DESC, rd_2 DESC, rd_1 DESC, user_ID";

        $rows = Ticket::model()->findAll( $q );
        return $rows;
    }

    public static function get_round_placements($school_ID, $round){
        $school_ID = intval($school_ID);
        if (!$school_ID)
            return null;

        $q = new CDbCriteria( array(
            'condition' => "code LIKE :match",
            'params'    => array(':match' => $school_ID . "-%")
        ) );
        $q->order = "$round DESC";

        $rows = Ticket::model()->findAll( $q );
        $count = count($rows)-1;
        $first = array($rows[0]);
        $second = array($rows[1]);
        $third = array($rows[2]);
        $last = array($rows[$count]);
        if($round == 'total_points'){
            $fourth = array($rows[3]);
            $fifth = array($rows[4]);
            $sixth = array($rows[5]);
            $placment_array = array_merge($first, $second, $third, $fourth, $fifth, $sixth, $last);
        }else{
            $placment_array = array_merge($first, $second, $third, $last);
        }
        return ($placment_array);
    }

    public static function get_placement_title($round, $placement){
        if ($placement == 1) {
            return '1st';
        }elseif($placement == 2) {
            return '2nd';
        }elseif($placement == 3) {
            return '3rd';
        }
        elseif($round=="total_points" && $placement ==4){
            return '4th';
        } elseif($round=="total_points" && $placement ==5){
            return '5th';
        } elseif($round=="total_points" && $placement ==6){
            return '6th';
        }else{
            return 'Last';
        }
    }

    public static function get_ticket_count($school_ID){
        return count (School::model()->get_tickets($school_ID));
    }
}
