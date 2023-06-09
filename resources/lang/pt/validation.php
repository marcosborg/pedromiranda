<?php

return [
    'accepted'         => 'O :atributo deve ser aceite.',
    'active_url'       => 'O :atributo  não é um URL válido.',
    'after'            => 'O :atributo  deve ser uma data após :date.',
    'after_or_equal'   => 'O :atributo  deve ser uma data após ou igual a :date.',
    'alpha'            => 'O :atributo  deve ter apenas letras.',
    'alpha_dash'       => 'O :atributo  deve ter apenas letras, números e traços.',
    'alpha_num'        => 'O :atributo deve ter apenas letras e números.',
    'latin'            => 'O :atributo deve ser ISO basic Latin alphabet letters.',
    'latin_dash_space' => 'O :atributo só pode conter letras, números, hiphes e espaços.',
    'array'            => 'O :atributo  deve ser um array.',
    'before'           => 'O :atributo  deve ser uma data antes de :date.',
    'before_or_equal'  => 'O :atributo  deve ser uma data antes de ou igual a :date.',
    'between'          => [
        'numeric' => 'O :atributo deve estar entre :min e :max.',
        'file'    => 'O :atributo  deve estar entre :min e :max kilobytes.',
        'string'  => 'O :atributo  deve estar entre :min e :max caracteres.',
        'array'   => 'O :atributo  deve ter entre :min e :max itens.',
    ],
    'boolean'          => 'O campo :atributo  deve ser verdadeiro ou falso.',
    'confirmed'        => 'A confirmação do campo :atributo  não corresponde.',
    'current_password' => 'A palavra passe não está correcta.',
    'date'             => 'A :atributo  não é uma data válida.',
    'date_equals'      => 'O :atributo deve ser uma data igual a :date.',
    'date_format'      => 'O :atributo não corresponde ao formato :format.',
    'different'        => 'O :atributo e :other devem ser diferentes.',
    'digits'           => 'O :atributo deve ter :digits dígitos.',
    'digits_between'   => 'O :atributo deve ter entre :min e :max dígitos.',
    'dimensions'       => 'O :atributo possui dimensões inválidas de imagem.',
    'distinct'         => 'O campo :atributo possui um valor duplicado.',
    'email'            => 'O :atributo deve ser um endereço de e-mail válido.',
    'ends_with'        => 'O :atributo deve terminar com um dos seguintes: :values.',
    'exists'           => 'O :atributo selecionado é inválido.',
    'file'             => 'O :atributo deve ser um arquivo.',
    'filled'           => 'O campo :atributo é obrigatório.',
    'gt'               => [
        'numeric' => 'O :atributo maior que :value.',
        'file'    => 'O :atributo deve ser mais que o :value de kilobytes.',
        'string'  => 'O :atributo maior que os caracteres :value.',
        'array'   => 'O :atributo deve ter mais que o :value de itens.',
    ],
    'gte' => [
        'numeric' => 'O :atributo deve ser maior ou igual que :value.',
        'file'    => 'O :atributo deve ser maior ou igual que :value kilobytes.',
        'string'  => 'O :atributo deve ser maior ou igual que :value de caracteres.',
        'array'   => 'O :atributo  deve ter :value ou mais de itens.',
    ],
    'image'    => 'O :atributo deve ser uma imagem.',
    'in'       => 'O :atributo selecionado é inválido.',
    'in_array' => 'O campo :atributo não existe em :other.',
    'integer'  => 'O :atributo deve ser um inteiro.',
    'ip'       => 'O :atributo deve ser um endereço de IP válido.',
    'ipv4'     => 'O :atributo deve ser um endereço de IPv4 válido.',
    'ipv6'     => 'O :atributo deve ser um endereço de IPv6 válido.',
    'json'     => 'O :atributo deve ser uma string JSON válida.',
    'lt'       => [
        'numeric' => 'O :atributo deve ser menor que :value.',
        'file'    => 'O :atributo deve ser menor que :value kilobytes.',
        'string'  => 'O :atributo deve ser menos que o :value de caracteres.',
        'array'   => 'O :atributo deve ser menos que o :value de itens.',
    ],
    'lte' => [
        'numeric' => 'O :atributo deve ser menor ou igual que o :value.',
        'file'    => 'O :atributo deve ser menor ou igual que o :value de kilobytes.',
        'string'  => 'O :atributo deve ser menor ou igual que o :value de caracteres.',
        'array'   => 'O :atributo não deve ser maior que o :value de itens.',
    ],
    'max' => [
        'numeric' => 'O :atributo não deve ser maior que :max.',
        'file'    => 'O :atributo não deve ser maior que :max kilobytes.',
        'string'  => 'O :atributo não deve ser maior que :max caracteres.',
        'array'   => 'O :atributo não deve ter mais que :max itens.',
    ],
    'mimes'     => 'O :atributo deve ser um arquivo do tipo :values.',
    'mimetypes' => 'O :atributo deve ser um arquivo do tipo :values.',
    'min'       => [
        'numeric' => 'O :atributo deve ser no mínimo :min.',
        'file'    => 'O :atributo deve ter no mínimo :min kilobytes.',
        'string'  => 'O :atributo deve ter no mínimo :min caracteres.',
        'array'   => 'O :atributo deve ter no mínimo :min itens.',
    ],
    'not_in'               => 'O :atributo selecionado é inválido.',
    'not_regex'            => 'O formato do :atributo selecionado é inválido.',
    'numeric'              => 'O :atributo deve ser um número.',
    'password'             => 'A palavra-passe não está correta.',
    'present'              => 'O campo :attribute deve estar presente.',
    'regex'                => 'O formato :attribute é inválido.',
    'required'             => 'O campo :attribute é obrigatório.',
    'required_if'          => 'O campo :attribute é obrigatório quando :other é :value.',
    'required_unless'      => 'O campo :attribute é obrigatório a não ser que :other está em :values.',
    'required_with'        => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_with_all'    => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_without'     => 'O campo :attribute é obrigatório quando :values não está presente.',
    'required_without_all' => 'O campo :attribute é obrigatório quando nenhum de :values está presente.',
    'same'                 => 'O :attribute e :other devem corresponder.',
    'size'                 => [
        'numeric' => 'O :attribute deve ser :size.',
        'file'    => 'O :attribute deve ter o :size kilobytes.',
        'string'  => 'O :attribute deve ter :size caracteres.',
        'array'   => 'O :attribute deve conter :size itens.',
    ],
    'starts_with' => 'O :attribute deve começar com um dos seguintes: :values.',
    'string'      => 'O :attribute deve ser uma string.',
    'timezone'    => 'O :attribute deve ser uma zona válida.',
    'unique'      => 'O :attribute já foi definido.',
    'uploaded'    => 'O :attribute falhou no upload.',
    'url'         => 'O formato :attribute é inválido.',
    'uuid'        => 'O :attribute deve ser um UUID válido.',
    'custom'      => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    'reserved_word'                  => 'O :attribute contém palavras reservadas',
    'dont_allow_first_letter_number' => 'O campo \":entrada\" não pode conter o primeiro caracter como número',
    'exceeds_maximum_number'         => 'O :atributo atingiu o máximo do variáveis',
    'db_column'                      => 'O :atributo só pode conter letras, números, tracinho e não pode começar com números.',
    'attributes'                     => [],

];
