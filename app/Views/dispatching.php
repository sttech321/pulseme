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
         <div class="bg-white p-20px">
            <h2 class="text-2xl">Dispatch</h2>
         </div>
         <div class="bg-white px-15px flex justify-start items-center"><a aria-current="page" href="/operate/dispatch"
            class="border-b-2 border-blue-500 router-link-exact-active p-10px" id="dispatch-link">Dispatch</a><a
            href="/operate/contact-card" class="p-10px" id="contact-card-link">Contact Card</a><a
            href="/operate/quick-actions" class="p-10px" id="quick-actions-link">Quick Actions</a></div>
         <div class="flex-grow">
            <div class="p-25px">
               <div class="main p-2rem bg-white rounded">
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
                        <button class="btn btn-blue">
                           <svg class="svg-inline--fa fa-reply-all"
                              aria-hidden="true" focusable="false" data-prefix="fas" data-icon="reply-all"
                              role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                              <path class="" fill="currentColor"
                                 d="M209.4 39.5c-9.1-9.6-24.3-10-33.9-.9L33.8 173.2c-19.9 18.9-19.9 50.7 0 69.6L175.5 377.4c9.6 9.1 24.8 8.7 33.9-.9s8.7-24.8-.9-33.9L66.8 208 208.5 73.4c9.6-9.1 10-24.3 .9-33.9zM352 64c0-12.6-7.4-24.1-19-29.2s-25-3-34.4 5.4l-160 144c-6.7 6.1-10.6 14.7-10.6 23.8s3.9 17.7 10.6 23.8l160 144c9.4 8.5 22.9 10.6 34.4 5.4s19-16.6 19-29.2V288h32c53 0 96 43 96 96c0 30.4-12.8 47.9-22.2 56.7c-5.5 5.1-9.8 12-9.8 19.5c0 10.9 8.8 19.7 19.7 19.7c2.8 0 5.6-.6 8.1-1.9C494.5 467.9 576 417.3 576 304c0-97.2-78.8-176-176-176H352V64z">
                              </path>
                           </svg>
                           Send to Multiple Customers
                        </button>
                     </div>
                  </div>
                  <?php if (!empty($technicians)): ?>
                     <div class="list">
                        <table class="w-full">
                        <?php if (session()->getFlashdata('validation')): ?>
                                 <div class="validation-errors">
                                    <?php
                                    $validation = session()->getFlashdata('validation');
                                    $buttonId = session()->getFlashdata('button_id');
                                    foreach ($validation->getErrors() as $error):
                                    ?>
                                          <p style="color: red;" id="<?= $buttonId ?>"><?= $error ?></p>
                                    <?php endforeach ?>
                                 </div>
                              <?php endif ?>
                                 <?php foreach ($technicians as $technician): ?>
                                    <tr class="flex p-20px odd:bg-sky-50" id="<?= $technician['ID'] ?>">
                                       <form method="post" action="<?= base_url('/operate/dispatch/create/'.$technician['ID'])?>">
                                 
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
                                    <svg
                                       class="svg-inline--fa fa-phone text-15px" aria-hidden="true"
                                       focusable="false" data-prefix="fas" data-icon="phone" role="img"
                                       xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                       <path class="" fill="currentColor"
                                          d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z">
                                       </path>
                                    </svg>
                                 </div>
                                 <input
                                    class="w-full bg-transparent outline-none border-b-1 focus:border-blue-500 py-7px"
                                    type="tel" name="customer_phone" id="phone-1B85A09AA6CF1" placeholder="Phone Number">
                              </div>
                              <div class="input-group col-span-3 flex items-center">
                                 <div class="mr-10px flex justify-center items-center">
                                    <svg
                                       class="svg-inline--fa fa-envelope text-15px" aria-hidden="true"
                                       focusable="false" data-prefix="fas" data-icon="envelope" role="img"
                                       xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                       <path class="" fill="currentColor"
                                          d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z">
                                       </path>
                                    </svg>
                                 </div>
                                
                                 <input
                                    class="w-full bg-transparent outline-none border-b-1 focus:border-blue-500 py-7px"
                                    type="email" name="customer_email" id="email-1B85A09AA6CF1" placeholder="Email">
                                    
                              </div>
                              <div class="input-group col-span-3 lg:col-span-2 flex items-center">
                                 <div class="mr-10px flex justify-center items-center">
                                    <svg
                                       class="svg-inline--fa fa-circle-user text-15px" aria-hidden="true"
                                       focusable="false" data-prefix="fas" data-icon="circle-user" role="img"
                                       xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                       <path class="" fill="currentColor"
                                          d="M399 384.2C376.9 345.8 335.4 320 288 320H224c-47.4 0-88.9 25.8-111 64.2c35.2 39.2 86.2 63.8 143 63.8s107.8-24.7 143-63.8zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256 16a72 72 0 1 0 0-144 72 72 0 1 0 0 144z">
                                       </path>
                                    </svg>
                                 </div>
                                 <input
                                    class="w-full bg-transparent outline-none border-b-1 focus:border-blue-500 py-7px"
                                    type="text" name="customer_name" id="name-1B85A09AA6CF1"
                                    placeholder="Name (Optional)">
                              </div>
                              <div class="input-group col-span-3 lg:col-span-4 flex items-center">
                                 <div class="mr-10px flex justify-center items-center">
                                    <svg
                                       class="svg-inline--fa fa-location-dot text-15px" aria-hidden="true"
                                       focusable="false" data-prefix="fas" data-icon="location-dot" role="img"
                                       xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                       <path class="" fill="currentColor"
                                          d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z">
                                       </path>
                                    </svg>
                                 </div>
                                 <input class="w-full bg-transparent outline-none border-b-1 focus:border-blue-500 py-7px" type="text" name="customer_address" id="address-1B85A09AA6CF1" placeholder="Address (Optional)">
                              </div>
                              <div class="flex justify-start items-center py-5px col-span-6">
                                 <div class="flex justify-start items-center col-span-3 cursor-pointer">
                                 <input type="checkbox" id="test-checkbox">
                                    <p style="margin-left:10px;">Mark as test</p>
                                 </div>
                              </div>
                           </td>
                           <td class="buttons flex flex-col justify-center items-end px-4 w-1/4">
                           <input type="hidden" name="button_id" value="<?= $technician['ID'] ?>">
                              <button
                                 class="btn btn-blue max-w-200px w-full rounded-2px mb-2"
                                 id="<?= $technician['ID'] ?>" type="submit">
                                 <svg class="svg-inline--fa fa-user text-15px"
                                    aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user"
                                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path class="" fill="currentColor"
                                       d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z">
                                    </path>
                                 </svg>
                                  Send Bio
                              </button>
                              <button
                                 class="btn btn-green max-w-200px w-full rounded-2px"
                                 id="sendPulseCheck">
                                 <svg
                                    class="svg-inline--fa fa-face-grin text-15px" aria-hidden="true"
                                    focusable="false" data-prefix="fas" data-icon="face-grin" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path class="" fill="currentColor"
                                       d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM388.1 312.8c12.3-3.8 24.3 6.9 19.3 18.7C382.4 390.6 324.2 432 256.3 432s-126.2-41.4-151.1-100.5c-5-11.8 7-22.5 19.3-18.7c39.7 12.2 84.5 19 131.8 19s92.1-6.8 131.8-19zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z">
                                    </path>
                                 </svg>
                                 Send pulseCheck
                              </button>
                           </td>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
