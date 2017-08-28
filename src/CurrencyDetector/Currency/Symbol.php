<?php
/*
 * This file is part of the CurrencyDetector.
 *
 * (c) Máximo Cuadros <mcuadros@mcuadros.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CurrencyDetector\Currency;
use ReflectionClass;

class Symbol
{
    /**
     * United Kingdom Pound
     * @var string
     */
    const GBP = '£';

    /**
     * United States Dollar
     * @var string
     */
    const USD = '$';

    /**
     * Albania Lek
     * @var string
     */
    const ALL = 'Lek';

    /**
     * Afghanistan Afghani
     * @var string
     */
    const AFN = '؋';

    /**
     * Argentina Peso
     * @var string
     */
    const ARS = '$';

    /**
     * Aruba Guilder
     * @var string
     */
    const AWG = 'ƒ';

    /**
     * Australia Dollar
     * @var string
     */
    const AUD = '$';

    /**
     * Azerbaijan New Manat
     * @var string
     */
    const AZN = 'ман';

    /**
     * Bahamas Dollar
     * @var string
     */
    const BSD = '$';

    /**
     * Barbados Dollar
     * @var string
     */
    const BBD = '$';

    /**
     * Belarus Ruble
     * @var string
     */
    const BYN = 'p.';

    /**
     * Belize Dollar
     * @var string
     */
    const BZD = 'BZ$';

    /**
     * Bermuda Dollar
     * @var string
     */
    const BMD = '$';

    /**
     * Bolivia Boliviano
     * @var string
     */
    const BOB = '$b';

    /**
     * Bosnia and Herzegovina Convertible Marka
     * @var string
     */
    const BAM = 'KM';

    /**
     * Botswana Pula
     * @var string
     */
    const BWP = 'P';

    /**
     * Bulgaria Lev
     * @var string
     */
    const BGN = 'лв';

    /**
     * Brazil Real
     * @var string
     */
    const BRL = 'R$';

    /**
     * Brunei Darussalam Dollar
     * @var string
     */
    const BND = '$';

    /**
     * Cambodia Riel
     * @var string
     */
    const KHR = '៛';

    /**
     * Canada Dollar
     * @var string
     */
    const CAD = '$';

    /**
     * Cayman Islands Dollar
     * @var string
     */
    const KYD = '$';

    /**
     * Chile Peso
     * @var string
     */
    const CLP = '$';

    /**
     * China Yuan Renminbi
     * @var string
     */
    const CNY = '¥';

    /**
     * Colombia Peso
     * @var string
     */
    const COP = '$';

    /**
     * Costa Rica Colon
     * @var string
     */
    const CRC = '₡';

    /**
     * Croatia Kuna
     * @var string
     */
    const HRK = 'kn';

    /**
     * Cuba Peso
     * @var string
     */
    const CUP = '₱';

    /**
     * Czech Republic Koruna
     * @var string
     */
    const CZK = 'Kč';

    /**
     * Denmark Krone
     * @var string
     */
    const DKK = 'kr';

    /**
     * Dominican Republic Peso
     * @var string
     */
    const DOP = 'RD$';

    /**
     * East Caribbean Dollar
     * @var string
     */
    const XCD = '$';

    /**
     * Egypt Pound
     * @var string
     */
    const EGP = '£';

    /**
     * El Salvador Colon
     * @var string
     */
    const SVC = '$';

    /**
     * Estonia Kroon
     * @var string
     */
    const EEK = 'kr';

    /**
     * Euro Member Countries
     * @var string
     */
    const EUR = '€';

    /**
     * Falkland Islands (Malvinas) Pound
     * @var string
     */
    const FKP = '£';

    /**
     * Fiji Dollar
     * @var string
     */
    const FJD = '$';

    /**
     * Ghana Cedis
     * @var string
     */
    const GHC = '¢';

    /**
     * Gibraltar Pound
     * @var string
     */
    const GIP = '£';

    /**
     * Guatemala Quetzal
     * @var string
     */
    const GTQ = 'Q';

    /**
     * Guernsey Pound
     * @var string
     */
    const GGP = '£';

    /**
     * Guyana Dollar
     * @var string
     */
    const GYD = '$';

    /**
     * Honduras Lempira
     * @var string
     */
    const HNL = 'L';

    /**
     * Hong Kong Dollar
     * @var string
     */
    const HKD = '$';

    /**
     * Hungary Forint
     * @var string
     */
    const HUF = 'Ft';

    /**
     * Iceland Krona
     * @var string
     */
    const ISK = 'kr';

    /**
     * India Rupee
     * @var string
     */
    const INR = '₹';

    /**
     * Indonesia Rupiah
     * @var string
     */
    const IDR = 'Rp';

    /**
     * Iran Rial
     * @var string
     */
    const IRR = '﷼';

    /**
     * Isle of Man Pound
     * @var string
     */
    const IMP = '£';

    /**
     * Israel Shekel
     * @var string
     */
    const ILS = '₪';

    /**
     * Jamaica Dollar
     * @var string
     */
    const JMD = 'J$';

    /**
     * Japan Yen
     * @var string
     */
    const JPY = '¥';

    /**
     * Jersey Pound
     * @var string
     */
    const JEP = '£';

    /**
     * Kazakhstan Tenge
     * @var string
     */
    const KZT = 'лв';

    /**
     * Korea (North) Won
     * @var string
     */
    const KPW = '₩';

    /**
     * Korea (South) Won
     * @var string
     */
    const KRW = '₩';

    /**
     * Kyrgyzstan Som
     * @var string
     */
    const KGS = 'лв';

    /**
     * Laos Kip
     * @var string
     */
    const LAK = '₭';

    /**
     * Latvia Lat
     * @var string
     */
    const LVL = 'Ls';

    /**
     * Lebanon Pound
     * @var string
     */
    const LBP = '£';

    /**
     * Liberia Dollar
     * @var string
     */
    const LRD = '$';

    /**
     * Lithuania Litas
     * @var string
     */
    const LTL = 'Lt';

    /**
     * Macedonia Denar
     * @var string
     */
    const MKD = 'ден';

    /**
     * Malaysia Ringgit
     * @var string
     */
    const MYR = 'RM';

    /**
     * Mauritius Rupee
     * @var string
     */
    const MUR = '₨';

    /**
     * Mexico Peso
     * @var string
     */
    const MXN = '$';

    /**
     * Mongolia Tughrik
     * @var string
     */
    const MNT = '₮';

    /**
     * Mozambique Metical
     * @var string
     */
    const MZN = 'MT';

    /**
     * Namibia Dollar
     * @var string
     */
    const NAD = '$';

    /**
     * Nepal Rupee
     * @var string
     */
    const NPR = '₨';

    /**
     * Netherlands Antilles Guilder
     * @var string
     */
    const ANG = 'ƒ';

    /**
     * New Zealand Dollar
     * @var string
     */
    const NZD = '$';

    /**
     * Nicaragua Cordoba
     * @var string
     */
    const NIO = 'C$';

    /**
     * Nigeria Naira
     * @var string
     */
    const NGN = '₦';

    /**
     * Norway Krone
     * @var string
     */
    const NOK = 'kr';

    /**
     * Oman Rial
     * @var string
     */
    const OMR = '﷼';

    /**
     * Pakistan Rupee
     * @var string
     */
    const PKR = '₨';

    /**
     * Panama Balboa
     * @var string
     */
    const PAB = 'B/.';

    /**
     * Paraguay Guarani
     * @var string
     */
    const PYG = 'Gs';

    /**
     * Peru Nuevo Sol
     * @var string
     */
    const PEN = 'S/.';

    /**
     * Philippines Peso
     * @var string
     */
    const PHP = '₱';

    /**
     * Poland Zloty
     * @var string
     */
    const PLN = 'zł';

    /**
     * Qatar Riyal
     * @var string
     */
    const QAR = '﷼';

    /**
     * Romania New Leu
     * @var string
     */
    const RON = 'lei';

    /**
     * Russia Ruble
     * @var string
     */
    const RUB = 'руб';

    /**
     * Saint Helena Pound
     * @var string
     */
    const SHP = '£';

    /**
     * Saudi Arabia Riyal
     * @var string
     */
    const SAR = '﷼';

    /**
     * Serbia Dinar
     * @var string
     */
    const RSD = 'Дин.';

    /**
     * Seychelles Rupee
     * @var string
     */
    const SCR = '₨';

    /**
     * Singapore Dollar
     * @var string
     */
    const SGD = '$';

    /**
     * Solomon Islands Dollar
     * @var string
     */
    const SBD = '$';

    /**
     * Somalia Shilling
     * @var string
     */
    const SOS = 'S';

    /**
     * South Africa Rand
     * @var string
     */
    const ZAR = 'R';

    /**
     * Sri Lanka Rupee
     * @var string
     */
    const LKR = '₨';

    /**
     * Sweden Krona
     * @var string
     */
    const SEK = 'kr';

    /**
     * Switzerland Franc
     * @var string
     */
    const CHF = 'CHF';

    /**
     * Suriname Dollar
     * @var string
     */
    const SRD = '$';

    /**
     * Syria Pound
     * @var string
     */
    const SYP = '£';

    /**
     * Taiwan New Dollar
     * @var string
     */
    const TWD = 'NT$';

    /**
     * Thailand Baht
     * @var string
     */
    const THB = '฿';

    /**
     * Trinidad and Tobago Dollar
     * @var string
     */
    const TTD = 'TT$';

    /**
     * Turkey Lira
     * @var string
     */
    const TRL = '₤';

    /**
     * Tuvalu Dollar
     * @var string
     */
    const TVD = '$';

    /**
     * Ukraine Hryvna
     * @var string
     */
    const UAH = '₴';

    /**
     * Uruguay Peso
     * @var string
     */
    const UYU = '$U';

    /**
     * Uzbekistan Som
     * @var string
     */
    const UZS = 'лв';

    /**
     * Venezuela Bolivar
     * @var string
     */
    const VEF = 'Bs';

    /**
     * Viet Nam Dong
     * @var string
     */
    const VND = '₫';

    /**
     * Yemen Rial
     * @var string
     */
    const YER = '﷼';

    /**
     * Zimbabwe Dollar
     * @var string
     */
    const ZWD = 'Z$';

    static public function getSymbols()
    {
        $class = new ReflectionClass(__CLASS__);

        $symbolsByComplex = [];
        foreach($class->getConstants() as $code => $symbol) {
            $complexity = static::getSymbolComplexity($symbol);
            $symbolsByComplex[$complexity][$symbol][] = $code;
        }

        krsort($symbolsByComplex);

        $symbols = [];
        foreach ($symbolsByComplex as $array) {
            $symbols = array_merge($symbols, $array);
        }

        return $symbols;
    }

    static protected function getSymbolComplexity($symbol)
    {
        $sum = 0;
        for ($i=0; $i < strlen($symbol); $i++) { 
            $code = ord($symbol[$i]);
            if ($code > 128 || ord($symbol[$i]) == 36) {
                $sum += 100;
            } else {
                $sum += 1;
            }
        }

        return $sum;
    }
}