<?php
$category = "Software Development";
$project_title = "Villicus Monitoring System Server using Python";
// Remove special characters and replace spaces with underscores
$project_id = strtolower(str_replace(' ', '_', preg_replace('/[^a-zA-Z0-9\s]/', '', $project_title)));
$category_id = "development";
?>

<div class="col-lg-4 col-md-6 grid-item <?php echo $category_id; ?>">
    <div class="box">
        <img alt="portfolio image" src="/image/portfolio/development/VMS.png"/>
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
                                <img alt="portfolio image" src="/image/portfolio/development/VMS.png"/>
                            </div>
                            <div class="col-xl-8">
                                <div class="content-wrapper">
                                    <h2 class="item-title">
                                        <?php echo $project_title; ?>
                                    </h2>
                                    <p>The Villicus Monitoring System Server is a robust TCP server application tailored for industrial automation and control systems. Its primary function is to facilitate seamless communication between client devices and Programmable Logic Controllers (PLCs), with a specific focus on the Micro800</p>
                                    <br>
                                    <h5>𝐊𝐞𝐲 𝐅𝐞𝐚𝐭𝐮𝐫𝐞𝐬:</h5>
                                    <ul>
                                        <li><strong>Real-time Communication:</strong> The server establishes and maintains TCP/IP connections with client devices, ensuring real-time data transmission and control signals exchange over IP networks.</li>
                                        <li><strong>Efficient Data Serialization:</strong> Utilizing JSON (JavaScript Object Notation) serialization, the server efficiently structures data for transmission, enhancing compatibility and ease of integration with client applications.</li>
                                        <li><strong>Data Compression:</strong> Advanced data compression techniques, including zlib and base64 encoding, are employed to optimize bandwidth usage and maximize network performance, crucial for handling large volumes of data in industrial environments.</li>
                                        <li><strong>PLC Interaction:</strong> The server seamlessly interacts with Micro800 series PLCs, offering essential functionalities such as reading tag values, writing tag values, and retrieving tag updates. This enables clients to remotely monitor, diagnose, and control PLC operations.</li>
                                        <li><strong>Concurrent Client Handling:</strong> Leveraging multithreading capabilities, the server efficiently handles multiple client connections concurrently, ensuring scalability and responsiveness to accommodate a high number of client devices without compromising performance.</li>
                                        <li><strong>Fault Tolerance:</strong> Robust error handling mechanisms are integrated into the server to detect and gracefully manage exceptions, ensuring uninterrupted operation and reliability under diverse operating conditions.</li>
                                        <li><strong>Configurability:</strong> The server's configuration parameters, including IP address and port number, can be easily customized via an external configuration file (app_config.py), providing flexibility for deployment in various industrial network environments.</li>
                                    </ul>

                                    <p>
                                        This project is designed for practical deployment in real-world industrial settings, offering a reliable and scalable solution for facilitating communication between client devices and PLCs.
                                    </p>

                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="meta-wrapper">
                                    <ul class="item-meta">
                                        <li>
                                            Language:
                                            <span class="meta-value">
                                                        Python
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