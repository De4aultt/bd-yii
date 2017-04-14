<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Pictures".
 *
 * @property integer $Picture_id
 * @property string $Date_made
 * @property string $File
 * @property string $Style
 * @property integer $Price
 * @property integer $Designer_pasport_number
 *
 * @property Cheks[] $cheks
 * @property Designers $designerPasportNumber
 */
class Pictures extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Pictures';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Date_made', 'Style', 'Price', 'Designer_pasport_number'], 'required'],
            [['Date_made'], 'safe'],
            [['File', 'Style'], 'string'],
            [['Price', 'Designer_pasport_number'], 'integer'],
            [['Designer_pasport_number'], 'exist', 'skipOnError' => true, 'targetClass' => Designers::className(), 'targetAttribute' => ['Designer_pasport_number' => 'Designer_pasport_number']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Picture_id' => 'Picture ID',
            'Date_made' => 'Date Made',
            'File' => 'File',
            'Style' => 'Style',
            'Price' => 'Price',
            'Designer_pasport_number' => 'Designer Pasport Number',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCheks()
    {
        return $this->hasMany(Cheks::className(), ['Picture_number' => 'Picture_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDesignerPasportNumber()
    {
        return $this->hasOne(Designers::className(), ['Designer_pasport_number' => 'Designer_pasport_number']);
    }
}
