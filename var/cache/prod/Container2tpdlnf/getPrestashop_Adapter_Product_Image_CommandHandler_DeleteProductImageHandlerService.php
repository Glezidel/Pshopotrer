<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.product.image.command_handler.delete_product_image_handler' shared service.

return $this->services['prestashop.adapter.product.image.command_handler.delete_product_image_handler'] = new \PrestaShop\PrestaShop\Adapter\Product\Image\CommandHandler\DeleteProductImageHandler(${($_ = isset($this->services['prestashop.adapter.product.image.update.product_image_updater']) ? $this->services['prestashop.adapter.product.image.update.product_image_updater'] : $this->load('getPrestashop_Adapter_Product_Image_Update_ProductImageUpdaterService.php')) && false ?: '_'});
