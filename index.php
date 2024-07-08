<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diginsy Lead Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/utilities.css">
</head>

<body>
    <section class="form-section bg-props d-none">
        <div class="container custom-container-lg">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo">
                        <img src="./assets/images/logo.png" alt="">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="step-form-wrap">
                        <h1 class="form-title">Business Information</h1>
                        <form action="">
                            <div class="form-inner-content">
                                <div class="row">
                                    <div class="col-md-6 field-wrap">
                                        <label class="label-field" for="BusinessTitle">Business Title <span class="star">*</span></label>
                                        <input type="text" class="input-field only-alpha" id="BusinessTitle" name="BusinessTitle" placeholder="Business Title">
                                    </div>
                                    <div class="col-md-6 field-wrap">
                                        <label for="ServiceIndustry" class="label-field">Service Industry <span class="star">*</span></label>
                                        <input type="text" id="ServiceIndustry" name="ServiceIndustry" class="input-field only-alpha" placeholder="Write Industry">
                                    </div>
                                    <div class="col-md-12 field-wrap">
                                        <div class="d-flex align-items-center">
                                            <label for="" class="label-field pr-15 pb-0">Business Type <span class="star">*</span></label>
                                            <div class="form-check pr-15">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="form-check-label e-light-gray label-field pb-0" for="flexRadioDefault1">
                                                    Existing Business
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                <label class="form-check-label e-light-gray label-field pb-0" for="flexRadioDefault2">
                                                    New Startup
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 field-wrap">
                                        <label for="textarea" class="label-field">Define Your Business <span class="star">*</span></label>
                                        <textarea name="textarea" class="input-field textarea" id="textarea" placeholder="Define Your Business"></textarea>
                                    </div>
                                    <div class="col-md-12 field-wrap">
                                        <label for="" class="label-field pb-22">Services Interested In <span class="star">*</span></label>
                                        <div class="d-flex align-items-center flex-wrap checkbox-flex">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label label-field" for="flexCheckDefault">
                                                    Logo Design
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                                <label class="form-check-label label-field" for="flexCheckDefault2">
                                                    Website Design
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                                                <label class="form-check-label label-field" for="flexCheckDefault3">
                                                    Branding
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                                                <label class="form-check-label label-field" for="flexCheckDefault4">
                                                    Social Media Marketing
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
                                                <label class="form-check-label label-field" for="flexCheckDefault5">
                                                    SEO
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault6">
                                                <label class="form-check-label label-field" for="flexCheckDefault6">
                                                    Digital Advertising
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault7">
                                                <label class="form-check-label label-field" for="flexCheckDefault7">
                                                    Video Animation
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault8">
                                                <label class="form-check-label label-field" for="flexCheckDefault8">
                                                    Mobile Application
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault9">
                                                <label class="form-check-label label-field" for="flexCheckDefault9">
                                                    CRM
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 field-wrap">
                                        <label for="BusinessContactPerson" class="label-field">Business Contact Person <span class="star">*</span></label>
                                        <input type="text" id="BusinessContactPerson" name="BusinessContactPerson" class="input-field phone-number" placeholder="Business Contact Person">
                                    </div>
                                    <div class="col-md-6 field-wrap">
                                        <label for="BusinessPhone" class="label-field">Business Phone <span class="star">*</span></label>
                                        <input type="text" id="BusinessPhone" name="BusinessPhone" class="input-field phone-number" placeholder="Business Phone">
                                    </div>
                                    <div class="col-md-6 field-wrap">
                                        <label for="BusinessEmail" class="label-field">Business Email <span class="star">*</span></label>
                                        <input type="email" id="BusinessEmail" name="BusinessEmail" class="input-field" placeholder="Business Email" required>
                                    </div>
                                    <div class="col-md-12 d-flex justify-content-center">
                                        <button class="btn primary-btn">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="form-section bg-props">
        <div class="container custom-container-lg">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo">
                        <img src="./assets/images/logo.png" alt="">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="step-form-wrap">
                        <h1 class="form-title">Project Brief Form</h1>
                        <form action="">
                            <div class="form-inner-content">
                                <div class="row">
                                    <div class="col-md-6 field-wrap">
                                        <label class="label-field" for="TextOnLogo">Text On Logo <span class="star">*</span></label>
                                        <input type="text" class="input-field only-alpha" id="TextOnLogo" name="TextOnLogo" placeholder="Word To Appear On Logo">
                                    </div>
                                    <div class="col-md-6 field-wrap">
                                        <label for="Slogan" class="label-field">Slogan</label>
                                        <input type="text" id="Slogan" name="Slogan" class="input-field only-alpha" placeholder="Slogan (Optional)">
                                    </div>
                                    <div class="col-md-12 field-wrap">
                                        <label for="ColorPreference" class="label-field">Color Preference</label>
                                        <input type="text" id="ColorPreference" name="ColorPreference" class="input-field" placeholder="Color Preference (Optional)">
                                    </div>
                                    <div class="col-md-12 field-wrap">
                                        <div class="row row-gap-16">
                                            <div class="col-md-4">
                                                <label class="form-check  md-card" for="logo1">
                                                    <div class=" d-flex justify-content-between">
                                                        <h4 class="form-check-label label-field fs-16 fw-400 mb-16  pb-0">
                                                            Silhouette
                                                        </h4>
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="logo1">
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <img src="./assets/images/logos/1.png" alt="">
                                                        <img src="./assets/images/logos/1.png" alt="">
                                                        <img src="./assets/images/logos/1.png" alt="">
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-check  md-card" for="logo2">
                                                    <div class=" d-flex justify-content-between">
                                                        <h4 class="form-check-label label-field fs-16 fw-400 mb-16  pb-0">
                                                            Silhouette
                                                        </h4>
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="logo2">
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <img src="./assets/images/logos/1.png" alt="">
                                                        <img src="./assets/images/logos/1.png" alt="">
                                                        <img src="./assets/images/logos/1.png" alt="">
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-check  md-card" for="logo3">
                                                    <div class=" d-flex justify-content-between">
                                                        <h4 class="form-check-label label-field fs-16 fw-400 mb-16  pb-0">
                                                            Silhouette
                                                        </h4>
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="logo3">
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <img src="./assets/images/logos/1.png" alt="">
                                                        <img src="./assets/images/logos/1.png" alt="">
                                                        <img src="./assets/images/logos/1.png" alt="">
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-check  md-card" for="logo4">
                                                    <div class=" d-flex justify-content-between">
                                                        <h4 class="form-check-label label-field fs-16 fw-400 mb-16  pb-0">
                                                            Silhouette
                                                        </h4>
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="logo4">
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <img src="./assets/images/logos/1.png" alt="">
                                                        <img src="./assets/images/logos/1.png" alt="">
                                                        <img src="./assets/images/logos/1.png" alt="">
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-check  md-card" for="logo1">
                                                    <div class=" d-flex justify-content-between">
                                                        <h4 class="form-check-label label-field fs-16 fw-400 mb-16  pb-0">
                                                            Silhouette
                                                        </h4>
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="logo1">
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <img src="./assets/images/logos/1.png" alt="">
                                                        <img src="./assets/images/logos/1.png" alt="">
                                                        <img src="./assets/images/logos/1.png" alt="">
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-check  md-card" for="logo1">
                                                    <div class=" d-flex justify-content-between">
                                                        <h4 class="form-check-label label-field fs-16 fw-400 mb-16  pb-0">
                                                            Silhouette
                                                        </h4>
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="logo1">
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <img src="./assets/images/logos/1.png" alt="">
                                                        <img src="./assets/images/logos/1.png" alt="">
                                                        <img src="./assets/images/logos/1.png" alt="">
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-check  md-card" for="logo1">
                                                    <div class=" d-flex justify-content-between">
                                                        <h4 class="form-check-label label-field fs-16 fw-400 mb-16  pb-0">
                                                            Silhouette
                                                        </h4>
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="logo1">
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <img src="./assets/images/logos/1.png" alt="">
                                                        <img src="./assets/images/logos/1.png" alt="">
                                                        <img src="./assets/images/logos/1.png" alt="">
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-check  md-card" for="logo1">
                                                    <div class=" d-flex justify-content-between">
                                                        <h4 class="form-check-label label-field fs-16 fw-400 mb-16  pb-0">
                                                            Silhouette
                                                        </h4>
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="logo1">
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <img src="./assets/images/logos/1.png" alt="">
                                                        <img src="./assets/images/logos/1.png" alt="">
                                                        <img src="./assets/images/logos/1.png" alt="">
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-check  md-card" for="logo1">
                                                    <div class=" d-flex justify-content-between">
                                                        <h4 class="form-check-label label-field fs-16 fw-400 mb-16  pb-0">
                                                            Silhouette
                                                        </h4>
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="logo1">
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <img src="./assets/images/logos/1.png" alt="">
                                                        <img src="./assets/images/logos/1.png" alt="">
                                                        <img src="./assets/images/logos/1.png" alt="">
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 field-wrap">
                                        <label for="Ideas_Inspiration" class="label-field">Ideas & Inspiration <span class="star">*</span></label>
                                        <textarea name="textarea" class="input-field textarea h-md" id="Ideas_Inspiration" placeholder="Share if any reference in mind"></textarea>
                                    </div>
                                    <div class="col-md-12 field-wrap">
                                        <label for="Comments_instructions" class="label-field">Comments / Instructions <span class="star">*</span></label>
                                        <textarea name="textarea" class="input-field textarea h-120" id="Comments_instructions" placeholder="Comments or any instructions"></textarea>
                                    </div>
                                    <div class="col-md-12 field-wrap">
                                        <div class="d-flex align-items-center justify-content-between mb-6">
                                            <label for="" class="label-field pb-0">Attachments for reference (Optional)</label>
                                            <h4 class="fs-12 fw-400 mid-gray">(logos, website layout, theme)</h4>
                                        </div>
                                        <div class="tb-container">
                                            <label for="tb-file-upload" class="e-light-gray ">
                                                <div class="tb-img-view">
                                                    <img id="tb-image" class="hidden uploaded-image" alt="Preview" />
                                                    <span id="tb-icon" class="upload-icon mb-9">
                                                        <img src="./assets/images/upload.png" class="upload-img-icon" aria-hidden="true" alt="Upload Icon">
                                                    </span>
                                                </div>
                                                Choose file to Upload
                                            </label>
                                            <input type="file" id="tb-file-upload" accept="image/*" onchange="fileUpload(event, 'tb-image', 'tb-icon');" />
                                        </div>
                                    </div>
                                    <div class="col-md-12 d-flex justify-content-center">
                                        <button class="btn primary-btn">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/cleave.min.js"></script>
    <script src="./assets/js/custom.js"></script>
</body>

</html>