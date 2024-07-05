@vite('resources/css/app.css')

<div class="min-h-screen flex flex-col items-center justify-center bg-background text-foreground pt-20">
    <div class="w-full max-w-4xl p-9 space-y-8 bg-card rounded-lg shadow-lg flex flex-col pb-14">
        <div class="flex justify-center mb-8">
            <h1 class="text-2xl font-bold">INVENTORY MANAGEMENT SYSTEM</h1>
        </div>
        <div class="flex flex-col sm:flex-row lg:items-center lg:justify-between">
            <div class="w-full flex flex-col items-center justify-center space-y-4 lg:w-1/2">
                <img src="{{ asset('storage/images/official_logo.png') }}" alt="Company Logo" class="rounded-lg" style="max-width: 150px; height: auto;" />
                <h2 class="text-lg font-semibold">HOMETOWN CAFÉ</h2>
                <p class="text-muted-foreground">Address:</p>
            </div>
            <div class="w-full lg:w-1/2 sm:pl-8">
                <div class="w-full border border-border p-4 rounded-lg">
                    <h3 class="text-center text-lg font-semibold pb-3">User Information</h3>
                    <form class="space-y-4">
                        <input type="text" placeholder="username" class="w-full p-2 border border-input rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-md transition duration-200" />
                        <input type="password" placeholder="password" class="w-full p-2 border border-input rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-md transition duration-200" />
                        <button type="submit" class="w-full text-slate-50 py-3 rounded-lg hover:bg-primary-dark transition duration-300 ease-in-out bg-blue-600 ">LOG IN</button>
                    </form>
                </div>
                <div class="text-center text-muted-foreground mt-4">
                    <p>BSI Inventory System </p>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full text-secondary-foreground py-16 mt-16 bg-blue-600 text-center">
        <p class="pb-1">BSI Inventory System version 1.0.0</p>
        <h2 class="text-xl font-bold text-slate-50">LOGIN PAGE</h2>
    </div>
</div>
