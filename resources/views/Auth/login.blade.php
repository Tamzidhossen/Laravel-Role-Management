<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>LeetCode Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 flex items-center justify-center min-h-screen">
  <div class="bg-white border border-gray-200 rounded-lg shadow-md p-8 w-full max-w-sm">
    <div class="flex justify-center mb-6">
      <svg class="w-12 h-12 text-indigo-600" fill="currentColor" viewBox="0 0 24 24">
        <!-- Simple code bracket icon -->
        <path d="M8 4v16l-6-8 6-8zm8 0l6 8-6 8V4z"/>
      </svg>
    </div>
    <h2 class="text-center text-2xl font-semibold text-gray-800 mb-6">Sign In to LeetCode</h2>
    <form action="{{ route('auth.login') }}" method="POST" class="space-y-5">
      @csrf
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input name="email" type="email" required placeholder="your@leetcode.com"
               class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"/>
      </div>
      <div>
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        <input name="password" type="password" required placeholder="••••••••"
               class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"/>
      </div>
      <div class="flex items-center justify-between text-sm">
        <label class="flex items-center text-gray-600">
          <input type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded"/>
          <span class="ml-2">Remember me</span>
        </label>
        <a href="#" class="text-indigo-600 hover:underline">Forgot password?</a>
      </div>
      <button type="submit"
              class="w-full bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700 transition duration-200">
        Sign In
      </button>
    </form>
    <p class="text-center text-sm text-gray-600 mt-6">
      New to LeetCode?
      <a href="{{ route('registation.page') }}" class="text-indigo-600 hover:underline">Sign up</a>
    </p>
  </div>
</body>
</html>