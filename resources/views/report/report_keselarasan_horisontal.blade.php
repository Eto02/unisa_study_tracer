@extends('layouts.app')

@section('page_title','Report Kesalarasan Horisontal')
@section('content_name','REPORT KESELARASAN HORISONTAL')
@section('content_body')
    <!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white shadow overflow-hidden sm:rounded-lg">
    <form action="#" method="POST">
    <div class="border-t border-gray-200">
      <dl>
        <div class="bg-gray-50 px-4 py-5 items-center flex ">
          <dt class="text-sm font-medium text-gray-500 mr-10 w-32 ">
            Kode PT
          </dt>
          <dd class="mt-1 text-sm text-gray-900 flex-auto ">
            09090909
          </dd>
        </div>
        <div class="bg-white px-4 py-5 items-center flex ">
          <dt class="text-sm font-medium text-gray-500 mr-10 w-32 ">
          Pengelompokan
          </dt>
          <dd class="mt-1 text-sm text-gray-900 flex-auto ">
            <select id="country" name="country" autocomplete="country-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option>Perguruan Tinggi</option>
                <option>Prodi</option>
                <option>Angkatan</option>
              </select>
          </dd>
        </div>
        <div class="bg-gray-50 px-4 py-5 items-center flex ">
          <dt class="text-sm font-medium text-gray-500 mr-10 w-32 ">
           Tahun Lulus
          </dt>
          <dd class="mt-1 text-sm text-gray-900 flex-auto">
            <input type="text" name="email-address" id="email-address" autocomplete="email" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
          </dd>
        </div>
   
  
      </dl>
    </div>
    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          Submit
        </button>
    </div>
  </form>
  </div>
  
    
@endsection