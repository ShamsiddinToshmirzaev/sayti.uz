<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tags_and_sites.
 * @property int $id
 * @property int $site_id
 * @property mixed $idSites
 * @property mixed $idTags
 * @property int $tag_id
 */
class TagsAndSites extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tags_and_sites';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id','site_id','tag_id'], 'integer'],
            [['site_id'], 'exist', 'skipOnError' => true, 'targetClass' => Sites::class, 'targetAttribute' => ['site_id'=>'id']],
            [['tag_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tags::class, 'targetAttribute' => ['tag_id'=>'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'site_id' => Yii::t('app', 'Site ID'),
            'tag_id' => Yii::t('app', 'Tag ID'),

        ];
    }

    public function getIdSites()
    {
        return $this->hasOne(Sites::class, ['id'=> 'site_id']);
    }

    public function getIdTags()
    {
        return $this->hasOne(Tags::class, ['id'=> 'tag_id']);
    }
}