# favicon-pw
favicon info &amp; redirect if no http_referer

## favicon.ico
https://favicon.io/favicon-converter/

upload a square image at the above location, the larger the image size, the higher quality of output files:
```
android-chrome-192x192.png
android-chrome-512x512.png
apple-touch-icon.png
favicon-16x16.png
favicon-32x32.png
favicon.ico
site.webmanifest
```

## favicon.svg
some browsers will accept (and look for) `/favicon.svg`.

## favicon.php
rename `favicon.ico` to `x_favicon.ico` first, as the web server needs to miss the hit first, so it can then run the script.

with so much attempted hacking traffic on the web nowadays, its safer to redirect a blind `GET` for `/favicon.ico`, if the client does not send an `HTTP_REFERER` in the request header.
