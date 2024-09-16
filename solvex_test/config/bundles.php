<?php

use App\CustomAdminBundle\CustomAdminBundle;
use Presta\SitemapBundle\PrestaSitemapBundle;
use Pimcore\Bundle\SeoBundle\PimcoreSeoBundle;
use Web2PrintToolsBundle\Web2PrintToolsBundle;
use Pimcore\Bundle\XliffBundle\PimcoreXliffBundle;
use Pimcore\Bundle\DataHubBundle\PimcoreDataHubBundle;
use Pimcore\Bundle\TinymceBundle\PimcoreTinymceBundle;
use Pimcore\Bundle\GlossaryBundle\PimcoreGlossaryBundle;
use Pimcore\Bundle\ObjectMergerBundle\ObjectMergerBundle;
use Pimcore\Bundle\NewsletterBundle\PimcoreNewsletterBundle;
use Pimcore\Bundle\WebToPrintBundle\PimcoreWebToPrintBundle;
use Pimcore\Bundle\WordExportBundle\PimcoreWordExportBundle;
use OutputDataConfigToolkitBundle\OutputDataConfigToolkitBundle;
use Pimcore\Bundle\StaticRoutesBundle\PimcoreStaticRoutesBundle;
use Pimcore\Bundle\CustomReportsBundle\PimcoreCustomReportsBundle;
use Pimcore\Bundle\GoogleMarketingBundle\PimcoreGoogleMarketingBundle;
use Pimcore\Bundle\PersonalizationBundle\PimcorePersonalizationBundle;
use Pimcore\Bundle\ApplicationLoggerBundle\PimcoreApplicationLoggerBundle;
use Pimcore\Bundle\EcommerceFrameworkBundle\PimcoreEcommerceFrameworkBundle;
use Pimcore\Bundle\SimpleBackendSearchBundle\PimcoreSimpleBackendSearchBundle;
use CustomerManagementFrameworkBundle\PimcoreCustomerManagementFrameworkBundle;
use Pimcore\Bundle\GenericExecutionEngineBundle\PimcoreGenericExecutionEngineBundle;
use Pimcore\Bundle\EcommerceFrameworkBundle\PimcorePaymentProviderPayPalSmartPaymentButtonBundle;

return [
    //Twig\Extra\TwigExtraBundle\TwigExtraBundle::class => ['all' => true],
    PimcoreEcommerceFrameworkBundle::class => ['all' => true],
    PimcorePersonalizationBundle::class => ['all' => true],
    PimcoreCustomerManagementFrameworkBundle::class => ['all' => true],
    PimcoreGlossaryBundle::class => ['all' => true],
    PimcoreSeoBundle::class => ['all' => true],
    PimcoreSimpleBackendSearchBundle::class => ['all' => true],
    PimcorePaymentProviderPayPalSmartPaymentButtonBundle::class => ['all' => true],
    PimcoreDataHubBundle::class => ['all' => true],
    OutputDataConfigToolkitBundle::class => ['all' => true],
    Web2PrintToolsBundle::class => ['all' => true],
    ObjectMergerBundle::class => ['all' => true],
    PimcoreCustomReportsBundle::class => ['all' => true],
    PimcoreGoogleMarketingBundle::class => ['all' => true],
    PimcoreApplicationLoggerBundle::class => ['all' => true],
    PimcoreWebToPrintBundle::class => ['all' => true],
    PimcoreTinymceBundle::class => ['all' => true],
    PimcoreStaticRoutesBundle::class => ['all' => true],
    PimcoreNewsletterBundle::class => ['all' => true],
    PimcoreWordExportBundle::class => ['all' => true],
    PimcoreXliffBundle::class => ['all' => true],
    PrestaSitemapBundle::class => ['all' => true],
    PimcoreGenericExecutionEngineBundle::class => ['all' => true],
    CustomAdminBundle::class => ['all' => true],
];
