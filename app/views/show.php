<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Show</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800 font-sans p-10">

  <div class="max-w-6xl mx-auto text-center">

    <h1 class="text-4xl font-bold text-indigo-700 mb-8">Welcome to CRUD</h1>

    <div class="overflow-x-auto bg-white shadow-xl rounded-xl p-6">
      <table class="w-full text-sm table-auto">
        <thead>
          <tr class="bg-indigo-600 text-white uppercase tracking-wide">
            <th class="py-4 px-6">ID</th>
            <th class="py-4 px-6">Last Name</th>
            <th class="py-4 px-6">First Name</th>
            <th class="py-4 px-6">Email</th>
            <th class="py-4 px-6">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach (html_escape($users) as $user): ?>
            <tr class="hover:bg-indigo-50 even:bg-gray-50 transition">
              <td class="py-3 px-6"><?=$user['id'];?></td>
              <td class="py-3 px-6"><?=$user['last_name'];?></td>
              <td class="py-3 px-6"><?=$user['first_name'];?></td>
              <td class="py-3 px-6"><?=$user['email'];?></td>
              <td class="py-3 px-6 space-x-2">
                <a href="<?=site_url('users/update/'.$user['id']);?>" 
                   class="inline-block bg-emerald-500 hover:bg-emerald-600 text-white text-xs px-3 py-1 rounded-md font-medium transition">
                  Update
                </a>
                <a href="<?=site_url('users/delete/'.$user['id']);?>" 
                   class="inline-block bg-red-500 hover:bg-red-600 text-white text-xs px-3 py-1 rounded-md font-medium transition">
                  Delete
                </a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <a href="<?=site_url('users/create');?>" 
       class="inline-block mt-8 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-6 rounded-lg shadow-md transition">
      Create Record
    </a>
  </div>

</body>
</html>
