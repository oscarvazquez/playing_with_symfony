<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
/**
 * @Annotation
 */
class User
{
	/**
	* @Assert|NotBlank()
	* @Assert|Email()
	*/
	protected $email;
	/**
	* @Assert|NotBlank()
	*/
	protected $fullname;
	/**
	* @Assert|NotBlank()
	*/
	protected $password;
	/**
	* @Assert|NotBlank()
	*/
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