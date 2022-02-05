<div id="rightSide" class="z-50 hidden w-2/12 h-screen text-center md:inline md:w-2/12 lg:text-lg xl:text-xl 2xl:text-2xl" style="position: relative;">

    <div
      class="flex items-center justify-center w-full mx-auto mt-1 mb-2 rounded-lg logo md:w-full whiteCOLOR ">
     
      <p class="hidden mt-2 mr-2 md:inline" id="text">ناوی كۆگا</p>
    </div>

    <div
      class="flex items-center justify-center w-full mt-1 md:p-2 whiteBG ">
      <img src="https://pic.onlinewebfonts.com/svg/img_568656.png"
        alt="" class="w-12 w-full h-12 rounded-full md:h-16 md:w-16" id="iconIMG">
      <p class="hidden mr-5 blueCOLOR md:inline" id="text2">{{Auth::user()->name}}</p>
    </div>

    <div class="z-50 w-full mt-2 mb-48 rounded-lg md:p-2 whiteCOLOR">

      <ol class="p-0 mt-5 text-xs md:text-sm lg:text-md xl:text-lg 2xl:text-xl linkMenu">

       
        <li
          class="relative py-1 my-5 border-b border-black hover:border-red-500 lg:text-md xl:text-lg 2xl:text-xl listOL">
          <a  href="{{route("user.item")}}">
            <p class="flex justify-between ">
              <span>
                items 
              </span>
              <i class="fas fa-box"></i>
            </p>
          </a>
        </li>

        <li
          class="relative py-1 my-5 border-b border-black hover:border-red-500 lg:text-md xl:text-lg 2xl:text-xl listOL">
          <a  href="{{route("user.transaction")}}">
            <p class="flex justify-between ">
              <span>
                transaction 
              </span>
              <i class="fas fa-dolly"></i>
            </p>
          </a>
        </li>


    

      </ol>

    </div>
    

  </div>