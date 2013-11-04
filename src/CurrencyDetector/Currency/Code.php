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

class Code
{
    /**
     * Albania Lek
     * @var string
     */
    const ALL = 'Albania Lek';

    /**
     * Afghanistan Afghani
     * @var string
     */
    const AFN = 'Afghanistan Afghani';

    /**
     * Argentina Peso
     * @var string
     */
    const ARS = 'Argentina Peso';

    /**
     * Aruba Guilder
     * @var string
     */
    const AWG = 'Aruba Guilder';

    /**
     * Australia Dollar
     * @var string
     */
    const AUD = 'Australia Dollar';

    /**
     * Azerbaijan New Manat
     * @var string
     */
    const AZN = 'Azerbaijan New Manat';

    /**
     * Bahamas Dollar
     * @var string
     */
    const BSD = 'Bahamas Dollar';

    /**
     * Barbados Dollar
     * @var string
     */
    const BBD = 'Barbados Dollar';

    /**
     * Belarus Ruble
     * @var string
     */
    const BYR = 'Belarus Ruble';

    /**
     * Belize Dollar
     * @var string
     */
    const BZD = 'Belize Dollar';

    /**
     * Bermuda Dollar
     * @var string
     */
    const BMD = 'Bermuda Dollar';

    /**
     * Bolivia Boliviano
     * @var string
     */
    const BOB = 'Bolivia Boliviano';

    /**
     * Bosnia and Herzegovina Convertible Marka
     * @var string
     */
    const BAM = 'Bosnia and Herzegovina Convertible Marka';

    /**
     * Botswana Pula
     * @var string
     */
    const BWP = 'Botswana Pula';

    /**
     * Bulgaria Lev
     * @var string
     */
    const BGN = 'Bulgaria Lev';

    /**
     * Brazil Real
     * @var string
     */
    const BRL = 'Brazil Real';

    /**
     * Brunei Darussalam Dollar
     * @var string
     */
    const BND = 'Brunei Darussalam Dollar';

    /**
     * Cambodia Riel
     * @var string
     */
    const KHR = 'Cambodia Riel';

    /**
     * Canada Dollar
     * @var string
     */
    const CAD = 'Canada Dollar';

    /**
     * Cayman Islands Dollar
     * @var string
     */
    const KYD = 'Cayman Islands Dollar';

    /**
     * Chile Peso
     * @var string
     */
    const CLP = 'Chile Peso';

    /**
     * China Yuan Renminbi
     * @var string
     */
    const CNY = 'China Yuan Renminbi';

    /**
     * Colombia Peso
     * @var string
     */
    const COP = 'Colombia Peso';

    /**
     * Costa Rica Colon
     * @var string
     */
    const CRC = 'Costa Rica Colon';

    /**
     * Croatia Kuna
     * @var string
     */
    const HRK = 'Croatia Kuna';

    /**
     * Cuba Peso
     * @var string
     */
    const CUP = 'Cuba Peso';

    /**
     * Czech Republic Koruna
     * @var string
     */
    const CZK = 'Czech Republic Koruna';

    /**
     * Denmark Krone
     * @var string
     */
    const DKK = 'Denmark Krone';

    /**
     * Dominican Republic Peso
     * @var string
     */
    const DOP = 'Dominican Republic Peso';

    /**
     * East Caribbean Dollar
     * @var string
     */
    const XCD = 'East Caribbean Dollar';

    /**
     * Egypt Pound
     * @var string
     */
    const EGP = 'Egypt Pound';

    /**
     * El Salvador Colon
     * @var string
     */
    const SVC = 'El Salvador Colon';

    /**
     * Estonia Kroon
     * @var string
     */
    const EEK = 'Estonia Kroon';

    /**
     * Euro Member Countries
     * @var string
     */
    const EUR = 'Euro Member Countries';

    /**
     * Falkland Islands (Malvinas) Pound
     * @var string
     */
    const FKP = 'Falkland Islands (Malvinas) Pound';

    /**
     * Fiji Dollar
     * @var string
     */
    const FJD = 'Fiji Dollar';

    /**
     * Ghana Cedis
     * @var string
     */
    const GHC = 'Ghana Cedis';

