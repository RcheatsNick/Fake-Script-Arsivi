
(function($) {
    $.fn.validationEngineLanguage = function() {};
    $.validationEngineLanguage = {
        newLang: function() {
            $.validationEngineLanguage.allRules =     {
                    "required":{                // Add your regex rules here, you can take telephone as an example
                        "regex":"none",
                        "alertText":"* Bu alan zorunlu.",
                        "alertTextCheckboxMultiple":"* Treff eine Entscheidung",
                        "alertTextCheckboxe":"* Genel İş Şartları'nı kabul etmedin."},
                    "length":{
                        "regex":"none",
                        "alertText":"* Karakter sayısı: ",
                        "alertText2":" ile ",
                        "alertText3":" arasında karakter kullanılabilir."},
                    "maxCheckbox":{
                        "regex":"none",
                        "alertText":"* Checks allowed Exceeded"},
                    "minCheckbox":{
                        "regex":"none",
                        "alertText":"* Bitte wähle ",
                        "alertText2":" Optionen"},
                    "confirm":{
                        "regex":"none",
                        "alertText":"* Bu alanlar birbirleriyle uyuşmuyor."},
                    "telephone":{
                        "regex":"/^[0-9\-\(\)\ ]+$/",
                        "alertText":"* Unzulässige Telefonnummer"},
                    "email":{
                        "regex":"/^[a-zA-Z0-9_\\.\\-]+\\@([a-zA-Z0-9\\-]+\\.)+[a-zA-Z0-9]{2,4}$/",
                        "alertText":"* Dikkat, E-Posta adresiniz doğru değil."},
                    "date":{
                         "regex":"/^[0-9]{4}\-\[0-9]{1,2}\-\[0-9]{1,2}$/",
                         "alertText":"* Invalid date, must be in YYYY-MM-DD format"},
                    "onlyNumber":{
                        "regex":"/^[0-9\ ]+$/",
                        "alertText":"* Bitte nur Nummern"},
                    "noSpecialCharacters":{
                        "regex":"/^[0-9a-zA-Z]*$/",
                        "alertText":"* Özel karakterler kullanılamaz"},
                    "noSpecialCharactersForLogin":{
                        "regex":"/^[0-9a-zA-Z_]*$/",
                        "alertText":"* Özel karakterler kullanılamaz"},
                    "onlyValidPasswordCharacters":{
                        "regex":"/^[a-zA-Z0-9 @!#$%&(){}*+,\-./:;<>=?[\\]\^_|~]*$/",
                        "alertText":"* Özel karakterler kullanılamaz"},
                    "ajaxUser":{
                        "file":"../validateUser.php",
                        "alertTextOk":"* Dieser Benutzername ist verfügbar",
                        "alertTextLoad":"* Bitte warten es wird geladen.",
                        "alertText":"* Dieser Benutzername ist nicht mehr verfügbar"},
                    "ajaxName":{
                        "file":"../validateUser.php",
                        "alertText":"* Dieser Benutzername ist nicht mehr verfügbar",
                        "alertTextOk":"* Dieser Benutzername ist verfügbar",
                        "alertTextLoad":"* Bitte warten es wird geladen."},
                    "onlyLetter":{
                        "regex":"/^[a-zA-Z\ \']+$/",
                        "alertText":"* Nur Zeichen verwenden."}
                    }
        }
    }
})(jQuery);

$(document).ready(function() {
    $.validationEngineLanguage.newLang()
});