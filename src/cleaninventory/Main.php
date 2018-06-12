<?php

namespace cleaninventory;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase{

    public function onEnable(){
    }

    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool{

        switch($cmd->getName()){

            case "clean":
                if($sender instanceof Player){
			if($sender->hasPermission("clearinventory.main.command")){
				$sender->getInventory()->clearAll();
				$sender->sendMessage("§6All of you inventory Was §cClean!");
			}
			   
                }
            break;

        }

        return true;

    }

}
		
