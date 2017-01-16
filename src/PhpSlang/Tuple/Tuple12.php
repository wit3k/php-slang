<?php

namespace PhpSlang\Tuple;

use PhpSlang\Collection\ListCollection;
use PhpSlang\Tuple\Get\Get01;
use PhpSlang\Tuple\Get\Get02;
use PhpSlang\Tuple\Get\Get03;
use PhpSlang\Tuple\Get\Get04;
use PhpSlang\Tuple\Get\Get05;
use PhpSlang\Tuple\Get\Get06;
use PhpSlang\Tuple\Get\Get07;
use PhpSlang\Tuple\Get\Get08;
use PhpSlang\Tuple\Get\Get09;
use PhpSlang\Tuple\Get\Get10;
use PhpSlang\Tuple\Get\Get11;
use PhpSlang\Tuple\Get\Get12;

class Tuple12 extends ListCollection
{
    use Get01;
    use Get02;
    use Get03;
    use Get04;
    use Get05;
    use Get06;
    use Get07;
    use Get08;
    use Get09;
    use Get10;
    use Get11;
    use Get12;

    public function __construct($it1, $it2, $it3, $it4, $it5, $it6, $it7, $it8, $it9, $it10, $it11, $it12)
    {
        parent::__construct([$it1, $it2, $it3, $it4, $it5, $it6, $it7, $it8, $it9, $it10, $it11, $it12]);
    }
}