<?php

namespace AmotiveTech\UnifiedSearch\responseObjects;

class UsTagCount extends Base
{
    /**
     * @var string
     */
    public $tag;

    /**
     * @var int
     */
    public $detailsCount;


    protected function getFields()
    {
        return [
          'tag' => 'string',
          'detailsCount' => 'int',
        ];
    }
}