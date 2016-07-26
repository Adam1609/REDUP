<?php

namespace REDUP

/*Player Event*/
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\Player;
/*Command Event*/
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\CommandReader;
use pocketine\command\CommandExecuter;
use pocketmine\command\ConsoleCommandSender;
/*Utils Event*/
use pocketmine\utils\TextFormat as TF;
/*Enchantment Event*/
use pocketmine\item\enchantment\Enchantment;
use pocketmine\item\enchantment\EnchantmentList;
/*Plugin Event*/
use pocketmine\plugin\PluginBase;

class Main extends PluginBase{
  public function onEnable(){
    $this->getLogger()->info("REDUP đã hoạt động!");
  }
  public function onDisable(){
    $this->getLogger()->info("REDUP đã dừng!");
  }
}

