<?php
 
return [
    'auth' => [
        'fullname' => [
            'required' => 'Họ và tên không được bỏ trống.',
        ],
        'username' => [
            'required'  => 'Tài khoản không được bỏ trống.',
            'min'       => 'Tài khoản phải tối thiểu 8 kí tự.',
            'max'       => 'Tài khoản chỉ được phép tối đã 40 kí tự.',
            'unique'    => 'Tên tài khoản đã đuợc đăng ký.',
        ],
        'password' => [
            'min'       => 'Mật khẩu phải tối thiếu 8 kí tự.',
            'confirmed' => 'Xác nhận mật khẩu không khớp',
        ]
    ],
];
