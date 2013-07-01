<?php
// src/Likipe/BackendBundle/Document/Post.php
namespace Likipe\BackendBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @MongoDB\EmbeddedDocument
 */
class Post {

	/**
	 * @MongoDB\Id(strategy="auto")
	 */
	protected $id;

	/**
     * @MongoDB\String
     */
	protected $author;

	/**
     * @MongoDB\String
	 * @Assert\NotBlank()
     */
	protected $title;
	
	/**
     * @MongoDB\String
     */
	protected $slug;

	/**
     * @MongoDB\String
     */
	protected $content;

	/**
	 * @MongoDB\Date
	 */
	protected $created;

	/**
	 * @MongoDB\Date
	 */
	protected $updated;

	/**
	 * @MongoDB\Boolean
	 */
	protected $delete;
	
	/**
	 * @MongoDB\ReferenceOne(targetDocument="Likipe\BackendBundle\Document\Blog", inversedBy="posts")
	 */
	protected $blog;
	
	/**
     * @MongoDB\String
     */
	protected $featuredimage;
	
	/**
	 * @MongoDB\File
	 * @Assert\File(maxSize="6000000")
	 */
	private $file;

	

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return self
     */
    public function setAuthor($author)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * Get author
     *
     * @return string $author
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Get title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return self
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
        return $this;
    }

    /**
     * Get slug
     *
     * @return string $slug
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return self
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * Get content
     *
     * @return string $content
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set created
     *
     * @param date $created
     * @return self
     */
    public function setCreated($created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * Get created
     *
     * @return date $created
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param date $updated
     * @return self
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
        return $this;
    }

    /**
     * Get updated
     *
     * @return date $updated
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set delete
     *
     * @param boolean $delete
     * @return self
     */
    public function setDelete($delete)
    {
        $this->delete = $delete;
        return $this;
    }

    /**
     * Get delete
     *
     * @return boolean $delete
     */
    public function getDelete()
    {
        return $this->delete;
    }

    /**
     * Set blog
     *
     * @param Likipe\BackendBundle\Document\Blog $blog
     * @return self
     */
    public function setBlog(\Likipe\BackendBundle\Document\Blog $blog)
    {
        $this->blog = $blog;
        return $this;
    }

    /**
     * Get blog
     *
     * @return Likipe\BackendBundle\Document\Blog $blog
     */
    public function getBlog()
    {
        return $this->blog;
    }

    /**
     * Set featuredimage
     *
     * @param string $featuredimage
     * @return self
     */
    public function setFeaturedimage($featuredimage)
    {
        $this->featuredimage = $featuredimage;
        return $this;
    }

    /**
     * Get featuredimage
     *
     * @return string $featuredimage
     */
    public function getFeaturedimage()
    {
        return $this->featuredimage;
    }

    /**
     * Set file
     *
     * @param file $file
     * @return self
     */
    public function setFile($file)
    {
        $this->file = $file;
        return $this;
    }

    /**
     * Get file
     *
     * @return file $file
     */
    public function getFile()
    {
        return $this->file;
    }
}
