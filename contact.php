<?php
echo"
<main>

		<section class=\"well1\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-4 col-sm-4 col-xs-12\">
                        <h3 class=\"text-center\">
                            address
                        </h3>

                        <p>Cyberhax Club, </br>
                        Block 1, Computer and Information Sciences Department, 
                        Universiti Teknologi PETRONAS (UTP),
                        </p>

                        <div class=\"contact-info\">
                            <address class=\"h5\">
                                32610, Bandar Seri Iskandar, 
                                Tronoh, Perak, Malaysia.

                            </address>
                            <dl>
                                <dt>Secretary I:</dt>
                                <dd>
                                    <a href=\"callto:+60 12-327 2356\"> +60 12-327 2356</a>
                                </dd>
                                <dt>Secretary II:</dt>
                                <dd>
                                    <a href=\"callto:+60 17-370 5184\"> +60 17-370 5184</a>
                                </dd>

                                <dt>E-mail:</dt>
                                <dd class=\"text-primary mail\">
                                    <a href=\"mailto:cyberhaxutp@gmail.com\">cyberhaxutp@gmail.com</a>
                                </dd>

                            </dl>
                        </div><br/><br/><br/>

                        <a href=\"#\" class=\"btn btn-default\">Download Business Card</a>
                    </div>

                    <div class=\"col-md-8 col-sm-8  col-xs-12\">
                        <h3 class=\"text-center\">
                            Contact form
                        </h3>

                        <form class='mailform' method=\"post\" action=\"bat/rd-mailform.php\" data-type=\"contact\">
                            <div class=\"form-group\" data-add-placeholder>
                                <label for=\"mailform-input-name\">Your Name*</label>
                                <input id=\"mailform-input-name\"
                                       type=\"text\"
                                       name=\"name\"
                                       data-constraints=\"@LettersOnly @NotEmpty\"/>
                            </div>

                            <div class=\"form-group\" data-add-placeholder>
                                <label for=\"mailform-input-email\">Your Email*</label>
                                <input id=\"mailform-input-email\"
                                       type=\"text\"
                                       name=\"email\"
                                       data-constraints=\"@Email @NotEmpty\"/>
                            </div>

                            <div class=\"form-group\" data-add-placeholder>
                                <label for=\"mailform-input-phone\">Your Phone Number</label>
                                <input id=\"mailform-input-phone\"
                                       type=\"text\"
                                       name=\"phone\"
                                       data-constraints=\"@Phone\"/>
                            </div>

                            <div class=\"form-group textarea\" data-add-placeholder>
                                <label for=\"mailform-input-textarea\">Your Message*</label>
                                <textarea id=\"mailform-input-textarea\"
                                          name=\"message\"
                                          data-constraints=\"@NotEmpty\"></textarea>
                            </div>

                            <div class=\"form-group\">
                                <button class=\"btn btn-link\" type=\"submit\">Submit comment</button>
                                <p>required fields*</p>
                            </div>
                        </form>  
                    </div>
                </div>
            </div>
        </section>
</main>";

?>