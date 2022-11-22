<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../../../public/css/uvod.css">
    <link rel="stylesheet" href="../../../public/css/history.css">
</head>
<body>

<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
                        <form id="reg_form" name="form1" action="?c=home&a=store">
                            <div class="row">
                                <div class="col-md-6 mb-4">

                                    <div class="form-outline">
                                        <input type="text" id="firstNameInput" class="form-control form-control-lg" />
                                        <label class="form-label" for="firstName">First Name</label>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="text" id="lastNameInput" class="form-control form-control-lg" />
                                        <label class="form-label" for="lastName">Last Name</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4 d-flex align-items-center">

                                    <div class="form-outline datepicker w-100">
                                        <input type="text" class="form-control form-control-lg" id="loginInput" />
                                        <label for="birthdayDate" class="form-label">Login</label>
                                    </div>

                                </div>
                                <div class="col-md-6 mb-4">

                                    <h6 class="mb-2 pb-1">Pozicia: </h6>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="reg_coach"
                                               value="option1"  />
                                        <label class="form-check-label" for="femaleGender">Mentor</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="reg_stud"
                                               value="option1"  />
                                        <label class="form-check-label" for="femaleGender">Žiak</label>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4 pb-2">
                                    <div class="form-outline">
                                        <label>
                                            <input id="passwordInput" type="password" name="text1"  class="form-control form-control-lg" />
                                        </label>
                                        <label class="form-label" >Password</label>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4 pt-2">
                                <input class="btn btn-primary btn-lg" id="reg_submit" type="submit" value="Submit" " />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="public/js/script.js"></script>
</body>
</html>