    /**
     * Gibraltar Pound
     * @var string
     */
    const GIP = 'Gibraltar Pound';

    /**
     * Guatemala Quetzal
     * @var string
     */
    const GTQ = 'Guatemala Quetzal';

    /**
     * Guernsey Pound
     * @var string
     */
    const GGP = 'Guernsey Pound';

    /**
     * Guyana Dollar
     * @var string
     */
    const GYD = 'Guyana Dollar';

    /**
     * Honduras Lempira
     * @var string
     */
    const HNL = 'Honduras Lempira';

    /**
     * Hong Kong Dollar
     * @var string
     */
    const HKD = 'Hong Kong Dollar';

    /**
     * Hungary Forint
     * @var string
     */
    const HUF = 'Hungary Forint';

    /**
     * Iceland Krona
     * @var string
     */
    const ISK = 'Iceland Krona';

    /**
     * India Rupee
     * @var string
     */
    const INR = 'India Rupee';

    /**
     * Indonesia Rupiah
     * @var string
     */
    const IDR = 'Indonesia Rupiah';

    /**
     * Iran Rial
     * @var string
     */
    const IRR = 'Iran Rial';

    /**
     * Isle of Man Pound
     * @var string
     */
    const IMP = 'Isle of Man Pound';

    /**
     * Israel Shekel
     * @var string
     */
    const ILS = 'Israel Shekel';

    /**
     * Jamaica Dollar
     * @var string
     */
    const JMD = 'Jamaica Dollar';

    /**
     * Japan Yen
     * @var string
     */
    const JPY = 'Japan Yen';

    /**
     * Jersey Pound
     * @var string
     */
    const JEP = 'Jersey Pound';

    /**
     * Kazakhstan Tenge
     * @var string
     */
    const KZT = 'Kazakhstan Tenge';

    /**
     * Korea (North) Won
     * @var string
     */
    const KPW = 'Korea (North) Won';

    /**
     * Kyrgyzstan Som
     * @var string
     */
    const KGS = 'Kyrgyzstan Som';

    /**
     * Laos Kip
     * @var string
     */
    const LAK = 'Laos Kip';

    /**
     * Latvia Lat
     * @var string
     */
    const LVL = 'Latvia Lat';

    /**
     * Lebanon Pound
     * @var string
     */
    const LBP = 'Lebanon Pound';

    /**
     * Liberia Dollar
     * @var string
     */
    const LRD = 'Liberia Dollar';

    /**
     * Lithuania Litas
     * @var string
     */
    const LTL = 'Lithuania Litas';

    /**
     * Macedonia Denar
     * @var string
     */
    const MKD = 'Macedonia Denar';

    /**
     * Malaysia Ringgit
     * @var string
     */
    const MYR = 'Malaysia Ringgit';

    /**
     * Mauritius Rupee
     * @var string
     */
    const MUR = 'Mauritius Rupee';

    /**
     * Mexico Peso
     * @var string
     */
    const MXN = 'Mexico Peso';

    /**
     * Mongolia Tughrik
     * @var string
     */
    const MNT = 'Mongolia Tughrik';

    /**
     * Mozambique Metical
     * @var string
     */
    const MZN = 'Mozambique Metical';

    /**
     * Namibia Dollar
     * @var string
     */
    const NAD = 'Namibia Dollar';

    /**
     * Nepal Rupee
     * @var string
     */
    const NPR = 'Nepal Rupee';

    /**
     * Netherlands Antilles Guilder
     * @var string
     */
    const ANG = 'Netherlands Antilles Guilder';

    /**
     * New Zealand Dollar
     * @var string
     */
    const NZD = 'New Zealand Dollar';

    /**
     * Nicaragua Cordoba
     * @var string
     */
    const NIO = 'Nicaragua Cordoba';

    /**
     * Nigeria Naira
     * @var string
     */
    const NGN = 'Nigeria Naira';

    /**
     * Norway Krone
     * @var string
     */
    const NOK = 'Norway Krone';

    /**
     * Oman Rial
     * @var string
     */
    const OMR = 'Oman Rial';

    /**
     * Pakistan Rupee
     * @var string
     */
    const PKR = 'Pakistan Rupee';

