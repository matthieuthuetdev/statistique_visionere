<div class="dates">
        <h2>Date</h2>
        <?php
        try {
         echo csvToHtml("Dates");
        } catch (\Throwable $th) {
            mail("mthuet@arfp.asso.fr","erreur","<h1>erreure</h1> <p>$th</p>");
        }
         ?>
    </div>