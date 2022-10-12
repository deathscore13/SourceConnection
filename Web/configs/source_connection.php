<?php

const CFG_SOURCE_CONNECTION = [
    'every' => [    // peer_id (через запятую) или: chats - все чаты, pm - личные сообщения, every - везде
        'settings' => [
            'replace' => '{green}❌{old}',    // в чате игры не поддерживаются символы больше 3-х байт. они будут заменены на указанный
            'players' => 512,   // если количество символов при выводе игроков больше, то сообщение отправляется в ЛС
            'response' => 256,  // если количество символов в ответе больше, то сообщение отправляется в ЛС
            'steamid' => true   // нужны ли права для доступа к команде !ID steamid (показывает SteamId вместо K/D и IP вместо мута)
        ],

        '1' => [    // команды для вызова сервера (через запятую)
            'description' => 'MIRAGE #1',   // описание сервера в !bot commands
            'ip' => '37.230.228.240',       // ip сервера
            'port' => '27015',              // port сервера
            'rcon' => '123456789',          // rcon пароль
            'timeout' => 5                  // через сколько секунд разорвать соединение если ответа не последовало
        ],
        // следующий сервер
    ],
    // следующий чат
];