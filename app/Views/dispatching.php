<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="headerTop">
   <div class="dropMenuWrap flexBetween">
      <div class="pageNameWrap">
         <h3 class="secTitle">Dispatch</h3>
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
<!-- <div class="container-fluid"> -->
<div class="sidebarRightContent">
   <div class="flex-grow flex flex-col items-stretch bg-gray-100 h-auto">
      <div class="sub-menu-bar flex flex-col items-stretch h-full">
         <!-- <div class="bg-white p-20px"> -->
            <!-- <h2 class="text-2xl">Dispatch</h2> -->
         <!-- </div> -->
         <!-- <div class="bg-white px-15px flex justify-start items-center"><a aria-current="page" href="<?= base_url('/operate/dispatch')?>"
            class="border-b-2 border-blue-500 router-link-exact-active p-10px" id="dispatch-link">Dispatch</a> -->
            <!-- <a href="/operate/contact-card" class="p-10px" id="contact-card-link">Contact Card</a> -->
            <!-- <a href="/operate/quick-actions" class="p-10px" id="quick-actions-link">Quick Actions</a> -->
         </div>
         <div class="flex-grow">
            <div class="p-25px">
               <div class="main p-2rem bg-white rounded">
                  <h2 class="text-2xl">Dispatch</h2>
                  <div class="menu flex w-full justify-end mb-2rem">
                     <div class="dropdown relative">
                        <button>
                           <svg class="svg-inline--fa fa-bars" aria-hidden="true"
                              focusable="false" data-prefix="fas" data-icon="bars" role="img"
                              xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path class="" fill="currentColor"
                                 d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z">
                              </path>
                           </svg>
                        </button>
                        <!---->
                     </div>
                  </div>
                  <!----><!----><!---->
                  <div class="search flex w-full mb-10px flex justify-between items-center">
                     <div class="search-input border border-gray-300 rounded-4px px-10px py-5px flex items-center">
                        <!-- <input class="border-0 ml-10px w-300px outline-none" type="search" name="search" id="search" placeholder="Search by name or department"> -->
                        <svg class="svg-inline--fa fa-magnifying-glass" aria-hidden="true" focusable="false"
                           data-prefix="fas" data-icon="magnifying-glass" role="img"
                           xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                           <path class="" fill="currentColor"
                              d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z">
                           </path>
                        </svg>
                        <input type="text" id="search" name="search" placeholder="Search by name or code...">
                     </div>
                     <div class="batch-send">
                        <!-- <button class="btn btn-blue"> -->
                           <!-- <svg class="svg-inline--fa fa-reply-all"
                              aria-hidden="true" focusable="false" data-prefix="fas" data-icon="reply-all"
                              role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                              <path class="" fill="currentColor"
                                 d="M209.4 39.5c-9.1-9.6-24.3-10-33.9-.9L33.8 173.2c-19.9 18.9-19.9 50.7 0 69.6L175.5 377.4c9.6 9.1 24.8 8.7 33.9-.9s8.7-24.8-.9-33.9L66.8 208 208.5 73.4c9.6-9.1 10-24.3 .9-33.9zM352 64c0-12.6-7.4-24.1-19-29.2s-25-3-34.4 5.4l-160 144c-6.7 6.1-10.6 14.7-10.6 23.8s3.9 17.7 10.6 23.8l160 144c9.4 8.5 22.9 10.6 34.4 5.4s19-16.6 19-29.2V288h32c53 0 96 43 96 96c0 30.4-12.8 47.9-22.2 56.7c-5.5 5.1-9.8 12-9.8 19.5c0 10.9 8.8 19.7 19.7 19.7c2.8 0 5.6-.6 8.1-1.9C494.5 467.9 576 417.3 576 304c0-97.2-78.8-176-176-176H352V64z">
                              </path>
                           </svg> -->
                           <!-- Send to Multiple Customers -->
                        <!-- </button> -->
                     </div>
                  </div>
                  <?php if (!empty($technicians)): ?>
                     <div class="list">
                     <div class="error" style="color:red"></div>
                        <table class="w-full">
                           <?php foreach ($technicians as $technician): ?>
                              <tr class="flex p-20px odd:bg-sky-50" id="<?= $technician['ID'] ?>">

                              <!-- <form id="ajaxForm"> -->
                              <form id="form_<?= $technician['ID'] ?>" class="ajaxForm" action="<?= base_url('example/submit') ?>" method="post">
                              <input type="hidden" id="campaignid" value="<?= $technician['ID'] ?>" name="campaignid" required>
                              <input type="hidden" id="employeeid" name="employeeid" value="<?= $technician['employeeId'] ?>" required>
                                 
                              <td class="employee flex items-center w-1/4">
                                 <div class="profile-img w-100px h-100px rounded-1/2 bg-center bg-contain bg-no-repeat min-h-50px mr-10px flex-shrink-0"
                                 id="<?= $technician['ID'] ?>" style="position: relative; background-image: url('<?= $technician['image'] ?>');">
                              </div>
                              <div class="flex-grow">
                                 <p class="name"><?= $technician['name'] ?></p>
                                 <!-- <p class="department text-gray-400">Service Technician</p>  -->
                                 <p class="department text-gray-400"><?= $technician['department'] ?></p>       
                              </div>
                           </td>
                           <td class="recipient-info grid grid-cols-6 gap-5px flex-grow">
                              <div class="input-group col-span-3 flex items-center">
                                 <div class="mr-10px flex justify-center items-center">

                                 </div>
                                 <input
                                    class="w-full bg-transparent outline-none border-b-1 focus:border-blue-500 py-7px"
                                    type="tel" name="customer_phone" class="customer_phone" id="phone_<?= $technician['ID'] ?>" placeholder="Phone Number" required>
                              </div>
                              <div class="input-group col-span-3 flex items-center">
                                 <div class="mr-10px flex justify-center items-center">
                                   
                                 </div>
                                
                                 <input
                                    class="w-full bg-transparent outline-none border-b-1 focus:border-blue-500 py-7px"
                                    type="email" name="customer_email" class="customer_email" id="email_<?= $technician['ID'] ?>" placeholder="Email" required> 
                              </div>
                              <div class="input-group col-span-3 lg:col-span-2 flex items-center">
                                 <div class="mr-10px flex justify-center items-center">
                                    
                                 </div>
                                 <input
                                    class="w-full bg-transparent outline-none border-b-1 focus:border-blue-500 py-7px"
                                    type="text" name="customer_name" id="name_<?= $technician['ID'] ?>"
                                    placeholder="Name (Optional)">
                              </div>
                              <div class="input-group col-span-3 lg:col-span-4 flex items-center">
                                 <div class="mr-10px flex justify-center items-center">
                                    
                                 </div>
                                 <input class="w-full bg-transparent outline-none border-b-1 focus:border-blue-500 py-7px" type="text" name="customer_address" id="address_<?= $technician['ID'] ?>" placeholder="Address (Optional)">
                              </div>
                              <div class="flex justify-start items-center py-5px col-span-6">
                                 <div class="flex justify-start items-center col-span-3 cursor-pointer">
                                 <input type="checkbox" id="test-checkbox">
                                 <!-- <input type="checkbox" name="test_checkbox" id="test-checkbox"> -->
                                 <p style="margin-left:10px;">Mark as test</p>
                                 </div>
                              </div>
                           </td>
                           <td class="buttons flex flex-col justify-center items-end px-4 w-1/4">
                           <!-- Other form fields -->
                           <input type="hidden" id="actionType_<?= $technician['ID'] ?>" name="actionType" value=""/>
                           <button
                              class="btn btn-blue max-w-200px w-full rounded-2px mb-2"
                              id="btn1" type="button" onclick="submitForm('form_<?= $technician['ID'] ?>', 'bio')">
                              Send Bio
                           </button>
                           <button
                              class="btn btn-green max-w-200px w-full rounded-2px"
                              id="btn2" type="button" onclick="submitForm('form_<?= $technician['ID'] ?>', 'pulsecheck')">
                              Send Pulse Check
                           </button>
                        </form>
                        </tr>
                        <?php endforeach; ?>
                     </table>
                  </div>
                  <?php else: ?>
                  <p>No technician data available.</p>
                  <?php endif; ?> 
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<script>

