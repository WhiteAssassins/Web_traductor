<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Traductor de Texto</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
</head>
<body class="bg-cover bg-center bg-fixed" style="background-image: url('night.avif');">
    <!-- Tarjeta del Traductor -->
    <div class="h-screen flex justify-center items-center bg-opacity-70">
        <div class="translator-card p-10 rounded-xl shadow-lg animate__animated animate__fadeIn text-black bg-white">
            <h1 class="text-3xl font-semibold mb-6">Traductor de Texto</h1>
            <div class="mb-6">
                <label for="input-text" class="block font-medium mb-2">Texto a Traducir:</label>
                <textarea id="input-text" class="w-full p-3 rounded-md bg-gray-100 text-gray-800" placeholder="Ingrese el texto a traducir"></textarea>
            </div>
            <div class="mb-6">
                <label class="block font-medium mb-2">Idioma de Destino:</label>
                <select id="target-language" class="w-full p-3 rounded-md bg-gray-100 text-gray-800">
    <option value="af">Afrikáans</option>
    <option value="sq">Albanés</option>
    <option value="am">Amhárico</option>
    <option value="ar">Árabe</option>
    <option value="hy">Armenio</option>
    <option value="az">Azerí</option>
    <option value="eu">Euskera</option>
    <option value="bn">Bengalí</option>
    <option value="bs">Bosnio</option>
    <option value="bg">Búlgaro</option>
    <option value="my">Birmano</option>
    <option value="ca">Catalán</option>
    <option value="ceb">Cebuano</option>
    <option value="zh-CN">Chino Simplificado</option>
    <option value="zh-TW">Chino Tradicional</option>
    <option value="hr">Croata</option>
    <option value="cs">Checo</option>
    <option value="da">Danés</option>
    <option value="nl">Neerlandés</option>
    <option value="en">Inglés</option>
    <option value="eo">Esperanto</option>
    <option value="et">Estonio</option>
    <option value="tl">Filipino</option>
    <option value="fi">Finlandés</option>
    <option value="fr">Francés</option>
    <option value="gl">Gallego</option>
    <option value="ka">Georgiano</option>
    <option value="de">Alemán</option>
    <option value="el">Griego</option>
    <option value="gu">Gujarati</option>
    <option value="ht">Haitiano</option>
    <option value="ha">Hausa</option>
    <option value="haw">Hawaiano</option>
    <option value="iw">Hebreo</option>
    <option value="hi">Hindi</option>
    <option value="hmn">Hmong</option>
    <option value="hu">Húngaro</option>
    <option value="is">Islandés</option>
    <option value="ig">Igbo</option>
    <option value="id">Indonesio</option>
    <option value="ga">Irlandés</option>
    <option value="it">Italiano</option>
    <option value="ja">Japonés</option>
    <option value="jw">Javanés</option>
    <option value="kn">Kannada</option>
    <option value="kk">Kazajo</option>
    <option value="km">Khmer</option>
    <option value="ko">Coreano</option>
    <option value="ku">Kurdo</option>
    <option value="ky">Kirguís</option>
    <option value="lo">Laosiano</option>
    <option value="la">Latín</option>
    <option value="lv">Letón</option>
    <option value="lt">Lituano</option>
    <option value="lb">Luxemburgués</option>
    <option value="mk">Macedonio</option>
    <option value="mg">Malgache</option>
    <option value="ms">Malayo</option>
    <option value="ml">Malayalam</option>
    <option value="mt">Maltés</option>
    <option value="mi">Maorí</option>
    <option value="mr">Marathi</option>
    <option value="mn">Mongol</option>
    <option value="ne">Nepalí</option>
    <option value="no">Noruego</option>
    <option value="ny">Nyanja</option>
    <option value="ps">Pastún</option>
    <option value="fa">Persa</option>
    <option value="pl">Polaco</option>
    <option value="pt">Portugués</option>
    <option value="pa">Punyabí</option>
    <option value="ro">Rumano</option>
    <option value="ru">Ruso</option>
    <option value="sm">Samoano</option>
    <option value="sr">Serbio</option>
    <option value="st">Sesotho</option>
    <option value="sn">Shona</option>
    <option value="sd">Sindhi</option>
    <option value="si">Cingalés</option>
    <option value="sk">Eslovaco</option>
    <option value="sl">Esloveno</option>
    <option value="so">Somalí</option>
    <option value="es">Español</option>
    <option value="su">Sundanés</option>
    <option value="sw">Suajili</option>
    <option value="sv">Sueco</option>
    <option value="tg">Tayiko</option>
    <option value="ta">Tamil</option>
    <option value="te">Telugu</option>
    <option value="th">Tailandés</option>
    <option value="tr">Turco</option>
    <option value="uk">Ucraniano</option>
    <option value="ur">Urdu</option>
    <option value="ug">Uigur</option>
    <option value="uz">Uzbeko</option>
    <option value="vi">Vietnamita</option>
    <option value="cy">Galés</option>
    <option value="xh">Xhosa</option>
    <option value="yi">Yidis</option>
    <option value="yo">Yoruba</option>
    <option value="zu">Zulú</option>
</select>


            </div>
            <div class="flex justify-center">
                <button id="translate-button" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Traducir</button>
            </div>
            <div id="output-text" class="text-lg mt-6"></div>
            <br>
            <button id="listen-button" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded">Escuchar</button>
        </div>
    </div>
    <script src="script.js"></script>

    <script>
   $(document).ready(function () {
            // Inicializa Select2 en la lista desplegable de idiomas
            $('#target-language').select2({
                theme: 'classic',
                dropdownCssClass: 'select2-dropdown-custom',
                width: '100%', // Ajusta el ancho del menú desplegable
                closeOnSelect: false, // Permite seleccionar múltiples idiomas
            });
            
            // Agrega un botón de búsqueda al menú desplegable
            $('#target-language').select2('open');
            var searchInput = $('.select2-search__field');
            searchInput.attr('placeholder', 'Buscar idioma...');
        });
</script>
</body>
</html>
