<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Linii de limbaj pentru validare
    |--------------------------------------------------------------------------
    |
    | Următoarele linii de limbaj conțin mesajele de eroare implicite utilizate
    | de clasa de validare. Unele dintre aceste reguli au mai multe versiuni,
    | cum ar fi regulile de dimensiune. Simțiți-vă liber să modificați aceste
    | mesaje aici.
    |
    */

    'accepted' => 'Câmpul :attribute trebuie acceptat.',
    'accepted_if' => 'Câmpul :attribute trebuie acceptat când :other este :value.',
    'active_url' => 'Câmpul :attribute trebuie să fie un URL valid.',
    'after' => 'Câmpul :attribute trebuie să fie o dată ulterioară lui :date.',
    'after_or_equal' => 'Câmpul :attribute trebuie să fie o dată ulterioară sau egală cu :date.',
    'alpha' => 'Câmpul :attribute trebuie să conțină doar litere.',
    'alpha_dash' => 'Câmpul :attribute trebuie să conțină doar litere, numere, cratime și sublinieri.',
    'alpha_num' => 'Câmpul :attribute trebuie să conțină doar litere și numere.',
    'array' => 'Câmpul :attribute trebuie să fie un array.',
    'ascii' => 'Câmpul :attribute trebuie să conțină doar caractere alfanumerice și simboluri ASCII.',
    'before' => 'Câmpul :attribute trebuie să fie o dată anterioară lui :date.',
    'before_or_equal' => 'Câmpul :attribute trebuie să fie o dată anterioară sau egală cu :date.',
    'between' => [
        'array' => 'Câmpul :attribute trebuie să aibă între :min și :max elemente.',
        'file' => 'Câmpul :attribute trebuie să fie între :min și :max kilobiți.',
        'numeric' => 'Câmpul :attribute trebuie să fie între :min și :max.',
        'string' => 'Câmpul :attribute trebuie să aibă între :min și :max caractere.',
    ],
    'boolean' => 'Câmpul :attribute trebuie să fie adevărat sau fals.',
    'confirmed' => 'Confirmarea câmpului :attribute nu se potrivește.',
    'date' => 'Câmpul :attribute trebuie să fie o dată validă.',
    'date_equals' => 'Câmpul :attribute trebuie să fie o dată egală cu :date.',
    'email' => 'Câmpul :attribute trebuie să fie o adresă de e-mail validă.',
    'exists' => 'Câmpul selectat :attribute nu este valid.',
    'file' => 'Câmpul :attribute trebuie să fie un fișier.',
    'image' => 'Câmpul :attribute trebuie să fie o imagine.',
    'integer' => 'Câmpul :attribute trebuie să fie un număr întreg.',
    'max' => [
        'array' => 'Câmpul :attribute nu trebuie să aibă mai mult de :max elemente.',
        'file' => 'Câmpul :attribute nu trebuie să fie mai mare de :max kilobiți.',
        'numeric' => 'Câmpul :attribute nu trebuie să fie mai mare de :max.',
        'string' => 'Câmpul :attribute nu trebuie să aibă mai mult de :max caractere.',
    ],
    'min' => [
        'array' => 'Câmpul :attribute trebuie să aibă cel puțin :min elemente.',
        'file' => 'Câmpul :attribute trebuie să aibă cel puțin :min kilobiți.',
        'numeric' => 'Câmpul :attribute trebuie să fie cel puțin :min.',
        'string' => 'Câmpul :attribute trebuie să aibă cel puțin :min caractere.',
    ],
    'numeric' => 'Câmpul :attribute trebuie să fie un număr.',
    'regex' => 'Formatul câmpului :attribute este invalid.',
    'required' => 'Câmpul :attribute este obligatoriu.',
    'same' => 'Câmpul :attribute trebuie să coincidă cu :other.',
    'size' => [
        'array' => 'Câmpul :attribute trebuie să conțină :size elemente.',
        'file' => 'Câmpul :attribute trebuie să fie de :size kilobiți.',
        'numeric' => 'Câmpul :attribute trebuie să fie :size.',
        'string' => 'Câmpul :attribute trebuie să aibă :size caractere.',
    ],
    'string' => 'Câmpul :attribute trebuie să fie un șir de caractere.',
    'unique' => 'Câmpul :attribute a fost deja utilizat.',
    'url' => 'Câmpul :attribute trebuie să fie un URL valid.',
    'phone' => 'Câmpul :attribute trebuie să fie un număr valid.',
    /*
    |--------------------------------------------------------------------------
    | Linii de validare personalizate
    |--------------------------------------------------------------------------
    |
    | Aici puteți specifica mesaje de validare personalizate pentru atributele
    | utilizând convenția "atribut.regulă" pentru a denumi liniile.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'mesaj-personalizat',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Atribute personalizate
    |--------------------------------------------------------------------------
    |
    | Următoarele linii sunt utilizate pentru a înlocui substituentul de atribut
    | cu ceva mai prietenos, cum ar fi „Adresă de e-mail” în loc de „email”.
    |
    */

    'attributes' => [
        'name' => 'Prenume, Nume',
        'email' => 'E-mail',
        'phone' => 'Telefon',
        'message' => 'Mesaj',
    ],

];
