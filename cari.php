<?php
echo "<main>
        <section class=\"well1 well1__ins1 center991 sect-404\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-5 col-sm-12 col-sx-12\">
                        <img src=\"images/404.jpg\" alt=\"\"/>
                    </div>
                    <div class=\"col-md-7 col-sm-12 col-sx-12\">
                        <h2 class=\"text-primary\">Search</h2>

                        <h3>Welcome! <br>
                            Stranger</h3>

                        <p>The item you are looking for might be in the web.</p>

                        <p>Please try using our search box below to look for information on the website.</p>

                        <form class=\"search-form left991\" action=\"search.php\" method=\"GET\" accept-charset=\"utf-8\">
                            <label class=\"search-form_label\">
                                <input class=\"search-form_input\" type=\"text\" name=\"s\" autocomplete=\"off\"/>
                                <span class=\"search-form_liveout\"></span>
                            </label>
                            <button class=\"search-form_submit btn btn-link\" type=\"submit\">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>";
?>