# Chat Server

Backend chat server terpisah untuk aplikasi **Mentoria**, dibangun menggunakan Laravel dan Chatify.

Chat Server menyediakan REST API untuk komunikasi pesan serta WebSocket realtime menggunakan Laravel Reverb.

## Tech Stack

- Laravel 13
- PHP 8.3+
- MySQL
- Laravel Sanctum
- Munafio Chatify
- Laravel Reverb
- Laravel Echo
- Pusher JS
- Vite

## Architecture

Chat Server berjalan sebagai service terpisah dari aplikasi Mentoria.

```text
                 MENTORIA
            Laravel / Flutter
                    |
                    | HTTPS
                    | Bearer Token
                    v
          +----------------------+
          |     CHAT SERVER      |
          |                      |
          |     Laravel 13       |
          |          |           |
          |      Chatify         |
          |          |           |
          |       MySQL          |
          |                      |
          +----------+-----------+
                     |
                     | WebSocket
                     v
              Laravel Reverb
                     |
                     v
             Realtime Client
