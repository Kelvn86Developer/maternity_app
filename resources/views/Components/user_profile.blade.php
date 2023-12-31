<div class="bg-white rounded-lg shadow-md p-6">
    <div class="flex items-center mb-6">
      <img src="path_to_image" alt="Profile Image" class="w-16 h-16 rounded-full">
      <div class="ml-4">
        <h2 class="text-2xl font-semibold">{{auth()->user()->name}}</h2>
        <p class="text-gray-500">Web Developer</p>
      </div>
    </div>
    <div class="mt-4">
      <h3 class="text-lg font-semibold mb-2">Contact Information</h3>
      <ul class="list-disc pl-6">
        <li class="text-gray-500">{{auth()->user()->email}}</li>
      </ul>
    </div>
    {{-- <div class="mt-6">
      <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded-sm hover:bg-blue-600">View Profile</a>
    </div> --}}
  </div>
  