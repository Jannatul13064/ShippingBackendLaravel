@extends('layouts.admin1')

@section('main-section')

<div class="min-h-[73vh]">
    <div class="main_content_head">
      <div class="flex items-center gap-2">
        <i class="fa-solid fa-folder-open"></i>
        <p>Home</p>
      </div>

      <div class="flex items-center gap-2">
        <i class="fa-solid fa-calendar-days"></i>
        <p>06-08-2023</p>
      </div>
    </div>

    <div class="border rounded my-4">
      <div
        class="border-b p-2 bg-gray-100 font-medium flex items-center gap-2"
      >
        <i class="fa-solid fa-table-list"></i>
        <p>Menu</p>
      </div>

      <nav class="content_menu p-4">
        <ul>
          <li>
            <a href="pages/seaExport/seaExport.html">
              <i class="fa-solid fa-ship"></i>
              <p class="font-medium">Sea Export</p>
            </a>
          </li>

          <li>
            <a href="pages/seaImport/seaImport.html">
              <i class="fa-solid fa-ship"></i>
              <p class="font-medium">Sea Import</p>
            </a>
          </li>

          <li>
            <a href="pages/airExport/airExport.html">
              <i class="fa-solid fa-plane-departure"></i>
              <p class="font-medium">Air Export</p>
            </a>
          </li>

          <li>
            <a href="pages/airImport/airImport.html">
              <i class="fa-solid fa-plane-arrival"></i>
              <p class="font-medium">Air Import</p>
            </a>
          </li>

          <li>
            <a href="pages/maintenance/maintenance.html">
              <i class="fa-solid fa-screwdriver-wrench"></i>
              <p class="font-medium">Maintenance</p>
            </a>
          </li>
        </ul>
      </nav>
    </div>

    <div class="border rounded my-4">
      <div class="border-b p-2 bg-gray-100 font-medium flex items-center gap-2">
        <i class="fa-solid fa-bell"></i>
        <p>Notification</p>
      </div>

      <nav class="content_menu p-4">
        <ul>
          <li>
            <a href="pages/">
              <i class="fa-solid fa-bell"></i>
              <p class="font-medium">Notification</p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>

@endsection


