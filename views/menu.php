<?php

namespace PHPMaker2022\HolisRegencyAirRecordAll;

// Menu Language
if ($Language && function_exists(PROJECT_NAMESPACE . "Config") && $Language->LanguageFolder == Config("LANGUAGE_FOLDER")) {
    $MenuRelativePath = "";
    $MenuLanguage = &$Language;
} else { // Compat reports
    $LANGUAGE_FOLDER = "../lang/";
    $MenuRelativePath = "../";
    $MenuLanguage = Container("language");
}

// Navbar menu
$topMenu = new Menu("navbar", true, true);
echo $topMenu->toScript();

// Sidebar menu
$sideMenu = new Menu("menu", true, false);
$sideMenu->addMenuItem(1, "mi_air2406", $MenuLanguage->MenuPhrase("1", "MenuText"), $MenuRelativePath . "Air2406List", -1, "", true, false, false, "", "", false);
$sideMenu->addMenuItem(2, "mi_air2405", $MenuLanguage->MenuPhrase("2", "MenuText"), $MenuRelativePath . "Air2405List", -1, "", true, false, false, "", "", false);
$sideMenu->addMenuItem(3, "mi_air2404", $MenuLanguage->MenuPhrase("3", "MenuText"), $MenuRelativePath . "Air2404List", -1, "", true, false, false, "", "", false);
$sideMenu->addMenuItem(4, "mi_air2403", $MenuLanguage->MenuPhrase("4", "MenuText"), $MenuRelativePath . "Air2403List", -1, "", true, false, false, "", "", false);
$sideMenu->addMenuItem(5, "mi_air2402", $MenuLanguage->MenuPhrase("5", "MenuText"), $MenuRelativePath . "Air2402List", -1, "", true, false, false, "", "", false);
$sideMenu->addMenuItem(6, "mi_air2401", $MenuLanguage->MenuPhrase("6", "MenuText"), $MenuRelativePath . "Air2401List", -1, "", true, false, false, "", "", false);
$sideMenu->addMenuItem(7, "mi_air2312", $MenuLanguage->MenuPhrase("7", "MenuText"), $MenuRelativePath . "Air2312List", -1, "", true, false, false, "", "", false);
$sideMenu->addMenuItem(8, "mi_air2311", $MenuLanguage->MenuPhrase("8", "MenuText"), $MenuRelativePath . "Air2311List", -1, "", true, false, false, "", "", false);
$sideMenu->addMenuItem(9, "mi_air2310", $MenuLanguage->MenuPhrase("9", "MenuText"), $MenuRelativePath . "Air2310List", -1, "", true, false, false, "", "", false);
echo $sideMenu->toScript();
