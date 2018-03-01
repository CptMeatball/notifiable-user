<?php namespace CptMeatball\NotifiableUser;

use RainLab\User\Models\User;
use System\Classes\PluginBase;

/**
 * NotifiableUser Plugin Information File
 */
class Plugin extends PluginBase
{
    public $require = ['Rainlab.User'];

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
}
