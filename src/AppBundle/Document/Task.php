<?php
namespace AppBundle\Document;
use Doctrine\ODM\PHPCR\Mapping\Annotations as PHPCR;

/**
 * @PHPCR\Document()
 */
class Task
{
    /**
     * @PHPCR\Id()
     */
    protected $id;

    /**
     * @PHPCR\Nodename
     */
    protected $title;

    /**
     * @PHPCR\Nodename
     */
    protected $done = false;

    /**
     * @PHPCR\ParentDocument()
     */
    protected $parentDocument;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    public function getDone()
    {
        return $this->done;
    }

    public function setDone($done)
    {
        $this->done = $done;

        return $this;
    }

    public function getParentDocument()
    {
        return $this->parentDocument;
    }

    public function setParentDocument($parentDocument)
    {
        $this->parentDocument = $parentDocument;

        return $this;
    }
}
