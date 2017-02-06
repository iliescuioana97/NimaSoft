<?php include 'top.php' ?>
<?php include 'header.php' ?>


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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d24214.807650104907!2d-73.94846048422478!3d40.65521573400813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1395650655094" style="border:0"></iframe>
                    </div>
                    <div class="contact_details">
                        <p class="contact_text">Eleo dapibus nibh, vitae tempus tellus leo at turpis.Class aptent taciti sociosqu ad litora bia nostra, per inceptos himenaeos. Cras semper aliquet cursusulla vitae</p>
                        <p class="adrress">9870 St Vincent Place,<br>Glasgow, DC 45 Fr 45.</p>
                        <p class="tel"><span>Freephone:</span>+1 800 559 6580</p>
                        <p class="tel"><span>Telephone:</span>+1 800 603 6035</p>
                        <p class="tel"><span>FAX:</span>+1 800 889 9898</p>
                        <p class="mail">Email: <a href="mailto:mail@demolink.org">mail@demolink.org</a></p>
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
                            <span class="empty-message">*This field is required.</span>
                            <span class="error-message">*This is not a valid name.</span>
                        </label>                  
                        <label class="email">
                            <input type="text" placeholder="E-mail*:" data-constraints="@Required @Email" />
                            <span class="empty-message">*This field is required.</span>
                            <span class="error-message">*This is not a valid email.</span>
                        </label>
                        <label class="phone">
                            <input type="text" placeholder="Phone:" data-constraints="@Required @JustNumbers"/>
                            <span class="empty-message">*This field is required.</span>
                            <span class="error-message">*This is not a valid number.</span>
                        </label>
                        <label class="message">
                            <textarea placeholder="Message*:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
                            <span class="empty-message">*This field is required.</span>
                            <span class="error-message">*The message is too short.</span>
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

