<section class="side-bar hidden md:block fixed left-0 top-[5.6rem] w-[18%] overflow-hidden bg-white shadow-sm h-[90vh] max-h-[90vh]">

    <ul class="quick-links list-none flex flex-col space-y-4 mt-[3rem]">
       <li class="p-3 border-2 border-slate-100 rounded-[4px] text-black self-center w-[70%] text-center hover:shadow "><a href="/users/doctors">All doctors</a></li>
       <li class="p-3 border-2 border-slate-100 rounded-[4px] text-black self-center w-[70%] text-center hover:shadow "><a href="/users/chat">Community</a></li>
       <li class="p-3 border-2 border-slate-100 rounded-[4px] text-black self-center w-[70%] text-center hover:shadow "><a href="/users/appointments/view">My appointments</a></li>
       <li class="p-3 border-2 border-slate-100 rounded-[4px] text-black self-center w-[70%] text-center hover:shadow "><a href="/users/profile/show">profile</a></li>
     
    </ul>


   <form class="text-red-600 absolute bottom-10  left-[40%]" method="POST" action="{{ route('user.logout') }}">
      @csrf
      <button type="submit">Logout</button>
    </form>


    {{-- <a href="/logout" class="text-red-600 absolute bottom-10  left-[40%]">Logout</a> --}}
</section>