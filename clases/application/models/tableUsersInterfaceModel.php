<?php

interface tableUsersInterfaceModel
{
	/**
	 * Get all users in an array
	 */
	public function getUsers();
	
	/**
	 * Get user by id
	 * 
	 * @param unknown $id
	 */
	public function getUser($id);
	
	/**
	 * Insert user into db
	 * 
	 * @param unknown $data
	 */
	public function insertUser($data);

	/**
	 * Update user in db by id
	 * 
	 * @param unknown $id
	 * @param unknown $data
	 */
	public function updateUser($id, $data);
	
	/**
	 * Delete user from db by id
	 * 
	 * @param unknown $id
	 */
	public function deleteUser($id);

}