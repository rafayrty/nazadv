let mix = require('laravel-mix');

mix.js('src/index.js', 'dist/app.js').setPublicPath('dist');

mix.sass('src/scss/index.scss','dist/app.css').setPublicPath('dist');

mix.browserSync({
    proxy: "http://naz_new.test",
    files: ["style.css", "src/**/*.ts","src/scss/**/*.scss",'*.php']
});

mix.copyDirectory('src/assets','dist/assets').setPublicPath('dist');