<!-- component -->
<!-- This is an example component -->
<div class="max-w-2xl mx-auto">
  <script src="https://cdn.tailwindcss.com"></script>
  <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm dark:bg-gray-800 dark:border-gray-700">
    @if(isset($findrec[0]))
    <form action="{{url('/'.$findrec[0]->id)}}"  method="post" > 
    {{csrf_field()}}
      <a href="#">
          <img class="rounded-t-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="">
      </a>
      <div class="p-5">
          <a href="#">
              <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2 dark:text-white">{{isset($findrec[0]->name) ? $findrec[0]->name:""}}</h5>
          </a>
          <p class="font-normal text-gray-700 mb-3 dark:text-gray-400">{{isset($findrec[0]->title) ? $findrec[0]->title:""}}</p>
          <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            {{isset($findrec[0]->description) ? $findrec[0]->description:""}}
              <svg class="-mr-1 ml-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </a>
      </div>
  </div>

  <p class="mt-5">This card component is part of a larger, open-source library of Tailwind CSS components. Learn more by going to the official <a class="text-blue-600 hover:underline" href="#" target="_blank">Flowbite Documentation</a>.</p>
</div>
@endif