    /**
     * Panama Balboa
     * @var string
     */
    const PAB = 'Panama Balboa';

    /**
     * Paraguay Guarani
     * @var string
     */
    const PYG = 'Paraguay Guarani';

    /**
     * Peru Nuevo Sol
     * @var string
     */
    const PEN = 'Peru Nuevo Sol';

    /**
     * Philippines Peso
     * @var string
     */
    const PHP = 'Philippines Peso';

    /**
     * Poland Zloty
     * @var string
     */
    const PLN = 'Poland Zloty';

    /**
     * Qatar Riyal
     * @var string
     */
    const QAR = 'Qatar Riyal';

    /**
     * Romania New Leu
     * @var string
     */
    const RON = 'Romania New Leu';

    /**
     * Russia Ruble
     * @var string
     */
    const RUB = 'Russia Ruble';

    /**
     * Saint Helena Pound
     * @var string
     */
    const SHP = 'Saint Helena Pound';

    /**
     * Saudi Arabia Riyal
     * @var string
     */
    const SAR = 'Saudi Arabia Riyal';

    /**
     * Serbia Dinar
     * @var string
     */
    const RSD = 'Serbia Dinar';

    /**
     * Seychelles Rupee
     * @var string
     */
    const SCR = 'Seychelles Rupee';

    /**
     * Singapore Dollar
     * @var string
     */
    const SGD = 'Singapore Dollar';

    /**
     * Solomon Islands Dollar
     * @var string
     */
    const SBD = 'Solomon Islands Dollar';

    /**
     * Somalia Shilling
     * @var string
     */
    const SOS = 'Somalia Shilling';

    /**
     * South Africa Rand
     * @var string
     */
    const ZAR = 'South Africa Rand';

    /**
     * Korea (South) Won
     * @var string
     */
    const KRW = 'Korea (South) Won';

    /**
     * Sri Lanka Rupee
     * @var string
     */
    const LKR = 'Sri Lanka Rupee';

    /**
     * Sweden Krona
     * @var string
     */
    const SEK = 'Sweden Krona';

    /**
     * Switzerland Franc
     * @var string
     */
    const CHF = 'Switzerland Franc';

    /**
     * Suriname Dollar
     * @var string
     */
    const SRD = 'Suriname Dollar';

    /**
     * Syria Pound
     * @var string
     */
    const SYP = 'Syria Pound';

    /**
     * Taiwan New Dollar
     * @var string
     */
    const TWD = 'Taiwan New Dollar';

    /**
     * Thailand Baht
     * @var string
     */
    const THB = 'Thailand Baht';

    /**
     * Trinidad and Tobago Dollar
     * @var string
     */
    const TTD = 'Trinidad and Tobago Dollar';

    /**
     * Turkey Lira
     * @var string
     */
    const TRL = 'Turkey Lira';

    /**
     * Tuvalu Dollar
     * @var string
     */
    const TVD = 'Tuvalu Dollar';

    /**
     * Ukraine Hryvna
     * @var string
     */
    const UAH = 'Ukraine Hryvna';

    /**
     * United Kingdom Pound
     * @var string
     */
    const GBP = 'United Kingdom Pound';

    /**
     * United States Dollar
     * @var string
     */
    const USD = 'United States Dollar';

    /**
     * Uruguay Peso
     * @var string
     */
    const UYU = 'Uruguay Peso';

    /**
     * Uzbekistan Som
     * @var string
     */
    const UZS = 'Uzbekistan Som';

    /**
     * Venezuela Bolivar
     * @var string
     */
    const VEF = 'Venezuela Bolivar';

    /**
     * Viet Nam Dong
     * @var string
     */
    const VND = 'Viet Nam Dong';

    /**
     * Yemen Rial
     * @var string
     */
    const YER = 'Yemen Rial';

    /**
     * Zimbabwe Dollar
     * @var string
     */
    const ZWD = 'Zimbabwe Dollar';

    static public function getCodes()
    {
        $class = new ReflectionClass(__CLASS__);

        $codes = [];
        foreach($class->getConstants() as $code => $symbol) {
            $codes[$code][] = $code;
        }

        return $codes;
    }
}