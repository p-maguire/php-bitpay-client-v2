<?php

declare(strict_types=1);

/**
 * @author BitPay Integrations <integrations@bitpay.com>
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 */

namespace BitPaySDK\Model\Invoice;

/**
 * This object will be available on the invoice if a shopper signs in on an invoice using his BitPay ID.
 * See the following blogpost for more information.
 */
class Shopper
{
    protected ?string $user = null;

    public function __construct()
    {
    }

    /**
     * Gets user
     *
     * If a shopper signs in on the invoice using his BitPay ID,
     * this field will contain the unique ID assigned by BitPay to this shopper.
     *
     * @return string|null the user
     */
    public function getUser(): ?string
    {
        return $this->user;
    }

    /**
     * Sets user
     *
     * If a shopper signs in on the invoice using his BitPay ID,
     * this field will contain the unique ID assigned by BitPay to this shopper.
     *
     * @param string $user the user
     */
    public function setUser(string $user): void
    {
        $this->user = $user;
    }

    /**
     * Gets Shopper as array
     *
     * @return array shopper as array
     */
    public function toArray(): array
    {
        $elements = [
            'user' => $this->getUser(),
        ];

        foreach ($elements as $key => $value) {
            if (empty($value)) {
                unset($elements[$key]);
            }
        }

        return $elements;
    }
}
