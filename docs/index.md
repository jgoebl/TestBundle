
Namespace:
Organisation/BundleName

Diese Dateien sind zwingend notwendig:
+ __src/TestBundle.php:__ 
Diese Klasse macht aus dem Projekt ein Bundle (ändere den Namen zu deinem Bundel Namen);

+ __README.md:__ 
Diese Datei enthält die grundlegende Beschreibung von dem Bundle. Es zeigt zudem noch Beispiele und einen Link zu der Dokumentation.(Es können alle von GitHub unterstützte MarkUp Sprachen verwendet werden, z.B. README.rst) 

+ __LICENSE:__ 
Die von dem Code verwendete Lisenz. Die meisten verwenden MIT doch man jede verwenden, abhängig von den Bedürfnissen.

+ __docs/index.md:__
Die root Datei der Dokumentation


In der composer.json muss der type auf symfony-bundle gestellt sein.

```"type": "symfony-bundle"```
Der Bundle Name wird in der Composer Json gesetzt:
```"name": "jangoebl/test-bundle"```
In der config/servies.yaml 

Hier können Parameter für den Benutzer übergeben werden, diese werden als Key Value Paar gespeichert.
Jeder Parameter beginnt mit dem Bundle Namen, und wird mit einem Punkt augeteilt.
```
parameters:
    test.author.email: 'jgoebl@xtain.net'
```



[Weitere Informationen sind in Symfony Dokumentation zufinden](https://symfony.com/doc/current/bundles/best_practices.html)
