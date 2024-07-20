<?php

namespace PHPMaker2022\HolisRegencyAirRecordAll;

/**
 * Chart renderer interface
 */
interface ChartRendererInterface
{

    public function getContainer($width, $height);

    public function getScript($width, $height);
}
