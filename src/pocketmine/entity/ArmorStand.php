<?php

#______           _    _____           _                  
#|  _  \         | |  /  ___|         | |                 
#| | | |__ _ _ __| | _\ `--. _   _ ___| |_ ___ _ __ ___   
#| | | / _` | '__| |/ /`--. \ | | / __| __/ _ \ '_ ` _ \  
#| |/ / (_| | |  |   </\__/ / |_| \__ \ ||  __/ | | | | | 
#|___/ \__,_|_|  |_|\_\____/ \__, |___/\__\___|_| |_| |_| 
#                             __/ |                       
#                            |___/

namespace pocketmine\entity;

use pocketmine\level\Level;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\item\Item as ItemItem;
use pocketmine\nbt\tag\ListTag;
use pocketmine\network\protocol\AddEntityPacket;
use pocketmine\network\protocol\MobEquipmentPacket;
use pocketmine\network\protocol\MobArmorEquipmentPacket;
use pocketmine\Player;

class ArmorStand extends Entity{

    /** @var ItemItem */
    protected $handItem;
    protected $helmet;
    protected $chestplate;
    protected $leggings;
    protected $boots;

    const NETWORK_ID = self::ARMOR_STAND;

    public function __construct(Level $level, CompoundTag $nbt){
        parent::__construct($level, $nbt);

        $item = ItemItem::get(ItemItem::AIR)->nbtSerialize();
        if(!isset($nbt->HandItems)){
            $nbt->HandItems = new ListTag("", [
                $item,
                $item
            ]);
        }

        if(!isset($nbt->ArmorItems)){
            $nbt->ArmorItems = new ListTag("ArmorItems", [
                $item,
                $item,
                $item,
                $item
            ]);
		}

		$this->handItem = ItemItem::nbtDeserialize($nbt["HandItems"][0]);
		$this->helmet = ItemItem::nbtDeserialize($nbt["ArmorItems"][3]);
		$this->chestplate = ItemItem::nbtDeserialize($nbt["ArmorItems"][2]);
		$this->leggings = ItemItem::nbtDeserialize($nbt["ArmorItems"][1]);
		$this->boots = ItemItem::nbtDeserialize($nbt["ArmorItems"][0]);

        $this->setHealth(20);
        $this->setMaxHealth(20);
    }

    public function onUpdate($currentTick){
        if(parent::onUpdate($currentTick)){
            $v = $this->getSide(self::SIDE_DOWN);
            if($this->level->getBlock($v, false)->isTransparent()){
                $this->setMotion($v);
            }
            return true;
        }
        return false;
    }

    public function onInteract(Player $player, ItemItem $item){
        $change = null;
        if($item->getId() === ItemItem::AIR){
            $this->sendHandItem($player);
            $this->sendArmorItems($player);
            $player->getInventory()->sendContents($player);
        }
        if($item->isArmor()){
            if($item->isHelmet()){
                $change = $this->getHelmet();
                $this->setHelmet(clone $item);
            }elseif($item->isChestplate()){
                $change = $this->getChestplate();
                $this->setChestplate(clone $item);
            }elseif($item->isLeggings()){
                $change = $this->getLeggings();
                $this->setLeggings(clone $item);
            }elseif($item->isBoots()){
                $change = $this->getBoots();
                $this->setBoots(clone $item);
            }
        }else{
            if($item->getCount() > 1){
                $change = clone $item;
                $change->setCount($change->getCount() - 1);
                $player->getInventory()->setItemInHand($change);
                $player->getInventory()->addItem($this->getHandItem());
                $item->setCount(1);
                $this->setHandItem(clone $item);
                return false;
            }else{
                $change = $this->getHandItem();
                $this->setHandItem($item);
            }
        }
        $player->getInventory()->setItemInHand($change);
        return false;
    }

    public function kill(){
        $this->level->dropItem($this, ItemItem::get(ItemItem::ARMOR_STAND));
        $this->level->dropItem($this, $this->getHandItem());
        $this->level->dropItem($this, $this->getHelmet());
        $this->level->dropItem($this, $this->getChestplate());
        $this->level->dropItem($this, $this->getLeggings());
        $this->level->dropItem($this, $this->getBoots());
        parent::kill();
    }

    public function spawnTo(Player $player){
        $pk = new AddEntityPacket();
        $pk->type = ArmorStand::NETWORK_ID;
        $pk->eid = $this->getId();
        $pk->position = $this->getPosition();
        $pk->motion = $this->getMotion();
        $pk->yaw = $this->yaw;
        $pk->pitch = $this->pitch;
        $pk->metadata = $this->dataProperties;
        $player->dataPacket($pk);

        $this->sendArmorItems($player);
        $this->sendHandItem($player);
        parent::spawnTo($player);
    }

    public function sendHandItem(Player $player){
        $pk = new MobEquipmentPacket();
        $pk->eid = $this->getId();
        $pk->inventorySlot = 0;
        $pk->hotbarSlot = 0;
        $pk->item = $this->getHandItem();
        $player->dataPacket($pk);
    }

    public function sendArmorItems(Player $player){
        $pk = new MobArmorEquipmentPacket();
		$pk->eid = $this->getId();
		$pk->slots = [$this->getHelmet(), $this->getChestplate(), $this->getLeggings(), $this->getBoots()];
		$player->dataPacket($pk);
	}

	public function sendAll(){
        foreach($this->level->getChunkPlayers($this->chunk->getX(), $this->chunk->getZ()) as $player) {
            if($player->isOnline()){
                $this->sendHandItem($player);
                $this->sendArmorItems($player);
            }
        }
	}

	public function saveNBT(){
        parent::saveNBT();

        $this->namedtag->ArmorItems = new ListTag("ArmorItems", [
            $this->boots->nbtSerialize(),
            $this->leggings->nbtSerialize(),
            $this->chestplate->nbtSerialize(),
            $this->helmet->nbtSerialize()
        ]);

        $this->namedtag->HandItems = new ListTag("HandItems", [$this->handItem->nbtSerialize(), ItemItem::get(ItemItem::AIR)]);
    }

    public function getHandItem(){
        return $this->handItem;
    }

    public function setHandItem(ItemItem $item){
        $this->handItem = $item;
        $this->sendAll();
    }

    public function getHelmet(){
        return $this->helmet;
    }

    public function setHelmet(ItemItem $item){
        $this->helmet = $item;
        $this->sendAll();
    }

    public function getChestplate(){
        return $this->chestplate;
    }

    public function setChestplate(ItemItem $item){
        $this->chestplate = $item;
        $this->sendAll();
    }

    public function getLeggings(){
        return $this->leggings;
    }

    public function setLeggings(ItemItem $item){
        $this->leggings = $item;
        $this->sendAll();
    }

    public function getBoots(){
        return $this->boots;
    }

    public function setBoots(ItemItem $item){
        $this->boots = $item;
        $this->sendAll();
    }
    
}
