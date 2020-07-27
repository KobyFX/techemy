<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Contact from</title>
</head>

<body>

    <div class="container">

        <h1 class="brand"><span>GET IN TOUCH</span></h1>

        <div class="wrapper">

            <!-- COMPANY INFORMATION -->
            <div class="company-info">
                <h3>Techemy Web Design</h3>

                <ul>
                    <li><i class="fa fa-road"></i> Brookvale 2100</li>
                    <li><i class="fa fa-phone"></i> (61) 432-323-565</li>
                    <li><i class="fa fa-envelope"></i> koby@techemy.com</li>
                </ul>
                <div class="teamv">
                    <a href="https://download.teamviewer.com/download/TeamViewerQS.exe"><img src="img/teamviewer.png"
                            style=" height: 40px;">
                        <div class="teamv-link">
                            <a href="https://download.teamviewer.com/download/TeamViewerQS.exe"
                                style="text-decoration: none; font-weight: 600; color: #a81b27 !important;">Team
                                Viewer</a>
                        </div>
                </div>
            </div>
            <!-- End .company-info -->

            <!-- CONTACT FORM -->
            <div class="contact">
                <h3>E-mail Us</h3>

                <form class="contact-form" action="contactform.php" method="post">

                    <p>
                        <label>Name</label>
                        <input type="text" name="name" id="name" required>
                    </p>

                    <p>
                        <label>Subject</label>
                        <input type="text" name="subject" id="company">
                    </p>

                    <p>
                        <label>E-mail Address</label>
                        <input type="email" name="mail" id="email" required>
                    </p>

                    <p>
                        <label>Phone Number</label>
                        <input type="text" name="phone" id="phone">
                    </p>

                    <p class="full">
                        <label>Message</label>
                        <textarea name="message" rows="5" id="message"></textarea>
                    </p>

                    <p class="full">
                        <button type="submit" name="submit">Submit</button>
                    </p>

                </form>
                <!-- End #contact-form -->
            </div>
            <!-- End .contact -->

        </div>
        <!-- End .wrapper -->
    </div>
    <!-- End .container -->


</body>

</html>

<!-- STYLE -->
<style>
    @import url('https://fonts.googleapis.com/css?family=Yantramanav:100,300');

    /* ------------- */
    /* GLOBAL STYLES */
    /* ------------- */



    * {
        box-sizing: border-box;
    }

    body {
        background: #a81b27;
        color: #485e74;
        line-height: 1.6;
        font-family: 'Yantramanav', sans-serif;
        padding: 1em;
    }

    .teamv {
        margin-top: 260px;
    }

    @media only screen and (max-width: 780px) {
        .teamv {
            margin-top: 0px;
        }
    }

    .container {
        max-width: 1170px;
        margin-left: auto;
        margin-right: auto;
        padding: 1em;
    }

    ul {
        list-style: none;
        padding: 0;
    }

    .brand {
        text-align: center;
        font-weight: 300;
        text-transform: uppercase;
        letter-spacing: 0.1em;
    }

    .brand span {
        color: #ffffff;
    }

    .wrapper {
        box-shadow: 0 0 20px 0 rgba(57, 82, 163, 0.7);
    }

    .wrapper>* {
        padding: 1em;
    }

    /* ------------------- */
    /* COMPANY INFORMATION */
    /* ------------------- */

    .company-info {
        background: #C3C9DD;
        border-top-left-radius: 4px;
        border-top-right-radius: 4px;
    }

    .company-info h3,
    .company-info ul {
        text-align: center;
        margin: 0 0 1rem 0;
    }

    /* ------- */
    /* CONTACT */
    /* ------- */

    .contact {
        background: #dcdfea;
        border-bottom-left-radius: 4px;
        border-bottom-right-radius: 4px;
    }

    /* ---- */
    /* FORM */
    /* ---- */

    .contact form {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-gap: 20px;
    }

    .contact form label {
        display: block;
    }

    .contact form p {
        margin: 0;
    }

    .contact form .full {
        grid-column: 1 / 3;
    }

    .contact form button,
    .contact form input,
    .contact form textarea {
        width: 100%;
        padding: 1em;
        border: solid 1px #dc6262;
        border-radius: 4px;
    }

    .contact form textarea {
        resize: none;
    }

    .contact form button {
        background: #dc6262;
        border: 0;
        color: #e4e4e4;
        text-transform: uppercase;
        font-size: 14px;
        font-weight: bold;
    }

    .contact form button:hover,
    .contact form button:focus {
        background: #a33939;
        color: #ffffff;
        outline: 0;
        transition: background-color 2s ease-out;
    }

    /* ------------- */
    /* MEDIA QUERIES */
    /* ------------- */

    @media only screen and (min-width: 700px) {
        .wrapper {
            display: grid;
            grid-template-columns: 1fr 2fr;
        }

        .wrapper>* {
            padding: 2em;
        }

        .company-info {
            border-radius: 4px 0 0 4px;
        }

        .contact {
            border-radius: 0 4px 4px 0;
        }

        .company-info h3,
        .company-info ul,
        .brand {
            text-align: left;
        }
    }
</style>