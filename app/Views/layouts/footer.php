</div>
            </div>
        </main>
        <!-- page-content" -->
    </div>
    <!-- page-wrapper -->
    <script src="/js/jquery.js"></script>
    <!-- <script src="/js/main.js"></script> -->
    <script src="/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            $(".sidebar-dropdown > a").click(function() {
                $(".sidebar-submenu").slideUp(200);
                if ($(this).parent().hasClass("active")) {
                    $(".sidebar-dropdown").removeClass("active");
                    $(this).parent().removeClass("active");
                } else {
                    $(".sidebar-dropdown").removeClass("active");
                    $(this).next(".sidebar-submenu").slideDown(200);
                    $(this).parent().addClass("active");
                }
            });
            $(".sidebar-dropdown-inner > a").click(function() {
                $(".sidebar-submenu-inner").slideUp(200);
                if ($(this).parent().hasClass("active")) {
                    $(".sidebar-dropdown-inner").removeClass("active");
                    $(this).parent().removeClass("active");
                } else {
                    $(".sidebar-dropdown-inner").removeClass("active");
                    $(this).next(".sidebar-submenu-inner").slideDown(200);
                    $(this).parent().addClass("active");
                }
            });

            $("#close-sidebar").click(function() {
                $(".page-wrapper").removeClass("toggled");
            });

            $("#show-sidebar").click(function() {
                $(".page-wrapper").addClass("toggled");
            });
        });
    </script>
     <script>
        $(document).click(function(event) {
            if (
                $('.toggle > input').is(':checked') &&
                !$(event.target).parents('.toggle').is('.toggle')
            ) {
                $('.toggle > input').prop('checked', false);
            }
        })
    </script>
 <script>
        // Initialize tooltips
        $(document).ready(function() {
            $('[data-bs-toggle="tooltip"]').tooltip();
        });
    </script>
     <script>
        $(document).click(function(event) {
            setTimeout(function() {
                $('body')
                    .removeClass('loading')
                    .addClass('loaded');
            }, 3000);
        })
    </script>
 <script>
    document.addEventListener('DOMContentLoaded', function() {
    const fileInputs = document.querySelectorAll('input[type="file"]');

    fileInputs.forEach(function(input) {
        input.addEventListener('change', function(event) {
            const file = event.target.files[0]; // Get the selected file
            const technicianId = event.target.dataset.technicianId; // Get the technician ID

            if (file && technicianId) {
                const reader = new FileReader(); // FileReader to read file contents

                reader.addEventListener('load', function() {
                    const imageDataUrl = reader.result; // Data URL representing the file

                    // Update the background image of the profile-img div for the specific technician
                    const profileImg = document.querySelector(`.profile-img[data-technician-id="${technicianId}"]`);
                    if (profileImg) {
                        profileImg.style.backgroundImage = `url("${imageDataUrl}")`; // Ensure correct URL syntax
                    }
                });

                // Read the file as Data URL
                reader.readAsDataURL(file);
            }
        });
    });
});

</script>
</body>

</html>