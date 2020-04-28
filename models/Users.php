<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $age
 * @property string|null $discription
 * @property string|null $sex
 * @property string|null $sexpar
 * @property string|null $agepar
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'discription', 'sex', 'sexpar', 'agepar'], 'string'],
            [['age'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'age' => 'Age',
            'discription' => 'Discription',
            'sex' => 'Sex',
            'sexpar' => 'Sexpar',
            'agepar' => 'Agepar',
        ];
    }
}
