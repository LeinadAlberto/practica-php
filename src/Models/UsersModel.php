<?php 

	namespace App\Models;

	use LionDatabase\Drivers\MySQL\MySQL as DB;

	class UsersModel
	{
		public function createUsersDB(object $data): object {
			return DB::table('users')->insert([
				'users_name' => $data->users_name,
				'users_last_name' => $data->users_last_name
			])->execute();
		}

		public function readUsersDB(): array|object {
			return DB::table('users')->select()->getAll();
		}

		public function updateUsersDB(object $data): object {
			return DB::table('users')->update([
				'users_name' => $data->users_name,
				'users_last_name' => $data->users_last_name
				])
				->where(DB::equalTo('idusers'), $data->idusers)
				->execute();
		}

		public function deleteUsersDB(object $data): object {
			return DB::table('users')->delete()
			->where(DB::equalTo('idusers'), $data->idusers)
			->execute();
		}

	}