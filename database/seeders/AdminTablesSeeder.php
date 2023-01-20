<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class AdminTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // base tables
        \Encore\Admin\Auth\Database\Menu::truncate();
        \Encore\Admin\Auth\Database\Menu::insert(
            [
                [
                    "icon" => "fa-gears",
                    "order" => 0,
                    "parent_id" => 0,
                    "permission" => NULL,
                    "title" => "Helpers",
                    "uri" => ""
                ],
                [
                    "icon" => "fa-keyboard-o",
                    "order" => 1,
                    "parent_id" => 1,
                    "permission" => NULL,
                    "title" => "Scaffold",
                    "uri" => "helpers/scaffold"
                ],
                [
                    "icon" => "fa-database",
                    "order" => 2,
                    "parent_id" => 1,
                    "permission" => NULL,
                    "title" => "Database terminal",
                    "uri" => "helpers/terminal/database"
                ],
                [
                    "icon" => "fa-terminal",
                    "order" => 3,
                    "parent_id" => 1,
                    "permission" => NULL,
                    "title" => "Laravel artisan",
                    "uri" => "helpers/terminal/artisan"
                ],
                [
                    "icon" => "fa-list-alt",
                    "order" => 4,
                    "parent_id" => 1,
                    "permission" => NULL,
                    "title" => "Routes",
                    "uri" => "helpers/routes"
                ]
            ]
        );

        \Encore\Admin\Auth\Database\Permission::truncate();
        \Encore\Admin\Auth\Database\Permission::insert(
            [
                [
                    "http_method" => "",
                    "http_path" => "/helpers/*",
                    "name" => "Admin helpers",
                    "slug" => "ext.helpers"
                ]
            ]
        );

        \Encore\Admin\Auth\Database\Role::truncate();
        \Encore\Admin\Auth\Database\Role::insert(
            [

            ]
        );

        // pivot tables
        DB::table('admin_role_menu')->truncate();
        DB::table('admin_role_menu')->insert(
            [

            ]
        );

        DB::table('admin_role_permissions')->truncate();
        DB::table('admin_role_permissions')->insert(
            [

            ]
        );

        // finish
    }
}
