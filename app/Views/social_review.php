<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<style>
    .tab-link.active {
        font-weight: bold;
        color: #1a73e8;
        /* Example color */
    }

    .sk-ww-google-reviews.socialReviews {
        background-color: transparent !important;
        margin-top: 22px;
    }

    .socialReviews .sk_branding a {
        display: none !important;
    }

    .sk-ww-google-reviews-review-text-container {
        margin-bottom: 15px;
    }

    .socialReviews .sk_reviews_grid-content {
        border-radius: 12px !important;
    }

    .pb-20 {
        padding-bottom: 20px;
    }
</style>
<div class="headerTop">
    <div class="dropMenuWrap flexBetween">
        <div class="pageNameWrap">
            <h3 class="secTitle">Reviews</h3>
        </div>
        <div class="rightWrap">
            <div class="location-info flex flex-col justify-center items-end mr-10px">
                <p class="leading-tight" id="Hales-AC-Service">Hales AC Service</p>
                <p class="leading-tight">4700 95Th St N</p>
                <p class="leading-tight">Saint Petersburg, FL US 33708-3728</p>
            </div>
        </div>
    </div>
</div>
<div class="sidebarRightContent socialReviewsWrap">
    <div class="flex-grow flex flex-col items-stretch bg-gray-100 h-auto">
        <div class="p-20px bg-white">
            <h2 class="text-2xl">Reviews</h2>
        </div>
        <div class="px-15px bg-white flex justify-start items-center pb-20">
            <a href="<?= base_url('/analyze/reviews') ?>" class="tab-link" aria-current="page">Reviews</a>
            <a href="<?= base_url('/analyze/reviews/social-reviews') ?>" class="tab-link border-b-2 border-blue-500 text-blue-500 router-link-exact-active p-15px">Social Reviews</a>
        </div>
    </div>
    <div class='sk-ww-google-reviews socialReviews' data-embed-id='25459433'></div>
    <script src='https://widgets.sociablekit.com/google-reviews/widget.js' async defer></script>
</div>

<script>
    // $(document).ready(function() {
    //     $(document).on('change', '.campaignSelect', function() {
    //         var selectedValue = $(this).val();
    //         var selectedText = $(this).find('option:selected').text();
    //         var buttonID = $(this).closest('button').attr('id');
    //         var data = {
    //             campaignID: selectedValue,
    //             campaignName: selectedText,
    //             buttonID: buttonID
    //         };

    //         $.ajax({
    //             url: '<?= base_url('/analyze/reviews/social-reviews/update') ?>',
    //             type: 'POST',
    //             data: data,
    //             contentType: 'application/x-www-form-urlencoded',
    //             success: function(response) {
    //                 window.location.reload();
    //             },
    //             error: function(xhr, status, error) {
    //                 console.error('AJAX Error:', error);
    //             }
    //         });
    //     });
    // });
</script>

<script>
//     $(document).ready(function() {
//         $(document).on('click', '.delete-button', function() {
//             var button = $(this);
//             var creditToJson = button.data('credit-to');
//             var parentDiv = button.closest('div.bg-white');
//             var divId = parentDiv.attr('id');

//             try {
//                 // Parse the JSON string to object
//                 var creditToData = JSON.parse(creditToJson);
//                 console.log(creditToData, '111111');
//                 // Create the confirmation buttons
//                 var confirmationButtons = `
//                 <div class="confirm">
//                     <button class="btn btn-blue rounded-full relative z-1">
//                         <svg class="svg-inline--fa fa-paper-plane mr-5px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="paper-plane" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
//                             <path fill="currentColor" d="M498.1 5.6c10.1 7 15.4 19.1 13.5 31.2l-64 416c-1.5 9.7-7.4 18.2-16 23s-18.9 5.4-28 1.6L284 427.7l-68.5 74.1c-8.9 9.7-22.9 12.9-35.2 8.1S160 493.2 160 480V396.4c0-4 1.5-7.8 4.2-10.7L331.8 202.8c5.8-6.3 5.6-16-.4-22s-15.7-6.4-22-.7L106 360.8 17.7 316.6C7.1 311.3 .3 300.7 0 288.9s5.9-22.8 16.1-28.7l448-256c10.7-6.1 23.9-5.5 34 1.4z"></path>
//                         </svg>
//                         <span>${creditToData}</span>
//                     </button>
//                     <button class="btn btn-red rounded-full relative pl-40px" style="transform: translateX(-32px); margin-right: -32px;">
//                         Remove
//                     </button>
//                 </div>`;
//             console.log(confirmationButtons, '333333');
//             // Replace the existing button with the confirmation buttons
//             button.replaceWith(confirmationButtons);
//             // Attach click event to the new remove button
//             parentDiv.find('.confirm .btn-red').on('click', function() {
//                 // Directly perform the AJAX request to delete the item
//                 $.ajax({
//                     url: '<?=base_url('/analyze/reviews/social-reviews/delete')?>',
//                     type: 'POST',
//                     data: {
//                         creditTo: creditToJson,
//                         divId: divId
//                     },
//                     dataType: 'json',
//                     contentType: 'application/x-www-form-urlencoded',
//                     success: function(response) {
//                         parentDiv.remove();  // Remove the parentDiv directly after successful deletion
//                         console.log(button, 'dddd');
//                         location.reload();  // Reload the page after successful deletion
//                     },
//                     error: function(xhr, status, error) {
// 						location.reload();
//                     }
//                 });
//             });
//         } catch (e) {
//             console.error('JSON Parse Error:', e);
//             alert('Invalid data format. Please try again.');
//         }
//     });

// });
</script>

<?= $this->endsection('content') ?>


