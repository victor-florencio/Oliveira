<!DOCTYPE html>
<html lang="pt-BR" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Jardineiros Profissionais</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap"
    rel="stylesheet"
  />
  <style>
    body {
      font-family: 'Montserrat', sans-serif;
    }
    /* Navbar background transition */
    #navbar {
      transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }
    #navbar.scrolled {
      background-color: #ffffffcc;
      box-shadow: 0 2px 8px rgb(0 0 0 / 0.1);
      backdrop-filter: saturate(180%) blur(10px);
    }
  </style>
</head>
<body class="bg-gray-50 text-gray-800">

  <!-- NAVBAR -->
  <nav id="navbar" class="fixed w-full top-0 left-0 z-50">
    <div class="max-w-7xl mx-auto flex items-center justify-between px-6 py-4">
      <!-- Logo -->
      <a href="#" class="flex items-center space-x-3">
        <img
          src="https://img.icons8.com/ios-filled/48/22c55e/plant-under-sun--v1.png"
          alt="Logo Jardineiros"
          class="h-10 w-10"
        />
        <span class="text-2xl font-bold text-green-600">Jardineiros</span>
      </a>

      <!-- Menu Desktop -->
      <ul class="hidden md:flex items-center space-x-8 font-medium">
        <li>
          <a href="#home" class="hover:text-green-600 transition duration-200">Home</a>
        </li>
        <li class="relative group">
          <button
            class="flex items-center space-x-1 hover:text-green-600 transition duration-200 focus:outline-none"
          >
            <span>Serviços</span>
            <svg
              class="w-4 h-4 text-green-600 group-hover:text-green-800"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>

          <!-- Dropdown -->
          <ul
            class="absolute left-0 top-full mt-2 w-48 bg-white rounded-lg shadow-lg opacity-0 group-hover:opacity-100 invisible group-hover:visible transition-opacity duration-300"
          >
            <li>
              <a
                href="#jardinagem"
                class="block px-4 py-2 hover:bg-green-50 hover:text-green-700"
                >Jardinagem</a
              >
            </li>
            <li>
              <a
                href="#poda"
                class="block px-4 py-2 hover:bg-green-50 hover:text-green-700"
                >Poda de Árvores</a
              >
            </li>
            <li>
              <a
                href="#consultoria"
                class="block px-4 py-2 hover:bg-green-50 hover:text-green-700"
                >Consultoria</a
              >
            </li>
          </ul>
        </li>
        <li>
          <a href="#sobre" class="hover:text-green-600 transition duration-200">Sobre</a>
        </li>
        <li>
          <a href="#contato" class="hover:text-green-600 transition duration-200">Contato</a>
        </li>
      </ul>

      
      <!-- Mobile menu button -->
      <button
        id="btnMobileMenu"
        class="md:hidden focus:outline-none text-green-600 hover:text-green-800"
        aria-label="Abrir menu"
      >
        <svg
          class="w-8 h-8"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16"></path>
        </svg>
      </button>
    </div>

    <!-- Mobile menu -->
    <div
      id="mobileMenu"
      class="hidden md:hidden bg-white border-t border-green-200 shadow-lg"
    >
      <ul class="flex flex-col px-6 py-4 space-y-2 font-medium">
        <li><a href="#home" class="block py-2 hover:text-green-600">Home</a></li>

        <li>
          <button
            id="btnMobileDropdown"
            class="flex justify-between items-center w-full py-2 hover:text-green-600 focus:outline-none"
          >
            Serviços
            <svg
              id="iconDropdown"
              class="w-5 h-5 text-green-600 transition-transform duration-300"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>

          <ul id="submenuMobile" class="hidden flex-col mt-2 pl-4 border-l border-green-200">
            <li>
              <a href="#jardinagem" class="block py-1 hover:text-green-600">Jardinagem</a>
            </li>
            <li>
              <a href="#poda" class="block py-1 hover:text-green-600">Poda de Árvores</a>
            </li>
            <li>
              <a href="#consultoria" class="block py-1 hover:text-green-600">Consultoria</a>
            </li>
          </ul>
        </li>

        <li><a href="#sobre" class="block py-2 hover:text-green-600">Sobre</a></li>
        <li><a href="#contato" class="block py-2 hover:text-green-600">Contato</a></li>
        <li>
          <a
            href="#login"
            class="block py-2 px-4 rounded-md bg-green-600 text-white font-semibold text-center hover:bg-green-700"
            >Login / Cadastro</a
          >
        </li>
      </ul>
    </div>
  </nav>

  <!-- HERO SECTION -->
  <section
    id="home"
    class="relative h-screen flex items-center justify-center text-center text-white"
    style="
      background-image: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1470&q=80');
      background-size: cover;
      background-position: center;
    "
  >
    <div class="absolute inset-0 bg-black/50"></div>
    <div class="relative max-w-3xl px-6">
      <h1 class="text-5xl md:text-6xl font-extrabold drop-shadow-lg">
        Cuidamos do seu jardim com amor e profissionalismo
      </h1>
      <p class="mt-6 text-lg md:text-xl drop-shadow-md">
        Serviços de jardinagem, poda, manutenção e consultoria especializada
      </p>
      <a
        href="#contato"
        class="inline-block mt-10 px-8 py-3 bg-green-600 rounded-lg text-white font-semibold text-lg hover:bg-green-700 transition"
        >Solicite um orçamento</a
      >
    </div>
  </section>

  <!-- SERVICES SECTION -->
  <section id="servicos" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">
      <h2 class="text-4xl font-bold text-center text-green-700 mb-14">Nossos Serviços</h2>
      <div class="grid md:grid-cols-3 gap-10">
        <div class="bg-green-50 rounded-xl p-8 shadow-lg hover:shadow-2xl transition-shadow duration-300">
          <img
            src="https://img.icons8.com/fluency/96/22c55e/hedge.png"
            alt="Jardinagem"
            class="mx-auto mb-6"
          />
          <h3 class="text-xl font-semibold mb-3 text-green-800 text-center">Jardinagem</h3>
          <p class="text-gray-700 text-center">
            Manutenção e plantio para jardins residenciais e comerciais. Cuidamos de flores,
            plantas e gramados.
          </p>
        </div>
        <div class="bg-green-50 rounded-xl p-8 shadow-lg hover:shadow-2xl transition-shadow duration-300">
          <img
            src="https://img.icons8.com/fluency/96/22c55e/tree-swing.png"
            alt="Poda de Árvores"
            class="mx-auto mb-6"
          />
          <h3 class="text-xl font-semibold mb-3 text-green-800 text-center">Poda de Árvores</h3>
          <p class="text-gray-700 text-center">
            Serviços de poda para melhorar a saúde das árvores e garantir segurança ao seu entorno.
          </p>
        </div>
        <div class="bg-green-50 rounded-xl p-8 shadow-lg hover:shadow-2xl transition-shadow duration-300">
          <img
            src="https://img.icons8.com/fluency/96/22c55e/consultation.png"
            alt="Consultoria"
            class="mx-auto mb-6"
          />
          <h3 class="text-xl font-semibold mb-3 text-green-800 text-center">Consultoria</h3>
          <p class="text-gray-700 text-center">
            Avaliação e planejamento para seu jardim ideal, com recomendações de plantas e cuidados.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- TESTIMONIALS -->
  <section id="depoimentos" class="py-20 bg-green-100">
    <div class="max-w-5xl mx-auto px-6">
      <h2 class="text-4xl font-bold text-center text-green-700 mb-12">O que dizem nossos clientes</h2>
      <div class="space-y-10 md:flex md:space-x-8 md:space-y-0">
        <blockquote class="bg-white p-8 rounded-xl shadow-md md:w-1/3">
          <p class="text-gray-800 italic">
            "Equipe muito profissional e dedicada! Meu jardim nunca esteve tão bonito."
          </p>
          <footer class="mt-4 text-right font-semibold text-green-700">- Ana Silva</footer>
        </blockquote>
        <blockquote class="bg-white p-8 rounded-xl shadow-md md:w-1/3">
          <p class="text-gray-800 italic">
            "Serviço de poda impecável e muito atenciosos com os detalhes."
          </p>
          <footer class="mt-4 text-right font-semibold text-green-700">- Carlos Souza</footer>
        </blockquote>
        <blockquote class="bg-white p-8 rounded-xl shadow-md md:w-1/3">
          <p class="text-gray-800 italic">
            "Consultoria que realmente entendeu o que eu queria e superou as expectativas."
          </p>
          <footer class="mt-4 text-right font-semibold text-green-700">- Mariana Lima</footer>
        </blockquote>
      </div>
    </div>
  </section>

  <!-- CONTACT SECTION -->
  <section id="jardineiro" class="py-20 bg-white">
  <div class="max-w-5xl mx-auto px-6">
    <h2 class="text-4xl font-bold text-center text-green-700 mb-12">Peça um Serviço de Jardinagem</h2>

    <!-- Formulário de pedido -->
    <form
      action="enviar.php"
      method="POST"
      class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-3xl mx-auto mb-16"
    >
      <input
        type="text"
        name="nome_cliente"
        placeholder="Seu nome"
        required
        class="p-4 border border-gray-300 rounded-lg focus:outline-green-500"
      />
      <input
        type="text"
        name="localidade"
        placeholder="Localidade"
        required
        class="p-4 border border-gray-300 rounded-lg focus:outline-green-500 focus:ring-2 focus:ring-green-400"
      />
      <select
        name="tipo_servico"
        required
        class="p-4 border border-gray-300 rounded-lg focus:outline-green-500 focus:ring-2 focus:ring-green-400"
      >
        <option value="" disabled selected>Tipo de Serviço</option>
        <option value="corte_grama">Corte de Grama</option>
        <option value="poda_arbustos">Poda de Arbustos</option>
        <option value="plantio">Plantio de Flores/Plantas</option>
        <option value="limpeza_area">Limpeza de Área</option>
        <option value="outros">Outros</option>
      </select>
    
      <textarea
        name="detalhes"
        rows="4"
        placeholder="Descreva o serviço desejado"
        required
        class="md:col-span-2 p-4 border border-gray-300 rounded-lg focus:outline-green-500 focus:ring-2 focus:ring-green-400 resize-none"
      ></textarea>
      <button
        type="submit"
        class="md:col-span-2 bg-green-600 hover:bg-green-700 text-white font-semibold py-4 rounded-lg transition duration-300"
      >
        Solicitar Serviço
      </button>
    </form>

    <!-- Lista de jardineiros locais -->
    <h3 class="text-3xl font-semibold text-green-700 mb-8 text-center">Jardineiros Locais</h3>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
      <!-- Card do jardineiro (exemplo) -->
      <div class="border border-gray-300 rounded-lg p-6 shadow hover:shadow-lg transition duration-300">
        <h4 class="text-xl font-bold mb-2">João Silva</h4>
        <p class="text-gray-700 mb-2">Especialista em poda e limpeza</p>
        <p class="text-green-600 font-semibold mb-4">Contato: (11) 99999-9999</p>
        <button class="bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded transition duration-300 w-full">
          Contratar
        </button>
      </div>

      <div class="border border-gray-300 rounded-lg p-6 shadow hover:shadow-lg transition duration-300">
        <h4 class="text-xl font-bold mb-2">Maria Oliveira</h4>
        <p class="text-gray-700 mb-2">Plantio e manutenção de jardins</p>
        <p class="text-green-600 font-semibold mb-4">Contato: (21) 98888-8888</p>
        <button class="bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded transition duration-300 w-full">
          Contratar
        </button>
      </div>

      <!-- Você pode repetir os cards ou gerar dinamicamente -->
    </div>
  </div>
