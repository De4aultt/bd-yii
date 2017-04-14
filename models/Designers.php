<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Designers".
 *
 * @property integer $Designer_pasport_number
 * @property string $Surname
 * @property string $Name
 * @property string $Father_name
 * @property integer $Salary
 * @property string $Gender
 * @property string $Email
 *
 * @property Pictures[] $pictures
 */
class Designers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Designers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Designer_pasport_number', 'Surname', 'Name', 'Father_name', 'Salary', 'Gender', 'Email'], 'required'],
            [['Designer_pasport_number', 'Salary'], 'integer'],
            [['Surname', 'Name', 'Father_name', 'Gender', 'Email'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Designer_pasport_number' => 'Designer Pasport Number',
            'Surname' => 'Surname',
            'Name' => 'Name',
            'Father_name' => 'Father Name',
            'Salary' => 'Salary',
            'Gender' => 'Gender',
            'Email' => 'Email',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPictures()
    {
        return $this->hasMany(Pictures::className(), ['Designer_pasport_number' => 'Designer_pasport_number']);
    }
}
