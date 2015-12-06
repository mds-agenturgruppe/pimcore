<?php
/**
 * Pimcore
 *
 * This source file is subject to the GNU General Public License version 3 (GPLv3)
 * For the full copyright and license information, please view the LICENSE.md and gpl-3.0.txt
 * files that are distributed with this source code.
 *
 * @copyright  Copyright (c) 2009-2015 pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GNU General Public License version 3 (GPLv3)
 */


/**
 * Abstract base class for order pimcore objects
 */
class OnlineShop_Framework_AbstractOrder extends \Pimcore\Model\Object\Concrete {

    const ORDER_STATE_COMMITTED = "committed";
    const ORDER_STATE_CANCELLED = "cancelled";
    const ORDER_STATE_PAYMENT_PENDING = "paymentPending";
    const ORDER_STATE_PAYMENT_AUTHORIZED = "paymentAuthorized";
    const ORDER_STATE_ABORTED = "aborted";

    /**
     * @return string
     * @throws \OnlineShop\Framework\Exception\UnsupportedException
     */
    public function getOrdernumber() {
        throw new \OnlineShop\Framework\Exception\UnsupportedException("getOrdernumber is not implemented for " . get_class($this));
    }

    /**
     * @param string $ordernumber
     * @throws \OnlineShop\Framework\Exception\UnsupportedException
     */
    public function setOrdernumber($ordernumber) {
        throw new \OnlineShop\Framework\Exception\UnsupportedException("setOrdernumber is not implemented for " . get_class($this));
    }

    /**
     * @throws \OnlineShop\Framework\Exception\UnsupportedException
     * @return float
     */
    public function getSubTotalPrice() {
        throw new \OnlineShop\Framework\Exception\UnsupportedException("getSubTotalPrice is not implemented for " . get_class($this));
    }

    /**
     * @throws \OnlineShop\Framework\Exception\UnsupportedException
     * @param float $subTotalPrice
     */
    public function setSubTotalPrice($subTotalPrice) {
        throw new \OnlineShop\Framework\Exception\UnsupportedException("setSubTotalPrice is not implemented for " . get_class($this));
    }

    /**
     * @throws \OnlineShop\Framework\Exception\UnsupportedException
     * @return float
     */
    public function getTotalPrice() {
        throw new \OnlineShop\Framework\Exception\UnsupportedException("getTotalPrice is not implemented for " . get_class($this));
    }

    /**
     * @throws \OnlineShop\Framework\Exception\UnsupportedException
     * @param float $totalPrice
     */
    public function setTotalPrice($totalPrice) {
        throw new \OnlineShop\Framework\Exception\UnsupportedException("setTotalPrice is not implemented for " . get_class($this));
    }

    /**
     * @throws \OnlineShop\Framework\Exception\UnsupportedException
     * @return Zend_Date
     */
    public function getOrderdate() {
        throw new \OnlineShop\Framework\Exception\UnsupportedException("getOrderdate is not implemented for " . get_class($this));
    }

    /**
     * @throws \OnlineShop\Framework\Exception\UnsupportedException
     * @param Zend_Date $orderdate
     */
    public function setOrderdate($orderdate) {
        throw new \OnlineShop\Framework\Exception\UnsupportedException("setOrderdate is not implemented for " . get_class($this));
    }

    /**
     * @throws \OnlineShop\Framework\Exception\UnsupportedException
     * @return OnlineShop_Framework_AbstractOrderItem[]
     */
    public function getItems() {
        throw new \OnlineShop\Framework\Exception\UnsupportedException("getItems is not implemented for " . get_class($this));
    }

    /**
     * @param OnlineShop_Framework_AbstractOrderItem[] $items
     * @throws \OnlineShop\Framework\Exception\UnsupportedException
     */
    public function setItems($items) {
        throw new \OnlineShop\Framework\Exception\UnsupportedException("setItems is not implemented for " . get_class($this));
    }

    /**
     * @throws \OnlineShop\Framework\Exception\UnsupportedException
     * committed
     * @return mixed
     */
    public function getCustomer() {
        throw new \OnlineShop\Framework\Exception\UnsupportedException("getCustomer is not implemented for " . get_class($this));
    }

    /**
     * @throws \OnlineShop\Framework\Exception\UnsupportedException
     * @param mixed $customer
     */
    public function setCustomer($customer) {
        throw new \OnlineShop\Framework\Exception\UnsupportedException("setCustomer is not implemented for " . get_class($this));
    }

    /**
     * @throws \OnlineShop\Framework\Exception\UnsupportedException
     * @return \Pimcore\Model\Object\Fieldcollection
     */
    public function getPriceModifications() {
        throw new \OnlineShop\Framework\Exception\UnsupportedException("getPriceModifications is not implemented for " . get_class($this));
    }

    /**
     * @param \Pimcore\Model\Object\Fieldcollection $priceModifications
     * @return void
     */
    public function setPriceModifications ($priceModifications) {
        throw new \OnlineShop\Framework\Exception\UnsupportedException("setPriceModifications is not implemented for " . get_class($this));
    }

