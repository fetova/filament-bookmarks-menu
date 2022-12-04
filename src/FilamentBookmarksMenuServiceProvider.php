<?php

namespace STAFEGROUPAB\FilamentBookmarksMenu;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use STAFEGROUPAB\FilamentBookmarksMenu\Commands\FilamentBookmarksMenuCommand;

class FilamentBookmarksMenuServiceProvider extends PackageServiceProvider
{

    public function configurePackage(Package $package): void
    {
        // Register the package here
        $package
            ->name('filament-bookmarks-menu')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_filament-bookmarks-menu_table')
            ->hasCommand(FilamentBookmarksMenuCommand::class);

    }
}
