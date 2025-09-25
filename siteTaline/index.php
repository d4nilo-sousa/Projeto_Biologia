<!doctype html>
<html lang="pt-BR" class="scroll-smooth">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Webzoo — Tucunaré (Cichla spp.)</title>
    <meta name="description" content="Webzoo — Portal informativo sobre o tucunaré (Cichla spp.). Fatos, habitat, biologia, pesca sustentável e galeria." />
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'river-1': '#0f5666', // Deep River Teal
                        'river-2': '#1e8f7a', // Green-Teal
                        'sand': '#e9d8a6',
                        'leaf': '#2aa876',
                        'accent': '#ff7a18',
                        'bg-light': '#f6fbfb',
                        'muted': '#6b7280',
                    },
                    fontFamily: {
                        sans: ['Poppins', 'system-ui', '-apple-system', 'Segoe UI', 'Roboto', 'Helvetica Neue', 'Arial', 'sans-serif'],
                    },
                    borderRadius: {
                        'xl': '14px',
                    },
                }
            }
        }
    </script>

    <style>
        /* Estilo para a expansão de imagem (Lightbox) */
        .lightbox-modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 50;
        }

        .lightbox-modal.open {
            display: flex;
        }

        .lightbox-content {
            max-width: 90%;
            max-height: 90%;
            display: block;
            margin: auto;
        }
        
        /* Força a cor do link ativo para branco, como no original */
        .nav-link.active {
            color: white !important;
        }
        
    </style>
</head>

