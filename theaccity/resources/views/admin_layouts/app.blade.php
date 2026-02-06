<!doctype html>
<html lang="en" data-bs-theme="dark">
<head>
    <!-- Required meta tags -->
    <base href="https://theaccity.com/">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="public/assets/images/jamaat_l.png" type="image/png" />
    <!--plugins-->
    <link href="public/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">
    <link href="public/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet">
    <link href="public/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="public/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet">
    <!-- loader-->

    <!-- Bootstrap CSS -->
    <link href="public/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="public/assets/sass/app.css" rel="stylesheet">
    <link href="public/assets/css/icons.css" rel="stylesheet">
    <!--<link href='unpkg.com/boxicons%402.1.4/css/boxicons.min.css' rel='stylesheet'>-->
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="public/assets/sass/dark-theme.css">
    <link rel="stylesheet" href="public/assets/sass/semi-dark.css">
    <link rel="stylesheet" href="public/assets/sass/bordered-theme.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>

    <style>
        *:not(h1):not(h2):not(h3):not(h4):not(h5):not(h6) {
            font-size: 14px;
            /* Example style */
        }
        .inputboxs {
            width: 50%;
        }
        @media only screen and (max-width: 768px) {
            .inputboxs {
                width: 100%;
            }

            .inputboxesfooter {
                width: 100%;
            }
        }
    
    .ck-editor{
        color:#000 !important;
    }
    </style>
    @livewireStyles
    <title>Admin Panel</title>
</head>

