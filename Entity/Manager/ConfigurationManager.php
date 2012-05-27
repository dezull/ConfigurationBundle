<?php
namespace Openify\Bundle\ConfigurationBundle\Entity\Manager;

use Doctrine\ORM\EntityManager;
use Openify\Bundle\ConfigurationBundle\Entity\Manager\BaseManager;
use Openify\Bundle\ConfigurationBundle\Entity\Configuration;

class ConfigurationManager extends BaseManager
{
    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function getRepository()
    {
        return $this->em->getRepository ( 'OpenifyConfigurationBundle:Configuration' );
    }

}
