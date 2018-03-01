<?php namespace CptMeatball\NotifiableUser\Behaviors;

use Illuminate\Notifications\Notifiable as NotifiableTrait;

class Notifiable extends \October\Rain\Extension\ExtensionBase
{
    use NotifiableTrait;

    protected $parent;

    public function __construct($parent)
    {
        $this->parent = $parent;
    }
}