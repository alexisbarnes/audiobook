## AudioBook

AudioBook is a music library that allows you to add your favorite songs along with a YouTube video. The framework for this API is based on PHP, Laravel and Vue.js.

You will be able to create, read, update and delete the music in your database.

![Project View](screenshot.png?raw=true)

##Installation

1. Clone this repo.
2. Download [MAMP](http://www.mamp.info/en/downloads).
3. Download [Composer](https://getcomposer.org/download/).
4. Mamp:
  - Go to "Preferences..."
  - Go to the Ports tab and make the following changes:
    - Apache Port: 8888
    - Nginx Port: 8888
    - MySQL Port: 8889
  - Go the Web Server tab and next to "Document Root" click on the fodler. Then go to your project directory. Within the project folder select the "public" folder, then hit "select."
  - Click "OK" and click "Start Servers."
5. Go to http://localhost:8888 and create a new database called "app."
6. In your terminal, cd into the project and run 'php:artisan migrate'. Then run 'npm run watch'.
7. The project will then be running on http://localhost:8888.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

[Alexis Barnes](http://www.alexisbarnes.com)
