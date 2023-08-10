<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%project_gallery}}`.
 */
class m230427_074051_create_project_gallery_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%project_gallery}}', [
            'id' => $this->primaryKey(),
            'project_show_id' => $this->integer()->notNull(),
            'image' => $this->string(255),
        ]);

        $this->addForeignKey(
            'fk-project_gallery-project_show_id',
            '{{%project_gallery}}',
            'project_show_id',
            '{{%project_show}}',
            'id',
            'CASCADE',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-project_gallery-project_show_id', '{{%project_gallery}}');
        $this->dropTable('{{%project_gallery}}');
    }
}
