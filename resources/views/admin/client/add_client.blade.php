@extends('layouts.admin')
@section('content')
<div class="themebody-wrap">
    <!-- breadcrumb start-->
    <div class="codex-breadcrumb">
        <div class="breadcrumb-contain">
            <div class="left-breadcrumb">
                <ul class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">
                        <h1>Dashboard</h1></a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Add Client</a></li>
                </ul>
            </div>
            <div class="right-breadcrumb">
                <ul>
                    <li>
                        <div class="bread-wrap"><i class="fa fa-clock-o"></i></div><span class="liveTime"></span>
                    </li>
                    <li>
                        <div class="bread-wrap"><i class="fa fa-calendar"></i></div><span class="getDate"></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb end-->
    <!-- theme body start-->
    <div class="theme-body common-dash" data-simplebar>
        <form action="{{route('client.store')}}" method="POST">
            @csrf
            @method("POST")
            <div class="custom-container">
                <div class="d-flex justify-content-between mb-20 pt-10">
                    <div class="form-check form-switch mb-10">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Person/Organizations</label>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Add Client</button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="row-md-6">
                          <div class="card">
                            <div class="card-header">
                              <h4>Personal Information</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="personalName" class="form-label">Name</label>
                                            <input class="form-control" id="personalName" type="text" placeholder="Name" name="client_name">
                                        </div>
                                        <div class="form-group">
                                            <label for="designation" class="form-label">Designation</label>
                                            <input class="form-control" id="designation" type="text" placeholder="Designation" name="client_designation">
                                        </div>
                                        <div class="form-group" id="companyToggle">
                                            <label for="company" class="form-label">Company</label>
                                            <input class="form-control" id="company" type="text" placeholder="Company" name="client_company">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="imageFile" class="form-label">Image</label>
                                            <div class="border p-5 text-center rounded bg-light" style="border: 2px dashed #ccc; position: relative;">
                                                <input type="file" class="form-control-file" id="imageFile" hidden>
                                                <label for="imageFile" class="file-label d-block">
                                                    <a href="#" class="text-primary"></a>
                                                    <i class="fa fa-file-image-o fa-5x"></i> <br><br>
                                                    Choose an image
                                                </label>
                                                <!-- Image preview area -->
                                                <img id="previewImage" src="" alt="Image Preview" class="img-fluid rounded" style="display: none; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); max-width: 100%; max-height: 100%;" onclick="document.getElementById('imageFile').click();">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group companyInfo" id="companyToggleAddress">
                                    <label for="companyAddress" class="form-label">Company Address</label>
                                    <textarea class="form-control" id="companyAddress" placeholder="Company Address" name="client_company_address"></textarea>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="">
                          <div class="card">
                            <div class="card-header">
                              <h4>Personal Contact</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="personalPhone" class="form-label">Phone Number</label>
                                    <input class="form-control" id="personalPhone" type="text" placeholder="Phone Number" name="client_phone_number">
                                    <input class="form-control" id="personalPhone" type="text" placeholder="Phone Numbers (separated by commas)" name="client_phone_number" onkeydown="handleKeyDown(event)">
                                </div>
                                <div class="form-group">
                                    <label for="whatsappPhone" class="form-label">WhatsApp Number</label>
                                    <input class="form-control" id="whatsappPhone" type="text" placeholder="WhatsApp Number" name="client_whatsapp_number">
                                </div>
                                <div class="form-group">
                                    <label for="personalEmail" class="form-label">Email</label>
                                    <input class="form-control" id="personalEmail" type="text" placeholder="Email" name="client_email">
                                </div>
                                <div class="form-group">
                                    <label for="personalAddress" class="form-label">Address</label>
                                    <textarea class="form-control" id="personalAddress" placeholder="Address" name="client_address"></textarea>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row-md-6 " id="organizationInfo" style="display: none;">
                          <div class="card">
                            <div class="card-header">
                              <h4>Organization Information</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="organizationName" class="form-label">Organization Name</label>
                                            <input class="form-control" id="organizationName" type="text" placeholder="Organization Name" name="organization_name">
                                        </div>
                                        <div class="form-group">
                                            <label for="organizationPhone" class="form-label">Phone Number</label>
                                            <input class="form-control" id="organizationPhone" type="text" placeholder="Phone Number" name="organization_phone_number">
                                        </div>
                                        <div class="form-group">
                                            <label for="organizationWhatsApp" class="form-label">WhatsApp Number</label>
                                            <input class="form-control" id="organizationWhatsApp" type="text" placeholder="WhatsApp Number" name="organization_whatsapp_number">
                                        </div>
                                        <div class="form-group">
                                            <label for="organizationEmail" class="form-label">Email</label>
                                            <input class="form-control" id="organizationEmail" type="text" placeholder="Email" name="organization_email">
                                        </div>
                                        <div class="form-group">
                                            <label for="organizationWebsite" class="form-label">Website</label>
                                            <input class="form-control" id="organizationWebsite" type="text" placeholder="Website" name="organization_website">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="logoFile" class="form-label">Logo</label>
                                            <div class="border p-5 text-center rounded bg-light" style="border: 2px dashed #ccc; position: relative;">
                                                <input type="file" class="form-control-file" id="logoFile" hidden>
                                                <label for="logoFile" class="file-label d-block">
                                                    <a href="#" class="text-primary"></a>
                                                    <i class="fa fa-file-image-o fa-5x"></i> <br><br>
                                                    Choose file or drop here
                                                </label>
                                                <!-- Image preview area -->
                                                <img id="previewLogo" src="" alt="Logo Preview" class="img-fluid rounded" style="display: none; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); max-width: 100%; max-height: 100%;" onclick="document.getElementById('imageFile').click();">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="companyAddress" class="form-label">Company Address</label>
                                    <textarea class="form-control" id="companyAddress" placeholder="Company Address" name="organization_address"></textarea>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="">
                          <div class="card">
                            <div class="card-header">
                              <h4>Documents</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <!-- Drop zone style using Bootstrap classes -->
                                    <div class="border p-5 text-center rounded bg-light" style="border: 2px dashed #ccc;">
                                        <input type="file" class="form-control-file" id="imageFiles" multiple hidden>
                                        <label for="imageFiles" class="file-label d-block">
                                            <a href="#" class="text-primary"></a>
                                            <i class="fa fa-file-image-o fa-5x"></i> <br><br>
                                            Choose files or drop here
                                        </label>
                                    </div>
                                    <ul id="fileList" class="mt-3"></ul> <!-- List to display selected files -->
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- theme body end-->
</div>
@endsection

