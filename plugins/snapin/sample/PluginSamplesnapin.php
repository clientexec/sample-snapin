<?php

require_once 'modules/admin/models/SnapinPlugin.php';

class PluginSamplesnapin extends SnapinPlugin
{
    public $listeners = [
        ["Invoice-Create", "invoiceCreateCallback"]
    ];

    public function invoiceCreateCallback($e)
    {

        if (is_array($e)) {
            $event = $e;
        } else {
            $event = $e->getParams();
        }
        CE_Lib::log(4, $event);
    }
}