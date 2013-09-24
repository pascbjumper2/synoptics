<?php
// src/User.php
class User
{
	/**
	* @var int
	*/
	protected $id;
	/**
	* @var string
	*/
	protected $email;
	protected $password;

	public function getId()
	{
		return $this->id;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function setName($password)
	{
		$this->password = $password;
	}
}
?>