@push('script')
<script>
    $(document).ready(function () {
        $('#imageFile').on('change', function (e) {
            const file = e.target.files[0];
            if (file && file.type.startsWith('image/')) {
                const reader = new FileReader();

                reader.onload = function (event) {
                    $('#previewImage').attr('src', event.target.result);
                    $('#previewImage').show(); // Show the image preview
                };

                reader.readAsDataURL(file); // Convert the file to a data URL
            } else {
                $('#previewImage').hide(); // Hide the preview if not an image
                $('#previewImage').attr('src', ''); // Clear the image source
            }
        });



        // Toggle Organization Information visibility based on switch state
        $('#flexSwitchCheckDefault').on('change', function () {
            if ($(this).is(':checked')) {
                $('#organizationInfo').show(); // Show organization info
                $('#companyToggleAddress').hide(); // Show organization info
                $('#companyToggle').hide(); // Show organization info

            } else {
                $('#organizationInfo').hide(); // Hide organization info
                $('#companyToggleAddress').show(); // Show organization info
                $('#companyToggle').show(); // Show organization info
            }
        });


        $('#logoFile').on('change', function (e) {
            const file = e.target.files[0];
            if (file && file.type.startsWith('image/')) {
                const reader = new FileReader();

                reader.onload = function (event) {
                    $('#previewLogo').attr('src', event.target.result);
                    $('#previewLogo').show(); // Show the image preview
                };

                reader.readAsDataURL(file); // Convert the file to a data URL
            } else {
                $('#previewLogo').hide(); // Hide the preview if not an image
                $('#previewLogo').attr('src', ''); // Clear the image source
            }
        });

        // Handle file selection for documents
        $('#imageFiles').on('change', function () {
            const fileNames = $.map(this.files, file => file.name);
            const fileList = $('#fileList');
            fileList.empty(); // Clear the list before adding new items

            // Append each file name to the list
            $.each(fileNames, function(index, name) {
                fileList.append(`<li>${name}</li>`);
            });
        });
    });

    function handleKeyDown(event) {
    const input = event.target;

    // Check if the Enter key is pressed
    if (event.key === 'Enter') {
        event.preventDefault(); // Prevent form submission

        const currentValue = input.value.trim();
        const phoneNumbers = currentValue.split(',').map(num => num.trim()).filter(Boolean);

        // Validate that each phone number is 11 digits
        const isValid = phoneNumbers.every(num => num.length === 11);

        if (isValid) {
            // Add a comma and a space if the input is not empty
            input.value += ', ';
        } else {
            alert('Each phone number must be 11 digits.');
        }
    }

    // Optional: Handle the case for backspace to remove the last comma
    if (event.key === 'Backspace' && input.value.endsWith(', ')) {
        input.value = input.value.slice(0, -2); // Remove last comma and space
    }
}
</script>
@endpush

