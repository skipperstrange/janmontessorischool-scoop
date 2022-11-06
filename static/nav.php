<?php

$navLinks = [
    'home'=>['href'=>  WEB_URL],
    
    'admission' =>[
       'children' => [ 
           'download_admission_forms' => ['href' => _link('admission-forms')],
      //      'FAQ' => ['href'=> '#']
            ],
         'href' => _link('admission'),
    ],
    /*'corporate' =>['href' => [ 
            
        ],
    ],,
    */
  
    'about_us' => [
        'href'=> _link('about-us'),
        //'children'=>[
            'our_story'=>[ 'href'=>_link('about-us',''), 'visible'=>false],
            //'board_of_directors'=>[ 'href'=>_link('board','')],
        // 'management'=>[ 'href'=>_link('management','')],
        // 'our_team'=>[ 'href'=>_link('team#board','')],
        //    ],
    ],
    'news' => ['href'=>_link('articles','')],        
    'contact_us' => ['href'=>_link('contact-us','')],        
];

$buttonLinks = [
    'make_an_appointment' =>[
        'href' => "", 'target'=>'_blank', 'button'=>true, 'label'=>'', 'target'=> '_blank'  
    ], 
];


$topLinks = [
    'about_us' => ['href'=>'about-us'],
    'contact_us' => ['href'=>'contact-us'],    
];


//Social media Links - top of navbar
$data['socialMediaLinks'] = [
    ['href'=>LINKEDIN, 'icon'=>'fab fa-linkedin', 'title'=>'linkedin'],
    ['href'=>FACEBOOK, 'icon'=>'fab fa-facebook', 'title'=>'facebook'],
    ['href'=>INSTAGRAM, 'icon'=>'fab fa-instagram', 'title'=>'instagram'],
    ['href'=>TWITTER, 'icon'=>'fab fa-twitter', 'title'=>'twitter'],
];
