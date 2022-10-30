<?php

function CardName($cardID)
{
	$arr = str_split($cardID, 3);
	if (count($arr) < 2) return "";
	$set = $arr[0];
	$num = $arr[1];

	$showPitch = false;

	if ($set == "ARC") {
		switch ($num) {
			case "000":
				return "Eye of Ophidia";
			case "001":
				return "Dash, Inventor Extraordinaire";
			case "002":
				return "Dash";
			case "003":
				return "Teklo Plasma Pistol";
			case "004":
				return "Teklo Foundry Heart";
			case "005":
				return "Achilles Accelerator";
			case "006":
				return "High Octane";
			case "007":
				return "Teklo Core";
			case "008":
				return "Maximum Velocity";
			case "009":
				return "Spark of Genius";
			case "010":
				return "Induction Chamber";
			case "011":
				return "Pedal to the Metal";
			case "012":
				return "Pedal to the Metal";
			case "013":
				return "Pedal to the Metal";
			case "014":
				return "Pour the Mold";
			case "015":
				return "Pour the Mold";
			case "016":
				return "Pour the Mold";
			case "017":
				return "Aether Sink";
			case "018":
				return "Cognition Nodes";
			case "019":
				return "Convection Amplifier";
			case "020":
				return "Over Loop";
			case "021":
				return "Over Loop";
			case "022":
				return "Over Loop";
			case "023":
				return "Throttle";
			case "024":
				return "Throttle";
			case "025":
				return "Throttle";
			case "026":
				return "Zero to Sixty";
			case "027":
				return "Zero to Sixty";
			case "028":
				return "Zero to Sixty";
			case "029":
				return "Zipper Hit";
			case "030":
				return "Zipper Hit";
			case "031":
				return "Zipper Hit";
			case "032":
				return "Locked and Loaded";
			case "033":
				return "Locked and Loaded";
			case "034":
				return "Locked and Loaded";
			case "035":
				return "Dissipation Shield";
			case "036":
				return "Hyper Driver";
			case "037":
				return "Optekal Monocle";
			case "038":
				return "Azalea, Ace in the Hole";
			case "039":
				return "Azalea";
			case "040":
				return "Death Dealer";
			case "041":
				return "Skullbone Crosswrap";
			case "042":
				return "Bull's Eye Bracers";
			case "043":
				return "Red in the Ledger";
			case "044":
				return "Three of a Kind";
			case "045":
				return "Endless Arrow";
			case "046":
				return "Nock the Deathwhistle";
			case "047":
				return "Rapid Fire";
			case "048":
				return "Take Cover";
			case "049":
				return "Take Cover";
			case "050":
				return "Take Cover";
			case "051":
				return "Silver the Tip";
			case "052":
				return "Silver the Tip";
			case "053":
				return "Silver the Tip";
			case "054":
				return "Take Aim";
			case "055":
				return "Take Aim";
			case "056":
				return "Take Aim";
			case "057":
				return "Head Shot";
			case "058":
				return "Head Shot";
			case "059":
				return "Head Shot";
			case "060":
				return "Hamstring Shot";
			case "061":
				return "Hamstring Shot";
			case "062":
				return "Hamstring Shot";
			case "063":
				return "Ridge Rider Shot";
			case "064":
				return "Ridge Rider Shot";
			case "065":
				return "Ridge Rider Shot";
			case "066":
				return "Salvage Shot";
			case "067":
				return "Salvage Shot";
			case "068":
				return "Salvage Shot";
			case "069":
				return "Searing Shot";
			case "070":
				return "Searing Shot";
			case "071":
				return "Searing Shot";
			case "072":
				return "Sic 'Em Shot";
			case "073":
				return "Sic 'Em Shot";
			case "074":
				return "Sic 'Em Shot";
			case "075":
				return "Viserai, Rune Blood";
			case "076":
				return "Viserai";
			case "077":
				return "Nebula Blade";
			case "078":
				return "Grasp of the Arknight";
			case "079":
				return "Crown of Dichotomy";
			case "080":
				return "Arknight Ascendancy";
			case "081":
				return "Mordred Tide";
			case "082":
				return "Ninth Blade of the Blood Oath";
			case "083":
				return "Become the Arknight";
			case "084":
				return "Tome of the Arknight";
			case "085":
				return "Spellblade Assault";
			case "086":
				return "Spellblade Assault";
			case "087":
				return "Spellblade Assault";
			case "088":
				return "Reduce to Runechant";
			case "089":
				return "Reduce to Runechant";
			case "090":
				return "Reduce to Runechant";
			case "091":
				return "Oath of the Arknight";
			case "092":
				return "Oath of the Arknight";
			case "093":
				return "Oath of the Arknight";
			case "094":
				return "Amplify the Arknight";
			case "095":
				return "Amplify the Arknight";
			case "096":
				return "Amplify the Arknight";
			case "097":
				return "Drawn to the Dark Dimension";
			case "098":
				return "Drawn to the Dark Dimension";
			case "099":
				return "Drawn to the Dark Dimension";
			case "100":
				return "Rune Flash";
			case "101":
				return "Rune Flash";
			case "102":
				return "Rune Flash";
			case "103":
				return "Spellblade Strike";
			case "104":
				return "Spellblade Strike";
			case "105":
				return "Spellblade Strike";
			case "106":
				return "Bloodspill Invocation";
			case "107":
				return "Bloodspill Invocation";
			case "108":
				return "Bloodspill Invocation";
			case "109":
				return "Read the Runes";
			case "110":
				return "Read the Runes";
			case "111":
				return "Read the Runes";
			case "112":
				return "Runechant";
			case "113":
				return "Kano, Dracai of Aether";
			case "114":
				return "Kano";
			case "115":
				return "Crucible of Aetherweave";
			case "116":
				return "Storm Striders";
			case "117":
				return "Robe of Rapture";
			case "118":
				return "Blazing Aether";
			case "119":
				return "Sonic Boom";
			case "120":
				return "Forked Lightning";
			case "121":
				return "Lesson in Lava";
			case "122":
				return "Tome of Aetherwind";
			case "123":
				return "Absorb in Aether";
			case "124":
				return "Absorb in Aether";
			case "125":
				return "Absorb in Aether";
			case "126":
				return "Aether Spindle";
			case "127":
				return "Aether Spindle";
			case "128":
				return "Aether Spindle";
			case "129":
				return "Stir the Aetherwinds";
			case "130":
				return "Stir the Aetherwinds";
			case "131":
				return "Stir the Aetherwinds";
			case "132":
				return "Aether Flare";
			case "133":
				return "Aether Flare";
			case "134":
				return "Aether Flare";
			case "135":
				return "Index";
			case "136":
				return "Index";
			case "137":
				return "Index";
			case "138":
				return "Reverberate";
			case "139":
				return "Reverberate";
			case "140":
				return "Reverberate";
			case "141":
				return "Scalding Rain";
			case "142":
				return "Scalding Rain";
			case "143":
				return "Scalding Rain";
			case "144":
				return "Zap";
			case "145":
				return "Zap";
			case "146":
				return "Zap";
			case "147":
				return "Voltic Bolt";
			case "148":
				return "Voltic Bolt";
			case "149":
				return "Voltic Bolt";
			case "150":
				return "Arcanite Skullcap";
			case "151":
				return "Talismanic Lens";
			case "152":
				return "Vest of the First Fist";
			case "153":
				return "Bracers of Belief";
			case "154":
				return "Mage Master Boots";
			case "155":
				return "Nullrune Hood";
			case "156":
				return "Nullrune Robe";
			case "157":
				return "Nullrune Gloves";
			case "158":
				return "Nullrune Boots";
			case "159":
				return "Command and Conquer";
			case "160":
				return "Art of War";
			case "161":
				return "Pursuit of Knowledge";
			case "162":
				return "Chains of Eminence";
			case "163":
				return "Rusted Relic";
			case "164":
				return "Life for a Life";
			case "165":
				return "Life for a Life";
			case "166":
				return "Life for a Life";
			case "167":
				return "Enchanting Melody";
			case "168":
				return "Enchanting Melody";
			case "169":
				return "Enchanting Melody";
			case "170":
				return "Plunder Run";
			case "171":
				return "Plunder Run";
			case "172":
				return "Plunder Run";
			case "173":
				return "Eirina's Prayer";
			case "174":
				return "Eirina's Prayer";
			case "175":
				return "Eirina's Prayer";
			case "176":
				return "Back Alley Breakline";
			case "177":
				return "Back Alley Breakline";
			case "178":
				return "Back Alley Breakline";
			case "179":
				return "Cadaverous Contraband";
			case "180":
				return "Cadaverous Contraband";
			case "181":
				return "Cadaverous Contraband";
			case "182":
				return "Fervent Forerunner";
			case "183":
				return "Fervent Forerunner";
			case "184":
				return "Fervent Forerunner";
			case "185":
				return "Moon Wish";
			case "186":
				return "Moon Wish";
			case "187":
				return "Moon Wish";
			case "188":
				return "Push the Point";
			case "189":
				return "Push the Point";
			case "190":
				return "Push the Point";
			case "191":
				return "Ravenous Rabble";
			case "192":
				return "Ravenous Rabble";
			case "193":
				return "Ravenous Rabble";
			case "194":
				return "Rifting";
			case "195":
				return "Rifting";
			case "196":
				return "Rifting";
			case "197":
				return "Vigor Rush";
			case "198":
				return "Vigor Rush";
			case "199":
				return "Vigor Rush";
			case "200":
				return "Fate Foreseen";
			case "201":
				return "Fate Foreseen";
			case "202":
				return "Fate Foreseen";
			case "203":
				return "Come to Fight";
			case "204":
				return "Come to Fight";
			case "205":
				return "Come to Fight";
			case "206":
				return "Force Sight";
			case "207":
				return "Force Sight";
			case "208":
				return "Force Sight";
			case "209":
				return "Lead the Charge";
			case "210":
				return "Lead the Charge";
			case "211":
				return "Lead the Charge";
			case "212":
				return "Sun Kiss";
			case "213":
				return "Sun Kiss";
			case "214":
				return "Sun Kiss";
			case "215":
				return "Whisper of the Oracle";
			case "216":
				return "Whisper of the Oracle";
			case "217":
				return "Whisper of the Oracle";
			case "218":
				return "Cracked Bauble";
		}
	}
	if ($set == "CRU") {
		switch ($num) {

			case "000":
				return "Arknight Shard";
			case "001":
				return "Rhinar, Reckless Rampage";
			case "002":
				return "Kayo, Berserker Runt";
			case "003":
				return "Romping Club";
			case "004":
				return "Mandible Claw";
			case "005":
				return "Mandible Claw";
			case "006":
				return "Skullhorn";
			case "007":
				return "Beast Within";
			case "008":
				return "Massacre";
			case "009":
				return "Argh... Smash!";
			case "010":
				return "Barraging Big Horn";
			case "011":
				return "Barraging Big Horn";
			case "012":
				return "Barraging Big Horn";
			case "013":
				return "Predatory Assault";
			case "014":
				return "Predatory Assault";
			case "015":
				return "Predatory Assault";
			case "016":
				return "Riled Up";
			case "017":
				return "Riled Up";
			case "018":
				return "Riled Up";
			case "019":
				return "Swing Fist, Think Later";
			case "020":
				return "Swing Fist, Think Later";
			case "021":
				return "Swing Fist, Think Later";
			case "022":
				return "Bravo, Showstopper";
			case "023":
				return "Anothos";
			case "024":
				return "Sledge of Anvilheim";
			case "025":
				return "Crater Fist";
			case "026":
				return "Mangle";
			case "027":
				return "Righteous Cleansing";
			case "028":
				return "Stamp Authority";
			case "029":
				return "Towering Titan";
			case "030":
				return "Towering Titan";
			case "031":
				return "Towering Titan";
			case "032":
				return "Crush the Weak";
			case "033":
				return "Crush the Weak";
			case "034":
				return "Crush the Weak";
			case "035":
				return "Chokeslam";
			case "036":
				return "Chokeslam";
			case "037":
				return "Chokeslam";
			case "038":
				return "Emerging Dominance";
			case "039":
				return "Emerging Dominance";
			case "040":
				return "Emerging Dominance";
			case "041":
				return "Blessing of Serenity";
			case "042":
				return "Blessing of Serenity";
			case "043":
				return "Blessing of Serenity";
			case "044":
				return "Seismic Surge";
			case "045":
				return "Katsu, the Wanderer";
			case "046":
				return "Ira, Crimson Haze";
			case "047":
				return "Benji, the Piercing Wind";
			case "048":
				return "Harmonized Kodachi";
			case "049":
				return "Harmonized Kodachi";
			case "050":
				return "Edge of Autumn";
			case "051":
				return "Zephyr Needle";
			case "052":
				return "Zephyr Needle";
			case "053":
				return "Breeze Rider Boots";
			case "054":
				return "Find Center";
			case "055":
				return "Flood of Force";
			case "056":
				return "Heron's Flight";
			case "057":
				return "Crane Dance";
			case "058":
				return "Crane Dance";
			case "059":
				return "Crane Dance";
			case "060":
				return "Rushing River";
			case "061":
				return "Rushing River";
			case "062":
				return "Rushing River";
			case "063":
				return "Flying Kick";
			case "064":
				return "Flying Kick";
			case "065":
				return "Flying Kick";
			case "066":
				return "Soulbead Strike";
			case "067":
				return "Soulbead Strike";
			case "068":
				return "Soulbead Strike";
			case "069":
				return "Torrent of Tempo";
			case "070":
				return "Torrent of Tempo";
			case "071":
				return "Torrent of Tempo";
			case "072":
				return "Bittering Thorns";
			case "073":
				return "Salt the Wound";
			case "074":
				return "Whirling Mist Blossom";
			case "075":
				return "Zen State";
			case "076":
				return "Dorinthea Ironsong";
			case "077":
				return "Kassai, Cintari Sellsword";
			case "078":
				return "Dawnblade";
			case "079":
				return "Cintari Saber";
			case "080":
				return "Cintari Saber";
			case "081":
				return "Courage of Bladehold";
			case "082":
				return "Twinning Blade";
			case "083":
				return "Unified Decree";
			case "084":
				return "Spoils of War";
			case "085":
				return "Dauntless";
			case "086":
				return "Dauntless";
			case "087":
				return "Dauntless";
			case "088":
				return "Out for Blood";
			case "089":
				return "Out for Blood";
			case "090":
				return "Out for Blood";
			case "091":
				return "Hit and Run";
			case "092":
				return "Hit and Run";
			case "093":
				return "Hit and Run";
			case "094":
				return "Push Forward";
			case "095":
				return "Push Forward";
			case "096":
				return "Push Forward";
			case "097":
				return "Shiyana, Diamond Gemini";
			case "098":
				return "Dash, Inventor Extraordinaire";
			case "099":
				return "Data Doll MKII";
			case "100":
				return "Teklo Plasma Pistol";
			case "101":
				return "Plasma Barrel Shot";
			case "102":
				return "Viziertronic Model ii";
			case "103":
				return "Meganetic Shockwave";
			case "104":
				return "Absorption Dome";
			case "105":
				return "Plasma Purifier";
			case "106":
				return "High Speed Impact";
			case "107":
				return "High Speed Impact";
			case "108":
				return "High Speed Impact";
			case "109":
				return "Combustible Courier";
			case "110":
				return "Combustible Courier";
			case "111":
				return "Combustible Courier";
			case "112":
				return "Overblast";
			case "113":
				return "Overblast";
			case "114":
				return "Overblast";
			case "115":
				return "Teklovossen's Workshop";
			case "116":
				return "Teklovossen's Workshop";
			case "117":
				return "Teklovossen's Workshop";
			case "118":
				return "Kavdaen, Trader of Skies";
			case "119":
				return "Azalea, Ace in the Hole";
			case "120":
				return "Death Dealer";
			case "121":
				return "Red Liner";
			case "122":
				return "Perch Grapplers";
			case "123":
				return "Remorseless";
			case "124":
				return "Poison the Tips";
			case "125":
				return "Feign Death";
			case "126":
				return "Tripwire Trap";
			case "127":
				return "Pitfall Trap";
			case "128":
				return "Rockslide Trap";
			case "129":
				return "Pathing Helix";
			case "130":
				return "Pathing Helix";
			case "131":
				return "Pathing Helix";
			case "132":
				return "Sleep Dart";
			case "133":
				return "Sleep Dart";
			case "134":
				return "Sleep Dart";
			case "135":
				return "Increase the Tension";
			case "136":
				return "Increase the Tension";
			case "137":
				return "Increase the Tension";
			case "138":
				return "Viserai, Rune Blood";
			case "139":
				return "Nebula Blade";
			case "140":
				return "Reaping Blade";
			case "141":
				return "Bloodsheath Skeleta";
			case "142":
				return "Dread Triptych";
			case "143":
				return "Rattle Bones";
			case "144":
				return "Runeblood Barrier";
			case "145":
				return "Mauvrion Skies";
			case "146":
				return "Mauvrion Skies";
			case "147":
				return "Mauvrion Skies";
			case "148":
				return "Consuming Volition";
			case "149":
				return "Consuming Volition";
			case "150":
				return "Consuming Volition";
			case "151":
				return "Meat and Greet";
			case "152":
				return "Meat and Greet";
			case "153":
				return "Meat and Greet";
			case "154":
				return "Sutcliffe's Research Notes";
			case "155":
				return "Sutcliffe's Research Notes";
			case "156":
				return "Sutcliffe's Research Notes";
			case "157":
				return "Runechant";
			case "158":
				return "Kano, Dracai of Aether";
			case "159":
				return "Crucible of Aetherweave";
			case "160":
				return "Aether Conduit";
			case "161":
				return "Metacarpus Node";
			case "162":
				return "Chain Lightning";
			case "163":
				return "Gaze the Ages";
			case "164":
				return "Aetherize";
			case "165":
				return "Cindering Foresight";
			case "166":
				return "Cindering Foresight";
			case "167":
				return "Cindering Foresight";
			case "168":
				return "Foreboding Bolt";
			case "169":
				return "Foreboding Bolt";
			case "170":
				return "Foreboding Bolt";
			case "171":
				return "Rousing Aether";
			case "172":
				return "Rousing Aether";
			case "173":
				return "Rousing Aether";
			case "174":
				return "Snapback";
			case "175":
				return "Snapback";
			case "176":
				return "Snapback";
			case "177":
				return "Talishar, the Lost Prince";
			case "178":
				return "Fyendal's Spring Tunic";
			case "179":
				return "Gambler's Gloves";
			case "180":
				return "Coax a Commotion";
			case "181":
				return "Gorganian Tome";
			case "182":
				return "Snag";
			case "183":
				return "Promise of Plenty";
			case "184":
				return "Promise of Plenty";
			case "185":
				return "Promise of Plenty";
			case "186":
				return "Lunging Press";
			case "187":
				return "Springboard Somersault";
			case "188":
				return "Cash In";
			case "189":
				return "Reinforce the Line";
			case "190":
				return "Reinforce the Line";
			case "191":
				return "Reinforce the Line";
			case "192":
				return "Brutal Assault";
			case "193":
				return "Brutal Assault";
			case "194":
				return "Brutal Assault";
			case "195":
				return "Cracked Bauble";
			case "196":
				return "Quicken";
			case "197":
				return "Copper";
		}
	}
	if ($set == "ELE") {
		switch ($num) {

			case "000":
				return "Korshem, Crossroad of Elements";
			case "001":
				return "Oldhim, Grandfather of Eternity";
			case "002":
				return "Oldhim";
			case "003":
				return "Winter's Wail";
			case "004":
				return "Endless Winter";
			case "005":
				return "Oaken Old";
			case "006":
				return "Awakening";
			case "007":
				return "Biting Gale";
			case "008":
				return "Biting Gale";
			case "009":
				return "Biting Gale";
			case "010":
				return "Turn Timber";
			case "011":
				return "Turn Timber";
			case "012":
				return "Turn Timber";
			case "013":
				return "Entangle";
			case "014":
				return "Entangle";
			case "015":
				return "Entangle";
			case "016":
				return "Glacial Footsteps";
			case "017":
				return "Glacial Footsteps";
			case "018":
				return "Glacial Footsteps";
			case "019":
				return "Mulch";
			case "020":
				return "Mulch";
			case "021":
				return "Mulch";
			case "022":
				return "Snow Under";
			case "023":
				return "Snow Under";
			case "024":
				return "Snow Under";
			case "025":
				return "Emerging Avalanche";
			case "026":
				return "Emerging Avalanche";
			case "027":
				return "Emerging Avalanche";
			case "028":
				return "Strength of Sequoia";
			case "029":
				return "Strength of Sequoia";
			case "030":
				return "Strength of Sequoia";
			case "031":
				return "Lexi, Livewire";
			case "032":
				return "Lexi";
			case "033":
				return "Shiver";
			case "034":
				return "Voltaire, Strike Twice";
			case "035":
				return "Frost Lock";
			case "036":
				return "Light it Up";
			case "037":
				return "lce Storm";
			case "038":
				return "Cold Wave";
			case "039":
				return "Cold Wave";
			case "040":
				return "Cold Wave";
			case "041":
				return "Snap Shot";
			case "042":
				return "Snap Shot";
			case "043":
				return "Snap Shot";
			case "044":
				return "Blizzard Bolt";
			case "045":
				return "Blizzard Bolt";
			case "046":
				return "Blizzard Bolt";
			case "047":
				return "Buzz Bolt";
			case "048":
				return "Buzz Bolt";
			case "049":
				return "Buzz Bolt";
			case "050":
				return "Chilling Icevein";
			case "051":
				return "Chilling Icevein";
			case "052":
				return "Chilling Icevein";
			case "053":
				return "Dazzling Crescendo";
			case "054":
				return "Dazzling Crescendo";
			case "055":
				return "Dazzling Crescendo";
			case "056":
				return "Flake Out";
			case "057":
				return "Flake Out";
			case "058":
				return "Flake Out";
			case "059":
				return "Frazzle";
			case "060":
				return "Frazzle";
			case "061":
				return "Frazzle";
			case "062":
				return "Briar, Warden of Thorns";
			case "063":
				return "Briar";
			case "064":
				return "Blossoming Spellblade";
			case "065":
				return "Flicker Wisp";
			case "066":
				return "Force of Nature";
			case "067":
				return "Explosive Growth";
			case "068":
				return "Explosive Growth";
			case "069":
				return "Explosive Growth";
			case "070":
				return "Rites of Lightning";
			case "071":
				return "Rites of Lightning";
			case "072":
				return "Rites of Lightning";
			case "073":
				return "Arcanic Shockwave";
			case "074":
				return "Arcanic Shockwave";
			case "075":
				return "Arcanic Shockwave";
			case "076":
				return "Vela Flash";
			case "077":
				return "Vela Flash";
			case "078":
				return "Vela Flash";
			case "079":
				return "Rites of Replenishment";
			case "080":
				return "Rites of Replenishment";
			case "081":
				return "Rites of Replenishment";
			case "082":
				return "Stir the Wildwood";
			case "083":
				return "Stir the Wildwood";
			case "084":
				return "Stir the Wildwood";
			case "085":
				return "Bramble Spark";
			case "086":
				return "Bramble Spark";
			case "087":
				return "Bramble Spark";
			case "088":
				return "Inspire Lightning";
			case "089":
				return "Inspire Lightning";
			case "090":
				return "Inspire Lightning";
			case "091":
				return "Fulminate";
			case "092":
				return "Flashfreeze";
			case "093":
				return "Exposed to the Elements";
			case "094":
				return "Entwine Earth";
			case "095":
				return "Entwine Earth";
			case "096":
				return "Entwine Earth";
			case "097":
				return "Entwine lce";
			case "098":
				return "Entwine lce";
			case "099":
				return "Entwine lce";
			case "100":
				return "Entwine Lightning";
			case "101":
				return "Entwine Lightning";
			case "102":
				return "Entwine Lightning";
			case "103":
				return "Invigorate";
			case "104":
				return "Invigorate";
			case "105":
				return "Invigorate";
			case "106":
				return "Rejuvenate";
			case "107":
				return "Rejuvenate";
			case "108":
				return "Rejuvenate";
			case "109":
				return "Embodiment of Earth";
			case "110":
				return "Embodiment of Lightning";
			case "111":
				return "Frostbite";
			case "112":
				return "Pulse of Volthaven";
			case "113":
				return "Pulse of Candlehold";
			case "114":
				return "Pulse of Isenloft";
			case "115":
				return "Crown of Seeds";
			case "116":
				return "Plume of Evergrowth";
			case "117":
				return "Channel Mount Heroic";
			case "118":
				return "Tome of Harvests";
			case "119":
				return "Evergreen";
			case "120":
				return "Evergreen";
			case "121":
				return "Evergreen";
			case "122":
				return "Weave Earth";
			case "123":
				return "Weave Earth";
			case "124":
				return "Weave Earth";
			case "125":
				return "Summerwood Shelter";
			case "126":
				return "Summerwood Shelter";
			case "127":
				return "Summerwood Shelter";
			case "128":
				return "Autumn's Touch";
			case "129":
				return "Autumn's Touch";
			case "130":
				return "Autumn's Touch";
			case "131":
				return "Break Ground";
			case "132":
				return "Break Ground";
			case "133":
				return "Break Ground";
			case "134":
				return "Burgeoning";
			case "135":
				return "Burgeoning";
			case "136":
				return "Burgeoning";
			case "137":
				return "Earthlore Surge";
			case "138":
				return "Earthlore Surge";
			case "139":
				return "Earthlore Surge";
			case "140":
				return "Sow Tomorrow";
			case "141":
				return "Sow Tomorrow";
			case "142":
				return "Sow Tomorrow";
			case "143":
				return "Amulet of Earth";
			case "144":
				return "Heart of Ice";
			case "145":
				return "Coat of Frost";
			case "146":
				return "Channel Lake Frigid";
			case "147":
				return "Blizzard";
			case "148":
				return "Frost Fang";
			case "149":
				return "Frost Fang";
			case "150":
				return "Frost Fang";
			case "151":
				return "Ice Quake";
			case "152":
				return "Ice Quake";
			case "153":
				return "Ice Quake";
			case "154":
				return "Weave Ice";
			case "155":
				return "Weave Ice";
			case "156":
				return "Weave Ice";
			case "157":
				return "Icy Encounter";
			case "158":
				return "Icy Encounter";
			case "159":
				return "Icy Encounter";
			case "160":
				return "Winter's Grasp";
			case "161":
				return "Winter's Grasp";
			case "162":
				return "Winter's Grasp";
			case "163":
				return "Chill to the Bone";
			case "164":
				return "Chill to the Bone";
			case "165":
				return "Chill to the Bone";
			case "166":
				return "Polar Blast";
			case "167":
				return "Polar Blast";
			case "168":
				return "Polar Blast";
			case "169":
				return "Winter's Bite";
			case "170":
				return "Winter's Bite";
			case "171":
				return "Winter's Bite";
			case "172":
				return "Amulet of Ice";
			case "173":
				return "Shock Charmers";
			case "174":
				return "Mark of Lightning";
			case "175":
				return "Channel Thunder Steppe";
			case "176":
				return "Blink";
			case "177":
				return "Flash";
			case "178":
				return "Flash";
			case "179":
				return "Flash";
			case "180":
				return "Weave Lightning";
			case "181":
				return "Weave Lightning";
			case "182":
				return "Weave Lightning";
			case "183":
				return "Lightning Press";
			case "184":
				return "Lightning Press";
			case "185":
				return "Lightning Press";
			case "186":
				return "Ball Lightning";
			case "187":
				return "Ball Lightning";
			case "188":
				return "Ball Lightning";
			case "189":
				return "Lightning Surge";
			case "190":
				return "Lightning Surge";
			case "191":
				return "Lightning Surge";
			case "192":
				return "Heaven's Claws";
			case "193":
				return "Heaven's Claws";
			case "194":
				return "Heaven's Claws";
			case "195":
				return "Shock Striker";
			case "196":
				return "Shock Striker";
			case "197":
				return "Shock Striker";
			case "198":
				return "Electrify";
			case "199":
				return "Electrify";
			case "200":
				return "Electrify";
			case "201":
				return "Amulet of Lightning";
			case "202":
				return "Titan's Fist";
			case "203":
				return "Rampart of the Ram's Head";
			case "204":
				return "Rotten Old Buckler";
			case "205":
				return "Tear Asunder";
			case "206":
				return "Embolden";
			case "207":
				return "Embolden";
			case "208":
				return "Embolden";
			case "209":
				return "Thump";
			case "210":
				return "Thump";
			case "211":
				return "Thump";
			case "212":
				return "Seismic Surge";
			case "213":
				return "New Horizon";
			case "214":
				return "Honing Hood";
			case "215":
				return "Seek and Destroy";
			case "216":
				return "Bolt'n' Shot";
			case "217":
				return "Bolt'n' Shot";
			case "218":
				return "Bolt'n' Shot";
			case "219":
				return "Over Flex";
			case "220":
				return "Over Flex";
			case "221":
				return "Over Flex";
			case "222":
				return "Rosetta Thorn";
			case "223":
				return "Duskblade";
			case "224":
				return "Spellbound Creepers";
			case "225":
				return "Sutcliffe’'s Suede Hides";
			case "226":
				return "Sting of Sorcery";
			case "227":
				return "Sigil of Suffering";
			case "228":
				return "Sigil of Suffering";
			case "229":
				return "Sigil of Suffering";
			case "230":
				return "Singeing Steelblade";
			case "231":
				return "Singeing Steelblade";
			case "232":
				return "Singeing Steelblade";
			case "233":
				return "Ragamuffin's Hat";
			case "234":
				return "Deep Blue";
			case "235":
				return "Cracker Jax";
			case "236":
				return "Runaways";
			case "237":
				return "Cracked Bauble";
		}
	}
	if ($set == "MON") {
		switch ($num) {

			case "000":
				return "Great Library of Solana";
			case "001":
				return "Prism, Sculptor of Arc Light";
			case "002":
				return "Prism";
			case "003":
				return "Luminaris";
			case "004":
				return "Herald of Erudition";
			case "005":
				return "Arc Light Sentinel";
			case "006":
				return "Genesis";
			case "007":
				return "Herald of Judgment";
			case "008":
				return "Herald of Triumph";
			case "009":
				return "Herald of Triumph";
			case "010":
				return "Herald of Triumph";
			case "011":
				return "Parable of Humility";
			case "012":
				return "Merciful Retribution";
			case "013":
				return "Ode to Wrath";
			case "014":
				return "Herald of Protection";
			case "015":
				return "Herald of Protection";
			case "016":
				return "Herald of Protection";
			case "017":
				return "Herald of Ravages";
			case "018":
				return "Herald of Ravages";
			case "019":
				return "Herald of Ravages";
			case "020":
				return "Herald of Rebirth";
			case "021":
				return "Herald of Rebirth";
			case "022":
				return "Herald of Rebirth";
			case "023":
				return "Herald of Tenacity";
			case "024":
				return "Herald of Tenacity";
			case "025":
				return "Herald of Tenacity";
			case "026":
				return "Wartune Herald";
			case "027":
				return "Wartune Herald";
			case "028":
				return "Wartune Herald";
			case "029":
				return "Boltyn, Breaker of Dawn";
			case "030":
				return "Boltyn";
			case "031":
				return "Raydn, Duskbane";
			case "032":
				return "Bolting Blade";
			case "033":
				return "Beacon of Victory";
			case "034":
				return "Lumina Ascension";
			case "035":
				return "V of the Vanguard";
			case "036":
				return "Battlefield Blitz";
			case "037":
				return "Battlefield Blitz";
			case "038":
				return "Battlefield Blitz";
			case "039":
				return "Valiant Thrust";
			case "040":
				return "Valiant Thrust";
			case "041":
				return "Valiant Thrust";
			case "042":
				return "Bolt of Courage";
			case "043":
				return "Bolt of Courage";
			case "044":
				return "Bolt of Courage";
			case "045":
				return "Cross the Line";
			case "046":
				return "Cross the Line";
			case "047":
				return "Cross the Line";
			case "048":
				return "Engulfing Light";
			case "049":
				return "Engulfing Light";
			case "050":
				return "Engulfing Light";
			case "051":
				return "Express Lightning";
			case "052":
				return "Express Lightning";
			case "053":
				return "Express Lightning";
			case "054":
				return "Take Flight";
			case "055":
				return "Take Flight";
			case "056":
				return "Take Flight";
			case "057":
				return "Courageous Steelhand";
			case "058":
				return "Courageous Steelhand";
			case "059":
				return "Courageous Steelhand";
			case "060":
				return "Vestige of Sol";
			case "061":
				return "Halo of lllumination";
			case "062":
				return "Celestial Cataclysm";
			case "063":
				return "Soul Shield";
			case "064":
				return "Soul Food";
			case "065":
				return "Tome of Divinity";
			case "066":
				return "Invigorating Light";
			case "067":
				return "Invigorating Light";
			case "068":
				return "Invigorating Light";
			case "069":
				return "Glisten";
			case "070":
				return "Glisten";
			case "071":
				return "Glisten";
			case "072":
				return "Illuminate";
			case "073":
				return "Illuminate";
			case "074":
				return "Illuminate";
			case "075":
				return "Impenetrable Belief";
			case "076":
				return "Impenetrable Belief";
			case "077":
				return "Impenetrable Belief";
			case "078":
				return "Rising Solartide";
			case "079":
				return "Rising Solartide";
			case "080":
				return "Rising Solartide";
			case "081":
				return "Seek Enlightenment";
			case "082":
				return "Seek Enlightenment";
			case "083":
				return "Seek Enlightenment";
			case "084":
				return "Blinding Beam";
			case "085":
				return "Blinding Beam";
			case "086":
				return "Blinding Beam";
			case "087":
				return "Ray of Hope";
			case "088":
				return "Iris of Reality";
			case "089":
				return "Phantasmal Footsteps";
			case "090":
				return "Dream Weavers";
			case "091":
				return "Phantasmaclasm";
			case "092":
				return "Prismatic Shield";
			case "093":
				return "Prismatic Shield";
			case "094":
				return "Prismatic Shield";
			case "095":
				return "Phantasmify";
			case "096":
				return "Phantasmify";
			case "097":
				return "Phantasmify";
			case "098":
				return "Enigma Chimera";
			case "099":
				return "Enigma Chimera";
			case "100":
				return "Enigma Chimera";
			case "101":
				return "Spears of Surreality";
			case "102":
				return "Spears of Surreality";
			case "103":
				return "Spears of Surreality";
			case "104":
				return "Spectral Shield";
			case "105":
				return "Hatchet of Body";
			case "106":
				return "Hatchet of Mind";
			case "107":
				return "Valiant Dynamo";
			case "108":
				return "Gallantry Gold";
			case "109":
				return "Spill Blood";
			case "110":
				return "Dusk Path Pilgrimage";
			case "111":
				return "Dusk Path Pilgrimage";
			case "112":
				return "Dusk Path Pilgrimage";
			case "113":
				return "Plow Through";
			case "114":
				return "Plow Through";
			case "115":
				return "Plow Through";
			case "116":
				return "Second Swing";
			case "117":
				return "Second Swing";
			case "118":
				return "Second Swing";
			case "119":
				return "Levia, Shadowborn Abomination";
			case "120":
				return "Levia";
			case "121":
				return "Hexagore, the Death Hydra";
			case "122":
				return "Hooves of the Shadowbeast";
			case "123":
				return "Deep Rooted Evil";
			case "124":
				return "Mark of the Beast";
			case "125":
				return "Shadow of Blasmophet";
			case "126":
				return "Endless Maw";
			case "127":
				return "Endless Maw";
			case "128":
				return "Endless Maw";
			case "129":
				return "Writhing Beast Hulk";
			case "130":
				return "Writhing Beast Hulk";
			case "131":
				return "Writhing Beast Hulk";
			case "132":
				return "Convulsions from the Bellows of Hell";
			case "133":
				return "Convulsions from the Bellows of Hell";
			case "134":
				return "Convulsions from the Bellows of Hell";
			case "135":
				return "Boneyard Marauder";
			case "136":
				return "Boneyard Marauder";
			case "137":
				return "Boneyard Marauder";
			case "138":
				return "Deadwood Rumbler";
			case "139":
				return "Deadwood Rumbler";
			case "140":
				return "Deadwood Rumbler";
			case "141":
				return "Dread Screamer";
			case "142":
				return "Dread Screamer";
			case "143":
				return "Dread Screamer";
			case "144":
				return "Graveling Growl";
			case "145":
				return "Graveling Growl";
			case "146":
				return "Graveling Growl";
			case "147":
				return "Hungering Slaughterbeast";
			case "148":
				return "Hungering Slaughterbeast";
			case "149":
				return "Hungering Slaughterbeast";
			case "150":
				return "Unworldly Bellow";
			case "151":
				return "Unworldly Bellow";
			case "152":
				return "Unworldly Bellow";
			case "153":
				return "Chane, Bound by Shadow";
			case "154":
				return "Chane";
			case "155":
				return "Galaxxi Black";
			case "156":
				return "Shadow of Ursur";
			case "157":
				return "Dimenxxional Crossroads";
			case "158":
				return "Invert Existence";
			case "159":
				return "Unhallowed Rites";
			case "160":
				return "Unhallowed Rites";
			case "161":
				return "Unhallowed Rites";
			case "162":
				return "Dimenxxional Gateway";
			case "163":
				return "Dimenxxional Gateway";
			case "164":
				return "Dimenxxional Gateway";
			case "165":
				return "Seeping Shadows";
			case "166":
				return "Seeping Shadows";
			case "167":
				return "Seeping Shadows";
			case "168":
				return "Bounding Demigon";
			case "169":
				return "Bounding Demigon";
			case "170":
				return "Bounding Demigon";
			case "171":
				return "Piercing Shadow Vise";
			case "172":
				return "Piercing Shadow Vise";
			case "173":
				return "Piercing Shadow Vise";
			case "174":
				return "Rift Bind";
			case "175":
				return "Rift Bind";
			case "176":
				return "Rift Bind";
			case "177":
				return "Rifted Torment";
			case "178":
				return "Rifted Torment";
			case "179":
				return "Rifted Torment";
			case "180":
				return "Rip Through Reality";
			case "181":
				return "Rip Through Reality";
			case "182":
				return "Rip Through Reality";
			case "183":
				return "Seeds of Agony";
			case "184":
				return "Seeds of Agony";
			case "185":
				return "Seeds of Agony";
			case "186":
				return "Soul Shackle";
			case "187":
				return "Carrion Husk";
			case "188":
				return "Ebon Fold";
			case "189":
				return "Doomsday";
			case "190":
				return "Eclipse";
			case "191":
				return "Mutated Mass";
			case "192":
				return "Guardian of the Shadowrealm";
			case "193":
				return "Shadow Puppetry";
			case "194":
				return "Tome of Torment";
			case "195":
				return "Consuming Aftermath";
			case "196":
				return "Consuming Aftermath";
			case "197":
				return "Consuming Aftermath";
			case "198":
				return "Soul Harvest";
			case "199":
				return "Soul Reaping";
			case "200":
				return "Howl from Beyond";
			case "201":
				return "Howl from Beyond";
			case "202":
				return "Howl from Beyond";
			case "203":
				return "Ghostly Visit";
			case "204":
				return "Ghostly Visit";
			case "205":
				return "Ghostly Visit";
			case "206":
				return "Lunartide Plunderer";
			case "207":
				return "Lunartide Plunderer";
			case "208":
				return "Lunartide Plunderer";
			case "209":
				return "Void Wraith";
			case "210":
				return "Void Wraith";
			case "211":
				return "Void Wraith";
			case "212":
				return "Spew Shadow";
			case "213":
				return "Spew Shadow";
			case "214":
				return "Spew Shadow";
			case "215":
				return "Blood Tribute";
			case "216":
				return "Blood Tribute";
			case "217":
				return "Blood Tribute";
			case "218":
				return "Eclipse Existence";
			case "219":
				return "Blasmophet, the Soul Harvester";
			case "220":
				return "Ursur, the Soul Reaper";
			case "221":
				return "Ravenous Meataxe";
			case "222":
				return "Tear Limb from Limb";
			case "223":
				return "Pulping";
			case "224":
				return "Pulping";
			case "225":
				return "Pulping";
			case "226":
				return "Smash with Big Tree";
			case "227":
				return "Smash with Big Tree";
			case "228":
				return "Smash with Big Tree";
			case "229":
				return "Dread Scythe";
			case "230":
				return "Aether Ironweave";
			case "231":
				return "Sonata Arcanix";
			case "232":
				return "Vexing Malice";
			case "233":
				return "Vexing Malice";
			case "234":
				return "Vexing Malice";
			case "235":
				return "Arcanic Crackle";
			case "236":
				return "Arcanic Crackle";
			case "237":
				return "Arcanic Crackle";
			case "238":
				return "Blood Drop Brocade";
			case "239":
				return "Stubby Hammerers";
			case "240":
				return "Time Skippers";
			case "241":
				return "Ironhide Helm";
			case "242":
				return "Ironhide Plate";
			case "243":
				return "Ironhide Gauntlet";
			case "244":
				return "Ironhide Legs";
			case "245":
				return "Exude Confidence";
			case "246":
				return "Nourishing Emptiness";
			case "247":
				return "Rouse the Ancients";
			case "248":
				return "Out Muscle";
			case "249":
				return "Out Muscle";
			case "250":
				return "Out Muscle";
			case "251":
				return "Seek Horizon";
			case "252":
				return "Seek Horizon";
			case "253":
				return "Seek Horizon";
			case "254":
				return "Tremor of iArathael";
			case "255":
				return "Tremor of iArathael";
			case "256":
				return "Tremor of iArathael";
			case "257":
				return "Rise Above";
			case "258":
				return "Rise Above";
			case "259":
				return "Rise Above";
			case "260":
				return "Captain's Call";
			case "261":
				return "Captain's Call";
			case "262":
				return "Captain's Call";
			case "263":
				return "Adrenaline Rush";
			case "264":
				return "Adrenaline Rush";
			case "265":
				return "Adrenaline Rush";
			case "266":
				return "Belittle";
			case "267":
				return "Belittle";
			case "268":
				return "Belittle";
			case "269":
				return "Brandish";
			case "270":
				return "Brandish";
			case "271":
				return "Brandish";
			case "272":
				return "Frontline Scout";
			case "273":
				return "Frontline Scout";
			case "274":
				return "Frontline Scout";
			case "275":
				return "Overload";
			case "276":
				return "Overload";
			case "277":
				return "Overload";
			case "278":
				return "Pound for Pound";
			case "279":
				return "Pound for Pound";
			case "280":
				return "Pound for Pound";
			case "281":
				return "Rally the Rearguard";
			case "282":
				return "Rally the Rearguard";
			case "283":
				return "Rally the Rearguard";
			case "284":
				return "Stony Woottonhog";
			case "285":
				return "Stony Woottonhog";
			case "286":
				return "Stony Woottonhog";
			case "287":
				return "Surging Militia";
			case "288":
				return "Surging Militia";
			case "289":
				return "Surging Militia";
			case "290":
				return "Yinti Yanti";
			case "291":
				return "Yinti Yanti";
			case "292":
				return "Yinti Yanti";
			case "293":
				return "Zealous Belting";
			case "294":
				return "Zealous Belting";
			case "295":
				return "Zealous Belting";
			case "296":
				return "Minnowism";
			case "297":
				return "Minnowism";
			case "298":
				return "Minnowism";
			case "299":
				return "Warmonger's Recital";
			case "300":
				return "Warmonger's Recital";
			case "301":
				return "Warmonger's Recital";
			case "302":
				return "Talisman of Dousing";
			case "303":
				return "Memorial Ground";
			case "304":
				return "Memorial Ground";
			case "305":
				return "Memorial Ground";
			case "306":
				return "Cracked Bauble";
			case "400":
				return "Spell Fray Cloak";
			case "401":
				return "Spell Fray Gloves";
			case "402":
				return "Spell Fray Leggings";
			case "404":
				return "The Librarian";
			case "405":
				return "Minerva Themis";
			case "406":
				return "Lady Barthimont";
			case "407":
				return "Lord Sutcliffe";
		}
	}
	if ($set == "UPR") {
		switch ($num) {
			case "000":
				return "Blood of the Dracai";
			case "001":
				return "Dromai, Ash Artist";
			case "002":
				return "Dromai";
			case "003":
				return "Storm of Sandikai";
			case "004":
				return "Silken Form";
			case "005":
				return "Burn Them All";
			case "006":
				return "Invoke Dracona Optimai";
			case "007":
				return "Invoke Tomeltai";
			case "008":
				return "Invoke Dominia";
			case "009":
				return "Invoke Azvolai";
			case "010":
				return "Invoke Cromai";
			case "011":
				return "Invoke Kyloria";
			case "012":
				return "Invoke Miragai";
			case "013":
				return "Invoke Nekria";
			case "014":
				return "Invoke Ouvia";
			case "015":
				return "Invoke Themai";
			case "016":
				return "Invoke Vynserakai";
			case "017":
				return "Invoke Yendurai";
			case "018":
			case "019":
			case "020":
				return "Billowing Mirage";
			case "021":
			case "022":
			case "023":
				return "Dunebreaker Cenipai";
			case "024":
			case "025":
			case "026":
				return "Dustup";
			case "027":
			case "028":
			case "029":
				return "Embermaw Cenipai";
			case "030":
			case "031":
			case "032":
				return "Sweeping Blow";
			case "033":
			case "034":
			case "035":
				return "Rake the Embers";
			case "036":
			case "037":
			case "038":
				return "Skittering Sands";
			case "039":
			case "040":
			case "041":
				return "Sand Cover";
			case "042":
				return "Aether Ashwing";
			case "043":
				return "Ash";
			case "044":
				return "Fai, Rising Rebellion";
			case "045":
				return "Fai";
			case "046":
				return "Searing Emberblade";
			case "047":
				return "Heat Wave";
			case "048":
				return "Phoenix Form";
			case "049":
				return "Spreading Flames";
			case "050":
				return "Combustion Point";
			case "051":
			case "052":
			case "053":
				return "Engulfing Flamewave";
			case "054":
			case "055":
			case "056":
				return "Mounting Anger";
			case "057":
			case "058":
			case "059":
				return "Rise from the Ashes";
			case "060":
			case "061":
			case "062":
				return "Brand with Cinderclaw";
			case "063":
			case "064":
			case "065":
				return "Cinderskin Devotion";
			case "066":
			case "067":
			case "068":
				return "Dust Runner Outlaw";
			case "069":
			case "070":
			case "071":
				return "Lava Vein Loyalty";
			case "072":
			case "073":
			case "074":
				return "Rebellious Rush";
			case "075":
			case "076":
			case "077":
				return "Rising Resentment";
			case "078":
			case "079":
			case "080":
				return "Ronin Renegade";
			case "081":
			case "082":
			case "083":
				return "Soaring Strike";
			case "084":
				return "Flamescale Furnace";
			case "085":
				return "Sash of Sandikai";
			case "086":
				return "Thaw";
			case "087":
				return "Liquefy";
			case "088":
				return "Uprising";
			case "089":
				return "Tome of Firebrand";
			case "090":
				return "Red Hot";
			case "091":
				return "Rise Up";
			case "092":
				return "Blaze Headlong";
			case "093":
				return "Breaking Point";
			case "094":
				return "Burn Away";
			case "095":
				return "Flameborn Retribution";
			case "096":
				return "Flamecall Awakening";
			case "097":
				return "Inflame";
			case "098":
				return "Lava Burst";
			case "099":
				return "Searing Touch";
			case "100":
				return "Stoke the Flames";
			case "101":
				return "Phoenix Flame";
			case "102":
				return "Iyslander, Stormbind";
			case "103":
				return "Iyslander";
			case "104":
				return "Encase";
			case "105":
				return "Freezing Point";
			case "106":
			case "107":
			case "108":
				return "Sigil of Permafrost";
			case "109":
				return "Ice Eternal";
			case "110":
			case "111":
			case "112":
				return "Succumb to Winter";
			case "113":
			case "114":
			case "115":
				return "Aether Icevein";
			case "116":
			case "117":
			case "118":
				return "Brain Freeze";
			case "119":
			case "120":
			case "121":
				return "Ice Bind";
			case "122":
			case "123":
			case "124":
				return "Polar Cap";
			case "125":
				return "Conduit of Frostburn";
			case "126":
				return "Frost Hex";
			case "127":
			case "128":
			case "129":
				return "Aether Hail";
			case "130":
			case "131":
			case "132":
				return "Frosting";
			case "133":
			case "134":
			case "135":
				return "Ice Bolt";
			case "136":
				return "Coronet Peak";
			case "137":
				return "Glacial Horns";
			case "138":
				return "Channel the Bleak Expanse";
			case "139":
				return "Hypothermia";
			case "140":
				return "Insidious Chill";
			case "141":
			case "142":
			case "143":
				return "Isenhowl Weathervane";
			case "144":
			case "145":
			case "146":
				return "Arctic Incarceration";
			case "147":
			case "148":
			case "149":
				return "Cold Snap";
			case "151":
				return "Ghostly Touch";
			case "152":
				return "Silent Stilettos";
			case "153":
				return "Frightmare";
			case "154":
				return "Semblance";
			case "155":
			case "156":
			case "157":
				return "Transmogrify";
			case "158":
				return "Tiger Stripe Shuko";
			case "159":
				return "Tide Flippers";
			case "160":
				return "Double Strike";
			case "161":
				return "Take the Tempo";
			case "162":
			case "163":
			case "164":
				return "Rapid Reflex";
			case "165":
				return "Waning Moon";
			case "166":
				return "Alluvion Constellas";
			case "167":
				return "Spellfire Cloak";
			case "168":
				return "Tome of Duplicity";
			case "169":
				return "Rewind";
			case "170":
			case "171":
			case "172":
				return "Dampen";
			case "173":
			case "174":
			case "175":
				return "Aether Dart";
			case "176":
			case "177":
			case "178":
				return "Read the Ripples";
			case "179":
			case "180":
			case "181":
				return "Singe";
			case "182":
				return "Crown of Providence";
			case "183":
				return "Helio's Mitre";
			case "184":
				return "Quelling Robe";
			case "185":
				return "Quelling Sleeves";
			case "186":
				return "Quelling Slippers";
			case "187":
				return "Erase Face";
			case "188":
				return "Vipox";
			case "189":
				return "That All You Got?";
			case "190":
				return "Fog Down";
			case "191":
			case "192":
			case "193":
				return "Flex";
			case "194":
			case "195":
			case "196":
				return "Fyendal's Fighting Spirit";
			case "197":
			case "198":
			case "199":
				return "Sift";
			case "200":
			case "201":
			case "202":
				return "Strategic Planning";
			case "203":
			case "204":
			case "205":
				return "Brothers in Arms";
			case "206":
			case "207":
			case "208":
				return "Critical Strike";
			case "212":
			case "213":
			case "214":
				return "Trade In";
			case "215":
			case "216":
			case "217":
				return "Healing Balm";
			case "218":
			case "219":
			case "220":
				return "Sigil of Protection";
			case "221":
			case "222":
			case "223":
				return "Oasis Respite";
			case "406":
				return "Dracona Optima";
			case "407":
				return "Tomeltai";
			case "408":
				return "Dominia";
			case "409":
				return "Azvolai";
			case "410":
				return "Cromai";
			case "411":
				return "Kyloria";
			case "412":
				return "Miragai";
			case "413":
				return "Nekria";
			case "414":
				return "Ouvia";
			case "415":
				return "Themai";
			case "416":
				return "Vynserakai";
			case "417":
				return "Yendurai";
			case "551":
				return "Ghostly Touch";
			default:
				return "Name not populated - please report bug";
		}
	}
	if ($set == "DVR") {
		switch ($num) {
			case "001":
				return "Dorinthea Quicksilver Prodigy";
			case "002":
				return "Dawnblade, Resplendent";
			case "003":
				return "Ironrot Helm";
			case "004":
				return "Blossom of Spring";
			case "005":
				return "Gallantry Gold";
			case "006":
				return "Ironrot Legs";
			case "007":
				return "Hala Goldenhelm";
			case "008":
				return "Glistening Steelblade";
			case "009":
				return "En Garde";
			case "010":
				return "Second Swing";
			case "011":
				return "Warrior's Valor";
			case "012":
				return "Sharpen Steel";
			case "013":
				return "Run Through";
			case "014":
				return "Thrust";
			case "015":
				return "In The Swing";
			case "016":
				return "Ironsong Response";
			case "017":
				return "Driving Blade";
			case "018":
				return "Slice and Dice";
			case "019":
				return "On a Knife Edge";
			case "020":
				return "Out for Blood";
			case "021":
				return "Hit and Run";
			case "022":
				return "Visit the Blacksmith";
			case "023":
				return "Blade Flash";
			case "024":
				return "Toughen Up";
			case "025":
				return "Sigil of Solace";
			case "026":
				return "Flock of the Feather Walkers";
			case "027":
				return "Titanium Bauble";
			case "028":
				return "Quicken";
			default:
				return "Name not populated - please report bug";
		}
	}
	if ($set == "RVD") {
		switch ($num) {
			case "001":
				return "Rhinar";
			case "002":
				return "Bone Basher";
			case "003":
				return "Bone Vizier";
			case "004":
				return "Blossom of Spring";
			case "005":
				return "Ironhide Gauntlet";
			case "006":
				return "Ironhide Legs";
			case "007":
				return "Chief Ruk'utan";
			case "008":
				return "Alpha Rampage";
			case "009":
				return "Beast Mode";
			case "010":
				return "Pack Hunt";
			case "011":
				return "Bare Fangs";
			case "012":
				return "Wild Ride";
			case "013":
				return "Wrecking Ball";
			case "014":
				return "Awakening Bellow";
			case "015":
				return "Pack Call";
			case "016":
				return "Smash Instinct";
			case "017":
				return "Smash With Big Tree";
			case "018":
				return "Muscle Mutt";
			case "019":
				return "Raging Onslaught";
			case "020":
				return "Wounded Bull";
			case "021":
				return "Barraging Beatdown";
			case "022":
				return "Rally The Rearguard";
			case "023":
				return "Wrecker Romp";
			case "024":
				return "Come to Fight";
			case "025":
				return "Clearing Bellow";
			case "026":
				return "Dodge";
			case "027":
				return "Titanium Bauble";
			default:
				return "Name not populated - please report bug";
		}
	}
	if ($set == "DYN") {
		switch ($num) {
			case "001":
				return "Emperor, Dracai of Aesir";
			case "005":
				return "Rok";
			case "026":
				return "Seasoned Saviour";
			case "039":
			case "040":
			case "041":
				return "Reinforce Steel";
			case "045":
				return "Blazen Yoroi";
			case "068":
				return "Merciless Battleaxe";
			case "069":
				return "Quicksilver Dagger"; // TODO: Quicksilver Dagger CardID might change on set release
			case "075":
				return "Yoji, Royal Protector"; // TODO: Yoji cardID to be modified with set release
			case "088":
				return "Hanabi Blaster";
			case "094":
				return "Powder Keg";
			case "113":
				return "Arakni, Huntsman";
			case "115":
			case "116":
				return "Spider's Bite";
			case "117":
				return "Blacktek Whisperers";
			case "118":
				return "Mask of Perdition";
			case "119":
				return "Eradicate";
			case "120":
				return "Leave No Witnesses";
			case "121":
				return "Regicide";
			case "122":
				return "Surgical Extraction";
			case "123":
				return "Pay Day";
			case "416":
			case "417":
			case "418":
				return "Blessing of Aether"; // TODO: Blessing of Aether cardID to be edited.
			case "124":
			case "125":
			case "126":
				return "Plunder the Poor";
			case "127":
			case "128":
			case "129":
				return "Rob the Rich";
			case "130":
			case "131":
			case "132":
				return "Shred";
			case "133":
			case "134":
			case "135":
				return "Annihilate the Armed";
			case "136":
			case "137":
			case "138":
				return "Fleece the Frail";
			case "139":
			case "140":
			case "141":
				return "Nix the Nimble";
			case "142":
			case "143":
			case "144":
				return "Sack the Shifty";
			case "145":
			case "146":
			case "147":
				return "Slay the Scholars";
			case "148":
			case "149":
			case "150":
				return "Cut to the Chase";
			case "151":
				return "Sandscour Greatbow";
			case "171":
				return "Amethyst Tiara";
			case "174":
				return "Diabolic Ultimatum";
			case "188":
			case "189":
			case "190":
				return "Sky Fire Lanterns";
			case "192":
				return "Surgent Aethertide";
			case "206":
			case "207":
			case "208":
				return "Sap";
			case "230":
			case "231":
			case "232":
				return "Water Glow Lanterns";
			case "234":
				return "Crown of Dominion";
			case "243":
				return "Imperial Warhorn";
			case "243":
				return "Gold";
			default:
				return "Name not populated - please report bug";
		}
	}
	if ($set == "WTR") {
		switch ($num) {
			case "000":
				return "Heart of Fyendal";
			case "001":
				return "Rhinar, Reckless Rampage";
			case "002":
				return "Rhinar";
			case "003":
				return "Romping Club";
			case "004":
				return "Scabskin Leathers";
			case "005":
				return "Barkbone Strapping";
			case "006":
				return "Alpha Rampage";
			case "007":
				return "Bloodrush Bellow";
			case "008":
				return "Reckless Swing";
			case "009":
				return "Sand Sketched Plan";
			case "010":
				return "Bone Head Barrier";
			case "011":
				return "Breakneck Battery";
			case "012":
				return "Breakneck Battery";
			case "013":
				return "Breakneck Battery";
			case "014":
				return "Savage Feast";
			case "015":
				return "Savage Feast";
			case "016":
				return "Savage Feast";
			case "017":
				return "Barraging Beatdown";
			case "018":
				return "Barraging Beatdown";
			case "019":
				return "Barraging Beatdown";
			case "020":
				return "Savage Swing";
			case "021":
				return "Savage Swing";
			case "022":
				return "Savage Swing";
			case "023":
				return "Pack Hunt";
			case "024":
				return "Pack Hunt";
			case "025":
				return "Pack Hunt";
			case "026":
				return "Smash Instinct";
			case "027":
				return "Smash Instinct";
			case "028":
				return "Smash Instinct";
			case "029":
				return "Wrecker Romp";
			case "030":
				return "Wrecker Romp";
			case "031":
				return "Wrecker Romp";
			case "032":
				return "Awakening Bellow";
			case "033":
				return "Awakening Bellow";
			case "034":
				return "Awakening Bellow";
			case "035":
				return "Primeval Bellow";
			case "036":
				return "Primeval Bellow";
			case "037":
				return "Primeval Bellow";
			case "038":
				return "Bravo, Showstopper";
			case "039":
				return "Bravo";
			case "040":
				return "Anothos";
			case "041":
				return "Tectonic Plating";
			case "042":
				return "Helm of Isen's Peak";
			case "043":
				return "Crippling Crush";
			case "044":
				return "Spinal Crush";
			case "045":
				return "Cranial Crush";
			case "046":
				return "Forged for War";
			case "047":
				return "Show Time!";
			case "048":
				return "Disable";
			case "049":
				return "Disable";
			case "050":
				return "Disable";
			case "051":
				return "Staunch Response";
			case "052":
				return "Staunch Response";
			case "053":
				return "Staunch Response";
			case "054":
				return "Blessing of Deliverance";
			case "055":
				return "Blessing of Deliverance";
			case "056":
				return "Blessing of Deliverance";
			case "057":
				return "Buckling Blow";
			case "058":
				return "Buckling Blow";
			case "059":
				return "Buckling Blow";
			case "060":
				return "Cartilage Crush";
			case "061":
				return "Cartilage Crush";
			case "062":
				return "Cartilage Crush";
			case "063":
				return "Crush Confidence";
			case "064":
				return "Crush Confidence";
			case "065":
				return "Crush Confidence";
			case "066":
				return "Debilitate";
			case "067":
				return "Debilitate";
			case "068":
				return "Debilitate";
			case "069":
				return "Emerging Power";
			case "070":
				return "Emerging Power";
			case "071":
				return "Emerging Power";
			case "072":
				return "Stonewall Confidence";
			case "073":
				return "Stonewall Confidence";
			case "074":
				return "Stonewall Confidence";
			case "075":
				return "Seismic Surge";
			case "076":
				return "Katsu, the Wanderer";
			case "077":
				return "Katsu";
			case "078":
				return "Harmonized Kodachi";
			case "079":
				return "Mask of Momentum";
			case "080":
				return "Breaking Scales";
			case "081":
				return "Lord of Wind";
			case "082":
				return "Ancestral Empowerment";
			case "083":
				return "Mugenshi: RELEASE";
			case "084":
				return "Hurricane Technique";
			case "085":
				return "Pounding Gale";
			case "086":
				return "Fluster Fist";
			case "087":
				return "Fluster Fist";
			case "088":
				return "Fluster Fist";
			case "089":
				return "Blackout Kick";
			case "090":
				return "Blackout Kick";
			case "091":
				return "Blackout Kick";
			case "092":
				return "Flic Flak";
			case "093":
				return "Flic Flak";
			case "094":
				return "Flic Flak";
			case "095":
				return "Open the Center";
			case "096":
				return "Open the Center";
			case "097":
				return "Open the Center";
			case "098":
				return "Head Jab";
			case "099":
				return "Head Jab";
			case "100":
				return "Head Jab";
			case "101":
				return "Leg Tap";
			case "102":
				return "Leg Tap";
			case "103":
				return "Leg Tap";
			case "104":
				return "Rising Knee Thrust";
			case "105":
				return "Rising Knee Thrust";
			case "106":
				return "Rising Knee Thrust";
			case "107":
				return "Surging Strike";
			case "108":
				return "Surging Strike";
			case "109":
				return "Surging Strike";
			case "110":
				return "Whelming Gustwave";
			case "111":
				return "Whelming Gustwave";
			case "112":
				return "Whelming Gustwave";
			case "113":
				return "Dorinthea Ironsong";
			case "114":
				return "Dorinthea";
			case "115":
				return "Dawnblade";
			case "116":
				return "Braveforge Bracers";
			case "117":
				return "Refraction Bolters";
			case "118":
				return "Glint the Quicksilver";
			case "119":
				return "Steelblade Supremacy";
			case "120":
				return "Rout";
			case "121":
				return "Singing Steelblade";
			case "122":
				return "Ironsong Determination";
			case "123":
				return "Overpower";
			case "124":
				return "Overpower";
			case "125":
				return "Overpower";
			case "126":
				return "Steelblade Shunt";
			case "127":
				return "Steelblade Shunt";
			case "128":
				return "Steelblade Shunt";
			case "129":
				return "Warrior's Valor";
			case "130":
				return "Warrior's Valor";
			case "131":
				return "Warrior's Valor";
			case "132":
				return "Ironsong Response";
			case "133":
				return "Ironsong Response";
			case "134":
				return "Ironsong Response";
			case "135":
				return "Biting Blade";
			case "136":
				return "Biting Blade";
			case "137":
				return "Biting Blade";
			case "138":
				return "Stroke of Foresight";
			case "139":
				return "Stroke of Foresight";
			case "140":
				return "Stroke of Foresight";
			case "141":
				return "Sharpen Steel";
			case "142":
				return "Sharpen Steel";
			case "143":
				return "Sharpen Steel";
			case "144":
				return "Driving Blade";
			case "145":
				return "Driving Blade";
			case "146":
				return "Driving Blade";
			case "147":
				return "Nature's Path Pilgrimage";
			case "148":
				return "Nature's Path Pilgrimage";
			case "149":
				return "Nature's Path Pilgrimage";
			case "150":
				return "Fyendal's Spring Tunic";
			case "151":
				return "Hope Merchant's Hood";
			case "152":
				return "Heartened Cross Strap";
			case "153":
				return "Goliath Gauntlet";
			case "154":
				return "Snapdragon Scalers";
			case "155":
				return "Ironrot Helm";
			case "156":
				return "Ironrot Plate";
			case "157":
				return "Ironrot Gauntlet";
			case "158":
				return "Ironrot Legs";
			case "159":
				return "Enlightened Strike";
			case "160":
				return "Tome of Fyendal";
			case "161":
				return "Last Ditch Effort";
			case "162":
				return "Crazy Brew";
			case "163":
				return "Remembrance";
			case "164":
				return "Drone of Brutality";
			case "165":
				return "Drone of Brutality";
			case "166":
				return "Drone of Brutality";
			case "167":
				return "Snatch";
			case "168":
				return "Snatch";
			case "169":
				return "Snatch";
			case "170":
				return "Energy Potion";
			case "171":
				return "Potion of Strength";
			case "172":
				return "Timesnap Potion";
			case "173":
				return "Sigil of Solace";
			case "174":
				return "Sigil of Solace";
			case "175":
				return "Sigil of Solace";
			case "176":
				return "Barraging Brawnhide";
			case "177":
				return "Barraging Brawnhide";
			case "178":
				return "Barraging Brawnhide";
			case "179":
				return "Demolition Crew";
			case "180":
				return "Demolition Crew";
			case "181":
				return "Demolition Crew";
			case "182":
				return "Flock of the Feather Walker";
			case "183":
				return "Flock of the Feather Walker";
			case "184":
				return "Flock of the Feather Walker";
			case "185":
				return "Nimble Strike";
			case "186":
				return "Nimble Strike";
			case "187":
				return "Nimble Strike";
			case "188":
				return "Raging Onslaught";
			case "189":
				return "Raging Onslaught";
			case "190":
				return "Raging Onslaught";
			case "191":
				return "Scar for a Scar";
			case "192":
				return "Scar for a Scar";
			case "193":
				return "Scar for a Scar";
			case "194":
				return "Scour the Battlescape";
			case "195":
				return "Scour the Battlescape";
			case "196":
				return "Scour the Battlescape";
			case "197":
				return "Regurgitating Slog";
			case "198":
				return "Regurgitating Slog";
			case "199":
				return "Regurgitating Slog";
			case "200":
				return "Wounded Bull";
			case "201":
				return "Wounded Bull";
			case "202":
				return "Wounded Bull";
			case "203":
				return "Wounding Blow";
			case "204":
				return "Wounding Blow";
			case "205":
				return "Wounding Blow";
			case "206":
				return "Pummel";
			case "207":
				return "Pummel";
			case "208":
				return "Pummel";
			case "209":
				return "Razor Reflex";
			case "210":
				return "Razor Reflex";
			case "211":
				return "Razor Reflex";
			case "212":
				return "Unmovable";
			case "213":
				return "Unmovable";
			case "214":
				return "Unmovable";
			case "215":
				return "Sink Below";
			case "216":
				return "Sink Below";
			case "217":
				return "Sink Below";
			case "218":
				return "Nimblism";
			case "219":
				return "Nimblism";
			case "220":
				return "Nimblism";
			case "221":
				return "Sloggism";
			case "222":
				return "Sloggism";
			case "223":
				return "Sloggism";
			case "224":
				return "Cracked Bauble";
			case "225":
				return "Quicken";
		}
	} else if ($set == "EVR") {
		switch ($num) {

			case "000":
				if ($showPitch == false) return "Grandeur of Valahai";
				else return "Grandeur of Valahai (blue)";
			case "001":
				return "Skull Crushers";
			case "002":
				if ($showPitch == false) return "Swing Big";
				else return "Swing Big (red)";
			case "003":
				if ($showPitch == false) return "Ready to Roll";
				else return "Ready to Roll (blue)";
			case "004":
				if ($showPitch == false) return "Rolling Thunder";
				else return "Rolling Thunder (red)";
			case "005":
				if ($showPitch == false) return "High Roller";
				else return "High Roller (red)";
			case "006":
				if ($showPitch == false) return "High Roller";
				else return "High Roller (yellow)";
			case "007":
				if ($showPitch == false) return "High Roller";
				else return "High Roller (blue)";
			case "008":
				if ($showPitch == false) return "Bare Fangs";
				else return "Bare Fangs (red)";
			case "009":
				if ($showPitch == false) return "Bare Fangs";
				else return "Bare Fangs (yellow)";
			case "010":
				if ($showPitch == false) return "Bare Fangs";
				else return "Bare Fangs (blue)";
			case "011":
				if ($showPitch == false) return "Wild Ride";
				else return "Wild Ride (red)";
			case "012":
				if ($showPitch == false) return "Wild Ride";
				else return "Wild Ride (yellow)";
			case "013":
				if ($showPitch == false) return "Wild Ride";
				else return "Wild Ride (blue)";
			case "014":
				if ($showPitch == false) return "Bad Beats";
				else return "Bad Beats (red)";
			case "015":
				if ($showPitch == false) return "Bad Beats";
				else return "Bad Beats (yellow)";
			case "016":
				if ($showPitch == false) return "Bad Beats";
				else return "Bad Beats (blue)";
			case "017":
				return "Bravo, Star of the Show";
			case "018":
				return "Stalagmite, Bastion of Isenloft";
			case "019":
				return "Valda Brightaxe";
			case "020":
				return "Earthlore Bounty";
			case "021":
				if ($showPitch == false) return "Pulverize";
				else return "Pulverize (red)";
			case "022":
				if ($showPitch == false) return "Imposing Visage";
				else return "Imposing Visage (blue)";
			case "023":
				if ($showPitch == false) return "Nerves of Steel";
				else return "Nerves of Steel (blue)";
			case "024":
				if ($showPitch == false) return "Thunder Quake";
				else return "Thunder Quake (red)";
			case "025":
				if ($showPitch == false) return "Thunder Quake";
				else return "Thunder Quake (yellow)";
			case "026":
				if ($showPitch == false) return "Thunder Quake";
				else return "Thunder Quake (blue)";
			case "027":
				if ($showPitch == false) return "Macho Grande";
				else return "Macho Grande (red)";
			case "028":
				if ($showPitch == false) return "Macho Grande";
				else return "Macho Grande (yellow)";
			case "029":
				if ($showPitch == false) return "Macho Grande";
				else return "Macho Grande (blue)";
			case "030":
				if ($showPitch == false) return "Seismic Stir";
				else return "Seismic Stir (red)";
			case "031":
				if ($showPitch == false) return "Seismic Stir";
				else return "Seismic Stir (yellow)";
			case "032":
				if ($showPitch == false) return "Seismic Stir";
				else return "Seismic Stir (blue)";
			case "033":
				if ($showPitch == false) return "Steadfast";
				else return "Steadfast (red)";
			case "034":
				if ($showPitch == false) return "Steadfast";
				else return "Steadfast (yellow)";
			case "035":
				if ($showPitch == false) return "Steadfast";
				else return "Steadfast (blue)";
			case "036":
				return "Seismic Surge";
			case "037":
				return "ask of the Pouncing Ly";
			case "038":
				if ($showPitch == false) return "Break Tide";
				else return "Break Tide (yellow)";
			case "039":
				if ($showPitch == false) return "Spring Tidings";
				else return "Spring Tidings (yellow)";
			case "040":
				if ($showPitch == false) return "Winds of Eternity";
				else return "Winds of Eternity (blue)";
			case "041":
				if ($showPitch == false) return "Hundred Winds";
				else return "Hundred Winds (red)";
			case "042":
				if ($showPitch == false) return "Hundred Winds";
				else return "Hundred Winds (yellow)";
			case "043":
				if ($showPitch == false) return "Hundred Winds";
				else return "Hundred Winds (blue)";
			case "044":
				if ($showPitch == false) return "Ride the Tailwind";
				else return "Ride the Tailwind (red)";
			case "045":
				if ($showPitch == false) return "Ride the Tailwind";
				else return "Ride the Tailwind (yellow)";
			case "046":
				if ($showPitch == false) return "Ride the Tailwind";
				else return "Ride the Tailwind (blue)";
			case "047":
				if ($showPitch == false) return "Twin Twisters";
				else return "Twin Twisters (red)";
			case "048":
				if ($showPitch == false) return "Twin Twisters";
				else return "Twin Twisters (yellow)";
			case "049":
				if ($showPitch == false) return "Twin Twisters";
				else return "Twin Twisters (blue)";
			case "050":
				if ($showPitch == false) return "Wax On";
				else return "Wax On (red)";
			case "051":
				if ($showPitch == false) return "Wax On";
				else return "Wax On (yellow)";
			case "052":
				if ($showPitch == false) return "Wax On";
				else return "Wax On (blue)";
			case "053":
				return "Helm of Sharp Eye";
			case "054":
				if ($showPitch == false) return "Shatter";
				else return "Shatter (yellow)";
			case "055":
				if ($showPitch == false) return "Blood on Her Hands";
				else return "Blood on Her Hands (yellow)";
			case "056":
				if ($showPitch == false) return "Oath of Steel";
				else return "Oath of Steel (red)";
			case "057":
				if ($showPitch == false) return "Slice and Dice";
				else return "Slice and Dice (red)";
			case "058":
				if ($showPitch == false) return "Slice and Dice";
				else return "Slice and Dice (yellow)";
			case "059":
				if ($showPitch == false) return "Slice and Dice";
				else return "Slice and Dice (blue)";
			case "060":
				if ($showPitch == false) return "Blade Runner";
				else return "Blade Runner (red)";
			case "061":
				if ($showPitch == false) return "Blade Runner";
				else return "Blade Runner (yellow)";
			case "062":
				if ($showPitch == false) return "Blade Runner";
				else return "Blade Runner (blue)";
			case "063":
				if ($showPitch == false) return "In the Swing";
				else return "In the Swing (red)";
			case "064":
				if ($showPitch == false) return "In the Swing";
				else return "In the Swing (yellow)";
			case "065":
				if ($showPitch == false) return "In the Swing";
				else return "In the Swing (blue)";
			case "066":
				if ($showPitch == false) return "Outland Skirmish";
				else return "Outland Skirmish (red)";
			case "067":
				if ($showPitch == false) return "Outland Skirmish";
				else return "Outland Skirmish (yellow)";
			case "068":
				if ($showPitch == false) return "Outland Skirmish";
				else return "Outland Skirmish (blue)";
			case "069":
				if ($showPitch == false) return "Dissolution Sphere";
				else return "Dissolution Sphere (yellow)";
			case "070":
				if ($showPitch == false) return "Micro-processor";
				else return "Micro-processor (blue)";
			case "071":
				if ($showPitch == false) return "Signal Jammer";
				else return "Signal Jammer (blue)";
			case "072":
				if ($showPitch == false) return "Teklo Pounder";
				else return "Teklo Pounder (blue)";
			case "073":
				if ($showPitch == false) return "T-Bone";
				else return "T-Bone (red)";
			case "074":
				if ($showPitch == false) return "T-Bone";
				else return "T-Bone (yellow)";
			case "075":
				if ($showPitch == false) return "T-Bone";
				else return "T-Bone (blue)";
			case "076":
				if ($showPitch == false) return "Payload";
				else return "Payload (red)";
			case "077":
				if ($showPitch == false) return "Payload";
				else return "Payload (yellow)";
			case "078":
				if ($showPitch == false) return "Payload";
				else return "Payload (blue)";
			case "079":
				if ($showPitch == false) return "Zoom In";
				else return "Zoom In (red)";
			case "080":
				if ($showPitch == false) return "Zoom In";
				else return "Zoom In (yellow)";
			case "081":
				if ($showPitch == false) return "Zoom In";
				else return "Zoom In (blue)";
			case "082":
				if ($showPitch == false) return "Rotary Ram";
				else return "Rotary Ram (red)";
			case "083":
				if ($showPitch == false) return "Rotary Ram";
				else return "Rotary Ram (yellow)";
			case "084":
				if ($showPitch == false) return "Rotary Ram";
				else return "Rotary Ram (blue)";
			case "085":
				return "Genis Wotchuneed";
			case "086":
				return "Silver Palms";
			case "087":
				return "Dreadbore";
			case "088":
				if ($showPitch == false) return "Battering Bolt";
				else return "Battering Bolt (red)";
			case "089":
				if ($showPitch == false) return "Tri-shot";
				else return "Tri-shot (blue)";
			case "090":
				if ($showPitch == false) return "Rain Razors";
				else return "Rain Razors (yellow)";
			case "091":
				if ($showPitch == false) return "Release the Tension";
				else return "Release the Tension (red)";
			case "092":
				if ($showPitch == false) return "Release the Tension";
				else return "Release the Tension (yellow)";
			case "093":
				if ($showPitch == false) return "Release the Tension";
				else return "Release the Tension (blue)";
			case "094":
				if ($showPitch == false) return "Fatigue Shot";
				else return "Fatigue Shot (red)";
			case "095":
				if ($showPitch == false) return "Fatigue Shot";
				else return "Fatigue Shot (yellow)";
			case "096":
				if ($showPitch == false) return "Fatigue Shot";
				else return "Fatigue Shot (blue)";
			case "097":
				if ($showPitch == false) return "Timidity Point";
				else return "Timidity Point (red)";
			case "098":
				if ($showPitch == false) return "Timidity Point";
				else return "Timidity Point (yellow)";
			case "099":
				if ($showPitch == false) return "Timidity Point";
				else return "Timidity Point (blue)";
			case "100":
				if ($showPitch == false) return "Read the Glide Path";
				else return "Read the Glide Path (red)";
			case "101":
				if ($showPitch == false) return "Read the Glide Path";
				else return "Read the Glide Path (yellow)";
			case "102":
				if ($showPitch == false) return "Read the Glide Path";
				else return "Read the Glide Path (blue)";
			case "103":
				return "Vexing Quillhand";
			case "104":
				if ($showPitch == false) return "Runic Reclamation";
				else return "Runic Reclamation (red)";
			case "105":
				if ($showPitch == false) return "Swarming Gloomveil";
				else return "Swarming Gloomveil (red)";
			case "106":
				if ($showPitch == false) return "Revel in Runeblood";
				else return "Revel in Runeblood (red)";
			case "107":
				if ($showPitch == false) return "Runeblood Incantation";
				else return "Runeblood Incantation (red)";
			case "108":
				if ($showPitch == false) return "Runeblood Incantation";
				else return "Runeblood Incantation (yellow)";
			case "109":
				if ($showPitch == false) return "Runeblood Incantation";
				else return "Runeblood Incantation (blue)";
			case "110":
				if ($showPitch == false) return "Drowning Dire";
				else return "Drowning Dire (red)";
			case "111":
				if ($showPitch == false) return "Drowning Dire";
				else return "Drowning Dire (yellow)";
			case "112":
				if ($showPitch == false) return "Drowning Dire";
				else return "Drowning Dire (blue)";
			case "113":
				if ($showPitch == false) return "Reek of Corruption";
				else return "Reek of Corruption (red)";
			case "114":
				if ($showPitch == false) return "Reek of Corruption";
				else return "Reek of Corruption (yellow)";
			case "115":
				if ($showPitch == false) return "Reek of Corruption";
				else return "Reek of Corruption (blue)";
			case "116":
				if ($showPitch == false) return "Shrill of Skullform";
				else return "Shrill of Skullform (red)";
			case "117":
				if ($showPitch == false) return "Shrill of Skullform";
				else return "Shrill of Skullform (yellow)";
			case "118":
				if ($showPitch == false) return "Shrill of Skullform";
				else return "Shrill of Skullform (blue)";
			case "119":
				return "Runechant";
			case "120":
				return "Iyslander";
			case "121":
				return "Kraken's Aethervein";
			case "122":
				if ($showPitch == false) return "Sigil of Parapets";
				else return "Sigil of Parapets (blue)";
			case "123":
				if ($showPitch == false) return "Aether Wildfire";
				else return "Aether Wildfire (red)";
			case "124":
				if ($showPitch == false) return "Scour";
				else return "Scour (blue)";
			case "125":
				if ($showPitch == false) return "Emeritus Scolding";
				else return "Emeritus Scolding (red)";
			case "126":
				if ($showPitch == false) return "Emeritus Scolding";
				else return "Emeritus Scolding (yellow)";
			case "127":
				if ($showPitch == false) return "Emeritus Scolding";
				else return "Emeritus Scolding (blue)";
			case "128":
				if ($showPitch == false) return "Pry";
				else return "Pry (red)";
			case "129":
				if ($showPitch == false) return "Pry";
				else return "Pry (yellow)";
			case "130":
				if ($showPitch == false) return "Pry";
				else return "Pry (blue)";
			case "131":
				if ($showPitch == false) return "Pyroglyphic Protection";
				else return "Pyroglyphic Protection (red)";
			case "132":
				if ($showPitch == false) return "Pyroglyphic Protection";
				else return "Pyroglyphic Protection (yellow)";
			case "133":
				if ($showPitch == false) return "Pyroglyphic Protection";
				else return "Pyroglyphic Protection (blue)";
			case "134":
				if ($showPitch == false) return "Timekeeper's Whim";
				else return "Timekeeper's Whim (red)";
			case "135":
				if ($showPitch == false) return "Timekeeper's Whim";
				else return "Timekeeper's Whim (yellow)";
			case "136":
				if ($showPitch == false) return "Timekeeper's Whim";
				else return "Timekeeper's Whim (blue)";
			case "137":
				return "Crown of Reflection";
			case "138":
				if ($showPitch == false) return "Fractal Replication";
				else return "Fractal Replication (red)";
			case "139":
				if ($showPitch == false) return "Miraging Metamorph";
				else return "Miraging Metamorph (red)";
			case "140":
				if ($showPitch == false) return "Shimmers of Silver";
				else return "Shimmers of Silver (blue)";
			case "141":
				if ($showPitch == false) return "Haze Bending";
				else return "Haze Bending (blue)";
			case "142":
				if ($showPitch == false) return "Passing Mirage";
				else return "Passing Mirage (blue)";
			case "143":
				if ($showPitch == false) return "Pierce Reality";
				else return "Pierce Reality (blue)";
			case "144":
				if ($showPitch == false) return "Coalescence Mirage";
				else return "Coalescence Mirage (red)";
			case "145":
				if ($showPitch == false) return "Coalescence Mirage";
				else return "Coalescence Mirage (yellow)";
			case "146":
				if ($showPitch == false) return "Coalescence Mirage";
				else return "Coalescence Mirage (blue)";
			case "147":
				if ($showPitch == false) return "Phantasmal Haze";
				else return "Phantasmal Haze (red)";
			case "148":
				if ($showPitch == false) return "Phantasmal Haze";
				else return "Phantasmal Haze (red)";
			case "149":
				if ($showPitch == false) return "Phantasmal Haze";
				else return "Phantasmal Haze (blue)";
			case "150":
				if ($showPitch == false) return "Veiled Intentions";
				else return "Veiled Intentions (red)";
			case "151":
				if ($showPitch == false) return "Veiled Intentions";
				else return "Veiled Intentions (yellow)";
			case "152":
				if ($showPitch == false) return "Veiled Intentions";
				else return "Veiled Intentions (blue)";
			case "153":
				return "Spectral Shield";
			case "154":
				return "Arcanite Skullcap";
			case "155":
				return "Arcane Lantern";
			case "156":
				if ($showPitch == false) return "Bingo";
				else return "Bingo (red)";
			case "157":
				if ($showPitch == false) return "Firebreathing";
				else return "Firebreathing (red)";
			case "158":
				if ($showPitch == false) return "Cash Out";
				else return "Cash Out (blue)";
			case "159":
				if ($showPitch == false) return "Knick Knack Bric-a-brac";
				else return "Knick Knack Bric-a-brac (red)";
			case "160":
				if ($showPitch == false) return "This Round's on Me";
				else return "This Round's on Me (blue)";
			case "161":
				if ($showPitch == false) return "Life of the Party";
				else return "Life of the Party (red)";
			case "162":
				if ($showPitch == false) return "Life of the Party";
				else return "Life of the Party (yellow)";
			case "163":
				if ($showPitch == false) return "Life of the Party";
				else return "Life of the Party (blue)";
			case "164":
				if ($showPitch == false) return "High Striker";
				else return "High Striker (red)";
			case "165":
				if ($showPitch == false) return "High Striker";
				else return "High Striker (yellow)";
			case "166":
				if ($showPitch == false) return "High Striker";
				else return "High Striker (blue)";
			case "167":
				if ($showPitch == false) return "Pick a Card, Any Card";
				else return "Pick a Card, Any Card (red)";
			case "168":
				if ($showPitch == false) return "Pick a Card, Any Card";
				else return "Pick a Card, Any Card (yellow)";
			case "169":
				if ($showPitch == false) return "Pick a Card, Any Card";
				else return "Pick a Card, Any Card (blue)";
			case "170":
				if ($showPitch == false) return "Smashing Good Time";
				else return "Smashing Good Time (red)";
			case "171":
				if ($showPitch == false) return "Smashing Good Time";
				else return "Smashing Good Time (yellow)";
			case "172":
				if ($showPitch == false) return "Smashing Good Time";
				else return "Smashing Good Time (blue)";
			case "173":
				if ($showPitch == false) return "Even Bigger Than That!";
				else return "Even Bigger Than That! (red)";
			case "174":
				if ($showPitch == false) return "Even Bigger Than That!";
				else return "Even Bigger Than That! (yellow)";
			case "175":
				if ($showPitch == false) return "Even Bigger Than That!";
				else return "Even Bigger Than That! (blue)";
			case "176":
				if ($showPitch == false) return "Amulet of Assertiveness";
				else return "Amulet of Assertiveness (yellow)";
			case "177":
				if ($showPitch == false) return "Amulet of Echoes";
				else return "Amulet of Echoes (blue)";
			case "178":
				if ($showPitch == false) return "Amulet of Havencall";
				else return "Amulet of Havencall (blue)";
			case "179":
				if ($showPitch == false) return "Amulet of lgnition";
				else return "Amulet of lgnition (yellow)";
			case "180":
				if ($showPitch == false) return "Amulet of Intervention";
				else return "Amulet of Intervention (blue)";
			case "181":
				if ($showPitch == false) return "Amulet of Oblation";
				else return "Amulet of Oblation (blue)";
			case "182":
				if ($showPitch == false) return "Clarity Potion";
				else return "Clarity Potion (blue)";
			case "183":
				if ($showPitch == false) return "Healing Potion";
				else return "Healing Potion (blue)";
			case "184":
				if ($showPitch == false) return "Potion of Seeing";
				else return "Potion of Seeing (blue)";
			case "185":
				if ($showPitch == false) return "Potion of Déja Vu";
				else return "Potion of Déja Vu (blue)";
			case "186":
				if ($showPitch == false) return "Potion of lronhide";
				else return "Potion of lronhide (blue)";
			case "187":
				if ($showPitch == false) return "Potion of Luck";
				else return "Potion of Luck (blue)";
			case "188":
				if ($showPitch == false) return "Talisman of Balance";
				else return "Talisman of Balance (blue)";
			case "189":
				if ($showPitch == false) return "Talisman of Cremation";
				else return "Talisman of Cremation (blue)";
			case "190":
				if ($showPitch == false) return "Talisman of Featherfoot";
				else return "Talisman of Featherfoot (yellow)";
			case "191":
				if ($showPitch == false) return "Talisman of Recompense";
				else return "Talisman of Recompense (yellow)";
			case "192":
				if ($showPitch == false) return "Talisman of Tithes";
				else return "Talisman of Tithes (blue)";
			case "193":
				if ($showPitch == false) return "Talisman of Warfare";
				else return "Talisman of Warfare (yellow)";
			case "194":
				return "Copper";
			case "195":
				return "Silver";
			case "196":
				return "Quicken";
			case "197":
				return "Frostbite";
			case "198":
				return "Frostbite";
		}
	}
	return "";
}
