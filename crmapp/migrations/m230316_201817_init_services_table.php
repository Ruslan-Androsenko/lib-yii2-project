<?php

use yii\db\Migration;

/**
 * Class m230316_201817_init_services_table
 */
class m230316_201817_init_services_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(
            '{{%service}}',
            [
                'id' => $this->primaryKey(),
                'name' => $this->string()->unique(),
                'hourly_rate' => $this->integer(),
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%service}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230316_201817_init_services_table cannot be reverted.\n";

        return false;
    }
    */
}
