The following files are mandatory, because they ensure a structure convention that automated tools can rely on:

+ __src/AcmeBlogBundle.php:__ This is the class that transforms a plain directory into a Symfony bundle (change this to your bundle's name);

+ __README.md:__ This file contains the basic description of the bundle and it usually shows some basic examples and links to its full documentation (it can use any of the markup formats supported by GitHub, such as README.rst);

+ __LICENSE:__ The full contents of the license used by the code. Most third-party bundles are published under the MIT license, but you can choose any license;

+ __docs/index.md:__ The root file for the Bundle documentation.


In der composer.json muss der type auf symfony-bundle gestellt sein.
