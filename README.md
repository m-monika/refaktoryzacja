# Refaktoryzacja

## O Repozytorim

Repozytorium ma na celu ćwiczenie refaktoryzacji.

Ćwiczenia opierają się o przykłady opisane w książce "Refaktoryzacja. Ulepszanie stuktury istniejącego kodu" - Wydanie II - Martin Fowler we współpracy z Kentem Beckiem.

Do ćwiczeń wykorzystywane będą metody opisane w książce "Zostań ultrasamoukiem".


### Jak będę ćwiczyć to w praktyce?

Krok 1. Czytam rozdział z przykładami jak odbywa się refaktoryzacja.

Krok 2. Następnego dnia (bądź później) przepisuję przykład z odpowiednim przełożeniem go na PHP z JavaScript.
Przykłady do refaktoryzacji będę tworzyć w osobnych katalogach. Każdy plik do refaktoryzacji będzie się nazywał Legacy.php.
Adekwatnie do tego w tym zestawie powstanie do tej klasy test LegacyTest.

Krok 3. Tworzę nowy branch na którym przeprowadzam refaktoryzację bez zaglądania do książki.

Krok 4. Weryfikuję ile wyciągnełam z książki informacji porównując wynikowy commit z przekształceniami zrobionymi w książce.

Krok 5. Ponawiam krok 3 i 4 do momentu w którym czuję, że dany przykład już jest opanowany.


## Lokalne uruchamianie

W katalogu projektu:

```bash
docker build -t refactoring-app .
docker run -it --rm --name refactoring-app -v "$PWD":/usr/src/refactoring refactoring-app
```

### Composer

W kontenerze:

```bash
./bin/composer install
```