$(document).ready(function() {
    var technicianid =  $(this).val('#campaignid');
    console.log(technicianid,'ddddddd');
      // Handle input changes in search bar
      $('#search').on('input', function() {
         var query = $(this).val();
         if (query) {
          loadTechnicians(query);
         } else {
          loadTechnicians();
         }
     });

     function loadTechnicians(query = '') {
      var url = query ? '<?= base_url('/search') ?>' : '<?= base_url('/getAllTechnicians') ?>';
      
         $.ajax({
             url: url,
             type: 'post',
             data: { query: query },
             success: function(data) {
                 var resultsContainer = $('.list');
                 resultsContainer.empty(); // Clear previous results

                 if (data.length > 0) {
                  // var error = $('.error');
                     var table = $('<div class="w-full"></div>');
                     $.each(data, function(index, technician) {
                         var row = `<div class="flex p-20px odd:bg-sky-50">
                            <form id="form_${technician.ID}" style="width:100%;" class="ajaxForm" action="<?= base_url('example/submit') ?>" method="post">
                                <input type="hidden" id="campaignid" name="campaignid" value="${technician.ID}" required>
                                <input type="hidden" id="employeeid" name="employeeid" value="${technician.employeeId}" required>
                                <div style="display: flex;justify-content: space-between;align-items: center;">
                                <div class="employee flex items-center w-1/4">
                                    <div class="profile-img w-100px h-100px rounded-1/2 bg-center bg-contain bg-no-repeat min-h-50px mr-10px flex-shrink-0" style="background-image: url('${technician.image}');"></div>
                                    <div class="flex-grow">
                                        <p class="name">${technician.name}</p>
                                        <p class="department text-gray-400">${technician.department}</p>       
                                    </div>
                                </div>
                                <div class="recipient-info grid grid-cols-6 gap-5px flex-grow">
                                    <div class="input-group col-span-3 flex items-center">
                                        <input class="w-full bg-transparent outline-none border-b-1 focus:border-blue-500 py-7px"
                                    type="tel" name="customer_phone" class="customer_phone" id="phone_${technician.ID}" placeholder="Phone Number" required>
                                    </div>
                                    <div class="input-group col-span-3 flex items-center">
                                        <input class="w-full bg-transparent outline-none border-b-1 focus:border-blue-500 py-7px"
                                    type="email" name="customer_email" class="customer_email" id="email_${technician.ID}" placeholder="Email" required> 
                                    </div>
                                    <div class="input-group col-span-3 lg:col-span-2 flex items-center">
                                         <input class="w-full bg-transparent outline-none border-b-1 focus:border-blue-500 py-7px" type="text" name="customer_name" id="name_${technician.ID}" placeholder="Name (Optional)">
                                    </div>
                                    <div class="input-group col-span-3 lg:col-span-4 flex items-center">
                                        <input class="w-full bg-transparent outline-none border-b-1 focus:border-blue-500 py-7px" type="text" name="customer_address" placeholder="Address (Optional)">
                                    </div>
                                    <div class="flex justify-start items-center py-5px col-span-6">
                                        <div class="flex justify-start items-center col-span-3 cursor-pointer">
                                            <input type="checkbox" name="test_checkbox">
                                            <p style="margin-left:10px;">Mark as test</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="buttons flex flex-col justify-center items-end px-4 w-1/4">
                                 <input type="hidden" id="actionType_${technician.ID}" name="actionType" value=""/>
                                    <button class="btn btn-blue max-w-200px w-full rounded-2px mb-2" type="button" onclick="submitForm('form_${technician.ID}', 'bio')">Send Bio</button>
                                    <button class="btn btn-green max-w-200px w-full rounded-2px" type="button" onclick="submitForm('form_${technician.ID}', 'pulsecheck')">Send Pulse Check</button>
                                </div></div>
                            </form>
                        </div>`;
                         table.append(row);
                     });
                     resultsContainer.append(table);
                 } else {
                     resultsContainer.html('<p>No results found.</p>');
                 }
             }
         });
     }
});

function submitForm(formId, actionType) {
    var form = $('#' + formId);
    var actionTypeField = $('#actionType_' + formId.split('_')[1]);
    actionTypeField.val(actionType);
    var phone = $('.customer_phone').val();
    var email = $('.customer_email').val();

    console.log('Form Data:', form.serialize()); // Debugging statement
    console.log('Action Type:', actionTypeField.val());

    $.ajax({
        url: $('#' + formId).attr('action'), // Get URL from the form action attribute
        type: 'POST',
        data: $('#' + formId).serialize(), // Serialize form data
        dataType: 'json', // Expect JSON response
        success: function(response) {
            console.log('Response:', response); // Debugging statement
         if(response.status === 'success'){ 
            location.reload();
         } else if(response.status === 'error') {
            let errorMessage = '';
            $.each(response.errors, function(field, error) {
                errorMessage += error + '<br>';
            });
            $('.error').html(errorMessage);
         } else {
                  console.log('Response:', response); // Debugging statement
         }
        },
        error: function(xhr, status, error) {
            console.log('Error:', error); // Debugging statement
            $('.error').text('An error occurred while submitting the form.'); 
        }
    });
}
</script>
<?= $this->endsection('content') ?>