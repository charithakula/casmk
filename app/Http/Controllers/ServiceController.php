<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ServiceController extends Controller
{
    /**
     * Display all services
     */
    public function index(): View
    {
        return view('pages.services.index');
    }

    // Audit Services
    public function audit(): View { return view('pages.services.audit'); }
    public function auditStatutory(): View { return view('pages.services.audit-statutory'); }
    public function auditInternal(): View { return view('pages.services.audit-internal'); }
    public function auditTax(): View { return view('pages.services.audit-tax'); }
    public function auditBank(): View { return view('pages.services.audit-bank'); }
    public function auditPublicSector(): View { return view('pages.services.audit-public-sector'); }
    public function auditIndAs(): View { return view('pages.services.audit-ind-as'); }
    public function auditForensic(): View { return view('pages.services.audit-forensic'); }

    // Tax Services
    public function tax(): View { return view('pages.services.tax'); }
    public function taxFiling(): View { return view('pages.services.tax-filing'); }
    public function taxPlanning(): View { return view('pages.services.tax-planning'); }
    public function taxAudit(): View { return view('pages.services.tax-audit'); }
    public function taxNri(): View { return view('pages.services.tax-nri'); }
    public function taxCorporate(): View { return view('pages.services.tax-corporate'); }
    public function taxLitigation(): View { return view('pages.services.tax-litigation'); }
    public function taxAdvance(): View { return view('pages.services.tax-advance'); }
    public function taxTds(): View { return view('pages.services.tax-tds'); }

    // GST Services
    public function gst(): View { return view('pages.services.gst'); }
    public function gstRegistration(): View { return view('pages.services.gst-registration'); }
    public function gstFiling(): View { return view('pages.services.gst-filing'); }
    public function gstAudit(): View { return view('pages.services.gst-audit'); }
    public function gstAdvisory(): View { return view('pages.services.gst-advisory'); }
    public function gstItc(): View { return view('pages.services.gst-itc'); }
    public function gstRefund(): View { return view('pages.services.gst-refund'); }
    public function gstEway(): View { return view('pages.services.gst-eway'); }
    public function gstCompliance(): View { return view('pages.services.gst-compliance'); }

    // Startup Services
    public function startup(): View { return view('pages.services.startup'); }
    public function startupPrivateLimited(): View { return view('pages.services.startup-private-limited'); }
    public function startupLlp(): View { return view('pages.services.startup-llp'); }
    public function startupOpc(): View { return view('pages.services.startup-opc'); }
    public function startupPartnership(): View { return view('pages.services.startup-partnership'); }
    public function startupProprietorship(): View { return view('pages.services.startup-proprietorship'); }
    public function startupTrust(): View { return view('pages.services.startup-trust'); }
    public function startupSociety(): View { return view('pages.services.startup-society'); }
    public function startupStartupIndia(): View { return view('pages.services.startup-startup-india'); }
    public function startupMsme(): View { return view('pages.services.startup-msme'); }

    // Company Services
    public function companyPrivateLimited(): View { return view('pages.services.company-private-limited'); }
    public function companyLlp(): View { return view('pages.services.company-llp'); }
    public function companyOpc(): View { return view('pages.services.company-opc'); }

    // Outsourcing Services
    public function outsourcingCfo(): View { return view('pages.services.outsourcing-cfo'); }
    public function outsourcingAccounting(): View { return view('pages.services.outsourcing-accounting'); }
    public function outsourcingBookkeeping(): View { return view('pages.services.outsourcing-bookkeeping'); }
    public function outsourcingPayroll(): View { return view('pages.services.outsourcing-payroll'); }
    public function outsourcingFinancialReporting(): View { return view('pages.services.outsourcing-financial-reporting'); }
    public function outsourcingMis(): View { return view('pages.services.outsourcing-mis'); }
    public function outsourcingVirtualAssistant(): View { return view('pages.services.outsourcing-virtual-assistant'); }
    public function outsourcingDocument(): View { return view('pages.services.outsourcing-document'); }
    public function outsourcingFinancial(): View { return view('pages.services.outsourcing-financial'); }

    // Advisory Services
    public function advisory(): View { return view('pages.services.advisory'); }
    public function advisoryRestructuring(): View { return view('pages.services.advisory-restructuring'); }
    public function advisoryFinancialPlanning(): View { return view('pages.services.advisory-financial-planning'); }
    public function advisoryInvestment(): View { return view('pages.services.advisory-investment'); }
    public function advisoryMa(): View { return view('pages.services.advisory-ma'); }
    public function advisoryCapitalGains(): View { return view('pages.services.advisory-capital-gains'); }
    public function advisoryRisk(): View { return view('pages.services.advisory-risk'); }
    public function advisoryValuation(): View { return view('pages.services.advisory-valuation'); }
    public function advisoryIpo(): View { return view('pages.services.advisory-ipo'); }

    // Management Services
    public function managementProcess(): View { return view('pages.services.management-process'); }
    public function managementFinancialControls(): View { return view('pages.services.management-financial-controls'); }
    public function managementCompliance(): View { return view('pages.services.management-compliance'); }
    public function managementProject(): View { return view('pages.services.management-project'); }
    public function managementChange(): View { return view('pages.services.management-change'); }
    public function managementPerformance(): View { return view('pages.services.management-performance'); }
    public function managementCost(): View { return view('pages.services.management-cost'); }
    public function managementDigital(): View { return view('pages.services.management-digital'); }

    // International Services
    public function international(): View { return view('pages.services.international'); }
    public function internationalTransferPricing(): View { return view('pages.services.international-transfer-pricing'); }
    public function internationalTaxation(): View { return view('pages.services.international-taxation'); }
    public function internationalFema(): View { return view('pages.services.international-fema'); }
    public function internationalForex(): View { return view('pages.services.international-forex'); }
    public function internationalDta(): View { return view('pages.services.international-dta'); }
    public function internationalCrossBorder(): View { return view('pages.services.international-cross-border'); }
    public function internationalGlobalTax(): View { return view('pages.services.international-global-tax'); }
    public function internationalRegulatory(): View { return view('pages.services.international-regulatory'); }
    public function internationalSubsidiary(): View { return view('pages.services.international-subsidiary'); }

    // Additional Services
    public function companySecretarial(): View { return view('pages.services.company-secretarial'); }
    public function dueDiligence(): View { return view('pages.services.due-diligence'); }
    public function corporate(): View { return view('pages.services.corporate'); }
    public function compliance(): View { return view('pages.services.compliance'); }
}