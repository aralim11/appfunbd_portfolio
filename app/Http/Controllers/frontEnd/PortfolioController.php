<?php

namespace App\Http\Controllers\frontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\ContactSendRequest;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data['first_name'] = "Abdul";
        $data['last_name'] = "Abdul";
        $data['full_name'] = "Abdul Alim";
        $data['age'] = "29 Years";
        $data['email'] = "aralim11@gmail.com";
        $data['designation'] = "Software Engineer | Web Application Developer";
        $data['address'] = "Dhaka, Bangladesh";
        $data['phone'] = "+880 1675 342 612";
        $data['title'] = $data['full_name'] . " | " . $data['designation'];
        $data['description'] = "I am a dedicated Software Engineer and Web Application Developer with expertise in PHP, Laravel, and intelligent automation. I specialize in developing secure, scalable, and high-performance web applications integrated with AI and n8n-based workflow automation to streamline processes and enhance productivity. With a strong background in backend architecture, API development, and modern web technologies, I build smart, maintainable solutions that connect systems, automate data processing, and drive digital transformation.";

        ## navbar
        $data['navBar'] = [
            'menuItems' => [
                ['name' => 'Home', 'id' => '#site-header'],
                ['name' => 'About', 'id' => '#about-section'],
                ['name' => 'Skills', 'id' => '#skill-section'],
                ['name' => 'portfolio', 'id' => '#portfolio-section'],
                ['name' => 'Service', 'id' => '#service-section'],
                ['name' => 'Resume', 'id' => '#resume-section'],
                ['name' => 'Contact', 'id' => '#contact-section'],
            ],
            'socialMedia' => [
                ['title' => 'WhatsApp', 'link' => 'https://wa.me/8801675342612', 'icon' => 'fab fa-whatsapp', 'target' => '__blank'],
                ['title' => 'LinkedIn', 'link' => 'https://www.linkedin.com/in/aralim11/', 'icon' => 'fab fa-linkedin', 'target' => '__blank'],
                ['title' => 'Github', 'link' => 'https://github.com/aralim11', 'icon' => 'fab fa-github', 'target' => '__blank'],
            ],
        ];

        ## skills
        $data['languages'] = [
            'PHP',
            'Laravel',
            'Python',
            'n8n',
            'FastAPI',
            'JavaScript',
            'Wordpress'
        ];

        ## services
        $data['services'] = [
            'title' => 'My Services',
            'description' => 'Empowering Your Success: Explore My Range of Services',
            'items' => [
                [
                    'icon' => 'pe-7s-monitor',
                    'title' => 'Software Development',
                    'description' => 'Crafting robust and scalable solutions while ensuring seamless integration of new features, bug fixing, and enhancing overall functionality.',
                ],
                [
                    'icon' => 'pe-7s-graph3',
                    'title' => 'Website Maintenance',
                    'description' => 'Crafting robust and scalable solutions while ensuring seamless integration of new features, bug fixing, and enhancing overall functionality.',
                ],
                [
                    'icon' => 'pe-7s-network',
                    'title' => 'REST API Development',
                    'description' => 'Designing and developing secure, scalable, and well-documented RESTful APIs to enable seamless integration across platforms and services.',
                ],
                [
                    'icon' => 'pe-7s-tools',
                    'title' => 'Bug Fixing & Optimization',
                    'description' => 'Identifying and resolving issues in PHP, Laravel, JavaScript, and jQuery codebases to improve functionality, performance, and user experience.',
                ],
                [
                    'icon' => 'pe-7s-network',
                    'title' => 'AI Integration & Automation',
                    'description' => 'Designing and integrating automation workflows using n8n, APIs, and AI models to streamline business operations and enhance decision-making.',
                ],
            ],
        ];

        ## portfolio
        $data['portfolio'] = [
            'title' => 'My Portfolio',
            'description' => 'Explore my recent projects and see how I can help you — I\'m focused on scalable solutions and experienced in Python, FastAPI, and modern web technologies.',
            'items' => [
                [
                    'id' => 'wordpress',
                    'title' => 'WordPress',
                    'project' => [
                        [
                            'id' => 'wordpress_1',
                            'name' => 'AHS Corporation DB',
                            'link' => 'https://ahscorporationbd.com/',
                            'img' => [
                                'thumb_img' => 'frontEnd/portfolio/image/ahs_cor.png',
                                'main_img' => 'frontEnd/portfolio/image/ahs_cor.png',
                            ],
                            'integrations' => 'WordPress, Elementor, jQuery, mySql',
                            'description' => 'AHS Corporation is an export-import company website built with WordPress and Elementor. The site features a clean, professional layout showcasing the company’s global trading services. It includes responsive design, service highlights, and contact integration. Optimized for both performance and user experience, the site effectively communicates AHS Corporation\' s international reach .',
                        ],
                        [
                            'id' => 'wordpress_2',
                            'name' => 'Haider Rent A Car',
                            'link' => 'https://www.haiderrentacar.com/',
                            'img' => [
                                'thumb_img' => 'frontEnd/portfolio/image/haider.png',
                                'main_img' => 'frontEnd/portfolio/image/haider.png',
                            ],
                            'integrations' => 'WordPress, Elementor, jQuery, mySql',
                            'description' => 'Haider Rent A Car is a car rental company website built using WordPress and Elementor. The site allows users to explore a range of rental cars, view detailed information including features and pricing, and contact the owner directly. It features a modern, responsive design optimized for all devices. With a clean layout and easy navigation, the site ensures a smooth user experience. Elementor was used to design custom pages that are both functional and visually appealing.',
                        ],
                        [
                            'id' => 'wordpress_3',
                            'name' => 'Globy Dev',
                            'link' => 'https://globydev.com/',
                            'img' => [
                                'thumb_img' => 'frontEnd/portfolio/image/globy.png',
                                'main_img' => 'frontEnd/portfolio/image/globy.png',
                            ],
                            'integrations' => 'WordPress, Elementor, jQuery, mySql',
                            'description' => 'globyDeb is a software company website developed using WordPress and Elementor. The site showcases various software products with detailed descriptions, features, and visuals. Users can easily explore available solutions and contact the company directly for inquiries or services. The design is fully responsive, ensuring a smooth experience across all devices. Custom Elementor layouts were used to create a clean, modern, and professional look.',
                        ],
                    ]
                ],
                [
                    'id' => 'solution',
                    'title' => 'Solution',
                    'project' => [
                        [
                            'id' => 'solution_1',
                            'name' => 'Email Checker',
                            'img' => [
                                'thumb_img' => 'frontEnd/portfolio/image/email.png',
                                'main_img' => 'frontEnd/portfolio/image/email.png',
                            ],
                            'link' => '#',
                            'integrations' => 'Laravel, jQuery, mySql, Bootstrap',
                            'description' => 'A web application that allows users to check the validity of email addresses in single and bulk. Users can upload a CSV file containing email addresses, and the application will validate each address, providing a report on valid and invalid emails.',
                        ],
                        [
                            'id' => 'solution_2',
                            'name' => 'Complain Management',
                            'link' => 'https://soft.appfunbd.com/complain_management/public/',
                            'img' => [
                                'thumb_img' => 'frontEnd/portfolio/image/ticket.png',
                                'main_img' => 'frontEnd/portfolio/image/ticket.png',
                            ],
                            'integrations' => 'Laravel, jQuery, mySql, Bootstrap',
                            'description' => 'A web application that allows users to submit and manage complaints. Users can create, view, and track the status of their complaints, while administrators can manage and respond to complaints efficiently.',
                        ],
                        [
                            'id' => 'solution_3',
                            'name' => 'Lead Management System',
                            'link' => 'https://crm.ihelpbd.com/login',
                            'img' => [
                                'thumb_img' => 'frontEnd/portfolio/image/lead.png',
                                'main_img' => 'frontEnd/portfolio/image/lead.png',
                            ],
                            'integrations' => 'Laravel, jQuery, mySql, Bootstrap',
                            'description' => 'A web application that helps businesses manage and track leads. Users can create, assign, and follow up on leads, ensuring effective lead management and conversion.',
                        ],
                        [
                            'id' => 'solution_4',
                            'name' => 'Task Management System',
                            'link' => 'http://task.ihelpbd.com/admin/login',
                            'img' => [
                                'thumb_img' => 'frontEnd/portfolio/image/task.png',
                                'main_img' => 'frontEnd/portfolio/image/task.png',
                            ],
                            'integrations' => 'Laravel, jQuery, mySql, Bootstrap',
                            'description' => 'A web application that allows users to create, assign, and manage tasks. Users can track task progress, set deadlines, and collaborate with team members to ensure efficient task management.',
                        ],
                        [
                            'id' => 'solution_5',
                            'name' => 'Email Marketing System',
                            'link' => '#',
                            'img' => [
                                'thumb_img' => 'frontEnd/portfolio/image/marketing.png',
                                'main_img' => 'frontEnd/portfolio/image/marketing.png',
                            ],
                            'integrations' => 'Laravel, jQuery, mySql, Bootstrap',
                            'description' => 'A web application that enables users to create and manage email marketing campaigns. Users can design email templates, segment their audience, and track campaign performance.',
                        ],
                        [
                            'id' => 'solution_6',
                            'name' => 'Lead Generation System',
                            'link' => '#',
                            'img' => [
                                'thumb_img' => 'frontEnd/portfolio/image/coupon.png',
                                'main_img' => 'frontEnd/portfolio/image/coupon.png',
                            ],
                            'integrations' => 'Laravel, jQuery, mySql, Bootstrap',
                            'description' => 'A web application that helps businesses generate leads through various channels. Users can create lead generation forms, track lead sources, and analyze lead performance.',
                        ],
                        [
                            'id' => 'solution_7',
                            'name' => 'Shop Management System',
                            'link' => 'https://soft.appfunbd.com/finalp/public/',
                            'img' => [
                                'thumb_img' => 'frontEnd/portfolio/image/shop.png',
                                'main_img' => 'frontEnd/portfolio/image/shop.png',
                            ],
                            'integrations' => 'Laravel, jQuery, mySql, Bootstrap',
                            'description' => 'A web application that allows users to manage their shop operations. Users can track inventory, sales, and customer information, ensuring efficient shop management.',
                        ],
                        [
                            'id' => 'solution_9',
                            'name' => 'Shop Accounting System',
                            'link' => 'https://sba.ihelpbd.com/login',
                            'img' => [
                                'thumb_img' => 'frontEnd/portfolio/image/accounting.png',
                                'main_img' => 'frontEnd/portfolio/image/accounting.png',
                            ],
                            'integrations' => 'Laravel, jQuery, mySql, Bootstrap',
                            'description' => 'A web application that helps shop owners manage their accounting and financial transactions. Users can track sales, expenses, and generate financial reports to ensure accurate accounting.',
                        ],
                    ]
                ],
                [
                    'id' => 'api',
                    'title' => 'API',
                    'project' => [
                        [
                            'id' => 'api_1',
                            'name' => 'REST API',
                            'link' => 'https://github.com/aralim11/laravel-sanctum-rest-api',
                            'img' => [
                                'thumb_img' => 'frontEnd/portfolio/image/rest.png',
                                'main_img' => 'frontEnd/portfolio/image/rest.png',
                            ],
                            'integrations' => 'Laravel, Sanctum, mySql, JWT',
                            'description' => 'A RESTful API that provides endpoints for various functionalities. The API is designed to be secure, scalable, and easy to integrate with other applications.',
                        ],
                        [
                            'id' => 'api_2',
                            'name' => 'FastAPI',
                            'link' => 'https://github.com/aralim11/fastapi-python',
                            'img' => [
                                'thumb_img' => 'frontEnd/portfolio/image/fast_api.png',
                                'main_img' => 'frontEnd/portfolio/image/fast_api.png',
                            ],
                            'integrations' => 'Python, FastAPI, uvicorn, SqlAlchemy',
                            'description' => 'A FastAPI API that provides endpoints for various functionalities. The API is designed to be secure, scalable, and easy to integrate with other applications.',
                        ],
                    ]
                ],
                [
                    'id' => 'automation',
                    'title' => 'Automation',
                    'project' => [
                        [
                            'id' => 'auto_1',
                            'name' => 'FB Chat BOT',
                            'link' => '#',
                            'img' => [
                                'thumb_img' => 'frontEnd/portfolio/image/fb_n8n.png',
                                'main_img' => 'frontEnd/portfolio/image/fb_n8n.png',
                            ],
                            'integrations' => 'n8n, Webhook, Gemini AI, FB Graph API, Google Sheet API',
                            'description' => 'Connected a Facebook chat webhook to analyze messages with Google Gemini AI, check product data in Google Sheets, and automatically return the product price — all in real time.',
                        ],
                        [
                            'id' => 'auto_2',
                            'name' => 'WhatsApp Chat BOT',
                            'link' => '#',
                            'img' => [
                                'thumb_img' => 'frontEnd/portfolio/image/wa_n8n.png',
                                'main_img' => 'frontEnd/portfolio/image/wa_n8n.png',
                            ],
                            'integrations' => 'WhatsApp, n8n, Gemini AI, Gemini Image Analyze, Gemini Transcribe Voice',
                            'description' => 'Integrated WhatsApp, n8n, and Gemini AI (including Image Analyze and Voice Transcription) for intelligent, automated message processing and real-time responses.',
                        ],
                        [
                            'id' => 'auto_3',
                            'name' => 'AI Knowledge System',
                            'link' => '#',
                            'img' => [
                                'thumb_img' => 'frontEnd/portfolio/image/rag_n8n.png',
                                'main_img' => 'frontEnd/portfolio/image/rag_n8n.png',
                            ],
                            'integrations' => 'n8n, Gemini AI, Google Drive, Supabase Vector Store, Postgres Chat Memory, Embeddings Google Gemini',
                            'description' => 'Integrated a fully automated pipeline that connects Google Drive, Google Gemini, and Supabase Vector Store using n8n — making it possible to turn uploaded files into searchable, AI-readable knowledge!',
                        ],
                        [
                            'id' => 'auto_4',
                            'name' => 'n8n DataFlow',
                            'link' => '#',
                            'img' => [
                                'thumb_img' => 'frontEnd/portfolio/image/datapipeline_n8n.png',
                                'main_img' => 'frontEnd/portfolio/image/datapipeline_n8n.png',
                            ],
                            'integrations' => 'n8n, Laravel REST API, Google Sheets, n8n Loop, Custom Function',
                            'description' => 'This workflow is a Robust API Data Ingestion Pipeline triggered manually to retrieve complex datasets. It executes an initial HTTP Request and then enters a Loop Over Items structure to handle API Pagination. Within the loop, it makes subsequent Pagination HTTP Requests and intelligently Merges Data until all pages are retrieved. Finally, the GetMergedData node consolidates the full dataset before appending or updating a target spreadsheet (Google Sheets) for centralized reporting and analysis.',
                        ],
                        [
                            'id' => 'auto_5',
                            'name' => 'Smart Email-to-Order Pipeline',
                            'link' => '#',
                            'img' => [
                                'thumb_img' => 'frontEnd/portfolio/image/task_n8n.png',
                                'main_img' => 'frontEnd/portfolio/image/task_n8n.png',
                            ],
                            'integrations' => 'Gmail Trigger, AI Agent, Google Gemini Chat Model, Get row(s) in sheet, StringToJSON, CreateOrders (Specific action: create: boardItem on Monday.com)',
                            'description' => 'This workflow is an AI-powered email processing system that utilizes the Google Gemini Chat Model to analyze incoming emails from a Gmail Trigger. It intelligently extracts order details, potentially using data retrieved from Google Sheets for context, converts the output into structured data (StringToJSON), and automatically creates a new order/task item in a project management tool (monday.com - via the CreateOrders node).',
                        ],
                    ]
                ],
            ],
        ];

        ## resume
        $data['resume'] = [
            'education' => [
                [
                    'degree' => 'BSc in CSE',
                    'institution' => 'Dhaka International University(DIU)',
                    'year' => '2013-2015',
                    'description' => '',
                ],
                [
                    'degree' => 'Ship Building & Welding',
                    'institution' => 'Bangladesh Institute of Marine Technology',
                    'year' => '2010-2013',
                    'description' => '',
                ],
                [
                    'degree' => 'SSC in Science',
                    'institution' => 'Madhupur Shahid Smrity High School',
                    'year' => '2006-2011',
                    'description' => '',
                ],
                
            ],
            'experience' => [
                [
                    'position' => 'Software Engineer',
                    'company' => 'iHelpBD',
                    'year' => '2019 - Present',
                    'description' => 'Develop and maintain multiple solutions using Laravel, mySql, Jquery technologies, Automation, n8n, ensuring seamless functionality and user-friendly experiences.',
                ],
                [
                    'position' => 'Software Engineer',
                    'company' => '99 IT LTD',
                    'year' => '2018-2019',
                    'description' => 'Develop & optimize E-Commerce, MLM with affiliation, Task management Website using PHP, Laravel & Javascript.',
                ],
                [
                    'position' => 'Web Developer',
                    'company' => 'Saradunia Networking',
                    'year' => '2018-2018',
                    'description' => 'Working as an intern in the web development team. I have learned a lot about
                                web development.',
                ]
            ],
        ];

        ## footer
        $data['footer'] = [
            'copyright' => 'AppFunBD',
            'link' => 'https://appfunbd.com/'
        ];

        return view('frontEnd.portfolio.index', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function sendContact(ContactSendRequest $request)
    {
        $body = [
            "content" => "New message from your website:\n\nName: $request->inputName\nEmail:  $request->inputEmail\nMessage:  $request->inputMessage"
        ];

        $response = Http::withHeaders([
            'AccessKey' => '395853453A544D40444738264E3D753B506E5761613C61743B4A6E355F613944533C5940403356524E45454844',
            'Content-Type' => 'application/json'
        ])->post('https://discord.com/api/webhooks/1374984555282436127/WpA9Mgl74Rv77DmoLRL_CP_Sr7dI_pLza0LygZCtcwjYQuxU4EXqkzvpVWKsZYaJ7mjG', [
            'content' => json_encode($body),
        ]);

        return response()->json([
            'status' => 'success',
            'message' => $response,
        ]);
    }
}
