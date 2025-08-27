<?php

// use Illuminate\Support\Facades\Route;
// use Livewire\Volt\Volt;

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::middleware(['auth'])->group(function () {
//     Route::redirect('settings', 'settings/profile');

//     Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
//     Volt::route('settings/password', 'settings.password')->name('settings.password');
//     Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
// });


// ROUTES FILE - routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\InvestIndiaController;
use App\Http\Controllers\IndustryController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\NewsletterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Home Page
Route::get('/', [HomeController::class, 'index'])->name('home');

// About Routes
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/about/team', [AboutController::class, 'team'])->name('about.team');
Route::get('/about/history', [AboutController::class, 'history'])->name('about.history');

// Invest India Routes
Route::prefix('invest-india')->group(function () {
    Route::get('/', [InvestIndiaController::class, 'index'])->name('invest-india');
    Route::get('/investment-overview', [InvestIndiaController::class, 'overview'])->name('investment.overview');
    Route::get('/branch-office', [InvestIndiaController::class, 'branchOffice'])->name('services.branch-office');
    Route::get('/representative-office', [InvestIndiaController::class, 'representativeOffice'])->name('services.representative-office');
    Route::get('/fema-compliance', [InvestIndiaController::class, 'femaCompliance'])->name('services.fema-compliance');
});

// Services Routes
Route::prefix('services')->group(function () {
    Route::get('/', [ServiceController::class, 'index'])->name('services');
    
    // Audit Services
    Route::prefix('audit')->group(function () {
        Route::get('/', [ServiceController::class, 'audit'])->name('services.audit');
        Route::get('/statutory', [ServiceController::class, 'auditStatutory'])->name('services.audit.statutory');
        Route::get('/internal', [ServiceController::class, 'auditInternal'])->name('services.audit.internal');
        Route::get('/tax', [ServiceController::class, 'auditTax'])->name('services.audit.tax');
        Route::get('/bank', [ServiceController::class, 'auditBank'])->name('services.audit.bank');
        Route::get('/public-sector', [ServiceController::class, 'auditPublicSector'])->name('services.audit.public-sector');
        Route::get('/ind-as', [ServiceController::class, 'auditIndAs'])->name('services.audit.ind-as');
        Route::get('/forensic', [ServiceController::class, 'auditForensic'])->name('services.audit.forensic');
    });
    
    // Tax Services
    Route::prefix('tax')->group(function () {
        Route::get('/', [ServiceController::class, 'tax'])->name('services.tax');
        Route::get('/filing', [ServiceController::class, 'taxFiling'])->name('services.tax.filing');
        Route::get('/planning', [ServiceController::class, 'taxPlanning'])->name('services.tax.planning');
        Route::get('/audit', [ServiceController::class, 'taxAudit'])->name('services.tax.audit');
        Route::get('/nri', [ServiceController::class, 'taxNri'])->name('services.tax.nri');
        Route::get('/corporate', [ServiceController::class, 'taxCorporate'])->name('services.tax.corporate');
        Route::get('/litigation', [ServiceController::class, 'taxLitigation'])->name('services.tax.litigation');
        Route::get('/advance', [ServiceController::class, 'taxAdvance'])->name('services.tax.advance');
        Route::get('/tds', [ServiceController::class, 'taxTds'])->name('services.tax.tds');
    });
    
    // GST Services
    Route::prefix('gst')->group(function () {
        Route::get('/', [ServiceController::class, 'gst'])->name('services.gst');
        Route::get('/registration', [ServiceController::class, 'gstRegistration'])->name('services.gst.registration');
        Route::get('/filing', [ServiceController::class, 'gstFiling'])->name('services.gst.filing');
        Route::get('/audit', [ServiceController::class, 'gstAudit'])->name('services.gst.audit');
        Route::get('/advisory', [ServiceController::class, 'gstAdvisory'])->name('services.gst.advisory');
        Route::get('/itc', [ServiceController::class, 'gstItc'])->name('services.gst.itc');
        Route::get('/refund', [ServiceController::class, 'gstRefund'])->name('services.gst.refund');
        Route::get('/eway', [ServiceController::class, 'gstEway'])->name('services.gst.eway');
        Route::get('/compliance', [ServiceController::class, 'gstCompliance'])->name('services.gst.compliance');
    });
    
    // Startup Services
    Route::prefix('startup')->group(function () {
        Route::get('/', [ServiceController::class, 'startup'])->name('services.startup');
        Route::get('/private-limited', [ServiceController::class, 'startupPrivateLimited'])->name('services.startup.private-limited');
        Route::get('/llp', [ServiceController::class, 'startupLlp'])->name('services.startup.llp');
        Route::get('/opc', [ServiceController::class, 'startupOpc'])->name('services.startup.opc');
        Route::get('/partnership', [ServiceController::class, 'startupPartnership'])->name('services.startup.partnership');
        Route::get('/proprietorship', [ServiceController::class, 'startupProprietorship'])->name('services.startup.proprietorship');
        Route::get('/trust', [ServiceController::class, 'startupTrust'])->name('services.startup.trust');
        Route::get('/society', [ServiceController::class, 'startupSociety'])->name('services.startup.society');
        Route::get('/startup-india', [ServiceController::class, 'startupStartupIndia'])->name('services.startup.startup-india');
        Route::get('/msme', [ServiceController::class, 'startupMsme'])->name('services.startup.msme');
    });
    
    // Company Services
    Route::prefix('company')->group(function () {
        Route::get('/private-limited', [ServiceController::class, 'companyPrivateLimited'])->name('services.company.private-limited');
        Route::get('/llp', [ServiceController::class, 'companyLlp'])->name('services.company.llp');
        Route::get('/opc', [ServiceController::class, 'companyOpc'])->name('services.company.opc');
    });
    
    // Outsourcing Services
    Route::prefix('outsourcing')->group(function () {
        Route::get('/cfo', [ServiceController::class, 'outsourcingCfo'])->name('services.outsourcing.cfo');
        Route::get('/accounting', [ServiceController::class, 'outsourcingAccounting'])->name('services.outsourcing.accounting');
        Route::get('/bookkeeping', [ServiceController::class, 'outsourcingBookkeeping'])->name('services.outsourcing.bookkeeping');
        Route::get('/payroll', [ServiceController::class, 'outsourcingPayroll'])->name('services.outsourcing.payroll');
        Route::get('/financial-reporting', [ServiceController::class, 'outsourcingFinancialReporting'])->name('services.outsourcing.financial-reporting');
        Route::get('/mis', [ServiceController::class, 'outsourcingMis'])->name('services.outsourcing.mis');
        Route::get('/virtual-assistant', [ServiceController::class, 'outsourcingVirtualAssistant'])->name('services.outsourcing.virtual-assistant');
        Route::get('/document', [ServiceController::class, 'outsourcingDocument'])->name('services.outsourcing.document');
        Route::get('/financial', [ServiceController::class, 'outsourcingFinancial'])->name('services.outsourcing.financial');
    });
    
    // Advisory Services
    Route::prefix('advisory')->group(function () {
        Route::get('/', [ServiceController::class, 'advisory'])->name('services.advisory');
        Route::get('/restructuring', [ServiceController::class, 'advisoryRestructuring'])->name('services.advisory.restructuring');
        Route::get('/financial-planning', [ServiceController::class, 'advisoryFinancialPlanning'])->name('services.advisory.financial-planning');
        Route::get('/investment', [ServiceController::class, 'advisoryInvestment'])->name('services.advisory.investment');
        Route::get('/ma', [ServiceController::class, 'advisoryMa'])->name('services.advisory.ma');
        Route::get('/capital-gains', [ServiceController::class, 'advisoryCapitalGains'])->name('services.advisory.capital-gains');
        Route::get('/risk', [ServiceController::class, 'advisoryRisk'])->name('services.advisory.risk');
        Route::get('/valuation', [ServiceController::class, 'advisoryValuation'])->name('services.advisory.valuation');
        Route::get('/ipo', [ServiceController::class, 'advisoryIpo'])->name('services.advisory.ipo');
    });
    
    // Management Services
    Route::prefix('management')->group(function () {
        Route::get('/process', [ServiceController::class, 'managementProcess'])->name('services.management.process');
        Route::get('/financial-controls', [ServiceController::class, 'managementFinancialControls'])->name('services.management.financial-controls');
        Route::get('/compliance', [ServiceController::class, 'managementCompliance'])->name('services.management.compliance');
        Route::get('/project', [ServiceController::class, 'managementProject'])->name('services.management.project');
        Route::get('/change', [ServiceController::class, 'managementChange'])->name('services.management.change');
        Route::get('/performance', [ServiceController::class, 'managementPerformance'])->name('services.management.performance');
        Route::get('/cost', [ServiceController::class, 'managementCost'])->name('services.management.cost');
        Route::get('/digital', [ServiceController::class, 'managementDigital'])->name('services.management.digital');
    });
    
    // International Services
    Route::prefix('international')->group(function () {
        Route::get('/', [ServiceController::class, 'international'])->name('services.international');
        Route::get('/transfer-pricing', [ServiceController::class, 'internationalTransferPricing'])->name('services.international.transfer-pricing');
        Route::get('/taxation', [ServiceController::class, 'internationalTaxation'])->name('services.international.taxation');
        Route::get('/fema', [ServiceController::class, 'internationalFema'])->name('services.international.fema');
        Route::get('/forex', [ServiceController::class, 'internationalForex'])->name('services.international.forex');
        Route::get('/dta', [ServiceController::class, 'internationalDta'])->name('services.international.dta');
        Route::get('/cross-border', [ServiceController::class, 'internationalCrossBorder'])->name('services.international.cross-border');
        Route::get('/global-tax', [ServiceController::class, 'internationalGlobalTax'])->name('services.international.global-tax');
        Route::get('/regulatory', [ServiceController::class, 'internationalRegulatory'])->name('services.international.regulatory');
        Route::get('/subsidiary', [ServiceController::class, 'internationalSubsidiary'])->name('services.international.subsidiary');
    });
    
    // Additional Services
    Route::get('/company-secretarial', [ServiceController::class, 'companySecretarial'])->name('services.company-secretarial');
    Route::get('/due-diligence', [ServiceController::class, 'dueDiligence'])->name('services.due-diligence');
    Route::get('/corporate', [ServiceController::class, 'corporate'])->name('services.corporate');
    Route::get('/compliance', [ServiceController::class, 'compliance'])->name('services.compliance');
});

// Industries Routes
Route::prefix('industries')->group(function () {
    Route::get('/', [IndustryController::class, 'index'])->name('industries');
    Route::get('/it', [IndustryController::class, 'it'])->name('industries.it');
    Route::get('/manufacturing', [IndustryController::class, 'manufacturing'])->name('industries.manufacturing');
    Route::get('/real-estate', [IndustryController::class, 'realEstate'])->name('industries.real-estate');
    Route::get('/healthcare', [IndustryController::class, 'healthcare'])->name('industries.healthcare');
    Route::get('/ecommerce', [IndustryController::class, 'ecommerce'])->name('industries.ecommerce');
    Route::get('/education', [IndustryController::class, 'education'])->name('industries.education');
    Route::get('/hospitality', [IndustryController::class, 'hospitality'])->name('industries.hospitality');
});

// Resources Routes
Route::prefix('resources')->group(function () {
    Route::get('/', [ResourceController::class, 'index'])->name('resources');
    Route::get('/videos', [ResourceController::class, 'videos'])->name('resources.videos');
    Route::get('/newsletters', [ResourceController::class, 'newsletters'])->name('resources.newsletters');
    Route::get('/guides', [ResourceController::class, 'guides'])->name('resources.guides');
    Route::get('/faq', [ResourceController::class, 'faq'])->name('resources.faq');
    Route::get('/case-studies', [ResourceController::class, 'caseStudies'])->name('resources.case-studies');
    Route::get('/compliance', [ResourceController::class, 'compliance'])->name('resources.compliance');
    Route::get('/insights', [ResourceController::class, 'insights'])->name('resources.insights');
});

// Career Routes
Route::prefix('career')->group(function () {
    Route::get('/', [CareerController::class, 'index'])->name('career');
    Route::get('/openings', [CareerController::class, 'openings'])->name('career.openings');
    Route::get('/apply', [CareerController::class, 'apply'])->name('career.apply');
    Route::post('/apply', [CareerController::class, 'submitApplication'])->name('career.apply.submit');
    Route::get('/internships', [CareerController::class, 'internships'])->name('career.internships');
});

// Contact Routes
Route::prefix('contact')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('contact');
    Route::post('/', [ContactController::class, 'submit'])->name('contact.submit');
    Route::get('/quote', [ContactController::class, 'quote'])->name('contact.quote');
    Route::post('/quote', [ContactController::class, 'submitQuote'])->name('contact.quote.submit');
});

// Newsletter Routes
Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');

// Client Portal Routes
Route::prefix('client')->group(function () {
    Route::get('/login', [ClientController::class, 'login'])->name('client.login');
    Route::post('/login', [ClientController::class, 'authenticate'])->name('client.authenticate');
    Route::get('/portal', [ClientController::class, 'portal'])->name('client.portal')->middleware('auth:client');
    Route::post('/logout', [ClientController::class, 'logout'])->name('client.logout');
});

// Payment Routes
Route::get('/payment', [PaymentController::class, 'index'])->name('payment');
Route::post('/payment', [PaymentController::class, 'process'])->name('payment.process');

// Legal Pages
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/terms-of-service', [HomeController::class, 'termsOfService'])->name('terms-of-service');
Route::get('/disclaimer', [HomeController::class, 'disclaimer'])->name('disclaimer');
Route::get('/sitemap', [HomeController::class, 'sitemap'])->name('sitemap');

// XML Sitemap
Route::get('/sitemap.xml', [HomeController::class, 'xmlSitemap'])->name('sitemap.xml');

require __DIR__.'/auth.php';
