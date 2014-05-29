class CreateFeatures < ActiveRecord::Migration
  def change
    create_table :features do |t|
      t.string :name
      t.text :description
      t.integer :position
      t.string :link

      t.timestamps
    end
  end
end
