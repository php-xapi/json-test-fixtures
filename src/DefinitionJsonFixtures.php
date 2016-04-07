<?php

/*
 * This file is part of the xAPI package.
 *
 * (c) Christian Flothmann <christian.flothmann@xabbuh.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace XApi\Fixtures\Json;

/**
 * JSON encoded xAPI activity definition fixtures.
 *
 * These fixtures are borrowed from the
 * {@link https://github.com/adlnet/xAPI_LRS_Test Experience API Learning Record Store Conformance Test} package.
 */
class DefinitionJsonFixtures extends JsonFixtures
{
    const DIRECTORY = 'Definition';

    public static function getEmptyDefinition()
    {
        return self::load('empty_definition');
    }

    public static function getTypicalDefinition()
    {
        return self::load('typical_definition');
    }

    public static function getNameDefinition()
    {
        return self::load('name_definition');
    }

    public static function getDescriptionDefinition()
    {
        return self::load('description_definition');
    }

    public static function getTypeDefinition()
    {
        return self::load('type_definition');
    }

    public static function getMoreInfoDefinition()
    {
        return self::load('more_info_definition');
    }

    public static function getAllPropertiesDefinition()
    {
        return self::load('all_properties_definition');
    }
}
