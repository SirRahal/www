<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pages".
 *
 * @property integer $ID
 * @property integer $book_ID
 * @property integer $position
 * @property string $path
 * @property string $notes
 *
 * @property Book $book
 */
class Pages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['book_ID', 'path'], 'required'],
            [['book_ID', 'position'], 'integer'],
            [['path'], 'string', 'max' => 200],
            [['notes'], 'string', 'max' => 500],
            [['book_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Book::className(), 'targetAttribute' => ['book_ID' => 'ID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'book_ID' => 'Book  ID',
            'position' => 'Position',
            'path' => 'Path',
            'notes' => 'Notes',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBook()
    {
        return $this->hasOne(Book::className(), ['ID' => 'book_ID']);
    }
}
