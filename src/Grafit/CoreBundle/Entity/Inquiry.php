<?php

namespace Grafit\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * News
 *
 * @ORM\Table(name="inquiry")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Grafit\CoreBundle\Entity\InquiryRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Inquiry
{
    const STATUS_RECEIVED         =   "Received";
    const STATUS_IN_PROCESSING    =   "In_progress";
    const STATUS_COMPLETED        =   "Completed";

    /**
     * @var array
     */
    private static $_statuses = array(
            self::STATUS_RECEIVED,
            self::STATUS_IN_PROCESSING,
            self::STATUS_COMPLETED
        );

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
    * @var string
    * @Assert\NotNull(
    *     message = "To polje ne sme biti prazno!"
    * )
    * @ORM\Column(length=255)
    */
    private $name;

    /**
    * @var string
    * @Assert\NotNull(
    *     message = "To polje ne sme biti prazno!"
    * )
    * @ORM\Column(length=255)
    */
    private $surname;
    
    /**
    * @var string
    * @ORM\Column(length=255)
    */
    private $company;
    
    /**
    * @var string
    * @Assert\NotNull(
    *     message = "To polje ne sme biti prazno!"
    * )
    * @ORM\Column(length=255)
    */
    private $telephone;
    
    /**
    * @var string
    * @Assert\NotNull(
    *     message = "To polje ne sme biti prazno!"
    * )
    * @Assert\Email(
    *     message = "Email: '{{ value }}' ni veljaven!"
    * )
    * @ORM\Column(length=255)
    */
    private $email;
    
    /**
    * @var string
    * @ORM\Column(length=255)
    */
    private $status;

    /**
    * @var string
    *
    * @ORM\Column(type="text")
    */
    protected $text;
    
    /**
     * @var string
     *
     * @ORM\Column(type="datetime")
     */
    protected $created;
    
    public function __construct() {
        $this->created   = new \DateTime('now');
        $this->status    = self::STATUS_RECEIVED;
    }

    /**
     * Get Id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Inquiry
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
    
    /**
     * Set Name
     *
     * @param string $name
     * @return Name
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
    
    /**
     * Get Name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set Surname
     *
     * @param string $surname
     * @return Surname
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }
    
    /**
     * Get Surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }
    
    /**
     * Set company
     *
     * @param string $company
     * @return company
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }
    
    /**
     * Get company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }
    
    /**
     * Set telephone
     *
     * @param string $telephone
     * @return telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }
    
    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }
    
    /**
     * Set email
     *
     * @param string $email
     * @return email
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
    
    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
    
    /**
     * Set Text
     *
     * @param string $text
     * @return Text
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get Text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }
    
    /**
     * Get Created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }
}