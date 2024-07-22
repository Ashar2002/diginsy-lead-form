<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diginsy Lead Form</title>
    <link rel="shortcut icon" href="./assets/images/fav-icon.webp" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/utilities.css">
</head>
<style>
    .error-line {
        display: none;
        /* Hide error messages initially */
        color: red;
        font-size: 0.875em;
        font-weight: 600;
    }

    .error-input {
        border-color: red;
        /* Highlight input fields with errors */
    }

    .input-field::placeholder {
        font-size: 14px !important;
    }
</style>

<body>
    <main class="form-section bg-props">
        <div class="container custom-container-lg">
            <div class="row">
                <div class="col-lg-3 col-12">
                    <div class="logo mb-30 mb-lg-0">
                        <img src="./assets/images/logo.png" alt="">
                    </div>
                </div>
                <div class="col-xl-7 col-lg-9">
                    <form class="step-form">
                        <section class="step-form-wrap" id="initial-step">
                            <h1 class="form-title">Business Information</h1>
                            <div class="form-inner-content">
                                <div class="row">
                                    <div class="col-md-6 field-wrap">
                                        <label class="label-field" for="BusinessTitle">Business Title <span class="star">*</span></label>
                                        <input type="text" class="input-field only-alpha" id="BusinessTitle" name="BusinessTitle" placeholder="Business Title">
                                        <span class="error-line">Enter Business Title</span>
                                    </div>
                                    <div class="col-md-6 field-wrap">
                                        <label for="ServiceIndustry" class="label-field">Service Industry <span class="star">*</span></label>
                                        <input type="text" id="ServiceIndustry" name="ServiceIndustry" class="input-field only-alpha" placeholder="Write Industry">
                                        <span class="error-line">Enter Service Industry</span>

                                    </div>
                                    <div class="col-md-12 field-wrap">
                                        <div class="business-type">
                                            <div class="d-flex align-items-center row-gap-10 flex-wrap ">
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

                                            <span class="error-line">Enter Business Type</span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 field-wrap">
                                        <label for="textarea" class="label-field">Define Your Business <span class="star">*</span></label>
                                        <textarea name="textarea" class="input-field textarea" id="textarea" placeholder="Define Your Business"></textarea>
                                        <span class="error-line">Enter Your Business</span>

                                    </div>
                                    <div class="col-md-12 field-wrap">
                                        <label for="" class="label-field pb-22">Services Interested In <span class="star">*</span></label>
                                        <div class="d-flex align-items-center flex-wrap checkbox-flex cat-wrap" id="first-step-checks">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="LogoCheck" name="option1" value="LogoCheck">
                                                <label class="form-check-label label-field" for="LogoCheck">
                                                    Logo Design
                                                </label>

                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="WebCheck" name="option2" value="WebCheck">
                                                <label class="form-check-label label-field" for="WebCheck">
                                                    Website Design
                                                </label>
                                            </div>
                                            <!-- <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="BrandCheck" name="option3" value="BrandCheck">
                                                <label class="form-check-label label-field" for="BrandCheck">
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
                                            </div> -->
                                        </div>
                                        <span class="error-line">Select atleast 1 Service</span>

                                    </div>
                                    <div class="col-md-6 field-wrap">
                                        <label for="BusinessContactPerson" class="label-field">Business Contact Person <span class="star">*</span></label>
                                        <input type="text" id="BusinessContactPerson" name="BusinessContactPerson" class="input-field phone-number" placeholder="Business Contact Person">
                                        <span class="error-line">Enter Your Business Contact</span>

                                    </div>
                                    <div class="col-md-6 field-wrap">
                                        <label for="BusinessPhone" class="label-field">Business Phone <span class="star">*</span></label>
                                        <input type="text" id="BusinessPhone" name="BusinessPhone" class="input-field phone-number" placeholder="Business Phone">
                                        <span class="error-line">Enter Your Business Phone</span>
                                    </div>
                                    <div class="col-md-6 field-wrap">
                                        <label for="BusinessEmail" class="label-field">Business Email <span class="star">*</span></label>
                                        <input type="email" id="BusinessEmail" name="BusinessEmail" class="input-field" placeholder="Business Email">
                                        <span class="error-line">Enter Your Business Email</span>
                                    </div>
                                    <div class="col-md-12 d-flex justify-content-center">
                                        <button type="button" class="btn primary-btn next-step">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="step-form-wrap d-none" id="Logo-step">
                            <h1 class="form-title">Project Brief Form</h1>
                            <div action="">
                                <div class="form-inner-content">
                                    <div class="row">
                                        <div class="col-md-6 field-wrap">
                                            <label class="label-field" for="TextOnLogo">Text On Logo <span class="star">*</span></label>
                                            <input type="text" class="input-field only-alpha" id="TextOnLogo" name="TextOnLogo" placeholder="Word To Appear On Logo">
                                            <span class="error-line">Enter Text On Logo</span>

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
                                            <label for="" class="label-field pb-12">Type Of Logo</label>
                                            <div class="row row-gap-16 logo-type-validate">
                                                <div class="col-md-6 col-lg-4">
                                                    <label class="form-check  md-card" for="logo1">
                                                        <div class=" d-flex justify-content-between">
                                                            <h4 class="form-check-label label-field fs-16 fw-400 mb-20  pb-0">
                                                                Silhouette
                                                            </h4>
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="logo1" checked>
                                                        </div>
                                                        <div class="d-flex justify-content-between gap-4">
                                                            <img src="./assets/images/logos/1.png" alt="">
                                                            <img src="./assets/images/logos/2.png" alt="">
                                                            <img src="./assets/images/logos/3.png" alt="">
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="col-md-6 col-lg-4">
                                                    <label class="form-check  md-card" for="logo2">
                                                        <div class=" d-flex justify-content-between">
                                                            <h4 class="form-check-label label-field fs-16 fw-400 mb-20  pb-0">
                                                                Abstract
                                                            </h4>
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="logo2">
                                                        </div>
                                                        <div class="d-flex justify-content-between gap-4">
                                                            <img src="./assets/images/logos/4.png" alt="">
                                                            <img src="./assets/images/logos/5.png" alt="">
                                                            <img src="./assets/images/logos/6.png" alt="">
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="col-md-6 col-lg-4">
                                                    <label class="form-check  md-card" for="logo3">
                                                        <div class=" d-flex justify-content-between">
                                                            <h4 class="form-check-label label-field fs-16 fw-400 mb-20  pb-0">
                                                                Lettermark
                                                            </h4>
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="logo3">
                                                        </div>
                                                        <div class="d-flex justify-content-between gap-4">
                                                            <img src="./assets/images/logos/7.png" alt="">
                                                            <img src="./assets/images/logos/8.png" alt="">
                                                            <img src="./assets/images/logos/9.png" alt="">
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="col-md-6 col-lg-4">
                                                    <label class="form-check  md-card" for="logo4">
                                                        <div class=" d-flex justify-content-between">
                                                            <h4 class="form-check-label label-field fs-16 fw-400 mb-20  pb-0">
                                                                Pictorial
                                                            </h4>
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="logo4">
                                                        </div>
                                                        <div class="d-flex justify-content-between gap-4">
                                                            <img src="./assets/images/logos/10.png" alt="">
                                                            <img src="./assets/images/logos/11.png" alt="">
                                                            <img src="./assets/images/logos/12.png" alt="">
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="col-md-6 col-lg-4">
                                                    <label class="form-check  md-card" for="logo5">
                                                        <div class=" d-flex justify-content-between">
                                                            <h4 class="form-check-label label-field fs-16 fw-400 mb-20  pb-0">
                                                                Mascot
                                                            </h4>
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="logo5">
                                                        </div>
                                                        <div class="d-flex justify-content-between gap-4">
                                                            <img src="./assets/images/logos/13.png" alt="">
                                                            <img src="./assets/images/logos/14.png" alt="">
                                                            <img src="./assets/images/logos/15.png" alt="">
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="col-md-6 col-lg-4">
                                                    <label class="form-check  md-card" for="logo6">
                                                        <div class=" d-flex justify-content-between">
                                                            <h4 class="form-check-label label-field fs-16 fw-400 mb-20  pb-0">
                                                                Emblem
                                                            </h4>
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="logo6">
                                                        </div>
                                                        <div class="d-flex justify-content-between gap-4">
                                                            <img src="./assets/images/logos/16.png" alt="">
                                                            <img src="./assets/images/logos/17.png" alt="">
                                                            <img src="./assets/images/logos/18.png" alt="">
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="col-md-6 col-lg-4">
                                                    <label class="form-check  md-card" for="logo7">
                                                        <div class=" d-flex justify-content-between">
                                                            <h4 class="form-check-label label-field fs-16 fw-400 mb-20  pb-0">
                                                                Typographic
                                                            </h4>
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="logo7">
                                                        </div>
                                                        <div class="d-flex justify-content-between gap-4">
                                                            <img src="./assets/images/logos/19.png" alt="">
                                                            <img src="./assets/images/logos/20.png" alt="">
                                                            <img src="./assets/images/logos/21.png" alt="">
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="col-md-6 col-lg-4">
                                                    <label class="form-check  md-card" for="logo8">
                                                        <div class=" d-flex justify-content-between">
                                                            <h4 class="form-check-label label-field fs-16 fw-400 mb-20  pb-0">
                                                                Combination
                                                            </h4>
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="logo8">
                                                        </div>
                                                        <div class="d-flex justify-content-between gap-4">
                                                            <img src="./assets/images/logos/22.png" alt="">
                                                            <img src="./assets/images/logos/23.png" alt="">
                                                            <img src="./assets/images/logos/24.png" alt="">
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="col-md-6 col-lg-4">
                                                    <label class="form-check  md-card" for="logo9">
                                                        <div class=" d-flex justify-content-between">
                                                            <h4 class="form-check-label label-field fs-16 fw-400 mb-20  pb-0">
                                                                Monogram
                                                            </h4>
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="logo9">
                                                        </div>
                                                        <div class="d-flex justify-content-between gap-4">
                                                            <img src="./assets/images/logos/25.png" alt="">
                                                            <img src="./assets/images/logos/26.png" alt="">
                                                            <img src="./assets/images/logos/27.png" alt="">
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="error-line">Select Type Of Logo</span>

                                        </div>
                                        <div class="col-md-12 field-wrap">
                                            <label for="Ideas_InspirationLogo" class="label-field ">Ideas & Inspiration <span class="star">*</span></label>
                                            <textarea name="Ideas_InspirationLogo" class="input-field textarea h-md only-alpha" id="Ideas_InspirationLogo" placeholder="Share if any reference in mind"></textarea>
                                            <span class="error-line">Enter Ideas & Inspiration</span>

                                        </div>
                                        <div class="col-md-12 field-wrap">
                                            <label for="Comments_instructionsLogo" class="label-field">Comments / Instructions <span class="star">*</span></label>
                                            <textarea name="Comments_instructionsLogo" class="input-field textarea h-120" id="Comments_instructionsLogo" placeholder="Comments or any instructions"></textarea>
                                            <span class="error-line">Enter Comments / Instructions</span>

                                        </div>
                                        <div class="col-md-12 field-wrap">
                                            <div class="d-flex align-items-sm-center justify-content-between mb-6  flex-column flex-sm-row pb-sm-0 pb-8 align-items-start ">
                                                <label for="" class="label-field pb-0">Attachments for reference (Optional)</label>
                                                <h4 class="fs-12 fw-400 mid-gray">(logos, website layout, theme)</h4>
                                            </div>
                                            <div class="tb-container">
                                                <label for="tb-file-upload" class="e-light-gray ">
                                                    <div class="tb-img-view">
                                                        <img id="tb-image" class="hidden uploaded-image" alt="Preview" />
                                                        <span id="tb-icon" class="upload-icon mb-14">
                                                            <img src="./assets/images/upload.png" class="upload-img-icon" aria-hidden="true" alt="Upload Icon">
                                                        </span>
                                                    </div>
                                                    Choose file to Upload
                                                </label>
                                                <input type="file" id="tb-file-upload" accept="image/*" onchange="fileUpload(event, 'tb-image', 'tb-icon');" />
                                            </div>
                                        </div>

                                        <div class="col-md-12 d-flex justify-content-center">
                                            <button type="button" class="btn primary-btn next-step">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="step-form-wrap d-none" id="Web-step">
                            <h1 class="form-title">Project Brief Form</h1>
                            <div action="">
                                <div class="form-inner-content">
                                    <div class="row">
                                        <div class="col-md-12 field-wrap">
                                            <label for="" class="label-field pb-0 mb-20">Type Of Website  *</label>
                                            <div class="d-flex align-items-center justify-content-between cat-wrap">
                                                <div class="form-check pr-15">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="webtype">
                                                    <label class="form-check-label e-light-gray label-field pb-0" for="webtype">
                                                        Shopping
                                                    </label>
                                                </div>
                                                <div class="form-check pr-15">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="webtype2">
                                                    <label class="form-check-label e-light-gray label-field pb-0" for="webtype2">
                                                        Informational
                                                    </label>
                                                </div>
                                                <div class="form-check pr-15">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="webtype3">
                                                    <label class="form-check-label e-light-gray label-field pb-0" for="webtype3">
                                                        Business
                                                    </label>
                                                </div>
                                                <div class="form-check pr-15">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="webtype4">
                                                    <label class="form-check-label e-light-gray label-field pb-0" for="webtype4">
                                                        Consulting
                                                    </label>
                                                </div>
                                                <div class="form-check pr-15">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="webtype5">
                                                    <label class="form-check-label e-light-gray label-field pb-0" for="webtype5">
                                                        Personal
                                                    </label>
                                                </div>
                                                <div class="form-check pr-15">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="webtype6">
                                                    <label class="form-check-label e-light-gray label-field pb-0" for="webtype6">
                                                        Booking
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 field-wrap">
                                            <div class="d-flex justify-content-between align-items-sm-center flex-sm-row flex-column cat-wrap">
                                                <div class="d-flex justify-content-between align-items-sm-center input-toggle">
                                                    <label for="" class="label-field  fw-500 pr-15 pb-0">Website</label>
                                                    <div class="form-check pr-15">
                                                        <input class="form-check-input new" type="radio" name="flexRadioDefault" id="new" checked>
                                                        <label class="form-check-label e-light-gray label-field pb-0" for="new">New</label>
                                                    </div>
                                                    <div class="form-check pr-15">
                                                        <input class="form-check-input revamp" type="radio" name="flexRadioDefault" id="Revamp">
                                                        <label class="form-check-label e-light-gray label-field pb-0" for="Revamp">Revamp</label>
                                                    </div>
                                                </div>
                                                <input type="text" class="input-field websiteInput" placeholder="Existing Website">
                                            </div>
                                        </div>
                                        <div class="col-md-12 field-wrap">
                                            <label for="ColorPreference2" class="label-field">Color Preference</label>
                                            <input type="text" id="ColorPreference2" name="ColorPreference" class="input-field" placeholder="Color Preference (Optional)">
                                        </div>
                                        <div class="col-md-12 field-wrap">
                                            <label for="Ideas_Inspiration" class="label-field">Ideas &amp; Inspiration <span class="star">*</span></label>
                                            <textarea name="textarea" class="input-field textarea h-md only-alpha" id="Ideas_Inspiration" placeholder="Share if any reference in mind"></textarea>
                                        </div>
                                        <div class="col-md-12 field-wrap">
                                            <label for="Comments_instructions" class="label-field">Comments / Instructions <span class="star">*</span></label>
                                            <textarea name="textarea" class="input-field textarea h-120" id="Comments_instructions" placeholder="Comments or any instructions"></textarea>
                                        </div>
                                        <div class="col-md-12 field-wrap">
                                            <div class="d-flex align-items-center justify-content-between mb-6 flex-wrap ">
                                                <label for="" class="label-field pb-0">Logo Files (Optional)</label>
                                                <h4 class="fs-12 fw-400 mid-gray">(logos, website layout, theme)</h4>
                                            </div>
                                            <div class="tb-container">
                                                <label for="tb-file-upload-2" class="e-light-gray ">
                                                    <div class="tb-img-view">
                                                        <img id="tb-image-2" class="hidden uploaded-image" alt="Preview" />
                                                        <span id="tb-icon-2" class="upload-icon mb-14">
                                                            <img src="./assets/images/upload.png" class="upload-img-icon" aria-hidden="true" alt="Upload Icon">
                                                        </span>
                                                    </div>
                                                    Choose file to Upload
                                                </label>
                                                <input type="file" id="tb-file-upload-2" accept="image/*" onchange="fileUpload(event, 'tb-image', 'tb-icon');" />
                                            </div>
                                        </div>
                                        <div class="col-md-12 d-flex justify-content-center">
                                            <button type="button" class="btn primary-btn next-step">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="step-form-wrap d-none" id="LogoWeb-step">
                            <h1 class="form-title">Project Brief Form</h1>
                            <div action="">
                                <div class="form-inner-content">
                                    <div class="row">
                                        <div class="col-md-6 field-wrap">
                                            <label class="label-field" for="TextOnLogo">Text On Logo <span class="star">*</span></label>
                                            <input type="text" class="input-field only-alpha" id="TextOnLogo" name="TextOnLogo" placeholder="Word To Appear On Logo">
                                            <span class="error-line">Enter Text On Logo</span>
                                        </div>
                                        <div class="col-md-6 field-wrap">
                                            <label for="Slogan" class="label-field">Slogan</label>
                                            <input type="text" id="Slogan" name="Slogan" class="input-field only-alpha" placeholder="Slogan (Optional)">
                                        </div>
                                        <div class="col-md-12 field-wrap">
                                            <label for="" class="label-field pb-12">Type Of Logo</label>
                                            <div class="row row-gap-16">
                                                <div class="col-md-6 col-lg-4">
                                                    <label class="form-check  md-card" for="logo10">
                                                        <div class=" d-flex justify-content-between">
                                                            <h4 class="form-check-label label-field fs-16 fw-400 mb-20  pb-0">
                                                                Silhouette
                                                            </h4>
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="logo10">
                                                        </div>
                                                        <div class="d-flex justify-content-between gap-4">
                                                            <img src="./assets/images/logos/1.png" alt="">
                                                            <img src="./assets/images/logos/2.png" alt="">
                                                            <img src="./assets/images/logos/3.png" alt="">
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="col-md-6 col-lg-4">
                                                    <label class="form-check  md-card" for="logo11">
                                                        <div class=" d-flex justify-content-between">
                                                            <h4 class="form-check-label label-field fs-16 fw-400 mb-20  pb-0">
                                                                Abstract
                                                            </h4>
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="logo11">
                                                        </div>
                                                        <div class="d-flex justify-content-between gap-4">
                                                            <img src="./assets/images/logos/4.png" alt="">
                                                            <img src="./assets/images/logos/5.png" alt="">
                                                            <img src="./assets/images/logos/6.png" alt="">
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="col-md-6 col-lg-4">
                                                    <label class="form-check  md-card" for="logo12">
                                                        <div class=" d-flex justify-content-between">
                                                            <h4 class="form-check-label label-field fs-16 fw-400 mb-20  pb-0">
                                                                Lettermark
                                                            </h4>
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="logo12">
                                                        </div>
                                                        <div class="d-flex justify-content-between gap-4">
                                                            <img src="./assets/images/logos/7.png" alt="">
                                                            <img src="./assets/images/logos/8.png" alt="">
                                                            <img src="./assets/images/logos/9.png" alt="">
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="col-md-6 col-lg-4">
                                                    <label class="form-check  md-card" for="logo13">
                                                        <div class=" d-flex justify-content-between">
                                                            <h4 class="form-check-label label-field fs-16 fw-400 mb-20  pb-0">
                                                                Pictorial
                                                            </h4>
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="logo13">
                                                        </div>
                                                        <div class="d-flex justify-content-between gap-4">
                                                            <img src="./assets/images/logos/10.png" alt="">
                                                            <img src="./assets/images/logos/11.png" alt="">
                                                            <img src="./assets/images/logos/12.png" alt="">
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="col-md-6 col-lg-4">
                                                    <label class="form-check  md-card" for="logo14">
                                                        <div class=" d-flex justify-content-between">
                                                            <h4 class="form-check-label label-field fs-16 fw-400 mb-20  pb-0">
                                                                Mascot
                                                            </h4>
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="logo14">
                                                        </div>
                                                        <div class="d-flex justify-content-between gap-4">
                                                            <img src="./assets/images/logos/13.png" alt="">
                                                            <img src="./assets/images/logos/14.png" alt="">
                                                            <img src="./assets/images/logos/15.png" alt="">
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="col-md-6 col-lg-4">
                                                    <label class="form-check  md-card" for="logo15">
                                                        <div class=" d-flex justify-content-between">
                                                            <h4 class="form-check-label label-field fs-16 fw-400 mb-20  pb-0">
                                                                Emblem
                                                            </h4>
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="logo15">
                                                        </div>
                                                        <div class="d-flex justify-content-between gap-4">
                                                            <img src="./assets/images/logos/16.png" alt="">
                                                            <img src="./assets/images/logos/17.png" alt="">
                                                            <img src="./assets/images/logos/18.png" alt="">
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="col-md-6 col-lg-4">
                                                    <label class="form-check  md-card" for="logo16">
                                                        <div class=" d-flex justify-content-between">
                                                            <h4 class="form-check-label label-field fs-16 fw-400 mb-20  pb-0">
                                                                Typographic
                                                            </h4>
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="logo16">
                                                        </div>
                                                        <div class="d-flex justify-content-between gap-4">
                                                            <img src="./assets/images/logos/19.png" alt="">
                                                            <img src="./assets/images/logos/20.png" alt="">
                                                            <img src="./assets/images/logos/21.png" alt="">
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="col-md-6 col-lg-4">
                                                    <label class="form-check  md-card" for="logo17">
                                                        <div class=" d-flex justify-content-between">
                                                            <h4 class="form-check-label label-field fs-16 fw-400 mb-20  pb-0">
                                                                Combination
                                                            </h4>
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="logo17">
                                                        </div>
                                                        <div class="d-flex justify-content-between gap-4">
                                                            <img src="./assets/images/logos/22.png" alt="">
                                                            <img src="./assets/images/logos/23.png" alt="">
                                                            <img src="./assets/images/logos/24.png" alt="">
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="col-md-6 col-lg-4">
                                                    <label class="form-check  md-card" for="logo18">
                                                        <div class=" d-flex justify-content-between">
                                                            <h4 class="form-check-label label-field fs-16 fw-400 mb-20  pb-0">
                                                                Monogram
                                                            </h4>
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="logo18">
                                                        </div>
                                                        <div class="d-flex justify-content-between gap-4">
                                                            <img src="./assets/images/logos/25.png" alt="">
                                                            <img src="./assets/images/logos/26.png" alt="">
                                                            <img src="./assets/images/logos/27.png" alt="">
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 field-wrap">
                                            <label for="" class="label-field pb-0 mb-20">Type Of Website &nbsp;*</label>
                                            <div class="d-flex align-items-center justify-content-between cat-wrap">
                                                <div class="form-check pr-15">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="webtype">
                                                    <label class="form-check-label e-light-gray label-field pb-0" for="webtype">
                                                        Shopping
                                                    </label>
                                                </div>
                                                <div class="form-check pr-15">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="webtype2">
                                                    <label class="form-check-label e-light-gray label-field pb-0" for="webtype2">
                                                        Informational
                                                    </label>
                                                </div>
                                                <div class="form-check pr-15">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="webtype3">
                                                    <label class="form-check-label e-light-gray label-field pb-0" for="webtype3">
                                                        Business
                                                    </label>
                                                </div>
                                                <div class="form-check pr-15">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="webtype4">
                                                    <label class="form-check-label e-light-gray label-field pb-0" for="webtype4">
                                                        Consulting
                                                    </label>
                                                </div>
                                                <div class="form-check pr-15">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="webtype5">
                                                    <label class="form-check-label e-light-gray label-field pb-0" for="webtype5">
                                                        Personal
                                                    </label>
                                                </div>
                                                <div class="form-check pr-15">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="webtype6">
                                                    <label class="form-check-label e-light-gray label-field pb-0" for="webtype6">
                                                        Booking
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 field-wrap">
                                            <div class="d-flex justify-content-between align-items-sm-center flex-sm-row flex-column cat-wrap">
                                                <div class="d-flex justify-content-between align-items-center input-toggle">
                                                    <label for="" class="label-field  fw-500 pr-15 pb-0">Website</label>
                                                    <div class="form-check pr-15">
                                                        <input class="form-check-input new" type="radio" name="flexRadioDefault" id="new2" checked>
                                                        <label class="form-check-label e-light-gray label-field pb-0" for="new2">New</label>
                                                    </div>
                                                    <div class="form-check pr-15">
                                                        <input class="form-check-input revamp" type="radio" name="flexRadioDefault" id="Revamp2">
                                                        <label class="form-check-label e-light-gray label-field pb-0" for="Revamp2">Revamp</label>
                                                    </div>
                                                </div>
                                                <input type="text" class="input-field websiteInput2" placeholder="Existing Website">
                                            </div>
                                        </div>
                                        <div class="col-md-12 field-wrap">
                                            <label for="ColorPreference2" class="label-field">Color Preference</label>
                                            <input type="text" id="ColorPreference2" name="ColorPreference" class="input-field" placeholder="Color Preference (Optional)">
                                        </div>
                                        <div class="col-md-12 field-wrap">
                                            <label for="Ideas_Inspiration" class="label-field ">Ideas & Inspiration <span class="star">*</span></label>
                                            <textarea name="Ideas_Inspiration" class="input-field textarea h-md only-alpha" id="Ideas_Inspiration" placeholder="Share if any reference in mind"></textarea>
                                        </div>
                                        <div class="col-md-12 field-wrap">
                                            <label for="Comments_instructions" class="label-field">Comments / Instructions <span class="star">*</span></label>
                                            <textarea name="Comments_instructions" class="input-field textarea h-120" id="Comments_instructions" placeholder="Comments or any instructions"></textarea>
                                        </div>
                                        <div class="col-md-12 field-wrap">
                                            <div class="d-flex align-items-sm-center justify-content-between mb-6  flex-column flex-sm-row pb-sm-0 pb-8 align-items-start">
                                                <label for="" class="label-field pb-0">Attachments for reference (Optional)</label>
                                                <h4 class="fs-12 fw-400 mid-gray">(logos, website layout, theme)</h4>
                                            </div>
                                            <div class="tb-container">
                                                <label for="tb-file-upload-3" class="e-light-gray ">
                                                    <div class="tb-img-view">
                                                        <img id="tb-image-3" class="hidden uploaded-image" alt="Preview" />
                                                        <span id="tb-icon-3" class="upload-icon mb-14">
                                                            <img src="./assets/images/upload.png" class="upload-img-icon" aria-hidden="true" alt="Upload Icon">
                                                        </span>
                                                    </div>
                                                    Choose file to Upload
                                                </label>
                                                <input type="file" id="tb-file-upload-3" accept="image/*" onchange="fileUpload(event, 'tb-image', 'tb-icon');" />
                                            </div>
                                        </div>
                                        <div class="col-md-12 d-flex justify-content-center">
                                            <button type="button" class="btn primary-btn next-step">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="thankyou d-none">
                            <h1 class="display-4 text-center fw-bold">thank you</h1>
                        </section>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Include jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="./assets/js/cleave.min.js"></script>
