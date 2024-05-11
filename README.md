![GitHub last commit (branch)](https://img.shields.io/github/last-commit/michel-abele/www-abele-onl/main?logo=github&label=last%20commit%3A%20main)
![GitHub last commit (branch)](https://img.shields.io/github/last-commit/michel-abele/www-abele-onl/work?logo=github&label=last%20commit%3A%20work)
![GitHub repo size](https://img.shields.io/github/repo-size/michel-abele/www-abele-onl)
![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/michel-abele/www-abele-onl/ftp-deploy.yml)
![Website](https://img.shields.io/website?url=https%3A%2F%2Fabele.onl)

# Webseite: www.abele.onl

:gb:|:us: [English version](https://github.com/michel-abele/www-abele-onl/blob/main/readme.en.md)

## Über dieses Repository

Dieses Repository dient als umfassende Sammlung aller Elemente meines Webprojekts. Es enthält sowohl den Quellcode als auch alle Inhalte meiner persönlichen Webseite. Die öffentliche Zugänglichkeit des Repositories verfolgt den Zweck, Interessierten Einblick in meinen Entwicklungsprozess zu gewähren und zu demonstrieren, wie ich die Automatisierung der Webseite über GitHub umgesetzt habe.

### Zielgruppe

Die Hauptzielgruppe dieses Repositories sind:

- **Potenzielle Arbeitgeber**: Um ihnen einen detaillierten Einblick in meine Fähigkeiten und Arbeitsweise als Entwickler zu bieten.
- **Freelance-Kunden**: Um das Vertrauen in meine Dienstleistungen zu stärken und meine Expertise in der Webentwicklung zu veranschaulichen.

Ich lade Sie herzlich ein, sich mit dem Inhalt dieses Repositories vertraut zu machen und stehe für Rückfragen und Diskussionen zur Verfügung.

Den Code meiner Webseite kannst du nach Lust und Laune kopieren, aber bitte beachte, dass die Inhalte urheberrechtlich geschützt bleiben.

## Webseitenaufbau

### Backend

Das Backend basiert auf einem eigenem PHP-Framework, das dynamisch Inhalte verwaltet und die Ausgabe durch das Zusammenführen von Teildateien generiert. Um eine klare Trennung zwischen HTML-Code und PHP-Code zu gewährleisten, habe ich sogenannte "HTML-Variablen" implementiert. Diese werden im Laufe der Programmausführung mit den entsprechenden Daten gefüllt. Die Aufteilung der HTML-Inhalte auf mehrere Dateien verbessert nicht nur die Übersichtlichkeit, sondern erleichtert auch die Wartung erheblich. Für die Umwandlung von SCSS- in CSS-Code nutze ich die lokale Erweiterung _Live Sass Compiler_ in _VS Code_.

### Frontend

Im Frontend setze ich auf die Kombination von _jQuery_ und _Bootstrap_. Bootstrap dient dabei als Grundgerüst für das Layout, während eine individuell angepasste S/CSS-Datei das Design verfeinert. Für die Einbindung verschiedener Icons greife ich auf _Bootstrap Icons_ und _BoxIcons_ zurück, wobei ich selbst angepasste Versionen mit Schriftdateien nutze.

jQuery kommt bei der Implementierung diverser Funktionen zum Einsatz. Mithilfe dieser Bibliothek wurde beispielsweise die Navigation umgesetzt, die auf Nutzerinteraktionen wie Klicks auf Menüpunkte oder Steuerelemente reagiert und entsprechende Animationen oder Aktionen auslöst. Die _Animate On Scroll Library_ verleiht der Webseite Dynamik, indem Inhalte aus spezifischen Richtungen eingeblendet werden. Die _Typing Animation Library_ sorgt im Startbereich der Seite für eine Schreibmaschinenanimation, während die _Pure Counter Library_ die Animation hochzählender Zahlen im Bereich der Fakten ermöglicht.

Abschließend werden in einer individuell erstellten JavaScript-Custom-Datei alle Funktionen zusammengeführt. Hierbei werden die erforderlichen Funktionen und Klassen aus den genutzten Bibliotheken initialisiert und angewandt, um ein nahtloses und interaktives Benutzererlebnis zu schaffen.

### Deploy

Die Veröffentlichung der Webseite erfolgt über einen automatisierten Workflow auf GitHub. Jedes Mal, wenn in den Hauptzweig (main branch) Änderungen eingepflegt werden, beispielsweise durch das Zusammenführen (Merge) aus einem Feature-Branch, wird dieser Workflow aktiviert. In einem ersten Schritt werden die aktualisierten Dateien auf den Webserver, genauer gesagt auf den FTP-Server, übertragen. Anschließend wird der Cache der Webseite bei Cloudflare geleert, um sicherzustellen, dass die neuen Inhalte unverzüglich verfügbar sind.
