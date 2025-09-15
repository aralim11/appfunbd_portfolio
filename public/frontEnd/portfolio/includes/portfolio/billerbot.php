<?php
$category = "Robotic process automation (RPA)";
$project_title = "Auto Submit Bills on Appfolio.com";
// Remove special characters and replace spaces with underscores
$project_id = strtolower(str_replace(' ', '_', preg_replace('/[^a-zA-Z0-9\s]/', '', $project_title)));
$category_id = "rpa";
$img_url = "/image/portfolio/rpa/automatic-bill-payment.jpg";
?>

<div class="col-lg-4 col-md-6 grid-item <?php echo $category_id; ?>">
    <div class="box">
        <img alt="portfolio image" src="<?php echo $img_url; ?>"/>
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
                                <img alt="portfolio image" src="<?php echo $img_url; ?>"/>
                            </div>
                            <div class="col-xl-8">
                                <div class="content-wrapper">
                                    <h2 class="item-title">
                                        <?php echo $project_title; ?>
                                    </h2>
                                    <p>This automation project simplifies the process of submitting bills on Appfolio.com for real estate administrators. By automating the steps involved, users can quickly log in, add new bills, fill in necessary details, upload files, save bills, and seamlessly move on to adding more bills without interruptions.</p>
                                    <br>
                                    <h5>𝐊𝐞𝐲 𝐅𝐞𝐚𝐭𝐮𝐫𝐞𝐬:</h5>
                                    <ul>
                                        <li><strong>Easy Navigation:</strong> The automation script swiftly takes users to the bill submission section after logging in with real estate admin credentials.</li>
                                        <li><strong>Automatic Login:</strong> Users are automatically logged in with their admin details, ensuring hassle-free access to the bill management interface.</li>
                                        <li><strong>Simplified Bill Submission:</strong> The script fills in essential fields like vendor info and invoice details.</li>
                                        <li><strong>File Upload Made Easy:</strong> It automates file uploads, saving users from manually selecting and uploading files like invoices or receipts.</li>
                                        <li><strong>Error Handling:</strong> The script detects and handles errors during submission, ensuring reliable bill processing.</li>
                                        <li><strong>Efficient Bill Saving:</strong> Once all details are entered and files uploaded, bills are automatically saved securely.</li>
                                        <li><strong>Add Another Bill:</strong> After submitting a bill, users can seamlessly start adding another, optimizing workflow.</li>
                                        <li><strong>Scalability:</strong> The solution can manage bills across multiple properties or portfolios, scaling as needed.</li>
                                    </ul>

                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="meta-wrapper">
                                    <ul class="item-meta">
                                        <li>
                                            RPA Tool:
                                            <span class="meta-value">
                                                        Robomotion RPA
                                            </span>
                                        </li>

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