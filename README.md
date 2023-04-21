
# Obtener posts de WordPress con la API REST

Este script en PHP permite obtener los últimos posts publicados en un sitio de WordPress mediante la API REST. El resultado es un array que contiene el título, la descripción, la categoría, el contenido, la imagen destacada y una descripción SEO de cada post.

## Uso

Para utilizar este script, sigue los siguientes pasos:

1.  Descarga el archivo `wp-rest-api-posts.php`.
2.  Edita el archivo y cambia la URL del sitio de WordPress en la variable `$api_url`.
3.  Ejecuta el script desde la línea de comandos o desde un servidor web.

## Funciones

El script utiliza las siguientes funciones para obtener y procesar los datos de la API REST de WordPress:

### `get_category_name($category_id, $api_url)`

Esta función obtiene el nombre de una categoría de WordPress a partir de su ID. Recibe dos parámetros:

-   `$category_id`: El ID de la categoría que se desea obtener.
-   `$api_url`: La URL de la API REST de WordPress.

La función realiza una solicitud a la API REST para obtener la información de la categoría y devuelve su nombre.

### `get_featured_image_url($media_id, $api_url)`

Esta función obtiene la URL de la imagen destacada de un post de WordPress a partir de su ID de media. Recibe dos parámetros:

-   `$media_id`: El ID de la imagen destacada que se desea obtener.
-   `$api_url`: La URL de la API REST de WordPress.

La función realiza una solicitud a la API REST para obtener la información de la imagen y devuelve su URL.

### `create_seo_description($content)`

Esta función crea una descripción SEO a partir del contenido de un post de WordPress. Recibe un parámetro:

-   `$content`: El contenido del post del que se desea crear la descripción SEO.

La función elimina las etiquetas HTML del contenido, lo acorta a 160 caracteres y devuelve el resultado.

## Resultado

El resultado del script es un array que contiene los siguientes campos para cada post:

-   `title`: El título del post.
-   `description`: La descripción del post.
-   `category_id`: El ID de la categoría del post.
-   `category_name`: El nombre de la categoría del post.
-   `content`: El contenido completo del post.
-   `image_url`: La URL de la imagen destacada del post.
-   `seo_description`: La descripción SEO del post.

El script puede ser modificado para incluir otros campos o personalizar la forma en que se procesan los datos.

------------------
# Get WordPress Posts with the REST API

This PHP script allows you to fetch the latest published posts from a WordPress site using the REST API. The result is an array that contains the title, description, category, content, featured image, and SEO description of each post.

## Usage

To use this script, follow these steps:

1.  Download the `wp-rest-api-posts.php` file.
2.  Edit the file and change the WordPress site URL in the `$api_url` variable.
3.  Run the script from the command line or a web server.

## Functions

The script uses the following functions to retrieve and process data from the WordPress REST API:

### `get_category_name($category_id, $api_url)`

This function retrieves the name of a WordPress category based on its ID. It receives two parameters:

-   `$category_id`: The ID of the category you want to retrieve.
-   `$api_url`: The URL of the WordPress REST API.

The function makes a request to the REST API to retrieve the category information and returns its name.

### `get_featured_image_url($media_id, $api_url)`

This function retrieves the URL of a WordPress post's featured image based on its media ID. It receives two parameters:

-   `$media_id`: The ID of the featured image you want to retrieve.
-   `$api_url`: The URL of the WordPress REST API.

The function makes a request to the REST API to retrieve the image information and returns its URL.

### `create_seo_description($content)`

This function creates an SEO description based on a WordPress post's content. It receives one parameter:

-   `$content`: The content of the post you want to create an SEO description for.

The function removes HTML tags from the content, shortens it to 160 characters, and returns the result.

## Result

The script's result is an array that contains the following fields for each post:

-   `title`: The post's title.
-   `description`: The post's description.
-   `category_id`: The ID of the post's category.
-   `category_name`: The name of the post's category.
-   `content`: The full content of the post.
-   `image_url`: The URL of the post's featured image.
-   `seo_description`: The post's SEO description.

The script can be modified to include additional fields or customize how the data is processed.
