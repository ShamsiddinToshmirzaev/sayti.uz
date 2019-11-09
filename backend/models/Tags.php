<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tags".
 *
 * @property int $id
 * @property string $name
 */
class Tags extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tags';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
        ];
    }


    public function getSitesTags()
    {
        return $this->hasMany(TagsAndSites::class, ['tag_id' => 'id']);
    }

    public function getSites()
    {
        return $this->hasMany(Sites::class, ['id' => 'site_id'])->viaTable('tags_and_sites', ['tag_id' =>  'id']);
    }
}