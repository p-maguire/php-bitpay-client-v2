<?php

/**
 * @author BitPay Integrations <integrations@bitpay.com>
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 */

namespace BitPaySDK\Model\Invoice;

/**
 * Object containing wallet-specific URLs for payment protocol.
 */
class UniversalCodes
{
    protected $paymentString;
    protected $verificationLink;

    public function __construct()
    {
    }

    /**
     * Gets payment string
     *
     * Payment protocol URL for selected wallet, defaults to BitPay URL if no wallet selected.
     *
     * @return string|null the payment string
     */
    public function getPaymentString(): ?string
    {
        return $this->paymentString;
    }

    /**
     * Sets payment string
     *
     * Payment protocol URL for selected wallet, defaults to BitPay URL if no wallet selected.
     *
     * @param string $paymentString the payment string
     */
    public function setPaymentString(string $paymentString): void
    {
        $this->paymentString = $paymentString;
    }

    /**
     * Gets verification link
     *
     * Link to bring user to BitPay ID flow, only present when bitpayIdRequired is true.
     *
     * @return string|null
     */
    public function getVerificationLink(): ?string
    {
        return $this->verificationLink;
    }

    /**
     * Sets verification link
     *
     * Link to bring user to BitPay ID flow, only present when bitpayIdRequired is true.
     *
     * @param string $verificationLink the verification link
     */
    public function setVerificationLink(string $verificationLink): void
    {
        $this->verificationLink = $verificationLink;
    }

    /**
     * Gets Universal codes as array
     *
     * @return array universal codes as array
     */
    public function toArray(): array
    {
        return [
            'paymentString' => $this->getPaymentString(),
            'verificationLink' => $this->getVerificationLink(),
        ];
    }
}