<body class="bg-bg-light text-gray-900 antialiased leading-relaxed" style="background: linear-gradient(180deg, #f6fbfb, #eef7f6 60%);">

    <header class="sticky top-0 z-40 backdrop-blur-sm bg-white/70 border-b border-river-1/10 shadow-lg shadow-river-1/5">
        <div class="container mx-auto max-w-7xl px-5 flex items-center justify-between py-3">
            <a href="#home" class="flex items-center gap-2 font-bold text-river-1">
                <svg class="w-10 h-10" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <defs>
                        <linearGradient id="g" x1="0" x2="1">
                            <stop offset="0" stop-color="#1e8f7a" />
                            <stop offset="1" stop-color="#0f5666" />
                        </linearGradient>
                    </defs>
                    <path fill="url(#g)" d="M4 34c0 0 10-12 30-12s30 12 30 12-10 12-30 12S4 34 4 34z" />
                    <circle cx="42" cy="28" r="3" fill="#fff" opacity="0.9" />
                </svg>
                <div>
                    <div class="text-base">Webzoo</div>
                    <small class="text-muted font-semibold text-xs hidden sm:block">Tucunaré • Cichla spp.</small>
                </div>
            </a>

            <nav aria-label="Navegação principal">
                <button class="lg:hidden p-2 rounded-lg text-river-1 menu-toggle" aria-expanded="false" title="Abrir menu" onclick="toggleMenu(this)">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /></svg>
                </button>
                <ul id="navList" class="hidden lg:flex lg:items-center lg:gap-1 absolute right-5 top-16 flex-col bg-white/95 backdrop-blur-sm p-4 rounded-xl shadow-xl lg:static lg:p-0 lg:flex-row lg:shadow-none">
                    <li><a href="#home" class="nav-link block px-3 py-2 rounded-xl font-semibold text-river-1 hover:bg-gradient-to-r hover:from-river-2 hover:to-leaf hover:text-white transition duration-200">Home</a></li>
                    <li><a href="#sobre" class="nav-link block px-3 py-2 rounded-xl font-semibold text-river-1 hover:bg-gradient-to-r hover:from-river-2 hover:to-leaf hover:text-white transition duration-200">Sobre</a></li>
                    <li><a href="#habitat" class="nav-link block px-3 py-2 rounded-xl font-semibold text-river-1 hover:bg-gradient-to-r hover:from-river-2 hover:to-leaf hover:text-white transition duration-200">Habitat</a></li>
                    <li><a href="#biologia" class="nav-link block px-3 py-2 rounded-xl font-semibold text-river-1 hover:bg-gradient-to-r hover:from-river-2 hover:to-leaf hover:text-white transition duration-200">Biologia</a></li>
                    <li><a href="#pesca" class="nav-link block px-3 py-2 rounded-xl font-semibold text-river-1 hover:bg-gradient-to-r hover:from-river-2 hover:to-leaf hover:text-white transition duration-200">Pesca</a></li>
                    <li><a href="#galeria" class="nav-link block px-3 py-2 rounded-xl font-semibold text-river-1 hover:bg-gradient-to-r hover:from-river-2 hover:to-leaf hover:text-white transition duration-200">Galeria</a></li>
                    <li><a href="#autoria" class="nav-link cta bg-accent text-white px-4 py-2 rounded-xl font-bold shadow-md shadow-accent/20 hover:opacity-90 transition duration-200 mt-2 lg:mt-0 lg:ml-2">Autoria</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section id="home" class="py-14 md:py-20 bg-river-1/5 border-b border-river-1/5">
            <div class="container mx-auto max-w-7xl px-5">
                <div class="grid lg:grid-cols-2 gap-8 items-center">
                    <div class="order-2 lg:order-1">
                        <span class="inline-block px-3 py-1 text-sm bg-white/70 backdrop-blur-sm rounded-full font-semibold text-river-1 mb-4 border border-river-1/10 shadow-sm">Espécie emblemática • Brasil 🇧🇷</span>
                        <h1 class="text-4xl md:text-5xl font-extrabold mb-2 text-river-1 leading-tight">Webzoo — Tudo sobre o Tucunaré</h1>
                        <p class="text-lg text-muted mb-5">Portal informativo dedicado ao tucunaré (*Cichla spp.*): identificação, habitat, biologia, práticas de pesca responsável e conservação. Ideal para estudantes, pescadores e curiosos da natureza.</p>
                        
                        <div class="flex flex-wrap gap-4 mb-8">
                            <a href="#sobre" class="bg-accent text-white px-6 py-3 rounded-xl font-bold shadow-lg shadow-accent/30 hover:shadow-xl transition duration-300">Saiba mais</a>
                            <a href="#galeria" class="text-river-1 border border-river-1/10 px-6 py-3 rounded-xl font-bold hover:bg-white hover:border-river-2/20 transition duration-300">Ver galeria</a>
                        </div>
                        
                        <div class="flex flex-wrap gap-4 mt-6">
                            <div class="flex items-center gap-3 p-3 bg-white/60 rounded-xl shadow-md shadow-river-1/5 border border-white">
                                <div class="w-11 h-11 flex items-center justify-center rounded-xl bg-gradient-to-br from-river-2 to-river-1 text-white font-bold text-xl">C</div>
                                <div>
                                    <div class="font-bold text-gray-800">Cichla</div>
                                    <div class="text-sm text-muted">Gênero de cichlids predadores</div>
                                </div>
                            </div>

                            <div class="p-3 bg-white/60 rounded-xl shadow-md shadow-river-1/5 border border-white">
                                <div class="text-sm text-muted">Distribuição</div>
                                <div class="font-bold text-gray-800">Bacias amazônicas e outras da América do Sul</div>
                            </div>
                        </div>
                    </div>

                    <div class="order-1 lg:order-2 h-72 rounded-xl overflow-hidden shadow-2xl shadow-river-1/10 bg-gradient-to-br from-river-2/90 to-sand/80 flex items-center justify-center relative">
                        <svg class="w-4/5 h-auto opacity-95 drop-shadow-xl" viewBox="0 0 800 600" xmlns="http://www.w3.org/2000/svg" role="img">
                            <g transform="translate(80,70)">
                                <path d="M40 200 C140 120 310 120 420 160 C520 190 610 230 660 300 C620 320 520 380 420 370 C310 360 150 300 40 200Z" fill="url(#g2)" />
                                <defs>
                                    <linearGradient id="g2" x1="0" x2="1">
                                        <stop offset="0" stop-color="#1e8f7a" />
                                        <stop offset="1" stop-color="#0f5666" />
                                    </linearGradient>
                                </defs>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </section>

        <section id="sobre" class="py-16">
            <div class="container mx-auto max-w-7xl px-5">
                <h2 class="text-2xl font-bold mb-1 text-river-1 border-b-2 border-river-1/10 pb-2 inline-block">Sobre o Tucunaré</h2>
                <p class="text-lg text-muted mb-8">O nome <strong>tucunaré</strong> refere-se a peixes do gênero <i>Cichla</i>, pertencentes à família Cichlidae. São predadores de água doce muito apreciados na pesca esportiva e reconhecidos por sua coloração vibrante. Existem várias espécies e subespécies com padrões e tamanhos diferentes.</p>

                <div class="grid md:grid-cols-2 gap-6">
                    <div class="card p-6 bg-white rounded-xl shadow-lg border border-river-1/10">
                        <h3 class="text-xl font-semibold mb-3 text-river-2">Identificação</h3>
                        <ul class="list-disc list-inside space-y-2 text-gray-700">
                            <li><strong>Corpo:</strong> geralmente verdoso a amarelado com listras ou manchas escuras.</li>
                            <li><strong>Marca característica:</strong> grande <strong>olho decorativo</strong> (mancha) próxima à base da cauda em muitas espécies.</li>
                            <li><strong>Tamanho:</strong> varia conforme a espécie — de 20 cm até mais de <strong>70–80 cm</strong> em exemplares maiores.</li>
                        </ul>
                    </div>
                    
                    <div class="card p-6 bg-white rounded-xl shadow-lg border border-river-1/10">
                        <h3 class="text-xl font-semibold mb-3 text-river-2">Curiosidades</h3>
                        <ul class="list-disc list-inside space-y-2 text-gray-700">
                            <li>Algumas espécies exibem <strong>mudança de coloração</strong> durante o período reprodutivo.</li>
                            <li>São peixes <strong>territoriais</strong> e podem apresentar <strong>cuidado parental</strong> dos ovos e filhotes.</li>
                            <li>Fortemente valorizados na pesca esportiva por sua <strong>força e mordida vigorosa</strong>.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        ---

        <section id="habitat" class="py-16 bg-bg-light">
            <div class="container mx-auto max-w-7xl px-5">
                <h2 class="text-2xl font-bold mb-1 text-river-1 border-b-2 border-river-1/10 pb-2 inline-block">Habitat & Distribuição 🗺️</h2>
                <p class="text-lg text-muted mb-8">Os tucunarés são nativos da América do Sul, ocorrendo em diversas bacias como a Amazônica, Tocantins-Araguaia e afluentes do Orinoco, entre outras. Preferem águas quentes e podem ser encontrados em trechos mais calmos de rios, lagos, lagoas e áreas de ressaca com estruturas como troncos e vegetação submersa.</p>

                <div class="grid md:grid-cols-2 gap-6">
                    <div class="card p-6 bg-white rounded-xl shadow-lg border border-river-1/10">
                        <h3 class="text-xl font-semibold mb-3 text-red-600">Ameaças</h3>
                        <ul class="list-disc list-inside space-y-2 text-gray-700">
                            <li><strong>Perda de habitat</strong> por desmatamento e construção de barragens.</li>
                            <li><strong>Sobrepesca</strong> e práticas predatórias em áreas sem manejo.</li>
                            <li><strong>Introdução</strong> em ecossistemas fora de sua área nativa (pode causar desequilíbrio).</li>
                        </ul>
                    </div>

                    <div class="card p-6 bg-white rounded-xl shadow-lg border border-river-1/10">
                        <h3 class="text-xl font-semibold mb-3 text-leaf">Conservação</h3>
                        <p class="text-muted">Medidas de <strong>manejo sustentável</strong>, áreas protegidas e regras de pesca (tamanhos mínimos, cotas e épocas de defeso) ajudam a manter populações saudáveis. Procure sempre seguir a legislação local e práticas de <strong>pesca responsável</strong>.</p>
                    </div>
                </div>
            </div>
        </section>

        ---
        
        <section id="biologia" class="py-16">
            <div class="container mx-auto max-w-7xl px-5">
                <h2 class="text-2xl font-bold mb-1 text-river-1 border-b-2 border-river-1/10 pb-2 inline-block">Biologia & Comportamento 🔬</h2>
                <p class="text-lg text-muted mb-8">Os tucunarés são <b>carnívoros</b>: alimentam-se principalmente de outros peixes, além de insetos, crustáceos e eventualmente pequenos anfíbios. Apresentam comportamento territorial, especialmente durante a reprodução, quando casais preparam e guardam o ninho.</p>

                <div class="grid md:grid-cols-2 gap-6">
                    <div class="card p-6 bg-white rounded-xl shadow-lg border border-river-1/10">
                        <h3 class="text-xl font-semibold mb-3 text-river-2">Reprodução</h3>
                        <p class="text-muted">Reprodução por <b>desova em substratos,</b> — o casal prepara áreas rasas com areia ou gravilha; ambos os pais frequentemente participam do <strong>cuidado dos ovos e filhotes</strong>. O período reprodutivo pode depender do regime de cheias e temperatura local.</p>
                    </div>

                    <div class="card p-6 bg-white rounded-xl shadow-lg border border-river-1/10">
                        <h3 class="text-xl font-semibold mb-3 text-river-2">Alimentação e Caça</h3>
                        <p class="text-muted">São <b>emboscadores</b> utilizam estruturas e sombra para se aproximar das presas com explosões rápidas de velocidade. Sua morfologia de boca é adaptada para capturar e engolir peixes menores.</p>
                    </div>
                </div>
            </div>
        </section>

        ---

        <section id="pesca" class="py-16 bg-bg-light">
            <div class="container mx-auto max-w-7xl px-5">
                <h2 class="text-2xl font-bold mb-1 text-river-1 border-b-2 border-river-1/10 pb-2 inline-block">Pesca & Manejo 🎣</h2>
                <p class="text-lg text-muted mb-8">O tucunaré é alvo popular da pesca esportiva. Para pesca responsável, recomenda-se conhecer e cumprir regras locais — tamanhos e cotas —, optar por <strong>captura e soltura</strong> quando possível e evitar práticas que prejudiquem a reprodução.</p>

                <div class="grid md:grid-cols-2 gap-6">
                    <div class="card p-6 bg-white rounded-xl shadow-lg border border-river-1/10">
                        <h3 class="text-xl font-semibold mb-3 text-river-2">Dicas para Pescadores</h3>
                        <ul class="list-disc list-inside space-y-2 text-gray-700">
                            <li>Use anzóis <b>sem farpa</b> para facilitar a soltura.</li>
                            <li>Evite retirar o peixe da água por muito tempo — fotografe rapidamente e libere.</li>
                            <li><strong>Respeite áreas de defesa</strong> e orientações de órgãos ambientais.</li>
                        </ul>
                    </div>

                    <div class="card p-6 bg-white rounded-xl shadow-lg border border-river-1/10">
                        <h3 class="text-xl font-semibold mb-3 text-river-2">Regulamentação</h3>
                        <p class="text-muted">As regras (tamanhos mínimos, cotas, períodos de defeso) <strong>variam por estado e bacia hidrográfica</strong>. Antes de pescar, confira a legislação local e orientações de órgãos ambientais ou sindicatos de pesca.</p>
                    </div>
                </div>
            </div>
        </section>

        ---

        <section id="galeria" class="py-16">
            <div class="container mx-auto max-w-7xl px-5">
                <h2 class="text-2xl font-bold mb-1 text-river-1 border-b-2 border-river-1/10 pb-2 inline-block">Galeria 📸</h2>
                <p class="text-lg text-muted mb-8">Confira abaixo algumas imagens de tucunarés! Clique nelas para expandir!.</p>

                <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3">
                    <img src="tucuna1.jfif" alt="Tucunaré exemplo 1" class="gallery-img w-full h-44 object-cover rounded-xl shadow-md hover:shadow-lg transition duration-300 cursor-pointer" onclick="openLightbox(this)">
                    <img src="tucuna2.png" alt="Tucunaré exemplo 2" class="gallery-img w-full h-44 object-cover rounded-xl shadow-md hover:shadow-lg transition duration-300 cursor-pointer" onclick="openLightbox(this)">
                    <img src="tucuna3.jpg" alt="Tucunaré exemplo 3" class="gallery-img w-full h-44 object-cover rounded-xl shadow-md hover:shadow-lg transition duration-300 cursor-pointer" onclick="openLightbox(this)">
                    <img src="tucuna4.jpg" alt="Tucunaré exemplo 4" class="gallery-img w-full h-44 object-cover rounded-xl shadow-md hover:shadow-lg transition duration-300 cursor-pointer" onclick="openLightbox(this)">
                    <img src="tucuna5.jpg" alt="Tucunaré exemplo 5" class="gallery-img w-full h-44 object-cover rounded-xl shadow-md hover:shadow-lg transition duration-300 cursor-pointer" onclick="openLightbox(this)">
                    <img src="tucuna6.webp" alt="Tucunaré exemplo 6" class="gallery-img w-full h-44 object-cover rounded-xl shadow-md hover:shadow-lg transition duration-300 cursor-pointer" onclick="openLightbox(this)">
                    <img src="tucuna7.jpg" alt="Tucunaré amarelo em lagoa" class="gallery-img w-full h-44 object-cover rounded-xl shadow-md hover:shadow-lg transition duration-300 cursor-pointer" onclick="openLightbox(this)">
                    <img src="tucuna8.jpg" alt="Tucunaré paca sendo solto" class="gallery-img w-full h-44 object-cover rounded-xl shadow-md hover:shadow-lg transition duration-300 cursor-pointer" onclick="openLightbox(this)">
                </div>
            </div>
        </section>

        <section id="autoria" class="py-16 bg-river-1 text-white">
            <div class="container mx-auto max-w-7xl px-5">
                <h2 class="text-2xl font-bold mb-1 border-b-2 border-white/20 pb-2 inline-block">Autoria e Colaboração 🧑‍💻</h2>
                <p class="text-lg text-white/80 mb-8">Este portal é um projeto educativo desenvolvido por entusiastas da ictiologia. Conecte-se aos autores e veja o código-fonte no GitHub:</p>

                <div class="grid md:grid-cols-2 gap-8">
                    
                    <div class="p-6 bg-white text-gray-900 rounded-xl shadow-2xl space-y-4">
                        <h3 class="text-xl font-semibold mb-3 text-river-1">Desenvolvedores</h3>
                        <div class="space-y-3">
                            <p>
                                <a href="https://github.com/d4nilo-sousa" target="_blank" class="flex items-center gap-2 no-underline text-river-1 hover:text-river-2 transition duration-200 font-medium">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 16 16" fill="currentColor"><path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.51.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.28.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2.0-.21.15-.46.55-.38C13.71 14.53 16 11.54 16 8c0-4.42-3.58-8-8-8z"/></svg>
                                    <strong>Danilo Sousa</strong>
                                </a>
                            </p>
                            <p>
                                <a href="https://github.com/eassis10" target="_blank" class="flex items-center gap-2 no-underline text-river-1 hover:text-river-2 transition duration-200 font-medium">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 16 16" fill="currentColor"><path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.51.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.28.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2.0-.21.15-.46.55-.38C13.71 14.53 16 11.54 16 8c0-4.42-3.58-8-8-8z"/></svg>
                                    <strong>Enzo Assis</strong>
                                </a>
                            </p>
                            <p>
                                <a href="https://github.com/Felipe-Silva07" target="_blank" class="flex items-center gap-2 no-underline text-river-1 hover:text-river-2 transition duration-200 font-medium">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 16 16" fill="currentColor"><path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.51.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.28.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2.0-.21.15-.46.55-.38C13.71 14.53 16 11.54 16 8c0-4.42-3.58-8-8-8z"/></svg>
                                    <strong>Felipe Barbosa</strong>
                                </a>
                            </p>
                            <p>
                                <a href="https://github.com/LeonardoBPNS" target="_blank" class="flex items-center gap-2 no-underline text-river-1 hover:text-river-2 transition duration-200 font-medium">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 16 16" fill="currentColor"><path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.51.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.28.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2.0-.21.15-.46.55-.38C13.71 14.53 16 11.54 16 8c0-4.42-3.58-8-8-8z"/></svg>
                                    <strong>Leonardo</strong>
                                </a>
                            </p>
                        </div>
                    </div>

                    <div class="p-6 text-white/90">
                        <h3 class="text-xl font-semibold mb-4 border-b border-white/20 pb-2">Informação e Licença</h3>
                        <p class="mb-4">Este é um projeto acadêmico e informativo. O conteúdo é baseado em pesquisa e visa promover o conhecimento sobre o tucunaré.</p>    
                        
                        <p class="mt-6 font-bold">Apoie a Pesca Sustentável:</p>
                        <p>Sempre pratique o Catch and Release em áreas vulneráveis para a preservação da espécie.</p>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <footer class="mt-16 py-8 bg-bg-light border-t border-river-1/10">
        <div class="container mx-auto max-w-7xl px-5">
            <div class="flex flex-wrap justify-between items-center gap-4">
                <div>
                    <div class="font-bold text-lg text-river-1">Webzoo</div>
                    <div class="text-muted text-sm">Portal informativo sobre o tucunaré • Projeto educativo</div>
                </div>

                <div class="text-muted text-sm">© <span id="ano"></span> Webzoo. Todos os direitos reservados.</div>

                <div class="socials flex gap-3">
                    <a href="#" aria-label="Instagram" title="Instagram" class="text-river-1 hover:text-river-2 transition duration-200">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M7 2h10a5 5 0 015 5v10a5 5 0 01-5 5H7a5 5 0 01-5-5V7a5 5 0 015-5z" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                            <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="1.2" />
                            <circle cx="18.5" cy="5.5" r="0.5" fill="currentColor" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <div id="lightboxModal" class="lightbox-modal" onclick="closeLightbox()">
        <img id="lightboxImage" class="lightbox-content rounded-xl shadow-2xl" src="" alt="Imagem expandida do Tucunaré">
    </div>

    <script>
        // Função para Abrir/Fechar Menu Mobile
        function toggleMenu(btn) {
            const ul = document.getElementById('navList');
            const open = ul.classList.toggle('hidden'); // Tailwind: oculta/exibe no mobile
            btn.setAttribute('aria-expanded', !open);
        }

        // Função para Lightbox (Expansão de Imagem)
        function openLightbox(imgElement) {
            const modal = document.getElementById('lightboxModal');
            const image = document.getElementById('lightboxImage');
            
            image.src = imgElement.src;
            image.alt = imgElement.alt;
            modal.classList.add('open');
            // Impede o scroll do body quando o modal está aberto
            document.body.style.overflow = 'hidden';
            
            // Impede que o clique na imagem feche o modal
            image.onclick = (e) => e.stopPropagation();
        }

        function closeLightbox() {
            const modal = document.getElementById('lightboxModal');
            modal.classList.remove('open');
            document.body.style.overflow = '';
        }

        // Atualiza o ano no rodapé
        document.getElementById('ano').textContent = new Date().getFullYear();

        // Highlighting do link ativo ao rolar
        const links = Array.from(document.querySelectorAll('.nav-link'));
        const sections = links.map(l => document.querySelector(l.getAttribute('href')));

        function onScroll() {
            const pos = window.scrollY + 100; // Ajuste para a altura da barra
            sections.forEach((sec, i) => {
                if (!sec) return;
                const top = sec.offsetTop;
                const bottom = top + sec.offsetHeight;
                
                if (pos >= top && pos < bottom) {
                    links.forEach(x => x.classList.remove('active'));
                    links[i].classList.add('active');
                }
            })
        }
        window.addEventListener('scroll', onScroll);
        onScroll();
    </script>
</body>

</html>