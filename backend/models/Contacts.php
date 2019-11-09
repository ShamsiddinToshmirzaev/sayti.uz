<?php
namespace backend\models;


//use common\models\Telegram;
use Yii;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;
use yii\helpers\Html;

/**
 * This is the model class for table "contacts".
 *
 * @property int $id
 * @property string $full_name
 * @property string $email_phone
 * @property string $message;
 * @property int $status
 * @property int $created_at

 */
class Contacts extends \yii\db\ActiveRecord
{
    public $verifyCode;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contacts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['full_name', 'email_phone', 'message'], 'required'],
            [['message'], 'string'],
            [['full_name', 'email_phone'], 'string', 'max' => 50],
            ['verifyCode', 'captcha', 'captchaAction' => 'site/captcha'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'full_name' => Yii::t('app', 'Full Name'),
            'email_phone' => Yii::t('app', 'Email or Phone'),
            'message' => Yii::t('app', 'Message'),
            'status' => Yii::t('app','Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'verifyCode' => Yii::t('app', 'Verify Code'),

        ];
    }

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at'],
                ],
            ],
        ];
    }

    public function getPhotos(): ActiveQuery
    {
        return $this->hasMany(Sites::class, ['photo' => 'id'])->orderBy('sort');
    }

//    public function afterSave($insert, $changedAttributes)
//    {
//        if ($insert) {
//            $text = "Murojaat qoldirildi! \n" .
//                "FIO: " . $this->full_name . "\n" .
//                "Email/Telefon: " . $this->email_phone . "\n" .
//                "Matn:" . $this->message;
//
//            (new Telegram($text))->sendMessage();
//        }
//        parent::afterSave($insert, $changedAttributes);
//    }
}
