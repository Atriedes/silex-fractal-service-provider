## Silex Fractal Service Provider

Provide [fractal](http://fractal.thephpleague.com/) for manipulating complex REST API output

### Usage

~~~php

$app->register(new FractalServiceProvider());

~~~

You can access fractal manager via container

~~~php

$manager = $app["fractal.manager"];

~~~

### License

MIT, see LICENSE