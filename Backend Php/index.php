<?php
    //Author: Halldór Hólm K. Lyngmo

    //Get the class template
    require_once('templateClass.php');

    //Create a new object
    $template = new Template('template.html');

    //Assign values to the template
    $template->assignValues('headline', 'Welcome');
    $template->assignValues('bodytext', 'and enjoy');

    //Show the content of the template
    $template->showTpl();