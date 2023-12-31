@auth
<x-layout>
    <div class="page-wrapper w-[96%] md:w-[88%] px-2 py-2 relative">
       <div class="profile flex items-center w-full mb-10">
              <div class="profile-img w-[20%] h-[20%] max-h-[20%]">
                <img src="{{asset('images/user_default.png')}}" class="w-full h-full rounded-full" alt="">
              </div>
              <div class="profile-info ml-2">
                <h1 class="text-2xl font-bold">Dr. {{ $doctor->name }}</h1>
                <p class="text-gray-500 text-sm">{{ $doctor->bio }}.</p>
                <p class="hospital">
                    <span class="text-gray-500 text-sm">Hospital:</span>
                    <span class="text-gray-700 text-sm">{{ $doctor->hospital }}</span>
                </p>
              </div>
       </div>

       <div class="profession-info-card relative mt-4  p-2">
          <div class="info-header border-[1px] border-gray-300 rounded w-max px-2">
            <h1 class="text-xl font-semibold">Profession</h1>
          </div>

          <div class="desc shadow rounded p-2 flex flex-col gap-3">
           <p>{{ $doctor->specialty }}</p>
        
          </div>
       </div>

       <div class="profession-info-card relative mt-4  p-2">
        <div class="info-header border-[1px] border-gray-300 rounded w-max px-2">
          <h1 class="text-xl font-semibold">Email</h1>
        </div>

        <div class="desc shadow rounded p-2 flex flex-col gap-3">
         <p>{{ $doctor->email }}</p>
      
        </div>
     </div>

     <div class="profession-info-card relative mt-4  p-2">
        <div class="info-header border-[1px] border-gray-300 rounded w-max px-2">
          <h1 class="text-xl font-semibold">Address</h1>
        </div>

        <div class="desc shadow rounded p-2 flex flex-col gap-3">
         <p>{{ $doctor->address }}</p>
      
        </div>
     </div>

     <div class="profession-info-card relative mt-4  p-2">
        <div class="info-header border-[1px] border-gray-300 rounded w-max px-2">
          <h1 class="text-xl font-semibold">Phonenumber</h1>
        </div>

        <div class="desc shadow rounded p-2 flex flex-col gap-3">
         <p>{{ $doctor->phone }}</p>
      
        </div>
     </div>

     <div class="profession-info-card relative mt-4  p-2">
        <div class="info-header border-[1px] border-gray-300 rounded w-max px-2">
          <h1 class="text-xl font-semibold">Amount</h1>
        </div>

        <div class="desc shadow rounded p-2 flex flex-col gap-3">
         <p>{{ $doctor->amount }}</p>
      
        </div>
     </div>

     

        <div class="make-appointment-section mt-10">
            <a href="{{ route('appointmentCreate', ['id' => $doctor->id]) }}" class="bg-transparent  hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
               Make appointment
              </a>
        </div>
    </div>
</x-layout>
@endauth