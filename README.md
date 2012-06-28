ConfigurationBundle
===================

A bundle which allow you to easily store you application configuration.

Usage
-----

1. ** In a controller **

    ```php
	$sitename = $this->container->get('openify.configuration')->get('site_name');
    ```

2. ** In a view **

	{{ openify_configuration.get('site_name') }}
