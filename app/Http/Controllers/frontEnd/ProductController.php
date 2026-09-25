<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Central product catalogue used for both the homepage Products
     * section and each product's dedicated SEO landing page.
     */
    public static function catalogue(): array
    {
        return [
            'crm-software' => [
                'code' => 'CRM',
                'accent' => '#2563eb',
                'title' => 'CRM — Customer Relationship Management System',
                'h1' => 'CRM Software Development in Bangladesh',
                'meta_title' => 'CRM Software Development in Bangladesh | AppFunBD',
                'meta_description' => 'Custom CRM software built with Laravel & PHP to manage leads, customers, and sales pipelines for businesses in Bangladesh. Get a free demo.',
                'intro' => "AppFunBD builds custom CRM (Customer Relationship Management) software that centralizes your customer data, sales pipeline, and communication history in one dashboard. Built on Laravel and PHP, it's designed to scale with your sales team and integrate with the tools you already use.",
                'features' => [
                    ['title' => 'Contact & Company Management', 'description' => 'Store every customer interaction, contact detail, and company profile in one searchable database.'],
                    ['title' => 'Sales Pipeline Tracking', 'description' => 'Visualize deals by stage, assign owners, and forecast revenue with a drag-and-drop pipeline view.'],
                    ['title' => 'Task & Follow-Up Reminders', 'description' => 'Automatic reminders keep your sales team on top of every follow-up call and email.'],
                    ['title' => 'Reporting Dashboard', 'description' => 'Real-time reports on conversion rates, deal value, and team performance.'],
                ],
                'tech' => ['Laravel', 'MySQL', 'jQuery', 'Bootstrap', 'REST API'],
                'faqs' => [
                    ['q' => 'How long does it take to build a custom CRM?', 'a' => 'A standard CRM build typically takes 3–6 weeks depending on the number of modules and integrations required.'],
                    ['q' => 'Can the CRM integrate with WhatsApp or email?', 'a' => 'Yes — we commonly integrate CRMs with WhatsApp Business API, email (SMTP), and n8n automation workflows for lead capture.'],
                    ['q' => 'Is the CRM hosted, or do I own the source code?', 'a' => "You own the full source code and can host it on your own server or ours — there's no vendor lock-in."],
                ],
                'related' => ['lead-management', 'order-management'],
                'demo_link' => null,
            ],
            'lead-management' => [
                'code' => 'LMS',
                'accent' => '#7c3aed',
                'title' => 'Lead Management System',
                'h1' => 'Lead Management System Development',
                'meta_title' => 'Lead Management System Development | AppFunBD',
                'meta_description' => 'Custom lead management software to capture, assign, and track sales leads from multiple channels in one dashboard. Built with Laravel.',
                'intro' => 'Stop losing leads in spreadsheets and inboxes. Our Lead Management System captures leads from your website, Facebook, and WhatsApp, automatically assigns them to your sales team, and tracks every follow-up until the deal closes.',
                'features' => [
                    ['title' => 'Multi-Channel Lead Capture', 'description' => 'Pull leads in from web forms, Facebook Lead Ads, and WhatsApp into one queue.'],
                    ['title' => 'Automatic Assignment', 'description' => 'Route new leads to the right sales rep based on rules you define.'],
                    ['title' => 'Status & Follow-Up Tracking', 'description' => 'See exactly where every lead stands — new, contacted, qualified, or converted.'],
                    ['title' => 'Source & Performance Reports', 'description' => 'Know which channels bring in your best leads.'],
                ],
                'tech' => ['Laravel', 'MySQL', 'jQuery', 'Bootstrap'],
                'faqs' => [
                    ['q' => 'Can it capture leads automatically from Facebook or WhatsApp?', 'a' => 'Yes, using n8n automation and the Facebook/WhatsApp APIs, new leads can be pushed into the system in real time without manual entry.'],
                    ['q' => 'Can multiple sales agents use it at once?', 'a' => 'Yes, the system supports role-based access so managers and agents each see only what they need.'],
                    ['q' => 'Do you provide training after delivery?', 'a' => 'Yes, we include onboarding and documentation so your team can start using it immediately.'],
                ],
                'related' => ['crm-software', 'call-center'],
                'demo_link' => null,
            ],
            'pos-system' => [
                'code' => 'POS',
                'accent' => '#059669',
                'title' => 'POS — Point of Sale System',
                'h1' => 'POS (Point of Sale) System Development',
                'meta_title' => 'POS System Development for Retail | AppFunBD',
                'meta_description' => 'Custom point-of-sale (POS) software for retail and shop billing, inventory tracking, and daily sales reports. Fast checkout, built with Laravel.',
                'intro' => "A point-of-sale system built for speed at the counter. Ring up sales, manage inventory in real time, and get a clear daily sales report without juggling paper receipts or spreadsheets.",
                'features' => [
                    ['title' => 'Fast Billing & Checkout', 'description' => 'Barcode-ready billing screen designed for quick, error-free transactions.'],
                    ['title' => 'Real-Time Inventory Sync', 'description' => "Stock levels update automatically with every sale, so you always know what's in the shop."],
                    ['title' => 'Multi-User & Multi-Shop Support', 'description' => 'Run the same POS across multiple counters or branch locations.'],
                    ['title' => 'Daily Sales & Profit Reports', 'description' => 'End-of-day reports on revenue, best-selling items, and profit margins.'],
                ],
                'tech' => ['Laravel', 'MySQL', 'jQuery', 'Bootstrap'],
                'faqs' => [
                    ['q' => 'Does the POS work offline?', 'a' => 'We can build offline-first support that syncs to the server once the connection is back, depending on your requirements.'],
                    ['q' => 'Can it print receipts?', 'a' => 'Yes, it supports thermal receipt printers commonly used in retail shops in Bangladesh.'],
                    ['q' => 'Can I track multiple shop branches from one system?', 'a' => 'Yes, the POS supports multi-branch inventory and sales reporting from a single admin dashboard.'],
                ],
                'related' => ['order-management', 'crm-software'],
                'demo_link' => null,
            ],
            'order-management' => [
                'code' => 'OMS',
                'accent' => '#d97706',
                'title' => 'Order Management System',
                'h1' => 'Order Management System Development',
                'meta_title' => 'Order Management System Development | AppFunBD',
                'meta_description' => 'Custom order management software to track orders from placement to delivery, sync inventory, and automate customer notifications.',
                'intro' => "Manage every order from the moment it's placed to the moment it's delivered. Our Order Management System keeps inventory, staff, and customers in sync with real-time status updates and automated notifications.",
                'features' => [
                    ['title' => 'Order Lifecycle Tracking', 'description' => 'Follow every order through pending, processing, shipped, and delivered stages.'],
                    ['title' => 'Inventory Sync', 'description' => 'Stock automatically adjusts as orders are placed, cancelled, or returned.'],
                    ['title' => 'Automated Notifications', 'description' => 'SMS, email, or WhatsApp alerts keep customers and staff updated on order status.'],
                    ['title' => 'Vendor & Supplier Management', 'description' => 'Track purchase orders and supplier deliveries alongside customer orders.'],
                ],
                'tech' => ['Laravel', 'MySQL', 'jQuery', 'Bootstrap', 'Webhook Integration'],
                'faqs' => [
                    ['q' => 'Can it integrate with courier services for delivery tracking?', 'a' => 'Yes, we can integrate local courier APIs (e.g. Pathao, Steadfast) for real-time delivery status.'],
                    ['q' => 'Can customers track their own orders online?', 'a' => "Yes, we can add a customer-facing order tracking page linked to their order ID or phone number."],
                    ['q' => 'Does it work for both retail and wholesale orders?', 'a' => 'Yes, the system can be configured for B2C retail orders, B2B wholesale orders, or both.'],
                ],
                'related' => ['pos-system', 'complaint-management'],
                'demo_link' => null,
            ],
            'call-center' => [
                'code' => 'CCS',
                'accent' => '#db2777',
                'title' => 'Call Center Solution',
                'h1' => 'Call Center Management Software',
                'meta_title' => 'Call Center Software Solution | AppFunBD',
                'meta_description' => 'Custom call center management system to log calls, manage agents, and track support tickets for faster resolution. Built with Laravel.',
                'intro' => 'Give your support team one place to log calls, manage agents, and resolve tickets. Our Call Center Solution replaces scattered call logs and spreadsheets with a structured system built around your workflow.',
                'features' => [
                    ['title' => 'Call Logging & History', 'description' => 'Record call details, duration, and outcome against every customer profile.'],
                    ['title' => 'Agent & Queue Management', 'description' => 'Assign calls to available agents and monitor workload in real time.'],
                    ['title' => 'Ticket Escalation', 'description' => 'Escalate unresolved issues to the right department automatically.'],
                    ['title' => 'Performance Dashboards', 'description' => 'Track average handling time, resolution rate, and agent performance.'],
                ],
                'tech' => ['Laravel', 'MySQL', 'jQuery', 'Bootstrap'],
                'faqs' => [
                    ['q' => 'Can it integrate with an IP phone system (VoIP)?', 'a' => 'Yes, we can integrate VoIP/IP-PBX systems to log calls automatically as they happen.'],
                    ['q' => 'Can agents see customer history during a call?', 'a' => 'Yes, the agent screen pulls up full customer and order history the moment a call is logged.'],
                    ['q' => 'Is it suitable for a small support team?', 'a' => 'Yes, the system scales from a 2-person support desk to a full call center floor.'],
                ],
                'related' => ['complaint-management', 'lead-management'],
                'demo_link' => null,
            ],
            'complaint-management' => [
                'code' => 'CMS',
                'accent' => '#0ea5e9',
                'title' => 'Complaint Management System',
                'h1' => 'Complaint Management System Development',
                'meta_title' => 'Complaint Management System | AppFunBD',
                'meta_description' => 'Custom complaint management software so customers can submit and track complaints online while your team resolves issues from one dashboard.',
                'intro' => 'Let customers submit complaints online instead of calling repeatedly for updates. Our Complaint Management System gives your team one dashboard to prioritize, assign, and resolve every ticket — with full visibility for the customer.',
                'features' => [
                    ['title' => 'Online Complaint Submission', 'description' => 'Customers submit complaints through a simple web form, no account required.'],
                    ['title' => 'Priority & Status Tracking', 'description' => 'Categorize complaints by urgency and track them from open to resolved.'],
                    ['title' => 'Team Assignment', 'description' => 'Route complaints to the right department or staff member automatically.'],
                    ['title' => 'Customer Status Updates', 'description' => 'Customers can check their complaint status anytime using a reference number.'],
                ],
                'tech' => ['Laravel', 'MySQL', 'jQuery', 'Bootstrap'],
                'faqs' => [
                    ['q' => "Can customers check their complaint status without logging in?", 'a' => "Yes, we build a simple reference-number lookup so customers don't need an account."],
                    ['q' => 'Can it send SMS or email updates automatically?', 'a' => 'Yes, status changes can trigger automatic SMS or email notifications to the customer.'],
                    ['q' => 'Is there a live demo available?', 'a' => 'Yes — you can try the live demo linked on this page.'],
                ],
                'related' => ['call-center', 'order-management'],
                'demo_link' => 'https://soft.appfunbd.com/complain_management/public/',
            ],
            'custom-business-solution' => [
                'code' => 'CBS',
                'accent' => '#ef4444',
                'title' => 'Custom Business Software Solution',
                'h1' => 'Custom Business Software Development',
                'meta_title' => 'Custom Business Software Development | AppFunBD',
                'meta_description' => 'Tailor-made business management software built around your exact workflow using Laravel & PHP — from requirement discovery to launch.',
                'intro' => "Not every business fits a template. If your workflow doesn't match an off-the-shelf CRM, POS, or management system, we design and build custom business software from scratch around exactly how you work.",
                'features' => [
                    ['title' => 'Requirement Discovery', 'description' => 'We map your current workflow before writing a single line of code, so the system fits how you actually work.'],
                    ['title' => 'Custom Modules', 'description' => 'Build only the modules you need — inventory, HR, accounting, scheduling, or anything specific to your industry.'],
                    ['title' => 'Third-Party Integrations', 'description' => 'Connect to payment gateways, SMS gateways, accounting tools, or existing internal systems via REST APIs.'],
                    ['title' => 'Ongoing Support', 'description' => 'Post-launch maintenance and feature additions as your business grows.'],
                ],
                'tech' => ['Laravel', 'PHP', 'MySQL', 'REST API', 'n8n'],
                'faqs' => [
                    ['q' => 'How do you estimate cost and timeline for a custom project?', 'a' => 'We start with a short discovery call to understand your requirements, then provide a fixed-scope quote and timeline before any work begins.'],
                    ['q' => 'Can you rebuild or extend an existing system?', 'a' => 'Yes, we regularly take over, refactor, or extend existing PHP/Laravel systems built by other developers.'],
                    ['q' => 'Do you sign an NDA for custom projects?', 'a' => "Yes, we're happy to sign an NDA before discussing your business requirements in detail."],
                ],
                'related' => ['crm-software', 'order-management'],
                'demo_link' => null,
            ],
        ];
    }

    public function show(Request $request, string $slug)
    {
        $catalogue = self::catalogue();

        abort_unless(isset($catalogue[$slug]), 404);

        $product = $catalogue[$slug] + ['slug' => $slug];

        $relatedProducts = collect($product['related'])
            ->map(fn ($relatedSlug) => ($catalogue[$relatedSlug] ?? null) ? $catalogue[$relatedSlug] + ['slug' => $relatedSlug] : null)
            ->filter()
            ->values()
            ->all();

        return view('frontEnd.products.show', [
            'product' => $product,
            'relatedProducts' => $relatedProducts,
            'allProducts' => collect($catalogue)->map(fn ($item, $itemSlug) => $item + ['slug' => $itemSlug])->values()->all(),
        ]);
    }
}
