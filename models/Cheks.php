<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Cheks".
 *
 * @property integer $Chek_number
 * @property integer $Count
 * @property integer $Total_price
 * @property integer $Picture_number
 * @property integer $Order_number
 *
 * @property Pictures $pictureNumber
 * @property Orders $orderNumber
 */
class Cheks extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Cheks';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Count', 'Total_price', 'Picture_number', 'Order_number'], 'integer'],
            [['Total_price', 'Picture_number', 'Order_number'], 'required'],
            [['Picture_number'], 'exist', 'skipOnError' => true, 'targetClass' => Pictures::className(), 'targetAttribute' => ['Picture_number' => 'Picture_id']],
            [['Order_number'], 'exist', 'skipOnError' => true, 'targetClass' => Orders::className(), 'targetAttribute' => ['Order_number' => 'Order_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Chek_number' => 'Chek Number',
            'Count' => 'Count',
            'Total_price' => 'Total Price',
            'Picture_number' => 'Picture Number',
            'Order_number' => 'Order Number',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPictureNumber()
    {
        return $this->hasOne(Pictures::className(), ['Picture_id' => 'Picture_number']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderNumber()
    {
        return $this->hasOne(Orders::className(), ['Order_id' => 'Order_number']);
    }
}
