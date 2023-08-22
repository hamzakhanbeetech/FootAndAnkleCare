<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <title>Form submission</title>


    <style>
        /* If you like this, be sure to ❤️ it. */

        .modal {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f9fafa;
            ;
            transition: all .4s;
        }

        .modal:target {
            visibility: visible;
            opacity: 1;
        }

        .modal__content {
            border-radius: 4px;
            position: relative;
            height: 100vh;
            width: 96%;
            background: #fff;
            margin: 3em 7em;
            padding: 76px;
        }
        
        @media (max-width: 450px) {
            .modal__content {
            margin: 0em 0em;
                padding: 5px;
                padding-top: 80px;
            }
        }

        .modal__close {
            position: absolute;
            top: 11%;
            right: 10px;
            color: #585858;
            text-decoration: none;
            font-size: 40px;
        }

        .common-input {
            width: 100%;
            height: 40px;
            background: #e9efee;
            border: 0px;
            border-radius: 9px;
        }

        .appointment-button {
            float: right;
            cursor: pointer;

            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            border-radius: 20px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-flow: row;
            flex-flow: row;
            font-size: 14px;
            height: 36px;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            min-width: 100px;
            padding: 0 12px;
            -webkit-transition: all .2s ease;
            transition: all .2s ease;
            background-color: #ff8d6e;
            border-color: transparent;
            color: #004852;
        }
    </style>
</head>

<body>


    <!-- 
<div class="wrapper">
    <a href="#appointment-modal">Open Demo Modal</a>
</div> -->

    <div id="appointment-modal" class="modal">
        <div class="modal__content">
            <a href="/" class="modal__close">&times;</a>
            <h1>Appointment Request</h1>
            <hr>

            <form action="mymail.php" method="post">
                <div>
                    <p>Are you a new or returning patient?</p>

                    <label class="container">New
                        <input type="radio" checked="checked" name="radio">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">Returning
                        <input type="radio" name="radio">
                        <span class="checkmark"></span>
                    </label>
                </div><br>

                <div>
                    <label>First Name</label>
                    <input type="text" class="common-input" name="first_name" placeholder="first name">
                </div><br>
                <div>
                    <label>Last Name</label>
                    <input type="text" class="common-input" name="last_name" placeholder="last name">
                </div><br>
                <div>
                    <label>Email</label>
                    <input type="email" class="common-input" name="email" placeholder="email">
                </div><br>
                <div>
                    <label>Phone</label>
                    <input class="common-input" placeholder="phone number">
                </div><br>
                <div>
                    <label>Date of birth</label>
                    <input type="date" class="common-input" placeholder="date of birth">
                </div><br>
                <div>
                    <p>Sex </p>
                    <label class="container">Male
                        <input type="radio" checked="checked" name="radio">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">Female
                        <input type="radio" name="radio">
                        <span class="checkmark"></span>
                    </label>
                </div><br>
                <div>
                    <label>Reason</label>
                    <input type="text" class="common-input" name="message" placeholder="phone number">
                </div><br><br>
                <div>

                    <label class="container">
                        I have read and agreed to the
                        <a href="">
                            Privacy Policy
                        </a>
                        and
                        <a href="">
                            Terms of Use
                        </a>
                        and I am at least 13 and have the authority to make this appointment.
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label><br><br>

                    <label class="container">
                        I agree to receive text messages from this practice and understand that message frequency and
                        data rates may apply.
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <hr>

                <div>
                    <button class="appointment-button" type="submit">Request Appointment</button>
                </div><br><br> <br>

            </form>


        </div>
    </div>
</body>

</html>