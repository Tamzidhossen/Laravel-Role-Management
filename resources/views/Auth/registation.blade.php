<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>SqrEloquent Registration</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 flex items-center justify-center min-h-screen">
  <div class="bg-white border border-gray-200 rounded-lg shadow-md p-8 w-full max-w-md">
    
    <!-- Logo/Icon -->
    <div class="flex justify-center mb-6">
      <svg class="w-12 h-12 text-yellow-500" fill="currentColor" viewBox="0 0 24 24">
        <path d="M8 4v16l-6-8 6-8zm8 0l6 8-6 8V4z"/>
      </svg>
    </div>

    <!-- Heading -->
    <h2 class="text-center text-2xl font-semibold text-gray-800 mb-6">Create a SqrEloquent Account</h2>
    
    <!-- Form -->
    <form action="{{ route('auth.register') }}" method="POST" class="space-y-5">
      @csrf
      <div>
        <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
        <input name="name" id="username" type="text" required placeholder="Choose a username"
               class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-yellow-500 focus:border-yellow-500"/>
      </div>

      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input name="email" type="email" required placeholder="your@example.com"
               class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-yellow-500 focus:border-yellow-500"/>
      </div>

      <div>
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        <input id="password" name="password" type="password" required placeholder="••••••••"
               class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-yellow-500 focus:border-yellow-500"/>
      </div>

      <div>
        <label for="password" class="block text-sm font-medium text-gray-700">Confirm Password</label>
        <input id="password_confirmation" name="password_confirmation" type="password" required placeholder="••••••••"
               class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-yellow-500 focus:border-yellow-500"/>
      </div>

      <div class="flex items-start text-sm">
        <input id="terms" type="checkbox" required class="h-4 w-4 text-yellow-600 border-gray-300 rounded focus:ring-yellow-500"/>
        <label for="terms" class="ml-2 text-gray-600">
          I agree to the <a href="#" class="text-yellow-600 hover:underline">Terms of Service</a> and <a href="#" class="text-yellow-600 hover:underline">Privacy Policy</a>
        </label>
      </div>

      <button type="submit"
              class="w-full bg-yellow-500 text-white py-2 rounded-lg hover:bg-yellow-600 transition duration-200">
        Create Account
      </button>
    </form>

    <p class="text-center text-sm text-gray-600 mt-6">
      Already have an account?
      <a href="{{ route('login.page') }}" class="text-yellow-600 hover:underline">Sign in</a>
    </p>
  </div>
</body>
</html>