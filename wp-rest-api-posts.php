<?php
$api_url = "https://sitioweb.com/wp-json/wp/v2/";
$post_per_page = 1;

$args = [
    "per_page" => $post_per_page,
    "fields" => "id,title,excerpt,content,categories,tags,featured_media",
];

$query_string = http_build_query($args);
$request_url = $api_url . "posts?" . $query_string;

$response = file_get_contents($request_url);
if (!$response) {
    echo "Error al obtener los posts";
} else {
    $data = json_decode($response, true);
    $posts = [];
    foreach ($data as $post) {
        $category_id = $post["categories"][0];
        $category_name = get_category_name($category_id, $api_url);
        $image_url = get_featured_image_url($post["featured_media"], $api_url);
        $seo_description = create_seo_description($post["excerpt"]["rendered"]);

        $posts[] = [
            "title" => $post["title"]["rendered"],
            "description" => $post["excerpt"]["rendered"],
            "category_id" => $category_id,
            "category_name" => $category_name,
            "content" => $post["content"]["rendered"],
            "image_url" => $image_url,
            "seo_description" => $seo_description,
        ];
    }
    print_r($posts);
}

function get_category_name($category_id, $api_url)
{
    $category_url = $api_url . "categories/" . $category_id;
    $response = file_get_contents($category_url);
    if (!$response) {
        return "";
    } else {
        $data = json_decode($response, true);
        return $data["name"];
    }
}

function get_featured_image_url($media_id, $api_url)
{
    $media_url = $api_url . "media/" . $media_id;
    $response = file_get_contents($media_url);
    if (!$response) {
        return "";
    } else {
        $data = json_decode($response, true);
        return $data["source_url"];
    }
}

function create_seo_description($content)
{
    $description = strip_tags($content);
    $description = substr($description, 0, 160);
    return $description;
}
