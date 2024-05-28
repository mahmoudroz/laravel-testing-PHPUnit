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

    'accepted'        => 'يجب قبول :attribute.',
    'active_url'      => ':attribute لا يُمثّل رابطًا صحيحًا.',
    'after'           => 'يجب على :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',
    'after_or_equal'  => ':attribute يجب أن يكون تاريخاً لاحقاً أو مطابقاً للتاريخ :date.',
    'alpha'           => 'يجب أن لا يحتوي :attribute سوى على حروف.',
    'alpha_dash'      => 'يجب أن لا يحتوي :attribute سوى على حروف، أرقام ومطّات.',
    'alpha_num'       => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط.',
    'array'           => 'يجب أن يكون :attribute ًمصفوفة.',
    'before'          => 'يجب على :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',
    'before_or_equal' => ':attribute يجب أن يكون تاريخا سابقا أو مطابقا للتاريخ :date.',
    'between'         => [
        'numeric' => 'يجب أن تكون قيمة :attribute بين :min و :max.',
        'file'    => 'يجب أن يكون حجم الملف :attribute بين :min و :max كيلوبايت.',
        'string'  => 'يجب أن يكون عدد حروف النّص :attribute بين :min و :max.',
        'array'   => 'يجب أن يحتوي :attribute على عدد من العناصر بين :min و :max.',
    ],
    'boolean'        => 'يجب أن تكون قيمة :attribute إما true أو false .',
    'confirmed'      => 'حقل التأكيد غير مُطابق للحقل :attribute.',
    'date'           => ':attribute ليس تاريخًا صحيحًا.',
    'date_equals'    => 'يجب أن يكون :attribute مطابقاً للتاريخ :date.',
    'date_format'    => 'لا يتوافق :attribute مع الشكل :format.',
    'different'      => 'يجب أن يكون الحقلان :attribute و :other مُختلفين.',
    'digits'         => 'يجب أن يحتوي :attribute على :digits رقمًا/أرقام.',
    'digits_between' => 'يجب أن يحتوي :attribute بين :min و :max رقمًا/أرقام .',
    'dimensions'     => 'الـ :attribute يحتوي على أبعاد صورة غير صالحة.',
    'distinct'       => 'للحقل :attribute قيمة مُكرّرة.',
    'email'          => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية.',
    'ends_with'      => 'يجب أن ينتهي :attribute بأحد القيم التالية: :values',
    'exists'         => 'القيمة المحددة :attribute غير موجودة.',
    'file'           => 'الـ :attribute يجب أن يكون ملفا.',
    'filled'         => ':attribute إجباري.',
    'gt'             => [
        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :value.',
        'file'    => 'يجب أن يكون حجم الملف :attribute أكبر من :value كيلوبايت.',
        'string'  => 'يجب أن يكون طول النّص :attribute أكثر من :value حروفٍ/حرفًا.',
        'array'   => 'يجب أن يحتوي :attribute على أكثر من :value عناصر/عنصر.',
    ],
    'gte' => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أكبر من :value.',
        'file'    => 'يجب أن يكون حجم الملف :attribute على الأقل :value كيلوبايت.',
        'string'  => 'يجب أن يكون طول النص :attribute على الأقل :value حروفٍ/حرفًا.',
        'array'   => 'يجب أن يحتوي :attribute على الأقل على :value عُنصرًا/عناصر.',
    ],
    'image'    => 'يجب أن يكون :attribute صورةً.',
    'in'       => ':attribute غير موجود.',
    'in_array' => ':attribute غير موجود في :other.',
    'integer'  => 'يجب أن يكون :attribute عددًا صحيحًا.',
    'ip'       => 'يجب أن يكون :attribute عنوان IP صحيحًا.',
    'ipv4'     => 'يجب أن يكون :attribute عنوان IPv4 صحيحًا.',
    'ipv6'     => 'يجب أن يكون :attribute عنوان IPv6 صحيحًا.',
    'json'     => 'يجب أن يكون :attribute نصًا من نوع JSON.',
    'lt'       => [
        'numeric' => 'يجب أن تكون قيمة :attribute أصغر من :value.',
        'file'    => 'يجب أن يكون حجم الملف :attribute أصغر من :value كيلوبايت.',
        'string'  => 'يجب أن يكون طول النّص :attribute أقل من :value حروفٍ/حرفًا.',
        'array'   => 'يجب أن يحتوي :attribute على أقل من :value عناصر/عنصر.',
    ],
    'lte' => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أصغر من :value.',
        'file'    => 'يجب أن لا يتجاوز حجم الملف :attribute :value كيلوبايت.',
        'string'  => 'يجب أن لا يتجاوز طول النّص :attribute :value حروفٍ/حرفًا.',
        'array'   => 'يجب أن لا يحتوي :attribute على أكثر من :value عناصر/عنصر.',
    ],
    'max' => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أصغر من :max.',
        'file'    => 'يجب أن لا يتجاوز حجم الملف :attribute :max كيلوبايت.',
        'string'  => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا.',
        'array'   => 'يجب أن لا يحتوي :attribute على أكثر من :max عناصر/عنصر.',
    ],
    'mimes'     => 'يجب أن يكون ملفًا من نوع : :values.',
    'mimetypes' => 'يجب أن يكون ملفًا من نوع : :values.',
    'min'       => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أكبر من :min.',
        'file'    => 'يجب أن يكون حجم الملف :attribute على الأقل :min كيلوبايت.',
        'string'  => 'يجب أن يكون طول النص :attribute على الأقل :min حروفٍ/حرفًا.',
        'array'   => 'يجب أن يحتوي :attribute على الأقل على :min عُنصرًا/عناصر.',
    ],
    'not_in'               => 'العنصر :attribute غير صحيح.',
    'not_regex'            => 'صيغة :attribute غير صحيحة.',
    'numeric'              => 'يجب على :attribute أن يكون رقمًا.',
    'password'             => 'كلمة المرور غير صحيحة.',
    'present'              => 'يجب تقديم :attribute.',
    'regex'                => 'صيغة :attribute .غير صحيحة.',
    'required'             => ':attribute مطلوب.',
    'required_if'          => ':attribute مطلوب في حال ما إذا كان :other يساوي :value.',
    'required_unless'      => ':attribute مطلوب في حال ما لم يكن :other يساوي :values.',
    'required_with'        => ':attribute مطلوب إذا توفّر :values.',
    'required_with_all'    => ':attribute مطلوب إذا توفّر :values.',
    'required_without'     => ':attribute مطلوب إذا لم يتوفّر :values.',
    'required_without_all' => ':attribute مطلوب إذا لم يتوفّر :values.',
    'same'                 => 'يجب أن يتطابق :attribute مع :other.',
    'size'                 => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية لـ :size.',
        'file'    => 'يجب أن يكون حجم الملف :attribute :size كيلوبايت.',
        'string'  => 'يجب أن يحتوي النص :attribute على :size حروفٍ/حرفًا بالضبط.',
        'array'   => 'يجب أن يحتوي :attribute على :size عنصرٍ/عناصر بالضبط.',
    ],
    'starts_with' => 'يجب أن يبدأ :attribute بأحد القيم التالية: :values',
    'string'      => 'يجب أن يكون :attribute نصًا.',
    'timezone'    => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا.',
    'unique'      => 'قيمة :attribute مُستخدمة من قبل.',
    'uploaded'    => 'فشل في تحميل الـ :attribute.',
    'url'         => 'صيغة الرابط :attribute غير صحيحة.',
    'uuid'        => ':attribute يجب أن يكون بصيغة UUID سليمة.',
    'multiple_of'        => ':attribute يجب ان تكون مضاعفات 5',


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

    'attributes' => [
        'name'                  => 'الاسم',
        'username'              => 'اسم المُستخدم',
        'email'                 => 'البريد الالكتروني',
        'first_name'            => 'الاسم الأول',
        'last_name'             => 'اسم العائلة',
        'password'              => 'كلمة المرور',
        'password_confirmation' => 'تأكيد كلمة المرور',
        'city'                  => 'المدينة',
        'country'               => 'الدولة',
        'address'               => 'العنوان',
        'phone'                 => 'الهاتف',
        'mobile'                => 'الجوال',
        'age'                   => 'العمر',
        'sex'                   => 'الجنس',
        'gender'                => 'النوع',
        'day'                   => 'اليوم',
        'month'                 => 'الشهر',
        'year'                  => 'السنة',
        'hour'                  => 'ساعة',
        'minute'                => 'دقيقة',
        'second'                => 'ثانية',
        'title'                 => 'العنوان',
        'content'               => 'المُحتوى',
        'description'           => 'الوصف',
        'excerpt'               => 'المُلخص',
        'date'                  => 'التاريخ',
        'time'                  => 'الوقت',
        'available'             => 'مُتاح',
        'size'                  => 'الحجم',
        'confirmPassword'      =>'تاكيد كلمة المرور',
        'user_name'            =>'اسم المستخدم',
        'image'                =>'الصورة',
        'job_title_id'          =>'المسمى الوظيفي',
        'company_name'          =>'اسم الشركة',
        'lat'                   =>'خط العرض',
        'lng'                   =>'خط الطول',
        'street_name'           =>'اسم الشارع',
        'building_no'           =>'رقم البناء',
        'office_no'             =>'رقم المكتب',
        'other_details'         =>'تفاصيل اخرى',
        'office_phone'          =>'هاتف المكتب',
        'office_fax'            =>'فاكس المكتب',
        'p_o_pox'               =>'P O POX',
        'zip_code'              =>'رمز بريدي',
        'phones'                => 'الهواتف',
        'full_name'             => 'الاسم بالكامل',
        'city_id'               => 'المدينة',
        'country_id'            => 'الدولة',
        'country_code'          => 'كود الدولة',
        'friend_id'             => 'الصديق',
        'linkedin_id'           => 'الرقم التعريفى لينكدان',

        //SLIDERS
        'sliders'              =>'السلايدر',
        'link'                =>'الرابط',
        'sliders.add'         =>'اضافة السلايدر',
        'slider.add'          =>'اضافة السلايدر',
        'sliders.edit'        =>'تعديل السلايدر',
        'slider.edit'         =>'تعديل السلايدر',
        //SETTINGS
        'setting'             =>'الإعداد',
        'settings'            =>'الإعدادات',
        'setting.add'         =>' إضافةالإعداد',
        'settings.add'        =>'إضافةالإعدادات',
        'setting.edit'        =>'تعديل إعداد',
        'settings.edit'       =>'تعديل الإعدادات',
        'about_us'            =>'معلومات عنا',
        'facebook_url'        =>'رابط الفيس بوك',
        'linkedin_url'        =>'رابط لينكدان',
        'twitter_url'         =>'رابط تويتر',
        'youtube_url'         =>'رابط يوتيوب',
        'instagram_url'       =>'رابط انستجرام',
        'tiktok_url'          =>'رابط التيك توك',
        'tax'                 => 'نسبة التطبيق',
        'google'              => 'حساب جوجل',
        'apple_id'            => 'حساب ابل',

        //SERVICES
        'services'            =>'الخدمات',
        'service'             =>'الخدمة',
        'services.add'        =>'إضافة خدمات',
        'service.add'         =>'إضافة خدمة',
        'services.edit'       =>'تعديل خدمات',
        'service.edit'        =>'تعديل خدمة',
        'service_id'          =>'الخدمة',
        'icon'                =>'ايقونة',
        'small_image'         => 'الصورة المصغرة',

        //FAQS
        'faqs'               =>'الأسئلة الشائعة',
        'faq.add'            =>'إضافة سؤال شائع',
        'faqs.add'           =>'إضافة الأسئلة',
        'faq.edit'           =>'تعديل سؤال',
        'faqs.edit'          =>'تعديل الأسئلة',
        //CONTACT
        'contact'            =>'التواصل',
        'contacts'           =>'التواصل',
        'contact.add'        =>'اضافة  معلومات تواصل',
        'contacts.add'       =>'اضافة  معلومات تواصل',
        'contact.edit'       =>'تعديل معلومات تواصل',
        'contacts.edit'      =>'تعديل معلومات تواصل',
        'value'              =>'الاسم',
        'type'               =>'النوع',
        'duration'           =>'المدة بالدقائق',
        'price'              =>'السعر',
        'package_id'         =>'الباقة',
        'from'               => 'من',
        'to'                 => 'الى',
        'week_day_id'        => 'اليوم',

        'barber_id'          => 'الموظف',
        'multiple_of'        => 'multiple of 5',
        'expiry_date'        =>'تاريخ الانتهاء',
        'packages'           => 'الباقات',
        'client_id'          =>'المستخدم',
        'choose_client'      => 'اختر مستخدم للتطيبق  او ضيف ',
        'customer_name'      => 'اسم الضيف',

        // custom validation

        'ar'    => [
            'name'              => 'الأسم باللغه العربيه ',
            'description'       => ' الوصف  باللغه العربيه ',
            'title'             => 'العنوان  باللغة العربية ',

            //SETTINGS
            'about_us'          =>'معلومات عنا باللغة العربية',
            //FAQS
            'question'          =>'السؤال باللغة العربية',
            'answer'            =>'الإجابة باللغة العربية',
        ],

        'en'    => [
            'name'              => 'الأسم باللغه الإنجليزيه ',
            'description'       => ' الوصف  باللغه الإنجليزيه ',
            'title'             => 'العنوان  باللغة الإنجليزية',
            //SETTINGS
            'about_us'          =>'معلومات عنا باللغة الانجليزية',
            //FAQS
            'question'          =>'السؤال باللغة الانجليزية',
            'answer'            =>'الإجابة باللغة الانجليزية',
        ],


    ],

];
