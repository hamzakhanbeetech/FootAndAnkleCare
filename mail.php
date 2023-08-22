<?php 
if(isset($_POST['submit'])){
    $to = "hkhan1241@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<!DOCTYPE html>
<head>
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

<div id="appointment-modal" class="modal">
        <div class="modal__content">
            <a href="/" class="modal__close">&times;</a>
            <h1>Appointment Requesttt</h1>
            <hr>

            <form action="" method="post">

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
                    <input type="email" class="common-input" name="email" placeholder="first name">
                </div><br>
                <div>
                    <label>Reason</label>
                    <input type="text" class="common-input" name="message" placeholder="phone number">
                </div><br><br>
<input type="submit" name="submit" value="Submit">
</form>


        </div>
    </div>
</body>