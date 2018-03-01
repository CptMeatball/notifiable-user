<?php namespace CptMeatball\NotifiableUser;

use Backend;
use RainLab\User\Models\User;
use System\Classes\PluginBase;

/**
 * NotifiableUser Plugin Information File
 */
class Plugin extends PluginBase
{
    public $require = ['RainLab.User'];

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Notifiable User',
            'description' => 'Add the Illuminate Notifiable trait to the User model',
            'author'      => 'CptMeatball',
            'icon'        => 'icon-user-plus'
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
        User::extend(function($model) {
            $model->implement[] = 'CptMeatball.NotifiableUser.Behaviors.Notifiable';
        });
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
            'CptMeatball\NotifiableUser\Components\MyComponent' => 'myComponent',
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
            'cptmeatball.notifiableuser.some_permission' => [
                'tab' => 'NotifiableUser',
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
            'notifiableuser' => [
                'label'       => 'NotifiableUser',
                'url'         => Backend::url('cptmeatball/notifiableuser/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['cptmeatball.notifiableuser.*'],
                'order'       => 500,
            ],
        ];
    }
}
