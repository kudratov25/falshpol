<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 28.04.2023
 * Time: 15:07
 */

use yii\db\Migration;

//userlarni rootlashga migratsiya UserPermissionsModel da sql zaprosi bor
class m230429_000000_create_user_permissions_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("{{%user_permissions}}", [
            "id" => $this->bigInteger()
                ->notNull()
                ->append("AUTO_INCREMENT PRIMARY KEY"),
            "role_id" => $this->integer(),
            "route" => $this->string(100),
            "access" => $this->tinyInteger(1)->defaultValue(0),
            "created_at" => $this->timestamp()
                ->notNull()
                ->defaultExpression("CURRENT_TIMESTAMP"),
            "updated_at" => $this->timestamp()
                ->notNull()
                ->defaultExpression(
                    "CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP"
                ),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable("{{%user_permissions}}");
    }
}
