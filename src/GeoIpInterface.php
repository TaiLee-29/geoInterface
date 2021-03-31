<?php

namespace Tai\Geo;


interface GeoIpInterface
{
public function continentCode();

public function countryCode();

public function parse($ip);

}
