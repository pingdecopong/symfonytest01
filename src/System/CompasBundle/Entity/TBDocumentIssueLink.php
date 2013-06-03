<?php

namespace System\CompasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TBDocumentIssueLink
 */
class TBDocumentIssueLink
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $IssueReplyId;

    /**
     * @var integer
     */
    private $DocumnetPhysicalFileId;

    /**
     * @var \System\CompasBundle\Entity\TBIssueReply
     */
    private $tbissuereply;

    /**
     * @var \System\CompasBundle\Entity\TBDocumnetPhysicalFile
     */
    private $tbdocumnetphysicalfile;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set IssueReplyId
     *
     * @param integer $issueReplyId
     * @return TBDocumentIssueLink
     */
    public function setIssueReplyId($issueReplyId)
    {
        $this->IssueReplyId = $issueReplyId;
    
        return $this;
    }

    /**
     * Get IssueReplyId
     *
     * @return integer 
     */
    public function getIssueReplyId()
    {
        return $this->IssueReplyId;
    }

    /**
     * Set DocumnetPhysicalFileId
     *
     * @param integer $documnetPhysicalFileId
     * @return TBDocumentIssueLink
     */
    public function setDocumnetPhysicalFileId($documnetPhysicalFileId)
    {
        $this->DocumnetPhysicalFileId = $documnetPhysicalFileId;
    
        return $this;
    }

    /**
     * Get DocumnetPhysicalFileId
     *
     * @return integer 
     */
    public function getDocumnetPhysicalFileId()
    {
        return $this->DocumnetPhysicalFileId;
    }

    /**
     * Set tbissuereply
     *
     * @param \System\CompasBundle\Entity\TBIssueReply $tbissuereply
     * @return TBDocumentIssueLink
     */
    public function setTbissuereply(\System\CompasBundle\Entity\TBIssueReply $tbissuereply = null)
    {
        $this->tbissuereply = $tbissuereply;
    
        return $this;
    }

    /**
     * Get tbissuereply
     *
     * @return \System\CompasBundle\Entity\TBIssueReply 
     */
    public function getTbissuereply()
    {
        return $this->tbissuereply;
    }

    /**
     * Set tbdocumnetphysicalfile
     *
     * @param \System\CompasBundle\Entity\TBDocumnetPhysicalFile $tbdocumnetphysicalfile
     * @return TBDocumentIssueLink
     */
    public function setTbdocumnetphysicalfile(\System\CompasBundle\Entity\TBDocumnetPhysicalFile $tbdocumnetphysicalfile = null)
    {
        $this->tbdocumnetphysicalfile = $tbdocumnetphysicalfile;
    
        return $this;
    }

    /**
     * Get tbdocumnetphysicalfile
     *
     * @return \System\CompasBundle\Entity\TBDocumnetPhysicalFile 
     */
    public function getTbdocumnetphysicalfile()
    {
        return $this->tbdocumnetphysicalfile;
    }
}
