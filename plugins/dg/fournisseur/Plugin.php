<?php namespace Dg\Fournisseur;

use Backend;
use System\Classes\PluginBase;

/**
 * fournisseur Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'fournisseur',
            'description' => 'No description provided yet...',
            'author'      => 'dg',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Dg\Fournisseur\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'dg.fournisseur.some_permission' => [
                'tab' => 'fournisseur',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'fournisseur' => [
                'label'       => 'fournisseur',
                'url'         => Backend::url('dg/fournisseur/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['dg.fournisseur.*'],
                'order'       => 500,
            ],
        ];
    }
}
