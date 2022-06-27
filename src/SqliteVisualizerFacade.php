<?php

namespace Auncly\SqliteVisualizer;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Auncly\SqliteVisualizer\Skeleton\SkeletonClass
 */
class SqliteVisualizerFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'sqlite-visualizer';
    }
}
