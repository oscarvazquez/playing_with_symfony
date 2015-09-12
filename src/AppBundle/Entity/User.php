<?php

namespace AppBundle\Entity;

class User
{
	protected $email;
	protected $fullname;
	protected $password;
	protected $dob;

	public function getEmail()
	{
		return $this->email;
	}
	public function setEmail($email)
	{
		$this->email = $email;
	}
	public function getFullname()
	{
		return $this->fullname;
	}
	public function setFullname($fullname)
	{
		$this->fullname = $fullname;
	}
	public function getPassword()
	{
		return $this->password;
	}
	public function setPassword($password)
	{
		$this->password = $password;
	}
	public function getDob()
	{
		return $this->dob;
	}
	public function setDob($dob)
	{
		$this->dob = $dob;
	}
}