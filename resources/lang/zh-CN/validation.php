<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':attribute必须是yes、on、1或true',
    'active_url'           => ':attribute必须是一个有效URL',
    'after'                => ':attribute必须是:date之后的一个数值',
    'alpha'                => ':attribute必须是字母',
    'alpha_dash'           => ':attribute可以包含字母和数字，以及破折号和下划线',
    'alpha_num'            => ':attribute必须是字母或数字',
    'array'                => ':attribute必须是PHP数组',
    'before'               => ':attribute必须是:date之前的一个数值',
    'between'              => [
        'numeric' => ':attribute必须在:min和:max之间',
        'file'    => ':attribute必须在:minKB 和:maxKB之间',
        'string'  => ':attribute必须在:min字:max字之间',
        'array'   => ':attribute必须在:min个元素:max个元素之间',
    ],
    'boolean'              => ':attribute必须可以被转化为boolean',
    'confirmed'            => ':attribute必须有一个匹配字段',
    'date'                 => ':attribute必须是一个有效日期',
    'date_format'          => ':attribute必须匹配:format',
    'different'            => ':attribute必须是一个和:other不同的值',
    'digits'               => ':attribute必须是数字且长度为:digits的值',
    'digits_between'       => ':attribute数值长度必须介于:min和:max之间',
    'email'                => ':attribute必须是格式化的电子邮件地址',
    'exists'               => ':attribute必须存在于:attribute数据表',
    'filled'               => ':attribute是必须的',
    'image'                => ':attribute必须是图片（jpeg、png、bmp、gif或者svg）',
    'in'                   => ':attribute值必须在:attribute列表中',
    'integer'              => ':attribute必须是整型',
    'ip'                   => ':attribute必须是IP地址',
    'json'                 => ':attribute必须是JSON字符串',
    'max'                  => [
        'numeric' => ':attribute必须大于等于:max',
        'file'    => ':attribute必须大于等于:maxKB',
        'string'  => ':attribute必须大于等于:max字',
        'array'   => ':attribute必须大于等于:max个元素',
    ],
    'mimes'                => 'attributemust文件的MIMIE类型必须是:values列出的扩展类型中的一个',
    'min'                  => [
        'numeric' => ':attribute必须小于等于:min',
        'file'    => ':attribute必须小于等于:minKB',
        'string'  => ':attribute必须小于等于:min字',
        'array'   => ':attribute必须小于等于:min个元素',
    ],
    'not_in'               => ':attribute值不在:attribute列表中',
    'numeric'              => ':attribute必须是数值',
    'regex'                => ':attribute必须匹配给定正则表达式',
    'required'             => ':attribute是必须的',
    'required_if'          => ':attribute在:other等于:values时是必须的',
    'required_with'        => ':attribute在:values中任一值存在时是必须的',
    'required_with_all'    => ':attribute在:values中所有值存在时是必须的',
    'required_without'     => ':attribute在:values中任一值不存在时是必须的',
    'required_without_all' => ':attribute在:values中所有值不存在时是必须的',
    'same'                 => ':attribute和:other必须匹配',
    'size'                 => [
        'numeric' => ':attribute必须有:size',
        'file'    => ':attribute必须有:sizeKB',
        'string'  => ':attribute必须有:size字',
        'array'   => ':attribute必须有:size个元素',
    ],
    'string'               => ':attribute必须是字符串',
    'timezone'             => ':attribute必须是有效时区标识',
    'unique'               => ':attribute必须是唯一的',
    'url'                  => ':attribute格式无效',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
