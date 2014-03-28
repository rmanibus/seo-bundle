<?php

namespace Symfony\Cmf\Bundle\SeoBundle\Doctrine\Phpcr;

use Symfony\Cmf\Bundle\SeoBundle\Model\SeoAwareContent as SeoAwareContentModel;

/**
 * The bundle's own content class which supports the SeoAwareInterface.
 *
 * This interface is responsible for serving the SeoMeta or been recognised
 * for an sonata admin extension.
 *
 *
 * @author Maximilian Berghoff <Maximilian.Berghoff@gmx.de>
 */
class SeoAwareContent extends SeoAwareContentModel
{
    /**
     * The node.
     */
    protected $node;

    /**
     * The parent node.
     */
    protected $parentDocument;

    /**
     * @param mixed $node
     */
    public function setNode($node)
    {
        $this->node = $node;
    }

    /**
     * @return mixed
     */
    public function getNode()
    {
        return $this->node;
    }

    /**
     * @param mixed $parent
     */
    public function setParentDocument($parent)
    {
        $this->parentDocument = $parent;
    }

    /**
     * @return mixed
     */
    public function getParentDocument()
    {
        return $this->parentDocument;
    }
}
