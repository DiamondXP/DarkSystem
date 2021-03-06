<?php

#______           _    _____           _                  
#|  _  \         | |  /  ___|         | |                 
#| | | |__ _ _ __| | _\ `--. _   _ ___| |_ ___ _ __ ___   
#| | | / _` | '__| |/ /`--. \ | | / __| __/ _ \ '_ ` _ \  
#| |/ / (_| | |  |   </\__/ / |_| \__ \ ||  __/ | | | | | 
#|___/ \__,_|_|  |_|\_\____/ \__, |___/\__\___|_| |_| |_| 
#                             __/ |                       
#                            |___/

namespace pocketmine\item;

class SplashPotion extends Item
{
    public function __construct($meta = 0, $count = 1)
    {
        parent::__construct(self::SPLASH_POTION, $meta, $count, $this->getNameByMeta($meta));
    }

    public function getMaxStackSize()
    {
        return 1;
    }

    public function getNameByMeta($meta)
    {
        return "Splash " . Potion::getNameByMeta($meta);
    }
}
