<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diginsy Lead Form</title>
    <link rel="shortcut icon" href="./assets/images/fav-icon.webp" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class=" vw-100">
    <section class="initial-step general-step  vw-100 mt-5" id="initial-step">
        <h2 class="display-5 fw-bold text-center">Initial Step</h2>
        <form class="d-flex flex-column align-items-center gap-5  mx-auto" style="max-width: 800px;">
            <div class="form-check">
                <input type="checkbox" class="form-check-input border-danger" id="LogoCheck" name="option1" value="LogoCheck">
                <label class="form-check-label" for="LogoCheck">Logo Design</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input border-danger" id="WebCheck" name="option2" value="WebCheck">
                <label class="form-check-label" for="WebCheck">Website Design</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input border-danger" id="BrandCheck" name="option3" value="BrandCheck">
                <label class="form-check-label" for="BrandCheck">Branding</label>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </section>
    <section class="d-none Logo-step vw-100 mt-5" id="Logo-step">
        <h2 class="display-5 fw-bold text-center">Logo Design</h2>
        <button class="prev-step">Back</button>
        <form class="d-flex flex-column align-items-center gap-5  mx-auto" style="max-width: 800px;">
            <div class="mb-3">
                <label for="logoInput" class="form-label">Enter logo title</label>
                <input type="text" class="form-control" id="logoInput">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </section>
    <section class="d-none Web-step vw-100 mt-5" id="Web-step">
        <h2 class="display-5 fw-bold text-center">Website Design</h2>
        <button class="prev-step">Back</button>

        <form class="d-flex flex-column align-items-center gap-5  mx-auto" style="max-width: 800px;">
            <div class="mb-3">
                <label for="WebInput" class="form-label">Enter Website title</label>
                <input type="text" class="form-control" id="WebInput">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </section>
    <section class="d-none Web-step vw-100 mt-5" id="Brand-step">
        <h2 class="display-5 fw-bold text-center">Brand Design</h2>
        <button class="prev-step">Back</button>

        <form class="d-flex flex-column align-items-center gap-5  mx-auto" style="max-width: 800px;">
            <div class="mb-3">
                <label for="BrandInput" class="form-label">Enter Brand title</label>
                <input type="text" class="form-control" id="BrandInput">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </section>
    <section class="d-none Web-step vw-100 mt-5" id="LogoWeb-step">
        <h2 class="display-5 fw-bold text-center">LogoWeb Design</h2>
        <button class="prev-step">Back</button>

        <form class="d-flex flex-column align-items-center gap-5  mx-auto" style="max-width: 800px;">
            <div class="mb-3">
                <label for="LogoWebInput" class="form-label">Enter LogoWeb title</label>
                <input type="text" class="form-control" id="LogoWebInput">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </section>
    <section class="thankyou d-none">
        <h1 class="display-4 text-center fw-bold">thank you</h1>
    </section>
</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const initialForm = document.querySelector('#initial-step form');
        const logoStep = document.getElementById('Logo-step');
        const webStep = document.getElementById('Web-step');
        const brandStep = document.getElementById('Brand-step');
        const logoWebStep = document.getElementById('LogoWeb-step');
        const thankYouSection = document.querySelector('.thankyou');

        const steps = [];
        let currentStepIndex = 0;

        initialForm.addEventListener('submit', function(e) {
            e.preventDefault();
            steps.length = 0;

            const isLogoChecked = document.getElementById('LogoCheck').checked;
            const isWebChecked = document.getElementById('WebCheck').checked;
            const isBrandChecked = document.getElementById('BrandCheck').checked;

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

            if (isBrandChecked) {
                steps.push(brandStep);
            }

            if (steps.length > 0) {
                initialForm.parentElement.classList.add('d-none');
                showStep(0);
            }
        });

        function showStep(index) {
            if (index < steps.length) {
                steps[index].classList.remove('d-none');
                steps[index].querySelector('form').addEventListener('submit', function(e) {
                    e.preventDefault();
                    steps[index].classList.add('d-none');
                    showStep(index + 1);
                });
            } else {
                thankYouSection.classList.remove('d-none');
                // Uncomment the next line to redirect to a thank you page instead of showing the thank you section
                // window.location.href = 'thankyou.html';
            }
        }
    });
</script>
<script src="./assets/js/custom-steps.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>