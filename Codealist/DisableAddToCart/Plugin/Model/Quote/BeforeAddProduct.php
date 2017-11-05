<?php
/**
 * Created by PhpStorm.
 * User: fsspencer
 * Date: 11/4/17
 * Time: 11:44 PM
 */

namespace Codealist\DisableAddToCart\Plugin\Model\Quote;

use Magento\Catalog\Model\Product;
use Magento\Checkout\Model\Cart;

class BeforeAddProduct
{
    public function beforeAddProduct(Cart $subject, $productInfo, $requestInfo = null)
    {
        // TODO: Add the logic you want to implement to prevent some products to be added to the cart
//        $product = $subject->_getProduct($productInfo);
//        if ($product->getId() == 'something')

        throw new \Magento\Framework\Exception\LocalizedException(
            __('You are not allowed to add this product to your cart.')
        );
    }
}