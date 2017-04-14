<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Orders".
 *
 * @property integer $Order_id
 * @property string $Order_Date
 * @property string $Town
 * @property string $Street
 * @property string $House
 * @property integer $Manager_pasport_number
 *
 * @property Cheks[] $cheks
 * @property Managers $managerPasportNumber
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Orders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Order_Date', 'Town', 'Street', 'House', 'Manager_pasport_number'], 'required'],
            [['Order_Date'], 'safe'],
            [['Town', 'Street', 'House'], 'string'],
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
            'Order_id' => 'Order ID',
            'Order_Date' => 'Order  Date',
            'Town' => 'Town',
            'Street' => 'Street',
            'House' => 'House',
            'Manager_pasport_number' => 'Manager Pasport Number',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCheks()
    {
        return $this->hasMany(Cheks::className(), ['Order_number' => 'Order_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getManagerPasportNumber()
    {
        return $this->hasOne(Managers::className(), ['Manager_pasport_number' => 'Manager_pasport_number']);
    }
}
