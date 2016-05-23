<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Client-side Language Lines
    |--------------------------------------------------------------------------
    |
    | These are messages made available to the client browser via JavaScript.
    | To compile this file run: php artisan october:util compile lang
    |
    */

    'markdowneditor' => [
        'formatting' => 'Formatage',
        'quote' => 'Citation',
        'code' => 'Code',
        'header1' => 'Entête 1',
        'header2' => 'Entête 2',
        'header3' => 'Entête 3',
        'header4' => 'Entête 4',
        'header5' => 'Entête 5',
        'header6' => 'Entête 6',
        'bold' => 'Gras',
        'italic' => 'Italique',
        'unorderedlist' => 'Liste non ordonnée',
        'orderedlist' => 'Liste ordonnée',
        'video' => 'Vidéo',
        'image' => 'Image',
        'link' => 'Lien',
        'horizontalrule' => 'Insérer la règle horizontalement',
        'fullscreen' => 'Plein écran',
        'preview' => 'Aperçu',
    ],

    'mediamanager' => [
        'insert_link' => "Insérer un lien vers un fichier de la médiathèque",
        'insert_image' => "Insérer une image de la médiathèque",
        'insert_video' => "Insérer une vidéo de la médiathèque",
        'insert_audio' => "Insérer un document audio de la médiathèque",
        'invalid_file_empty_insert' => "Veuillez sélectionner un fichier à lier.",
        'invalid_file_single_insert' => "Veuillez sélectionner un seul fichier.",
        'invalid_image_empty_insert' => "Veuillez sélectionner au moins une image à insérer.",
        'invalid_video_empty_insert' => "Veuillez sélectionner une vidéo à insérer.",
        'invalid_audio_empty_insert' => "Veuillez sélectionner un document audio à insérer.",
        'invalid_image_invalid_insert' => "Le fichier n’est pas une image.",
        'invalid_video_invalid_insert' => "Le fichier n’est pas une vidéo.",
        'invalid_audio_invalid_insert' => "Le fichier n’est pas un document audio.",
    ],

    'alert' => [
        'confirm_button_text' => 'OK',
        'cancel_button_text' => 'Annuler',
    ],

    'datepicker' => [
        'previousMonth' => 'Mois précédent',
        'nextMonth'     => 'Mois suivant',
        'months'        => ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
        'weekdays'      => ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
        'weekdaysShort' => ['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam'],
    ],

    'filter' => [
        'group' => [
            'all' => 'tous'
        ],
        'dates' => [
            'all' => 'toute la période',
            'filter_button_text' => 'Filtrer',
            'reset_button_text'  => 'Effacer',
            'date_placeholder' =>   'Date',
            'after_placeholder' => 'Après le',
            'before_placeholder' => 'Avant le',
        ],
    ],

    'eventlog' => [
        'editor' => [
            'title' => 'Sélectionnez l’éditeur de code source à utiliser',
            'description' => 'L’environnement de votre système d’exploitation doit être configuré pour ouvrir l’un des schémas d’URL ci-dessous.',
            'openWith' => 'Ouvrir avec',
            'rememberChoice' => 'Se souvenir de la sélection pour la durée de la session dans ce navigateur',
            'open' => 'Ouvrir',
            'cancel' => 'Annuler',
        ],
    ]
];



