<?php

use yii\db\Migration;

/**
 * Class m230314_192203_init_customer_table
 */
class m230314_192203_init_customer_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(
            'customer',
            [
                'id' => $this->primaryKey(),
                'name' => $this->string(),
                'birth_date' => $this->date(),
                'notes' => $this->text(),
            ],
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('customer');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230314_192203_init_customer_table cannot be reverted.\n";

        return false;
    }
    */
}
