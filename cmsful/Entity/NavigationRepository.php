<?php

/**
 * RayTech Content Management System
 * @author Kevin Roy <royk@myraytech.net>
 * @link <https://myraytech.net>
 * @copyright (c) 2017, RayTech Hosting
 * @license MIT
 */
namespace CMS\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * NavigationRepository
 *
 * @author Kevin Roy <royk@myraytech.net>
 */
class NavigationRepository extends EntityRepository
{
    public function findTopLine() {
        return $this->findBy(['parent'=> 0], ['weight' => 'ASC']);
    }
}
