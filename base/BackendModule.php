<?php
namespace smart\base;

use Yii;

/**
 * Backend CMS module
 * 
 * Every backend CMS modules supports:
 * - making menu for CMS backend with [[menu]] function
 * - prepare roles and permissions with [[security]] function
 */
class BackendModule extends BaseModule
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        static::security();
    }

    /**
     * Prepare roles and permissions
     * @return void
     */
    protected static function security()
    {
    }

    /**
     * Making module menu for CMS
     * @param array &$items CMS menu items
     * @return void
     */
    protected function menu(&$items)
    {
    }
}
