<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Form</title>
    <link rel="stylesheet" href='./styles/output.css'>
</head>
<body class="flex flex-col items-center justify-center h-[100vh] m-0">
<form class="w-full max-w-lg flex flex-col" action="table.view.php" method="post">
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                Name
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                   id="grid-first-name" type="text" placeholder="Jane" name="name" required>
        </div>
        <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                Email
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                   id="grid-last-name" type="email" placeholder="jane@gmail.com" name="email" required>
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-2">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                Gender
            </label>
            <div class="flex flex-col gap-3">
                <div class="flex items-center">
                    <input type="radio" id="male" name="gender" value="male"
                           class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" required>
                    <label for="male" class="ml-3 block text-sm font-medium text-gray-700">Male</label>
                </div>
                <div class="flex items-center">
                    <input type="radio" id="female" name="gender" value="female"
                           class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" required>
                    <label for="female" class="ml-3 block text-sm font-medium text-gray-700">Female</label>
                </div>
                <div class="flex items-center">
                    <input type="radio" id="other" name="gender" value="other"
                           class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" required>
                    <label for="other" class="ml-3 block text-sm font-medium text-gray-700">Other</label>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                City
            </label>
            <div class="relative">
                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        name="city"
                        required
                        id="grid-state">
                    <option value="" disabled selected hidden>Select City</option>
                    <option value="mumbai">Mumbai</option>
                    <option value="nagpur">Nagpur</option>
                    <option value="pune">Pune</option>
                </select>
            </div>
        </div>
    </div>
    <input type="submit" value="Submit"
           class="mt-3 bg-indigo-600 hover:bg-indigo-500 text-white font-medium py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-opacity-50 shadow-xl transform active:scale-95 cursor-pointer transition-transform">
</form>
</body>
</html>