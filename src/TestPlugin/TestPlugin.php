<?php

namespace TestPlugin;

use pocketcloud\plugin\Plugin;
use pocketcloud\utils\CloudLogger;

class TestPlugin extends Plugin {

    public function onEnable(): void {
        CloudLogger::get()->info("§4Test");
    }
}