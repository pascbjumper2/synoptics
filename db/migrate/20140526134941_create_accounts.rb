class CreateAccounts < ActiveRecord::Migration
  def change
    create_table :accounts do |t|
      t.integer :number
      t.string :name
      t.text :description
      t.string :acc_type
      t.string :acc_class
      t.integer :balance

      t.timestamps
    end
  end
end
