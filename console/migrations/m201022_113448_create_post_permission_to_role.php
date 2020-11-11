<?php

use yii\db\Migration;

/**
 * Class m201022_113448_create_post_permission_to_role
 */
class m201022_113448_create_post_permission_to_role extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $auth = Yii::$app->authManager;
        $author = $auth->getRole('author');
        $admin = $auth->getRole('super-admin');
        //permission
        $listpost = $auth->getPermission('post-index');
        $createpost = $auth->getPermission('post-create');
        $updatepost = $auth->getPermission('post-update');
        $viewpost = $auth->getPermission('post-view');
        $deletepost = $auth->getPermission('post-index');
        //assign
        $auth ->addChild($author,$createpost);
        $auth ->addChild($author,$listpost);
        $auth ->addChild($author,$listpost);
        $auth ->addChild($author,$viewpost);

        $auth ->addChild($admin,$author);

        $auth ->addChild($superAdmin,$admin);
        $auth ->addChild($superAdmin,$deletepost);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        echo "m201022_113448_create_post_permission_to_role cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201022_113448_create_post_permission_to_role cannot be reverted.\n";

        return false;
    }
    */
}
