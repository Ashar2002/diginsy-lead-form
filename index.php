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
                        <h1 class="form-title">Business Information</h1>
                        <form action="">
                            <div class="form-inner-content">
                                <div class="row">
                                    <div class="col-md-6 field-wrap">
                                        <label for="" class="label-field">Business Title <span class="star">*</span></label>
                                        <input type="text" class="input-field" placeholder="Business Title">
                                    </div>
                                    <div class="col-md-6 field-wrap">
                                        <label for="" class="label-field">Service Industry <span class="star">*</span></label>
                                        <input type="text" class="input-field" placeholder="Write Industry">
                                    </div>
                                    <div class="col-md-12 field-wrap">
                                        <div class="d-flex align-items-center">
                                            <label for="" class="label-field pr-15 pb-0">Business Type <span class="star">*</span></label>
                                            <div class="form-check pr-15">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                <label class="form-check-label e-light-gray label-field pb-0" for="flexRadioDefault2">
                                                    Existing Business
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                <label class="form-check-label e-light-gray label-field pb-0" for="flexRadioDefault2">
                                                    New Startup
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 field-wrap">
                                        <label for="" class="label-field">Define Your Business <span class="star">*</span></label>
                                        <textarea name="" class="input-field textarea" id="" placeholder="Define Your Business"></textarea>
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
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                <label class="form-check-label label-field" for="flexCheckChecked">
                                                    Website Design
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                <label class="form-check-label label-field" for="flexCheckChecked">
                                                    Branding
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                <label class="form-check-label label-field" for="flexCheckChecked">
                                                    Social Media Marketing
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                <label class="form-check-label label-field" for="flexCheckChecked">
                                                    SEO
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                <label class="form-check-label label-field" for="flexCheckChecked">
                                                    Digital Advertising
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                <label class="form-check-label label-field" for="flexCheckChecked">
                                                    Video Animation
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                <label class="form-check-label label-field" for="flexCheckChecked">
                                                    Mobile Application
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                <label class="form-check-label label-field" for="flexCheckChecked">
                                                    CRM
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 field-wrap">
                                        <label for="" class="label-field">Business Contact Person <span class="star">*</span></label>
                                        <input type="text" class="input-field" placeholder="Business Contact Person">
                                    </div>
                                    <div class="col-md-6 field-wrap">
                                        <label for="" class="label-field">Business Phone <span class="star">*</span></label>
                                        <input type="text" class="input-field" placeholder="Business Phone">
                                    </div>
                                    <div class="col-md-6 field-wrap">
                                        <label for="" class="label-field">Business Email <span class="star">*</span></label>
                                        <input type="text" class="input-field" placeholder="Business Email">
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
</body>

</html>