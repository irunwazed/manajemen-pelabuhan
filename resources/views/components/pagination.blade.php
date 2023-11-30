<?php

$page = @$page ? $page : 1;
$page = @$page ? $page : 1;
$totalPage = @$totalPage ? $totalPage : 1;
$link = @$link ? $link : "search=" . @$request['search'];


?>
<nav aria-label="Page navigation example">
  <ul class="inline-flex -space-x-px text-base h-10 float-right mt-1">
    <li>
      @if($page > 1)
      <a href="?page={{ $page-1 }}&{{ $link }}" class="flex items-center justify-center px-3 h-8 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
      @else
      <span class="flex items-center justify-center px-3 h-8 ml-0 leading-tight text-gray-500  border border-gray-300 rounded-l-lg bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</span>
      @endif

    </li>

    @for($i = $page-3; $i <= $page+3; $i++) @if($i==$page) <li>
      <a href="?page={{ $page-1 }}&{{ $link }}" aria-current="page" class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">{{ $i }}</a>
      <li>
        @elseif($i >= 1 && $i <= $totalPage) <li>
          <a href="?page={{ $i }}&{{ $link }}" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">{{ $i }}</a>
      </li>
      @endif

      @endfor


      <li>
        @if($page < $totalPage) <a href="?page={{ $page+1 }}&{{ $link }}" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
          @else

          <span class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 border border-gray-300 rounded-r-lg bg-gray-100  dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</span>
          @endif
      </li>
  </ul>
</nav>

