<?php

use yii\db\Migration;

/**
 * Class m201022_104912_create_permission_of_post
 */
class m201022_104912_create_permission_of_post extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $auth = Yii::$app->authManager;
       
        $create = $auth->createPermission('post-create');
        $create->description = 'Create a post' ;
        $auth->add($create);

        $index = $auth->createPermission('post-index');
        $index->description = 'List a post' ;
        $auth->add($index);

        $delete = $auth->createPermission('post-delete');
        $delete->description = 'Delete Post' ;
        $auth->add($delete);

        $update = $auth->createPermission('post-update');
        $update->description = 'Update Post' ;
        $auth->add($update);

        $view = $auth->createPermission('post-view');
        $view->description = 'View Post' ;
        $auth->add($view);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        
        $auth = Yii::$app->authManager;

        $create = $auth->getPermission('post-create');
        if($create){
            $auth->remove($create);
        }

        $index = $auth->getPermission('post-index');
        if($index){
            $auth->remove($index);
        }

        $update = $auth->getPermission('post-update');
        if($update){
            $auth->remove($update);
        }
        $view = $auth->getPermission('post-view');
        if($view){
            $auth->remove($view);
        }

        $delete = $auth->getPermission('post-delete');
        if($delete){
            $auth->remove($delete);
        }
        

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201022_104912_create_permission_of_post cannot be reverted.\n";

        return false;
    }
    */
}
