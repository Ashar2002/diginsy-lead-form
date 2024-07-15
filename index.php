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
    .error-input {
        color: red;
        font-size: 13px;
        padding-left: 10px;
        font-weight: 600;
    }

    .input-field.error-input {
        border: 1px solid red;
        font-size: 14px;
        font-weight: 400 !important;
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
                    <section class="step-form-wrap" id="initial-step">
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
                                        <div class="d-flex align-items-center row-gap-10 flex-wrap">
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
                                        <div class="d-flex align-items-center flex-wrap checkbox-flex cat-wrap">
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
                                            <div class="form-check">
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
                                        <input type="email" id="BusinessEmail" name="BusinessEmail" class="input-field" placeholder="Business Email">
                                    </div>
                                    <div class="col-md-12 d-flex justify-content-center">
                                        <button class="btn primary-btn">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </section>
                    <section class="step-form-wrap d-none" id="Logo-step">
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
                                        <label for="" class="label-field pb-12">Type Of Logo</label>
                                        <div class="row row-gap-16">
                                            <div class="col-md-6 col-lg-4">
                                                <label class="form-check  md-card" for="logo1">
                                                    <div class=" d-flex justify-content-between">
                                                        <h4 class="form-check-label label-field fs-16 fw-400 mb-20  pb-0">
                                                            Silhouette
                                                        </h4>
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="logo1" checked>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
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
                                                    <div class="d-flex justify-content-between">
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
                                                    <div class="d-flex justify-content-between">
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
                                                    <div class="d-flex justify-content-between">
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
                                                    <div class="d-flex justify-content-between">
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
                                                    <div class="d-flex justify-content-between">
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
                                                    <div class="d-flex justify-content-between">
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
                                                    <div class="d-flex justify-content-between">
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
                                                    <div class="d-flex justify-content-between">
                                                        <img src="./assets/images/logos/25.png" alt="">
                                                        <img src="./assets/images/logos/26.png" alt="">
                                                        <img src="./assets/images/logos/27.png" alt="">
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 field-wrap">
                                        <label for="Ideas_Inspiration" class="label-field ">Ideas & Inspiration <span class="star">*</span></label>
                                        <textarea name="textarea" class="input-field textarea h-md only-alpha" id="Ideas_Inspiration" placeholder="Share if any reference in mind"></textarea>
                                    </div>
                                    <div class="col-md-12 field-wrap">
                                        <label for="Comments_instructions" class="label-field">Comments / Instructions <span class="star">*</span></label>
                                        <textarea name="textarea" class="input-field textarea h-120" id="Comments_instructions" placeholder="Comments or any instructions"></textarea>
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
                                        <button class="btn primary-btn">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </section>
                    <section class="step-form-wrap d-none" id="Web-step">
                        <h1 class="form-title">Project Brief Form</h1>
                        <form action="">
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
                                        <button class="btn primary-btn">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </section>
                    <section class="step-form-wrap d-none" id="LogoWeb-step">
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
                                                    <div class="d-flex justify-content-between">
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
                                                    <div class="d-flex justify-content-between">
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
                                                    <div class="d-flex justify-content-between">
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
                                                    <div class="d-flex justify-content-between">
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
                                                    <div class="d-flex justify-content-between">
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
                                                    <div class="d-flex justify-content-between">
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
                                                    <div class="d-flex justify-content-between">
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
                                                    <div class="d-flex justify-content-between">
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
                                                    <div class="d-flex justify-content-between">
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
                                        <textarea name="textarea" class="input-field textarea h-md only-alpha" id="Ideas_Inspiration" placeholder="Share if any reference in mind"></textarea>
                                    </div>
                                    <div class="col-md-12 field-wrap">
                                        <label for="Comments_instructions" class="label-field">Comments / Instructions <span class="star">*</span></label>
                                        <textarea name="textarea" class="input-field textarea h-120" id="Comments_instructions" placeholder="Comments or any instructions"></textarea>
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
                                        <button class="btn primary-btn">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </section>
                    <section class="thankyou d-none">
                        <h1 class="display-4 text-center fw-bold">thank you</h1>
                    </section>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="./assets/js/cleave.min.js"></script>
<script src="./assets/js/custom.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const initialForm = $("#initial-step form");
        const initialStep = $("#initial-step");
        const logoStep = $("#Logo-step");
        const webStep = $("#Web-step");
        const logoWebStep = $("#LogoWeb-step");
        const thankYouSection = $(".thankyou");

        const steps = [];
        let currentStepIndex = 0;

        // Add custom validation method
        $.validator.addMethod("phoneUS", function(phone_number, element) {
            return this.optional(element) || /^\(\d{3}\) \d{3}-\d{4}$/.test(phone_number);
        }, "Please enter a valid phone number in the format (123) 123-1231.");

        initialForm.validate({
            rules: {
                BusinessTitle: {
                    required: false
                },
                ServiceIndustry: {
                    required: false
                },
                flexRadioDefault: {
                    required: false
                },
                textarea: {
                    required: false
                },
                BusinessContactPerson: {
                    required: false,
                    phoneUS: true
                },
                BusinessPhone: {
                    required: false,
                    phoneUS: true
                },
                BusinessEmail: {
                    required: false,
                    email: true
                },
                "option1": {
                    required: function(element) {
                        return $("#initial-step .form-check-input:checked").length == 0;
                    }
                }
            },
            messages: {
                BusinessTitle: {
                    required: "Please enter the business title."
                },
                ServiceIndustry: {
                    required: "Please enter the service industry."
                },
                flexRadioDefault: {
                    required: "Please select a business type."
                },
                textarea: {
                    required: "Please define your business."
                },
                BusinessContactPerson: {
                    required: "Please enter the contact person."
                },
                BusinessPhone: {
                    required: "Please enter the business phone.",
                    phoneUS: "Please enter a valid phone number in the format (123) 123-1231."
                },
                BusinessEmail: {
                    required: "Please enter the business email.",
                    email: "Please enter a valid email address."
                },
                "option1": {
                    required: "Please select at least one service."
                }
            },
            errorClass: "error-input",
            errorElement: "div",
            errorPlacement: function(error, element) {
                if (element.attr("type") === "checkbox" || element.attr("type") === "radio") {
                    error.insertAfter(element.closest('.field-wrap'));
                } else {
                    error.insertAfter(element);
                }
            },
            highlight: function(element) {
                $(element).addClass('error-border');
            },
            unhighlight: function(element) {
                $(element).removeClass('error-border');
            },
            submitHandler: function(form) {
                steps.length = 0;

                const isLogoChecked = $("#LogoCheck").is(":checked");
                const isWebChecked = $("#WebCheck").is(":checked");
                // const isBrandChecked = $("#BrandCheck").is(":checked");

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
                //     steps.push($("#Brand-step"));
                // }

                if (steps.length > 0) {
                    initialStep.addClass("d-none");
                    showStep(0);
                }
            }
        });

        function showStep(index) {
            if (index < steps.length) {
                steps[index].removeClass("d-none");
                steps[index].find("form").validate({
                    highlight: function(element) {
                        $(element).addClass('error-border');
                    },
                    unhighlight: function(element) {
                        $(element).removeClass('error-border');
                    },
                    submitHandler: function(form) {
                        steps[index].addClass("d-none");
                        showStep(index + 1);
                    }
                });
            } else {
                thankYouSection.removeClass("d-none");
                // Uncomment the next line to redirect to a thank you page instead of showing the thank you section
                // window.location.href = 'thankyou.html';
            }
        }
    });
</script>

</html>