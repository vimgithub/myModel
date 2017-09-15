<?php

namespace  Zev\MyModel\Seeds;

use Illuminate\Database\Seeder;

class OrgStructureTreeTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('org_structure_tree')->delete();
        
        \DB::table('org_structure_tree')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => '组织机构名称',
                'parent_id' => 0,
                'relationship_path' => '1/',
                'order' => 1,
                'concat' => '',
                'concat_info' => '',
                'description' => '机构描述',
                'created_at' => '2017-08-22 08:05:28',
                'updated_at' => '2017-08-22 08:06:03',
            ),
        ));
        
        
    }
}