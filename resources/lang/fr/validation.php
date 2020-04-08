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

    'accepted' => 'Vous devez accepter les :attribute.',
    'active_url' => ':attribute n\'est pas une URL valide.',
    'after' => 'La :attribute doit être une date supérieure à :date.',
    'after_or_equal' => 'La :attribute doit être une date supérieure ou égale à :date.',
    'alpha' => 'Le champ :attribute ne peut contenir que des lettres.',
    'alpha_dash' => 'Le champ :attribute ne peut contenir que des lettres, chiffres, - et _.',
    'alpha_num' => 'Le :attribute ne peut contenir que des lettres et chiffres.',
    'array' => 'Le champ :attribute doit être un tableau.',
    'before' => 'La :attribute doit être une date inférieure à :date.',
    'before_or_equal' => 'La :attribute doit être une date inférieure ou égale à :date.',
    'between' => [
        'numeric' => 'Le champ :attribute doit être compris entre :min et :max.',
        'file' => 'Le fichier :attribute doit avoir une taille comprise entre :min et :max kilooctets.',
        'string' => 'La valeur du champ :attribute doit faire entre :min et :max caractères.',
        'array' => 'Le champ :attribute doit contenir entre :min et :max items.',
    ],
    'boolean' => 'La valeur du champ :attribute doit être vrai ou faux.',
    'confirmed' => 'La confirmation du champ :attribute ne correspond pas.',
    'date' => 'La date du :attribute n\'est pas une date valide.',
    'date_equals' => 'La :attribute doit être une date égale à :date.',
    'date_format' => 'La :attribute ne correspond pas au format :format.',
    'different' => 'Les valeurs des champs :attribute et :other doivent être différentes.',
    'digits' => 'Le champ :attribute doit contenir :digits chiffres.',
    'digits_between' => 'Le champ :attribute doit contenir entre :min et :max chiffres.',
    'dimensions' => 'Les dimensions de l\'image :attribute sont invalides.',
    'distinct' => 'Le champ :attribute contient une valeur dupliquée.',
    'email' => 'L\':attribute doit être une adresse e-mail valide.',
    'ends_with' => 'Le champ :attribute doit se terminer par : :values.',
    'exists' => 'Le champ :attribute sélectionné est invalide.',
    'file' => 'Le champ :attribute doit contenir un fichier.',
    'filled' => 'Le champ :attribute doit contenir une valeur.',
    'gt' => [
        'numeric' => 'La valeur du champ :attribute doit être supérieure à :value.',
        'file' => 'La taille du fichier contenu dans :attribute doit être supérieure à :value kilooctets.',
        'string' => 'Le champ :attribute doit contenir plus de :value caractères.',
        'array' => 'Le champ :attribute doit contenir plus de :value valeurs.',
    ],
    'gte' => [
        'numeric' => 'La valeur du champ :attribute doit être supérieure ou égale à :value.',
        'file' => 'La taille du fichier contenu dans :attribute doit être supérieure ou égale à :value kilooctets.',
        'string' => 'Le champ :attribute doit contenir :value caractères ou plus.',
        'array' => 'Le champ :attribute doit contenir :value valeurs ou plus.',
    ],
    'image' => 'Le champ :attribute doit contenir une image.',
    'in' => 'La valeur du champ :attribute sélectionnée est invalide.',
    'in_array' => 'La valeur du champ :attribute n\'existe pas dans :other.',
    'integer' => 'La valeur du champ :attribute doit être un nombre entier.',
    'ip' => 'Le champ :attribute doit contenir une adresse IP valide',
    'ipv4' => 'Le champ :attribute doit contenir une adresse IPv4 valide.',
    'ipv6' => 'Le champ :attribute doit contenir une adresse IPv6 valide',
    'json' => 'Le champ :attribute doit contenir une chaîne JSON valide.',
    'lt' => [
        'numeric' => 'La valeur du champ :attribute doit être inférieure à :value.',
        'file' => 'La taille du fichier contenu dans :attribute doit être inférieure à :value kilooctets.',
        'string' => 'Le champ :attribute doit contenir moins de :value caractères.',
        'array' => 'Le champ :attribute doit contenir moins de :value valeurs.',
    ],
    'lte' => [
        'numeric' => 'La valeur du champ :attribute doit être inférieure ou égale à :value.',
        'file' => 'La taille du fichier contenu dans :attribute doit être inférieure ou égale à :value kilooctets.',
        'string' => 'Le champ :attribute doit contenir :value caractères ou moins.',
        'array' => 'Le champ :attribute doit contenir :value valeurs ou moins.',
    ],
    'max' => [
        'numeric' => 'La valeur du champ :attribute ne peut être supérieure à :max.',
        'file' => 'La taille du fichier :attribute ne peut être supérieure à :max kilooctets.',
        'string' => 'Le champ :attribute ne peut pas contenir plus de :max caractères.',
        'array' => 'Le champ :attribute ne peut pas contenir plus de :max valeurs.',
    ],
    'mimes' => 'Le champ :attribute doit contenir un fichier de type : :values.',
    'mimetypes' => 'Le champ :attribute doit contenir un fichier de type :values.',
    'min' => [
        'numeric' => 'La valeur du champ :attribute doit être au moins de :min.',
        'file' => 'La taille du fichier :attribute doit être au moins de :min kilooctets.',
        'string' => 'Le champ :attribute doit contenir au moins :min caractères.',
	'array' => 'Le champ :attribute doit contenir au moins :min valeurs.',
    ],
    'not_in' => 'La valeur du champ :attribute est invalide.',
    'not_regex' => 'Le format du champ :attribute est invalide.',
    'numeric' => 'Le champ :attribute doit contenir un nombre.',
    'password' => 'Le mot de passe est incorrect.',
    'present' => 'Le champ :attribute doit être présent.',
    'regex' => 'Le format du champ :attribute est invalide.',
    'required' => 'Le champ :attribute est requis.',
    'required_if' => 'Le champ :attribute est requis quand le champ :other contient :value.',
    'required_unless' => 'Le champ :attribute est requis sauf si :other contient :values.',
    'required_with' => 'Le champ :attribute est requis quand le champ :values est présent.',
    'required_with_all' => 'Le champ :attribute est requis quand les champs :values sont présents.',
    'required_without' => 'Le champ :attribute est requis quand :values est abssent.',
    'required_without_all' => 'Le champ :attribute est requis quand tous les champs :values sont absents.',
    'same' => 'Les champs :attribute et :other doivent être identiques.',
    'size' => [
        'numeric' => 'La valeur du champ :attribute doit être :size.',
        'file' => 'Le champ :attribute doit contenir un fichier de :size kilooctets.',
        'string' => 'Le champ :attribute doit contenir :size caractères.',
        'array' => 'Le champ :attribute doit contenir :size valeurs.',
    ],
    'starts_with' => 'Le champ :attribute doit commencer par l\'une des valeurs suivantes: :values.',
    'string' => 'Le champ :attribute doit contenir une chaîne de caractères.',
    'timezone' => 'Le champ :attribute doit contenir une zone valide.',
    'unique' => ':attribute est déjà pris.',
    'uploaded' => 'Le téléchargement du fichier :attribute a échoué.',
    'url' => 'Le format du champ :attribute est invalide.',
    'uuid' => 'Le champ :attribute doit contenir un UUID valide.',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
