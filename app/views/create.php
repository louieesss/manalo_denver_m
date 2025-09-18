<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 via-white to-indigo-100 font-sans text-gray-800 p-6">
  
  <div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-8 space-y-6">
    <h1 class="text-3xl font-semibold text-indigo-700 mb-6 text-center">Create a New Record</h1>
    
    <form action="<?=site_url('users/create');?>" method="post" class="space-y-6">
      
      <div>
        <label for="last_name" class="block text-left text-sm font-medium text-gray-700">Last Name:</label>
        <input type="text" id="last_name" name="last_name" 
          class="w-full mt-1 px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-400 focus:outline-none transition duration-200"/>
      </div>

      <div>
        <label for="first_name" class="block text-left text-sm font-medium text-gray-700">First Name:</label>
        <input type="text" id="first_name" name="first_name" 
          class="w-full mt-1 px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-400 focus:outline-none transition duration-200"/>
      </div>

      <div>
        <label for="email" class="block text-left text-sm font-medium text-gray-700">Email:</label>
        <input type="email" id="email" name="email" 
          class="w-full mt-1 px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-400 focus:outline-none transition duration-200"/>
      </div>

      <button type="submit" 
        class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 rounded-lg shadow-md transition duration-300">
        Submit
      </button>

      <div class="text-center">
        <a href="<?=site_url('users/show');?>" 
           class="inline-block mt-4 text-indigo-600 font-medium hover:underline">
          ← Back to Show
        </a>
      </div>
    </form>
  </div>

</body>
</html>
