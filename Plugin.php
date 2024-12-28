<?php

namespace Zaviruha\Backend;

use Backend;
use Config;
use Backend\Models\UserRole;
use System\Classes\PluginBase;

/**
 * CustomSkin Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     */
    public function pluginDetails(): array
    {
        return [
            'name'        => 'author.customskin::lang.plugin.name',
            'description' => 'author.customskin::lang.plugin.description',
            'author'      => 'Author',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     */
    public function register(): void
    {

    }

    /**
     * Boot method, called right before the request route.
     */
    public function boot(): void
    {
        //если установлен базовый backendSkin - меняем на свой
        if(Config::get('cms.backendSkin') == 'Backend\Skins\Standard')
            Config::set('cms.backendSkin', Classes\CustomSkin::class);
    }

    /**
     * Registers any frontend components implemented in this plugin.
     */
    public function registerComponents(): array
    {
        return []; // Remove this line to activate

        return [
            //\Oleg\Backend\Classes\MyComponent::class => 'myComponent',
        ];
    }

    /**
     * Registers any backend permissions used by this plugin.
     */
    public function registerPermissions(): array
    {
        return []; // Remove this line to activate

        return [
            'author.customskin.some_permission' => [
                'tab' => 'author.customskin::lang.plugin.name',
                'label' => 'author.customskin::lang.permissions.some_permission',
                'roles' => [UserRole::CODE_DEVELOPER, UserRole::CODE_PUBLISHER],
            ],
        ];
    }

    /**
     * Registers backend navigation items for this plugin.
     */
    public function registerNavigation(): array
    {
        return []; // Remove this line to activate

        return [
            'customskin' => [
                'label'       => 'author.customskin::lang.plugin.name',
                'url'         => Backend::url('author/customskin/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['author.customskin.*'],
                'order'       => 500,
            ],
        ];
    }
}
