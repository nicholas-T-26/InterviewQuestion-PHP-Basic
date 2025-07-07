<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Username Verification</title>
    <!--Tailwind CSS for modern styling -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!--jQuery for AJAX functionality -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="verify_ajax.js"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-bold text-center text-gray-800 mb-6">Username Verification</h1>
        <!-- Form for username input and submission -->
        <div class="mb-4">
            <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
            <input type="text" id="username" name="username" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Enter username">
        </div>
        <!-- Submit button with green background and white text -->
        <button id="submitBtn" class="w-full bg-cyan-300 text-black py-2 px-4 rounded-md hover:bg-green-300 transition duration-200">Submit</button>
        <!-- Container for displaying response messages -->
        <div id="response" class="mt-4 text-center text-sm"></div>
    </div>
</body>
</html>
