@extends('layouts.mainlayout')
@section('main')

<script src="/js/bootstrap.js"></script>

<div class=" h-screen w-auto" style= "background-image:url({{url('IMGS/bear_background.jpg')}})">
 

<div class=" pt-12 flex justify-center">
    <h6 style= "color:A48B73"class=" text-3xl font-bold"> bearshirtbearshirt</h3>
</div>


<div class=" m-10">
<button class=" bg-blue-300 px-4 py-2 rounded" id="menubtn">
Menu
</button>
<div class=" bg-gray-200 hidden flex-col rounded mt-1 p-2 text-sm w-32" id="dropdown">
  <a style = "color:A48B73" href = "/contact" class=" px-2 py-1 hover:text-white hover:bg-blue-300 rounded ">Contact</a>
  <a style= "color:A48B73" href = "/clothes" class=" px-2 py-1  hover:text-white hover:bg-blue-300 rounded  ">Clothes</a>
  <a style = "color:A48B73" href = "/pictures" class=" px-2 py-1  hover:text-white hover:bg-blue-300 rounded  ">Pictures</a>
</div>

</div>

<script>
window.addEventListener('DOMContentLoaded', ()
=> {
  const menuBtn = document.querySelector
  ('#menubtn')
  const dropdown = document.querySelector
  ('#dropdown')

  menuBtn.addEventListener('click', () => {
    dropdown.classList.toggle('hidden')
    dropdown.classList.toggle('flex')
  })
})
</script>


<div class="flex flex-row">
  <a style = "color:A48B73" href = "/contact" class=" pl-10 px-3 hover:text-white">Contact</a>
  <a style= "color:A48B73" href = "/clothes" class=" px-3 hover:text-white ">Clothes</a>
  <a style = "color:A48B73" href = "/pictures" class=" px-3 hover:text-white ">Pictures</a>
</div>

<center>
<div class="flex  flex-nowrapjustify-center">
  @for ($i = 0; $i < 30; $i++)
  <img class=" pt-2 h-10 w-auto" src="{{asset('IMGS/sexbear.jpg')}}"></img>
  @endfor
</div>
</center>

<div class=" flex justify-center pt-8">

<img class=" h-96 w-auto" src=" {{asset('IMGS/bearvideo.mov')}}"></img>

</div>

  
  </body>
  </div>
  <!-- ... --->