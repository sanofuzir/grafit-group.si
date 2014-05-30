<?php

namespace Grafit\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Grafit\CoreBundle\Entity\ArticleRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Article
{
    const STATUS_ACTUAL    =   "Actual";
    const STATUS_NEWS      =   "News";

    /**
     * @var array
     */
    private static $_statuses = array(
            self::STATUS_ACTUAL,
            self::STATUS_NEWS
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
    *
    * @ORM\Column(length=255)
    */
    private $name;

    /**
    * @var string
    *
    * @ORM\Column(length=255)
    */
    private $status;
    
    /**
     * @var UploadedFile
     *
     * @Assert\File(maxSize="10000000")
     */
    protected $file;

    /**
     * @var string
     *
     * @ORM\Column(length=255, nullable=true)
     */
    protected $path;

    /**
     * Document size in bytes
     *
     * @var integer
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $size;
    
    /**
     * @var string
     *
     * @ORM\Column(type="datetime")
     */
    protected $created;
    
    /**
    * @var string
    *
    * @ORM\Column(type="text")
    * @Assert\NotNull(
    *     message = "To polje ne sme biti prazno!"
    * )
    */
    protected $text;

    /**
    * @var Category
    *
    * @ORM\ManyToOne(targetEntity="Category", inversedBy="article")
    *
    */
    protected $category;
    
    public function __construct() {
        $this->created = new \DateTime('now');
        $this->status  = self::STATUS_NEWS;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
    
    public function getAbsolutePath() {
        return null === $this->path
               ? null
               : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getWebPath() {
        return null === $this->path
               ? null
               : $this->getUploadDir().'/'.$this->path;
    }

    protected function getUploadRootDir() {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../../public/'.$this->getUploadDir();
    }

    protected function getUploadDir() {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'article';
    }

    /**
     * Get file
     *
     * @return UploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set file
     *
     * @param UploadedFile $file
     * @return News
     */
    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;

        if (isset($this->path)) {
            // store the old name to delete after the update
            $this->temp = $this->path;
            $this->path = null;
        }
        return $this;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return News
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function setSize()
    {
        if (null !== $this->file) {
            $this->size = $this->file->getSize();
        }
    }

    /**
     * Get size
     *
     * @return integer
     */
    public function getSize()
    {
        return $this->size;
    }
    
    /**
     * Set name
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
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Status
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
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }
    
    /**
     * Set text
     *
     * @param string $text
     * @return News
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set category
     *
     * @param Category $category
     * @return Product
     */
    public function setCategory(Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return Category
     */
    public function getCategory()
    {
        return $this->category;
    }
    
    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        if (null !== $this->getFile()) {
            $filename = sha1(uniqid(mt_rand(), true));
            $this->path = $filename.'.'.$this->getFile()->guessExtension();
        }
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
    {
        if (null === $this->getFile()) {
            return;
        }

        // if there is an error when moving the file, an exception will be thrown
        $this->file->move($this->getUploadRootDir(), $this->path);

        // check if we have an old image
        if (isset($this->temp)) {
            // delete the old image
            unlink($this->getUploadRootDir().'/'.$this->temp);
            // clear the temp image path
            $this->temp = null;
        }
        $this->file = null;
    }
    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        if ($file = $this->getAbsolutePath()) {
            unlink($file);
        }
    }

}