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
    <!-- <link rel="stylesheet" href="./assets/css/style.css"> -->
    <link rel="stylesheet" href="./assets/css/utilities.css">
</head>
<style>
    :root {
        --primary-theme: #0A7F8D;
        --extra-light-gray: #E8E8E8;
        --light-gray: #8F8F8F;
        --mid-gray: #4F4F4F;
        --black: #000000;
        --default-color: #fff;
        --text-20: 20px;
    }

    * {
        font-family: "Poppins", sans-serif;
    }

    .bg-props {
        background-repeat: no-repeat;
        background-size: cover;
    }

    /* step-form wrap */
    .step-form-wrap {
        box-shadow: 0px 0px 20px 0px #00000033;
        background-color: var(--default-color);
        border-radius: 20px;
        padding: 42px 0;
    }

    .form-title {
        padding: 10px 35px;
        background-color: #dddddd66;
        font-size: var(--text-20);
        font-weight: 500;
        color: var(--light-black);
    }

    .form-inner-content {
        padding: 15px 35px 0;
    }

    .field-wrap {
        margin-bottom: 26px;
    }

    .label-field {
        padding-bottom: 6px;
        color: var(--mid-gray);
    }

    .input-field {
        width: 100%;
        border: 1px solid #bababa;
        border-radius: 6px;
        padding: 17px 14px;
        font-size: 14px;
    }

    .input-field:focus {
        border: 1px solid var(--primary-theme);
    }

    .input-field::placeholder {
        color: #8f8f8f;
    }

    .star {
        color: var(--primary-theme);
    }

    .form-section {
        background-image: url("../images/body.png");
        padding: 60px 0;
        min-height: 100vh;
    }

    .e-light-gray {
        color: var(--extra-light-gray);
    }

    .textarea {
        padding: 14px;
        min-height: 130px;
        resize: none;
    }

    .btn {
        padding: 16px 70px;
        color: #fff;
        font-weight: 600;
        border-radius: 6px;
    }

    .primary-btn {
        background-color: var(--primary-theme);
        transition: all ease-in-out 0.6s;
    }

    .primary-btn:hover {
        border: 1px solid var(--primary-theme);
        background-color: transparent;
        color: var(--black);
    }

    .textarea.h-md {
        min-height: 90px;
    }

    .item-row {
        display: flex;
        gap: 15px;
        align-items: flex-end;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .item-row .item-col {
        /* max-width: 220pxs; */
        width: 100%;
    }

    .item-row .item-col-btn {
        max-width: 122px;
        width: 100%;
    }

    .item-row .item-col-btn button {
        padding: 16px 10px;
        border: none;
        border-radius: 6px;
        font-weight: 400 !important;
        background-color: var(--primary-theme);
        color: white;
        width: 100%;
    }

    @media (width >=1336px) {
        .custom-container-lg {
            max-width: 1600px;
        }
    }

    @media (width <=1620px) {
        .logo {
            text-align: center;
        }
    }

    @media (width <=1440px) {
        .form-title {
            font-size: 18px;
        }

        .label-field {
            font-size: 14px;
        }

        .input-field {
            padding: 15px 14px;
        }
    }

    @media (width <=768px) {
        .item-row {
            flex-wrap: wrap;
            border-bottom: 1px solid #E8E8E8;
        }

        .item-col-btn {
            max-width: 200px !important;
        }

        .item-row .item-col {
            max-width: 250px;
        }


    }

    @media (width <=575px) {
        .item-row  {
            flex-direction: column-reverse;
            align-items: flex-start;
        }


        .field-wrap {
            margin-bottom: 16px;
        }

        .step-form-wrap {
            padding: 30px 0;
        }

        .form-inner-content {
            padding: 15px 20px 0;
        }

        .btn {
            width: 100%;
        }

        .form-section {
            padding: 30px 0;
        }
    }
</style>

<body>
    <main class="form-section bg-props">
        <div class="container custom-container-lg">
            <div class="row">
                <div class="col-lg-3 col-12">
                    <div class="logo mb-30 mb-lg-0">
                        <img src="https://zenyst.com/wp-content/uploads/2023/08/Final-Logo.png" style="max-width: 200px;" alt="">
                    </div>
                </div>
                <div class="col-xl-7 col-lg-9">
                    <section class="step-form-wrap" id="initial-step">
                        <h1 class="form-title">Purchase Request</h1>
                        <form action="">
                            <div class="form-inner-content">
                                <div class="row">
                                    <div class="col-md-12 field-wrap">
                                        <label class="label-field" for="BusinessTitle">Work Details <span class="star">*</span></label>
                                        <input type="text" class="input-field only-alpha" id="WorkDetails" name="WorkDetails" placeholder="Work Details">
                                    </div>
                                    <div class="col-md-6 field-wrap">
                                        <label for="ServiceIndustry" class="label-field">Vendor Name <span class="star">*</span></label>
                                        <input type="text" id="VendorName" name="VendorName" class="input-field only-alpha" placeholder="Vendor Name">
                                    </div>
                                    <div class="col-md-6 field-wrap">
                                        <label for="ServiceIndustry" class="label-field">Vendor Address <span class="star">*</span></label>
                                        <input type="text" id="VendorAddress" name="VendorAddress" class="input-field only-alpha" placeholder="Vendor Address">
                                    </div>
                                    <div class="col-md-6 field-wrap">
                                        <label for="ServiceIndustry" class="label-field">Vendor Phone <span class="star">*</span></label>
                                        <input type="tel" id="VendorPhone" name="VendorPhone" class="input-field only-number" placeholder="Vendor Phone">
                                    </div>
                                    <div class="col-md-12 field-wrap">
                                        <label for="textarea" class="label-field">Items Description <span class="star">*</span></label>
                                        <textarea name="textarea" class="input-field textarea" id="ItemDescription" placeholder="Description"></textarea>
                                    </div>
                                    <div class="col-md-12 field-wrap add-item-wrap">
                                        <div class="item-row">
                                            <div class="item-col">
                                                <label for="textarea" class="label-field">Quantity <span class="star">*</span></label>
                                                <input type="number" id="Quantity" name="Quantity" class="input-field" placeholder="2">
                                            </div>
                                            <div class="item-col">
                                                <label for="textarea" class="label-field">Unit Price <span class="star">*</span></label>
                                                <input type="text" id="UnitPrice" name="UnitPrice" class="input-field only-alpha" placeholder="$">
                                            </div>
                                            <div class="item-col">
                                                <label for="textarea" class="label-field">Total Price <span class="star">*</span></label>
                                                <input type="text" id="TotalPrice" name="TotalPrice" class="input-field only-alpha" placeholder="$">
                                            </div>
                                            <div class="item-col-btn">
                                                <button type="button" class="add-price-item">+ Add Item</button>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-6 field-wrap">
                                        <label for="BusinessEmail" class="label-field">Total Amount <span class="star">*</span></label>
                                        <input type="text" id="TotalAmount" name="TotalAmount" class="input-field" placeholder="$">
                                    </div>
                                    <div class="col-md-12 d-flex justify-content-center">
                                        <button class="btn primary-btn">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const addItemButton = document.querySelector('.add-price-item');
        const addItemWrap = document.querySelector('.add-item-wrap');

        addItemButton.addEventListener('click', function() {
            const newItemRow = `
            <div class="item-row">
                <div class="item-col">
                    <label for="textarea" class="label-field">Items Description <span class="star">*</span></label>
                    <input type="text" id="ServiceIndustry" name="VendorAddress" class="input-field only-alpha" placeholder="Vendor Address">
                </div>
                <div class="item-col">
                    <label for="textarea" class="label-field">Items Description <span class="star">*</span></label>
                    <input type="text" id="ServiceIndustry" name="VendorAddress" class="input-field only-alpha" placeholder="Vendor Address">
                </div>
                <div class="item-col">
                    <label for="textarea" class="label-field">Items Description <span class="star">*</span></label>
                    <input type="text" id="ServiceIndustry" name="VendorAddress" class="input-field only-alpha" placeholder="Vendor Address">
                </div>
            </div>
        `;

            addItemWrap.insertAdjacentHTML('beforeend', newItemRow);
        });
    });
</script>
<script>

</script>
</html>