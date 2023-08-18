<?php

return [

    /*
    |--------------------------------- ----------------------------------
    | Хатҳои забони тасдиқкунӣ
    |--------------------------------- ----------------------------------
    |
    | Сатрҳои зерини забонҳо дорои паёмҳои хатогии пешфарз мебошанд, ки аз ҷониби
    | синфи validator. Баъзе аз ин қоидаҳо версияҳои сершумор доранд
    | ҳамчун қоидаҳои андоза. Озод ҳис кунед, ки ҳар яке аз ин паёмҳоро дар ин ҷо тағир диҳед.
    |
     */

    'accepted' => 'Майдони :attribute бояд қабул карда шавад.',
    'accepted_if' => 'Майдони :attribute бояд қабул карда шавад, вақте ки :other :value аст.',
    'active_url' => 'Майдони :attribute бояд URL-и дуруст бошад.',
    'after' => 'Майдони :attribute бояд санаи баъд аз :date бошад.',
    'after_or_equal' => 'Майдони :attribute бояд санаи баъд аз :date ё баробар бошад.',
    'alpha' => 'Майдони :attribute бояд танҳо ҳарфҳоро дар бар гирад.',
    'alpha_dash' => 'Майдони :attribute бояд танҳо ҳарфҳо, рақамҳо, тире ва зерхатро дар бар гирад.',
    'alpha_num' => 'Майдони :attribute бояд танҳо ҳарфҳо ва рақамҳоро дар бар гирад.',
    'array' => 'Майдони :attribute бояд массив бошад.',
    'ascii' => 'Майдони :attribute бояд танҳо аломатҳо ва аломатҳои алифбои рақамии як байтӣ дошта бошад.',
    'before' => 'Майдони :attribute бояд санаи пеш аз :date бошад.',
    'before_or_equal' => 'Майдони :attribute бояд санаи пеш аз :date ё баробар бошад.',
    'байни' => [
        'array' => 'Майдони :attribute бояд байни :min ва :max адад дошта бошад.',
        'file' => 'Майдони :attribute бояд дар байни :min ва :max килобайт бошад.',
        'numeric' => 'Майдони :attribute бояд дар байни :min ва :max бошад.',
        'string' => 'Майдони :attribute бояд дар байни аломатҳои :min ва :max бошад.',
    ],
    'boolean' => 'Майдони :attribute бояд дуруст ё нодуруст бошад.',
    'can' => 'Майдони :attribute дорои арзиши беиҷозат аст.',
    'confirmed' => 'Тасдиқи майдони :attribute мувофиқат намекунад.',
    'current_password' => 'Парол нодуруст аст.',
    'date' => 'Майдони :attribute бояд санаи дуруст бошад.',
    'date_equals' => 'Майдони :attribute бояд санаи баробар ба :date бошад.',
    'date_format' => 'Майдони :attribute бояд ба формати :format мувофиқ бошад.',
    'decimal' => 'Майдони :attribute бояд дорои ададҳои даҳии :даҳӣ бошад.',
    'declined' => 'Майдони :attribute бояд рад карда шавад.',
    'declined_if' => 'Майдони :attribute бояд рад карда шавад, вақте ки :other :value аст.',
    'different' => 'Майдони :attribute ва :diger бояд гуногун бошанд.',
    'digits' => 'Майдони :attribute бояд :digits digits бошад.',
    'digits_between' => 'Майдони :attribute бояд дар байни рақамҳои :min ва :max бошад.',
    'dimensions' => 'Майдони :attribute андозаҳои тасвири нодуруст дорад.',
    'distinct' => 'Майдони :attribute арзиши такрорӣ дорад.',
    'doesnt_end_with' => 'Майдони :attribute набояд бо яке аз инҳо хотима ёбад: :value.',
    'doesnt_start_with' => 'Майдони :attribute набояд бо яке аз зерин оғоз шавад: :values.',
    'email' => 'Майдони :attribute бояд як суроғаи почтаи электронии дуруст бошад.',
    'ends_with' => 'Майдони :attribute бояд бо яке аз зерин хотима ёбад: :value.',
    'enum' => 'Атрибути интихобшудаи :атрибут беэътибор аст.',
    'exists' => 'Интихоби :аттрибутӣ беэътибор аст.',
    'file' => 'Майдони :attribute бояд файл бошад.',
    'filled' => 'Майдони :attribute бояд арзиш дошта бошад.',
    'gt' => [
        'array' => 'Майдони :attribute бояд аз :value адад зиёд бошад.',
        'file' => 'Майдони :attribute бояд аз :value килобайт зиёд бошад.',
        'numeric' => 'Майдони :attribute бояд аз :value бузургтар бошад.',
        'string' => 'Майдони :attribute бояд аз аломатҳои :value бузургтар бошад.',
    ],
    'gte' => [
        'array' => 'Майдони :attribute бояд ҷузъҳои :value ё бештар дошта бошад.',
        'file' => 'Майдони :attribute бояд аз :value килобайт зиёд ё баробар бошад.',
        'numeric' => 'Майдони :attribute бояд аз :value зиёд ё баробар бошад.',
        'string' => 'Майдони :attribute бояд бузургтар ё баробар аз аломатҳои :value бошад.',
    ],
    'image' => 'Майдони :attribute бояд тасвир бошад.',
    'in' => 'Интихоби :аттрибутӣ нодуруст аст.',
    'in_array' => 'Майдони :attribute бояд дар :other мавҷуд бошад.',
    'integer' => 'Майдони :attribute бояд адади бутун бошад.',
    'ip' => 'Майдони :attribute бояд суроғаи дурусти IP бошад.',
    'ipv4' => 'Майдони :attribute бояд суроғаи дурусти IPv4 бошад.',
    'ipv6' => 'Майдони :attribute бояд суроғаи дурусти IPv6 бошад.',
    'json' => 'Майдони :attribute бояд як сатри дурусти JSON бошад.',
    'lowercase' => 'Майдони :attribute бояд хурд бошад.',
    'lt' => [
        'array' => 'Майдони :attribute бояд камтар аз ҷузъҳои :value дошта бошад.',
        'file' => 'Майдони :attribute бояд аз :value килобайт камтар бошад.',
        'numeric' => 'Майдони :attribute бояд аз :value камтар бошад.',
        'string' => 'Майдони :attribute бояд камтар аз аломатҳои :value бошад.',
    ],
    'lte' => [
        'array' => 'Майдони :attribute набояд бештар аз :адатҳои арзиш дошта бошад.',
        'file' => 'Майдони :attribute бояд аз :value килобайт камтар ё баробар бошад.',
        'numeric' => 'Майдони :attribute бояд аз :value камтар ё баробар бошад.',
        'string' => 'Майдони :attribute бояд камтар ё баробар ба аломатҳои :value бошад.',
    ],
    'mac_address' => 'Майдони :attribute бояд суроғаи дурусти MAC бошад.',
    'макс' => [
        'array' => 'Майдони :attribute набояд бештар аз :max адад дошта бошад.',
        'file' => 'Майдони :attribute набояд аз :max килобайт зиёд бошад.',
        'numeric' => 'Майдони :attribute набояд аз :max зиёд бошад',
        'string' => 'Майдони :attribute набояд аз аломатҳои :max зиёд бошад.',
    ],
    'max_digits' => 'Майдони :attribute набояд бештар аз рақамҳои :max дошта бошад.',
    'mimes' => 'Майдони :attribute бояд файли навъи :values бошад.',
    'mimetypes' => 'Майдони :attribute бояд файли навъи :values бошад.',
    'дақ' => [
        'array' => 'Майдони :attribute бояд ҳадди аққал ҷузъҳои :min дошта бошад.',
        'file' => 'Майдони :attribute бояд ҳадди аққал :мин килобайт бошад.',
        'numeric' => 'Майдони :attribute бояд ҳадди аққал:мин бошад.',
        'string' => 'Майдони :attribute бояд ҳадди аққал аломатҳои :min бошад.',
    ],
    'min_digits' => 'Майдони :attribute бояд ҳадди аққал рақамҳои :min дошта бошад.',
    'missing' => 'Майдони :attribute бояд нест.',
    'missing_if' => 'Майдони :attribute ҳангоме ки :diger :value аст, бояд мавҷуд набошад.',
    'missing_unless' => 'Майдони :attribute бояд нест, агар :other :value набошад.',
    'missing_with' => 'Майдони :attribute бояд ҳангоми мавҷуд будани :values мавҷуд набошад.',
    'missing_with_all' => 'Майдони :attribute ҳангоме ки арзишҳо мавҷуд бошанд, бояд нест.',
    'multiple_of' => 'Майдони :attribute бояд чандкаратаи :value бошад.',
    'not_in' => 'Атрибути интихобшудаи :атрибут беэътибор аст.',
    'not_regex' => 'Формати майдони :attribute нодуруст аст.',
    'numeric' => 'Майдони :attribute бояд рақам бошад.',
    'парол' => [
        'letters' => 'Майдони :attribute бояд ҳадди аққал як ҳарф дошта бошад.',
        'mixed' => 'Майдони :attribute бояд ҳадди ақал як ҳарфи калон ва як ҳарфи хурд дошта бошад.',
        'numbers' => 'Майдони :attribute бояд ҳадди аққал як ададро дар бар гирад.',
        'symbols' => 'Майдони :attribute бояд ҳадди аққал як аломат дошта бошад.',
        'uncompromised' => 'Хусусияти додашудаи :дар ихроҷи маълумот пайдо шуд. Лутфан :атрибути дигарро интихоб кунед.',
    ],
    'present' => 'Майдони :attribute бояд мавҷуд бошад.',
    'prohibited' => 'Майдони :attribute манъ аст.',
    'prohibited_if' => 'Майдони :attribute вақте манъ аст, ки :diger :value бошад.',
    'prohibited_unless' => 'Майдони :attribute манъ аст, агар :diger дар :values набошад.',
    'prohibits' => 'Майдони :attribute мавҷуд будани :digerро манъ мекунад.',
    'regex' => 'Формати майдони :attribute нодуруст аст.',
    'required' => 'Майдони :attribute лозим аст.',
    'required_array_keys' => 'Майдони :attribute бояд сабтҳоро барои :values дошта бошад.',
    'required_if' => 'Майдони :attribute ҳангоме лозим аст, ки :diger :value бошад.',
    'required_if_accepted' => 'Майдони :attribute ҳангоме лозим аст, ки :other қабул карда шавад.',
    'required_unless' => 'Майдони :attribute лозим аст, агар :diger дар :values набошад.',
    'required_with' => 'Майдони :attribute ҳангоме лозим аст, ки :values мавҷуд бошад.',
    'required_with_all' => 'Майдони :attribute ҳангоме лозим аст, ки :арзишҳо мавҷуд бошанд.',
    'required_without' => 'Майдони :attribute ҳангоме лозим аст, ки :values мавҷуд набошад.',
    'required_without_all' => 'Майдони :attribute ҳангоме лозим аст, ки ҳеҷ яке аз :арзишҳо мавҷуд набошад.',
    'same' => 'Майдони :attribute бояд ба :diger мувофиқ бошад.',
    'андоза' => [
        'array' => 'Майдони :attribute бояд ҷузъҳои :size дошта бошад.',
        'file' => 'Майдони :attribute бояд :size kilobytes бошад.',
        'numeric' => 'Майдони :attribute бояд :size бошад.',
        'string' => 'Майдони :attribute бояд аломатҳои :size бошад.',
    ],
    'starts_with' => 'Майдони :attribute бояд бо яке аз зерин оғоз шавад: :values.',
    'string' => 'Майдони :attribute бояд сатр бошад.',
    'timezone' => 'Майдони :attribute бояд як минтақаи дурусти вақт бошад.',
    'unique' => ':аттрибутӣ аллакай гирифта шудааст.',
    'uploaded' => 'Дар :attribute боргузорӣ нашуд.',
    'uppercase' => 'Майдони :attribute бояд бо ҳарфи калон бошад.',
    'url' => 'Майдони :attribute бояд URL-и дуруст бошад.',
    'ulid' => 'Майдони :attribute бояд ULID дуруст бошад.',
    'uuid' => 'Майдони :attribute бояд як UUID дуруст бошад.',

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
            'rule-name' => 'паёми фармоишӣ',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
     */

    'attributes' => [],

];
