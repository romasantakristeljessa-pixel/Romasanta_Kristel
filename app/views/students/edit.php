<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 min-h-screen flex items-center justify-center">

    <div class="bg-white/30 backdrop-blur-lg shadow-xl rounded-2xl p-8 w-full max-w-lg border border-white/20">
        <h1 class="text-3xl font-extrabold text-center text-white mb-6">✏️ Edit Student</h1>

        <form action="/students/update/<?= $student['id'] ?>" method="POST" class="space-y-5">
            <!-- Last Name -->
            <div>
                <label class="block text-white font-semibold mb-1">Last Name</label>
                <input type="text" name="last_name" value="<?= $student['last_name'] ?>" placeholder="Enter last name"
                    class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-purple-400 focus:outline-none shadow-sm">
            </div>

            <!-- First Name -->
            <div>
                <label class="block text-white font-semibold mb-1">First Name</label>
                <input type="text" name="first_name" value="<?= $student['first_name'] ?>" placeholder="Enter first name"
                    class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-purple-400 focus:outline-none shadow-sm">
            </div>

            <!-- Email -->
            <div>
                <label class="block text-white font-semibold mb-1">Email</label>
                <input type="email" name="email" value="<?= $student['email'] ?>" placeholder="Enter email address"
                    class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-purple-400 focus:outline-none shadow-sm">
            </div>

            <!-- Buttons -->
            <div class="flex justify-between items-center pt-4">
                <a href="/students/index"
                    class="bg-gray-500 hover:bg-gray-700 transition duration-300 text-white px-5 py-2 rounded-lg shadow-md">
                    ⬅ Back
                </a>
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-600 transition duration-300 text-white px-6 py-2 rounded-lg shadow-md">
                    ✅ Update
                </button>
            </div>
        </form>
    </div>
</body>
</html>
