Compile.php

<!-- compile.php -->
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $code = $_POST['code'];

    // Create a temporary C file
    $fileName = 'temp.c';
    file_put_contents($fileName, $code);

    // Compile the code
    $compileCommand = "gcc -c $code";
    exec($compileCommand, $compileOutput, $compileStatus);

    if ($compileStatus !== 0) {
        // Compilation error
        $output = implode("\n", $compileOutput);
    } else {
        // Execute the compiled code
        exec('./temp.out', $execOutput, $execStatus);
        $output = implode("\n", $execOutput);
    }

    // Send the output back to the frontend
    echo json_encode(['output' => $output]);
} else {
    // Handle invalid request method
    http_response_code(405);
    echo json_encode(['error' => 'Method Not Allowed']);
}

?>