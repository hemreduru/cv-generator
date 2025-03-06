<?php

    return [

        /*
        |--------------------------------------------------------------------------
        | Doğrulama Dil Satırları
        |--------------------------------------------------------------------------
        |
        | Aşağıdaki dil satırları doğrulayıcı sınıfı tarafından kullanılan varsayılan
        | hata mesajlarını içerir. Bu kuralların bazılarının birden fazla versiyonu
        | vardır, örneğin boyut kuralları. Her birini burada istediğiniz gibi
        | ayarlayabilirsiniz.
        |
        */

        'accepted' => ':attribute kabul edilmelidir.',
        'accepted_if' => ':attribute, :other :value olduğunda kabul edilmelidir.',
        'active_url' => ':attribute geçerli bir URL olmalıdır.',
        'after' => ':attribute, :date tarihinden sonra bir tarih olmalıdır.',
        'after_or_equal' => ':attribute, :date tarihinden sonra veya bu tarihe eşit bir tarih olmalıdır.',
        'alpha' => ':attribute sadece harflerden oluşmalıdır.',
        'alpha_dash' => ':attribute sadece harfler, sayılar, tire ve alt çizgi içerebilir.',
        'alpha_num' => ':attribute sadece harfler ve sayılardan oluşmalıdır.',
        'array' => ':attribute bir dizi olmalıdır.',
        'ascii' => ':attribute sadece tek baytlık alfasayısal karakterler ve semboller içermelidir.',
        'before' => ':attribute, :date tarihinden önce bir tarih olmalıdır.',
        'before_or_equal' => ':attribute, :date tarihinden önce veya bu tarihe eşit bir tarih olmalıdır.',
        'between' => [
            'array' => ':attribute, :min ile :max arasında öğe içermelidir.',
            'file' => ':attribute, :min ile :max kilobayt arasında olmalıdır.',
            'numeric' => ':attribute, :min ile :max arasında olmalıdır.',
            'string' => ':attribute, :min ile :max karakter arasında olmalıdır.',
        ],
        'boolean' => ':attribute alanı doğru veya yanlış olmalıdır.',
        'can' => ':attribute yetkisiz bir değer içeriyor.',
        'confirmed' => ':attribute onayı eşleşmiyor.',
        'contains' => ':attribute gerekli bir değeri içermiyor.',
        'current_password' => 'Şifre yanlış.',
        'date' => ':attribute geçerli bir tarih olmalıdır.',
        'date_equals' => ':attribute, :date tarihine eşit bir tarih olmalıdır.',
        'date_format' => ':attribute, :format formatıyla eşleşmelidir.',
        'decimal' => ':attribute, :decimal ondalık basamak içermelidir.',
        'declined' => ':attribute reddedilmelidir.',
        'declined_if' => ':attribute, :other :value olduğunda reddedilmelidir.',
        'different' => ':attribute ve :other farklı olmalıdır.',
        'digits' => ':attribute, :digits basamak olmalıdır.',
        'digits_between' => ':attribute, :min ile :max basamak arasında olmalıdır.',
        'dimensions' => ':attribute geçersiz resim boyutlarına sahiptir.',
        'distinct' => ':attribute alanında yinelenen bir değer var.',
        'doesnt_end_with' => ':attribute, şunlardan biriyle bitmemelidir: :values.',
        'doesnt_start_with' => ':attribute, şunlardan biriyle başlamamalıdır: :values.',
        'email' => ':attribute geçerli bir e-posta adresi olmalıdır.',
        'ends_with' => ':attribute, şunlardan biriyle bitmelidir: :values.',
        'enum' => 'Seçilen :attribute geçersiz.',
        'exists' => 'Seçilen :attribute geçersiz.',
        'extensions' => ':attribute, şunlardan biriyle biten bir dosya olmalıdır: :values.',
        'file' => ':attribute bir dosya olmalıdır.',
        'filled' => ':attribute alanında bir değer olmalıdır.',
        'gt' => [
            'array' => ':attribute, :value öğeden fazla olmalıdır.',
            'file' => ':attribute, :value kilobayttan büyük olmalıdır.',
            'numeric' => ':attribute, :value sayısından büyük olmalıdır.',
            'string' => ':attribute, :value karakterden büyük olmalıdır.',
        ],
        'gte' => [
            'array' => ':attribute, :value öğe veya daha fazlasını içermelidir.',
            'file' => ':attribute, :value kilobayt veya daha fazla olmalıdır.',
            'numeric' => ':attribute, :value sayısından büyük veya eşit olmalıdır.',
            'string' => ':attribute, :value karakter veya daha fazla olmalıdır.',
        ],
        'hex_color' => ':attribute geçerli bir onaltılık renk olmalıdır.',
        'image' => ':attribute bir resim olmalıdır.',
        'in' => 'Seçilen :attribute geçersiz.',
        'in_array' => ':attribute, :other içinde bulunmalıdır.',
        'integer' => ':attribute bir tamsayı olmalıdır.',
        'ip' => ':attribute geçerli bir IP adresi olmalıdır.',
        'ipv4' => ':attribute geçerli bir IPv4 adresi olmalıdır.',
        'ipv6' => ':attribute geçerli bir IPv6 adresi olmalıdır.',
        'json' => ':attribute geçerli bir JSON dizesi olmalıdır.',
        'list' => ':attribute bir liste olmalıdır.',
        'lowercase' => ':attribute küçük harf olmalıdır.',
        'lt' => [
            'array' => ':attribute, :value öğeden az olmalıdır.',
            'file' => ':attribute, :value kilobayttan az olmalıdır.',
            'numeric' => ':attribute, :value sayısından az olmalıdır.',
            'string' => ':attribute, :value karakterden az olmalıdır.',
        ],
        'lte' => [
            'array' => ':attribute, :value öğeden fazla olmamalıdır.',
            'file' => ':attribute, :value kilobayttan fazla olmamalıdır.',
            'numeric' => ':attribute, :value sayısından az veya eşit olmalıdır.',
            'string' => ':attribute, :value karakterden az veya eşit olmalıdır.',
        ],
        'mac_address' => ':attribute geçerli bir MAC adresi olmalıdır.',
        'max' => [
            'array' => ':attribute, :max öğeden fazla olmamalıdır.',
            'file' => ':attribute, :max kilobayttan büyük olmamalıdır.',
            'numeric' => ':attribute, :max sayısından büyük olmamalıdır.',
            'string' => ':attribute, :max karakterden büyük olmamalıdır.',
        ],
        'max_digits' => ':attribute, :max basamaktan fazla olmamalıdır.',
        'mimes' => ':attribute, şu türde bir dosya olmalıdır: :values.',
        'mimetypes' => ':attribute, şu türde bir dosya olmalıdır: :values.',
        'min' => [
            'array' => ':attribute, en az :min öğe içermelidir.',
            'file' => ':attribute, en az :min kilobayt olmalıdır.',
            'numeric' => ':attribute, en az :min olmalıdır.',
            'string' => ':attribute, en az :min karakter olmalıdır.',
        ],
        'min_digits' => ':attribute, en az :min basamak olmalıdır.',
        'missing' => ':attribute eksik olmalıdır.',
        'missing_if' => ':attribute, :other :value olduğunda eksik olmalıdır.',
        'missing_unless' => ':attribute, :other :value olmadıkça eksik olmalıdır.',
        'missing_with' => ':attribute, :values mevcut olduğunda eksik olmalıdır.',
        'missing_with_all' => ':attribute, :values mevcut olduğunda eksik olmalıdır.',
        'multiple_of' => ':attribute, :value\'nin katı olmalıdır.',
        'not_in' => 'Seçilen :attribute geçersiz.',
        'not_regex' => ':attribute formatı geçersiz.',
        'numeric' => ':attribute bir sayı olmalıdır.',
        'password' => [
            'letters' => ':attribute en az bir harf içermelidir.',
            'mixed' => ':attribute en az bir büyük ve bir küçük harf içermelidir.',
            'numbers' => ':attribute en az bir sayı içermelidir.',
            'symbols' => ':attribute en az bir sembol içermelidir.',
            'uncompromised' => 'Verilen :attribute bir veri sızıntısında yer almış. Lütfen farklı bir :attribute seçin.',
        ],
        'present' => ':attribute mevcut olmalıdır.',
        'present_if' => ':attribute, :other :value olduğunda mevcut olmalıdır.',
        'present_unless' => ':attribute, :other :value olmadıkça mevcut olmalıdır.',
        'present_with' => ':attribute, :values mevcut olduğunda mevcut olmalıdır.',
        'present_with_all' => ':attribute, :values mevcut olduğunda mevcut olmalıdır.',
        'prohibited' => ':attribute yasaklanmıştır.',
        'prohibited_if' => ':attribute, :other :value olduğunda yasaklanmıştır.',
        'prohibited_if_accepted' => ':attribute, :other kabul edildiğinde yasaklanmıştır.',
        'prohibited_if_declined' => ':attribute, :other reddedildiğinde yasaklanmıştır.',
        'prohibited_unless' => ':attribute, :other :values içinde olmadıkça yasaklanmıştır.',
        'prohibits' => ':attribute, :other\'ın mevcut olmasını yasaklar.',
        'regex' => ':attribute formatı geçersiz.',
        'required' => ':attribute alanı gereklidir.',
        'required_array_keys' => ':attribute, şunları içermelidir: :values.',
        'required_if' => ':attribute, :other :value olduğunda gereklidir.',
        'required_if_accepted' => ':attribute, :other kabul edildiğinde gereklidir.',
        'required_if_declined' => ':attribute, :other reddedildiğinde gereklidir.',
        'required_unless' => ':attribute, :other :values içinde olmadıkça gereklidir.',
        'required_with' => ':attribute, :values mevcut olduğunda gereklidir.',
        'required_with_all' => ':attribute, :values mevcut olduğunda gereklidir.',
        'required_without' => ':attribute, :values mevcut olmadığında gereklidir.',
        'required_without_all' => ':attribute, :values\'in hiçbiri mevcut olmadığında gereklidir.',
        'same' => ':attribute ve :other eşleşmelidir.',
        'size' => [
            'array' => ':attribute, :size öğe içermelidir.',
            'file' => ':attribute, :size kilobayt olmalıdır.',
            'numeric' => ':attribute, :size olmalıdır.',
            'string' => ':attribute, :size karakter olmalıdır.',
        ],
        'starts_with' => ':attribute, şunlardan biriyle başlamalıdır: :values.',
        'string' => ':attribute bir dize olmalıdır.',
        'timezone' => ':attribute geçerli bir saat dilimi olmalıdır.',
        'unique' => ':attribute zaten alınmış.',
        'uploaded' => ':attribute yüklenemedi.',
        'uppercase' => ':attribute büyük harf olmalıdır.',
        'url' => ':attribute geçerli bir URL olmalıdır.',
        'ulid' => ':attribute geçerli bir ULID olmalıdır.',
        'uuid' => ':attribute geçerli bir UUID olmalıdır.',

        /*
        |--------------------------------------------------------------------------
        | Özel Doğrulama Dil Satırları
        |--------------------------------------------------------------------------
        |
        | Burada, belirli bir öznitelik kuralı için özel doğrulama mesajları
        | belirtebilirsiniz. Bu, belirli bir öznitelik kuralı için özel bir dil
        | satırı belirtmeyi hızlı hale getirir.
        |
        */

        'custom' => [
            'attribute-name' => [
                'rule-name' => 'custom-message',
            ],
        ],

        /*
        |--------------------------------------------------------------------------
        | Özel Doğrulama Öznitelikleri
        |--------------------------------------------------------------------------
        |
        | Aşağıdaki dil satırları, öznitelik yer tutucularımızı "E-Posta Adresi"
        | gibi daha okunabilir bir şeyle değiştirmek için kullanılır. Bu, mesajlarımızı
        | daha ifade edici hale getirmemize yardımcı olur.
        |
        */

        'attributes' => [],

    ];
