<?php

namespace Sokil\Vast\Creative\InLine;

class NewLinear extends Linear
{

    /**
     * @param string $id
     *
     * @return NewLinear
     */
    public function setCreativeId($id)
    {
        $this->getDomElement()->getElementsByTagName('Creative')->item(0)->setAttribute('id', $id);

        return $this;
    }
}
