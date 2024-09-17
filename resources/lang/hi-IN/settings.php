<?php

return [

    'company' => [
        'description'                   => 'कंपनी का नाम, ईमेल, पता, कर संख्या आदि बदलें',
        'search_keywords'               => 'कंपनी, नाम, ईमेल, फोन, पता, देश, टैक्स नंबर, लोगो, शहर, नगर, राज्य, प्रांत, ज़िप कोड',
        'name'                          => 'नाम',
        'email'                         => 'ईमेल',
        'phone'                         => 'फ़ोन',
        'address'                       => 'पता',
        'edit_your_business_address'    => 'अपना व्यावसायिक पता संपादित करें',
        'logo'                          => 'लोगो',

        'form_description' => [
            'general'                   => 'यह जानकारी आपके द्वारा बनाए गए रिकॉर्ड में दिखाई देती है।',
            'address'                   => 'आपके द्वारा जारी इनवॉइस, बिल और अन्य रिकॉर्ड में पते का उपयोग किया जाएगा।',
        ],
    ],

    'localisation' => [
        'description'                   => 'वित्तीय वर्ष, समय क्षेत्र, तिथि प्रारूप और अधिक स्थानीय सेट करें',
        'search_keywords'               => 'वित्तीय, वर्ष, प्रारंभ, निरूपित, समय, क्षेत्र, तारीख, प्रारूप, विभाजक, छूट, प्रतिशत',
        'financial_start'               => 'वित्तीय वर्ष प्रारंभ',
        'timezone'                      => 'समय क्षेत्र',
        'financial_denote' => [
            'title'                     => 'वित्तीय वर्ष की देन',
            'begins'                    => 'जिस वर्ष से यह शुरू होता है',
            'ends'                      => 'जिस वर्ष तक यह समाप्त हो जाता है',
        ],
        'preferred_date'                => 'पसंदीदा तारीख',
        'date' => [
            'format'                    => 'तारीख प्रारूप',
            'separator'                 => 'तारीख विभाजक',
            'dash'                      => 'डेश (-)',
            'dot'                       => 'डॉट (.)',
            'comma'                     => 'कॉमा (,)',
            'slash'                     => 'फारवर्ड स्‍लैश (/)',
            'space'                     => 'खाली जगह ( )',
        ],
        'percent' => [
            'title'                     => 'प्रतिशत (%) स्थान',
            'before'                    => 'नंबर से पहले',
            'after'                     => 'नंबर के बाद',
        ],
        'discount_location' => [
            'name'                      => 'छूट का स्थान',
            'item'                      => 'रेखा पर',
            'total'                     => 'कुल पर',
            'both'                      => 'लाइन और कुल दोनों पर',
        ],

        'form_description' => [
            'fiscal'                    => 'वित्तीय वर्ष की अवधि निर्धारित करें जिसका उपयोग आपकी कंपनी कर लगाने और रिपोर्टिंग के लिए करती है।',
            'date'                      => 'वह तारीख स्वरूप चुनें जिसे आप इंटरफ़ेस में हर जगह देखना चाहते हैं।',
            'other'                     => 'उस स्थान का चयन करें जहां करों के लिए प्रतिशत चिह्न प्रदर्शित होता है। आप इनवॉइस और बिलों के लिए लाइन आइटम पर और कुल मिलाकर छूट सक्षम कर सकते हैं।',
        ],
    ],

    'invoice' => [
        'description'                   => 'चालान उपसर्ग, संख्या, पद, आधार लेख आदि को अनुकूलित करें',
        'search_keywords'               => 'अनुकूलित, चालान, संख्या, उपसर्ग, अंक, अगला, लोगो, नाम, मूल्य, मात्रा, टेम्पलेट, शीर्षक, उपशीर्षक, पाद लेख, नोट, छिपाना, देय, रंग, भुगतान, शर्तें, कॉलम',
        'prefix'                        => 'संख्या उपसर्ग',
        'digit'                         => 'संख्या अंक',
        'next'                          => 'अगला नंबर',
        'logo'                          => 'लोगो',
        'custom'                        => 'कस्टम',
        'item_name'                     => 'वस्तु का नाम',
        'item'                          => 'वस्तु',
        'product'                       => 'उत्पाद',
        'service'                       => 'सेवाएं',
        'price_name'                    => 'मूल्य का नाम',
        'price'                         => 'कीमत',
        'rate'                          => 'मूल्य',
        'quantity_name'                 => 'मात्रा नाम',
        'quantity'                      => 'मात्रा',
        'payment_terms'                 => 'भुगतान की शर्तें',
        'title'                         => 'शीर्षक',
        'subheading'                    => 'उपशीर्षक',
        'due_receipt'                   => 'प्राप्ति पर देय',
        'due_days'                      => ':days दिनों के भीतर देय',
        'choose_template'               => 'चालान टेम्पलेट चुनें',
        'default'                       => 'पूर्व निर्धारित',
        'classic'                       => 'क्लासिक',
        'modern'                        => 'नवीन',
        'hide' => [
            'item_name'                 => 'वस्तु का नाम छिपाएं',
            'item_description'          => 'वस्तु का विवरण छिपाएँ',
            'quantity'                  => 'मात्रा छिपाएं',
            'price'                     => 'मूल्य छिपाएं',
            'amount'                    => 'राशि छिपाएं',
        ],
        'column'                        => 'कॉलम|कॉलम',

        'form_description' => [
            'general'                   => 'अपनी चालान संख्या और भुगतान शर्तों को प्रारूपित करने के लिए डिफ़ॉल्ट सेट करें।',
            'template'                  => 'अपने इनवॉइस के लिए नीचे दिए गए टेम्प्लेट में से किसी एक को चुनें.',
            'default'                   => 'इनवॉइस के लिए डिफ़ॉल्ट का चयन करने से शीर्षक, उपशीर्षक, नोट्स और पादलेख पहले से भर जाएंगे। इसलिए आपको अधिक पेशेवर दिखने के लिए हर बार चालान संपादित करने की आवश्यकता नहीं है।',
            'column'                    => 'कस्टमाइज़ करें कि इनवॉइस कॉलम का नाम कैसे रखा जाता है। यदि आप आइटम विवरण और मात्रा को पंक्तियों में छिपाना पसंद करते हैं, तो आप इसे यहां बदल सकते हैं।',
        ]
    ],

    'transfer' => [
        'choose_template'               => 'स्थानांतरण टेम्पलेट चुनें',
        'second'                        => 'दूसरा',
        'third'                         => 'तीसरा',
    ],

    'default' => [
        'description'                   => 'मूल खाता, मुद्रा, आपकी कंपनी की भाषा',
        'search_keywords'               => 'खाता, मुद्रा, भाषा, कर, भुगतान, विधि, पृष्ठ पर अंक लगाना',
        'list_limit'                    => 'प्रति पृष्ठ रेकार्ड',
        'use_gravatar'                  => 'Gravatar का उपयोग करें',
        'income_category'               => 'आय श्रेणी',
        'expense_category'              => 'व्यय की श्रेणी',

        'form_description' => [
            'general'                   => 'तेजी से रिकॉर्ड बनाने के लिए डिफ़ॉल्ट खाता, कर और भुगतान पद्धति का चयन करें। डैशबोर्ड और रिपोर्ट डिफ़ॉल्ट मुद्रा के अंतर्गत दिखाए जाते हैं।',
            'category'                  => 'रिकॉर्ड निर्माण में तेजी लाने के लिए डिफ़ॉल्ट श्रेणियों का चयन करें।',
            'other'                     => 'कंपनी की भाषा की डिफ़ॉल्ट सेटिंग्स और पेजिनेशन कैसे काम करता है, इसे अनुकूलित करें।',
        ],
    ],

    'email' => [
        'description'                   => 'प्रेषण प्रोटोकॉल और ईमेल टेम्प्लेट बदलें',
        'search_keywords'               => 'ईमेल, भेजें, प्रोटोकॉल, एसएमटीपी, होस्ट, पासवर्ड',
        'protocol'                      => 'प्रोटोकॉल',
        'php'                           => 'PHP मेल',
        'smtp' => [
            'name'                      => 'SMTP',
            'host'                      => 'SMTP होस्ट',
            'port'                      => 'SMTP पोर्ट',
            'username'                  => 'SMTP यूजरनाम',
            'password'                  => 'SMTP पासवर्ड',
            'encryption'                => 'SMTP सिक्योरिटी',
            'none'                      => 'कोई नहीं',
        ],
        'sendmail'                      => 'सेंडमेल',
        'sendmail_path'                 => 'सेंडमेल पाथ',
        'log'                           => 'ईमेल लॉग करें',
        'email_service'                 => 'ईमेल सेवा',
        'email_templates'               => 'ईमेल टेम्पलेट्स',

        'form_description' => [
            'general'                   => 'अपनी टीम और संपर्कों को नियमित ईमेल भेजें। आप प्रोटोकॉल और एसएमटीपी सेटिंग्स सेट कर सकते हैं।',
        ],

        'templates' => [
            'description'               => 'ईमेल टेम्प्लेट बदलें',
            'search_keywords'           => 'ईमेल, टेम्पलेट, विषय, मुख्य भाग, टैग',
            'subject'                   => 'विषय',
            'body'                      => 'बॉडी',
            'tags'                      => '<strong> उपलब्ध टैग:</strong> :tag_list',
            'invoice_new_customer'      => 'नया चालान टेम्प्लेट (ग्राहक को भेजा गया)',
            'invoice_remind_customer'   => 'चालान स्मरणपत्र टेम्पलेट (ग्राहक को भेजा गया)',
            'invoice_remind_admin'      => 'चालान स्मरणपत्र टेम्पलेट (व्यवस्थापक को भेजा गया)',
            'invoice_recur_customer'    => 'चालान आवर्ती टेम्पलेट (ग्राहक को भेजा गया)',
            'invoice_recur_admin'       => 'चालान आवर्ती टेम्पलेट (व्यवस्थापक को भेजा गया)',
            'invoice_view_admin'        => 'चालान दृश्य टेम्पलेट (व्यवस्थापक को भेजा गया)',
            'invoice_payment_customer'  => 'भुगतान प्राप्त टेम्प्लेट (ग्राहक को भेजा गया)',
            'invoice_payment_admin'     => 'भुगतान प्राप्त टेम्प्लेट (व्यवस्थापक को भेजा गया)',
            'bill_remind_admin'         => 'बिल स्मरणपत्र टेम्पलेट (व्यवस्थापक को भेजा गया)',
            'bill_recur_admin'          => 'बिल आवर्ती टेम्पलेट (व्यवस्थापक को भेजा गया)',
            'payment_received_customer' => 'भुगतान रसीद टेम्पलेट (ग्राहक को भेजा गया)',
            'payment_made_vendor'       => 'भुगतान किया गया टेम्प्लेट (विक्रेता को भेजा गया)',
        ],
    ],

    'scheduling' => [
        'name'                          => 'सिडुलिंग',
        'description'                   => 'आवर्ती के लिए स्वचालित कमांड और आदेश',
        'search_keywords'               => 'स्वचालित, अनुस्मारक, आवर्ती, क्रॉन(cron), कमांड(command)',
        'send_invoice'                  => 'चालान स्मरणपत्र भेजें',
        'invoice_days'                  => 'नियत दिनों के बाद भेजें',
        'send_bill'                     => 'बिल स्मरणपत्र भेजें',
        'bill_days'                     => 'नियत दिनों से पहले भेजें',
        'cron_command'                  => 'क्रोंन कमांड',
        'command'                       => 'कमांड(Command)',
        'schedule_time'                 => 'चलने का समय',

        'form_description' => [
            'invoice'                   => 'सक्षम या अक्षम करें, और अपने चालानों के अतिदेय होने पर उनके लिए अनुस्मारक सेट करें।',
            'bill'                      => 'अपने बिलों के अतिदेय होने से पहले उन्हें सक्षम या अक्षम करें और अनुस्मारक सेट करें।',
            'cron'                      => 'क्रॉन(cron) कमांड(command) को कॉपी करें जिसे आपका सर्वर चलाना चाहिए। घटना(event) को ट्रिगर करने के लिए समय निर्धारित करें।',
        ]
    ],

    'categories' => [
        'description'                   => 'आय, व्यय और मद के लिए असीमित श्रेणियां',
        'search_keywords'               => 'श्रेणी, आय, व्यय, वस्तु',
    ],

    'currencies' => [
        'description'                   => 'मुद्राएं बनाएं और प्रबंधित करें और उनकी दरें निर्धारित करें',
        'search_keywords'               => 'डिफ़ॉल्ट, मुद्रा, मुद्राएं, कोड, दर, प्रतीक, सटीक, स्थिति, दशमलव, हजारों, चिह्न, विभाजक',
    ],

    'taxes' => [
        'description'                   => 'निश्चित, साधारण, सम्मिलित और यौगिक कर की दरें',
        'search_keywords'               => 'कर, दर, प्रकार, निश्चित, समावेशी, यौगिक, रोक',
    ],

];