<script src="./assets/js/custom.js"></script>
<!-- working js -->
<!-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Function to check if all required fields are filled
        function validateForm() {
            let isValid = true;

            // Clear previous errors
            document.querySelectorAll('.error-line').forEach(el => el.style.display = 'none');
            document.querySelectorAll('.error-input').forEach(el => el.classList.remove('error-input'));

            // Check required text inputs
            const requiredFields = ['BusinessTitle', 'ServiceIndustry', 'BusinessContactPerson', 'BusinessPhone', 'BusinessEmail', 'textarea'];
            requiredFields.forEach(id => {
                const input = document.getElementById(id);
                if (!input.value.trim()) {
                    isValid = false;
                    input.classList.add('error-input');
                    input.nextElementSibling.style.display = 'block';
                }
            });

            // Check radio buttons
            const radioButtons = document.querySelectorAll('.business-type input[type="radio"]');
            const radioChecked = Array.from(radioButtons).some(radio => radio.checked);
            if (!radioChecked) {
                isValid = false;
                document.querySelector('.business-type .error-line').style.display = 'block'; // Display the error line for business-type
                radioButtons.forEach(radio => radio.classList.add('error-input')); // Add error class to radios
            } else {
                radioButtons.forEach(radio => radio.classList.remove('error-input')); // Remove error class if valid
            }

            // Check checkboxes
            const checkboxes = document.querySelectorAll('#first-step-checks input[type="checkbox"]');
            const checkboxChecked = Array.from(checkboxes).some(checkbox => checkbox.checked);
            if (!checkboxChecked) {
                isValid = false;
                document.querySelector('#first-step-checks + .error-line').style.display = 'block'; // Adjust this selector if needed
            }

            // Check phone number format (simple example, adjust as needed)
            const phoneInput = document.getElementById('BusinessPhone');
            const BusinessphoneInput = document.getElementById('BusinessPhone');
            const phonePattern = /^\(\d{3}\) \d{3}-\d{4}$/; // Example: US phone number without dashes
            if (phoneInput.value && !phonePattern.test(phoneInput.value)) {
                isValid = false;
                phoneInput.classList.add('error-input');
                phoneInput.nextElementSibling.style.display = 'block';
            }

            return isValid;
        }

        // Handle the Next button click event
        document.querySelector('.next-step').addEventListener('click', function() {
            if (validateForm()) {
                // Form is valid, proceed to the next step
                const initialStep = document.getElementById('initial-step');
                const logoStep = document.getElementById('Logo-step');
                const webStep = document.getElementById('Web-step');
                const brandStep = document.getElementById('Brand-step');
                const logoWebStep = document.getElementById('LogoWeb-step');
                const thankYouSection = document.querySelector('.thankyou');

                const steps = [];
                let currentStepIndex = 0;

                const isLogoChecked = document.getElementById('LogoCheck').checked;
                const isWebChecked = document.getElementById('WebCheck').checked;
                // const isBrandChecked = document.getElementById('BrandCheck').checked;

                if (isLogoChecked && isWebChecked) {
                    steps.push(logoWebStep);
                } else {
                    if (isLogoChecked) {
                        steps.push(logoStep);
                    }
                    if (isWebChecked) {
                        steps.push(webStep);
                    }
                }

                // if (isBrandChecked) {
                //     steps.push(brandStep);
                // }

                if (steps.length > 0) {
                    initialStep.classList.add('d-none');
                    showStep(0);
                }

                function showStep(index) {
                    if (index < steps.length) {
                        steps[index].classList.remove('d-none');
                        const nextButton = steps[index].querySelector('button.next-step');
                        if (index === steps.length - 1) {
                            nextButton.type = 'submit';
                            nextButton.textContent = 'Submit';
                        } else {
                            nextButton.addEventListener('click', function(e) {
                                e.preventDefault();
                                steps[index].classList.add('d-none');
                                showStep(index + 1);
                            });
                        }
                    } else {
                        thankYouSection.classList.remove('d-none');
                    }
                }
            }
        });
    });
