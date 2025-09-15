<?php
$category = "Browser Extension";
$project_title = "Dynamic E-commerce Data Extraction Tool";
// Remove special characters and replace spaces with underscores
$project_id = strtolower(str_replace(' ', '_', preg_replace('/[^a-zA-Z0-9\s]/', '', $project_title)));

?>

<div class="col-lg-4 col-md-6 grid-item extension">
    <div class="box">
        <img alt="portfolio image" src="/image/portfolio/extension/scraper.png"/>
        <div class="box-content">
                        <span class="category">
                        <?php echo $category; ?>
                        </span>
            <h3 class="title">
                <?php echo $project_title; ?>
            </h3>
        </div>
        <div class="icon-box">
            <a data-bs-target="#<?php echo $project_id; ?>" data-bs-toggle="modal" href="#">
                <i class="bi bi-arrows-angle-expand"></i>
            </a>
        </div>
        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="<?php echo $project_id; ?>" class="modal fade" id="<?php echo $project_id; ?>"
             tabindex="-1">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-body">
                        <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button">
                            <i class="bi bi-x"></i>
                        </button>
                        <div class="row item-content">
                            <div class="col-xl-12">
                                <img alt="portfolio image" src="/image/portfolio/extension/scraper.png"/>
                            </div>
                            <div class="col-xl-8">
                                <div class="content-wrapper">
                                    <h2 class="item-title">
                                        <?php echo $project_title; ?>
                                    </h2>
                                    <p>
                                        A web scraping tool designed to extract product information from an e-commerce website. The tool utilizes JavaScript to scrape various data elements such as product titles, prices, descriptions, specifications, images, categories, and URLs from the target website's HTML structure. It organizes this data into a structured JSON format and performs actions such as opening product URLs in new browser tabs and sending the collected data to a designated endpoint via a POST request. The project aims to provide a comprehensive solution for gathering and processing product data from e-commerce websites efficiently.
                                    </p>
                                    <br>
                                    <h5>𝐊𝐞𝐲 𝐅𝐞𝐚𝐭𝐮𝐫𝐞𝐬:</h5>
                                    <ul>
                                        <li><strong>Dynamic Data Extraction:</strong> Extracts diverse product information like titles, prices, descriptions, specifications, images, categories, and URLs from webpage HTML, employing DOM manipulation techniques.</li>
                                        <li><strong>Data Transformation:</strong> Transforms extracted data into structured JSON format, facilitating manipulation and transmission, with options for modifying data elements as needed.</li>
                                        <li><strong>Parallel Processing:</strong> Opens product URLs in separate browser tabs for simultaneous processing, improving efficiency by enabling concurrent scraping of multiple pages.</li>
                                        <li><strong>Pagination Handling:</strong> Includes logic for navigating pagination, allowing scraping of data from multiple search result pages, enhancing scalability for large datasets.</li>
                                        <li><strong>Asynchronous Execution:</strong> Delays execution using setTimeout, ensuring controlled and asynchronous processing, preventing performance issues and browser crashes.</li>
                                        <li><strong>Error Handling:</strong> Incorporates checks to manage variations in HTML structure and filter out incomplete or irrelevant data, ensuring integrity and accuracy of collected information.</li>
                                        <li><strong>Scalability:</strong> Designed to handle large volumes of product data across multiple pages, offering flexibility for customization and integration with other systems.</li>
                                        <li><strong>Automation:</strong> Automates scraping process, reducing manual effort and enabling continuous data collection for regular updates, maintaining data currency and relevance.</li>
                                    </ul>

                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="meta-wrapper">
                                    <ul class="item-meta">
                                        <li>
                                            Language:
                                            <span class="meta-value">
                                                        Javascript
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- .meta-wrapper -->
                            </div>
                        </div>
                        <!-- .row -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>