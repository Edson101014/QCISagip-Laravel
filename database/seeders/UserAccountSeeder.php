<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\user_account;

class UserAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

            user_account::create([
                'account_id' => 'user_645af5367b084',
                'email' => 'ritchiepaulsoroneljalayajay@gmail.com',
                'password' => '12345',
                'user_type' =>'user',
                'key_encrypt' => 'QCIsagip',
                'isbanned' => 0,

            ]);
            user_account::create([
                'account_id' => 'user_645c5af066bfa',
                'email' => 'joshua.ledesma.dacuyan@gmail.com',
                'password' => '12345',
                'user_type' =>'user',
                'key_encrypt' => 'QCIsagip',
                'isbanned' => 0,

            ]);
            user_account::create([
                'account_id' => 'user_645c5ca60437d',
                'email' => 'jalayajayr.qcydoqcu@gmail.com',
                'password' => '12345',
                'user_type' =>'user',
                'key_encrypt' => 'QCIsagip',
                'isbanned' => 0,

            ]);


    }
}
