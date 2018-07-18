<?php namespace dg\Postuler;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
      return [
            'dg\Postuler\Components\PostulerForm' => 'postulerform',
        ];
    }

    public function registerSettings()
    {
    }
}
