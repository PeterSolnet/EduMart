<?php

namespace Modules;

use Illuminate\Support\ServiceProvider;
use App\Modules;

class ModulesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $modules = [];//declare an empty array to store all module names
        $allmodules=Modules::all('name');//fetch modules from the database
        //loop through the modules from the database to get the module names
        foreach ($allmodules as $module)
        {
            array_push($modules, $module->name);
        }
        //loop through the list of module names to determine where to pick the
        //routes and views
        while (list(,$module) = each($modules)) {

            if(file_exists(__DIR__.'\\'.$module.'\\routes.php'))
            {
                include __DIR__.'\\'.$module.'\\routes.php';
            }

            if(is_dir(__DIR__.'\\'.$module.'\\Views'))
            {
                $this->loadViewsFrom(__DIR__.'\\'.$module.'\\Views', $module);
            }
        }
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
