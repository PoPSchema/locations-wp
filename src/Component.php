<?php

declare(strict_types=1);

namespace PoP\LocationsWP;

use PoP\Root\Component\AbstractComponent;
use PoP\Root\Component\YAMLServicesTrait;

/**
 * Initialize component
 */
class Component extends AbstractComponent
{
    use YAMLServicesTrait;
    // const VERSION = '0.1.0';

    public static function getDependedComponentClasses(): array
    {
        return [
            \PoP\Locations\Component::class,
            \PoP\EngineWP\Component::class,
        ];
    }

    /**
     * Initialize services
     */
    protected static function doInitialize(): void
    {
        parent::doInitialize();
        self::initYAMLServices(dirname(__DIR__));
    }
}