// $(document).ready(function() {
//     $('#search').on('keyup', function() {
//         var search = $(this).val();
//         console.log(search);
//         if (search.length >= 2) {
//             $.ajax({
//                 url: '<?= base_url('search') ?>',
//                 type: 'GET',
//                 data: { search: search },
//                 success: function(response) {
//                    var technicianList = $('#technician-list');
//                    console.log(technicianList);
//                     technicianList.empty();
//                     if (response.technicians.length > 0) {
//                         $.each(response.technicians, function(index, technician) {
//                             var row = '<tr class="flex p-20px odd:bg-sky-50">' +
//                                 '<td class="employee flex items-center w-1/4">' +
//                                     '<div class="profile-img w-100px h-100px rounded-1/2 bg-center bg-contain bg-no-repeat min-h-50px mr-10px flex-shrink-0" style="position: relative; background-image: url(' + technician.image + ');"></div>' +
//                                     '<div class="flex-grow">' +
//                                         '<p class="name">' + technician.name + '</p>' +
//                                         '<p class="department text-gray-400">' + technician.department + '</p>' +
//                                     '</div>' +
//                                 '</td>' +
//                                 '<td class="recipient-info grid grid-cols-6 gap-5px flex-grow">' +
//                                     '<div class="input-group col-span-3 flex items-center">' +
//                                         '<div class="mr-10px flex justify-center items-center">' +
//                                             '<svg class="svg-inline--fa fa-phone text-15px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">' +
//                                                 '<path class="" fill="currentColor" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"></path>' +
//                                             '</svg>' +
//                                         '</div>' +
//                                         '<input class="w-full bg-transparent outline-none border-b-1 focus:border-blue-500 py-7px" type="tel" name="phone" id="phone-' + technician.id + '" placeholder="Phone Number">' +
//                                     '</div>' +
//                                     '<div class="input-group col-span-3 flex items-center">' +
//                                         '<div class="mr-10px flex justify-center items-center">' +
//                                             '<svg class="svg-inline--fa fa-envelope text-15px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">' +
//                                                 '<path class="" fill="currentColor" d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"></path>' +
//                                             '</svg>' +
//                                         '</div>' +
//                                         '<input class="w-full bg-transparent outline-none border-b-1 focus:border-blue-500 py-7px" type="email" name="email" id="email-' + technician.id + '" placeholder="Email">' +
//                                     '</div>' +
//                                     '<div class="input-group col-span-3 lg:col-span-2 flex items-center">' +
//                                         '<div class="mr-10px flex justify-center items-center">' +
//                                             '<svg class="svg-inline--fa fa-circle-user text-15px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle-user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">' +
//                                                 '<path class="" fill="currentColor" d="M399 384.2C376.9 345.8 335.4 320 288 320H224c-47.4 0-88.9 25.8-111 64.2c35.2 39.2 86.2 63.8 143 63.8s107.8-24.7 143-63.8zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256 16a72 72 0 1 0 0-144 72 72 0 1 0 0 144z"></path>' +
//                                             '</svg>' +
//                                         '</div>' +
//                                         '<input class="w-full bg-transparent outline-none border-b-1 focus:border-blue-500 py-7px" type="text" name="name" id="name-' + technician.id + '" placeholder="Name (Optional)">' +
//                                     '</div>' +
//                                     '<div class="input-group col-span-3 lg:col-span-4 flex items-center">' +
//                                         '<div class="mr-10px flex justify-center items-center">' +
//                                             '<svg class="svg-inline--fa fa-location-dot text-15px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="location-dot" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">' +
//                                                 '<path class="" fill="currentColor" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"></path>' +
//                                             '</svg>' +
//                                         '</div>' +
//                                         '<input class="w-full bg-transparent outline-none border-b-1 focus:border-blue-500 py-7px" type="text" name="address" id="address-' + technician.id + '" placeholder="Address (Optional)">' +
//                                     '</div>' +
//                                 '</td>' +
//                             '</tr>';

//                             technicianList.append(row);
//                         });
//                     } else {
//                         technicianList.append('<tr><td colspan="6">No technician data available.</td></tr>');
//                     }
//                 }
//             });
//         }
//     });
// });
</script>
<?= $this->endsection('content') ?>

