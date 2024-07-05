<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>INVENTORY</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body class="antialiased pt-10">
      <div class="bg-white p-4 rounded-2xl shadow-md mx-auto w-4/5">
        <div class="grid grid-cols-3 gap-4">
            <!-- Shop Information Section -->
            <div class="border-b border-zinc-300 pb-4 mb-4 col-span-1">
                <h2 class="text-xl font-bold text-gradient bg-gradient-to-r from-blue-500 to-purple-600 bg-clip-text text-transparent">SHOP INFORMATION SECTION:</h2>
                <div class="grid grid-cols-1 gap-4 mt-4">
                    <div>
                        <label class="block text-md font-medium text-zinc-700">Name:</label>
                        <input
                            type="text"
                            placeholder="Name of your shop"
                            class="mt-1 block w-full px-3 py-2 border border-zinc-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-md transition duration-200"
                        />
                    </div>
                    <div>
                        <label class="block text-md font-medium text-zinc-700">Address:</label>
                        <input
                            type="text"
                            placeholder="Shop address"
                            class="mt-1 block w-full px-3 py-2 border border-zinc-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-md transition duration-200"
                        />
                    </div>
                    <div>
                        <label class="block text-md font-medium text-zinc-700">Logo:</label>
                        <input
                            type="file"
                            placeholder="logo image"
                            class="mt-1 block w-full px-3 py-2 border border-zinc-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-md transition duration-200"
                        />
                    </div>
                </div>
            </div>
    
            <!-- Owner Information Section -->
            <div class="border-b border-zinc-300 pb-4 mb-4 col-span-1">
                <h2 class="text-xl font-bold text-gradient bg-gradient-to-r from-blue-500 to-purple-600 bg-clip-text text-transparent">OWNER INFORMATION SECTION:</h2>
                <div class="grid grid-cols-1 gap-4 mt-4">
                    <div>
                        <label class="block text-md font-medium text-zinc-700">Name:</label>
                        <input
                            type="text"
                            placeholder="Owner's name"
                            class="mt-1 block w-full px-3 py-2 border border-zinc-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-md transition duration-200"
                        />
                    </div>
                    <div>
                        <label class="block text-md font-medium text-zinc-700">Email:</label>
                        <input
                            type="email"
                            placeholder="Email address"
                            class="mt-1 block w-full px-3 py-2 border border-zinc-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-md transition duration-200"
                        />
                    </div>
                    <div>
                        <label class="block text-md font-medium text-zinc-700">Phone:</label>
                        <input
                            type="tel"
                            placeholder="09283774"
                            class="mt-1 block w-full px-3 py-2 border border-zinc-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-md transition duration-200"
                        />
                    </div>
                </div>
            </div>
    
            <!-- User Section -->
            <div class="border-b border-zinc-300 pb-4 mb-4 col-span-1">
                <h2 class="text-xl font-bold text-gradient bg-gradient-to-r from-blue-500 to-purple-600 bg-clip-text text-transparent">USER SECTION:</h2>
                <div class="grid grid-cols-1 gap-4 mt-4">
                    <div>
                        <label class="block text-md font-medium text-zinc-700">Name:</label>
                        <input
                            type="text"
                            placeholder="Owner's name"
                            class="mt-1 block w-full px-3 py-2 border border-zinc-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-md transition duration-200"
                        />
                    </div>
                    <div>
                        <label class="block text-md font-medium text-zinc-700">Email:</label>
                        <input
                            type="email"
                            placeholder="Email address"
                            class="mt-1 block w-full px-3 py-2 border border-zinc-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-md transition duration-200"
                        />
                    </div>
                    <div>
                        <label class="block text-md font-medium text-zinc-700">Phone:</label>
                        <input
                            type="tel"
                            placeholder="09283774"
                            class="mt-1 block w-full px-3 py-2 border border-zinc-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-md transition duration-200"
                        />
                    </div>
                    <div>
                        <label class="block text-md font-medium text-zinc-700">System Name:</label>
                        <input
                            type="text"
                            placeholder="System Name"
                            class="mt-1 block w-full px-3 py-2 border border-zinc-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-md transition duration-200"
                        />
                    </div>
                    <div>
                        <label class="block text-md font-medium text-zinc-700">Password:</label>
                        <input
                            type="password"
                            placeholder="********"
                            class="mt-1 block w-full px-3 py-2 border border-zinc-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-md transition duration-200"
                        />
                    </div>
                    <div>
                        <label class="block text-md font-medium text-zinc-700">System Role:</label>
                        <input
                            type="text"
                            placeholder="ADMIN"
                            class="mt-1 block w-full px-3 py-2 border border-zinc-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-md transition duration-200"
                        />
                    </div>
                </div>
            </div>
        </div>
    
        <div class="flex justify-center mt-4">
            <button class="bg-gradient-to-r from-green-400 via-blue-500 to-purple-600 text-white px-6 py-3 rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-300 focus:outline-none focus:ring-4 focus:ring-offset-2 focus:ring-blue-500">
                SUBMIT
            </button>
        </div>
        <div class="mt-4 text-center text-md text-zinc-500">
            BSI Inventory System version 1.0.0
        </div>
        
    </div>   
    <div class="w-full text-secondary-foreground py-16 mt-3 bg-blue-600 text-center">
        <p class="pb-1">BSI Inventory System version 1.0.0</p>
        <h2 class="text-xl font-bold text-slate-50">REGISTER PAGE</h2>
      </div>           
    </body>
</html>
