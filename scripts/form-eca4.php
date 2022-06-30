<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'New inquiriy [Ahmedfyp]',
    'email_message' => 'You have a new form submission',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => 'ahmed.subhome@gmail.com',
    'to' => 'rafsanahmed02@gmail.com'
    ),
    'fields' => array(
    'name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'Name',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Name\' is required.'
    )
    ),
    'email' => array(
    'order' => 2,
    'type' => 'email',
    'label' => 'Email',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Email\' is required.'
    )
    ),
    'phone' => array(
    'order' => 3,
    'type' => 'tel',
    'label' => 'Phone',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Phone\' is required.'
    )
    ),
    'Employment status' => array(
    'order' => 4,
    'type' => 'string',
    'label' => 'Employment status',
    'required' => false,
    'errors' => array(
    'required' => 'Field \'Employment status\' is required.'
    )
    ),
    'address' => array(
    'order' => 5,
    'type' => 'string',
    'label' => 'Address',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Address\' is required.'
    )
    ),
    'select' => array(
    'order' => 6,
    'type' => 'string',
    'label' => 'select',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'select\' is required.'
    )
    ),
    'select-1' => array(
    'order' => 7,
    'type' => 'string',
    'label' => 'select-1',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'select-1\' is required.'
    )
    ),
    'Planning' => array(
    'order' => 8,
    'type' => 'string',
    'label' => 'Planning',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Planning\' is required.'
    )
    ),
    'Budget' => array(
    'order' => 9,
    'type' => 'string',
    'label' => 'Budget',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Budget\' is required.'
    )
    ),
    'preferred' => array(
    'order' => 10,
    'type' => 'string',
    'label' => 'preferred',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'preferred\' is required.'
    )
    ),
    'message' => array(
    'order' => 11,
    'type' => 'string',
    'label' => 'What are the facilities you would like to have on your property?',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'What are the facilities you would like to have on your property?\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>