<?php include 'top.php' ?>
<?php include 'header.php' ?>
<?php include 'mailhandler.php' ?>

<title>NimaSoftware - Contact</title>


<!--======= Content ================================-->

<!--========= Map & Contacts & Form =========-->

<div class="row-with-strip row_block row_block__indent-1 row__style contact">
    <div class="container">
        <div class="row">
            <div class="grid_6">
                <div class="left-strip"></div>
                <div class="left-block">
                    <h3>Contact Info</h3>

                    <div class="map">
                        <iframe src=https://www.google.com/maps/embed/v1/place?key=AIzaSyDSCJfionN42JT6usWwpHOMD6rhBEMgoXc&q=nima+software" style="border:0"></iframe>
                    </div>

                    <div class="contact_details">
                        <p class="contact_text">We are looking forward to meeting you! </br></br> If you need a technological solution to your problems, call us and let's set up and a meeting! We can talk about how useful software products would be for your company, how your issues can be approached, the duration of the implementation and the afferent costs. We can find together the best formula for your success!</p>
                        <p class="adrress">Str. Elena Doamna Nr.20-22, </br> Cladirea Bursa Moldovei, etaj 3,</br> loc. Iasi, jud. Iasi, Romania</p>
                        <p class="tel"><span>Telephone:</span>+40 773 397 283</p>
                        <p class="mail">Email: office@nimasoftware.com</p>
                    </div>
                </div>
            </div>
            <div class="grid_6">
                <div class="left-strip"></div>
                <div class="left-block">
                    <h3>Contact Form</h3>
                    <form id="form" method="post" action="mailhandler.php" style="margin-left:10px;">
                        <div class="row" style="margin-bottom:5px;">
                            <label class="name">
                                <input class="grid_3" name="name" type="text" placeholder="Name*:" data-constraints="@Required @JustLetters" />
                                <span class="empty-message"></span>
                                <span class="error-message"></span>
                            </label> 
                        </div>
                        <div class="row" style="margin-bottom:5px;">
                            <label class="email">
                                <input class="grid_3" name="email" type="text" placeholder="E-mail*:" data-constraints="@Required @Email" />
                                <span class="empty-message"></span>
                                <span class="error-message"></span>
                            </label>
                        </div>
                        <div class="row" style="margin-bottom:5px;">
                            <label class="phone">
                                <input class="grid_3" name="phone" type="text" placeholder="Phone:" data-constraints="@Required @JustNumbers"/>
                                <span class="empty-message"></span>
                                <span class="error-message"></span>
                            </label>
                        </div>
                        <div class="row row_block__indent-2">
                            <label class="message">
                                <textarea id="texta" name="message" placeholder="Message*:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
                                <span class="empty-message"></span>
                                <span class="error-message"></span>
                            </label>
                        </div>
                        <div class="btns row preffix_05"> 
                            <input type="submit" class="btn-primary" name="submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>

<style>
    input[type=text] {
        width: 60%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border-radius: 5%;
        border: 1px solid #e4e4e4;
    }
    placeholder{
        margin-left: 0px;
    }
    textarea {
        width: 60%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border-radius: 5%;
        border: 1px solid #e4e4e4;
    }

    .btn-primary{
        background: #0066A2;
        color: white;
        border-style: outset;
        border-color: #0066A2;
        border-radius: 5%;
        height: 30px;
        width: 100px;
        font: bold 15px;
    }
</style>

