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
 * JSON encoded xAPI verb fixtures.
 *
 * These fixtures are borrowed from the
 * {@link https://github.com/adlnet/xAPI_LRS_Test Experience API Learning Record Store Conformance Test} package.
 */
class VerbJsonFixtures extends JsonFixtures
{
    const DIRECTORY = 'Verb';

    public static function getTypicalVerb()
    {
        return self::load('typical_verb');
    }

    public static function getVoidingVerb()
    {
        return self::load('voiding_verb');
    }

    public static function getIdVerb()
    {
        return self::load('id_verb');
    }

    public static function getIdAndDisplayVerb()
    {
        return self::load('id_and_display_verb');
    }
}
