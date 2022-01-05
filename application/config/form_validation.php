
<?php

$config = array(
    'signup' => array(
        array(
            'field' => 'username',
            'label' => 'Username',
            'rules' => 'required|min_length[5]|trim'
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'required|min_length[8]',
            'errors' => array(
                'required' => 'You must provide a %s.',
            ),
        ),
        array(
            'field' => 'passconf',
            'label' => 'Password Confirmation',
            'rules' => 'required|matches[password]'
        ),
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|valid_email'
        ),
    ),
    'detail' => array(
        array(
            'field' => 'fname',
            'label' => 'First Name',
            'rules' => 'required'
        ),
        array(
            'field' => 'address',
            'label' => 'Address',
            'rules' => 'required'
        ),
        array(
            'field' => 'postcode',
            'label' => 'Post Code',
            'rules' => 'required'
        ),
        array(
            'field' => 'pnumber',
            'label' => 'Phone Number',
            'rules' => 'required'
        ),
        array(
            'field' => 'gender',
            'label' => 'Gender',
            'rules' => 'required'
        )
    ),
    'login' => array(
        array(
            'field' => 'username',
            'label' => 'Username',
            'rules' => 'required'
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'required'
        )
    )
);
?>