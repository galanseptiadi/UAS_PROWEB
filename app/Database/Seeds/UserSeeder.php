<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
		$model = model('UserModel');
		$model->insert([
		'username' => 'galanseptiadi',
		'useremail' => 'galanspt9@gmail.com',
		'userpassword' => password_hash('312010053', PASSWORD_DEFAULT),
		]);
    }
}
