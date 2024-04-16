<?php

namespace Database\Seeders;


use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sdminRecords = [
            ['id'=>1,'name'=>'Shivendra Super Admin','type'=>'Super Admin','email'=>'superadmin@gmail.com','password'=>'$2a$12$jrM59o.qi3tbhw7ZeoIYiOsbunHQ16eHA2I1sauRbt6Ypgvrb6o2e',
              'mobile'=>'9000000000','agent_id'=>0,'image'=>'','status'=>1],
        ];
        Admin::insert($sdminRecords);
    }
}
