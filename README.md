# Refaktoryzacja

## O Repozytorim

Repozytorium ma na celu ćwiczenie refaktoryzacji.

Ćwiczenia opierają się o przykłady opisane w książce "Refaktoryzacja. Ulepszanie stuktury istniejącego kodu" - Wydanie II - Martin Fowler we współpracy z Kentem Beckiem.

Do ćwiczeń wykorzystywane będą metody opisane w książce "Zostań ultrasamoukiem".


### Jak będę ćwiczyć to w praktyce?

Krok 1. Czytam rozdział z przykładami jak odbywa się refaktoryzacja.

Krok 2. Następnego dnia (bądź później) przepisuję przykład z odpowiednim przełożeniem go na PHP z JavaScript

Krok 3. Na branchu z przykładem nakładam modyfikacje które pamiętam jakie nałożył autor w książce bez zaglądania do niej.

Krok 4. Weryfikuję ile wyciągnełam z książki informacji porównując wynikowy commit na branch z przekształceniami zrobionymi w książce.


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