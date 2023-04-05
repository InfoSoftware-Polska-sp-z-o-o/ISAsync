<?php
if($ADMIN->fulltree){
    $settings->add(new admin_setting_configtext('block_myrtille/url', "Domena wirtualnego laboratorium", "Wprowadź adres domeny, na której uruchomione jest wirtualne laboratorium", 'https://wspia.eu', PARAM_TEXT));

}