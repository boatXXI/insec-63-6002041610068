<?php

use yii\db\Migration;

/**
 * Class m201022_093638_create_item_for_rbac
 */
class m201022_093638_create_item_for_rbac extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201022_093638_create_item_for_rbac cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201022_093638_create_item_for_rbac cannot be reverted.\n";

        return false;
    }
    */
}
