<!-- <form action="store.php" method="post" enctype="multipart/form-data">
  <input type="text" name="name" placeholder="Enter your name">
  <input type="file" name="file">
  <input type="submit" value="Submit">
</form> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Class Documentation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Add custom CSS styling here */
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Request Class Documentation</a>
    </nav>

    <div class="container mt-4">
        <h1>Request Class Documentation</h1>

        <h2>Constructor</h2>
        <pre>
            <code class="php">
class Request
{
    public function __construct()
    {
        // Constructor details here
    }
}
            </code>
        </pre>

        <h2>Methods</h2>

        <!-- Method: method() -->
        <h3>method()</h3>
        <p>Returns the HTTP request method (e.g., GET, POST) used for the current request.</p>

        <!-- Method: uri() -->
        <h3>uri()</h3>
        <p>Returns the URI (Uniform Resource Identifier) of the current request, including query parameters if any.</p>

        <!-- Method: server() -->
        <h3>server()</h3>
        <p>Returns an array containing all the server variables for the current request. Server variables may include headers, host information, and more.</p>

        <!-- Method: cookies() -->
        <h3>cookies()</h3>
        <p>Returns an array of all cookies sent with the current request, allowing you to access and manipulate cookie data.</p>

        <!-- Method: get() -->
        <h3>get($key, $default = null)</h3>
        <p>Retrieves a value from the input data (e.g., query parameters, form fields) using the specified key. If the key does not exist, it returns the default value provided.</p>

        <!-- Method: all() -->
        <h3>all()</h3>
        <p>Returns an array containing all input data, including both query parameters and uploaded files. It provides a comprehensive view of all incoming data.</p>

        <!-- Method: has() -->
        <h3>has($key)</h3>
        <p>Checks if a key exists in the input data (e.g., query parameters, form fields). It returns `true` if the key exists; otherwise, it returns `false`.</p>

        <!-- Method: only() -->
        <h3>only($keys)</h3>
        <p>Returns an array containing only the specified keys from the input data. If a key does not exist, it is omitted from the result, allowing you to filter the data easily.</p>

        <!-- Method: except() -->
        <h3>except($keys)</h3>
        <p>Returns an array containing all input data except for the specified keys. It removes the specified keys from the input data, providing a filtered result.</p>

        <!-- Method: isAjax() -->
        <h3>isAjax()</h3>
        <p>Checks if the current request was made using AJAX (Asynchronous JavaScript and XML) by inspecting the `HTTP_X_REQUESTED_WITH` header. It returns `true` if the request is an AJAX request; otherwise, it returns `false`.</p>

        <!-- Method: isSecure() -->
        <h3>isSecure()</h3>
        <p>Checks if the current request is made over a secure connection (HTTPS) by inspecting the `HTTPS` server variable. It returns `true` if the connection is secure; otherwise, it returns `false`.</p>
    </div>

    <!-- Add Bootstrap and custom JavaScript as needed -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

