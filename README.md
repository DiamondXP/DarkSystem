<img src="https://raw.githubusercontent.com/DarkSystem-PE/DarkSystem/master/resources/banner.png" alt="DarkSystem Banner" title="Aimeos" align="center" height="105">


**DarkSystem is a server software for Minecraft: PE/BE with many features**

[![License](https://img.shields.io/github/license/DarkSystem-PE/DarkSystem.svg)](https://github.com/DarkSystem-PE/DarkSystem/blob/master/LICENSE)
[![GitHub contributors](https://img.shields.io/github/contributors/DarkSystem-PE/DarkSystem.svg)](https://github.com/DarkSystem-PE/DarkSystem/graphs/contributors)
[![Average time to resolve an issue](http://isitmaintained.com/badge/resolution/DarkSystem-PE/DarkSystem.svg)](http://isitmaintained.com/project/DarkSystem-PE/DarkSystem "Average time to resolve an issue")
[![Percentage of issues still open](http://isitmaintained.com/badge/open/DarkSystem-PE/DarkSystem.svg)](http://isitmaintained.com/project/DarkSystem-PE/DarkSystem "Percentage of issues still open")

# English
# Features:
- [x] DarkSystem is **# 1** about speed & no-lag.
- [x] Based on **old** PocketMine-MP for best performance and stability.
- [x] Loads chunks region-to-region.
  * It uses less CPU resources & loads chunks fast.
- [x] Cached chunk loading
  * Loads chunks and levels with cache for speed.
- [x] MobAI Support
  * Almost all mobs can move & attack.
  * Support Attacking Movement.
- [x] Smooth Movement
  * Players don't glitch or clip through the floor (if they are not in 1.2) while moving.
  * Does not throw players back.
- [x] MCPE 1.2 Support
  * DarkSystem is compatible with MC: Bedrock Edition/Better together update (1.2).
- [x] More Biomes & Advanced Generator
  * DarkSystem supports too many biomes.
  * DarkSystem loads levels fast.
- [x] Advanced RakNet
- [x] Themes!
  * You can change theme in **server.properties**.
  * Available themes: **classic, dark, light, metal, energy, uranium**
- [x] Ender Biome Support
- [x] Advanced Fly Checker
  * Can be activated from config.
  * Checks if player is in the air better
  * **May cause lag when moving.**
- [x] No Bad Packets!
  * Players only can send a few packets before logging in.
  * Only LoginPacket, Resource and Behavior packs packets, and a few required packets can be sent.
  * Blocks AdventureSettingsPacket and SetPlayerGameTypePacket.
- [x] **InventoryAPI!**
  * You can create customizable virtual inventories!
  * *For developers* **InventoryAPI::createInventory(...)**
- [x] More commands!
  * /ping
    * Get quality of player's connection.
  * /xyz
    * Gets player's position.
  * /createinv
    * Opens virtual inventories.
  * /world
    * You can teleport to another world without a plugin, only with a simple command!
  * /addui
    * Allows to create fully customizable menus
    * *Usage:* /addui {player} {type: shop/alert/image/slider/dropdown/input/mix}
    * **Only works with 1.2+**
  * /operator
    * Instead of /op 
    * You easily can enable/disable this command from **pocketmine_advanced.yml**.
  * Other commands:
    * /clear
    * /tpall
    * /clearchat
    * /cave
    * /summon
    * /chunkinfo
- [x] Advanced 1.2 and WIN10 Inventories
- [x] More Mobs/Entities
- [x] Extended Plugin API (It is an api called as DarkAPI :D lol)
  * Support Compound & CompoundTag etc.
- [x] Compatible with newest plugins
  * API 3.x.x
- [x] Custom Query
  * When server starts, sets up a MySQL connection to specified host from config.
  * Can be disabled from **server.properties**.
- [x] MySQLManager
  * You can send data to website of your server about players' kills, deaths, money etc. quickly.
  * *For developers* **utils\MySQLManager**
- [x] Colored & Clean Console
  * Console is clean and does not send junk messages like:
    * plugin enabling,
    * XBOX offline mode warning,
    * etc.
- [x] AntiForceOP
  * Hackers cannot access to OP command, you are safe :)
- [x] Floating Text as Entity
  * On DarkSystem, floating text isn't a particle, it is an entity.
  * It blocks floating text hack or other.
  * Dissappearing floating texts is impossible!
- [x] Auto Lag Cleaner: How does it work?
  * It automatically removes items and arrows from ground without occuping CPU.
- [x] Weather
  * Supports:
    * snow,
    * rain,
    * thunder.
- [ ] **DarkRCON!**
  * An advanced rcon client for managing DarkSystem servers.
  * Fully protected with password.
  * 100% safe.
  * Works on Android, Windows and more...
- [x] MultiVersion support: **What is this?**
  * DarkSystem supports:
    * **1.0.x**
    * **1.1.x**
    * **1.2.x**
- [x] Always up-to-date.
  * We always add new blocks, items and entities to DarkSystem.
  * You can always find new things here when they out!
- [x] No junk tasks/threads on background. Anything cannot occupy the CPU resources and performance.
- [x] TextUtils
  * Idea from MiNET
  * Code taken from Turanic.
  * Allows to create more beautiful texts.
  * *For developers* Example: **TextUtils::center($message)** ---> makes the message in center.
- [x] Code is clean, fast, safe and coded in PHP.
- [x] Advanced Config **(pocketmine_advanced.yml)**
- Other features:
 * [ ] Piston (indev)
 * [x] Banner (1.2 only)
 * [x] Parrots (1.2 only)
 * [ ] Rideable Car (indev)
 * [ ] Rideable Horse (indev)
 * [ ] Behavior Support (indev)
 * [ ] Armor Stand (1.2 only) (indev) (works as tile, we will make it as entity) (progress 10%)
 * [x] Writable & Written Books (1.2 only)
 * [x] Jukebox & Music Discs (1.2 only)
 * [ ] Working Command Block (indev) (progress 80%) 

# TODO List:
- Checked item boxes mean we are working on them or they are in-dev, empty mean that will we work soon on them!
- [x] **Command Block (indev)**
- [ ] **Experience System (working)**
- [ ] **Map**
- [x] **Horse**
- [ ] **Fireworks (%60)**
- [x] **Armor Stand**
- [x] **Throwing Potions**
- [x] **Writable & Written Books**
- [x] **Fully Working CustomUI**
- [ ] **Riding Minecart and Boat**
- [x] **Fully Redstone System**
- [x] **Multi-core**
- [x] **Jukebox**
- [x] **Pistons**
- [x] **Fully Multi-Language**
- [ ] **Mob Spawner**
- [x] **Item Frame**
- [x] **Auto lag cleaner**

# Known Bugs:
- Respawn and Movement bug on 1.2
- DarkSystem's experience system does not work correctly.

# Known Bugs in 1.2:
- Moving is glitchy. (Seen on 32-bit server machines)
- AvailableCommandsPacket issues

# Notes:
- DarkSystem does not support PMAnvil map format, it only supports Anvil and McRegion.
- DarkSystem is not stable.
- /op command is renamed to /operator and you easily can enable/disable this command from **pocketmine_advanced.yml**.
- Mob spawners are not supported yet. Sorry for this, they will be added soon...

# Get DarkSystem:
- Download the latest build from [Jenkins](http://jenkins.haniokasai.com/job/DarkSystem-PMMP_12).
- PHP Binaries [here](https://github.com/LeverylTeam/PHP7-Binaries).
<!--* Installation instructions can be found in the [wiki](https://github.com/iTXTech/Genisys/wiki).-->
NOTE: **The master branch is the only officially supported.**
_All other branches are in testing and may be unstable. Do not use builds from other branches unless you are sure you understand the risks._

# Tools:
- [DevTools](https://github.com/pmmp/PocketMine-DevTools) - Plugin and server development tools plugin
- [Pocket Server](https://github.com/fengberd/MinecraftPEServer) - Run DarkSystem on Android devices
- [DarkSystem Android APP](http://bit.do/darksystem_apk) - DarkSystem Special Android APP for Android

# Resources
Your DarkSystem Server needs Visual Studio C++ Redistributable 2015 (For Windows).<br>
It can be downloaded [here](https://www.microsoft.com/en-us/download/details.aspx?id=48145)<br>

# Converting to .phar
- Download DevTools plugin.
- Start your server 
- Run `makeserver` command in the console.

It will drop a .phar file into DevTools data folder.

# Русский

Особенности:
 DarkSystem - № 1 о скорости и отсутствии лаг.
 На основе старого PocketMine-MP для обеспечения максимальной производительности и стабильности.
 Загружает куски региона в регион.
Он использует меньше ресурсов ЦП и быстро загружает куски.
 Загрузка кеш-кека
Загружает куски и уровни с кешем для скорости.
 Поддержка MobAI
Почти все мобы могут двигаться и атаковать.
Поддержка атакующего движения.
 Плавное движение
Игроки не срываются или не заклинивают пол (если они не в 1.2) во время движения.
Не отбрасывает игроков.
 Поддержка MCPE 1.2
DarkSystem совместим с MC: Bedrock Edition / Better вместе обновляет (1.2).
 Больше биомов и расширенный генератор
DarkSystem поддерживает слишком много биомов.
DarkSystem быстро загружает уровни.
 Расширенный RakNet
 Темы!
Вы можете изменить тему в server.properties.
Доступные темы: классический, темный, легкий, металл, энергия, уран
 Поддержка Ender Biome
 Расширенный Fly Checker
Может быть активирован из config.
Проверяет, находится ли игрок в воздухе лучше
Может вызвать отставание при движении.
 Нет плохих пакетов!
Игроки могут отправлять несколько пакетов перед входом в систему.
Пакеты пакетов «Пакет загрузок», «Ресурсы и поведение» и несколько требуемых пакетов могут быть отправлены.
Блокирует AdventureSettingsPacket и SetPlayerGameTypePacket.
 InventoryAPI!
Вы можете создавать настраиваемые виртуальные кадастры!
Для разработчиков InventoryAPI :: createInventory (...)
 Больше команд!
/пинг
Получите качество соединения игрока.
/ хуг
Получает позицию игрока.
/ createinv
Открывает виртуальные кадастры.
/Мир
Вы можете телепортироваться в другой мир без плагина, только с простой командой!
/ addui
Позволяет создавать полностью настраиваемые меню
Использование: / addui {player} {type: shop / alert / image / slider / dropdown / input / mix}
Работает только с 1.2+
/ оператор
Вместо / op
Вы легко можете включить / отключить эту команду из pocketmine_advanced.yml.
Другие команды:
/Чисто
/ tpall
/ ClearChat
/ пещера
/ Вызов
/ chunkinfo
 Продвинутые версии 1.2 и WIN10
 Больше Mobs / Entities
 Extended Plugin API (это api, называемый DarkAPI: D lol)
Поддержка Compound & CompoundTag и т. Д.
 Совместимость с новейшими плагинами
API 3.x.x
 Пользовательский запрос
Когда сервер запускается, настраивается соединение MySQL с указанным хостом из конфигурации.
Может быть отключен из server.properties.
 MySQLManager
Вы можете быстро отправить данные на сайт своего сервера об убийствах, смерти, деньгах и т. Д.
Для разработчиков utils \ MySQLManager
 Цветная и чистая консоль
Консоль чистая и не отправляет нежелательные сообщения, например:
плагин,
Предупреждение в режиме офлайн-режима XBOX,
и т.п.
 AntiForceOP
Хакеры не могут получить доступ к команде OP, вы в безопасности :)
 Плавающий текст как объект
В DarkSystem плавающий текст не является частицей, это сущность.
Он блокирует взломанный текст или другой.
Исчезновение плавающих текстов невозможно!
 Auto Lag Cleaner: Как это работает?
Он автоматически удаляет предметы и стрелки с земли, не занимая процессор.
 Погода
Поддержка:
снег,
дождь,
гром.
 DarkRCON!
Передовой клиент rcon для управления серверами DarkSystem.
Полностью защищен паролем.
100% безопасно.
Работает на Android, Windows и многое другое ...
 Поддержка MultiVersion: что это?
DarkSystem поддерживает:
1.0.x
1.1.x
1.2.x
 Всегда обновляется.
Мы всегда добавляем новые блоки, элементы и объекты в DarkSystem.
Вы всегда можете найти новые вещи здесь, когда они выходят!
 Нет ненужных задач / потоков на фоне. Все, что не может занимать ресурсы ЦП и производительность.
 Textutils
Идея от MiNET
Код, взятый из Тураника.
Позволяет создавать более красивые тексты.
Для разработчиков Пример: TextUtils :: center ($ message) ---> делает сообщение в центре.
 Код чист, быстр, безопасен и закодирован в PHP.
 Расширенная настройка (pocketmine_advanced.yml)
Другие особенности:
 Поршень (indev)
 Баннер (только 1.2)
 Попугаи (только 1.2)
 Подвижный автомобиль (indev)
 Подвижная лошадь (indev)
 Поддержка поведения (indev)
 Подставка для брони (только 1.2) (indev) (работает как плитка, мы сделаем ее как сущность) (прогресс 10%)
 Письменные и письменные книги (только 1.2)
 Музыкальные диски и музыкальные диски (только 1.2)
 Рабочий командный блок (indev) (прогресс 80%)
Список дел:
Ящики с проверенными предметами означают, что мы работаем над ними, или они находятся в-dev, и это означает, что мы скоро работаем над ними!
 Командный блок (indev)
 Система работы (работа)
 карта
 лошадь
 Фейерверк (% 60)
 Подставка для брони
 Бросающие зелья
 Записываемые и письменные книги
 Полностью рабочий пользовательский интерфейс
 Верховая езда Минкарт и Лодка
 Полностью система Redstone
 Многоядерные
 проигрыватель-автомат
 Поршни
 Полностью многоязычный
 Mob Spawner
 Рамка элементов
 Автоматическое отставание
Известные ошибки:
Ошибка Respawn and Movement 1.2
Система работы DarkSystem работает неправильно.
Известные ошибки в 1.2:
Перемещение - глючный. (Видно на 32-разрядных серверных машинах)
Доступные вызовыПакеты
Заметки:
DarkSystem не поддерживает формат карты PMAnvil, он поддерживает только Anvil и McRegion.
DarkSystem нестабильна.
/ op переименовывается в / operator, и вы легко можете включить / отключить эту команду из pocketmine_advanced.yml.
Mob-разработчики пока не поддерживаются. Извините за это, они скоро будут добавлены ...

# License:
```
This program is free software: you can redistribute it and/or modify
it under the terms of the GNU Lesser General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU Lesser General Public License for more details.

You should have received a copy of the GNU Lesser General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
```

# Third-party Libraries/Protocols Used:
* __[PHP Sockets](http://php.net/manual/en/book.sockets.php)__
* __[PHP mbstring](http://php.net/manual/en/book.mbstring.php)__
* __[PHP SQLite3](http://php.net/manual/en/book.sqlite3.php)__
* __[PHP BCMath](http://php.net/manual/en/book.bc.php)__
* __[PHP pthreads](http://pthreads.org/)__: Threading for PHP - Share Nothing, Do Everything.
* __[PHP YAML](https://code.google.com/p/php-yaml/)__: The Yaml PHP Extension provides a wrapper to the LibYAML library.
* __[LibYAML](http://pyyaml.org/wiki/LibYAML)__: A YAML 1.1 parser and emitter written in C.
* __[cURL](http://curl.haxx.se/)__: cURL is a command line tool for transferring data with URL syntax
* __[Zlib](http://www.zlib.net/)__: A Massively Spiffy Yet Delicately Unobtrusive Compression Library
* __[Source RCON Protocol](https://developer.valvesoftware.com/wiki/Source_RCON_Protocol)__
* __[UT3 Query Protocol](http://wiki.unrealadmin.org/UT3_query_protocol)__
* __[PHP OpenSSL](http://php.net/manual/en/book.openssl.php)__: Cryptography and SSL/TLS Toolkit

DarkSystem is not affiliated with Mojang. All brands and trademarks belong to their respectfull owners DarkSystem is not a Mojang-approved software.
