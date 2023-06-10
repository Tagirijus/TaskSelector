<?php

namespace Kanboard\Plugin\TaskSelector;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;
// use Kanboard\Plugin\PluginNameExampleStudlyCaps\AgeHelper;  // Helper Class and Filename should be exact
// use Kanboard\Helper;  // Add core Helper for using forms etc. inside external templates

class Plugin extends Base
{
    public function initialize()
    {
        // Helper
        $this->helper->register('taskSelectorHelper', '\Kanboard\Plugin\TaskSelector\Helper\TaskSelectorHelper');

        // CSS - Asset Hook
        $this->hook->on('template:layout:css', array('template' => 'plugins/TaskSelector/Assets/css/task-selector.min.css'));

        // Template Override
        $this->template->setTemplateOverride('header', 'TaskSelector:header');
    }

    public function onStartup()
    {
        Translator::load($this->languageModel->getCurrentLanguage(), __DIR__.'/Locale');
    }

    public function getPluginName()
    {
        return 'TaskSelector';
    }

    public function getPluginDescription()
    {
        return t('This plugin adds a task selector next to the board selector.');
    }

    public function getPluginAuthor()
    {
        return 'Tagirijus';
    }

    public function getPluginVersion()
    {
        return '1.0.1';
    }

    public function getCompatibleVersion()
    {
        // Examples:
        // >=1.0.37
        // <1.0.37
        // <=1.0.37
        return '>=1.2.30';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/Tagirijus/TaskSelector';
    }
}
