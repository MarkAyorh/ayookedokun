<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "audio_comments".
 *
 * @property int $id
 * @property string $audio_id
 * @property string $date
 * @property string $firstname
 * @property string $surname
 * @property string $email
 * @property string $location_town
 * @property string $location_country
 * @property string $comment
 * @property string $status
 */
class AudioComments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'audio_comments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['audio_id', 'date', 'firstname', 'surname', 'location_town', 'location_country', 'comment', 'status'], 'required'],
            [['audio_id', 'date'], 'safe'],
            [['comment'], 'string'],
            [['time'], 'string', 'max' => 12],
            [['firstname', 'surname', 'location_town', 'location_country'], 'string', 'max' => 15],
            [['status'], 'string', 'max' => 4],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'audio_id' => 'Audio ID',
            'date' => 'Date',
            'time' => 'Time',
            'firstname' => 'Firstname',
            'surname' => 'Surname',
            'location_town' => 'City',
            'location_country' => 'Country',
            'comment' => 'Comment',
            'status' => 'Status',
        ];
    }
}
