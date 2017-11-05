# Magento 2 Disable Add To Cart
This is a sample extension to show you how to prevent a customer to Add a product to the cart.
You can add your custom logic before performing this restriction.

## Installation

NOTE:  This extension uses a plugin (iterator) on the "addProduct()" method to prevent a product to be added to the cart.

1. Clone this repository
2. Copy the Codealist directory into your app/code directory
3. Execute: php bin/magento setup:upgrade

Now when you try to add a product to your cart, you'll receive an error message telling you that the operation cannot be performed.

## Compatibility
- Magento 2.0
- Magento 2.1
- Magento 2.2