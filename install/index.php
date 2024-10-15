<?php

use Bitrix\Main\Localization\Loc;

class chatId extends \CModule
{
    public $MODULE_ID = "chatId";
    public $MODULE_GROUP_RIGHTS = "Y";

//    private $errors = [];

    public function __construct()
    {
        $arModuleVersion = [];

        include(__DIR__ . '/version.php');

        $this->MODULE_VERSION = $arModuleVersion["VERSION"];
        $this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];

        $this->MODULE_NAME = 'ID чата';
        $this->MODULE_DESCRIPTION = 'Получение Id чата и диалога';
    }


    public function InstallDB($install_wizard = true)
    {
       RegisterModule('chatId');
        return true;
    }

    function UnInstallDB($arParams = array())
    {
        UnRegisterModule('chatId');
        return true;
    }

    public function InstallFiles()
    {
        return true;
    }

    public function UnInstallFiles()
    {
        return true;
    }

    public function DoInstall()
    {
        $this->InstallFiles();
        $this->InstallDB(false);

    }

    public function DoUninstall()
    {
        $this->UnInstallFiles();
        $this->UnInstallDB();
    }
}
