<?php

namespace CustomAdminBundle;

use Pimcore\Extension\Bundle\AbstractPimcoreBundle;

class CustomAdminBundle extends AbstractPimcoreBundle
{
    public function getJsPaths(): array
    {
        return [
            '/bundles/customadmin/js/custom_button.js'
        ];
    }
}
