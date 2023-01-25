<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title> Register</title>

    <!-- Icons font CSS-->
    <!-- Font special for pages-->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Vendor CSS-->
    <link rel="stylesheet" href="styler.css" rel="stylesheet" media="all">
    <style>
        input {
            outline: none;
            margin: 0;
            border: none;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
            width: 100%;
            font-size: 14px;
            font-family: inherit;
        }

        .input--style-4 {
            line-height: 50px;
            background: #fafafa;
            -webkit-box-shadow: inset 0px 1px 3px 0px rgba(0, 0, 0, 0.08);
            -moz-box-shadow: inset 0px 1px 3px 0px rgba(0, 0, 0, 0.08);
            box-shadow: inset 0px 1px 3px 0px rgba(0, 0, 0, 0.08);
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            padding: 0 20px;
            font-size: 16px;
            color: #666;
            -webkit-transition: all 0.4s ease;
            -o-transition: all 0.4s ease;
            -moz-transition: all 0.4s ease;
            transition: all 0.4s ease;
        }

        .input--style-4::-webkit-input-placeholder {
            /* WebKit, Blink, Edge */
            color: #666;
        }

        .input--style-4:-moz-placeholder {
            /* Mozilla Firefox 4 to 18 */
            color: #666;
            opacity: 1;
        }

        .input--style-4::-moz-placeholder {
            /* Mozilla Firefox 19+ */
            color: #666;
            opacity: 1;
        }

        .input--style-4:-ms-input-placeholder {
            /* Internet Explorer 10-11 */
            color: #666;
        }

        .input--style-4:-ms-input-placeholder {
            /* Microsoft Edge */
            color: #666;
        }

        .label {
            font-size: 16px;
            color: #555;
            text-transform: capitalize;
            display: block;
            margin-bottom: 5px;
        }

        .radio-container {
            display: inline-block;
            position: relative;
            padding-left: 30px;
            cursor: pointer;
            font-size: 16px;
            color: #666;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .radio-container input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        .radio-container input:checked~.checkmark {
            background-color: #e5e5e5;
        }

        .radio-container input:checked~.checkmark:after {
            display: block;
        }

        .radio-container .checkmark:after {
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            -o-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            width: 12px;
            height: 12px;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            background: #57b846;
        }

        .checkmark {
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            left: 0;
            height: 20px;
            width: 20px;
            background-color: #e5e5e5;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            -webkit-box-shadow: inset 0px 1px 3px 0px rgba(0, 0, 0, 0.08);
            -moz-box-shadow: inset 0px 1px 3px 0px rgba(0, 0, 0, 0.08);
            box-shadow: inset 0px 1px 3px 0px rgba(0, 0, 0, 0.08);
        }

        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        .input-group {
            position: relative;
            margin-bottom: 22px;
        }

        .input-group-icon {
            position: relative;
        }

        .input-icon {
            position: absolute;
            font-size: 18px;
            color: #999;
            right: 18px;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            cursor: pointer;
        }

        /* ==========================================================================
     #SELECT2
     ========================================================================== */
        .select--no-search .select2-search {
            display: none !important;
        }

        .rs-select2 .select2-container {
            width: 100% !important;
            outline: none;
            background: #fafafa;
            -webkit-box-shadow: inset 0px 1px 3px 0px rgba(0, 0, 0, 0.08);
            -moz-box-shadow: inset 0px 1px 3px 0px rgba(0, 0, 0, 0.08);
            box-shadow: inset 0px 1px 3px 0px rgba(0, 0, 0, 0.08);
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
        }

        .rs-select2 .select2-container .select2-selection--single {
            outline: none;
            border: none;
            height: 50px;
            background: transparent;
        }

        .rs-select2 .select2-container .select2-selection--single .select2-selection__rendered {
            line-height: 50px;
            padding-left: 0;
            color: #555;
            font-size: 16px;
            font-family: inherit;
            padding-left: 22px;
            padding-right: 50px;
        }

        .rs-select2 .select2-container .select2-selection--single .select2-selection__arrow {
            height: 50px;
            right: 20px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -moz-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .rs-select2 .select2-container .select2-selection--single .select2-selection__arrow b {
            display: none;
        }

        .rs-select2 .select2-container .select2-selection--single .select2-selection__arrow:after {
            font-family: "Material-Design-Iconic-Font";
            content: '\f2f9';
            font-size: 24px;
            color: #999;
            -webkit-transition: all 0.4s ease;
            -o-transition: all 0.4s ease;
            -moz-transition: all 0.4s ease;
            transition: all 0.4s ease;
        }

        .rs-select2 .select2-container.select2-container--open .select2-selection--single .select2-selection__arrow::after {
            -webkit-transform: rotate(-180deg);
            -moz-transform: rotate(-180deg);
            -ms-transform: rotate(-180deg);
            -o-transform: rotate(-180deg);
            transform: rotate(-180deg);
        }

        .select2-container--open .select2-dropdown--below {
            border: none;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            -webkit-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            -moz-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            border: 1px solid #e0e0e0;
            margin-top: 5px;
            overflow: hidden;
        }

        .select2-container--default .select2-results__option {
            padding-left: 22px;
        }

        /* ==========================================================================
     #TITLE
     ========================================================================== */
        .title {
            font-size: 24px;
            color: #525252;
            font-weight: 400;
            margin-bottom: 40px;
        }

        /* ==========================================================================
     #CARD
     ========================================================================== */
        .card {
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            background: #fff;
        }

        .card-4 {
            background: #fff;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            -webkit-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            -moz-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
        }

        .card-4 .card-body {
            padding: 57px 65px;
            padding-bottom: 65px;
        }

        @media (max-width: 767px) {
            .card-4 .card-body {
                padding: 50px 40px;
            }
        }
    </style>
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    {{-- <center> --}}
                    <h2 class="title">Registration Form</h2>
                    <form action="/regis" method="POST">
                        @csrf
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" name="nama" id="nama">Nama</label>
                                    <input class="input--style-4" type="text" name="nama" id="nama">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" name="email" id="email">Email</label>
                                    <input class="input--style-4" type="email" name="email" id="email">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" name="password" id="password">Password</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="password"
                                            id="password">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label" name="role" id="role">Role</label>
                                        <input class="input--style-4" type="text" name="role" id="role">
                                    </div>
                                </div>
                                {{-- <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">No hp</label>
                                        <input class="input--style-4" type="text" name="nohp">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Alamaat</label>
                                        <textarea name="alamat" id="alamat"></textarea>
                                    </div>
                                </div> --}}
                            </div>

                            <div class="p-t-15">
                                <button class="btn btn btn-primary" type="submit">Submit</button>
                            </div>
                    </form>
                    {{-- </center> --}}

                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
    <script>
        (function($) {
            'use strict';
            /*==================================================================
                [ Daterangepicker ]*/
            try {
                $('.js-datepicker').daterangepicker({
                    "singleDatePicker": true,
                    "showDropdowns": true,
                    "autoUpdateInput": false,
                    locale: {
                        format: 'DD/MM/YYYY'
                    },
                });

                var myCalendar = $('.js-datepicker');
                var isClick = 0;

                $(window).on('click', function() {
                    isClick = 0;
                });

                $(myCalendar).on('apply.daterangepicker', function(ev, picker) {
                    isClick = 0;
                    $(this).val(picker.startDate.format('DD/MM/YYYY'));

                });

                $('.js-btn-calendar').on('click', function(e) {
                    e.stopPropagation();

                    if (isClick === 1) isClick = 0;
                    else if (isClick === 0) isClick = 1;

                    if (isClick === 1) {
                        myCalendar.focus();
                    }
                });

                $(myCalendar).on('click', function(e) {
                    e.stopPropagation();
                    isClick = 1;
                });

                $('.daterangepicker').on('click', function(e) {
                    e.stopPropagation();
                });


            } catch (er) {
                console.log(er);
            }
            /*[ Select 2 Config ]
                ===========================================================*/

            try {
                var selectSimple = $('.js-select-simple');

                selectSimple.each(function() {
                    var that = $(this);
                    var selectBox = that.find('select');
                    var selectDropdown = that.find('.select-dropdown');
                    selectBox.select2({
                        dropdownParent: selectDropdown
                    });
                });

            } catch (err) {
                console.log(err);
            }


        })(jQuery);
    </script>
    @include('sweetalert::alert')
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
