<?php

namespace Hello;

use PHPUnit\Framework\TestCase;


class testWorld extends TestCase
{
    public function testObSebUndMarcusAuchDabei()
    {
        $this->assertEquals("Das ist für dich Sebastian! DU AUCH MARCUS!!", World::say("Huhu"));
    }

}