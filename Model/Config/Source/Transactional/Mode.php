<?php

namespace Dotdigitalgroup\Email\Model\Config\Source\Transactional;

class Mode
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
		return array(
            array('value' => 'smtp', 'label' => 'SMTP'),
            //array('value' => 'api', 'label' => 'API'),
		);
    }
}