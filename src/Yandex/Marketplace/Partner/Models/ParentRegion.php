<?php

namespace Yandex\Marketplace\Partner\Models;

use Yandex\Common\Model;

class ParentRegion extends Model
{
    protected $id;
    protected $name;
    protected $type;
    protected $parent;

    protected $mappingClasses = [
        'parent' => ParentRegion::class,
    ];

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return ParentRegion
     */
    public function getParent()
    {
        return $this->parent;
    }
}
