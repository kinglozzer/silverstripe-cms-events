<?php


namespace SilverStripe\CMSEvents\Tests\Listener\CMSMain;


use SilverStripe\CMS\Controllers\CMSMain;

if (!class_exists(CMSMain::class)) {
    return;
}

class CMSMainFake extends CMSMain
{
    private static $allowed_actions = [
        'myaction',
    ];

    public function myaction()
    {
        return 'this is my action';
    }

    public function myFormAction($data, $form)
    {
        return 'submitted';
    }
}
