<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login Admin - Demo KRS</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

<form action="prosesLogin.php" method="POST"
  class="bg-white p-8 rounded shadow w-96">

  <h1 class="text-2xl font-bold mb-6 text-center">Login Admin</h1>

  <input type="text" name="username" placeholder="Username"
    class="w-full border p-2 mb-4 rounded" required>

  <input type="password" name="password" placeholder="Password"
    class="w-full border p-2 mb-4 rounded" required>

  <button type="submit"
    class="w-full bg-blue-600 text-white p-2 rounded hover:bg-blue-700">
    Login
  </button>

  <p class="text-sm text-gray-500 mt-4 text-center">
    Demo login: admin / admin
  </p>
</form>

</body>
</html>
