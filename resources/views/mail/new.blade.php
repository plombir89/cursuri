<x-mail::message>
    # Contact Request

    Nume: {{ $user['name'] }}
    Telefon: {{ $user['phone'] }}
    Email: {{ $user['email'] }}
    Mesaj: {{ $user['message'] }}

    ---

    {{ config('app.name') }}
</x-mail::message>
