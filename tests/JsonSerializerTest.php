<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace Yiisoft\Serializer\Tests;

use Yiisoft\Serializer\JsonSerializer;
use Yiisoft\Serializer\SerializerInterface;

/**
 * @group serialize
 */
class JsonSerializerTest extends SerializerTest
{
    /**
     * {@inheritdoc}
     */
    protected function createSerializer(): SerializerInterface
    {
        return new JsonSerializer();
    }
}
