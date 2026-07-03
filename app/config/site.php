<?php
declare(strict_types=1);

$airbnbUrl = 'https://www.airbnb.com.br/rooms/36376900?_set_bev_on_new_domain=1749067401_EAMGU0NzFmN2NlNj&source_impression_id=p3_1749067403_P3Zf51sfCSpKypxN';
$whatsappUrl = 'https://wa.me/+5562994015653';
$instagramUrl = 'https://www.instagram.com/casarosariopiri/';
$mapsUrl = 'https://goo.gl/maps/e7JZf5EQCJV2CkxUA';

return [
    'brand' => 'Casa Rosário',
    'footer_text' => 'Conforto, tranquilidade e elegância em Pirenópolis - Goiás',
    'meta' => [
        'title' => 'Casa Rosário | Hospedagem Premium em Pirenópolis',
        'description' => 'Conforto, tranquilidade e elegância no coração de Pirenópolis.',
    ],
    'links' => [
        'airbnb' => $airbnbUrl,
        'whatsapp' => $whatsappUrl,
        'instagram' => $instagramUrl,
        'maps' => $mapsUrl,
    ],
    'floating_buttons' => [
        [
            'label' => 'WhatsApp',
            'url' => $whatsappUrl,
            'icon' => 'fab fa-whatsapp',
            'class' => 'bg-green-600 hover:bg-green-700',
        ],
        [
            'label' => 'Instagram',
            'url' => $instagramUrl,
            'icon' => 'fab fa-instagram',
            'class' => 'bg-pink-600 hover:bg-pink-700',
        ],
        [
            'label' => 'Airbnb',
            'url' => $airbnbUrl,
            'icon' => 'fab fa-airbnb',
            'class' => 'bg-red-600 hover:bg-red-700',
        ],
    ],
    'footer_links' => [
        ['label' => 'Instagram', 'url' => $instagramUrl, 'icon' => 'fab fa-instagram'],
        ['label' => 'WhatsApp', 'url' => $whatsappUrl, 'icon' => 'fab fa-whatsapp'],
        ['label' => 'Airbnb', 'url' => $airbnbUrl, 'icon' => 'fab fa-airbnb'],
    ],
    'hero' => [
        'title' => 'Casa Rosário',
        'subtitle' => 'Conforto, tranquilidade e elegância no coração de Pirenópolis',
        'images' => [
            'images/carrossel/hero-1.jpg',
            'images/carrossel/hero-2.jpg',
            'images/carrossel/hero-3.jpg',
        ],
    ],
    'about' => [
        'title' => 'Hospedagem Premium em Pirenópolis',
        'section_id' => 'hospedagem-premium',
        'headline' => 'Sobre Casa Rosário',
        'images' => [
            ['src' => 'images/sobre/sobre-1.jpg', 'alt' => 'Sobre Casa Rosário'],
            ['src' => 'images/sobre/sobre-2.jpg', 'alt' => 'Sobre Casa Rosário'],
            ['src' => 'images/sobre/sobre-3.jpg', 'alt' => 'Sobre Casa Rosário'],
        ],
        'paragraphs' => [
            'Nossa casa oferece conforto e tranquilidade na melhor localização da cidade, a apenas 550 metros da Rua do Lazer e próxima à entrada do portal da cidade. Ambiente familiar e de fácil acesso a todo o comércio e centro histórico.',
            'Uma propriedade espaçosa com 4 suítes e 1 quarto, acomodando confortavelmente até 10 pessoas com 5 camas queen e 5 camas de solteiro. Todos os quartos possuem ar condicionado e espaços de armazenamento. Incluindo uma suíte exclusiva ao lado da piscina. Aceitamos pet friendly! A casa conta com:',
        ],
        'bullets' => [
            'Cozinha completa com eletrodomésticos (sanduicheira, liquidificador, espremedor de laranja, air fryer, garrafa térmica, forno elétrico e microondas)',
            'Salas amplas e decoradas com TV Smart 65"',
            'Banheiro social',
            'Área gourmet com churrasqueira',
            'Piscina com aquecimento solar e ducha externa',
            'Área de serviço equipada',
        ],
        'counters' => [
            ['icon' => 'fas fa-bed', 'value' => '4 Suítes + 1 Quarto', 'label' => '5 camas Queen e 5 de Solteiro'],
            ['icon' => 'fas fa-user-friends', 'value' => '10', 'label' => 'Hóspedes (podendo alojar 12)'],
            ['icon' => 'fas fa-swimming-pool', 'value' => '1', 'label' => 'Piscina Aquecida (Painel Solar)'],
            ['icon' => 'fas fa-car', 'value' => '', 'label' => 'Garagem'],
            ['icon' => 'fas fa-toilet', 'value' => '6', 'label' => 'Banheiros com água quente'],
            ['icon' => 'fas fa-utensils', 'value' => '1', 'label' => 'Área gourmet com churrasqueira e freezer médio'],
        ],
    ],
    'common_areas' => [
        [
            'id' => 'area-sala-carousel',
            'title' => 'Sala Amplamente Decorada',
            'description' => 'TV Smart 65", sofás confortáveis e mesa de centro elegante',
            'images' => [
                ['src' => 'images/areas/sala/sala-1.jpg', 'alt' => 'Sala de estar', 'class' => 'w-full h-64 object-cover'],
                ['src' => 'images/areas/sala/sala-2.jpg', 'alt' => 'Sala de estar', 'class' => 'w-full h-64 object-cover'],
            ],
        ],
        [
            'id' => 'cozinha-carousel',
            'title' => 'Cozinha Gourmet',
            'description' => 'Equipada com utensílios e eletrodomésticos modernos',
            'images' => [
                ['src' => 'images/areas/cozinha/cozinha-1.jpg', 'alt' => 'Cozinha'],
                ['src' => 'images/areas/cozinha/cozinha-2.jpg', 'alt' => 'Cozinha'],
            ],
        ],
        [
            'id' => 'piscina-carousel',
            'title' => 'Piscina Aquecida',
            'description' => 'Aquecimento solar, ducha e área de descanso à beira da piscina',
            'images' => [
                ['src' => 'images/areas/piscina/piscina-1.jpg', 'alt' => 'Piscina'],
                ['src' => 'images/areas/piscina/piscina-2.jpg', 'alt' => 'Piscina'],
            ],
        ],
        [
            'id' => 'externa-carousel',
            'title' => 'Área Externa',
            'description' => 'Espaço arborizado e bem cuidado, perfeito para relaxar',
            'images' => [
                ['src' => 'images/areas/externa/externa-1.jpg', 'alt' => 'Área Externa'],
                ['src' => 'images/areas/externa/externa-2.jpg', 'alt' => 'Área Externa'],
                ['src' => 'images/areas/externa/externa-4.jpg', 'alt' => 'Área Externa'],
            ],
        ],
        [
            'id' => 'estacionamento-carousel',
            'title' => 'Estacionamento',
            'description' => '4 vagas cobertas seguras na entrada da propriedade',
            'images' => [
                ['src' => 'images/areas/estacionamento/estacionamento-1.jpg', 'alt' => 'Vaga de Estacionamento Coberta'],
                ['src' => 'images/areas/estacionamento/estacionamento-2.jpg', 'alt' => 'Área de Estacionamento'],
            ],
        ],
        [
            'id' => 'churrasqueira-carousel',
            'title' => 'Área de Churrasco',
            'description' => 'Área de Churrasco completa.',
            'images' => [
                ['src' => 'images/areas/churrasqueira/churrasqueira-1.jpg', 'alt' => 'Área de Churrasco'],
                ['src' => 'images/areas/churrasqueira/churrasqueira-2.jpg', 'alt' => 'Área de Churrasco'],
            ],
        ],
    ],
    'pre_room_features' => [
        [
            'icon' => 'fas fa-baby',
            'title' => 'Segurança e Acessibilidade',
            'description' => 'Câmeras de segurança externas, acesso sem degraus e ambiente projetado para segurança de idosos e crianças.',
        ],
    ],
    'rooms' => [
        [
            'id' => 'suite1-carousel',
            'title' => 'Suíte 1',
            'images' => [
                ['src' => 'images/quartos/suite1/suite1-1.jpg', 'alt' => 'Suíte 1', 'class' => 'w-full h-full object-bottom object-cover'],
            ],
            'badges' => ['1 cama queen', '1 cama solteiro'],
            'features' => ['Cabides', 'Arara para Roupas'],
        ],
        [
            'id' => 'suite2-carousel',
            'title' => 'Suíte 2',
            'images' => [
                ['src' => 'images/quartos/suite2/suite2-1.jpg', 'alt' => 'Suíte 2', 'class' => 'w-full h-full object-bottom object-cover'],
            ],
            'badges' => ['1 cama queen', '1 cama solteiro'],
            'features' => ['Arara para roupas', 'TV Smart', 'Cabides'],
        ],
        [
            'id' => 'suite3-carousel',
            'title' => 'Suíte 3',
            'images' => [
                ['src' => 'images/quartos/suite3/suite3-1.jpg', 'alt' => 'Suíte 3', 'class' => 'w-full h-full object-bottom object-cover'],
            ],
            'badges' => ['1 cama queen', '2 camas solteiro'],
            'features' => ['Arara para roupas', 'Ar condicionado', 'Cabides'],
        ],
        [
            'id' => 'suite4-carousel',
            'title' => 'Suíte Exclusiva',
            'images' => [
                ['src' => 'images/quartos/suite4/suite4-1.jpg', 'alt' => 'Suíte Exclusiva'],
            ],
            'badges' => ['1 cama queen', '1 cama solteiro'],
            'features' => ['Suíte ao lado da piscina', 'TV Smart', 'Arara para roupas'],
        ],
        [
            'id' => 'quartosimples-carousel',
            'title' => 'Quarto Simples',
            'images' => [
                ['src' => 'images/quartos/simples/simples-1.jpg', 'alt' => 'Quarto Simples'],
            ],
            'badges' => ['1 cama queen'],
            'features' => ['Arara para roupas', 'Cabides'],
        ],
        [
            'id' => 'banheiro-carousel',
            'title' => 'Banheiros',
            'images' => [
                ['src' => 'images/banheiros/banheiro-1.jpg', 'alt' => 'Banheiro Social'],
                ['src' => 'images/banheiros/banheiro-2.jpg', 'alt' => 'Banheiro Suíte'],
            ],
            'badges' => ['4 banheiros', 'Água quente'],
            'features' => ['1 banheiro social', '6 banheiros com água quente', 'Produtos de higiene básicos'],
        ],
    ],
    'amenities' => [
        [
            'icon' => 'fas fa-wifi',
            'title' => 'Wi-Fi de Alta Velocidade',
            'description' => 'Conexão estável e rápida em toda a propriedade para trabalho e lazer.',
        ],
        [
            'icon' => 'fas fa-swimming-pool',
            'title' => 'Piscina Interna Privativa',
            'description' => 'Piscina aquecida disponível o ano todo para uso exclusivo dos hóspedes.',
        ],
        [
            'icon' => 'fas fa-tv',
            'title' => 'Entretenimento Premium',
            'description' => 'TV Smart 65" com HBO Max, Netflix, TV a cabo e ar condicionado em todos os quartos.',
        ],
        [
            'icon' => 'fas fa-utensils',
            'title' => 'Cozinha Completa',
            'description' => 'Equipada com eletrodomésticos: sanduicheira, liquidificador, espremedor de laranja, air fryer, garrafa térmica, forno elétrico e microondas',
        ],
        [
            'icon' => 'fas fa-paw',
            'title' => 'Pet Friendly',
            'description' => 'Ambiente especialmente preparado para receber seus pets com conforto e segurança.',
        ],
        [
            'icon' => 'fas fa-shield-alt',
            'title' => 'Segurança e Acessibilidade',
            'description' => 'Câmeras de segurança externas, acesso sem degraus e ambiente projetado para segurança de idosos e crianças.',
        ],
        [
            'icon' => 'fas fa-concierge-bell',
            'title' => 'Serviços Adicionais',
            'description' => 'Indicação de cozinheira, arrumadeira e churrasqueiro (valor a combinar).',
        ],
    ],
    'location' => [
        'map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3821.032755323918!2d-48.9532008!3d-15.8551896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935c6d3cbfb6707d%3A0x34d73a88e856c439!2sR.%20do%20Ros%C3%A1rio%2C%205%20-%20Centro%2C%20Piren%C3%B3polis%20-%20GO%2C%2072980-000!5e0!3m2!1spt-BR!2sbr!4v1717613333696!5m2!1spt-BR!2sbr',
        'items' => [
            ['icon' => 'fas fa-map-marker-alt', 'text' => 'No coração do centro histórico de Pirenópolis'],
            ['icon' => 'fas fa-walking', 'text' => '750m da Rua do Lazer'],
            ['icon' => 'fas fa-store', 'text' => 'Próxima a todo o comércio local e centro histórico'],
            ['icon' => 'fas fa-water', 'text' => '5,5km das cachoeiras Usina Velha e Meia Lua'],
            ['icon' => 'fas fa-mountain', 'text' => '2km do portal de entrada da cidade'],
        ],
        'description' => 'Ambiente familiar e tranquilo, longe da muvuca mas com fácil acesso a todas as atrações de Pirenópolis. Localização privilegiada que combina a comodidade do centro com a tranquilidade de um bairro residencial.',
    ],
    'policies' => [
        'hours' => [
            ['label' => 'Check-in:', 'value' => '14:00 às 20:00'],
            ['label' => 'Check-out:', 'value' => 'Até 13:00'],
        ],
        'hours_note' => 'Late checkout sujeito à disponibilidade - consulte antecipadamente',
        'rules' => [
            ['icon' => 'fas fa-volume-down', 'text' => 'Permitido apenas som ambiente (volume baixo), tanto de dia como à noite, sem incomodar os vizinhos'],
            ['icon' => 'fas fa-volume-mute', 'text' => 'Ambiente familiar - não é permitido algazarras ou gritarias.'],
            ['icon' => 'fas fa-users', 'text' => 'Não é permitido ultrapassar o número de hóspedes informado'],
            ['icon' => 'fas fa-paw', 'text' => 'Animais permitidos mediante acordo prévio'],
            ['icon' => 'fas fa-bed', 'text' => 'Roupas de cama com taxa de lavanderia adicional'],
        ],
    ],
];
