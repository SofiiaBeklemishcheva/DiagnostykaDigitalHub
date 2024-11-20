# Formularz Laravel

Formularz Laravel to aplikacja, która umożliwia generowanie i obsługę formularzy HTML w PHP z dynamiczną walidacją danych oraz przesyłaniem formularzy. Dzięki zastosowaniu wzorców projektowych i dobrej organizacji kodu, aplikacja jest łatwa w rozbudowie i dostosowaniu do różnych potrzeb.

## Funkcjonalności

- **Generowanie formularzy HTML**: Aplikacja generuje formularze z różnymi typami pól (tekst, e-mail, textarea) oraz umożliwia dostosowanie atrybutów formularza, takich jak `action`, `method`, `name`, `required` i `class`.
- **Obsługa walidacji danych**: Formularz waliduje dane po stronie serwera, sprawdzając m.in. poprawność e-maila, długość imienia i opcjonalne ograniczenia na pole opis.
- **Dynamiczne generowanie pól z możliwością ustalenia customizowanych styli**: Formularze mogą zawierać różne typy pól, np. tekstowe, e-mail, textarea.
- **Przykładowa strona**: Prosta aplikacja umożliwia wyświetlanie formularza oraz przesyłanie danych.

## Instalacja

1. Skopiuj repozytorium na swój komputer:
   git clone https://github.com/twoje-repozytorium/formularz-laravel.git
   cd formularz-laravel
2. Zainstaluj zależności:
composer install
3. Upewnij się, że masz zainstalowaną odpowiednią wersję PHP (min. 7.4).
4. Skonfiguruj środowisko: Skopiuj plik .env.example na .env:
cp .env.example .env
5. Ustaw klucz aplikacji:
php artisan key:generate
6. Uruchom serwer lokalny:
php artisan serve

Aplikacja będzie dostępna pod adresem: http://localhost:8000. Przykładowa strona z formularzami znajduje się pod adresem: http://localhost:8000/home.


## Struktura plików
Folder app/Http/Controllers/
  Controller.php: 
          Klasa Controller jest klasą bazową dla wszystkich kontrolerów w aplikacji.
          Zawiera metodę errorResponse, która ułatwia zwracanie odpowiedzi w formacie JSON w przypadku wystąpienia błędów. Jest to funkcja pomocnicza, która przyjmuje wiadomość o błędzie oraz opcjonalny status (domyślnie 400), a następnie zwraca odpowiedź JSON.
          Klasa ta jest używana jako fundament dla innych kontrolerów, które mogą korzystać z tej metody, aby wysłać odpowiedź błędu do klienta.
          
  FormProcessingController.php 
          Kontroler FormProcessingController obsługuje logikę przetwarzania formularzy w aplikacji.
          W konstruktorze: Wstrzykiwany jest serwis FormProcessingService, który odpowiada za dalszą logikę przetwarzania danych formularza.
          Metoda submitForm: Obsługuje przesyłanie ogólnych formularzy (np. kontaktowych). Po otrzymaniu danych formularza, metoda wywołuje usługę FormProcessingService i przetwarza dane. Jeśli wystąpią błędy walidacji, użytkownik jest przekierowywany z komunikatem o błędach. W przypadku sukcesu, użytkownik otrzymuje komunikat o powodzeniu operacji.
          Metoda submitCakeOrder: Przesyła dane formularza zamówienia ciasta, gdzie dane są wstępnie walidowane. Po pomyślnej walidacji dane są przetwarzane przez serwis FormProcessingService. Jeśli wystąpią błędy walidacji, zwracane są odpowiednie komunikaty. W przeciwnym razie, użytkownik otrzymuje komunikat o pomyślnym złożeniu zamówienia.
          Wartość zwrócona z metody process w serwisie FormProcessingService jest obiektem zawierającym informacje o statusie i ewentualnych błędach.
  
  FormViewController.php 
          Kontroler FormViewController odpowiada za generowanie widoków formularzy.
          Implementuje interfejs FormViewInterface, który zapewnia spójność i wymusza implementację metody showForm.
          Metoda showForm: Ta metoda renderuje widok formularza (w tym przypadku form.blade.php) i przekazuje do niego dane. W tym przypadku, metoda przekazuje maxDate, które jest generowane przez pomocniczą klasę DateInputHelper. Dzięki temu pole daty w formularzu ma ustawioną maksymalną datę (np. dwa dni od dzisiaj).
          Widok formularza może zawierać formularz HTML z dynamicznie generowanymi danymi, takimi jak maksymalna data.