    /**
     * @return string
     */
    public function getOrderState() {
        throw new \OnlineShop\Framework\Exception\UnsupportedException("getOrderState is not implemented for " . get_class($this));
    }

    /**
     * @param string $orderState
     * @return $this
     */
    public function setOrderState ($orderState) {
        throw new \OnlineShop\Framework\Exception\UnsupportedException("setOrderState is not implemented for " . get_class($this));
    }


    /**
     * @return string
     */
    public function getCartId() {
        throw new \OnlineShop\Framework\Exception\UnsupportedException("getCartId is not implemented for " . get_class($this));
    }

    /**
     * @param string $cartId
     * @return void
     */
    public function setCartId($cartId) {
        throw new \OnlineShop\Framework\Exception\UnsupportedException("setCartId is not implemented for " . get_class($this));
    }

    /**
     * @throws \OnlineShop\Framework\Exception\UnsupportedException
     * @return \Pimcore\Model\Object\Fieldcollection
     */
    public function getPaymentInfo() {
        throw new \OnlineShop\Framework\Exception\UnsupportedException("getPaymentInfo is not implemented for " . get_class($this));
    }

    /**
     * @param \Pimcore\Model\Object\Fieldcollection $paymentInfo
     * @return void
     */
    public function setPaymentInfo ($paymentInfo) {
        throw new \OnlineShop\Framework\Exception\UnsupportedException("setPaymentInfo is not implemented for " . get_class($this));
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        throw new \OnlineShop\Framework\Exception\UnsupportedException(__FUNCTION__ . " is not implemented for " . get_class($this));
    }

    /**
     * @param string $comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        throw new \OnlineShop\Framework\Exception\UnsupportedException(__FUNCTION__ . " is not implemented for " . get_class($this));
    }


    /**
     * @return mixed
     */
    public function getCustomerEMail()
    {
        throw new \OnlineShop\Framework\Exception\UnsupportedException(__FUNCTION__ . " is not implemented for " . get_class($this));
    }

    /**
     * @param string $customerEMail
     *
     * @return $this
     */
    public function setCustomerEMail($customerEMail)
    {
        throw new \OnlineShop\Framework\Exception\UnsupportedException(__FUNCTION__ . " is not implemented for " . get_class($this));
    }

    /**
     * @return mixed
     */
    public function getCustomerCountry()
    {
        throw new \OnlineShop\Framework\Exception\UnsupportedException(__FUNCTION__ . " is not implemented for " . get_class($this));
    }

    /**
     * @param string $customerCountry
     *
     * @return $this
     */
    public function setCustomerCountry($customerCountry)
    {
        throw new \OnlineShop\Framework\Exception\UnsupportedException(__FUNCTION__ . " is not implemented for " . get_class($this));
    }

    /**
     * @return mixed
     */
    public function getCustomerCity()
    {
        throw new \OnlineShop\Framework\Exception\UnsupportedException(__FUNCTION__ . " is not implemented for " . get_class($this));
    }

    /**
     * @param string $customerCity
     *
     * @return $this
     */
    public function setCustomerCity($customerCity)
    {
        throw new \OnlineShop\Framework\Exception\UnsupportedException(__FUNCTION__ . " is not implemented for " . get_class($this));
    }

    /**
     * @return mixed
     */
    public function getCustomerZip()
    {
        throw new \OnlineShop\Framework\Exception\UnsupportedException(__FUNCTION__ . " is not implemented for " . get_class($this));
    }

    /**
     * @param string $customerZip
     *
     * @return $this
     */
    public function setCustomerZip($customerZip)
    {
        throw new \OnlineShop\Framework\Exception\UnsupportedException(__FUNCTION__ . " is not implemented for " . get_class($this));
    }

    /**
     * @return mixed
     */
    public function getCustomerStreet()
    {
        throw new \OnlineShop\Framework\Exception\UnsupportedException(__FUNCTION__ . " is not implemented for " . get_class($this));
    }

    /**
     * @param string $customerStreet
     *
     * @return $this
     */
    public function setCustomerStreet($customerStreet)
    {
        throw new \OnlineShop\Framework\Exception\UnsupportedException(__FUNCTION__ . " is not implemented for " . get_class($this));
    }

    /**
     * @return mixed
     */
    public function getCustomerCompany()
    {
        throw new \OnlineShop\Framework\Exception\UnsupportedException(__FUNCTION__ . " is not implemented for " . get_class($this));
    }

    /**
     * @param string $customerCompany
     *
     * @return $this
     */
    public function setCustomerCompany($customerCompany)
    {
        throw new \OnlineShop\Framework\Exception\UnsupportedException(__FUNCTION__ . " is not implemented for " . get_class($this));
    }

    /**
     * @return string
     */
    public function getCustomerName()
    {
        throw new \OnlineShop\Framework\Exception\UnsupportedException(__FUNCTION__ . " is not implemented for " . get_class($this));
    }

