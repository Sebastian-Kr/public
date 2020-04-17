I. WSTĘPNE ZAŁOŻENIA DOTYCZĄCE FUNKCJONALNOŚCI APLIKACJI NA PROJEKT ZALICZENIOWY AGH PAW 2017

1. Możliwość rezerwacji dowolnej ilość i rodzaju usługi/towaru --
administrator będzie miał możliwość dodawania nowych towarów do modułu
rezerwacji.
2. Rezerwacja przez formularz online dla klienta.
3. Powiadomienia mailowe z potwierdzeniem rezerwacji dla klienta.
4. Możliwość definiowania przedziałów czasowych dla rezerwacji --
formularz z interaktywnym kalendarzem i informacją o terminach
dostępności towarów.
5. Blokowanie rezerwacji towarów niedostępnych (podwójne sprawdzanie
dostępności: dla wybranego czasu i dla towaru).
6. Możliwość akceptowania lub anulowania rezerwacji z dla
administracji.
7. Możliwość zrobienia rezerwacji przez administratora od strony
zaplecza.
8. Powiadomienia mailowe dla zmian w rezerwacjach wykonanych z poziomu
zaplecza.

II. FUNKCJONALNOŚCI ZREALIZOWANEJ APLIKACJI
Wszystkie zadeklarowane w założeniach w punkcie pierwszym funkcjonalności zostały
zrealizowane.
Do projektu została przygotowana również warstwa frontend – przykładowa, kompletna strona
internetowa szkoły rysunku, do której można było wdrożyć moduł rezerwacji. Na przykładowej
stronie jest to moduł rezerwacji kursów plastycznych, ale stworzona aplikacja daje możliwość
wdrożenia również na stronach o innej tematyce.
Dodatkowo w projekcie zostały wdrożone dodatkowe elementy nie wymienione w początkowej
specyfikacji, ale które powinny znajdować się na tego typu aplikacji w wersji produkcyjnej:
- walidacja formularza po stronie klienta
- interaktywny kalendarz jQuery
- integracja z systemem płatności DotPay
- panel logowania dla administartorów razem z zabezpieczeniem dostępu do podstron
administracyjnych.
- możliwość definiowania koloru kursu z zaplecza (funkcjonalność estetyczna)
- powiadomienie o aktualnie zalogowanym użytkowniku i możliwość wylogowania
- możliwość dodawania statusów do zamówienia i edycji ich z poziomu panelu administracyjnego

III.TECHNOLOGIE UŻYTE W PROJEKCIE
Serwer Apache 2.4.25
PHP 5.6.31
Baza danych MySQL 5.6.35
JavaScript + jQuery v3.2.1
jQuery UI v1.12.1
Bootstrap 4.0.0

IV. GOTOWA APLIKACJA JEST DOSTĘPNA NA:
http://progremo.pl/AGH-PAW-2017/
http://progremo.pl/AGH-PAW-2017//admin

Katalog jest zabezpieczony z poziomu serwera:
user = progremo
pass = progremo2019

Dostęp do panelu administracyjnego aplikacji (tylko po zalogowaniu):
user = admin
pass = admin123
