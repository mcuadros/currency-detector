<?php
/*
 * This file is part of the CurrencyDetector.
 *
 * (c) Máximo Cuadros <mcuadros@mcuadros.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
namespace CurrencyDetector\Tests;
use CurrencyDetector\Detector;

class DetectorTest extends TestCase
{
    /**
     * @dataProvider providerGetAmount
     */
    public function testGetAmount($input, $expected)
    {
        $detector = new Detector();
        $result = $detector->getAmount($input);

        $this->assertSame($result, $expected);
    }

    public function providerGetAmount()
    {
        return array(
            ['1,10 USD', 1.10],
            ['1 000 000.00', 1000000.0],
            ['$1 000 000.21', 1000000.21],
            ['£1.10', 1.10],
            ['$123 456 789', 123456789.0],
            ['$123,456,789.12', 123456789.12],
            ['$123 456 789,12', 123456789.12],
            ['1.10', 1.1],
            [',,,,.10', .1]
        );
    }

    public function testGetCurrencies()
    {
        $detector = new Detector();
        $result = $detector->getCurrencies('100 ₱');

        $this->assertSame($result, ['CUP', 'PHP']);
    }

    /**
     * @dataProvider providerGetCurrency
     */
    public function testGetCurrency($string, $code)
    {
        $detector = new Detector();
        $result = $detector->getCurrency($string);

        $this->assertSame($result, $code);
    }

    public function providerGetCurrency()
    {
        return array(
            ['1,10 USD', 'USD'],
            ['$1.10', 'USD'],
            ['1,10 GBP', 'GBP'],
            ['£1.10', 'GBP'],
            ['1,10 EUR', 'EUR'],
            ['&euro;1.10', 'EUR'],
            ['212؋', 'AFN'],
            ['R$', 'BRL'],
            ['$1.10€', 'EUR'],
            ['1.10R', 'ZAR'],
            ['1.10', false]
        );
    }
}
