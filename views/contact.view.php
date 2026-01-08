<?php require "partials/head.php"; ?>
<?php require "partials/banner.php"; ?>
<?php require "partials/nav.php"; ?>

<br>

<main>

<style>

    .contact {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: repeat(2, 1fr);
        grid-column-gap: 20px;
        grid-row-gap: 20px;
        width: 90%;
        margin:  auto;
        color: white;
    }

    .email {
        grid-area: 1 / 1 / 2 / 2;
        border: 2px solid #874363;
        border-radius: 20px;
        background-color: #56324B;
        padding: 10px;
    }
    .faq {
        grid-area: 2 / 1 / 3 / 2;
        border: 2px solid #874363;
        border-radius: 20px;
        background-color: #56324B;
        padding: 10px;
    }

    .contactform{

        grid-area: 1 / 2 / 3 / 3;
        border: 2px solid #874363;
        border-radius: 20px;
        background-color: #56324B;
        padding: 10px;
        font-size: .9em;
        box-shadow: 0 15px 25px rgba(0,0,0,.6);
    }


    hr{
        width: 90%;
        border: 1px solid #874363;
        margin: auto;
    }

    label{
        display: block;
        margin: auto;
        padding: 1vh;
        line-height: 2px;
    }

    input[type="text"],input[type="email"], input[type="number"] {
        display: block;
        margin: 2% auto;
        width: 85%;
        height: 4vh;
        max-height: 30px;
        border-radius: 5px;
        border: solid 2px #874363;
        background-color: #56324B;
    }
    input[type="submit"]{
        display:block;
        margin: 4% auto;
        width: 30%;
        height: 4vh;
        background-color: #874363;
        color: whitesmoke;
        border-radius: 10px;
        cursor: pointer;
    }

    textarea{
        display: block;
        margin: 2% auto 0;
        width: 85%;
        height: 22vh;
        max-height: 165px;
        border-radius: 5px;
        border: solid 2px #874363;
        background-color: #56324B;
        font-family: sans-serif;
    }

    input:hover {
        transform: scale(1.05);

    }


    input::placeholder {
        opacity: 0.5;
        color: lightgray;
        font-size: 1em;
    }
    textarea::placeholder {
        opacity: 0.5;
        color: lightgray;
        font-size: 1em;
    }

    textarea:hover {
        transform: scale(1.05);
    }

    h2 {
        text-align: center;
    }







</style>


    <div class="flex flex-col">

        <h1>Get In Touch</h1><br>
        <p style="color: white; font-size: 2vh; text-align: center">Whether you have a question about our history, want to contribute a story,<br>or just want to say hello, we're here to help.</p><br><br>

    </div>
    <div style="font-size: 2em; color: white; text-align: center">
        <!--   --><?php
            /*    if (session('success'))
                  echo "<div class='alert alert-success'>";
                   echo     session('success');

                        echo "<br><br>        </div>";


                */?>
    </div>


    <div class="contact">
        <div class="email"> <h2 style="text-align: left">Contact Information</h2>
            <img src="../images/mail.svg" style="max-width: 75px; float: left; margin: 10px"><p style="padding: 20px; font-weight:bold">Email Us<br><span style="color: #706f6c">contact@RememberTheXIth.org</span></p></div>
        <div class="faq">  <h2 style="text-align: left">FAQ</h2>
            <h5>How Can We Help?</h5>
            <p>We are looking for help in lots of ways, from fundraising to helping organise events. Please get in touch if you would like to help</p></div>
        <div class="contactform">
            <h2 style="text-align: left">Send A Message</h2>
            <hr><br>


            <!--This form needs attention-->
            <form action="./contact.submit" method="POST">

                <label for="name" class="form-label">Name</label>
                <input type="text" placeholder="Your name" name="name" id="name"
                       class="form-control">
                <!--  @error('name')-->
                <div class="text-danger"><?/* echo $message;*/?></div>
                <!--    @enderror
-->
                <label for="email" class="form-label">Email</label>
                <input type="email" placeholder="You@email.com" name="email" id="email"
                       class="form-control" >
                <!--  @error('email')-->
                <!-- <div class="text-danger">{{$message}}</div>
                 @enderror
-->
                <label for="subject" class="form-label">Subject</label>
                <input type="text" name="subject" id="subject"
                       class="form-control" placeholder="How can we help you?" >
                <!--  @error('subject')
                  <div class="text-danger">{{$message}}</div>
                  @enderror-->


                <label for="message" class="form-label">Message</label>
                <textarea  name="message" id="message" placeholder="Write your message here..."
                           class="text-danger"></textarea>
                <!--  @error('message')
                  <div class="text-danger">{{$message}}</div>
                  @enderror-->


                <input type="submit">

            </form>


        </div>
    </div>
    <br>












</main>


<br><br><br><br>


<?php require "partials/footer.php"; ?>