</script> -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Function to validate the initial step
        function validateInitialStep() {
            let isValid = true;
            const requiredFields = ['BusinessTitle', 'ServiceIndustry', 'BusinessContactPerson', 'BusinessPhone', 'BusinessEmail', 'textarea'];

            requiredFields.forEach(id => {
                const input = document.getElementById(id);
                if (!input.value.trim()) {
                    isValid = false;
                    input.classList.add('error-input');
                    input.nextElementSibling.style.display = 'block';
                } else {
                    input.classList.remove('error-input');
                    input.nextElementSibling.style.display = 'none';
                }
            });

            // Check phone number format
            const phoneInput = document.getElementById('BusinessPhone');
            const phonePattern = /^\(\d{3}\) \d{3}-\d{4}$/;
            if (phoneInput.value && !phonePattern.test(phoneInput.value)) {
                isValid = false;
                phoneInput.classList.add('error-input');
                phoneInput.nextElementSibling.style.display = 'block';
            }

            // Check radio buttons
            const radioButtons = document.querySelectorAll('.business-type input[type="radio"]');
            const radioChecked = Array.from(radioButtons).some(radio => radio.checked);
            if (!radioChecked) {
                isValid = false;
                document.querySelector('.business-type .error-line').style.display = 'block';
                radioButtons.forEach(radio => radio.classList.add('error-input'));
            } else {
                radioButtons.forEach(radio => radio.classList.remove('error-input'));
                document.querySelector('.business-type .error-line').style.display = 'none';
            }

            // Check checkboxes
            const checkboxes = document.querySelectorAll('#first-step-checks input[type="checkbox"]');
            const checkboxChecked = Array.from(checkboxes).some(checkbox => checkbox.checked);
            if (!checkboxChecked) {
                isValid = false;
                document.querySelector('#first-step-checks + .error-line').style.display = 'block';
            } else {
                document.querySelector('#first-step-checks + .error-line').style.display = 'none';
            }

            return isValid;
        }

        // Function to validate the logo step
        function validateLogoStep() {
            let isValid = true;

            // Validate radio buttons
            const logoRadioButtons = document.querySelectorAll('.logo-type-validate input[type="radio"]');
            const logoErrorLine = document.querySelector('.logo-type-validate + .error-line');
            const logoChecked = Array.from(logoRadioButtons).some(radio => radio.checked);
            if (!logoChecked) {
                isValid = false;
                logoErrorLine.style.display = 'block';
                logoRadioButtons.forEach(radio => radio.classList.add('error-input'));
            } else {
                logoRadioButtons.forEach(radio => radio.classList.remove('error-input'));
                logoErrorLine.style.display = 'none';
            }

            // Validate text fields
            const textFields = ['TextOnLogo', 'Ideas_Inspiration', 'Comments_instructions'];
            textFields.forEach(id => {
                const input = document.getElementById(id);
                if (!input.value.trim()) {
                    isValid = false;
                    input.classList.add('error-input');
                    input.nextElementSibling.style.display = 'block';
                } else {
                    input.classList.remove('error-input');
                    input.nextElementSibling.style.display = 'none';
                }
            });

            return isValid;
        }

        // Function to handle the Next button click event
        function handleNextStepClick() {
            const currentStep = document.querySelector('.step-form-wrap:not(.d-none)');
            const nextStep = currentStep.nextElementSibling;

            if (currentStep.id === 'initial-step') {
                if (validateInitialStep()) {
                    const isLogoChecked = document.getElementById('LogoCheck').checked;
                    const isWebChecked = document.getElementById('WebCheck').checked;

                    // Determine the next step based on checkbox selection
                    if (isLogoChecked && isWebChecked) {
                        // Show LogoWeb-step if both are checked
                        document.getElementById('LogoWeb-step').classList.remove('d-none');
                    } else {
                        // Show Logo-step or Web-step based on the checks
                        if (isLogoChecked) {
                            document.getElementById('Logo-step').classList.remove('d-none');
                        }
                        if (isWebChecked) {
                            document.getElementById('Web-step').classList.remove('d-none');
                        }
                    }

                    // Hide current step and move to the determined step
                    currentStep.classList.add('d-none');
                }
            } else if (currentStep.id === 'Logo-step') {
                if (validateLogoStep()) {
                    currentStep.classList.add('d-none');
                    if (document.getElementById('Web-step').classList.contains('d-none')) {
                        // If Web-step is not visible, show the Thank You section
                        document.querySelector('.thankyou').classList.remove('d-none');
                    }
                }
            } else if (currentStep.id === 'Web-step') {
                // Example: Add validation for the 'Web-step' if needed
                // if (validateWebStep()) {
                //     currentStep.classList.add('d-none');
                //     document.querySelector('.thankyou').classList.remove('d-none');
                // }
            } else if (currentStep.id === 'LogoWeb-step') {
                // Handle the LogoWeb-step if needed
                currentStep.classList.add('d-none');
                document.querySelector('.thankyou').classList.remove('d-none');
            }
        }

        // Attach the click event listener to all Next buttons
        document.querySelectorAll('.next-step').forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                handleNextStepClick();
            });
        });
    });
</script>

</html>