<body class="small">
    <!--wrapper-->
    <div class="wrapper">
        <!--start header -->
        @include('admin_layouts.header')
        <!--end header -->
        <!--navigation-->
        @include('admin_layouts.nav')
        <!--end navigation-->
        <!--start page wrapper -->
        @yield('wrapper')
        <!--end page wrapper -->
        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
                class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <footer class="page-footer">
            <p class="mb-0">Copyright © {{ date('Y') }}. All right reserved.</p>
        </footer>
    </div>
    <!--end wrapper-->
    <!--start switcher-->

    <!--end switcher-->
    <!-- Bootstrap JS -->
    <script src="public/assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="public/assets/js/jquery.min.js"></script>
    <script src="public/assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="public/assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="public/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <!--<script src="public/assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>-->
    <!--app JS-->
    <script src="public/assets/js/app.js"></script>

    <script src="public/assets/js/index.js"></script>
    <script src="public/assets/plugins/peity/jquery.peity.min.js"></script>
    <script>
        $(".data-attributes span").peity("donut")
    </script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<script src="public/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="public/assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script> 
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            new DataTable('#example');
            /*$('#example').DataTable({
                ordering: false
            });*/
        });
    </script>
    <script>
        /*$(document).ready(function() {
            var table = $('#example2').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'print']
            });

            table.buttons().container()
                .appendTo('#example2_wrapper .col-md-6:eq(0)');
        });*/
    </script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace()
    </script>


    <script>
        const yearSelect = document.getElementById("year");
        const currentYear = new Date().getFullYear();
        const startYear = currentYear - 2;
        const endYear = currentYear + 2;
    
        // Default option
        yearSelect.innerHTML = '<option value="">Select Year</option>';
    
        // Loop to generate year options
        for (let year = startYear; year <= endYear; year++) {
            let option = document.createElement("option");
            option.value = year;
            option.textContent = year;
            yearSelect.appendChild(option);
        }
    </script>
    


    <script>
        $(document).ready(function() {

            $('#CountrySaveBtn').click(function() {
                const fileInput = $('#file_name')[0].files[0];

                // Client-side validation for file type and size
                if (fileInput) {
                    const allowedTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif', 'image/webp'];
                    if (!allowedTypes.includes(fileInput.type)) {
                        alert('Please upload a valid image file (JPG, PNG, GIF, Webp).');
                        return;
                    }
                    if (fileInput.size > 2 * 1024 * 1024) { // 2MB limit
                        alert('File size must be less than 2MB.');
                        return;
                    }
                }

                const formData = new FormData();
                formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
                formData.append('id', $('#id').val());
                formData.append('name', $('#name').val());
                if (fileInput) {
                    formData.append('file_name', fileInput);
                }
                formData.append('status', $('#status').is(':checked') ? 1 : 0);

                $.ajax({
                    url: '/country',
                    method: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function() {
                        alert('Country saved successfully!');
                        $('#CountryForm')[0].reset();
                        setTimeout(() => {
                            // Redirect after showing the message
                            location.reload();
                        }, 1000); // Delay of 2 seconds
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            alert('Validation error: ' + xhr.responseJSON.message);
                        } else {
                            alert('Failed to save Country.');
                        }
                    }
                });
            });

            $(document).on('click', '.Country-edit-btn', function() {
                const sliderId = $(this).data('id');

                $.ajax({
                    url: `/country/${sliderId}`,
                    method: 'GET',
                    success: function(data) {
                        // Populate the form with the fetched data
                        $('#id').val(data.id);
                        $('#name').val(data.name);
                        $('#status').prop('checked', data.status === 1);


                        // Show the existing image preview
                        if (data.file_name) {
                            $('#filePreview').html(`
                                            <img src="/public/assets/images/Country/${data.file_name}" alt="Existing Image" width="150" class="img-thumbnail">
                                            <p class="mt-2"><strong>Current Image:</strong> ${data.file_name}</p>
                                        `);
                        } else {
                            $('#filePreview').html(
                                '<p class="text-muted">No image uploaded.</p>');
                        }

                        // Scroll to the form for user convenience
                        $('html, body').animate({
                            scrollTop: $('#CountryForm').offset().top
                        }, 'slow');
                    },
                    error: function() {
                        alert('Failed to fetch CSR data.');
                    }
                });
            });


            $(document).on('click', '.Country-deleteBtn', function() {
                const id = $(this).data('id');

                if (confirm('Are you sure you want to delete this Country?')) {
                    $.ajax({
                        url: `/country/${id}`, // Endpoint for delete
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                'content') // Include CSRF token
                        },
                        success: function() {
                            alert('Country deleted successfully!');
                            setTimeout(() => {
                                // Reload the page or refresh the sliders list
                                location.reload();
                            }, 2000); // Optional delay of 2 seconds
                        },
                        error: function() {
                            alert('Failed to delete Country.');
                        }
                    });
                }
            });

        });
    </script>
    
    <script>
        $(document).ready(function() {

            $('#UniversitySaveBtn').click(function() {
                const fileInput = $('#file_name')[0].files[0];

                // Client-side validation for file type and size
                if (fileInput) {
                    const allowedTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif', 'image/webp'];
                    if (!allowedTypes.includes(fileInput.type)) {
                        alert('Please upload a valid image file (JPG, PNG, GIF, Webp).');
                        return;
                    }
                    if (fileInput.size > 2 * 1024 * 1024) { // 2MB limit
                        alert('File size must be less than 2MB.');
                        return;
                    }
                }

                const formData = new FormData();
                formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
                formData.append('id', $('#id').val());
                formData.append('name', $('#name').val());
                if (fileInput) {
                    formData.append('file_name', fileInput);
                }
                formData.append('status', $('#status').is(':checked') ? 1 : 0);

                $.ajax({
                    url: '/university',
                    method: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function() {
                        alert('University saved successfully!');
                        $('#UniversityForm')[0].reset();
                        setTimeout(() => {
                            // Redirect after showing the message
                            location.reload();
                        }, 1000); // Delay of 2 seconds
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            alert('Validation error: ' + xhr.responseJSON.message);
                        } else {
                            alert('Failed to save University.');
                        }
                    }
                });
            });

            $(document).on('click', '.University-edit-btn', function() {
                const sliderId = $(this).data('id');

                $.ajax({
                    url: `/university/${sliderId}`,
                    method: 'GET',
                    success: function(data) {
                        // Populate the form with the fetched data
                        $('#id').val(data.id);
                        $('#name').val(data.name);
                        $('#status').prop('checked', data.status === 1);


                        // Show the existing image preview
                        if (data.file_name) {
                            $('#filePreview').html(`
                                            <img src="/public/assets/images/University/${data.file_name}" alt="Existing Image" width="150" class="img-thumbnail">
                                            <p class="mt-2"><strong>Current Image:</strong> ${data.file_name}</p>
                                        `);
                        } else {
                            $('#filePreview').html(
                                '<p class="text-muted">No image uploaded.</p>');
                        }

                        // Scroll to the form for user convenience
                        $('html, body').animate({
                            scrollTop: $('#UniversityForm').offset().top
                        }, 'slow');
                    },
                    error: function() {
                        alert('Failed to fetch CSR data.');
                    }
                });
            });


            $(document).on('click', '.University-deleteBtn', function() {
                const id = $(this).data('id');

                if (confirm('Are you sure you want to delete this University?')) {
                    $.ajax({
                        url: `/university/${id}`, // Endpoint for delete
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                'content') // Include CSRF token
                        },
                        success: function() {
                            alert('University deleted successfully!');
                            setTimeout(() => {
                                // Reload the page or refresh the sliders list
                                location.reload();
                            }, 2000); // Optional delay of 2 seconds
                        },
                        error: function() {
                            alert('Failed to delete University.');
                        }
                    });
                }
            });

        });
    </script>
    
    <script>
        $(document).ready(function() {

            $('#LocationSaveBtn').click(function() {
                const formData = new FormData();
                formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
                formData.append('id', $('#id').val());
                formData.append('cid', $('#cid').val());
                formData.append('name', $('#name').val());
                formData.append('status', $('#status').is(':checked') ? 1 : 0);

                $.ajax({
                    url: '/location',
                    method: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function() {
                        alert('Location saved successfully!');
                        $('#LocationForm')[0].reset();
                        setTimeout(() => {
                            // Redirect after showing the message
                            location.reload();
                        }, 1000); // Delay of 2 seconds
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            alert('Validation error: ' + xhr.responseJSON.message);
                        } else {
                            alert('Failed to save Location.');
                        }
                    }
                });
            });

            $(document).on('click', '.Location-edit-btn', function() {
                const sliderId = $(this).data('id');

                $.ajax({
                    url: `/location/${sliderId}`,
                    method: 'GET',
                    success: function(data) {
                        // Populate the form with the fetched data
                        $('#id').val(data.id);
                        $('#cid').val(data.cid);
                        $('#name').val(data.name);
                        $('#status').prop('checked', data.status === 1);
                        // Scroll to the form for user convenience
                        $('html, body').animate({
                            scrollTop: $('#LocationForm').offset().top
                        }, 'slow');
                    },
                    error: function() {
                        alert('Failed to fetch CSR data.');
                    }
                });
            });


            $(document).on('click', '.Location-deleteBtn', function() {
                const id = $(this).data('id');

                if (confirm('Are you sure you want to delete this Location?')) {
                    $.ajax({
                        url: `/location/${id}`, // Endpoint for delete
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                'content') // Include CSRF token
                        },
                        success: function() {
                            alert('Location deleted successfully!');
                            setTimeout(() => {
                                // Reload the page or refresh the sliders list
                                location.reload();
                            }, 2000); // Optional delay of 2 seconds
                        },
                        error: function() {
                            alert('Failed to delete Location.');
                        }
                    });
                }
            });

        });
    </script>
    
    <script>
        $(document).ready(function() {

            $('#CourseSaveBtn').click(function() {
                const formData = new FormData();
                formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
                formData.append('id', $('#id').val());
                formData.append('name', $('#name').val());
                formData.append('status', $('#status').is(':checked') ? 1 : 0);

                $.ajax({
                    url: '/course',
                    method: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function() {
                        alert('Course saved successfully!');
                        $('#CourseForm')[0].reset();
                        setTimeout(() => {
                            // Redirect after showing the message
                            location.reload();
                        }, 1000); // Delay of 2 seconds
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            alert('Validation error: ' + xhr.responseJSON.message);
                        } else {
                            alert('Failed to save Course.');
                        }
                    }
                });
            });

            $(document).on('click', '.Course-edit-btn', function() {
                const sliderId = $(this).data('id');

                $.ajax({
                    url: `/course/${sliderId}`,
                    method: 'GET',
                    success: function(data) {
                        // Populate the form with the fetched data
                        $('#id').val(data.id);
                        $('#name').val(data.name);
                        $('#status').prop('checked', data.status === 1);
                        // Scroll to the form for user convenience
                        $('html, body').animate({
                            scrollTop: $('#CourseForm').offset().top
                        }, 'slow');
                    },
                    error: function() {
                        alert('Failed to fetch CSR data.');
                    }
                });
            });


            $(document).on('click', '.Course-deleteBtn', function() {
                const id = $(this).data('id');

                if (confirm('Are you sure you want to delete this Course?')) {
                    $.ajax({
                        url: `/course/${id}`, // Endpoint for delete
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                'content') // Include CSRF token
                        },
                        success: function() {
                            alert('Course deleted successfully!');
                            setTimeout(() => {
                                // Reload the page or refresh the sliders list
                                location.reload();
                            }, 2000); // Optional delay of 2 seconds
                        },
                        error: function() {
                            alert('Failed to delete Course.');
                        }
                    });
                }
            });

        });
    </script>
    
    <script>
        $(document).ready(function() {

            $('#SubjectSaveBtn').click(function() {
                const formData = new FormData();
                formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
                formData.append('id', $('#id').val());
                formData.append('name', $('#name').val());
                formData.append('status', $('#status').is(':checked') ? 1 : 0);

                $.ajax({
                    url: '/subject',
                    method: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function() {
                        alert('Subject saved successfully!');
                        $('#SubjectForm')[0].reset();
                        setTimeout(() => {
                            // Redirect after showing the message
                            location.reload();
                        }, 1000); // Delay of 2 seconds
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            alert('Validation error: ' + xhr.responseJSON.message);
                        } else {
                            alert('Failed to save Subject.');
                        }
                    }
                });
            });

            $(document).on('click', '.Subject-edit-btn', function() {
                const sliderId = $(this).data('id');

                $.ajax({
                    url: `/subject/${sliderId}`,
                    method: 'GET',
                    success: function(data) {
                        // Populate the form with the fetched data
                        $('#id').val(data.id);
                        $('#name').val(data.name);
                        $('#status').prop('checked', data.status === 1);
                        // Scroll to the form for user convenience
                        $('html, body').animate({
                            scrollTop: $('#SubjectForm').offset().top
                        }, 'slow');
                    },
                    error: function() {
                        alert('Failed to fetch CSR data.');
                    }
                });
            });


            $(document).on('click', '.Subject-deleteBtn', function() {
                const id = $(this).data('id');

                if (confirm('Are you sure you want to delete this Subject?')) {
                    $.ajax({
                        url: `/subject/${id}`, // Endpoint for delete
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                'content') // Include CSRF token
                        },
                        success: function() {
                            alert('Subject deleted successfully!');
                            setTimeout(() => {
                                // Reload the page or refresh the sliders list
                                location.reload();
                            }, 2000); // Optional delay of 2 seconds
                        },
                        error: function() {
                            alert('Failed to delete Subject.');
                        }
                    });
                }
            });

        });
    </script>
    
    <script>
        $(document).ready(function(){
           /* $(document).on('change', '.country', function () {
                var id = $(this).val();
                $.post('/get_location', { id: id }, function (data) {
                    var locationDropdown = $('#location_id'); // Select submenu dropdown
                    locationDropdown.empty(); // Clear existing options
                    if (data.length > 0) {
                        locationDropdown.append('<option value="">Select</option>'); // Default option
                        $.each(data, function (key, values) {
                            locationDropdown.append('<option value="' + values.id + '">' + values.name + '</option>');
                        });
                    } else {
                        locationDropdown.append('<option value="">No Location available</option>');
                    }
                });
            });*/
            
            $(document).on('change', '.country', function () {
                    var id = $(this).val();
                
                    $.post('/get_location', { id: id }, function (data) {
                        var locationContainer = $('#location_container'); // The div where checkboxes will be added
                        locationContainer.empty(); // Clear existing checkboxes
                
                        if (data.length > 0) {
                            $.each(data, function (key, values) {
                                var checkboxHtml = `
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" 
                                               value="${values.name}" 
                                               id="location_${values.id}" 
                                               name="location_id[]">
                                        <label class="form-check-label" for="location_${values.id}" required>
                                            ${values.name}
                                        </label>
                                    </div>
                                `;
                                locationContainer.append(checkboxHtml);
                            });
                        }else{
                            locationContainer.append('No Location Set!');
                        }
                    });
                });
            
             $('#CourseDetailsSaveBtn').click(function(e) {
                e.preventDefault();
                const formData = new FormData();
                formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
                formData.append('id', $('#id').val());
                formData.append('country_id', $('#country_id').val());
                formData.append('location_id', $('#location_id').val());
                formData.append('university_id', $('#university_id').val());
                formData.append('subject_id', $('#subject_id').val());
                formData.append('course_id', $('#course_id').val());
                formData.append('title', $('#title').val());
                formData.append('assessment_required', $('#assessment_required').val());
                formData.append('course_link', $('#course_link').val());
                formData.append('course_link2', $('#course_link2').val());
            
                // CKEditor 5 থেকে ভ্যালু নেওয়া
                formData.append('shot_desc', editors.shot_desc.getData());
                formData.append('requirement', editors.requirement.getData());
                formData.append('requirement2', editors.requirement2.getData());
                formData.append('schedule', editors.schedule.getData());
                formData.append('fees', editors.fees.getData());
                formData.append('interview', editors.interview.getData());
            
                // Course Duration
                $('input[name="course_duration[]"]:checked').each(function() {
                    formData.append('course_duration[]', $(this).val());
                });
                
                // Location array
                $('input[name="location_id[]"]:checked').each(function() {
                    formData.append('location_id[]', $(this).val());
                });
                
                // Intake array
                $('input[name="intake[]"]:checked').each(function() {
                    formData.append('intake[]', $(this).val());
                });

                // Delivery Mode
                $('input[name="delivery_mode[]"]:checked').each(function() {
                    formData.append('delivery_mode[]', $(this).val());
                });
                
                // Entry Route
                $('input[name="entry_route[]"]:checked').each(function() {
                    formData.append('entry_route[]', $(this).val());
                });
            
                $.ajax({
                    url: '/course-details',
                    method: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function() {
                        alert('Course Details saved successfully!');
                        $('#CourseDetailsForm')[0].reset();
                        setTimeout(() => location.reload(), 1000);
                    }
                });
            });


            $(document).on('click', '.CourseDetails-edit-btn', function() {
                const sliderId = $(this).data('id');
                $.ajax({
                    url: `/course-details/${sliderId}`,
                    method: 'GET',
                    success: function(data) {
                        // Populate the form with the fetched data
                        $('#id').val(data.id);
                        $('#name').val(data.name);
                        $('#status').prop('checked', data.status === 1);
                        // Scroll to the form for user convenience
                        $('html, body').animate({
                            scrollTop: $('#CourseDetailsForm').offset().top
                        }, 'slow');
                    }
                });
            });


            $(document).on('click', '.CourseDetails-onoff', function() {
                const id = $(this).data('id');

                if (confirm('Are you sure you want to On/Off this Course?')) {
                    $.ajax({
                        url: `/course-details/${id}`, // Endpoint for delete
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                'content') // Include CSRF token
                        },
                        success: function() {
                            alert('Course Details On/Off updated successfully!');
                            setTimeout(() => {
                                // Reload the page or refresh the sliders list
                                location.reload();
                            }, 1000); // Optional delay of 2 seconds
                        },
                        error: function() {
                            alert('Failed to On/Off Course.');
                        }
                    });
                }
            });
            
            $(document).on('click', '.CourseDetails-deleteBtn', function() {
                const id = $(this).data('id');

                if (confirm('Are you sure you want to delete this Course?')) {
                    $.ajax({
                        url: `/course-details/${id}`, // Endpoint for delete
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                'content') // Include CSRF token
                        },
                        success: function() {
                            alert('Course Details deleted successfully!');
                            setTimeout(() => {
                                // Reload the page or refresh the sliders list
                                location.reload();
                            }, 1000); // Optional delay of 2 seconds
                        },
                        error: function() {
                            alert('Failed to delete Course.');
                        }
                    });
                }
            });

        });
    </script>
    
    <script>
        $(document).ready(function() {

            $('#AlbumSaveBtn').click(function() {
                const fileInput = $('#file_name')[0].files[0];

                // Client-side validation for file type and size
                if (fileInput) {
                    const allowedTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif', 'image/webp'];
                    if (!allowedTypes.includes(fileInput.type)) {
                        alert('Please upload a valid image file (JPG, PNG, GIF, Webp).');
                        return;
                    }

                    if (fileInput.size > 2 * 1024 * 1024) { // 2MB limit
                        alert('File size must be less than 2MB.');
                        return;
                    }
                }

                const formData = new FormData();
                formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
                formData.append('id', $('#id').val());
                formData.append('title', $('#title').val());
                if (fileInput) {
                    formData.append('file_name', fileInput);
                }
                formData.append('status', $('#status').is(':checked') ? 1 : 0);

                $.ajax({
                    url: '/album',
                    method: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function() {
                        alert('Album saved successfully!');
                        $('#AlbumForm')[0].reset();
                        setTimeout(() => {
                            // Redirect after showing the message
                            location.reload();
                        }, 2000); // Delay of 2 seconds
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            alert('Validation error: ' + xhr.responseJSON.message);
                        } else {
                            alert('Failed to save Album.');
                        }
                    }
                });
            });

            $(document).on('click', '.Album-edit-btn', function() {
                const sliderId = $(this).data('id');

                $.ajax({
                    url: `/album/${sliderId}`,
                    method: 'GET',
                    success: function(data) {
                        // Populate the form with the fetched data
                        $('#id').val(data.id);
                        $('#title').val(data.title);
                        $('#status').prop('checked', data.status === 1);


                        // Show the existing image preview
                        if (data.file_name) {
                            $('#filePreview').html(`
                                            <img src="/public/assets/images/Album/${data.file_name}" alt="Existing Image" width="150" class="img-thumbnail">
                                            <p class="mt-2"><strong>Current Image:</strong> ${data.file_name}</p>
                                        `);
                        } else {
                            $('#filePreview').html(
                                '<p class="text-muted">No image uploaded.</p>');
                        }

                        // Scroll to the form for user convenience
                        $('html, body').animate({
                            scrollTop: $('#AlbumForm').offset().top
                        }, 'slow');
                    },
                    error: function() {
                        alert('Failed to fetch CSR data.');
                    }
                });
            });


            $(document).on('click', '.Album-deleteBtn', function() {
                const id = $(this).data('id');

                if (confirm('Are you sure you want to delete this Album?')) {
                    $.ajax({
                        url: `/album/${id}`, // Endpoint for delete
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                'content') // Include CSRF token
                        },
                        success: function() {
                            alert('Album deleted successfully!');
                            setTimeout(() => {
                                // Reload the page or refresh the sliders list
                                location.reload();
                            }, 2000); // Optional delay of 2 seconds
                        },
                        error: function() {
                            alert('Failed to delete Album.');
                        }
                    });
                }
            });

        });
    </script>
    
    <script>
        $(document).ready(function() {

            $('#PhotoGallerySaveBtn').click(function() {
                const fileInput = $('#file_name')[0].files[0];

                // Client-side validation for file type and size
                if (fileInput) {
                    const allowedTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif'];
                    if (!allowedTypes.includes(fileInput.type)) {
                        alert('Please upload a valid image file (JPG, PNG, GIF).');
                        return;
                    }

                    if (fileInput.size > 2 * 1024 * 1024) { // 2MB limit
                        alert('File size must be less than 2MB.');
                        return;
                    }
                }

                const formData = new FormData();
                formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
                formData.append('id', $('#id').val());
                formData.append('type', $('#type').val());
                formData.append('title', $('#title').val());
                if (fileInput) {
                    formData.append('file_name', fileInput);
                }
                formData.append('status', $('#status').is(':checked') ? 1 : 0);

                $.ajax({
                    url: '/photo-gallery',
                    method: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function() {
                        alert('Photo Gallerys Upload saved successfully!');
                        $('#PhotoGallerysForm')[0].reset();
                        setTimeout(() => {
                            // Redirect after showing the message
                            location.reload();
                        }, 2000); // Delay of 2 seconds
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            alert('Validation error: ' + xhr.responseJSON.message);
                        } else {
                            alert('Failed to save Photo Gallery Upload.');
                        }
                    }
                });
            });

            $(document).on('click', '.photo-gallery-edit-btn', function() {
                const sliderId = $(this).data('id');
                $.ajax({
                    url: `/photo-gallery-edit/${sliderId}`,
                    method: 'GET',
                    success: function(data) {
                        // Populate the form with the fetched data
                        $('#id').val(data.id);
                        $('#type').val(data.type);
                        $('#title').val(data.title);
                        $('#status').prop('checked', data.status === 1);

                        // Show the existing image preview
                        if (data.file_name) {
                            $('#filePreview').html(`
                                            <img src="/public/assets/images/photo-gallery/${data.file_name}" alt="Existing Image" width="150" class="img-thumbnail">
                                            <p class="mt-2"><strong>Current Image:</strong> ${data.file_name}</p>
                                        `);
                        } else {
                            $('#filePreview').html(
                                '<p class="text-muted">No image uploaded.</p>');
                        }

                        // Scroll to the form for user convenience
                        $('html, body').animate({
                            scrollTop: $('#PhotoGallerysForm').offset().top
                        }, 'slow');
                    },
                    error: function() {
                        alert('Failed to fetch slider data.');
                    }
                });
            });



            $(document).on('click', '.photo-gallery-deleteBtn', function() {
                const id = $(this).data('id');

                if (confirm('Are you sure you want to delete this slider?')) {
                    $.ajax({
                        url: `/photo-gallery/${id}`, // Endpoint for delete
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                'content') // Include CSRF token
                        },
                        success: function() {
                            alert('Photo Gallery Upload deleted successfully!');
                            setTimeout(() => {
                                // Reload the page or refresh the sliders list
                                location.reload();
                            }, 2000); // Optional delay of 2 seconds
                        },
                        error: function() {
                            alert('Failed to delete Photo Gallery Upload.');
                        }
                    });
                }
            });

        });
    </script>
    
    <script>
        $(document).ready(function() {

            $('#VideoGallerySaveBtn').click(function() {
                const fileInput = $('#file_name')[0].files[0];

                // Client-side validation for file type and size
                if (fileInput) {
                    const allowedTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif'];
                    if (!allowedTypes.includes(fileInput.type)) {
                        alert('Please upload a valid image file (JPG, PNG, GIF).');
                        return;
                    }

                    if (fileInput.size > 2 * 1024 * 1024) { // 2MB limit
                        alert('File size must be less than 2MB.');
                        return;
                    }
                }

                const formData = new FormData();
                formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
                formData.append('id', $('#id').val());
                formData.append('link', $('#link').val());
                formData.append('title', $('#title').val());
                if (fileInput) {
                    formData.append('file_name', fileInput);
                }
                formData.append('status', $('#status').is(':checked') ? 1 : 0);

                $.ajax({
                    url: '/video-gallery-admin',
                    method: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function() {
                        alert('Video Gallerys Upload saved successfully!');
                        $('#VideoGallerysForm')[0].reset();
                        setTimeout(() => {
                            // Redirect after showing the message
                            location.reload();
                        }, 2000); // Delay of 2 seconds
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            alert('Validation error: ' + xhr.responseJSON.message);
                        } else {
                            alert('Failed to save Photo Gallery Upload.');
                        }
                    }
                });
            });

            $(document).on('click', '.video-gallery-edit-btn', function() {
                const sliderId = $(this).data('id');
                $.ajax({
                    url: `/video-gallery-edit/${sliderId}`,
                    method: 'GET',
                    success: function(data) {
                        // Populate the form with the fetched data
                        $('#id').val(data.id);
                        $('#link').val(data.link);
                        $('#title').val(data.title);
                        $('#status').prop('checked', data.status === 1);

                        // Show the existing image preview
                        if (data.file_name) {
                            $('#filePreview').html(`
                                            <img src="/public/assets/images/video-gallery/${data.file_name}" alt="Existing Image" width="150" class="img-thumbnail">
                                            <p class="mt-2"><strong>Current Image:</strong> ${data.file_name}</p>
                                        `);
                        } else {
                            $('#filePreview').html(
                                '<p class="text-muted">No image uploaded.</p>');
                        }

                        // Scroll to the form for user convenience
                        $('html, body').animate({
                            scrollTop: $('#VideoGallerysForm').offset().top
                        }, 'slow');
                    },
                    error: function() {
                        alert('Failed to fetch Video Gallery data.');
                    }
                });
            });



            $(document).on('click', '.video-gallery-deleteBtn', function() {
                const id = $(this).data('id');

                if (confirm('Are you sure you want to delete this slider?')) {
                    $.ajax({
                        url: `/video-gallery-admin/${id}`, // Endpoint for delete
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                'content') // Include CSRF token
                        },
                        success: function() {
                            alert('Video Gallery Upload deleted successfully!');
                            setTimeout(() => {
                                // Reload the page or refresh the sliders list
                                location.reload();
                            }, 2000); // Optional delay of 2 seconds
                        },
                        error: function() {
                            alert('Failed to delete Photo Gallery Upload.');
                        }
                    });
                }
            });

        });
    </script>
    
    
    
    <script>
        $(document).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            
           $(document).on('change', '.mainmenu', function () {
                var id = $(this).val();
            
                $.post('/get_menu', { id: id }, function (data) {
                    var submenuDropdown = $('#submenuid'); // Select submenu dropdown
                    submenuDropdown.empty(); // Clear existing options
            
                    if (data.length > 0) {
                        submenuDropdown.append('<option value="">Select</option>'); // Default option
                        $.each(data, function (key, submenu) {
                            submenuDropdown.append('<option value="' + submenu.id + '">' + submenu.name + '</option>');
                        });
                    } else {
                        submenuDropdown.append('<option value="">No submenus available</option>');
                    }
                });
            });


            $(document).on('submit', '#menu_register_form', function(e) {
                e.preventDefault(); // Prevent form from submitting normally
                // Get the form action URL
                var actionurl = '/MenuRegisterForm';
                // Perform the AJAX request
                $.ajax({
                    url: actionurl,
                    type: 'post',
                    data: $(this).serialize(),
                    success: function(response) {
                        if (response.success) {
                            $('.success_msg').html(`
                                <div class="alert alert-info" role="alert">
                                    ` + response.message + `
                                </div>
                            `);
                            setTimeout(() => {
                                // Redirect after showing the message
                                window.location.href = '/menu';
                            }, 2000); // Delay of 2 seconds
                        }
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            var errors = xhr.responseJSON.errors;
                            var errorHtml = '<ul>';
                            $.each(errors, function(key, value) {
                                errorHtml += '<li>' + value[0] +
                                    '</li>'; // Display first error for each field
                            });
                            errorHtml += '</ul>';
                            $('.error_msg').html('<div class="alert alert-danger">' +
                                errorHtml + '</div>');
                        } else {
                            $('.error_msg').html(
                                '<div class="alert alert-danger">An unexpected error occurred. Please try again.</div>'
                            );
                        }
                    }
                });
            });

            $('.edit-btn-menu').on('click', function() {
                const customerId = $(this).data('id');

                // Populate modal fields with dynamic IDs
                $(`#edit-id-${customerId}`).val($(this).data('id'));
                $(`#edit-name-${customerId}`).val($(this).data('name'));

                // Open the corresponding modal
                $(`#editModal_${customerId}`).modal('show');
            });

            $(document).on('submit', '#editMenuForm', function(e) {
                e.preventDefault(); // Prevent form from submitting normally

                // Get the form action URL
                var actionurl = '/updateMenuForm';

                // Perform the AJAX request
                $.ajax({
                    url: actionurl,
                    type: 'post',
                    data: $(this).serialize(),
                    success: function(response) {
                        if (response.success) {
                            $('.success_msg').html(`
                                    <div class="alert alert-info" role="alert">
                                        ` + response.message + `
                                    </div>
                                `);
                            setTimeout(() => {
                                // Redirect after showing the message
                                window.location.href = '/menu';
                            }, 2000); // Delay of 2 seconds
                        }
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            var errors = xhr.responseJSON.errors;
                            var errorHtml = '<ul>';
                            $.each(errors, function(key, value) {
                                errorHtml += '<li>' + value[0] +
                                    '</li>'; // Display first error for each field
                            });
                            errorHtml += '</ul>';
                            $('.error_msg').html('<div class="alert alert-danger">' +
                                errorHtml + '</div>');
                        } else {
                            $('.error_msg').html(
                                '<div class="alert alert-danger">An unexpected error occurred. Please try again.</div>'
                            );
                        }
                    }
                });
            });

            $(document).on('submit', '#submenu_register_form', function(e) {
                e.preventDefault(); // Prevent form from submitting normally
                // Get the form action URL
                var actionurl = '/SubmenuRegisterForm';
                // Perform the AJAX request
                $.ajax({
                    url: actionurl,
                    type: 'post',
                    data: $(this).serialize(),
                    success: function(response) {
                        if (response.success) {
                            $('.success_msg').html(`
                                <div class="alert alert-info" role="alert">
                                    ` + response.message + `
                                </div>
                            `);
                            setTimeout(() => {
                                // Redirect after showing the message
                                window.location.href = '/submenu';
                            }, 2000); // Delay of 2 seconds
                        }
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            var errors = xhr.responseJSON.errors;
                            var errorHtml = '<ul>';
                            $.each(errors, function(key, value) {
                                errorHtml += '<li>' + value[0] +
                                    '</li>'; // Display first error for each field
                            });
                            errorHtml += '</ul>';
                            $('.error_msg').html('<div class="alert alert-danger">' +
                                errorHtml + '</div>');
                        } else {
                            $('.error_msg').html(
                                '<div class="alert alert-danger">An unexpected error occurred. Please try again.</div>'
                            );
                        }
                    }
                });
            });


            $('.edit-btn-submenu').on('click', function() {
                const customerId = $(this).data('id'); // Get the customer ID

                // Populate modal fields with dynamic IDs
                $(`#edit-id-${customerId}`).val($(this).data('id'));
                $(`#edit-menuid-${customerId}`).val($(this).data('menuid'));
                $(`#edit-name-${customerId}`).val($(this).data('name'));

                // Open the corresponding modal
                $(`#editModal_${customerId}`).modal('show');
            });


            $(document).on('submit', '#editSubmenuForm', function(e) {
                e.preventDefault(); // Prevent form from submitting normally

                // Get the form action URL
                var actionurl = '/updateSubmenuForm';

                // Perform the AJAX request
                $.ajax({
                    url: actionurl,
                    type: 'post',
                    data: $(this).serialize(),
                    success: function(response) {
                        if (response.success) {
                            $('.success_msg').html(`
                                    <div class="alert alert-info" role="alert">
                                        ` + response.message + `
                                    </div>
                                `);
                            setTimeout(() => {
                                // Redirect after showing the message
                                window.location.href = '/submenu';
                            }, 2000); // Delay of 2 seconds
                        }
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            var errors = xhr.responseJSON.errors;
                            var errorHtml = '<ul>';
                            $.each(errors, function(key, value) {
                                errorHtml += '<li>' + value[0] +
                                    '</li>'; // Display first error for each field
                            });
                            errorHtml += '</ul>';
                            $('.error_msg').html('<div class="alert alert-danger">' +
                                errorHtml + '</div>');
                        } else {
                            $('.error_msg').html(
                                '<div class="alert alert-danger">An unexpected error occurred. Please try again.</div>'
                            );
                        }
                    }
                });
            });
        });
    </script>
    
    <script>
        $(document).ready(function() {
    
            $(document).on('submit', '#profile_register_form', function(e) {
                e.preventDefault(); // Prevent form from submitting normally
                // Get the form action URL
                var actionurl = '/ProfileRegisterForm';
                // Perform the AJAX request
                $.ajax({
                    url: actionurl,
                    type: 'post',
                    data: $(this).serialize(),
                    success: function(response) {
                        if (response.success) {
                            $('.success_msg').html(`
                                <div class="alert alert-info" role="alert">
                                    ` + response.message + `
                                </div>
                            `);
                            setTimeout(() => {
                                // Redirect after showing the message
                                window.location.href = '/user-profile';
                            }, 2000); // Delay of 2 seconds
                        }
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            var errors = xhr.responseJSON.errors;
                            var errorHtml = '<ul>';
                            $.each(errors, function(key, value) {
                                errorHtml += '<li>' + value[0] +
                                    '</li>'; // Display first error for each field
                            });
                            errorHtml += '</ul>';
                            $('.error_msg').html('<div class="alert alert-danger">' +
                                errorHtml + '</div>');
                        } else {
                            $('.error_msg').html(
                                '<div class="alert alert-danger">An unexpected error occurred. Please try again.</div>'
                            );
                        }
                    }
                });
            });

            $('.edit-btn-profile').on('click', function() {
                const customerId = $(this).data('id');

                // Populate modal fields with dynamic IDs
                $(`#edit-id-${customerId}`).val($(this).data('id'));
                $(`#edit-name-${customerId}`).val($(this).data('name'));
                $(`#edit-number-${customerId}`).val($(this).data('number'));
                $(`#edit-password-${customerId}`).val($(this).data('password'));

                // Open the corresponding modal
                $(`#editModal_${customerId}`).modal('show');
            });

            $(document).on('submit', '#editProfileForm', function(e) {
                e.preventDefault(); // Prevent form from submitting normally

                // Get the form action URL
                var actionurl = '/updateProfileForm';

                // Perform the AJAX request
                $.ajax({
                    url: actionurl,
                    type: 'post',
                    data: $(this).serialize(),
                    success: function(response) {
                        if (response.success) {
                            $('.success_msg').html(`
                                    <div class="alert alert-info" role="alert">
                                        ` + response.message + `
                                    </div>
                                `);
                            setTimeout(() => {
                                // Redirect after showing the message
                                window.location.href = '/user-profile';
                            }, 2000); // Delay of 2 seconds
                        }
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            var errors = xhr.responseJSON.errors;
                            var errorHtml = '<ul>';
                            $.each(errors, function(key, value) {
                                errorHtml += '<li>' + value[0] +
                                    '</li>'; // Display first error for each field
                            });
                            errorHtml += '</ul>';
                            $('.error_msg').html('<div class="alert alert-danger">' +
                                errorHtml + '</div>');
                        } else {
                            $('.error_msg').html(
                                '<div class="alert alert-danger">An unexpected error occurred. Please try again.</div>'
                            );
                        }
                    }
                });
            });

        });
    </script>
    
    <script>
        $(document).ready(function() {

            $('#saveBtn').click(function() {
                const fileInput = $('#file_name')[0].files[0];

                // Client-side validation for file type and size
                if (fileInput) {
                    const allowedTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif'];
                    if (!allowedTypes.includes(fileInput.type)) {
                        alert('Please upload a valid image file (JPG, PNG, GIF).');
                        return;
                    }

                    if (fileInput.size > 2 * 1024 * 1024) { // 2MB limit
                        alert('File size must be less than 2MB.');
                        return;
                    }
                }

                const formData = new FormData();
                formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
                formData.append('id', $('#id').val());
                formData.append('type', $('#type').val());
                formData.append('title', $('#title').val());
                formData.append('designation', $('#designation').val());
                formData.append('shot_desc', $('#shot_desc').val());
                if (fileInput) {
                    formData.append('file_name', fileInput);
                }
                formData.append('status', $('#status').is(':checked') ? 1 : 0);

                $.ajax({
                    url: '/slider',
                    method: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function() {
                        alert('Slider saved successfully!');
                        $('#sliderForm')[0].reset();
                        setTimeout(() => {
                            // Redirect after showing the message
                            location.reload();
                        }, 2000); // Delay of 2 seconds
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            alert('Validation error: ' + xhr.responseJSON.message);
                        } else {
                            alert('Failed to save slider.');
                        }
                    }
                });
            });

            $(document).on('click', '.sliders-edit-btn', function() {
                const sliderId = $(this).data('id');

                $.ajax({
                    url: `/slider/${sliderId}`,
                    method: 'GET',
                    success: function(data) {
                        // Populate the form with the fetched data
                        $('#id').val(data.id);
                        $('#type').val(data.type);
                        $('#title').val(data.title);
                        $('#designation').val(data.designation);
                        $('#shot_desc').val(data.shot_desc);
                        $('#status').prop('checked', data.status === 1);

                        // Show the existing image preview
                        if (data.file_name) {
                            $('#filePreview').html(`
                                            <img src="/public/assets/images/sliders/${data.file_name}" alt="Existing Image" width="150" class="img-thumbnail">
                                            <p class="mt-2"><strong>Current Image:</strong> ${data.file_name}</p>
                                        `);
                        } else {
                            $('#filePreview').html(
                                '<p class="text-muted">No image uploaded.</p>');
                        }

                        // Scroll to the form for user convenience
                        $('html, body').animate({
                            scrollTop: $('#sliderForm').offset().top
                        }, 'slow');
                    },
                    error: function() {
                        alert('Failed to fetch slider data.');
                    }
                });
            });

            $(document).on('click', '.sliders-deleteBtn', function() {
                const id = $(this).data('id');

                if (confirm('Are you sure you want to delete this slider?')) {
                    $.ajax({
                        url: `/slider/${id}`, // Endpoint for delete
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                'content') // Include CSRF token
                        },
                        success: function() {
                            alert('Slider deleted successfully!');
                            setTimeout(() => {
                                // Reload the page or refresh the sliders list
                                location.reload();
                            }, 2000); // Optional delay of 2 seconds
                        },
                        error: function() {
                            alert('Failed to delete slider.');
                        }
                    });
                }
            });
            
            $(document).on('change','.position_type_change',function(){
                var id = $(this).val();
                if(id == 'testimonial'){
                    $('.designation_show_hide').addClass('d-block');
                    $('.designation_show_hide').removeClass('d-none');
                    $('.position_type_title').text("Your Name Hare");
                    $('.position_type_designation').text("Your Designation Hare");
                    $('.position_type_desc').text("Your Comments");
                }else if(id == 'consultants'){
                    $('.designation_show_hide').addClass('d-block');
                    $('.designation_show_hide').removeClass('d-none');
                    $('.position_type_title').text("Your Name Hare");
                    $('.position_type_designation').text("Your Designation Hare");
                    $('.position_type_desc').text("Some Details");
                }else{
                    $('.designation_show_hide').addClass('d-none');
                    $('.designation_show_hide').removeClass('d-block');
                    $('.position_type_title').text("Slider Title");
                    $('.position_type_desc').text("Slider Sub-Title");
                }
            });

        });
    </script>
    
    <script>
        $(document).ready(function() {
            $(document).on('submit', '#NewsForm', function(e) {
                e.preventDefault();
                const formData = new FormData(this); // Create FormData object with the form
                const fileInput = $('#file_name')[0].files[0];
            
                // Client-side validation for file type and size
                if (fileInput) {
                    const allowedTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif', 'image/webp'];
                    if (!allowedTypes.includes(fileInput.type)) {
                        alert('Please upload a valid image file (JPG, PNG, GIF, Webp).');
                        return;
                    }
            
                    if (fileInput.size > 2 * 1024 * 1024) { // 2MB limit
                        alert('File size must be less than 2MB.');
                        return;
                    }
                }
            
                $.ajax({
                    url: '/news',
                    type: 'POST',
                    data: formData,
                    contentType: false, // Required for FormData
                    processData: false, // Required for FormData
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.success) {
                            $('.success_msg').html(`
                                <div class="alert alert-info" role="alert">
                                    ${response.message}
                                </div>
                            `);
                            setTimeout(() => {
                                window.location.href = '/news';
                            }, 2000); // Delay of 2 seconds
                        }
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            var errors = xhr.responseJSON.errors;
                            var errorHtml = '<ul>';
                            $.each(errors, function(key, value) {
                                errorHtml += '<li>' + value[0] + '</li>';
                            });
                            errorHtml += '</ul>';
                            $('.error_msg').html('<div class="alert alert-danger">' + errorHtml + '</div>');
                        } else {
                            $('.error_msg').html(
                                '<div class="alert alert-danger">An unexpected error occurred. Please try again.</div>'
                            );
                        }
                    }
                });
            });


            $(document).on('click', '.news-deleteBtn', function() {
                const id = $(this).data('id');

                if (confirm('Are you sure you want to delete this news?')) {
                    $.ajax({
                        url: `/news/${id}`, // Endpoint for delete
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                'content') // Include CSRF token
                        },
                        success: function() {
                            alert('News deleted successfully!');
                            setTimeout(() => {
                                // Reload the page or refresh the sliders list
                                location.reload();
                            }, 2000); // Optional delay of 2 seconds
                        },
                        error: function() {
                            alert('Failed to delete News.');
                        }
                    });
                }
            });

        });
    </script>
    
    <script>
        $(document).ready(function() {

            $('#QaSaveBtn').click(function() {
                const formData = new FormData();
                formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
                formData.append('id', $('#id').val());
                formData.append('type', $('#type').val());
                formData.append('question', $('#question').val());
                formData.append('answer', $('#answer').val());

                $.ajax({
                    url: '/qa',
                    method: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function() {
                        alert('Question & Answer saved successfully!');
                        $('#QaForm')[0].reset();
                        setTimeout(() => {
                            // Redirect after showing the message
                            location.reload();
                        }, 1000); // Delay of 2 seconds
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            alert('Validation error: ' + xhr.responseJSON.message);
                        } else {
                            alert('Failed to save Question & Answer.');
                        }
                    }
                });
            });

            $(document).on('click', '.Qa-edit-btn', function() {
                const sliderId = $(this).data('id');

                $.ajax({
                    url: `/qa/${sliderId}`,
                    method: 'GET',
                    success: function(data) {
                        // Populate the form with the fetched data
                        $('#id').val(data.id);
                        $('#type').val(data.type);
                        $('#question').val(data.question);
                        $('#answer').val(data.answer);

                        $('html, body').animate({
                            scrollTop: $('#QaForm').offset().top
                        }, 'slow');
                    },
                    error: function() {
                        alert('Failed to fetch CSR data.');
                    }
                });
            });


            $(document).on('click', '.Qa-deleteBtn', function() {
                const id = $(this).data('id');

                if (confirm('Are you sure you want to delete this Question & Answer?')) {
                    $.ajax({
                        url: `/qa/${id}`, // Endpoint for delete
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                'content') // Include CSRF token
                        },
                        success: function() {
                            alert('Question & Answer deleted successfully!');
                            setTimeout(() => {
                                // Reload the page or refresh the sliders list
                                location.reload();
                            }, 2000); // Optional delay of 2 seconds
                        },
                        error: function() {
                            alert('Failed to delete Question & Answer.');
                        }
                    });
                }
            });

        });
    </script>
    
    
    <script>
        $(document).ready(function() {
            $(document).on('submit', '#StudentSupportForm', function(e) {
                e.preventDefault();
                const formData = new FormData(this); // Create FormData object with the form
                const fileInput = $('#file_name')[0].files[0];
            
                // Client-side validation for file type and size
                if (fileInput) {
                    const allowedTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif', 'image/webp'];
                    if (!allowedTypes.includes(fileInput.type)) {
                        alert('Please upload a valid image file (JPG, PNG, GIF, Webp).');
                        return;
                    }
            
                    if (fileInput.size > 2 * 1024 * 1024) { // 2MB limit
                        alert('File size must be less than 2MB.');
                        return;
                    }
                }
            
                $.ajax({
                    url: '/student-support',
                    type: 'POST',
                    data: formData,
                    contentType: false, // Required for FormData
                    processData: false, // Required for FormData
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.success) {
                            $('.success_msg').html(`
                                <div class="alert alert-info" role="alert">
                                    ${response.message}
                                </div>
                            `);
                            setTimeout(() => {
                                window.location.href = '/student-support';
                            }, 2000); // Delay of 2 seconds
                        }
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            var errors = xhr.responseJSON.errors;
                            var errorHtml = '<ul>';
                            $.each(errors, function(key, value) {
                                errorHtml += '<li>' + value[0] + '</li>';
                            });
                            errorHtml += '</ul>';
                            $('.error_msg').html('<div class="alert alert-danger">' + errorHtml + '</div>');
                        } else {
                            $('.error_msg').html(
                                '<div class="alert alert-danger">An unexpected error occurred. Please try again.</div>'
                            );
                        }
                    }
                });
            });


            $(document).on('click', '.student-support-deleteBtn', function() {
                const id = $(this).data('id');

                if (confirm('Are you sure you want to delete this?')) {
                    $.ajax({
                        url: `/student-support/${id}`, // Endpoint for delete
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                'content') // Include CSRF token
                        },
                        success: function() {
                            alert('Student Support deleted successfully!');
                            setTimeout(() => {
                                // Reload the page or refresh the sliders list
                                location.reload();
                            }, 2000); // Optional delay of 2 seconds
                        },
                        error: function() {
                            alert('Failed to delete Student Support.');
                        }
                    });
                }
            });

        });
    </script>

    

<script>
ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .then( editor => {
                console.log( editor );
        } )
        .catch( error => {
                console.error( error );
        } );
</script>

<script>
let editors = {};

ClassicEditor.create(document.querySelector('#editor5'))
    .then(editor => { editors.shot_desc = editor; })
    .catch(error => { console.error(error); });

ClassicEditor.create(document.querySelector('#editor1'))
    .then(editor => { editors.requirement = editor; })
    .catch(error => { console.error(error); });
    
ClassicEditor.create(document.querySelector('#editor6'))
    .then(editor => { editors.requirement2 = editor; })
    .catch(error => { console.error(error); });

ClassicEditor.create(document.querySelector('#editor2'))
    .then(editor => { editors.schedule = editor; })
    .catch(error => { console.error(error); });

ClassicEditor.create(document.querySelector('#editor3'))
    .then(editor => { editors.fees = editor; })
    .catch(error => { console.error(error); });

ClassicEditor.create(document.querySelector('#editor4'))
    .then(editor => { editors.interview = editor; })
    .catch(error => { console.error(error); });
</script>

    @livewireScripts
</body>

</html>
