<?php
/*
 * This file is part of the CurrencyDetector.
 *
 * (c) Máximo Cuadros <mcuadros@mcuadros.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CurrencyDetector;
use CurrencyDetector\Currency\Code;
use CurrencyDetector\Currency\Symbol;

class Detector
{
    protected $symbols;
    protected $codes;

    public function __construct()
    {
        $this->loadSymbols();
        $this->loadCodes();
    }

    protected function loadSymbols()
    {
        $this->symbols = Symbol::getSymbols();
    }

    protected function loadCodes()
    {
        $this->codes = Code::getCodes();
    }

    public function getCurrency($money)
    {
        $code = $this->getCurrencies($money);
        if ($code) {
            return $code[0];
        }

        return false;
    }

    public function getCurrencies($money)
    {
        $money = $this->decodeHTML($money);
        $money = $this->removeWhiteSpaceFromString($money);

        if ($has = $this->hasValidCurrencyInString($money, $this->codes)) {
            return $has;
        }

        if ($has = $this->hasValidCurrencyInString($money, $this->symbols)) {
            return $has;
        }

        return null;
    }

    public function getAmount($money)
    {
        $cleanString = preg_replace('/([^0-9\.,])/i', '', $money);
        $onlyNumbersString = preg_replace('/([^0-9])/i', '', $money);

        $separatorsCountToBeErased = strlen($cleanString) - strlen($onlyNumbersString) - 1;

        $stringWithCommaOrDot = preg_replace('/([,\.])/', '', $cleanString, $separatorsCountToBeErased);
        $removedThousendSeparator = preg_replace('/(\.|,)(?=[0-9]{3,}$)/', '',  $stringWithCommaOrDot);

        return (float) str_replace(',', '.', $removedThousendSeparator);
    }

    protected function hasValidCurrencyInString($money, Array $symbols)
    {  
        foreach ($symbols as $symbol => $codes) {
            if (stripos($money, $symbol) !== false) {
                return $codes;
            }
        }

        return null;
    }

    protected function removeWhiteSpaceFromString($string)
    {
        return preg_replace('/\s+/', '', $string);
    }

    protected function decodeHTML($string)
    {
        return html_entity_decode($string);
    }
}
