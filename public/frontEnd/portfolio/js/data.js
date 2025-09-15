let appData = {
    person: {
        fName: 'Abdul',
        lName: 'Alim',
        fullName: 'Abdul Alim',
        photo: 'assets/img/about/person.jpg',
        photoTransparent: 'assets/img/banner/person.png',
        photoAlt: 'assets/img/about/person.jpg',
        cvLink: 'assets/img/about/person.jpg',
        moreInfoOne: {
            name: 'Abdul Alim',
            address: 'Dhaka, Bangladesh',
            email: 'aralim11@gmail.com',
        },
        skills: ['Software Engineer', 'Web Application Developer'],
    },

    navBar: {
        menuItems: [
            {name: 'Home', href: '#site-header'},
            {name: 'About', href: '#about-section'},
            {name: 'Skills', href: '#skill-section'},
            {name: 'Portfolio', href: '#portfolio-section'},
            {name: 'Service', href: '#service-section'},
            {name: 'Resume', href: '#resume-section'},
            {name: 'Contact', href: '#contact-section'}
        ],
        socialMedia: [
            {icon: 'fab fa-linkedin', link: 'https://www.linkedin.com/in/md-abdul-alim-177b4910b/'},
            {icon: 'fab fa-github', link: 'https://github.com/aralim11'},
        ]
    },

    about: {
        title: 'About Me',
        subtitle: 'Software Engineer | Web Application Developer',
        description: 'As a proficient Software Engineer with expertise in developing innovative solutions and robust software systems, I excel in various programming languages and technologies, prioritizing optimization and user experience. Additionally, as an Automation Expert specializing in RPA, Data Mining, and Web Scraping, I bring a unique blend of skills to the table. With a strong foundation in software engineering, I leverage automation to optimize processes and enhance user experiences, seamlessly integrating cutting-edge technology to drive efficiency and innovation.'
    },

    skills: {
        title: 'My Skills',
        subtitle: 'My technical level',
        languages: [
            'PHP',
            'Laravel',
            'Python',
            'JavaScript',
            'Wordpress'
        ]
    },

    services: {
        title: 'My Services',
        subtitle: 'Empowering Your Success: Explore My Range of Services',
        items: [
            {
                icon: 'pe-7s-config',
                title: 'RPA Development',
                description: 'Crafting robust and scalable solutions while ensuring seamless integration of new features, bug fixing, and enhancing overall functionality.'
            },
            {
                icon: 'pe-7s-network',
                title: 'Workflow Automation',
                description: 'Designing and implementing automated workflows to streamline business processes, reduce manual tasks, and improve operational efficiency.'
            },
            {
                icon: 'pe-7s-graph2',
                title: 'Data Mining & Web Scraping',
                description: 'Extracting valuable insights from data sources and websites, transforming raw data into actionable business intelligence through automated collection and analysis.'
            },
            {
                icon: 'pe-7s-monitor',
                title: 'Software Development',
                description: 'Crafting robust and scalable solutions while ensuring seamless integration of new features, bug fixing, and enhancing overall functionality.'
            },
            {
                icon: 'pe-7s-graph3',
                title: 'Website Maintenance',
                description: 'Implementing regular updates, monitoring performance, and optimizing websites.'
            },
            {
                icon: 'pe-7s-browser',
                title: 'Chrome Extensions Development',
                description: 'Creating customized browser extensions that extend functionality and enhance user productivity.'
            }
        ]
    },

    resume: {
        title: 'My Resume',
        subtitle: 'My Education & Experience',
        educations: [
            {
                icon: 'pe-7s-study',
                title: 'BSc in Computer science and engineering',
                duration: '2014-2018',
                university: 'Dhaka International University',
                description: ''
            },
            {
                icon: 'pe-7s-study',
                title: 'Ship Building and Welding Technology',
                duration: '2018-2020',
                university: 'Bangladesh Institute of Marine Technology',
                description: ''
            },

        ],
        experiences: [
            {
                icon: 'pe-7s-portfolio',
                title: 'Software Engineer | Automation Expert',
                duration: '2021-Present',
                company: 'Arizona Web Pro',
                description: ''
            },
            {
                icon: 'pe-7s-portfolio',
                title: 'Software Engineer',
                duration: '01/2019-12/2019',
                company: 'JMIGroup BD',
                description: ''
            },
            {
                icon: 'pe-7s-portfolio',
                title: 'Web and Android Developer',
                duration: '2016-2020',
                company: 'Fiverr',
                description: ''
            },
        ]
    },

    contact: {
        title: 'Contact Me',
        subtitle: 'Let\'s Connect: Reach Out and Let\'s Make Things Happen',
        form: {
            name: 'Name',
            email: 'Email',
            subject: 'Subject',
            message: 'Message',
            submit: 'Send Message'
        }
    },

    portfolio: {
        title: 'Portfolio',
        subtitle: 'Showcasing Expertise: A Glimpse into My Professional Journey',
        filter: 'All',
    },

    footer: {
        copyright: '<p>All rights reserved © 2025 <strong>MEHADI.ME</strong></p>',
    },

}
