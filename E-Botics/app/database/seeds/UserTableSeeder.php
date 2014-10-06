<?php

class UserTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'name'     => 'lucy Kerubo',
			'username' => 'Lulu',
			'email'    => 'lucykerubo763@gmail.com',
			'password' => Hash::make('safaricom'),
		));
	}

}