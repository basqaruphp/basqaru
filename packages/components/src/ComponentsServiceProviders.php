<?php

namespace Basqaru\Components;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ComponentsServiceProviders extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('basqaru-components')
            ->hasTranslations()
            ->hasViews();
    }
}
