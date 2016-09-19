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
 * JSON encoded xAPI result fixtures.
 *
 * These fixtures are borrowed from the
 * {@link https://github.com/adlnet/xAPI_LRS_Test Experience API Learning Record Store Conformance Test} package.
 */
class ResultJsonFixtures extends JsonFixtures
{
    const DIRECTORY = 'Result';

    public static function getTypicalResult()
    {
        return self::load('typical');
    }

    public static function getScoreResult()
    {
        return self::load('score_result');
    }

    public static function getEmptyScoreResult()
    {
        return self::load('empty_score_result');
    }

    public static function getSuccessResult()
    {
        return self::load('success_result');
    }

    public static function getCompletionResult()
    {
        return self::load('completion_result');
    }

    public static function getResponseResult()
    {
        return self::load('response_result');
    }

    public static function getDurationResult()
    {
        return self::load('duration_result');
    }

    public static function getExtensionsResult()
    {
        return self::load('extensions');
    }

    public static function getEmptyExtensionsResult()
    {
        return self::load('empty_extensions');
    }

    public static function getScoreAndSuccessResult()
    {
        return self::load('score_and_success_result');
    }

    public static function getScoreAndCompletionResult()
    {
        return self::load('score_and_completion_result');
    }

    public static function getScoreAndResponseResult()
    {
        return self::load('score_and_response_result');
    }

    public static function getScoreAndDurationResult()
    {
        return self::load('score_and_duration_result');
    }

    public static function getAllPropertiesResult()
    {
        return self::load('all_properties');
    }
}
