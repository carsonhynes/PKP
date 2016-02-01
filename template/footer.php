<?php

function loadFooter() {

echo '<div class="container-fluid footer-background text-white text-center">
        <div class="row">
            <div class="col-md-offset-2" style="margin-top:20px;">
                  <h2><b>CONTACT</b></h2>
            </div>
        </div>
        <div class="row spacer"></div>
        <div class="row">
            <div class="col-md-2 col-centered">
            <img class="circle-image" src="img/dugan_circle.png" alt="Dugan-Circle">
            <p class="below-circle"><b>Andrew Dugan</b><br>
                President<br>
                <a href="mailto:dugana94@gmail.com">dugana94@gmail.com</a><br>
                973-362-5414
            </p>
          </div>
            <div class="col-md-3 col-centered">
            <img class="circle-image" src="img/hynes_circle.png" alt="Hynes-Circle">
            <p class="below-circle"><b>Carson Hynes</b><br>
                Recruitment Chair - Vice-President<br>
                <a href="mailto:carsonhynes@gmail.com">carsonhynes@gmail.com</a><br>
                518-569-4867
            </p>
          </div>
            <div class="col-md-2 col-centered">
            <img class="circle-image" src="img/kirman_circle.png" alt="Kirman-Circle">
            <p class="below-circle"><b>David Kirman</b><br>
                Alumni Secretary<br>
                <a href="mailto:davidsk95@yahoo.com">davidsk95@yahoo.com</a><br>
                973-207-1325
            </p>
          </div>
        </div>
        <div class="row" style="margin-top:60px;">
            <div class="text-left">
            <br>
                <p class="signature"">Designed by <a href="http://carson.space">Carson Hynes</a></p>
            </div>
            <div class="paypal">
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="8J7FEQ3WAJ7LW">
                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>
            </div>
        </div>
    </div>';
}