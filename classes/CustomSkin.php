<?php

namespace Zaviruha\Backend\Classes;

use Backend\Skins\Standard as BackendSkin;

/**
 * Modified backend skin information file.
 *
 * This is modified to include an additional path to override the default layouts.
 *
 */

class CustomSkin extends BackendSkin
{
    /**
     * {@inheritDoc}
     */
    public function getLayoutPaths()
    {
        return [
            themes_path('/backend/layouts'),
            $this->skinPath . '/layouts'
        ];
    }
}
