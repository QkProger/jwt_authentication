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

    'accepted'             => ' :attribute қабылдануы керек.',
    'active_url'           => ' :attribute жарамды URL мекенжайы емес.',
    'after'                => ' :attribute мәні :date күнінен кейінгі күн болуы керек.',
    'after_or_equal'       => ' :attribute мәні :date күнінен кейінгі күн немесе тең болуы керек.',
    'alpha'                => ' :attribute тек әріптерден тұруы керек.',
    'alpha_dash'           => ' :attribute тек әріптерден, сандардан және сызықшалардан тұруы керек.',
    'alpha_num'            => ' :attribute тек әріптерден және сандардан тұруы керек.',
    'array'                => ' :attribute жиым болуы керек.',
    'before'               => ' :attribute мәні :date күнінен дейінгі күн болуы керек.',
    'before_or_equal'      => ' :attribute мәні :date күнінен дейінгі күн немесе тең болуы керек.',
    'between'              => [
        'numeric' => ' :attribute мәні :min және :max аралығында болуы керек.',
        'file'    => ' :attribute көлемі :min және :max килобайт аралығында болуы керек.',
        'string'  => ' :attribute тармағы :min және :max аралығындағы таңбалардан тұруы керек.',
        'array'   => ' :attribute жиымы :min және :max аралығындағы элементтерден тұруы керек.',
    ],
    'boolean'              => ' :attribute жолы шын немесе жалған мән болуы керек.',
    'confirmed'            => ' :attribute растауы сәйкес емес.',
    'date'                 => ' :attribute жарамды күн емес.',
    'date_equals'          => ' :attribute мәні :date күнімен тең болуы керек.',
    'date_format'          => ' :attribute пішімі :format пішіміне сай емес.',
    'different'            => ' :attribute және :other әр түрлі болуы керек.',
    'digits'               => ' :attribute мәні :digits сан болуы керек.',
    'digits_between'       => ' :attribute мәні :min және :max аралығындағы сан болуы керек.',
    'dimensions'           => ' :attribute сурет өлшемі жарамсыз.',
    'distinct'             => ' :attribute жолында қосарланған мән бар.',
    'email'                => ' :attribute жарамды электрондық пошта мекенжайы болуы керек.',
    'ends_with'            => 'The :attribute must end with one of the following: :values',
    'exists'               => ' таңдалған :attribute жарамсыз.',
    'file'                 => ' :attribute файл болуы тиіс.',
    'filled'               => ' :attribute жолы толтырылуы керек.',
    'gt'                   => [
        'numeric' => ' :attribute мәні :value үлкен болуы керек.',
        'file'    => ' :attribute файл өлшемі :value килобайттан үлкен болуы керек.',
        'string'  => ' :attribute мәні :value таңбалардан үлкен болуы керек.',
        'array'   => ' :attribute мәні :value элементтерден үлкен болуы керек.',
    ],
    'gte'                  => [
        'numeric' => ' :attribute мәні :value үлкен немесе тең болуы керек.',
        'file'    => ' :attribute файл өлшемі :value килобайттан үлкен немесе тең болуы керек.',
        'string'  => ' :attribute мәні :value таңбалардан үлкен немесе тең болуы керек.',
        'array'   => ' :attribute мәні :value элементтерден үлкен немесе тең болуы керек.',
    ],
    'image'                => ' :attribute кескін болуы керек.',
    'in'                   => ' таңдалған :attribute жарамсыз.',
    'in_array'             => ' :attribute жолы :other ішінде жоқ.',
    'integer'              => ' :attribute бүтін сан болуы керек.',
    'ip'                   => ' :attribute жарамды IP мекенжайы болуы керек.',
    'ipv4'                 => ' :attribute жарамды IPv4 мекенжайы болуы керек.',
    'ipv6'                 => ' :attribute жарамды IPv6 мекенжайы болуы керек.',
    'json'                 => ' :attribute жарамды JSON тармағы болуы керек.',
    'lt'                   => [
        'numeric' => ' :attribute мәні :value кіші болуы керек.',
        'file'    => ' :attribute файл өлшемі :value килобайттан кіші болуы керек.',
        'string'  => ' :attribute мәні :value таңбалардан кіші болуы керек.',
        'array'   => ' :attribute мәні :value элементтерден кіші болуы керек.',
    ],
    'lte'                  => [
        'numeric' => ' :attribute мәні :value кіші немесе тең болуы керек.',
        'file'    => ' :attribute файл өлшемі :value килобайттан кіші неменсе тең болуы керек.',
        'string'  => ' :attribute мәні :value таңбалардан кіші немесе тең болуы керек.',
        'array'   => ' :attribute мәні :value элементтерден кіші немесе тең болуы керек.',
    ],
    'max'                  => [
        'numeric' => ' :attribute мәні :max мәнінен көп болмауы керек.',
        'file'    => ' :attribute мәні :max килобайттан көп болмауы керек.',
        'string'  => ' :attribute тармағы :max таңбадан ұзын болмауы керек.',
        'array'   => ' :attribute жиымының құрамы :max элементтен аспауы керек.',
    ],
    'mimes'                => ' :attribute мынадай файл түрі болуы керек: :values.',
    'mimetypes'            => ' :attribute мынадай файл түрі болуы керек: :values.',
    'min'                  => [
        'numeric' => ' :attribute кемінде :min болуы керек.',
        'file'    => ' :attribute көлемі кемінде :min килобайт болуы керек.',
        'string'  => ' :attribute кемінде :min таңбадан тұруы керек.',
        'array'   => ' :attribute кемінде :min элементтен тұруы керек.',
    ],
    'not_in'               => ' таңдалған :attribute жарамсыз.',
    'not_regex'            => ' таңдалған :attribute форматы жарамсыз.',
    'numeric'              => ' :attribute сан болуы керек.',
    'present'              => ' :attribute болуы керек.',
    'regex'                => ' :attribute пішімі жарамсыз.',
    'required'             => ' :attribute жолы толтырылуы керек.',
    'required_if'          => ' :attribute жолы :other мәні :value болған кезде толтырылуы керек.',
    'required_unless'      => ' :attribute жолы :other мәні :values ішінде болмағанда толтырылуы керек.',
    'required_with'        => ' :attribute жолы :values болғанда толтырылуы керек.',
    'required_with_all'    => ' :attribute жолы :values болғанда толтырылуы керек.',
    'required_without'     => ' :attribute жолы :values болмағанда толтырылуы керек.',
    'required_without_all' => ' :attribute жолы ешбір :values болмағанда толтырылуы керек.',
    'same'                 => ' :attribute және :other сәйкес емес.',
    'size'                 => [
        'numeric' => ' :attribute көлемі :size болуы керек.',
        'file'    => ' :attribute көлемі :size килобайт болуы керек.',
        'string'  => ' :attribute тармағы :size таңбадан тұруы керек.',
        'array'   => ' :attribute жиымы :size элементтен тұруы керек.',
    ],
    'starts_with'          => ' :attribute келесі мәндердің біреуінен басталуы керек: :values',
    'string'               => ' :attribute тармақ болуы керек.',
    'timezone'             => ' :attribute жарамды аймақ болуы керек.',
    'unique'               => ' :attribute бұрын тіркелген.',
    'uploaded'             => ' :attribute жүктелуі сәтсіз аяқталды.',
    'url'                  => ' :attribute пішімі жарамсыз.',
    'uuid'                 => ' :attribute мәні жарамды UUID болуы керек.',

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
            'rule-name' => 'басқа хабар',
        ],
        'role_id' => [
            'required' => ' :attribute тандалу керек.'
        ],
        'class_ids' => [
            'required' => ' :attribute тандалу керек.'
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

    'attributes' => [
        'test_name'               => 'Сынақ атауы',
        'test_description'        => 'Сынақ сипаттамасы',
        'test_locale'             => 'Тілі',
        'image'                   => 'Кескін',
        'result_text_under_image' => 'Кескін астындағы нәтиже мәтіні',
        'short_text'              => 'Қысқа мәтін',
        'rating'                  => 'Рейтинг',
        'role_id'                 => 'Рөл',

        'name' => 'Атауы',
        'name.en' => 'Ағылшын тіліндегі атауы',
        'name.ru' => 'Орыс тіліндегі атауы',
        'name.kk' => 'Қазақ тіліндегі атауы',

        'icon' => 'Иконка',
        'new_icon' => 'Иконка',

        'info' => 'Ақпарат',
        'info.en' => 'Ағылшын тіліндегі ақпарат',
        'info.ru' => 'Орыс тіліндегі ақпарат',
        'info.kk' => 'Қазақ тіліндегі ақпарат',

        'contact_person' => 'Байланысушы тұлға',
        'phone_1' => 'Телефон нөмірлері',
        'phone_2' => 'Телефон нөмірлері',
        'logo' => 'Логотип',

        'description' => 'Сипаттама',
        'description.en' => 'Ағылшын тіліндегі сипаттама',
        'description.ru' => 'Орыс тіліндегі сипаттама',
        'description.kk' => 'Қазақ тіліндегі сипаттама',

        'legend' => 'Аңыз',
        'legend.en' => 'Ағылшын тіліндегі аңыз',
        'legend.ru' => 'Орыс тіліндегі аңыз',
        'legend.kk' => 'Қазақ тіліндегі аңыз',

        'address' => 'Мекен жай',
        'address.en' => 'Ағылшын тіліндегі мекен жай',
        'address.ru' => 'Орыс тіліндегі мекен жай',
        'address.kk' => 'Қазақ тіліндегі мекен жай',

        'walk_distance' => 'Жаяу қашықтық',
        'car_distance' => 'Машинадағы қашықтық',

        'city' => 'Қала',
        'city.en' => 'Ағылшын тіліндегі қала',
        'city.ru' => 'Орыс тіліндегі қала',
        'city.kk' => 'Қазақ тіліндегі қала',
        'class_ids' => 'Сынып',

        'program' => 'Бағдарлама',
        'program.en' => 'Ағылшын тіліндегі бағдарлама',
        'program.ru' => 'Орыс тіліндегі бағдарлама',
        'program.kk' => 'Қазақ тіліндегі бағдарлама',

        'warning' => 'Ескерту',
        'warning.en' => 'Ағылшын тіліндегі ескерту',
        'warning.ru' => 'Орыс тіліндегі ескерту',
        'warning.kk' => 'Қазақ тіліндегі ескерту',

        'question' => 'Сұрақ',
        'question.en' => 'Ағылшын тіліндегі сұрақ',
        'question.ru' => 'Орыс тіліндегі сұрақ',
        'question.kk' => 'Қазақ тіліндегі сұрақ',

        'answer' => 'Жауап',
        'answer.en' => 'Ағылшын тіліндегі жауап',
        'answer.ru' => 'Орыс тіліндегі жауап',
        'answer.kk' => 'Қазақ тіліндегі жауап',

        'text' => 'Мәтін',
        'text.en' => 'Ағылшын тіліндегі мәтін',
        'text.ru' => 'Орыс тіліндегі мәтін',
        'text.kk' => 'Қазақ тіліндегі мәтін',
        'gathering_place' => 'Жиналатын орын',
        'gathering_place.en' => 'Ағылшын тіліндегі жиналатын орын',
        'gathering_place.ru' => 'Орыс тіліндегі жиналатын орын',
        'gathering_place.kk' => 'Қазақ тіліндегі жиналатын орын',

        'participants' => 'Қатысушы',
        'participants.*.full_name' => 'Қатсушы аты',
        'participants.*.phone' => 'Қатысушы телефоны',

        'order_number' => 'Код',
        'user_name' => 'Аты',
        'location_id' => 'Локация',
        'main_image' => 'Басты фото',
        'price' => 'Баға',
        'old_price' => 'Ескі баға',
        'is_discount' => 'Жеңілдік',
        'gathering_place_link' => 'Жиналатын орын (2ГИС ссылка)',
        'departure_date' => 'Шығу күні',
        'arrival_date' => 'Келу күні',
        'category_id' => 'Категория',
        'address_link' => '2ГИС ссылка',
        'is_active' => 'Белсенді',
        'notification_type_id' => 'Хабарландыру түрі',
        'status' => 'Статус',
        'card_number' => 'Карта нөмірі',
        'full_name' => 'Аты-жөні',
        'comment' => 'Пікір',
        'iin' => 'ИИН',
        'receipt' => 'Чек',

        'token' => 'Токен',
        'username' => 'Никнейм',
        'about_me' => 'Өзім туралы',
        'email' => 'E-Mail адрес',
        'first_name' => 'Аты',
        'last_name' => 'Фамилия',
        'password' => 'Құпия сөз',
        'password_confirmation' => 'Құпия сөзді растау',
        'new_password_confirmation' => 'Жаңа құпия сөзді растау',
        'preparation_ids' => 'Тақырыпша',
        'country' => 'Ел',
        'phone' => 'Телефон',
        'mobile' => 'Моб. номер',
        'age' => 'Жасы',
        'sex' => 'Жыныс',
        'subject_id' => 'Пән',
        'answers.*.text' => 'Жауап',
        'gender' => 'Жыныс',
        'day' => 'Күн',
        'month' => 'Ай',
        'year' => 'Жыл',
        'hour' => 'Сағат',
        'minute' => 'Минут',
        'second' => 'Секунд',
        'title' => 'Атауы',
        'content' => 'Контент',
        'excerpt' => 'Үзінді',
        'date' => 'Уақыт',
        'time' => 'Уақыт',
        'available' => 'Қолжетімді',
        'size' => 'Көлемі',
        'old_phone' => 'Ескі нөмір нөмірі',
        'new_phone' => 'Жаңа телефон нөмірі',
        'code' => 'Код',
        'AccountId' => 'Қолданушы ID-і',

    ],
    'promocode' => [
        'not_found' => 'Жарнамалық код дұрыс емес немесе мұндай жарнамалық код жоқ',
        'later' => 'Сіздің жарнамалық кодыңыздың уақыты аяқталды',
        'used' => 'Осы талапты пайдалана отырып, сіз промокодтысыз'
    ]
];
