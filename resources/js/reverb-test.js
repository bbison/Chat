import Echo from 'laravel-echo';
import Pusher from 'pusher-js';

window.Pusher = Pusher;

const token = window.CHAT_TOKEN;
const conversationId = window.CONVERSATION_ID;

const status = document.getElementById('status');
const messages = document.getElementById('messages');

if (!token) {
    status.textContent = 'Token belum diisi.';
    throw new Error('CHAT_TOKEN belum tersedia.');
}

const echo = new Echo({
    broadcaster: 'reverb',

    key: import.meta.env.VITE_REVERB_APP_KEY,

    wsHost: import.meta.env.VITE_REVERB_HOST,
    wsPort: Number(import.meta.env.VITE_REVERB_PORT ?? 8080),
    wssPort: Number(import.meta.env.VITE_REVERB_PORT ?? 8080),

    forceTLS:
        (import.meta.env.VITE_REVERB_SCHEME ?? 'http') === 'https',

    enabledTransports: ['ws', 'wss'],

    authEndpoint:
        '/api/chatify/v1/broadcasting/auth',

    auth: {
        headers: {
            Accept: 'application/json',
            Authorization: `Bearer ${token}`,
        },
    },
});

window.Echo = echo;

status.textContent =
    'Menghubungkan ke conversation...';

echo.private(
    `chatify.conversation.${conversationId}`
)
.listen('.MessageSent', (event) => {

    console.log('MESSAGE RECEIVED:', event);

    status.textContent =
        'Realtime message diterima!';

    messages.textContent +=
        JSON.stringify(event, null, 2) +
        '\n\n';
});