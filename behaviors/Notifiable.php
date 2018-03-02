<?php namespace CptMeatball\NotifiableUser\Behaviors;

use Illuminate\Notifications\Notifiable as NotifiableTrait;

class Notifiable extends \October\Rain\Database\ModelBehavior
{
    use NotifiableTrait;

    public function __call($name, $params = null)
    {
        if (!method_exists($this, $name) || !is_callable($this, $name) {
            call_user_func_array([$this->model, $name], $params);
        }
    }
}
