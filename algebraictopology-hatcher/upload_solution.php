<?php

$absolutePath = getcwd();

$tokens = explode('/', $absolutePath);
$folder = trim(end($tokens));

$filename = $_FILES['solution']['name'];
$tmpfile = $_FILES['solution']['tmp_name'];

// Get chapter number, question number, and author name from POST data
$chapterNum = $_POST['chapter'];
$questionNum = $_POST['question'];
$author = str_replace(" ", "", $_POST['author']);

// Format the filename using chapter number, question number, and author name
$filename_parts = explode('.', $filename);
$ext = end($filename_parts);
$new_filename = "ch{$chapterNum}-q{$questionNum}-{$author}.{$ext}";

// Replace with your GitHub username and repository name
$username = 'zezzinzel';
$repo = 'zezzinzel.github.io';

// Replace with your GitHub personal access token
$token = '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';

$url = "https://api.github.com/repos/zezzinzel/zezzinzel.github.io/contents/${folder}/solutions/{$new_filename}";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
    'message' => 'Add solution',
    'committer' => [
        'name' => $username,
        'email' => "{$username}@users.noreply.github.com"
    ],
    'content' => base64_encode(file_get_contents($tmpfile)),
    'branch' => 'main'
]));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: token {$token}",
    "Content-Type: application/json",
    "Accept: application/vnd.github+json"
]);

$response = curl_exec($ch);
if (curl_error($ch)) {
    echo 'Error: ' . curl_error($ch);
} else {
    $response_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if ($response_code == 200 || $response_code == 201) {
        echo 'File uploaded successfully.';
    } else {
        echo 'Error: ' . $response;
    }
}
curl_close($ch);
