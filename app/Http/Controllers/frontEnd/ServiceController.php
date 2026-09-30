<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Central service catalogue used for both the homepage Services
     * section and each service's dedicated SEO landing page.
     */
    public static function catalogue(): array
    {
        return [
            'laravel-php-development' => [
                'code' => 'PHP',
                'accent' => '#ef4444',
                'title' => 'Laravel & PHP Web Development',
                'summary' => 'Custom Laravel and PHP web applications built for performance, security, and scalability — from business websites to complex internal tools.',
                'service_type' => 'Web Application Development',
                'area_served' => 'Worldwide',
                'h1' => 'Laravel & PHP Web Development Services in Bangladesh',
                'meta_title' => 'Laravel & PHP Development Company in Bangladesh | AppFunBD',
                'meta_description' => 'Hire an experienced Laravel & PHP developer in Dhaka for custom web applications, admin panels, SaaS platforms, and business portals. Free consultation.',
                'keywords' => 'Laravel developer Bangladesh, PHP developer Dhaka, Laravel web application development, custom PHP development, hire Laravel developer, SaaS development Bangladesh',
                'intro' => 'AppFunBD builds custom Laravel and PHP web applications for startups, agencies, and growing businesses. Whether you need a customer portal, an admin dashboard, a SaaS platform, or an internal tool that replaces your spreadsheets, we deliver clean, secure, and maintainable code that scales with your business.',
                'features' => [
                    ['title' => 'Custom Web Applications', 'description' => 'Business portals, booking systems, dashboards, and SaaS platforms tailored to your exact workflow.'],
                    ['title' => 'Admin Panels & Dashboards', 'description' => 'Role-based admin panels with reports, exports, and user management built on Laravel.'],
                    ['title' => 'Secure Authentication', 'description' => 'Login, roles, permissions, and API tokens with Laravel Sanctum, Breeze, and best-practice security.'],
                    ['title' => 'Database Design & Optimization', 'description' => 'Well-structured MySQL databases with indexed queries that stay fast as your data grows.'],
                    ['title' => 'Third-Party Integrations', 'description' => 'Payment gateways (SSLCommerz, bKash, Stripe), SMS, email, and social APIs connected to your app.'],
                    ['title' => 'Legacy PHP Upgrades', 'description' => 'Migrate old core PHP or outdated Laravel projects to the latest Laravel version safely.'],
                ],
                'process' => [
                    ['title' => 'Discovery', 'description' => 'We map your requirements, users, and workflow on a free consultation call.'],
                    ['title' => 'Planning & Quote', 'description' => 'You get a fixed-scope proposal with modules, timeline, and cost.'],
                    ['title' => 'Development', 'description' => 'Weekly progress updates and a staging link so you can review as we build.'],
                    ['title' => 'Launch & Support', 'description' => 'Deployment to your server, handover, and post-launch support.'],
                ],
                'tech' => ['Laravel', 'PHP 8', 'MySQL', 'Livewire', 'jQuery', 'Bootstrap', 'Tailwind CSS', 'Redis'],
                'faqs' => [
                    ['q' => 'Why choose Laravel for my web application?', 'a' => 'Laravel is the most popular PHP framework, with built-in security, authentication, queues, and a huge ecosystem. It lets us build faster while keeping the code clean and easy to maintain.'],
                    ['q' => 'How much does a Laravel web application cost?', 'a' => 'Cost depends on the number of modules and integrations. After a short discovery call we provide a fixed quote so there are no surprises.'],
                    ['q' => 'Will I own the source code?', 'a' => 'Yes. You receive the full source code and can host it anywhere — there is no vendor lock-in.'],
                    ['q' => 'Can you work on an existing Laravel project?', 'a' => 'Yes, we regularly take over, fix, and extend Laravel and PHP projects built by other developers.'],
                ],
                'related' => ['rest-api-development', 'website-maintenance', 'bulk-sms-service'],
            ],
            'wordpress-development' => [
                'code' => 'WP',
                'accent' => '#2563eb',
                'title' => 'WordPress Website Development',
                'summary' => 'Responsive WordPress websites using Elementor, custom themes, and plugin integrations for businesses that need a fast, professional online presence.',
                'service_type' => 'Website Development',
                'area_served' => 'Worldwide',
                'h1' => 'WordPress Website Development Services',
                'meta_title' => 'WordPress Website Development in Bangladesh | AppFunBD',
                'meta_description' => 'Professional WordPress & Elementor website development in Dhaka — fast, mobile-friendly, SEO-ready business websites and WooCommerce stores.',
                'keywords' => 'WordPress developer Bangladesh, Elementor website design, WordPress website Dhaka, WooCommerce development, business website design Bangladesh',
                'intro' => 'Get a fast, mobile-friendly, and SEO-ready WordPress website that represents your brand professionally. We design and develop business websites, company profiles, and WooCommerce stores using Elementor and custom themes — easy for you to update without touching code.',
                'features' => [
                    ['title' => 'Business & Corporate Websites', 'description' => 'Professional company websites that build trust and turn visitors into enquiries.'],
                    ['title' => 'Elementor Page Design', 'description' => 'Pixel-perfect, responsive layouts you can edit yourself with a drag-and-drop builder.'],
                    ['title' => 'WooCommerce Stores', 'description' => 'Online shops with product catalogues, cart, checkout, and local payment gateway integration.'],
                    ['title' => 'On-Page SEO Setup', 'description' => 'Clean structure, meta tags, sitemaps, and speed optimization so Google can find you.'],
                    ['title' => 'Custom Plugins & Features', 'description' => 'Custom functionality built as plugins when off-the-shelf options are not enough.'],
                    ['title' => 'Speed & Security Hardening', 'description' => 'Caching, image optimization, backups, and security plugins configured from day one.'],
                ],
                'process' => [
                    ['title' => 'Requirement Brief', 'description' => 'We collect your pages, content, brand colors, and reference websites.'],
                    ['title' => 'Design', 'description' => 'A homepage design for your approval before building the full site.'],
                    ['title' => 'Build & Content', 'description' => 'All pages built, content placed, and tested on mobile, tablet, and desktop.'],
                    ['title' => 'Launch & Training', 'description' => 'Go live on your domain, plus a short training on updating your site.'],
                ],
                'tech' => ['WordPress', 'Elementor', 'WooCommerce', 'PHP', 'jQuery', 'MySQL'],
                'faqs' => [
                    ['q' => 'How long does it take to build a WordPress website?', 'a' => 'A standard 5–8 page business website usually takes 1–2 weeks once content is ready. WooCommerce stores take longer depending on product count.'],
                    ['q' => 'Can I update the website myself?', 'a' => 'Yes. We build with Elementor and show you how to edit text, images, and pages without any coding knowledge.'],
                    ['q' => 'Do you provide domain and hosting?', 'a' => 'We can help you choose and set up domain and hosting, or deploy to hosting you already have.'],
                    ['q' => 'Is the website SEO friendly?', 'a' => 'Yes. Every site includes on-page SEO basics: proper headings, meta tags, XML sitemap, fast loading, and mobile responsiveness.'],
                ],
                'related' => ['website-maintenance', 'laravel-php-development', 'n8n-ai-automation'],
            ],
            'rest-api-development' => [
                'code' => 'API',
                'accent' => '#0891b2',
                'title' => 'REST API Development & Integration',
                'summary' => 'Secure, well-documented REST APIs with Laravel Sanctum, JWT, and FastAPI that connect your apps, websites, and third-party services.',
                'service_type' => 'API Development',
                'area_served' => 'Worldwide',
                'h1' => 'REST API Development & Integration Services',
                'meta_title' => 'REST API Development & Integration Services | AppFunBD',
                'meta_description' => 'Secure, scalable REST APIs built with Laravel and FastAPI for mobile apps, websites, and third-party integrations. Documented, tested, and fast.',
                'keywords' => 'REST API development Bangladesh, Laravel API developer, FastAPI developer, API integration service, mobile app backend, third-party API integration',
                'intro' => 'Your mobile app, website, and business tools need to talk to each other. We design and build secure, well-documented REST APIs with Laravel and FastAPI, and integrate third-party APIs like payment gateways, SMS providers, CRMs, and social platforms into your existing systems.',
                'features' => [
                    ['title' => 'Custom REST APIs', 'description' => 'Clean, versioned API endpoints designed around your data and business rules.'],
                    ['title' => 'Mobile App Backends', 'description' => 'Reliable backends for Android, iOS, and Flutter apps with authentication and push notifications.'],
                    ['title' => 'Token Authentication', 'description' => 'Laravel Sanctum, JWT, and API key security with rate limiting and access control.'],
                    ['title' => 'Third-Party Integrations', 'description' => 'Payment gateways, SMS gateways, Google, Facebook, WhatsApp, and courier APIs.'],
                    ['title' => 'API Documentation', 'description' => 'Postman collections and Swagger/OpenAPI docs so your team can integrate quickly.'],
                    ['title' => 'High-Performance Python APIs', 'description' => 'FastAPI services for data-heavy, AI, and high-throughput workloads.'],
                ],
                'process' => [
                    ['title' => 'API Design', 'description' => 'We define endpoints, request/response formats, and authentication together.'],
                    ['title' => 'Build & Test', 'description' => 'Endpoints built with validation, error handling, and automated tests.'],
                    ['title' => 'Documentation', 'description' => 'Full Postman or Swagger documentation delivered with the code.'],
                    ['title' => 'Deploy & Monitor', 'description' => 'Deployment with logging so issues are caught before your users notice.'],
                ],
                'tech' => ['Laravel', 'Laravel Sanctum', 'JWT', 'FastAPI', 'Python', 'MySQL', 'Postman', 'Swagger'],
                'faqs' => [
                    ['q' => 'Can you build the backend API for my mobile app?', 'a' => 'Yes. We build complete API backends for Android, iOS, and Flutter apps, including authentication, file uploads, and notifications.'],
                    ['q' => 'Do you integrate payment gateways like bKash or SSLCommerz?', 'a' => 'Yes, we integrate local and international payment gateways including bKash, Nagad, SSLCommerz, and Stripe.'],
                    ['q' => 'Will the API be documented?', 'a' => 'Every API we deliver includes Postman collections or Swagger/OpenAPI documentation.'],
                    ['q' => 'Laravel or FastAPI — which should I choose?', 'a' => 'Laravel is ideal for business applications with complex logic; FastAPI suits Python, AI, and high-throughput services. We recommend the right fit for your project.'],
                ],
                'related' => ['laravel-php-development', 'n8n-ai-automation', 'bulk-sms-service'],
            ],
            'n8n-ai-automation' => [
                'code' => 'AI',
                'accent' => '#7c3aed',
                'title' => 'n8n & AI Workflow Automation',
                'summary' => 'End-to-end automation with n8n, Google Gemini AI, WhatsApp, Facebook, and webhooks to eliminate repetitive tasks and speed up operations.',
                'service_type' => 'Business Process Automation',
                'area_served' => 'Worldwide',
                'h1' => 'n8n & AI Workflow Automation Services',
                'meta_title' => 'n8n Automation Expert & AI Workflow Automation | AppFunBD',
                'meta_description' => 'Automate repetitive work with n8n and AI — WhatsApp & Facebook chatbots, lead capture, Google Sheets sync, and Gemini-powered workflows. Book a free call.',
                'keywords' => 'n8n automation expert, n8n developer, AI automation Bangladesh, WhatsApp automation, Facebook chatbot, Google Gemini AI integration, workflow automation service',
                'intro' => 'Save hours every day by letting automation handle the repetitive work. We build n8n workflows powered by AI (Google Gemini, OpenAI) that capture leads, reply to customers on WhatsApp and Facebook, sync data between your apps, and send alerts — running 24/7 without manual effort.',
                'features' => [
                    ['title' => 'AI Chatbots', 'description' => 'WhatsApp and Facebook Messenger bots that answer customer questions using AI.'],
                    ['title' => 'Lead Capture Automation', 'description' => 'Leads from forms, ads, and messages pushed straight into your CRM or Google Sheets.'],
                    ['title' => 'App-to-App Sync', 'description' => 'Connect Google Sheets, CRMs, email, and databases so data flows automatically.'],
                    ['title' => 'AI Content & Data Processing', 'description' => 'Summarize, classify, and extract data from emails, PDFs, and messages with AI.'],
                    ['title' => 'Webhooks & Custom Triggers', 'description' => 'Trigger workflows from your own apps, payment events, or scheduled jobs.'],
                    ['title' => 'Self-Hosted n8n Setup', 'description' => 'Secure n8n installation on your own server or Docker with backups.'],
                ],
                'process' => [
                    ['title' => 'Workflow Audit', 'description' => 'We identify the repetitive tasks that cost your team the most time.'],
                    ['title' => 'Automation Design', 'description' => 'A clear flow diagram of triggers, steps, and outputs for your approval.'],
                    ['title' => 'Build & Test', 'description' => 'Workflows built in n8n and tested with real data.'],
                    ['title' => 'Handover & Monitoring', 'description' => 'Error alerts, documentation, and support once it is live.'],
                ],
                'tech' => ['n8n', 'Google Gemini', 'OpenAI', 'WhatsApp API', 'Facebook API', 'Google Sheets', 'Webhooks', 'Docker'],
                'faqs' => [
                    ['q' => 'What is n8n?', 'a' => 'n8n is an open-source workflow automation tool, similar to Zapier or Make, that can be self-hosted — giving you more control and lower running costs.'],
                    ['q' => 'Can you build a WhatsApp AI chatbot for my business?', 'a' => 'Yes. We build WhatsApp and Facebook chatbots that use AI to answer questions, collect orders, and hand over to a human when needed.'],
                    ['q' => 'Do I need to pay monthly for n8n?', 'a' => 'Not necessarily. n8n can be self-hosted on your own server, so you only pay for hosting instead of per-task subscription fees.'],
                    ['q' => 'Can automation connect to my existing software?', 'a' => 'In most cases, yes — any tool with an API or webhook can be connected, including custom Laravel systems.'],
                ],
                'related' => ['rest-api-development', 'bulk-sms-service', 'laravel-php-development'],
            ],
            'bulk-sms-service' => [
                'code' => 'SMS',
                'accent' => '#16a34a',
                'title' => 'Bulk SMS & SMS API Service',
                'summary' => 'Reliable bulk SMS service in Bangladesh — masking and non-masking SMS, OTP and transactional alerts, promotional campaigns, and SMS gateway API integration for websites, apps, and CRMs.',
                'service_type' => 'Bulk SMS Service',
                'area_served' => 'Bangladesh',
                'h1' => 'Bulk SMS Service in Bangladesh — Masking, Non-Masking & SMS API',
                'meta_title' => 'Bulk SMS Service in Bangladesh | Masking & OTP | AppFunBD',
                'meta_description' => 'Reliable bulk SMS service in Bangladesh — masking & non-masking SMS, OTP, transactional alerts, promotional campaigns, and easy SMS API integration.',
                'keywords' => 'bulk SMS service Bangladesh, bulk SMS BD, masking SMS, non-masking SMS, SMS gateway Bangladesh, SMS API integration, OTP SMS, transactional SMS, promotional SMS, SMS marketing Bangladesh',
                'intro' => 'Reach your customers instantly on every mobile network in Bangladesh. AppFunBD provides bulk SMS for promotional campaigns, OTP verification, order updates, and payment alerts — with branded masking SMS, non-masking SMS, and a simple SMS API that plugs into your website, app, CRM, or POS.',
                'features' => [
                    ['title' => 'Masking SMS', 'description' => 'Send SMS with your own brand name as the sender ID to build trust and recognition.'],
                    ['title' => 'Non-Masking SMS', 'description' => 'Cost-effective SMS from a numeric sender ID — ideal for high-volume notifications.'],
                    ['title' => 'OTP & Transactional SMS', 'description' => 'Fast-delivery OTP, order confirmations, payment alerts, and account notifications.'],
                    ['title' => 'Promotional Campaigns', 'description' => 'Send offers and announcements to thousands of customers in one click.'],
                    ['title' => 'SMS API Integration', 'description' => 'HTTP API to send SMS from Laravel, WordPress, WooCommerce, mobile apps, and CRMs.'],
                    ['title' => 'Delivery Reports', 'description' => 'Track sent, delivered, and failed messages with detailed reports.'],
                ],
                'process' => [
                    ['title' => 'Choose a Package', 'description' => 'Tell us your monthly volume and whether you need masking, non-masking, or both.'],
                    ['title' => 'Account Setup', 'description' => 'We activate your SMS account and register your brand sender ID for masking.'],
                    ['title' => 'Integration', 'description' => 'Send from the web panel, or we connect the SMS API to your website or software.'],
                    ['title' => 'Send & Track', 'description' => 'Start sending and monitor delivery reports in real time.'],
                ],
                'tech' => ['SMS Gateway', 'HTTP API', 'Laravel', 'WordPress', 'WooCommerce', 'n8n', 'Webhooks'],
                'faqs' => [
                    ['q' => 'What is the difference between masking and non-masking SMS?', 'a' => 'Masking SMS shows your brand name (e.g. "AppFunBD") as the sender, while non-masking SMS is sent from a regular number. Masking builds brand trust; non-masking is cheaper for high-volume alerts.'],
                    ['q' => 'Does the SMS reach all operators in Bangladesh?', 'a' => 'Yes, messages are delivered to all major mobile operators in Bangladesh, including Grameenphone, Robi, Airtel, Banglalink, and Teletalk.'],
                    ['q' => 'Can I send OTP SMS from my website or app?', 'a' => 'Yes. Our SMS API can be integrated into any website, mobile app, or software to send OTP and transactional messages automatically.'],
                    ['q' => 'Can you integrate SMS with WooCommerce or my CRM?', 'a' => 'Yes, we integrate SMS notifications into WooCommerce, Laravel applications, CRM, POS, and order management systems.'],
                    ['q' => 'Can I send SMS in Bangla?', 'a' => 'Yes, both English and Bangla (Unicode) SMS are supported.'],
                ],
                'related' => ['rest-api-development', 'n8n-ai-automation', 'laravel-php-development'],
            ],
            'website-maintenance' => [
                'code' => 'CARE',
                'accent' => '#0f766e',
                'title' => 'Website Maintenance & Support',
                'summary' => 'Ongoing maintenance, security updates, and feature enhancements so your website keeps running smoothly around the clock.',
                'service_type' => 'Website Maintenance',
                'area_served' => 'Worldwide',
                'h1' => 'Website Maintenance & Support Services',
                'meta_title' => 'Website Maintenance & Support in Bangladesh | AppFunBD',
                'meta_description' => 'Monthly website maintenance for Laravel, PHP, and WordPress sites — security updates, backups, uptime monitoring, fixes, and new features.',
                'keywords' => 'website maintenance service Bangladesh, WordPress maintenance, Laravel support, website support package, website security updates, website backup service',
                'intro' => 'Your website should keep working while you focus on your business. Our maintenance plans cover security updates, backups, uptime monitoring, bug fixes, content changes, and small feature improvements for Laravel, PHP, and WordPress websites — with quick response when you need help.',
                'features' => [
                    ['title' => 'Security Updates', 'description' => 'Core, theme, plugin, and package updates applied safely and on schedule.'],
                    ['title' => 'Regular Backups', 'description' => 'Automated backups of files and database so you can always recover.'],
                    ['title' => 'Uptime Monitoring', 'description' => 'We get alerted when your site goes down — often before you notice.'],
                    ['title' => 'Content & Design Updates', 'description' => 'Text, image, and page updates handled for you.'],
                    ['title' => 'Feature Enhancements', 'description' => 'Small improvements and new features as your business grows.'],
                    ['title' => 'Priority Support', 'description' => 'Fast response on WhatsApp, phone, and email.'],
                ],
                'process' => [
                    ['title' => 'Website Audit', 'description' => 'We review your site health, security, and performance.'],
                    ['title' => 'Choose a Plan', 'description' => 'A monthly plan based on the size and needs of your site.'],
                    ['title' => 'Ongoing Care', 'description' => 'Updates, backups, and monitoring run on schedule.'],
                    ['title' => 'Monthly Report', 'description' => 'A summary of updates, fixes, and site health each month.'],
                ],
                'tech' => ['WordPress', 'Laravel', 'PHP', 'MySQL', 'cPanel', 'Cloudflare', 'Git'],
                'faqs' => [
                    ['q' => 'Why does my website need maintenance?', 'a' => 'Outdated software is the most common cause of hacked websites. Regular updates, backups, and monitoring keep your site secure and working.'],
                    ['q' => 'Do you maintain websites you did not build?', 'a' => 'Yes. We start with an audit and can maintain any Laravel, PHP, or WordPress website.'],
                    ['q' => 'What happens if my website is hacked?', 'a' => 'We restore it from a clean backup, remove malware, and close the security hole that allowed it.'],
                    ['q' => 'Can I cancel the maintenance plan anytime?', 'a' => 'Yes, maintenance is billed monthly and there is no long-term contract.'],
                ],
                'related' => ['wordpress-development', 'laravel-php-development', 'rest-api-development'],
            ],
        ];
    }

    public static function all(): array
    {
        return collect(self::catalogue())->map(fn ($item, $slug) => $item + ['slug' => $slug])->values()->all();
    }

    public function show(Request $request, string $slug)
    {
        $catalogue = self::catalogue();

        abort_unless(isset($catalogue[$slug]), 404);

        $service = $catalogue[$slug] + ['slug' => $slug];

        $relatedServices = collect($service['related'])
            ->map(fn ($relatedSlug) => ($catalogue[$relatedSlug] ?? null) ? $catalogue[$relatedSlug] + ['slug' => $relatedSlug] : null)
            ->filter()
            ->values()
            ->all();

        return view('frontEnd.services.show', [
            'service' => $service,
            'relatedServices' => $relatedServices,
            'allProducts' => collect(ProductController::catalogue())->map(fn ($item, $itemSlug) => $item + ['slug' => $itemSlug])->values()->all(),
        ]);
    }
}
