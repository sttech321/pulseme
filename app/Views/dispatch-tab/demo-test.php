<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>pulseM</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="https://kiliassets.speetra.com/favicon/favicon-32x32.png">
    <link rel="stylesheet" type="text/css" href="/css/header.css">
    <link rel="stylesheet" type="text/css" href="/css/reset.css">
    <link rel="stylesheet" type="text/css" href="/css/reviews.css">
    <link rel="stylesheet" type="text/css" href="/css/analysis.css">
    <link rel="stylesheet" type="text/css" href="/css/variables.css">
    <link rel="stylesheet" type="text/css" href="/css/all.min.css">
</head>
 <div class="leftSec">
 <p>Dispatch Table: <?= esc($dispatchTable) ?></p>
 <p>Dispatch column: <?= esc($dispatchcolumn) ?></p>
           <?php if (session()->getFlashdata('message')): ?>
            <div class="alert alert-success"><?= session()->getFlashdata('message') ?></div>
        <?php elseif (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
        <?php endif; ?>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-md" data-bs-toggle="modal" data-bs-target="#campaignModal">
        <i class="fa fa-plus mr-3" aria-hidden="true"></i> Create Campaign
    </button>
    <div class="modal fade" id="campaignModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <!-- Modal -->
        <div class="modal-dialog modalContent mx-700">
            <div class="modal-content">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <form method="post" action="<?= site_url('/display-tables') ?>" enctype="multipart/form-data">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Create campaign</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="grid grid-cols-2 gap-20px auto-rows-auto">
                                    <div class="flex w-full flex-col row-span-3">
                                        <img class="w-200px h-auto" src="https://kiliassets.speetra.com/prod/account_images/15407/campaign/1B85A09AA6CF1/1711571243_original.jpg" alt="Aaron Krasnow">
                                        <p class="text-md">Upload your image</p>
                                        <p class="text-sm mb-3">The preferred size is 200x200</p>
                                        <input id="logo-upload" hidden="" type="file">
                                        <button class="btn btn-blue w-full mb-2">
                                            <input type="file" id="profile-image-upload-1" name="image" style="display: block;" accept="image/*">
                                        </button>
                                    </div>
                                    <div class="input-group">
                                        <label class="font-bold text-sm" for="campaignName">Campaign Name</label>
                                        <input class="w-full p-5px outline-none border-b focus:border-blue-500" type="text" name="Campaign_name" id="campaignName">
                                    </div>
                                    <div class="input-group row-span-2">
                                        <label class="font-bold text-sm" for="description">Campaign Description</label>
                                        <textarea class="w-full p-5px outline-none border-b focus:border-blue-500" type="text" name="campaign_description" rows="5" id="description"></textarea>
                                    </div>
                                    <div class="input-group">
                                        <label class="font-bold text-sm" for="department">Department</label>
                                        <input class="w-full p-5px outline-none border-b focus:border-blue-500" type="text" name="campaign_department" id="department">
                                    </div>
                                    <div class="input-group">
                                        <label class="font-bold text-sm" for="license">License</label>
                                        <input class="w-full p-5px outline-none border-b focus:border-blue-500" type="text" name="license" id="license">
                                    </div>
                                    <div class="input-group">
                                        <label class="font-bold text-sm" for="employeeID">Employee ID <span class="text-xs">(Useful for API Integrations)</span></label>
                                        <input class="w-full p-5px outline-none border-b focus:border-blue-500" type="text" name="employee_id" id="employeeID">
                                    </div>
                                    <div class="input-group">
                                        <label class="font-bold text-sm" for="email">Email <span class="text-xs">(descriptor)</span></label>
                                        <input class="w-full p-5px outline-none border-b focus:border-blue-500" type="text" name="email" id="email">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary btn-md" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary btn-md">Submit changes</button>
                                </div>
                            </div>
                        </form>
                    </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>

<script src="/js/bootstrap.bundle.min.js"></script>