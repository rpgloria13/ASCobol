<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property string $cname
 * @property string $nname
 * @property string $email
 * @property string $home_address
 * @property string $gender
 * @property integer $cpnumber
 * @property string $comments
 */
class Test extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cname', 'nname', 'email', 'home_address', 'gender', 'cpnumber', 'comments'], 'required'],
            [['nname', 'email', 'home_address', 'gender', 'comments'], 'string'],
            [['cpnumber'], 'integer'],
            [['cname'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cname' => 'Complete Name',
            'nname' => 'Nickname',
            'email' => 'Email',
            'home_address' => 'Home Address',
            'gender' => 'Gender',
            'cpnumber' => 'Cellphone number',
            'comments' => 'Comments',
        ];
    }
}
