@extends('rekap.includes.master')
@section('title', 'settings')
@section('SettingActive','shadow-soft-xl',)
@section('content')
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<!-- Nucleo Icons -->
<link href="/assets/css/nucleo-icons.css" rel="stylesheet" />
<link href="/assets/css/nucleo-svg.css" rel="stylesheet" />
<!-- Main Styling -->
<link href="/assets/css/soft-ui-dashboard-tailwind.css?v=1.0.5" rel="stylesheet" />

<!-- Nepcha Analytics (nepcha.com) -->
<!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
<script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>

<div class="w-full px-6 mx-auto">
    <div class="relative flex items-center p-0 mt-6 overflow-hidden bg-center bg-cover min-h-75 rounded-2xl" style="background-image: url('{{ asset('assets/img/curved-images/curved0.jpg') }}'); background-position-y: 50%">
      <span class="absolute inset-y-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-purple-700 to-pink-500 opacity-60"></span>
    </div>
    <div class="relative flex flex-col flex-auto min-w-0 p-4 mx-6 -mt-16 overflow-hidden break-words border-0 shadow-blur rounded-2xl bg-white/80 bg-clip-border backdrop-blur-2xl backdrop-saturate-200">
      <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-auto max-w-full px-3">
          <div class="text-base ease-soft-in-out h-18.5 w-18.5 relative inline-flex items-center justify-center rounded-xl text-white transition-all duration-200">
            <img src="{{asset('assets/img/bruce-mars.jpg')}}" alt="profile_image" class="w-full shadow-soft-sm rounded-xl" />
          </div>
        </div>
        <div class="flex-none w-auto max-w-full px-3 my-auto">
          <div class="h-full">
            <h5 class="mb-1">Alec Thompson</h5>
            <p class="mb-0 font-semibold leading-normal text-sm">CEO / Co-Founder</p>
          </div>
        </div>
        <div class="w-full max-w-full px-3 mx-auto mt-4 sm:my-auto sm:mr-0 md:w-1/2 md:flex-none lg:w-4/12">
          <div class="relative right-0">
            <ul class="relative flex flex-wrap p-1 list-none bg-transparent rounded-xl" nav-pills role="tablist">
              <li class="z-30 flex-auto text-center">
                <a class="z-30 block w-full px-0 py-1 mb-0 transition-all border-0 rounded-lg ease-soft-in-out bg-inherit text-slate-700" nav-link active href="javascript:;" role="tab" aria-selected="true">
                  <svg class="text-slate-700" width="16px" height="16px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g transform="translate(1716.000000, 291.000000)">
                          <g transform="translate(603.000000, 0.000000)">
                            <path class="fill-slate-800" d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z"></path>
                            <path class="fill-slate-800" d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z" opacity="0.7"></path>
                            <path class="fill-slate-800" d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z" opacity="0.7"></path>
                          </g>
                        </g>
                      </g>
                    </g>
                  </svg>
                  <span class="ml-1">App</span>
                </a>
              </li>
              <li class="z-30 flex-auto text-center">
                <a class="z-30 block w-full px-0 py-1 mb-0 transition-all border-0 rounded-lg ease-soft-in-out bg-inherit text-slate-700" nav-link href="javascript:;" role="tab" aria-selected="false">
                  <svg class="text-slate-700" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>document</title>
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g transform="translate(1716.000000, 291.000000)">
                          <g transform="translate(154.000000, 300.000000)">
                            <path class="fill-slate-800" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z" opacity="0.603585379"></path>
                            <path class="fill-slate-800" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"></path>
                          </g>
                        </g>
                      </g>
                    </g>
                  </svg>
                  <span class="ml-1">Messages</span>
                </a>
              </li>
              <li class="z-30 flex-auto text-center">
                <a class="z-30 block w-full px-0 py-1 mb-0 transition-colors border-0 rounded-lg ease-soft-in-out bg-inherit text-slate-700" nav-link href="javascript:;" role="tab" aria-selected="false">
                  <svg class="text-slate-700" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>settings</title>
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g transform="translate(1716.000000, 291.000000)">
                          <g transform="translate(304.000000, 151.000000)">
                            <polygon class="fill-slate-800" opacity="0.596981957" points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"></polygon>
                            <path class="fill-slate-800" d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z" opacity="0.596981957"></path>
                            <path class="fill-slate-800" d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"></path>
                          </g>
                        </g>
                      </g>
                    </g>
                  </svg>
                  <span class="ml-1">Settings</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="w-full p-6 mx-auto">
        <div class="flex flex-wrap -mx-3">
          <div class="w-full max-w-full px-3 lg-max:mt-6 xl:w-4/12">
            <div class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="p-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
                    <div class="flex flex-wrap -mx-3">
                        <div class="flex items-center w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-none">
                            <h6 class="mb-0">Profile Information</h6>
                        </div>
                        <div class="w-full max-w-full px-3 text-right shrink-0 md:w-4/12 md:flex-none">                        
                          <!-- Ikon untuk tambah atau edit perusahaan (menggunakan satu ikon saja) -->
                          <a href="{{route ('settingperusahaan.indexEditPerusahaan')}}" data-target="tooltip_trigger" data-placement="top">
                            <i class="leading-normal fas fa-user-edit text-sm text-slate-400"></i> <!-- Ikon yang sama untuk tambah atau edit -->
                          </a>              
                        </div>              
                    </div>
                </div>
                <div class="flex-auto p-4">
                  <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                      <!-- Nama Perusahaan -->
                      <li class="relative block px-4 py-2 pt-0 pl-0 leading-normal bg-white border-0 rounded-t-lg text-sm text-inherit">
                          <strong class="text-slate-700">Nama Perusahaan:</strong>
                          <!-- Menampilkan data jika ada, jika tidak tampilkan teks default -->
                          <span class="text-sm text-gray-600">
                              {{ isset($perusahaan) && $perusahaan->nama_perusahaan ? $perusahaan->nama_perusahaan : 'Data tidak tersedia' }}
                          </span>
                      </li>
              
                      <!-- Nama Direktur -->
                      <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit">
                          <strong class="text-slate-700">Nama Direktur:</strong>
                          <!-- Menampilkan data jika ada, jika tidak tampilkan teks default -->
                          <span class="text-sm text-gray-600">
                              {{ isset($perusahaan) && $perusahaan->nama_direktur ? $perusahaan->nama_direktur : 'Data tidak tersedia' }}
                          </span>
                      </li>
              
                      <!-- Logo -->
                      <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit">
                          <strong class="text-slate-700">Logo:</strong>
                          <!-- Menampilkan logo jika ada, jika tidak tampilkan teks default -->
                          <span class="text-sm text-gray-600">
                              @if(isset($perusahaan) && $perusahaan->logo)
                                  <img src="{{ asset('storage/' . $perusahaan->logo) }}" alt="Logo Perusahaan" class="h-8 w-8 rounded-full">
                              @else
                                  Data tidak tersedia
                              @endif
                          </span>
                      </li>
                  </ul>
              </div>              
            </div>
        </div>
        <div class="w-full max-w-full px-3 lg-max:mt-6 xl:w-4/12">
          <div class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="p-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
                  <div class="flex flex-wrap -mx-3">
                      <div class="flex items-center w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-none">
                          <h6 class="mb-0">Kontak Perusahaan</h6>
                      </div>
                      <div class="w-full max-w-full px-3 text-right shrink-0 md:w-4/12 md:flex-none">
                          <a href="{{route ('settingperusahaan.indexEditKontakPerusahaan')}}" data-target="tooltip_trigger" data-placement="top">
                              <i class="leading-normal fas fa-user-edit text-sm text-slate-400"></i>
                          </a>
                      </div>
                  </div>
              </div>
              <div class="flex-auto p-4">
                  <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                      <li class="relative block px-4 py-2 pt-0 pl-0 leading-normal bg-white border-0 rounded-t-lg text-sm text-inherit">
                          <strong class="text-slate-700">No. Telp:</strong>
                          <span class="text-sm text-gray-600">
                            {{ isset($kontakPerusahaan) && $kontakPerusahaan->no_telepon ? $kontakPerusahaan->no_telepon : 'Data tidak tersedia' }}
                          </span>
                      </li>
                      <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit">
                          <strong class="text-slate-700">Email:</strong>
                          <span class="text-sm text-gray-600">
                            {{ isset($kontakPerusahaan) && $kontakPerusahaan->email ? $kontakPerusahaan->email : 'Data tidak tersedia' }}
                          </span>
                      </li>
                      <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit">
                          <strong class="text-slate-700">Instagram:</strong>
                          <span class="text-sm text-gray-600">
                            {{ isset($kontakPerusahaan) && $kontakPerusahaan->instagram ? $kontakPerusahaan->instagram : 'Data tidak tersedia' }}
                          </span> 
                      </li>
                      <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit">
                          <strong class="text-slate-700">WhatsApp:</strong>
                          <span class="text-sm text-gray-600">
                            {{ isset($kontakPerusahaan) && $kontakPerusahaan->wa ? $kontakPerusahaan->wa : 'Data tidak tersedia' }}
                          </span> 
                      </li>
                  </ul>
              </div>
          </div>
        </div>
        <div class="w-full max-w-full px-3 lg-max:mt-6 xl:w-4/12">
          <div class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="p-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
                  <div class="flex flex-wrap -mx-3">
                      <div class="flex items-center w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-none">
                          <h6 class="mb-0">Alamat Perusahaan</h6>
                      </div>
                      <div class="w-full max-w-full px-3 text-right shrink-0 md:w-4/12 md:flex-none">
                          <a href="{{route ('settingperusahaan.indexEditAlamatPerusahaan')}}" data-target="tooltip_trigger" data-placement="top">
                              <i class="leading-normal fas fa-user-edit text-sm text-slate-400"></i>
                          </a>
                      </div>
                  </div>
              </div>
              <div class="flex-auto p-4">
                  <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                      <li class="relative block px-4 py-2 pt-0 pl-0 leading-normal bg-white border-0 rounded-t-lg text-sm text-inherit">
                          <strong class="text-slate-700">Provinsi:</strong>
                          <span class="text-sm text-gray-600">
                            {{ isset($alamatPerusahaan) && $alamatPerusahaan->provinsi ? $alamatPerusahaan->provinsi : 'Data tidak tersedia' }}
                          </span>
                      </li>
                      <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit">
                          <strong class="text-slate-700">Kabupaten:</strong>
                          <span class="text-sm text-gray-600">
                            {{ isset($alamatPerusahaan) && $alamatPerusahaan->kabupaten ? $alamatPerusahaan->kabupaten : 'Data tidak tersedia' }}
                          </span>
                      </li>
                      <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit">
                          <strong class="text-slate-700">Kecamatan:</strong>
                          <span class="text-sm text-gray-600">
                            {{ isset($alamatPerusahaan) && $alamatPerusahaan->kecamatan ? $alamatPerusahaan->kecamatan : 'Data tidak tersedia' }}
                          </span>
                      </li>
                      <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit">
                          <strong class="text-slate-700">Kelurahan:</strong>
                          <span class="text-sm text-gray-600">
                            {{ isset($alamatPerusahaan) && $alamatPerusahaan->kelurahan ? $alamatPerusahaan->kelurahan : 'Data tidak tersedia' }}
                          </span>
                      </li>
                      <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit">
                          <strong class="text-slate-700">Kode Pos:</strong>
                          <span class="text-sm text-gray-600">
                            {{ isset($alamatPerusahaan) && $alamatPerusahaan->kode_pos ? $alamatPerusahaan->kode_pos : 'Data tidak tersedia' }}
                          </span>
                      </li>
                      <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit">
                          <strong class="text-slate-700">RT:</strong>
                          <span class="text-sm text-gray-600">
                            {{ isset($alamatPerusahaan) && $alamatPerusahaan->rt ? $alamatPerusahaan->rt : 'Data tidak tersedia' }}
                          </span>
                      </li>
                      <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit">
                          <strong class="text-slate-700">RW:</strong>
                          <span class="text-sm text-gray-600">
                            {{ isset($alamatPerusahaan) && $alamatPerusahaan->rw ? $alamatPerusahaan->rw : 'Data tidak tersedia' }}
                          </span>
                      </li>
                      <li class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit">
                          <strong class="text-slate-700">Detail Lainnya:</strong>
                          <span class="text-sm text-gray-600">
                            {{ isset($alamatPerusahaan) && $alamatPerusahaan->detail_lainnya ? $alamatPerusahaan->detail_lainnya : 'Data tidak tersedia' }}
                          </span>
                      </li>
                  </ul>
              </div>
          </div>
        </div>
    {{-- </div> --}}
    </div>
</div>

  </script>
<!-- plugin for scrollbar  -->
<script src="/assets/js/plugins/perfect-scrollbar.min.js" async></script>
<!-- github button -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- main script file  -->
<script src="/assets/js/soft-ui-dashboard-tailwind.js?v=1.0.5" async></script>
@endsection