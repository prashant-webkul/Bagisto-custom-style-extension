Hey guys!

Kudos if you have reached till here. This package is generic implementation of providing your own styles in Bagisto's shop and Admin's package.

To install this package, you need to follow steps below:

1. In your Bagisto's root there is a composer.json and inside it there is a psr-4 object at its end place the line:
~~~
 "Webkul\\CustomStyle\\": "packages/Webkul/CustomStyle/src"
~~~

2. In file config/app.php you will find an array called 'providers' at that array's end paste the line below:
~~~
Webkul\CustomStyle\Providers\CustomStyleServiceProvider::class
~~~

3. Run command: **composer dump-autoload**.

Done, now load admin or shop pages you will see styles in this package passed using events will be working and specifically you will see **red** background for **shop** and **green** background for **admin** pages.