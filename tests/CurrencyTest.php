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

namespace HelloPay\Tests;

use HelloPay\HelloPayResponse;
use HelloPay\Helpers\Currency;

/**
 * Class CurrencyTest
 *
 * @package HelloPay
 */
class CurrencyTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider getCurrencyDataProvider
     */
    public function testWholeCurrencyList($list)
    {
        $currencyList = Currency::getSupportedCurrencies();

        $this->assertEquals($list, $currencyList);
    }

    /**
     * @dataProvider getCurrencyDataProvider
     */
    public function testGetCurrencyByCountry($list)
    {
        foreach ($list as $country => $currency) {
            $this->assertEquals($currency, Currency::getCurrencyByCountry($country));
        }

        $this->assertNull(Currency::getCurrencyByCountry('ABC'));
    }

    public function getCurrencyDataProvider()
    {
        return [[[
            'SG' => 'SGD',
            'PH' => 'PHP',
            'ID' => 'IDR',
            'TH' => 'THB',
            'MY' => 'MYR',
            'VN' => 'VND',
        ]]];
    }
}
