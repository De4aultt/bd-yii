<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Phone_numbers".
 *
 * @property integer $Phone_number_id
 * @property string $Mobile
 * @property string $Home
 * @property integer $Manager_pasport_number
 *
 * @property Managers $managerPasportNumber
 */
class PhoneNumbers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Phone_numbers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Mobile', 'Manager_pasport_number'], 'required'],
            [['Mobile', 'Home'], 'string'],
            [['Manager_pasport_number'], 'integer'],
            [['Manager_pasport_number'], 'exist', 'skipOnError' => true, 'targetClass' => Managers::className(), 'targetAttribute' => ['Manager_pasport_number' => 'Manager_pasport_number']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Phone_number_id' => 'Phone Number ID',
            'Mobile' => 'Mobile',
            'Home' => 'Home',
            'Manager_pasport_number' => 'Manager Pasport Number',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getManagerPasportNumber()
    {
        return $this->hasOne(Managers::className(), ['Manager_pasport_number' => 'Manager_pasport_number']);
    }
}
