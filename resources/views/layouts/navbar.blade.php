<nav class="sticky m-auto top-7 z-50 w-300 rounded-2xl h-20 flex px-25 text-center justify-between items-center bg-gray-100 shadow-lg/20">
    <div>
        <img src="/storage/image/logo-osis.png" alt="" class="w-30">
    </div>    
    <div>
        <ul class="flex list-none font-semibold text-2xl gap-7 px-5">
            <li class="text-gray-900 hover:text-gray-500 duration-300"><a href="{{ route('welcome') }}">Home</a></li>
            <li class="text-gray-900 hover:text-gray-500 duration-300"><a href="#">About</a></li>
            <li class="text-gray-900 hover:text-gray-500 duration-300"><a href="#">Contact</a></li>
            <li class="text-gray-900 hover:text-gray-500 duration-300"><a href="{{ route('motor.index') }}">Motor</a></li>
            <li class="text-gray-900 hover:text-gray-500 duration-300"><a href="{{ route('mobil.index') }}">Mobil</a></li>
        </ul>
    </div>
    <div class="flex justify-center items-center">
        <a href="https://instagram.com/osis.smkpesat" class="flex justify-center items-center">
            <i class="fa-brands fa-square-whatsapp text-green-500 text-2xl"></i>
            <p class="ps-1 font-semibold">Mas Khalid</p>
        </a>    
    </div>
</nav>
