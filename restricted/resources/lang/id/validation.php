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

    'accepted' => 'Kolom :attribute must be accepted.',
    'active_url' => 'Kolom :attribute bukan merupakan valid URL.',
    'after' => 'Kolom :attribute harus berupa date after :date.',
    'after_or_equal' => 'Kolom :attribute harus merupakan tanggal setelah atau sama dengan :date.',
    'alpha' => 'Kolom :attribute hanya dapat berupa huruf.',
    'alpha_dash' => 'Kolom :attribute hanya dapat berupa huruf, angka, dashes dan garis bawah.',
    'alpha_num' => 'Kolom :attribute hanya dapat berupa huruf dan angka.',
    'array' => 'Kolom :attribute harus berupa array.',
    'before' => 'Kolom :attribute harus berupa date before :date.',
    'before_or_equal' => 'Kolom :attribute harus berupa date before or equal to :date.',
    'between' => [
        'numeric' => 'Kolom :attribute harus diantara :min dan :max.',
        'file' => 'Kolom :attribute harus diantara :min dan :max kilobytes.',
        'string' => 'Kolom :attribute harus diantara :min dan :max characters.',
        'array' => 'Kolom :attribute must have between :min dan :max items.',
    ],
    'boolean' => 'Kolom :attribute harus bernilai bernar atau salah.',
    'confirmed' => 'Kolom :attribute confirmation does not match.',
    'date' => 'Kolom :attribute bukan tanggal yang valid.',
    'date_equals' => 'Kolom :attribute harus berupa date equal to :date.',
    'date_format' => 'Kolom :attribute does not match the format :format.',
    'different' => 'Kolom :attribute dan :other must be different.',
    'digits' => 'Kolom :attribute must be :digits digits.',
    'digits_between' => 'Kolom :attribute harus diantara :min dan :max digits.',
    'dimensions' => 'Kolom :attribute has invalid image dimensions.',
    'distinct' => 'Kolom :attribute field has a duplicate value.',
    'email' => 'Kolom :attribute harus berupa email address yang valid.',
    'ends_with' => 'Kolom :attribute must end with one of the following: :values',
    'exists' => 'Nilai selected :attribute is invalid.',
    'file' => 'Kolom :attribute harus berupa file.',
    'filled' => 'Kolom :attribute field must have a value.',
    'gt' => [
        'numeric' => 'Kolom :attribute harus lebih besar dari :value.',
        'file' => 'Kolom :attribute harus lebih besar dari :value kilobytes.',
        'string' => 'Kolom :attribute harus lebih besar dari :value characters.',
        'array' => 'Kolom :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'Kolom :attribute harus lebih besar atau sama dengan :value.',
        'file' => 'Kolom :attribute harus lebih besar atau sama dengan :value kilobytes.',
        'string' => 'Kolom :attribute harus lebih besar atau sama dengan :value characters.',
        'array' => 'Kolom :attribute must have :value items or more.',
    ],
    'image' => 'Kolom :attribute harus berupa gambar.',
    'in' => 'Nilai selected :attribute is invalid.',
    'in_array' => 'Kolom :attribute field does not exist in :other.',
    'integer' => 'Kolom :attribute harus berupa integer.',
    'ip' => 'Kolom :attribute harus berupa IP addressyang benar.',
    'ipv4' => 'Kolom :attribute harus berupa IPv4 addressyang benar.',
    'ipv6' => 'Kolom :attribute harus berupa IPv6 addressyang benar.',
    'json' => 'Kolom :attribute harus berupa JSON stringyang benar.',
    'lt' => [
        'numeric' => 'Kolom :attribute harus lebih kecil dari :value.',
        'file' => 'Kolom :attribute harus lebih kecil dari :value kilobytes.',
        'string' => 'Kolom :attribute harus lebih kecil dari :value characters.',
        'array' => 'Kolom :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'Kolom :attribute harus lebih kecil atau sama dengan :value.',
        'file' => 'Kolom :attribute harus lebih kecil atau sama dengan :value kilobytes.',
        'string' => 'Kolom :attribute harus lebih kecil atau sama dengan :value characters.',
        'array' => 'Kolom :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'Kolom :attribute tidak dapat lebi besar dari :max.',
        'file' => 'Kolom :attribute tidak dapat lebi besar dari :max kilobytes.',
        'string' => 'Kolom :attribute tidak dapat lebi besar dari :max characters.',
        'array' => 'Kolom :attribute may not have more than :max items.',
    ],
    'mimes' => 'Kolom :attribute harus berupa file bertipe: :values.',
    'mimetypes' => 'Kolom :attribute harus berupa file bertipe: :values.',
    'min' => [
        'numeric' => 'Kolom :attribute tidak boleh lebih kecil daripada :min.',
        'file' => 'Kolom :attribute tidak boleh lebih kecil daripada :min kilobytes.',
        'string' => 'Kolom :attribute tidak boleh lebih kecil daripada :min characters.',
        'array' => 'Kolom :attribute must have at least :min items.',
    ],
    'not_in' => 'Nilai selected :attribute is invalid.',
    'not_regex' => 'Kolom :attribute format is invalid.',
    'numeric' => 'Kolom :attribute harus berupa angka.',
    'password' => 'Nilai password salah.',
    'present' => 'Kolom :attribute field must be present.',
    'regex' => 'Kolom :attribute format is invalid.',
    'required' => 'Kolom :attribute tidak boleh kosong.',
    'required_if' => 'Kolom :attribute tidak boleh kosong ketika :other adalah :value.',
    'required_unless' => 'Kolom :attribute tidak boleh kosong unless :other adalah in :values.',
    'required_with' => 'Kolom :attribute tidak boleh kosong ketika :values adalah present.',
    'required_with_all' => 'Kolom :attribute tidak boleh kosong ketika :values are present.',
    'required_without' => 'Kolom :attribute tidak boleh kosong ketika :values adalah not present.',
    'required_without_all' => 'Kolom :attribute tidak boleh kosong ketika none of :values are present.',
    'same' => 'Kolom :attribute dan :other harus sama.',
    'size' => [
        'numeric' => 'Kolom :attribute must be :size.',
        'file' => 'Kolom :attribute must be :size kilobytes.',
        'string' => 'Kolom :attribute must be :size characters.',
        'array' => 'Kolom :attribute must contain :size items.',
    ],
    'starts_with' => 'Kolom :attribute must start with one of the following: :values',
    'string' => 'Kolom :attribute harus berupa huruf dan angka.',
    'timezone' => 'Kolom :attribute harus berupa zone yang benar.',
    'unique' => 'Kolom :attribute telah digunakan untuk data lain.',
    'uploaded' => 'Kolom :attribute gagal di upload.',
    'url' => 'Kolom :attribute format adalah invalid.',
    'uuid' => 'Kolom :attribute harus berupa UUID yang benar.',

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
        'nama' => [
            'required' => 'Nama wajib diisi.',
        ],
        'keterangan' => [
            'required' => 'Keterangan wajib diisi.'
        ]
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