</section>


  <!-- FOOTER -->
  <footer class="bg-green-800 text-green-100 py-10">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-10">
      <div>
        <h3 class="text-xl font-bold mb-4">Jardineiros Profissionais</h3>
        <p class="text-sm leading-relaxed">
          Cuidamos do seu jardim com amor e profissionalismo. Atendimento personalizado e serviços de qualidade.
        </p>
      </div>

      <div>
        <h3 class="text-xl font-bold mb-4">Links Rápidos</h3>
        <ul class="space-y-2 text-sm">
          <li><a href="#home" class="hover:underline">Home</a></li>
          <li><a href="#servicos" class="hover:underline">Serviços</a></li>
          <li><a href="#sobre" class="hover:underline">Sobre</a></li>
          <li><a href="#contato" class="hover:underline">Contato</a></li>
        </ul>
      </div>

      <div>
        <h3 class="text-xl font-bold mb-4">Contato</h3>
        <p class="text-sm">📞 (11) 99999-9999</p>
        <p class="text-sm">📧 contato@jardineiros.com.br</p>
        <p class="text-sm">📍 Rua das Flores, 123 - São Paulo, SP</p>
        <div class="flex space-x-4 mt-4">
          <a href="#" aria-label="Facebook" class="hover:text-green-300">
            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M22 12a10 10 0 1 0-11.6 9.8v-6.9h-2v-2.9h2v-2.2c0-2 1.2-3.2 3-3.2.9 0 1.8.1 1.8.1v2h-1c-1 0-1.3.6-1.3 1.2v1.9h2.3l-.4 2.9h-1.9v6.9A10 10 0 0 0 22 12z"/></svg>
          </a>
          <a href="#" aria-label="Instagram" class="hover:text-green-300">
            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M7 2C4 2 2 4 2 7v10c0 3 2 5 5 5h10c3 0 5-2 5-5V7c0-3-2-5-5-5H7zm0 2h10c1.7 0 3 1.3 3 3v10c0 1.7-1.3 3-3 3H7c-1.7 0-3-1.3-3-3V7c0-1.7 1.3-3 3-3zm5 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm0 2a3 3 0 1 1 0 6 3 3 0 0 1 0-6zm4.8-.2a1.2 1.2 0 1 1-2.4 0 1.2 1.2 0 0 1 2.4 0z"/></svg>
          </a>
          <a href="#" aria-label="Twitter" class="hover:text-green-300">
            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M23 3a10.9 10.9 0 0 1-3.14.86 4.48 4.48 0 0 0 1.98-2.48 9.06 9.06 0 0 1-2.83 1.08 4.52 4.52 0 0 0-7.7 4.12A12.82 12.82 0 0 1 3 4.16a4.52 4.52 0 0 0 1.39 6.05 4.48 4.48 0 0 1-2.05-.57v.06a4.53 4.53 0 0 0 3.62 4.44 4.52 4.52 0 0 1-2.04.08 4.52 4.52 0 0 0 4.21 3.13 9.04 9.04 0 0 1-5.6 1.93A9.27 9.27 0 0 1 2 18.57 12.7 12.7 0 0 0 8.29 20c7.55 0 11.68-6.26 11.68-11.68 0-.18 0-.35-.01-.53A8.18 8.18 0 0 0 23 3z"/></svg>
          </a>
        </div>
      </div>
    </div>
    <div class="text-center text-sm mt-10 opacity-75">
      &copy; 2025 Jardineiros Profissionais. Todos os direitos reservados.
    </div>
  </footer>

  <script>
    // Navbar scroll effect
    window.addEventListener('scroll', () => {
      const navbar = document.getElementById('navbar');
      if(window.scrollY > 50) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });

    // Mobile menu toggle
    const btnMobileMenu = document.getElementById('btnMobileMenu');
    const mobileMenu = document.getElementById('mobileMenu');
    btnMobileMenu.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });

    // Mobile submenu toggle
    const btnMobileDropdown = document.getElementById('btnMobileDropdown');
    const submenuMobile = document.getElementById('submenuMobile');
    const iconDropdown = document.getElementById('iconDropdown');
    btnMobileDropdown.addEventListener('click', () => {
      submenuMobile.classList.toggle('hidden');
      iconDropdown.classList.toggle('rotate-180');
    });
  </script>
</body>
</html>

