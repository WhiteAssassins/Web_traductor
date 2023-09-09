const apiKey = 'TU_CLAVE_DE_API';

$(document).ready(function () {
    $('#translate-button').click(function () {
        const inputText = $('#input-text').val();
        const targetLanguage = $('#target-language').val(); // Obtiene el idioma seleccionado

        $.ajax({
            url: 'https://translate.googleapis.com/translate_a/single',
            type: 'GET',
            dataType: 'json',
            data: {
                client: 'gtx',
                sl: 'auto',
                tl: targetLanguage, // Utiliza el idioma seleccionado
                dt: 't',
                q: inputText,
            },
            success: function (response) {
                const translatedText = response[0][0][0];
                $('#output-text').text(translatedText);
            },
            error: function () {
                $('#output-text').text('Error al traducir el texto.');
            },
        });
    });
});

// Define una función para convertir texto en voz
function textToSpeech(text) {
    const synthesis = window.speechSynthesis;
    const utterance = new SpeechSynthesisUtterance(text);
    synthesis.speak(utterance);
}

// Agrega un evento de clic al botón "Traducir"
$('#translate-button').click(function () {
    const inputText = $('#input-text').val();
    const targetLanguage = $('#target-language').val(); // Obtiene el idioma seleccionado

    $.ajax({
        url: 'https://translate.googleapis.com/translate_a/single',
        type: 'GET',
        dataType: 'json',
        data: {
            client: 'gtx',
            sl: 'auto',
            tl: targetLanguage, // Utiliza el idioma seleccionado
            dt: 't',
            q: inputText,
        },
        success: function (response) {
            const translatedText = response[0][0][0];
            $('#output-text').text(translatedText);
        },
        error: function () {
            $('#output-text').text('Error al traducir el texto.');
        },
    });
});