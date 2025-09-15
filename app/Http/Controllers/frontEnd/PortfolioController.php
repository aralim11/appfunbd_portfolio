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
        $data['description'] = "I am a dedicated Software Engineer and Web Application Developer with expertise in custom PHP and Laravel development. I specialize in designing and building secure, scalable, and high-performance web applications tailored to meet specific business requirements. With a strong foundation in backend architecture, API development, and modern web standards, I deliver clean, maintainable code and reliable solutions that drive digital success.";

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
                            'name' => 'Complain Management System',
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
                    'year' => '2020 - Present',
                    'description' => 'Develop and maintain multiple solutions using Laravel, mySql, Jquery technologies,
                                ensuring seamless functionality and user-friendly experiences.',
                ],
                [
                    'position' => 'Software Engineer',
                    'company' => '99 IT LTD',
                    'year' => '2018-2018',
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

// 6LcCFEMrAAAAAAySEWu1v6_sOGTuIESMGzdEKDRV
// 6LcCFEMrAAAAADxoeNFmy5emRgK_U56fGhrhlTL_
