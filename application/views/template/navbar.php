<!-- Navbar (sit on top) -->
<div class="w3-top">
    <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
        <div class="w3-right w3-hide-small">
            <a href="<?php
                        foreach ($link_home as $lh) {
                            echo $lh;
                        }
                        ?>" class="w3-bar-item w3-button">Home</a>
            <a href="<?php
                        foreach ($link_artikel as $la) {
                            echo $la;
                        }
                        ?>" class="w3-bar-item w3-button">Article</a>
            <a href="<?php
                        foreach ($link_contact as $lc) {
                            echo $lc;
                        }
                        ?>" class="w3-bar-item w3-button">Contact</a>
        </div>
    </div>
</div>