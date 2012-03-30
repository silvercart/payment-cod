<?php
/**
 * Copyright 2012 pixeltricks GmbH
 *
 * This file is part of SilverCart.
 *
 * SilverCart is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * SilverCart is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with SilverCart.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package Silvercart
 * @subpackage Payment
 */

/**
 * Class description.
 *
 * @package Silvercart
 * @subpackage Payment
 * @copyright 2012 pixeltricks GmbH
 * @author Sascha Koehler <skoehler@pixeltricks.de>
 * @since 29.03.2012
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License
 */
class SilvercartPaymentCOD extends SilvercartPaymentMethod {
 
    /**
     * contains module name for display in the admin backend
     *
     * @var string
     *
     * @author Sascha Koehler <skoehler@pixeltricks.de>
     * @since 29.03.2012
     */
    protected $moduleName = 'COD';
 
    /**
     * Indicates whether a payment module has multiple payment channels or not.
     *
     * @var bool
     *
     * @author Sascha Koehler <skoehler@pixeltricks.de>
     * @since 29.03.2012
     */
    public static $has_multiple_payment_channels = false;
 
    /**
     * A list of possible payment channels.
     *
     * @var array
     *
     * @author Sascha Koehler <skoehler@pixeltricks.de>
     * @since 29.03.2012
     */
    public static $possible_payment_channels = array();
 
    /**
     * returns CMS fields
     *
     * @param mixed $params optional
     *
     * @return FieldSet
     *
     * @author Sascha Koehler <skoehler@pixeltricks.de>
     * @since 29.03.2012
     */
    public function getCMSFields($params = null) {
        $fields         = parent::getCMSFieldsForModules($params);
        $fieldLabels    = self::$field_labels;
 
        return $fields;
    }
 
    // ------------------------------------------------------------------------
    // processing methods
    // ------------------------------------------------------------------------
 
    /**
     * hook to be called before order creation
     *
     * You can use this method to create tokens and/or jump to your payment
     * provider.
     *
     * @return void
     *
     * @author Sascha Koehler <skoehler@pixeltricks.de>
     * @since 29.03.2012
     */
    public function processPaymentBeforeOrder() {
    }
 
    /**
     * hook to be called after jumpback from payment provider; called before
     * order creation
     *
     * @return void
     *
     * @author Sascha Koehler <skoehler@pixeltricks.de>
     * @since 29.03.2012
     */
    public function processReturnJumpFromPaymentProvider() {
    }
 
    /**
     * hook to be called after order creation
     *
     * @param Order $orderObj object to be processed
     *
     * @return void
     *
     * @author Sascha Koehler <skoehler@pixeltricks.de>
     * @since 29.03.2012
     */
    public function processPaymentAfterOrder($orderObj = array()) {
    }
 
    // ------------------------------------------------------------------------
    // payment module specific methods
    // ------------------------------------------------------------------------
 
    // ...
}

