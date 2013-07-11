<?php

// src/Likipe/FrontendBundle/Document/Member.php

namespace Likipe\FrontendBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @MongoDB\Document(collection="Likipe_Member", repositoryClass="Likipe\FrontendBundle\Repository\MemberRepository")
 */
class Member extends BaseUser {

	/**
	 * @MongoDB\Id(strategy="auto")
	 */
	protected $id;

	/**
	 * @MongoDB\String
	 */
	protected $firstname;

	/**
	 * @MongoDB\String
	 */
	protected $lastname;

	/**
	 * @MongoDB\Boolean
	 */
	protected $isActive;

	public function __construct() {
		parent::__construct();
		$this->isActive = true;
		$this->roles[] = 'ROLE_MEMBER';
	}

	/**
	 * Get name
	 *
	 * @return string $name
	 */
	public function getName() {
		return $this->firstname . ' ' . $this->lastname;
	}

	/**
	 * Get id
	 *
	 * @return id $id
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Set firstname
	 *
	 * @param string $firstname
	 * @return self
	 */
	public function setFirstname($firstname) {
		$this->firstname = $firstname;
		return $this;
	}

	/**
	 * Get firstname
	 *
	 * @return string $firstname
	 */
	public function getFirstname() {
		return $this->firstname;
	}

	/**
	 * Set lastname
	 *
	 * @param string $lastname
	 * @return self
	 */
	public function setLastname($lastname) {
		$this->lastname = $lastname;
		return $this;
	}

	/**
	 * Get lastname
	 *
	 * @return string $lastname
	 */
	public function getLastname() {
		return $this->lastname;
	}

	/**
	 * Set isActive
	 *
	 * @param boolean $isActive
	 * @return self
	 */
	public function setIsActive($isActive) {
		$this->isActive = $isActive;
		return $this;
	}

	/**
	 * Get isActive
	 *
	 * @return boolean $isActive
	 */
	public function getIsActive() {
		return $this->isActive;
	}

}
