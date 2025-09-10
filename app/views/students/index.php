<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 min-h-screen p-6">

    <div class="max-w-6xl mx-auto bg-white/30 backdrop-blur-lg shadow-2xl rounded-2xl p-8 border border-white/20">
        <!-- Page Title -->
        <h1 class="text-4xl font-extrabold text-white text-center mb-8">📚 Students List</h1>

        <!-- Top Controls -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6">
            <!-- Buttons -->
            <div class="flex gap-3">
                <a href="/students/create" 
                   class="bg-green-500 hover:bg-green-600 transition duration-300 text-white px-5 py-2 rounded-lg shadow-md font-medium flex items-center gap-2">
                    ➕ Add Student
                </a>
                <a href="/students/delete_all"
                   onclick="return confirm('Are you sure you want to delete ALL records?')"
                   class="bg-red-600 hover:bg-red-700 transition duration-300 text-white px-5 py-2 rounded-lg shadow-md font-medium flex items-center gap-2">
                    🗑️ Delete All
                </a>
            </div>

            <!-- Search Bar -->
            <div class="relative w-full md:w-1/3">
                <input type="text" id="searchInput" placeholder="🔍 Search students..."
                    class="w-full px-5 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-purple-400 focus:outline-none shadow-sm">
            </div>
        </div>

        <!-- Students Table -->
        <div class="overflow-x-auto rounded-lg shadow-lg">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg overflow-hidden">
                <thead>
                    <tr class="bg-purple-600 text-white text-left">
                        <th class="py-3 px-4">ID</th>
                        <th class="py-3 px-4">Last Name</th>
                        <th class="py-3 px-4">First Name</th>
                        <th class="py-3 px-4">Email</th>
                        <th class="py-3 px-4 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody id="studentsTable">
                    <?php if (!empty($students)): ?>
                        <?php foreach ($students as $student): ?>
                            <tr class="hover:bg-purple-100 transition duration-200">
                                <td class="py-3 px-4 border-b text-gray-700"><?= $student['id'] ?></td>
                                <td class="py-3 px-4 border-b text-gray-700"><?= $student['last_name'] ?></td>
                                <td class="py-3 px-4 border-b text-gray-700"><?= $student['first_name'] ?></td>
                                <td class="py-3 px-4 border-b text-gray-700"><?= $student['email'] ?></td>
                                <td class="py-3 px-4 border-b text-center">
                                    <a href="/students/edit/<?= $student['id'] ?>" 
                                       class="bg-blue-500 hover:bg-blue-600 transition duration-300 text-white px-4 py-1.5 rounded-lg shadow-md font-medium">
                                        ✏️ Edit
                                    </a>
                                    <a href="/students/delete/<?= $student['id'] ?>" 
                                       onclick="return confirm('Are you sure you want to delete this student?')"
                                       class="bg-red-500 hover:bg-red-600 transition duration-300 text-white px-4 py-1.5 rounded-lg shadow-md font-medium ml-2">
                                        🗑️ Delete
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5" class="text-center py-5 text-gray-600 font-medium">No students found.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Search Script -->
    <script>
        const searchInput = document.getElementById('searchInput');
        const studentsTable = document.getElementById('studentsTable');
        searchInput.addEventListener('keyup', function() {
            const searchText = this.value.toLowerCase();
            const rows = studentsTable.getElementsByTagName('tr');
            for (let i = 0; i < rows.length; i++) {
                const rowText = rows[i].innerText.toLowerCase();
                rows[i].style.display = rowText.includes(searchText) ? '' : 'none';
            }
        });
    </script>

</body>
</html>
