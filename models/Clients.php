<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Clients".
 *
 * @property integer $Client_Number
 * @property string $Surname
 * @property string $Name
 * @property string $Father_name
 * @property string $Birthday
 * @property string $Gender
 * @property integer $Manager_Pasport_Number
 *
 * @property Managers $managerPasportNumber
 */
class Clients extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Clients';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Surname', 'Name', 'Father_name', 'Manager_Pasport_Number'], 'required'],
            [['Surname', 'Name', 'Father_name', 'Gender'], 'string'],
            [['Birthday'], 'safe'],
            [['Manager_Pasport_Number'], 'integer'],
            [['Manager_Pasport_Number'], 'exist', 'skipOnError' => true, 'targetClass' => Managers::className(), 'targetAttribute' => ['Manager_Pasport_Number' => 'Manager_pasport_number']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Client_Number' => 'Client  Number',
            'Surname' => 'Surname',
            'Name' => 'Name',
            'Father_name' => 'Father Name',
            'Birthday' => 'Birthday',
            'Gender' => 'Gender',
            'Manager_Pasport_Number' => 'Manager  Pasport  Number',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getManagerPasportNumber()
    {
        return $this->hasOne(Managers::className(), ['Manager_pasport_number' => 'Manager_Pasport_Number']);
    }
}
