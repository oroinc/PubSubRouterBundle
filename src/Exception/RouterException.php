<?php

namespace Gos\Bundle\PubSubRouterBundle\Exception;

/**
 * deprecated to be removed in 3.0, exceptions should implement `Gos\Bundle\PubSubRouterBundle\Exception\PubSubRouterException` instead
 */
class RouterException extends \Exception implements PubSubRouterException
{
}
