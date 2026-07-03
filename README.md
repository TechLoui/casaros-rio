# Casa Rosário

Frontend PHP da página da Casa Rosário.

## Stack atual

- PHP 8+ para renderização do frontend.
- Tailwind via CDN para utilitários de layout e estilo.
- CSS customizado em `assets/css/styles.css`.
- JavaScript puro em `assets/js/app.js`.
- Font Awesome e Google Fonts via CDN.

## Como rodar localmente

Na raiz do projeto:

```bash
php -S localhost:8000 -t .
```

Depois acesse:

```text
http://localhost:8000
```

## Estrutura

- `index.php`: ponto de entrada da página.
- `app/config/site.php`: textos, links, imagens, quartos, comodidades e regras.
- `app/components.php`: componentes reutilizáveis de cards, listas, carrosséis e títulos.
- `app/helpers.php`: funções auxiliares, como escape de HTML.
- `app/partials`: partes globais da página, como head, footer, botões flutuantes e lightbox.
- `app/sections`: seções renderizadas pelo `index.php`.
- `assets/css/styles.css`: estilos customizados.
- `assets/js/tailwind-config.js`: configuração do Tailwind.
- `assets/js/app.js`: carrosséis, lightbox e animações.
- `images`: imagens usadas na página.

## Manutenção de conteúdo

Para alterar textos, links, quartos, comodidades, regras ou imagens exibidas na página, edite principalmente:

```text
app/config/site.php
```

As seções em `app/sections` só devem precisar de ajuste quando a estrutura visual mudar.

## Limpeza da stack antiga

O projeto não usa mais `index.html` como entrada estática. A entrada atual é `index.php`.
