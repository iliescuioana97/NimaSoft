<?php include 'top.php' ?>
<?php include 'header.php' ?>
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
                        <iframe src=https://www.google.com/maps/embed/v1/place?key=AIzaSyDSCJfionN42JT6usWwpHOMD6rhBEMgoXc&q=bursa+moldovei" style="border:0"></iframe>
                    </div>
                    
                    <div class="contact_details">
                        <p class="contact_text">We are loooking forward to meeting you! </br></br> If you need a technological solution to your problems, call us and let's set up and a meeting! We can talk about how useful software products would be for your company, how your issues can be approached, the duration of the implementation and the afferent costs. We can find together the best formula for your success!</p>
                        <p class="adrress">Str. Elena Doamna Nr.20-22, </br> Cladirea Bursa Moldovei, etaj 3,</br> loc. Iasi, jud. Iasi, Romania</p>
                        <p class="tel"><span>Telephone:</span>+40 773 397 283</p>
                        <p class="mail">Email: office@nimasoftware.ro</p>
                    </div>
                </div>
            </div>
            <div class="grid_6">
                <div class="left-strip"></div>
                <div class="left-block">
                    <h3>Contact Form</h3>
                    <form id="form">
                        <div class="success_wrapper">
                            <div class="success-message">Contact form submitted</div>
                        </div>
                        <label class="name">
                            <input type="text" placeholder="Name*:" data-constraints="@Required @JustLetters" />
                            <span class="empty-message"></span>
                            <span class="error-message"></span>
                        </label>                  
                        <label class="email">
                            <input type="text" placeholder="E-mail*:" data-constraints="@Required @Email" />
                            <span class="empty-message"></span>
                            <span class="error-message"></span>
                        </label>
                        <label class="phone">
                            <input type="text" placeholder="Phone:" data-constraints="@Required @JustNumbers"/>
                            <span class="empty-message"></span>
                            <span class="error-message"></span>
                        </label>
                        <label class="message">
                            <textarea placeholder="Message*:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
                            <span class="empty-message"></span>
                            <span class="error-message"></span>
                        </label>
                        <div class="clear"></div>
                        <div class="btns"> 
                            <a class="link1 float-shadow" href="#" data-type="submit">Send</a>
                            <a class="link1 float-shadow" href="#" data-type="reset">Clear</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>

