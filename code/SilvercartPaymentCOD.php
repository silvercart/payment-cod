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
 * @subpackage Payment_CashOnDelivery
 */

/**
 * Class description.
 *
 * @package Silvercart
 * @subpackage Payment_CashOnDelivery
 * @copyright 2012 pixeltricks GmbH
 * @author Sascha Koehler <skoehler@pixeltricks.de>
 * @since 29.03.2012
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License
 */
class SilvercartPaymentCOD extends SilvercartPaymentMethod {
    
    /**
     * Has many relations
     *
     * @var array
     */
    public static $has_many = array(
        'SilvercartPaymentCODLanguages'   => 'SilvercartPaymentCODLanguage',
    );
 
    /**
     * contains module name for display in the admin backend
     *
     * @var string
     */
    protected $moduleName = 'COD';
 
    /**
     * Indicates whether a payment module has multiple payment channels or not.
     *
     * @var bool
     */
    public static $has_multiple_payment_channels = false;
 
    /**
     * A list of possible payment  channels.
     *
     * @var array
     */
    public static $possible_payment_channels = array();

    /**
     * Field labels for display in tables.
     *
     * @param boolean $includerelations A boolean value to indicate if the labels returned include relation fields
     *
     * @return array
     * 
     * @author Sebastian Diel <sdiel@pixeltricks.de>
     * @since 04.05.2012
     */
    public function fieldLabels($includerelations = true) {
        $fieldLabels = array_merge(
            parent::fieldLabels($includerelations),
            array(
                'SilvercartPaymentCODLanguages' => _t('SilvercartPaymentCODLanguage.PLURALNAME'),
            )
        );

        $this->extend('updateFieldLabels', $fieldLabels);
        return $fieldLabels;
    }
 
    /**
     * returns CMS fields
     *
     * @param mixed $params optional
     *
     * @return FieldSet
     *
     * @author Sascha Koehler <skoehler@pixeltricks.de>, Sebastian Diel <sdiel@pixeltricks.de>
     * @since 04.05.2012
     */
    public function getCMSFields($params = null) {
        $fields         = parent::getCMSFieldsForModules($params);
        $fields->addFieldToTab('Sections.Translations', new ComplexTableField($this, 'SilvercartPaymentCODLanguages', 'SilvercartPaymentCODLanguage'));
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
