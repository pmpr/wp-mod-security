<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a2f458b78a4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Security\Recaptcha; use Exception; use Pmpr\Common\Foundation\API\API as BaseClass; class API extends BaseClass { public function __construct() { $this->domain = "\x68\164\x74\x70\163\72\57\x2f\167\167\167\x2e\x67\157\157\x67\x6c\x65\56\x63\x6f\x6d\57\x72\145\x63\x61\x70\x74\x63\150\141\x2f\141\x70\151"; $this->ueqoossgegqyosem(["\163\145\x63\162\145\164" => null, "\x72\145\163\x70\x6f\x6e\163\x65" => null]); parent::__construct(); } public function iywiwaoieigskusm($agguukmgmwmmmcow, $keccaugmemegoimu, $yeceiswwssseqgqc, array $qiouiwasaauyaaue = []) { $kuukgsmqkagwaciu = null; $iswcokucwmiosiaq = null; $occymigcemkqucuw = false; try { $this->ueqoossgegqyosem(["\163\x65\143\162\145\164" => $agguukmgmwmmmcow, "\162\x65\x73\x70\157\x6e\163\x65" => $keccaugmemegoimu, "\162\x65\155\x6f\164\145\x69\x70" => $yeceiswwssseqgqc], true); $kuukgsmqkagwaciu = $this->get("\x2f\x73\x69\164\x65\x76\x65\162\151\146\171", $qiouiwasaauyaaue); $kuukgsmqkagwaciu = $this->qemyqseaomicaacs($kuukgsmqkagwaciu); if (!$kuukgsmqkagwaciu) { goto sciwggaeogcoesiu; } $occymigcemkqucuw = true; sciwggaeogcoesiu: } catch (Exception $wgaoewqkwgomoaai) { $iswcokucwmiosiaq = $this->kyacickkomkioeyu($wgaoewqkwgomoaai); } return $occymigcemkqucuw && $kuukgsmqkagwaciu ? $kuukgsmqkagwaciu : [self::ckcawaoawwioqecq => false, "\x65\162\x72\157\x72\55\x63\x6f\x64\145\163" => ["\x67\x65\156\145\162\x61\x6c\55\146\141\x69\154"], self::imkacwmiuiykyuim => $iswcokucwmiosiaq]; } }
