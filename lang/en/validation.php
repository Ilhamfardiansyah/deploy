<?php

return [

    'accepted' => ':Attribute harus diterima.',
    'accepted_if' => ':Attribute harus diterima ketika :other adalah :value.',
    'active_url' => ':Attribute bukan URL yang valid.',
    'after' => ':Attribute harus berupa tanggal setelah :date.',
    'after_or_equal' => ':Attribute harus berupa tanggal setelah atau sama dengan :date.',
    'alpha' => ':Attribute hanya boleh berisi huruf.',
    'alpha_dash' => ':Attribute hanya boleh berisi huruf, angka, strip, dan garis bawah.',
    'alpha_num' => ':Attribute hanya boleh berisi huruf dan angka.',
    'array' => ':Attribute harus berupa array.',
    'ascii' => ':Attribute hanya boleh berisi karakter alfanumerik satu byte dan simbol.',
    'before' => ':Attribute harus berupa tanggal sebelum :date.',
    'before_or_equal' => ':Attribute harus berupa tanggal sebelum atau sama dengan :date.',
    'between' => [
        'array' => ':Attribute harus memiliki antara :min dan :max item.',
        'file' => ':Attribute harus berukuran antara :min dan :max kilobyte.',
        'numeric' => ':Attribute harus bernilai antara :min dan :max.',
        'string' => ':Attribute harus berisi antara :min dan :max karakter.',
    ],
    'boolean' => ':Attribute harus bernilai true atau false.',
    'can' => ':Attribute berisi nilai yang tidak sah.',
    'confirmed' => 'Konfirmasi :attribute tidak cocok.',
    'current_password' => 'Password salah.',
    'date' => ':Attribute bukan tanggal yang valid.',
    'date_equals' => ':Attribute harus berupa tanggal yang sama dengan :date.',
    'date_format' => ':Attribute tidak sesuai dengan format :format.',
    'decimal' => ':Attribute harus memiliki :decimal tempat desimal.',
    'declined' => ':Attribute harus ditolak.',
    'declined_if' => ':Attribute harus ditolak ketika :other adalah :value.',
    'different' => ':Attribute dan :other harus berbeda.',
    'digits' => ':Attribute harus berisi :digits digit.',
    'digits_between' => ':Attribute harus berisi antara :min dan :max digit.',
    'dimensions' => ':Attribute memiliki dimensi gambar yang tidak valid.',
    'distinct' => ':Attribute memiliki nilai yang duplikat.',
    'doesnt_end_with' => ':Attribute tidak boleh diakhiri dengan salah satu dari berikut: :values.',
    'doesnt_start_with' => ':Attribute tidak boleh diawali dengan salah satu dari berikut: :values.',
    'email' => ':Attribute harus berupa alamat email yang valid.',
    'ends_with' => ':Attribute harus diakhiri dengan salah satu dari berikut: :values.',
    'enum' => ':Attribute yang dipilih tidak valid.',
    'exists' => ':Attribute yang dipilih tidak valid.',
    'extensions' => ':Attribute harus memiliki salah satu ekstensi berikut: :values.',
    'file' => ':Attribute harus berupa file.',
    'filled' => ':Attribute harus memiliki nilai.',
    'gt' => [
        'array' => ':Attribute harus memiliki lebih dari :value item.',
        'file' => ':Attribute harus lebih besar dari :value kilobyte.',
        'numeric' => ':Attribute harus lebih besar dari :value.',
        'string' => ':Attribute harus lebih besar dari :value karakter.',
    ],
    'gte' => [
        'array' => ':Attribute harus memiliki :value item atau lebih.',
        'file' => ':Attribute harus lebih besar atau sama dengan :value kilobyte.',
        'numeric' => ':Attribute harus lebih besar atau sama dengan :value.',
        'string' => ':Attribute harus lebih besar atau sama dengan :value karakter.',
    ],
    'hex_color' => ':Attribute harus berupa warna hexadecimal yang valid.',
    'image' => ':Attribute harus berupa gambar.',
    'in' => ':Attribute yang dipilih tidak valid.',
    'in_array' => ':Attribute harus ada di :other.',
    'integer' => ':Attribute harus berupa bilangan bulat.',
    'ip' => ':Attribute harus berupa alamat IP yang valid.',
    'ipv4' => ':Attribute harus berupa alamat IPv4 yang valid.',
    'ipv6' => ':Attribute harus berupa alamat IPv6 yang valid.',
    'json' => ':Attribute harus berupa string JSON yang valid.',
    'lowercase' => ':Attribute harus berupa huruf kecil.',
    'lt' => [
        'array' => ':Attribute harus memiliki kurang dari :value item.',
        'file' => ':Attribute harus kurang dari :value kilobyte.',
        'numeric' => ':Attribute harus kurang dari :value.',
        'string' => ':Attribute harus kurang dari :value karakter.',
    ],
    'lte' => [
        'array' => ':Attribute tidak boleh memiliki lebih dari :value item.',
        'file' => ':Attribute harus kurang atau sama dengan :value kilobyte.',
        'numeric' => ':Attribute harus kurang atau sama dengan :value.',
        'string' => ':Attribute harus kurang atau sama dengan :value karakter.',
    ],
    'mac_address' => ':Attribute harus berupa alamat MAC yang valid.',
    'max' => [
        'array' => ':Attribute tidak boleh memiliki lebih dari :max item.',
        'file' => ':Attribute tidak boleh lebih besar dari :max kilobyte.',
        'numeric' => ':Attribute tidak boleh lebih besar dari :max.',
        'string' => ':Attribute tidak boleh lebih besar dari :max karakter.',
    ],
    'max_digits' => ':Attribute tidak boleh memiliki lebih dari :max digit.',
    'mimes' => ':Attribute harus berupa file dengan tipe: :values.',
    'mimetypes' => ':Attribute harus berupa file dengan tipe: :values.',
    'min' => [
        'array' => ':Attribute harus memiliki setidaknya :min item.',
        'file' => ':Attribute harus setidaknya :min kilobyte.',
        'numeric' => ':Attribute harus setidaknya :min.',
        'string' => ':Attribute harus setidaknya :min karakter.',
    ],
    'min_digits' => ':Attribute harus memiliki setidaknya :min digit.',
    'missing' => ':Attribute harus hilang.',
    'missing_if' => ':Attribute harus hilang ketika :other adalah :value.',
    'missing_unless' => ':Attribute harus hilang kecuali :other adalah :value.',
    'missing_with' => ':Attribute harus hilang ketika :values ada.',
    'missing_with_all' => ':Attribute harus hilang ketika :values ada.',
    'multiple_of' => ':Attribute harus merupakan kelipatan dari :value.',
    'not_in' => ':Attribute yang dipilih tidak valid.',
    'not_regex' => 'Format :attribute tidak valid.',
    'numeric' => ':Attribute harus berupa angka.',
    'password' => [
        'letters' => ':Attribute harus mengandung setidaknya satu huruf.',
        'mixed' => ':Attribute harus mengandung setidaknya satu huruf besar dan satu huruf kecil.',
        'numbers' => ':Attribute harus mengandung setidaknya satu angka.',
        'symbols' => ':Attribute harus mengandung setidaknya satu simbol.',
        'uncompromised' => ':Attribute yang diberikan telah muncul dalam kebocoran data. Harap pilih :attribute yang berbeda.',
    ],
    'present' => ':Attribute harus ada.',
    'present_if' => ':Attribute harus ada ketika :other adalah :value.',
    'present_unless' => ':Attribute harus ada kecuali :other adalah :value.',
    'present_with' => ':Attribute harus ada ketika :values ada.',
    'present_with_all' => ':Attribute harus ada ketika :values ada.',
    'prohibited' => ':Attribute dilarang.',
    'prohibited_if' => ':Attribute dilarang ketika :other adalah :value.',
    'prohibited_unless' => ':Attribute dilarang kecuali :other ada di :values.',
    'prohibits' => ':Attribute melarang :other ada.',
    'regex' => 'Format :attribute tidak valid.',
    'required' => ':Attribute wajib diisi.',
    'required_array_keys' => ':Attribute harus berisi entri untuk: :values.',
    'required_if' => ':Attribute wajib diisi ketika :other adalah :value.',
    'required_if_accepted' => ':Attribute wajib diisi ketika :other diterima.',
    'required_unless' => ':Attribute wajib diisi kecuali :other ada di :values.',
    'required_with' => ':Attribute wajib diisi ketika :values ada.',
    'required_with_all' => ':Attribute wajib diisi ketika :values ada.',
    'required_without' => ':Attribute wajib diisi ketika :values tidak ada.',
    'required_without_all' => ':Attribute wajib diisi ketika tidak ada satupun dari :values yang ada.',
    'same' => ':Attribute dan :other harus sama.',
    'size' => [
        'array' => ':Attribute harus mengandung :size item.',
        'file' => ':Attribute harus berukuran :size kilobyte.',
        'numeric' => ':Attribute harus berukuran :size.',
        'string' => ':Attribute harus berisi :size karakter.',
    ],
    'starts_with' => ':Attribute harus diawali dengan salah satu dari berikut: :values.',
    'string' => ':Attribute harus berupa string.',
    'timezone' => ':Attribute harus berupa zona waktu yang valid.',
    'unique' => ':Attribute sudah digunakan.',
    'uploaded' => ':Attribute gagal diunggah.',
    'uppercase' => ':Attribute harus berupa huruf besar.',
    'url' => ':Attribute harus berupa URL yang valid.',
    'ulid' => ':Attribute harus berupa ULID yang valid.',
    'uuid' => ':Attribute harus berupa UUID yang valid.',

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'pesan-kustom',
        ],
    ],

    'attributes' => [],

];
