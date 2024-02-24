<section id="description" class="description-section">

    <?php
    $contactFields = get_field('contact');
    $contactTitle = $contactFields['title'];
    $contactAdresse01 = $contactFields['adresse_01'];
    $contactAdresse02 = $contactFields['adresse_02'];
    $contactAdresse03 = $contactFields['adresse_03'];
    $contactEmail = $contactFields['email'];
    $contactSub = $contactFields['subtitle'];
    $contactTodayTime = $contactFields['today_time'];
    $contactAvailable = $contactFields['available_hour'];

    ?>
    <div class="description-contact">
        <h2 class="title-h2"><?php echo $contactTitle ?></h2>
        <div class="description-contact-top">
            <div class="description-contact-informations">
                <ul>
                    <li>
                        <?php echo $contactAdresse01 ?>
                    </li>
                    <li>
                        <?php echo $contactAdresse02 ?>
                    </li>
                    <li>
                        <?php echo $contactAdresse03 ?>
                    </li>
                    <li>
                        <a href="mailto:<?php echo $contactEmail ?>"> <?php echo $contactEmail ?></a>

                    </li>
                </ul>
            </div>
            <div class="description-contact-times">
                <h3 class="title-h3 description-contact-title">
                    <?php echo $contactSub ?>
                </h3>
                <p class="description-contact-times-principal">
                    Aujourd'hui: <span><?php echo $contactTodayTime ?></span>
                    <span class="arrow_time" id="arrowTimes"></span>
                </p>
                <div class="description-contact-times-all">
                    <?php echo $contactAvailable ?>
                </div>
            </div>
        </div>
        <div class="description-contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2651.3751654647467!2d-69.40709382363835!3d48.353314271268175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4c959c8824ee7c0b%3A0x239a81eade34988b!2s319%20QC-138%2C%20Les%20Escoumins%2C%20QC%20G0T%201K0!5e0!3m2!1sfr!2sca!4v1707697882510!5m2!1sfr!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
    </div>
    <div class="description-menu">
        <h2 class="title-h2">Menus</h2>
        <div class="description-menu-section">
            <div class="description-menu-button">
                <div class="description-menu-button-top">
                    <p>Menu Nourriture</p>
                    <img src="http://kiboikoi.local/wp-content/uploads/2024/02/nourriture.png" alt="">
                </div>
                <span></span>

            </div>
            <div class="description-menu-button">
                <div class="description-menu-button-top">
                    <p>Menu bière</p>
                    <img src="http://kiboikoi.local/wp-content/uploads/2024/02/beer.png" alt="">
                </div>
                <span></span>

            </div>
            <div class="description-menu-button">
                <div class="description-menu-button-top">
                    <p>Menu thés et tissanes</p>
                    <img src="http://kiboikoi.local/wp-content/uploads/2024/02/tea-1.png" alt="">
                </div>
                <span></span>

            </div>
        </div>
    </div>

</section>