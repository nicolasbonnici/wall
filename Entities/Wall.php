<?php

namespace bundles\sample\Entities;

/**
 * Foo sample bundle Entity
 *
 * @author Nicolas Bonnici <nicolasbonnici@gmail.com>
 */
class Wall extends \Library\Core\Entity {

    const ENTITY = 'Wall';
    const TABLE_NAME = 'wall';
    const PRIMARY_KEY = 'idwall';

    /**
     * Object caching duration in seconds
     * @var integer
     */
    protected $iCacheDuration = 50;

    protected $bIsSearchable = true;

    protected $aLinkedEntities = array();
}

