<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Managers".
 *
 * @property integer $Manager_pasport_number
 * @property string $Surname
 * @property string $Name
 * @property string $Father_name
 * @property string $Birthday
 * @property integer $Salary
 *
 * @property Clients[] $clients
 * @property Orders[] $orders
 * @property PhoneNumbers[] $phoneNumbers
 */
class Managers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Managers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Manager_pasport_number', 'Surname', 'Name', 'Father_name', 'Birthday', 'Salary'], 'required'],
            [['Manager_pasport_number', 'Salary'], 'integer'],
            [['Surname', 'Name', 'Father_name'], 'string'],
            [['Birthday'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Manager_pasport_number' => 'Manager Pasport Number',
            'Surname' => 'Surname',
            'Name' => 'Name',
            'Father_name' => 'Father Name',
            'Birthday' => 'Birthday',
            'Salary' => 'Salary',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClients()
    {
        return $this->hasMany(Clients::className(), ['Manager_Pasport_Number' => 'Manager_pasport_number']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Orders::className(), ['Manager_pasport_number' => 'Manager_pasport_number']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhoneNumbers()
    {
        return $this->hasMany(PhoneNumbers::className(), ['Manager_pasport_number' => 'Manager_pasport_number']);
    }
}
