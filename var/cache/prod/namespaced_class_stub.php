<?php 
namespace PrestaShop\PrestaShop\Adapter\Entity;

class Product extends \Product {};
class Image extends \Image {};
class Windows extends \Windows {};
class ImageType extends \ImageType {};
class State extends \State {};
class PhpEncryptionEngine extends \PhpEncryptionEngine {};
class CacheXcache extends \CacheXcache {};
class CacheApc extends \CacheApc {};
abstract class Cache extends \Cache {};
class CacheMemcached extends \CacheMemcached {};
class CacheMemcache extends \CacheMemcache {};
class Customer extends \Customer {};
class AddressFormat extends \AddressFormat {};
class Validate extends \Validate {};
class RequestSql extends \RequestSql {};
class FeatureValueLang extends \FeatureValueLang {};
class GroupLang extends \GroupLang {};
class TabLang extends \TabLang {};
class OrderMessageLang extends \OrderMessageLang {};
class AttributeLang extends \AttributeLang {};
class MetaLang extends \MetaLang {};
class OrderReturnStateLang extends \OrderReturnStateLang {};
class ContactLang extends \ContactLang {};
class StockMvtReasonLang extends \StockMvtReasonLang {};
class ConfigurationLang extends \ConfigurationLang {};
class RiskLang extends \RiskLang {};
class GenderLang extends \GenderLang {};
class CarrierLang extends \CarrierLang {};
class CategoryLang extends \CategoryLang {};
class SupplyOrderStateLang extends \SupplyOrderStateLang {};
class ThemeLang extends \ThemeLang {};
class OrderStateLang extends \OrderStateLang {};
class QuickAccessLang extends \QuickAccessLang {};
class ProfileLang extends \ProfileLang {};
class AttributeGroupLang extends \AttributeGroupLang {};
class DataLang extends \DataLang {};
class FeatureLang extends \FeatureLang {};
class CmsCategoryLang extends \CmsCategoryLang {};
class CustomerMessage extends \CustomerMessage {};
class PrestaShopPaymentException extends \PrestaShopPaymentException {};
class PrestaShopDatabaseException extends \PrestaShopDatabaseException {};
class PrestaShopObjectNotFoundException extends \PrestaShopObjectNotFoundException {};
class PrestaShopModuleException extends \PrestaShopModuleException {};
class PrestaShopException extends \PrestaShopException {};
class Upgrader extends \Upgrader {};
class Order extends \Order {};
class OrderPayment extends \OrderPayment {};
class OrderHistory extends \OrderHistory {};
class OrderReturnState extends \OrderReturnState {};
class OrderDetail extends \OrderDetail {};
class OrderInvoice extends \OrderInvoice {};
class OrderState extends \OrderState {};
class OrderReturn extends \OrderReturn {};
class OrderDiscount extends \OrderDiscount {};
class OrderMessage extends \OrderMessage {};
class OrderCartRule extends \OrderCartRule {};
class OrderSlip extends \OrderSlip {};
class OrderCarrier extends \OrderCarrier {};
class Profile extends \Profile {};
class Alias extends \Alias {};
class CustomerSession extends \CustomerSession {};
class CMSCategory extends \CMSCategory {};
class AddressValidator extends \AddressValidator {};
class DeliveryOptionsFinder extends \DeliveryOptionsFinder {};
class CheckoutAddressesStep extends \CheckoutAddressesStep {};
abstract class AbstractCheckoutStep extends \AbstractCheckoutStep {};
class CartChecksum extends \CartChecksum {};
class PaymentOptionsFinder extends \PaymentOptionsFinder {};
class CheckoutDeliveryStep extends \CheckoutDeliveryStep {};
class CheckoutSession extends \CheckoutSession {};
class CheckoutPersonalInformationStep extends \CheckoutPersonalInformationStep {};
class ConditionsToApproveFinder extends \ConditionsToApproveFinder {};
class CheckoutProcess extends \CheckoutProcess {};
class CheckoutPaymentStep extends \CheckoutPaymentStep {};
class ManufacturerAddress extends \ManufacturerAddress {};
class Notification extends \Notification {};
class Cookie extends \Cookie {};
class Media extends \Media {};
class Configuration extends \Configuration {};
class HTMLTemplateSupplyOrderForm extends \HTMLTemplateSupplyOrderForm {};
class HTMLTemplateOrderSlip extends \HTMLTemplateOrderSlip {};
class PDF extends \PDF {};
class HTMLTemplateInvoice extends \HTMLTemplateInvoice {};
class HTMLTemplateOrderReturn extends \HTMLTemplateOrderReturn {};
abstract class HTMLTemplate extends \HTMLTemplate {};
class PDFGenerator extends \PDFGenerator {};
class HTMLTemplateDeliverySlip extends \HTMLTemplateDeliverySlip {};
class SearchEngine extends \SearchEngine {};
class CustomerAddress extends \CustomerAddress {};
class TranslatedConfiguration extends \TranslatedConfiguration {};
class Risk extends \Risk {};
class Pack extends \Pack {};
class Mail extends \Mail {};
class DbPDO extends \DbPDO {};
class DbQuery extends \DbQuery {};
class DbMySQLi extends \DbMySQLi {};
abstract class Db extends \Db {};
class LocalizationPack extends \LocalizationPack {};
class Cart extends \Cart {};
class SmartyDevTemplate extends \SmartyDevTemplate {};
class SmartyResourceParent extends \SmartyResourceParent {};
class SmartyCustom extends \SmartyCustom {};
class TemplateFinder extends \TemplateFinder {};
class SmartyResourceModule extends \SmartyResourceModule {};
class SmartyCustomTemplate extends \SmartyCustomTemplate {};
class Address extends \Address {};
class CartRule extends \CartRule {};
class Tools extends \Tools {};
class Language extends \Language {};
class Message extends \Message {};
class Contact extends \Contact {};
class QqUploadedFileXhr extends \QqUploadedFileXhr {};
class ProductSale extends \ProductSale {};
class Search extends \Search {};
class WarehouseAddress extends \WarehouseAddress {};
class Group extends \Group {};
class TreeToolbarSearchCategories extends \TreeToolbarSearchCategories {};
class Tree extends \Tree {};
class TreeToolbarLink extends \TreeToolbarLink {};
abstract class TreeToolbarButton extends \TreeToolbarButton {};
class TreeToolbar extends \TreeToolbar {};
class TreeToolbarSearch extends \TreeToolbarSearch {};
class PrestaShopLogger extends \PrestaShopLogger {};
class Meta extends \Meta {};
class Guest extends \Guest {};
class Country extends \Country {};
class PrestaShopBackup extends \PrestaShopBackup {};
class ValidateConstraintTranslator extends \ValidateConstraintTranslator {};
class PhpEncryption extends \PhpEncryption {};
abstract class TaxManagerModule extends \TaxManagerModule {};
class TaxRulesGroup extends \TaxRulesGroup {};
class TaxConfiguration extends \TaxConfiguration {};
class TaxManagerFactory extends \TaxManagerFactory {};
class TaxCalculator extends \TaxCalculator {};
class Tax extends \Tax {};
class TaxRulesTaxManager extends \TaxRulesTaxManager {};
class TaxRule extends \TaxRule {};
class ProductDownload extends \ProductDownload {};
class Delivery extends \Delivery {};
class EmployeeSession extends \EmployeeSession {};
class SpecificPriceFormatter extends \SpecificPriceFormatter {};
class Carrier extends \Carrier {};
class Currency extends \Currency {};
class Hook extends \Hook {};
class AttributeGroup extends \AttributeGroup {};
class Uploader extends \Uploader {};
class QqUploadedFileForm extends \QqUploadedFileForm {};
class Page extends \Page {};
class WebserviceRequest extends \WebserviceRequest {};
class WebserviceOutputXML extends \WebserviceOutputXML {};
class WebserviceSpecificManagementImages extends \WebserviceSpecificManagementImages {};
class WebserviceException extends \WebserviceException {};
class WebserviceOutputJSON extends \WebserviceOutputJSON {};
class WebserviceOutputBuilder extends \WebserviceOutputBuilder {};
class WebserviceSpecificManagementAttachments extends \WebserviceSpecificManagementAttachments {};
class WebserviceSpecificManagementSearch extends \WebserviceSpecificManagementSearch {};
class WebserviceKey extends \WebserviceKey {};
class ConnectionsSource extends \ConnectionsSource {};
class CSV extends \CSV {};
class Category extends \Category {};
class Combination extends \Combination {};
class Referrer extends \Referrer {};
class CccReducer extends \CccReducer {};
class StylesheetManager extends \StylesheetManager {};
class CssMinifier extends \CssMinifier {};
class JavascriptManager extends \JavascriptManager {};
abstract class AbstractAssetManager extends \AbstractAssetManager {};
class JsMinifier extends \JsMinifier {};
class Curve extends \Curve {};
abstract class StockManagerModule extends \StockManagerModule {};
class SupplyOrderDetail extends \SupplyOrderDetail {};
class SupplyOrderState extends \SupplyOrderState {};
class WarehouseProductLocation extends \WarehouseProductLocation {};
class StockManagerFactory extends \StockManagerFactory {};
class StockMvt extends \StockMvt {};
class StockMvtReason extends \StockMvtReason {};
class Warehouse extends \Warehouse {};
class SupplyOrderReceiptHistory extends \SupplyOrderReceiptHistory {};
class StockAvailable extends \StockAvailable {};
class StockMvtWS extends \StockMvtWS {};
class StockManager extends \StockManager {};
class SupplyOrderHistory extends \SupplyOrderHistory {};
class Stock extends \Stock {};
class SupplyOrder extends \SupplyOrder {};
abstract class AbstractForm extends \AbstractForm {};
class CustomerAddressForm extends \CustomerAddressForm {};
class CustomerForm extends \CustomerForm {};
class CustomerAddressFormatter extends \CustomerAddressFormatter {};
class FormField extends \FormField {};
class CustomerLoginForm extends \CustomerLoginForm {};
class CustomerPersister extends \CustomerPersister {};
class CustomerFormatter extends \CustomerFormatter {};
class CustomerLoginFormatter extends \CustomerLoginFormatter {};
class CustomerAddressPersister extends \CustomerAddressPersister {};
class Context extends \Context {};
class Connection extends \Connection {};
abstract class ProductPresentingFrontController extends \ProductPresentingFrontController {};
class AdminController extends \AdminController {};
abstract class ModuleAdminController extends \ModuleAdminController {};
abstract class Controller extends \Controller {};
class FrontController extends \FrontController {};
class ModuleFrontController extends \ModuleFrontController {};
abstract class ProductListingFrontController extends \ProductListingFrontController {};
class Tab extends \Tab {};
class ProductPresenterFactory extends \ProductPresenterFactory {};
class LinkProxy extends \LinkProxy {};
class GroupReduction extends \GroupReduction {};
class Access extends \Access {};
class CustomizationField extends \CustomizationField {};
class ProductAssembler extends \ProductAssembler {};
class CMSRole extends \CMSRole {};
class FileLogger extends \FileLogger {};
abstract class AbstractLogger extends \AbstractLogger {};
class FeatureValue extends \FeatureValue {};
class Attribute extends \Attribute {};
class Supplier extends \Supplier {};
class DateRange extends \DateRange {};
class CustomerThread extends \CustomerThread {};
class Dispatcher extends \Dispatcher {};
abstract class PaymentModule extends \PaymentModule {};
class Zone extends \Zone {};
class Employee extends \Employee {};
class Feature extends \Feature {};
class Chart extends \Chart {};
class Store extends \Store {};
class ProductSupplier extends \ProductSupplier {};
class RangePrice extends \RangePrice {};
class RangeWeight extends \RangeWeight {};
class ConfigurationKPI extends \ConfigurationKPI {};
class Link extends \Link {};
class ShopUrl extends \ShopUrl {};
class ShopGroup extends \ShopGroup {};
class Shop extends \Shop {};
class SpecificPrice extends \SpecificPrice {};
class Manufacturer extends \Manufacturer {};
class QuickAccess extends \QuickAccess {};
class ImageManager extends \ImageManager {};
class SpecificPriceRule extends \SpecificPriceRule {};
class FileUploader extends \FileUploader {};
class AddressChecksum extends \AddressChecksum {};
class ConfigurationTest extends \ConfigurationTest {};
class PhpEncryptionLegacyEngine extends \PhpEncryptionLegacyEngine {};
class Gender extends \Gender {};
class PrestaShopCollection extends \PrestaShopCollection {};
class Attachment extends \Attachment {};
class Translate extends \Translate {};
abstract class ModuleGraphEngine extends \ModuleGraphEngine {};
abstract class ModuleGridEngine extends \ModuleGridEngine {};
abstract class Module extends \Module {};
abstract class ModuleGraph extends \ModuleGraph {};
abstract class CarrierModule extends \CarrierModule {};
abstract class ModuleGrid extends \ModuleGrid {};
class CMS extends \CMS {};
abstract class ObjectModel extends \ObjectModel {};
class HelperKpi extends \HelperKpi {};
class HelperTreeCategories extends \HelperTreeCategories {};
class HelperKpiRow extends \HelperKpiRow {};
class HelperImageUploader extends \HelperImageUploader {};
class HelperForm extends \HelperForm {};
class Helper extends \Helper {};
class HelperOptions extends \HelperOptions {};
class HelperCalendar extends \HelperCalendar {};
class HelperUploader extends \HelperUploader {};
class HelperView extends \HelperView {};
class HelperTreeShops extends \HelperTreeShops {};
class HelperList extends \HelperList {};
class HelperShop extends \HelperShop {};
class Tag extends \Tag {};
class SupplierAddress extends \SupplierAddress {};
class Customization extends \Customization {};
