<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AdministratorModel;
use App\Models\MenuModel;
use App\Models\RoleModel;
use App\Models\RoleMenuModel;
use Illuminate\Support\Facades\Hash;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        date_default_timezone_set('Asia/Jakarta');
        //MenuModel::truncate();
        // MenuModel::insert([
        //     ['name' =>  'Dashboard',  'parent_menu_id' => 0,'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s'),'menu_id' => 1,'slug' =>'dashboard','icon'=>'fas fa-warehouse'],
        //     ['name' =>  'Project',  'parent_menu_id' => 0,'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s'),'menu_id' => 2,'slug' =>'project','icon'=>'fas fa-user'],
        //     ['name' =>  'Product',  'parent_menu_id' => 0,'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s'),'menu_id' => 3,'slug' =>'product','icon'=>'fas fa-building'],
        //     ['name' =>  'Administrator',  'parent_menu_id' => 0,'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s'),'menu_id' => 4,'slug' =>'administrator','icon'=>'fas fa-user-secret'],
        //     ['name' =>  'User',  'parent_menu_id' => 0,'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s'),'menu_id' => 5,'slug' =>'user','icon'=>'fas fa-clipboard-list'],
        //     ['name' =>  'News',  'parent_menu_id' => 0,'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s'),'menu_id' => 6,'slug' =>'news','icon'=>'fas fa-file-alt'],
        //     ['name' =>  'Schedule',  'parent_menu_id' => 0,'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s'),'menu_id' => 7,'slug' =>'schedule','icon'=>'fas fa-calendar-check'],
        //     ['name' =>  'List Admin',  'parent_menu_id' => 4,'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s'),'menu_id' => 0,'slug' =>'list-admin','icon'=>'null'],
        //     ['name' =>  'Role',  'parent_menu_id' => 4,'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s'),'menu_id' => 0,'slug' =>'role','icon'=>'null'],
        //     ['name' =>  'Pengaturan Menu',  'parent_menu_id' => 4,'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s'),'menu_id' => 0,'slug' =>'menu','icon'=>'null'],
        //     ['name' =>  'Investor',  'parent_menu_id' => 5,'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s'),'menu_id' => 0,'slug' =>'investor','icon'=>'null']
        // ]);
        date_default_timezone_set('Asia/Jakarta');
        //RoleModel::truncate();
        // RoleModel::insert(
        //     ['name' =>  'SUPERADMIN',  'status' => 1,'created_at' => date('Y-m-d'),'updated_at' => date('Y-m-d')]
        // );
        //seeder2
        //RoleMenuModel::truncate();
        $data_array = MenuModel::all();
        $id_role = RoleModel::select('id')->pluck('id');
        // foreach ($data_array as $k => $v) {
        //         date_default_timezone_set('Asia/Jakarta');
        //         RoleMenuModel::insert(
        //             ['role_id' => $id_role[0],  'menu_id' => $v->id,'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')]
        //         );
        // }
        //seeder3
        //AdministratorModel::truncate();
        $data_array = RoleModel::all();
        foreach ($data_array as $k => $v) {
                date_default_timezone_set('Asia/Jakarta');
                AdministratorModel::insert(
                    ['role_id' => $v->id,'name' => 'admin',  'phone' => '081320938989','email' => 'admin@gmail.com','password' => Hash::make('admin123'),'status' =>1,'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s'),'deleted_at' => null]
                );
        }
    }
}
