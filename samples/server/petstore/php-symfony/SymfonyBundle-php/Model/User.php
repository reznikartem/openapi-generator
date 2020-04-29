<?php
/**
 * User
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Server\Model
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */

/**
 * OpenAPI Petstore
 *
 * This is a sample server Petstore server. For this sample, you can use the api key `special-key` to test the authorization filters.
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://github.com/openapitools/openapi-generator.git
 *
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Model;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Class representing the User model.
 *
 * A User who is purchasing from the pet store
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class User 
{
        /**
     * @var int|null
     * @SerializedName("id")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected $id;

    /**
     * @var string|null
     * @SerializedName("username")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $username;

    /**
     * @var string|null
     * @SerializedName("firstName")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $firstName;

    /**
     * @var string|null
     * @SerializedName("lastName")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $lastName;

    /**
     * @var string|null
     * @SerializedName("email")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $email;

    /**
     * @var string|null
     * @SerializedName("password")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $password;

    /**
     * @var string|null
     * @SerializedName("phone")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $phone;

    /**
     * User Status
     *
     * @var int|null
     * @SerializedName("userStatus")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected $userStatus;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->id = isset($data['id']) ? $data['id'] : null;
        $this->username = isset($data['username']) ? $data['username'] : null;
        $this->firstName = isset($data['firstName']) ? $data['firstName'] : null;
        $this->lastName = isset($data['lastName']) ? $data['lastName'] : null;
        $this->email = isset($data['email']) ? $data['email'] : null;
        $this->password = isset($data['password']) ? $data['password'] : null;
        $this->phone = isset($data['phone']) ? $data['phone'] : null;
        $this->userStatus = isset($data['userStatus']) ? $data['userStatus'] : null;
    }

    /**
     * Gets id.
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets id.
     *
     * @param int|null $id
     *
     * @return $this
     */
    public function setId($id = null): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets username.
     *
     * @return string|null
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Sets username.
     *
     * @param string|null $username
     *
     * @return $this
     */
    public function setUsername($username = null): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Gets firstName.
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Sets firstName.
     *
     * @param string|null $firstName
     *
     * @return $this
     */
    public function setFirstName($firstName = null): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Gets lastName.
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Sets lastName.
     *
     * @param string|null $lastName
     *
     * @return $this
     */
    public function setLastName($lastName = null): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Gets email.
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets email.
     *
     * @param string|null $email
     *
     * @return $this
     */
    public function setEmail($email = null): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Gets password.
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets password.
     *
     * @param string|null $password
     *
     * @return $this
     */
    public function setPassword($password = null): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Gets phone.
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets phone.
     *
     * @param string|null $phone
     *
     * @return $this
     */
    public function setPhone($phone = null): self
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Gets userStatus.
     *
     * @return int|null
     */
    public function getUserStatus()
    {
        return $this->userStatus;
    }

    /**
     * Sets userStatus.
     *
     * @param int|null $userStatus  User Status
     *
     * @return $this
     */
    public function setUserStatus($userStatus = null): self
    {
        $this->userStatus = $userStatus;

        return $this;
    }
}


