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

    'accepted' => 'The :attribute must be accepted.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute may only contain letters.',
    'alpha_dash' => 'The :attribute may only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute may only contain letters and numbers.',
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'string' => 'The :attribute must be between :min and :max characters.',
        'array' => 'The :attribute must have between :min and :max items.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'date' => 'The :attribute is not a valid date.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => 'The :attribute must be a valid email address.',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file' => 'The :attribute may not be greater than :max kilobytes.',
        'string' => 'The :attribute may not be greater than :max characters.',
        'array' => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'The :attribute must be at least :min characters.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'password' => 'The password is incorrect.',
    'present' => 'The :attribute field must be present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute format is invalid.',
    'uuid' => 'The :attribute must be a valid UUID.',
    'multiple_of'        => ':attribute multiple of 5',


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
            'rule-name'  => 'custom-message',




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

    'attributes' => [
        'user_name'             =>'User Name',
        'name'                  => 'Name',
        'username'              => 'Username',
        'email'                 => 'Email',
        'first_name'            => 'First Name',
        'last_name'             => 'Last Name',
        'password'              => 'Password',
        'password_confirmation' => 'Password Confirmation',
        'address'               => 'Address',
        'mobile'                => 'Mobile',
        'age'                   => 'Age',
        'sex'                   => 'Sex',
        'gender'                => 'Gender',
        'day'                   => 'Day',
        'month'                 => 'Month',
        'year'                  => 'Year',
        'hour'                  => 'Hour',
        'minute'                => 'Minute',
        'second'                => 'Second',
        'title'                 => 'Title',
        'content'               => 'Content',
        'description'           => 'Description',
        'excerpt'               => 'Excerpt',
        'date'                  => 'Date',
        'time'                  => 'Time',
        'available'             => 'Available',
        'size'                  => 'Size',
        'confirmPassword'       =>'ConfirmPassword',
        'nationality'           =>'Nationality',
        'child_no'              =>'Child_no',
        'weight'                =>'Weight',
        'height'                =>'Height',
        'work'                  =>'Work',
        'job'                   =>'Job',
        'ar.name'               =>'Name In Arabic',
        'en.name'               =>'Name In English',
        'url'                   =>'Url',
        'details'               =>'Details',
        'image'                 =>'Image',
        'job_title_id'          =>'Job Title',
        'company_name'          =>'Company Name',
        'lat'                   =>'Latitude',
        'lng'                   =>'Longitude',
        'street_name'           =>'Street Name',
        'building_no'           =>'Building No',
        'office_no'             =>'Office No',
        'other_details'         =>'Other Details',
        'office_phone'          =>'Office Phone',
        'office_fax'            =>'Office Fax',
        'p_o_pox'               =>'P O POX',
        'zip_code'              =>'zip code',
        'phones'                => 'Phones',
        'full_name'             => 'Full Name',
        'city_id'               => 'City',
        'city'                  => 'City',
        'country'               => 'Country',
        'country_id'            => 'Country',
        'phone'                 => 'Phone',
        'country_code'          => 'Country Code',
        'friend_id'             =>'Friend',
        'linkedin_id'           => 'Linkedin Id',
        'google'                => 'Google Account',
        'apple_id'              => 'Apple Account',
        //SLIDERS
        'link'                  =>'Link',
        'sliders.add'           =>'Sliders Add',
        'slider.add'            =>'Sliders Add',
        'sliders.edit'          =>'Sliders Edit',
        'slider.edit'           =>'Slider Edit',
        //SETTINGS
        'setting'               =>'Setting',
        'settings'              =>'Settings',
        'setting.add'           =>'Setting Add',
        'settings.add'          =>'Settings Add',
        'setting.edit'          =>'Setting Edit',
        'settings.edit'         =>'Setting Edits',
        'about_us'              =>'About Us',
        'facebook_url'          =>'Facebook URL',
        'linkedin_url'          =>'Linkedin URL',
        'twitter_url'           =>'Twitter URL',
        'youtube_url'           =>'Youtube URL',
        'instagram_url'         =>'Instagram URL',
        'tiktok_url'            =>'Tiktok URL',
        'tax'                   => 'Tax',

        //SERVICES
        'services'              =>'Services',
        'service'               =>'Service',
        'services.add'          =>'Add Services',
        'service.add'           =>'Add Service',
        'services.edit'         =>'Edit Services',
        'service.edit'          =>'Edit Service',
        'service_id'            =>'Service',
        'icon'                  =>'Icon',
        //FAQS
        'faqs'                  =>'FAQS',
        'faq.add'               =>'FAQ Add',
        'faqs.add'              =>'FAQS Add',
        'faq.edit'              =>'FAQ Edit',
        'faqs.edit'             =>'FAQS Edit',
        //CONTACT
        'contact'               =>'Contact',
        'contacts'              =>'Contacts',
        'contact.add'           =>'Contact Add',
        'contacts.add'          =>'Contacts Add',
        'contact.edit'          =>'Contact Edit',
        'contacts.edit'         =>'Contacts Edit',
        'value'                 =>'Name',
        'type'                  =>'Type',
        'small_image'           => 'Small Image',

        'package_id'            =>'Package',
        'from'                  => 'From',
        'to'                    => 'To',
        'week_day_id'           => 'Day',
        'barber_id'             => 'Employee',
        'expiry_date'           =>'Expiry Date',
        'packages'              => 'Packages',
        'client_id'             =>'Client',
        'choose_client'         => 'Choose Client',
        'customer_name'         => 'Guest Name',

        // custom validation

        'ar'    => [
            'name'           => 'Arabic Name ',
            'description'    => 'Arabic Description ',
            'title'          =>'Arabic Title',
            //SETTINGS
            'about_us'       =>'About Us In Arabic',
            //FAQS
            'question'       =>'Arabic Question',
            'answer'         =>'Arabic Answer',

        ],

        'en'    => [
            'name'           => 'English Name',
            'description'    => 'English Description',
            'title'          =>'English Title',
            //SETTINGS
            'about_us'       =>'About Us In English',
            //FAQS
            'question'       =>'English Question',
            'answer'         =>'English Answer',

        ],
    ],

];