    /**
     * @param string $customerName
     *
     * @return $this
     */
    public function setCustomerName($customerName)
    {
        throw new \OnlineShop\Framework\Exception\UnsupportedException(__FUNCTION__ . " is not implemented for " . get_class($this));
    }

    /**
     * @return mixed
     */
    public function getDeliveryEMail()
    {
        throw new \OnlineShop\Framework\Exception\UnsupportedException(__FUNCTION__ . " is not implemented for " . get_class($this));
    }

    /**
     * @param string $deliveryEMail
     *
     * @return $this
     */
    public function setDeliveryEMail($deliveryEMail)
    {
        throw new \OnlineShop\Framework\Exception\UnsupportedException(__FUNCTION__ . " is not implemented for " . get_class($this));
    }

    /**
     * @return mixed
     */
    public function getDeliveryCountry()
    {
        throw new \OnlineShop\Framework\Exception\UnsupportedException(__FUNCTION__ . " is not implemented for " . get_class($this));
    }

    /**
     * @param string $deliveryCountry
     *
     * @return $this
     */
    public function setDeliveryCountry($deliveryCountry)
    {
        throw new \OnlineShop\Framework\Exception\UnsupportedException(__FUNCTION__ . " is not implemented for " . get_class($this));
    }

    /**
     * @return mixed
     */
    public function getDeliveryCity()
    {
        throw new \OnlineShop\Framework\Exception\UnsupportedException(__FUNCTION__ . " is not implemented for " . get_class($this));
    }

    /**
     * @param string $deliveryCity
     *
     * @return $this
     */
    public function setDeliveryCity($deliveryCity)
    {
        throw new \OnlineShop\Framework\Exception\UnsupportedException(__FUNCTION__ . " is not implemented for " . get_class($this));
    }

    /**
     * @return mixed
     */
    public function getDeliveryZip()
    {
        throw new \OnlineShop\Framework\Exception\UnsupportedException(__FUNCTION__ . " is not implemented for " . get_class($this));
    }

    /**
     * @param string $deliveryZip
     *
     * @return $this
     */
    public function setDeliveryZip($deliveryZip)
    {
        throw new \OnlineShop\Framework\Exception\UnsupportedException(__FUNCTION__ . " is not implemented for " . get_class($this));
    }

    /**
     * @return mixed
     */
    public function getDeliveryStreet()
    {
        throw new \OnlineShop\Framework\Exception\UnsupportedException(__FUNCTION__ . " is not implemented for " . get_class($this));
    }

    /**
     * @param string $deliveryStreet
     *
     * @return $this
     */
    public function setDeliveryStreet($deliveryStreet)
    {
        throw new \OnlineShop\Framework\Exception\UnsupportedException(__FUNCTION__ . " is not implemented for " . get_class($this));
    }

    /**
     * @return mixed
     */
    public function getDeliveryCompany()
    {
        throw new \OnlineShop\Framework\Exception\UnsupportedException(__FUNCTION__ . " is not implemented for " . get_class($this));
    }

    /**
     * @param string $deliveryCompany
     *
     * @return $this
     */
    public function setDeliveryCompany($deliveryCompany)
    {
        throw new \OnlineShop\Framework\Exception\UnsupportedException(__FUNCTION__ . " is not implemented for " . get_class($this));
    }

    /**
     * @return string
     */
    public function getDeliveryName()
    {
        throw new \OnlineShop\Framework\Exception\UnsupportedException(__FUNCTION__ . " is not implemented for " . get_class($this));
    }

    /**
     * @param string $deliveryName
     *
     * @return $this
     */
    public function setDeliveryName($deliveryName)
    {
        throw new \OnlineShop\Framework\Exception\UnsupportedException(__FUNCTION__ . " is not implemented for " . get_class($this));
    }


    /**
     * @return bool
     * @throws \OnlineShop\Framework\Exception\UnsupportedException
     */
    public function hasDeliveryAddress()
    {
        return
            $this->getDeliveryName() != ''
            && $this->getDeliveryStreet()
            && $this->getDeliveryCity()
            && $this->getDeliveryZip()
        ;
    }


    /**
     * @param string $currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        throw new \OnlineShop\Framework\Exception\UnsupportedException(__FUNCTION__ . " is not implemented for " . get_class($this));
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        throw new \OnlineShop\Framework\Exception\UnsupportedException("setPaymentInfo is not implemented for " . get_class($this));
//        return new \Zend_Currency($this->getOrder()->getCurrency(), $this->factory->getEnvironment()->getCurrencyLocale());
    }

    /**
     * Get voucherTokens - Voucher Tokens
     * @return array
     */
    public function getVoucherTokens () {
        throw new \OnlineShop\Framework\Exception\UnsupportedException("getVoucherTokens is not implemented for " . get_class($this));
    }

    /**
     * Set voucherTokens - Voucher Tokens
     * @param array $voucherTokens
     * @return \Pimcore\Model\Object\OnlineShopOrder
     */
    public function setVoucherTokens ($voucherTokens) {
        throw new \OnlineShop\Framework\Exception\UnsupportedException("setVoucherTokens is not implemented for " . get_class($this));
    }

}
