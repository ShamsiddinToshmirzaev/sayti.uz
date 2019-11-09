<?php

namespace backend\models;

use common\models\User;
use Mpdf\Tag;
use Yii;
use yii\base\InvalidConfigException;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;
use yiidreamteam\upload\ImageUploadBehavior;

/**
 * This is the model class for table "sites"
 *
 * @property int $id
 * @property string $title
 * @property int $views
 * @property int $is_taxis
 * @property string $photo
 * @property int $created_at
 * @property int $updated_at
 * @property int $created_by
 * @property int $updated_by
 * @property int $parsed_at
 * @property int $status
 */
class Sites extends \yii\db\ActiveRecord
{

    const STATUS_NOT_ACTIVE = 0;
    const STATUS_ACTIVE = 1;
    const STATUS_DELETED = 2;
    public $counts;

    public static function tableName()
    {
        return 'sites';
    }

    public function rules()
    {
        return [
            [['title', 'views', 'photo', 'is_taxis'], 'required'],
            ['photo', 'image', 'maxSize' => 1024 * 1024 * 10],

            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['created_by' => 'id']],
            [['updated_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['updated_by' => 'id']],


        ];
    }


//    public function getStatusName($status)
//    {
//        $array = self::statusList();
//        return $status ? $array[$status] : $array[$this->status];
//    }
//
//    public static function statusList()
//    {
//        return [
//            self::STATUS_ACTIVE => 'Ha',
//            self::STATUS_NOT_ACTIVE => 'Yo`q',
//            self::STATUS_DELETED => 'O`chirilgan'
//        ];
//    }

    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'views' => Yii::t('app', 'Views'),
            'is_taxis' => Yii::t('app', 'Is_Taxis'),
            'photo' => Yii::t('app', 'Photo'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'updated_by' => Yii::t('app', 'Updated By'),
            'parsed_at' => Yii::t('app', 'Parsed At'),

        ];
    }

//    public function getSites()
//    {
//        try {
//            return $this->hasMany(Sites::class, ['id' => 'site_id'])->viaTable('tags', ['tag_id' => 'id']);
//        } catch (InvalidConfigException $e) {
//        }
//
//    }


//  gettagSites

    public function getTagSites()
    {
        return $this->hasMany(TagsAndSites::class, ['site_id' => 'id']);

    }


    public function getTags()
    {
        return $this->hasMany(Tags::class, ['id' => 'tag_id'])->viaTable('tags_and_sites', ['site_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::class, ['id' => 'created_by']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUpdatedBy()
    {
        return $this->hasOne(User::class, ['id' => 'updated_by']);
    }

    public function behaviors()
    {
        return [

            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
            ],

            [
                'class' => ImageUploadBehavior::class,
                'attribute' => 'photo',
                'createThumbsOnRequest' => true,

                'filePath' => '@frontend/web/app-images/store/sites/[[attribute_id]]/[[filename]].[[extension]]',
                'fileUrl' => '@url/app-images/store/sites/[[attribute_id]]/[[filename]].[[extension]]',

                'thumbPath' => '@frontend/web/app-images/cache/sites/[[attribute_id]]/[[profile]]_[[filename]].[[extension]]',
                'thumbUrl' => '@url/app-images/cache/sites/[[attribute_id]]/[[profile]]_[[filename]].[[extension]]',
                'thumbs' => [
                    'xs' => ['width' => 30, 'height' => 40],
                    'sm' => ['width' => 60, 'height' => 80],
                    'md' => ['width' => 120, 'height' => 160],
                    'lg' => ['width' => 360, 'height' => 480],
                ],
            ],
        ];
    }


}