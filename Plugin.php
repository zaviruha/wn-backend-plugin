<?php

namespace Zaviruha\Backend;

//use Backend;
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
            'name'        => 'zaviruha.backend::lang.plugin.name',
            'description' => 'zaviruha.backend::lang.plugin.description',
            'author'      => 'Zaviruha',
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
        if (Config::get('cms.backendSkin') === 'Backend\Skins\Standard') {
            Config::set('cms.backendSkin', Classes\CustomSkin::class);
        }
    }

    /**
     * Registers any frontend components implemented in this plugin.
     */
    public function registerComponents(): array
    {
        return []; // Remove this line to activate

        /*return [
            //\Zaviruha\Backend\Classes\MyComponent::class => 'myComponent',
        ];*/
    }

    /**
     * Registers any backend permissions used by this plugin.
     */
    public function registerPermissions(): array
    {
        return []; // Remove this line to activate

        /*return [
            'zaviruha.backend.some_permission' => [
                'tab' => 'zaviruha.backend::lang.plugin.name',
                'label' => 'zaviruha.backend::lang.permissions.some_permission',
                'roles' => [UserRole::CODE_DEVELOPER, UserRole::CODE_PUBLISHER],
            ],
        ];*/
    }

    /**
     * Registers backend navigation items for this plugin.
     */
    public function registerNavigation(): array
    {
        return []; // Remove this line to activate

        /*return [
            'customskin' => [
                'label'       => 'zaviruha.backend::lang.plugin.name',
                'url'         => Backend::url('zaviruha/backend/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['zaviruha.backend.*'],
                'order'       => 500,
            ],
        ];*/
    }
}
