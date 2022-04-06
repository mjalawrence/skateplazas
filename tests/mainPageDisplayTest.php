<?php

//mainPageDisplay unit test

require '../functions.php';

use PHPUnit\Framework\TestCase;

class mainPageDisplayTest extends TestCase {

    public function testSuccessMainPageDisplay() {
        $skatePlazas = [[
            'name' => 'Lloyds',
            'country' => 'UK',
            'city' => 'Bristol',
            'dob' => '1990',
            'status' => 1,
            'vibe' => 3,
            'photo' => 'https://eu-assets.simpleview-europe.com/bristol2014/imageresizer/?image=%2Fdmsimgs%2FAMP_free_to_use_1940492347.jpg&action=ProductDetailNew'
        ]];

        $expected = "<div class=plazas><h1>Lloyds</h1><div class=box style='background-image: url(https://eu-assets.simpleview-europe.com/bristol2014/imageresizer/?image=%2Fdmsimgs%2FAMP_free_to_use_1940492347.jpg&action=ProductDetailNew)'></div><p>Location: Bristol, UK</p><p>Date of construction: 1990</p><p>The good times are over. The authorities have already brought down the axe on this mecca of a by-gone era in skateboarding. RIP in peace.</p></div>";
        $case = mainPageDisplay($skatePlazas);

        $this->assertEquals($expected, $case);
    }

    public function testFailureMainPageDisplay() {
        $skatePlazas = [];

        $expected = '';

        $case = mainPageDisplay($skatePlazas);

        $this->assertEquals($expected, $case);
    }

    public function testMalformedMainPageDisplay() {
        $skatePlazas = 10008978723987;

        $this->expectException(TypeError::class);

        mainPageDisplay($skatePlazas);
    }
}
