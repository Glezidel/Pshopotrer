<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.product.stock.command_handler.update_product_stock_information_handler' shared service.

return $this->services['prestashop.adapter.product.stock.command_handler.update_product_stock_information_handler'] = new \PrestaShop\PrestaShop\Adapter\Product\Stock\CommandHandler\UpdateProductStockInformationHandler(${($_ = isset($this->services['prestashop.adapter.product.stock.update.product_stock_updater']) ? $this->services['prestashop.adapter.product.stock.update.product_stock_updater'] : $this->load('getPrestashop_Adapter_Product_Stock_Update_ProductStockUpdaterService.php')) && false ?: '_'});
