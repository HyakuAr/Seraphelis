@php
    $response = Http::get('https://api.lanyard.rest/v1/users/948995432632180746');
    $userData = $response->json();
    
    $avatarUrl = "https://cdn.discordapp.com/avatars/{$userData['data']['discord_user']['id']}/{$userData['data']['discord_user']['avatar']}.png";
    $username = $userData['data']['discord_user']['username'];
    $discriminator = $userData['data']['discord_user']['discriminator'];
    $status = $userData['data']['activities'][0]['details'];
@endphp

<div class="container max-w-4xl p-4">
    <div class="flex items-center justify-between my-6">
        <h1>My Discord status</h1>
    </div>

    <div class="grid grid-cols-10 gap-6">
        <div class="grid-item">
            <img src="{{ $avatarUrl }}" alt="Avatar" />
        </div>
        <div class="grid-item">
            <p class="text-2xl">
                {{ $username }}
                <span class="text-gray-400">{{ $discriminator }}</span>
            </p>
            <p class="text-gray-400">{{ $status }}</p>
        </div>
    </div>
</div>