<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\NikonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class CommanderGroupAMode extends AbstractTag
{

    protected $Id = '11.2';

    protected $Name = 'CommanderGroupAMode';

    protected $FullName = 'NikonCustom::SettingsD80';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Commander Group A Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'TTL',
        ),
        16 => array(
            'Id' => 16,
            'Label' => 'Auto Aperture',
        ),
        32 => array(
            'Id' => 32,
            'Label' => 'Manual',
        ),
        48 => array(
            'Id' => 48,
            'Label' => 'Off',
        ),
    );

}
