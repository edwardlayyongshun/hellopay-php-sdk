<?php
/**
 * Copyright 2015 HELLOPAY SINGAPORE PTE. LTD.
 *
 * You are hereby granted a non-exclusive, worldwide, royalty-free license to
 * use, copy, modify, and distribute this software in source code or binary
 * form for use in connection with the web services and APIs provided by
 * helloPay.
 *
 * As with any software that integrates with the helloPay platform, your use
 * of this software is subject to the helloPay Developer Principles and
 * Policies [https://www.hellopay.com.sg/privacy-policy.html]. This copyright notice
 * shall be included in all copies or substantial portions of the software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 *
 */
namespace HelloPay\Helpers;

/**
 * Class Currency
 *
 * @package HelloPay
 */
class Currency
{
    /**
     * @const string the Singapore country code
     */
    const COUNTRY_CODE_SG = 'SG';

    /**
     * @const string the Philippines country code
     */
    const COUNTRY_CODE_PH = 'PH';

    /**
     * @const string the Indonesia country code
     */
    const COUNTRY_CODE_ID = 'ID';

    /**
     * @const string the Thailand country code
     */
    const COUNTRY_CODE_TH = 'TH';

    /**
     * @const string the Malaysia country code
     */
    const COUNTRY_CODE_MY = 'MY';

    /**
     * @const string the Vietnam country code
     */
    const COUNTRY_CODE_VN = 'VN';

    /**
     * @const string the currency code of Singapore
     */
    const CURRENCY_CODE_SG = 'SGD';

    /**
     * @const string the currency code of Philippines
     */
    const CURRENCY_CODE_PH = 'PHP';

    /**
     * @const string the currency code of Indonesia
     */
    const CURRENCY_CODE_ID = 'IDR';

    /**
     * @const string the currency code of Thailand
     */
    const CURRENCY_CODE_TH = 'THB';

    /**
     * @const string the currency code of Malaysia
     */
    const CURRENCY_CODE_MY = 'MYR';

    /**
     * @const string the currency code of Vietnam
     */
    const CURRENCY_CODE_VN = 'VND';

    /**
     * Get the supported currencies by countries
     * @return array
     */
    public static function getSupportedCurrencies()
    {
        return [
            static::COUNTRY_CODE_SG => static::CURRENCY_CODE_SG,
            static::COUNTRY_CODE_PH => static::CURRENCY_CODE_PH,
            static::COUNTRY_CODE_ID => static::CURRENCY_CODE_ID,
            static::COUNTRY_CODE_TH => static::CURRENCY_CODE_TH,
            static::COUNTRY_CODE_MY => static::CURRENCY_CODE_MY,
            static::COUNTRY_CODE_VN => static::CURRENCY_CODE_VN
        ];
    }

    /**
     * @param string $countryCode the given country code
     * @return string the currency|null
     */
    public static function getCurrencyByCountry($countryCode)
    {
        $currencyList = static::getSupportedCurrencies();

        if (isset($currencyList[$countryCode])) {
            return $currencyList[$countryCode];
        }

        return null;
    }
}
