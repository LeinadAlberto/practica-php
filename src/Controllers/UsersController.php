<?php 

namespace App\Controllers;

use App\Models\UsersModel;

class UsersController
{
	private UsersModel $usersModel;

	public function __construct()
	{
		$this->usersModel = new UsersModel();
	}

	public function createUsers(): object 
	{
		return $this->usersModel->createUsersDB(request);
	}

	public function readUsers(): array|object 
	{
		return $this->usersModel->readUsersDB();
	}

	public function updateUsers(string $idusers): object 
	{
		return $this->usersModel->updateUsersDB((object) ['idusers'=> (int) $idusers,...((array) request)]);
	}

	public function deleteUsers(string $idusers): object 
	{
		return $this->usersModel->deleteUsersDB((object) ['idusers'=> $idusers]);
	}
}