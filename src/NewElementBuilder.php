<?php

namespace Sokil\Vast;

use Sokil\Vast\Creative\InLine\NewLinear as InLineAdNewLinearCreative;

class NewElementBuilder extends ElementBuilder
{
    /**
     * <Ad><InLine><Creatives><Creative> with <NewLinear> inside
     *
     * @param \DOMElement $creativeDomElement
     *
     * @return InLineAdNewLinearCreative
     */
    public function createInLineAdNewLinearCreative(\DOMElement $creativeDomElement): InLineAdNewLinearCreative
    {
        return new InLineAdNewLinearCreative($creativeDomElement, $this);
    }
}