Folder app/Http/Interfaces/
  FormProcessingInterface.php – Interfejs dla procesów przetwarzania formularza
          FormProcessingInterface definiuje kontrakt dla klas, które będą odpowiedzialne za przetwarzanie danych formularza w aplikacji.
          Zawiera jedną metodę: submitForm(Request $request): Metoda ta powinna obsługiwać dane przesyłane w formularzu. Przyjmuje obiekt Request (który zawiera dane formularza) i zwraca wynik przetwarzania tych danych (np. potwierdzenie, komunikat o błędzie lub dane z wynikami).
  
  FormViewInterface.php – Interfejs dla wyświetlania formularzy
          FormViewInterface definiuje kontrakt dla klas, które mają odpowiadać za generowanie i wyświetlanie formularzy w aplikacji.
          Zawiera jedną metodę: showForm(): Metoda ta powinna odpowiedzialna za renderowanie formularza w widoku (np. blade.php). Może zawierać dane, które są niezbędne do poprawnego wyświetlenia formularza (np. ustawienia dat, dynamiczne wartości w polach formularza).

Folder app/Http/Providers/
  AppServiceProvider.php – Dostawca usług aplikacji
    AppServiceProvider jest dostawcą usług w aplikacji Laravel, który jest odpowiedzialny za rejestrację i konfigurację komponentów Blade, które będą używane w widokach aplikacji.
    Metoda register() – ta metoda jest przeznaczona do rejestrowania usług w aplikacji, jednak w tym przypadku nie zawiera żadnej logiki rejestracji, ponieważ komponenty są rejestrowane w metodzie boot().
    Metoda boot() – metoda ta jest wywoływana po zarejestrowaniu wszystkich usług i jest wykorzystywana do rejestrowania komponentów Blade. W tej metodzie są zarejestrowane różne komponenty, które będą używane w widokach aplikacji.
    
    Komponenty Blade:
      Header i Footer – rejestracja komponentów nagłówka i stopki, które są wykorzystywane w widokach.
      TextInput, TextareaInput, SelectInput, DateInput, EmailInput – komponenty reprezentujące różne typy pól formularzy. Są to komponenty odpowiedzialne za renderowanie odpowiednich pól wejściowych w formularzach HTML.
      SubmitInput – komponent przycisku wysyłania formularza.
      ContactForm i CakeOrderForm – komponenty formularzy, które mogą być używane do generowania formularzy kontaktowych oraz formularzy zamówienia ciasta.

Folder app/View/Components/Buttons
  SubmitInput – Klasa reprezentująca komponent przycisku formularza.
    Klasa dziedziczy po BaseComponent i pozwala na generowanie przycisku typu "submit".
    W konstruktorze przyjmuje label (tekst na przycisku), attributes (dodatkowe atrybuty HTML) oraz containerClass (klasa CSS kontenera).
    Metoda render() renderuje widok przycisku przy użyciu szablonu components.buttons.submit-input.
    Plik widoku: resources/views/components/buttons/submit-input.blade.php
      CSS (submit-input.css): Dodaje style do przycisku, np. klasy .btn i efekty hover.
      $containerClass: Umożliwia dostosowanie klasy CSS kontenera przycisku.
      $attributes->merge: Łączy domyślne atrybuty (np. class='btn', type='submit') z dodatkowymi, przekazanymi przez użytkownika.

      
Folder: app/View/Components/Input
Folder zawiera różne komponenty formularzy, które umożliwiają tworzenie rozmaitych typów pól wejściowych. Każdy komponent jest odpowiedzialny za wygenerowanie określonego typu pola formularza z odpowiednimi atrybutami i klasami CSS. Poniżej przedstawiam szczegóły plików w tym folderze:

1. BaseFormInput – Klasa bazowa dla pól formularza
    Klasa bazowa dla komponentów wejściowych (input). Przechowuje właściwości związane z klasami CSS dla kontenera, etykiety i samego pola, a także ID, nazwy i wartości.
    Konstruktor: Przyjmuje klasy CSS (inputContainerClass, inputLabelClass, inputFieldClass), ID, etykietę, nazwę i wartość.
    Wykorzystanie: Służy jako podstawowa klasa do rozszerzenia przez inne komponenty.
2. CakeOrderForm – Komponent formularza zamówienia tortu
   Formularz zamówienia tortu zawiera różne pola wejściowe, takie jak tekstowe (np. data zamówienia, imię klienta), email, select (np. rodzaj biszkopta) oraz textarea.
    Renderowanie: Łączy się z widokiem components.forms.cake-order-form.
3. ContactForm – Komponent formularza kontaktowego
   Formularz kontaktowy zawiera pola tekstowe dla imienia, emaila oraz textarea na wiadomość. Wszystkie pola są wymagane.
   Renderowanie: Łączy się z widokiem components.forms.contact-form.
4. DateInput – Komponent pola daty
   Tworzy pole wejściowe typu date. Wykorzystuje klasę BaseFormInput do zarządzania klasami CSS i właściwościami.
   Renderowanie: Łączy się z widokiem components.input.date-input.
5. EmailInput – Komponent pola email
    Tworzy pole wejściowe typu email z możliwością oznaczenia jako wymagane.
    Renderowanie: Łączy się z widokiem components.input.email-input.
6. SelectInput – Komponent pola select
  Tworzy pole typu select z przekazywanymi opcjami, wartością domyślną i możliwością oznaczenia pola jako wymagane.
  Renderowanie: Łączy się z widokiem components.input.select-input.
7. TextareaInput – Komponent pola tekstowego
   Tworzy pole wejściowe typu textarea. Umożliwia wpisywanie dłuższych tekstów, np. opisu.
  Renderowanie: Łączy się z widokiem components.input.textarea-input.
8. TextInput – Komponent pola tekstowego
   Tworzy pole wejściowe typu text, umożliwiając wpisanie tekstu. Możliwość oznaczenia jako wymagane.
  Renderowanie: Łączy się z widokiem components.input.text-input.
Zawartość widoków
Każdy z powyższych komponentów łączy się z odpowiednimi widokami, które generują HTML dla danego pola formularza. Przykłady widoków:

date-input.blade.php: Generuje pole typu date z odpowiednimi klasami CSS.
email-input.blade.php: Generuje pole typu email, uwzględniając atrybut required, jeśli jest to konieczne.
select-input.blade.php: Generuje rozwijane pole select z opcjami.
textarea-input.blade.php: Generuje pole textarea z odpowiednimi klasami i atrybutami.
text-input.blade.php: Generuje pole text z odpowiednimi atrybutami.
Przykład użycia w formularzu
Komponenty wejściowe są używane w formularzach, jak np. formularz zamówienia tortu, gdzie różne typy pól (tekstowe, email, select, textarea) są używane do zebrania danych od użytkownika. Przykład formularza cake-order-form, gdzie Każdy komponent odpowiednio generuje HTML dla swojego pola, a atrybuty takie jak name, id, label, value są dynamicznie przekazywane do widoku.

Folder app/Services/
  DateInputHelper.php – Helper do obsługi daty w formularzach, zapewniający walidację daty.
  FormProcessingService.php – Serwis odpowiedzialny za walidację danych i przetwarzanie formularzy.
  EmailInputHelper.php – Helper do obsługi walidacji i ustawiania atrybutów dla pola e-mail.
  NameInputHelper.php – Helper dla walidacji i ustawiania atrybutów pola imienia.
  MessageInputHelper.php – Helper do obsługi pola tekstowego z opisem.

Folder routes/
web.php – Główne definicje tras (routy) w aplikacji, np. /contact i /cake-order.
