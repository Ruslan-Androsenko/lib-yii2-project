<?php

use yii\db\Migration;

/**
 * Class m230314_192922_init_phone_table
 */
class m230314_192922_init_phone_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(
            'phone',
            [
                'id' => $this->primaryKey(),
                'customer_id' => $this->integer(),
                'number' => $this->string(),
            ],
        );
        $this->addForeignKey('FK-PhoneCustomer-customer_id', 'phone', 'customer_id', 'customer', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('FK-PhoneCustomer-customer_id', 'phone');
        $this->dropTable('phone');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230314_192922_init_phone_table cannot be reverted.\n";

        return false;
    }
    */
}
