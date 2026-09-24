<!--
=========================================================
* Soft UI Dashboard Tailwind - v1.0.5
=========================================================
-->
<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}" />
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}" />
    <title>Profile Sekolah - {{ $profile->nama_sekolah ?? 'Soft UI Dashboard' }}</title>

    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/nucleo-svg.css') }}" rel="stylesheet" />
    
    <!-- Popper JS -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    
    <!-- Main Styling -->
    <link href="{{ asset('css/soft-ui-dashboard-tailwind.css?v=1.0.5') }}" rel="stylesheet" />
  </head>

  <body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">
    <!-- Sidebar -->
    <aside class="max-w-62.5 ease-nav-brand z-990 fixed inset-y-0 my-4 ml-4 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 bg-white p-0 antialiased shadow-none transition-transform duration-200 xl:left-0 xl:translate-x-0 xl:bg-transparent">
      <div class="h-19.5">
        <i class="absolute top-0 right-0 hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden" sidenav-close></i>
        <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700" href="{{ route('admin.dashboard') }}">
          <img src="{{ asset('img/logo-ct.png') }}" class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-8" alt="main_logo" />
          <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">MTs YAPPENA</span>
        </a>
      </div>

      <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />

      <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
        <ul class="flex flex-col pl-0 mb-0">
          
          <!-- Item Menu: Dashboard -->
          <li class="mt-0.5 w-full">
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ route('admin.dashboard') }}">
              <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>shop</title>
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                        <g transform="translate(0.000000, 148.000000)">
                          <path class="fill-slate-800" d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-1.23209662e-05,11.4391667 0.125833333,12.1141667 0.358333333,12.6791667 L12.1166667,41.2291667 C12.8222883,42.9405626 14.5050212,44.0628394 16.3533333,44 L30.6466667,44 C32.4950188,44.0628394 34.1777517,42.9405626 34.8833333,41.2291667 L46.6416667,12.6791667 C46.8741667,12.1141667 47,11.4391667 47,11.75 C47,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"></path>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Dashboard</span>
            </a>
          </li>

          <!-- Item Menu: Profile Sekolah (Aktif) -->
          <li class="mt-0.5 w-full">
            <a class="py-2.7 shadow-soft-xl text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white px-4 font-semibold text-slate-700 transition-colors" href="{{ route('admin.profile') }}">
              <div class="bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>office</title>
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                        <g transform="translate(153.000000, 2.000000)">
                          <path class="fill-white" opacity="0.6" d="M12.25,17.5 L8.75,17.5 L8.75,14 L12.25,14 L12.25,17.5 Z M12.25,24.5 L8.75,24.5 L8.75,21 L12.25,21 L12.25,24.5 Z M12.25,31.5 L8.75,31.5 L8.75,28 L12.25,28 L12.25,31.5 Z M21,17.5 L17.5,17.5 L17.5,14 L21,14 L21,17.5 Z M21,24.5 L17.5,24.5 L17.5,21 L21,21 L21,24.5 Z M21,31.5 L17.5,31.5 L17.5,28 L21,28 L21,31.5 Z M29.75,17.5 L26.25,17.5 L26.25,14 L29.75,14 L29.75,17.5 Z M29.75,24.5 L26.25,24.5 L26.25,21 L29.75,21 L29.75,24.5 Z M29.75,31.5 L26.25,31.5 L26.25,28 L29.75,28 L29.75,31.5 Z"></path>
                          <path class="fill-white" d="M38.5,0 L3.5,0 C1.567,0 0,1.567 0,3.5 L0,38.5 C0,40.433 1.567,42 3.5,42 L38.5,42 C40.433,42 42,40.433 42,38.5 L42,3.5 C42,1.567 40.433,0 38.5,0 Z M35,35 L7,35 L7,7 L35,7 L35,35 Z"></path>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Profile Sekolah</span>
            </a>
          </li>

          <!-- Item Menu: Kelola Guru -->
          <li class="mt-0.5 w-full">
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="#">
              <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>credit-card</title>
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                        <g transform="translate(453.000000, 454.000000)">
                          <path class="fill-slate-800" opacity="0.6" d="M43,10.7482083 L43,3.58273148 C43,1.60354167 41.3964583,0 39.4172685,0 L3.58273148,0 C1.60354167,0 0,1.60354167 0,3.58273148 L0,10.7482083 L43,10.7482083 Z"></path>
                          <path class="fill-slate-800" d="M0,16.125 L0,32.25 C0,34.2291667 1.60354167,35.8327083 3.58273148,35.8327083 L39.4172685,35.8327083 C41.3964583,35.8327083 43,34.2291667 43,32.25 L43,16.125 L0,16.125 Z"></path>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Kelola Guru</span>
            </a>
          </li>

          <!-- Item Menu: Kelola Siswa -->
          <li class="mt-0.5 w-full">
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="#">
              <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>box-3d-50</title>
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                        <g transform="translate(603.000000, 0.000000)">
                          <path class="fill-slate-800" opacity="0.6" d="M25.5,18.06 L41.22,12.82 C41.71,12.66 42,12.2 42,11.68 L42,1.5 C42,0.67 41.33,0 40.5,0 L30.32,0 C29.8,0 29.34,0.29 29.18,0.78 L23.94,16.5 L25.5,18.06 Z"></path>
                          <path class="fill-slate-800" d="M16.5,23.94 L0.78,29.18 C0.29,29.34 0,29.8 0,30.32 L0,40.5 C0,41.33 0.67,42 1.5,42 L11.68,42 C12.2,42 12.66,41.71 12.82,41.22 L18.06,25.5 L16.5,23.94 Z"></path>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Kelola Siswa</span>
            </a>
          </li>

          <!-- Item Menu: Kelola Berita -->
          <li class="mt-0.5 w-full">
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="#">
              <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                <svg width="12px" height="12px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>settings</title>
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                        <g transform="translate(304.000000, 151.000000)">
                          <path class="fill-slate-800" opacity="0.6" d="M38.1,20.9 L35.6,20 C35.4,19.3 35.1,18.6 34.7,18 L36,15.8 C36.4,15.1 36.3,14.2 35.6,13.6 L33.4,11.4 C32.8,10.7 31.9,10.6 31.2,11 L29,12.3 C28.4,11.9 27.7,11.6 27,11.4 L26.1,8.9 C25.8,8 25,7.4 24.1,7.4 L20.9,7.4 C20,7.4 19.2,8 18.9,8.9 L18,11.4 C17.3,11.6 16.6,11.9 16,12.3 L13.8,11 C13.1,10.6 12.2,10.7 11.6,11.4 L9.4,13.6 C8.7,14.2 8.6,15.1 9,15.8 L10.3,18 C9.9,18.6 9.6,19.3 9.4,20 L6.9,20.9 C6,21.2 5.4,22 5.4,22.9 L5.4,26.1 C5.4,27 6,27.8 6.9,28.1 L9.4,29 C9.6,29.7 9.9,30.4 10.3,31 L9,33.2 C8.6,33.9 8.7,34.8 9.4,35.4 L11.6,37.6 C12.2,38.3 13.1,38.4 13.8,38 L16,36.7 C16.6,37.1 17.3,37.4 18,37.6 L18.9,40.1 C19.2,41 20,41.6 20.9,41.6 L24.1,41.6 C25,41.6 25.8,41 26.1,40.1 L27,37.6 C27.7,37.4 28.4,37.1 29,36.7 L31.2,38 C31.9,38.4 32.8,38.3 33.4,37.6 L35.6,35.4 C36.3,34.8 36.4,33.9 36,33.2 L34.7,31 C35.1,30.4 35.4,29.7 35.6,29 L38.1,28.1 C39,27.8 39.6,27 39.6,26.1 L39.6,22.9 C39.6,22 39,21.2 38.1,20.9 Z"></path>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Kelola Berita</span>
            </a>
          </li>

        </ul>
      </div>
    </aside>

    <!-- Konten Utama Dashboard -->
    <div class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen bg-gray-50 transition-all duration-200">
      <!-- Navbar -->
      <nav class="absolute z-20 flex flex-wrap items-center justify-between w-full px-6 py-2 text-white transition-all shadow-none duration-250 ease-soft-in lg:flex-nowrap lg:justify-start" navbar-profile navbar-scroll="true">
        <div class="flex items-center justify-between w-full px-6 py-1 mx-auto flex-wrap-inherit">
          <nav>
            <ol class="flex flex-wrap pt-1 pl-2 pr-4 mr-12 bg-transparent rounded-lg sm:mr-16">
              <li class="leading-normal text-sm">
                <a class="opacity-50" href="javascript:;">Pages</a>
              </li>
              <li class="text-sm pl-2 capitalize leading-normal before:float-left before:pr-2 before:content-['/']" aria-current="page">
                Profile Sekolah
              </li>
            </ol>
            <h6 class="mb-2 ml-2 font-bold text-white capitalize">Profile Sekolah</h6>
          </nav>

          <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
            <div class="flex items-center md:ml-auto md:pr-4">
              <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
                <span class="text-sm ease-soft leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                  <i class="fas fa-search" aria-hidden="true"></i>
                </span>
                <input type="text" class="pl-8.75 text-sm focus:shadow-soft-primary-outline ease-soft w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" placeholder="Cari..." />
              </div>
            </div>
            <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
              <li class="flex items-center">
                <a href="#" class="block px-0 py-2 font-semibold text-white transition-all ease-soft-in-out text-sm">
                  <i class="fa fa-user sm:mr-1" aria-hidden="true"></i>
                  <span class="hidden sm:inline">Masuk</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- Profile Header / Banner -->
      <div class="w-full px-6 mx-auto pt-20">
        <div class="relative flex items-center p-0 mt-6 overflow-hidden bg-center bg-cover min-h-75 rounded-2xl" style="background-image: url('{{ isset($profile->foto) ? asset('storage/' . $profile->foto) : asset('img/curved-images/curved0.jpg') }}'); background-position-y: 50%;">
          <span class="absolute inset-0 z-10 bg-center bg-cover bg-gradient-to-tl from-purple-700 to-pink-500 opacity-60"></span>
        </div>

        <!-- Card Logo & Informasi Utama -->
        <div class="relative flex flex-col flex-auto min-w-0 p-4 mx-6 -mt-16 overflow-hidden break-words bg-white border-0 shadow-blur rounded-2xl bg-clip-border backdrop-blur-2xl backdrop-saturate-200 z-20">
          <div class="flex flex-wrap -mx-3 items-center">
            
                <!-- Container Foto Ukuran Sedang Pas + Tombol Edit -->
                <div style="position: relative; width: 120px; height: 120px; min-width: 120px; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1); border: 3px solid #ffffff; background-color: #f8fafc;" class="group">
                
                <!-- Gambar/Logo Profil (Diberi Batas Ukuran Pasti) -->
                <img 
                    src="{{ isset($profile->logo) ? asset('storage/' . $profile->logo) : asset('img/bruce-mars.jpg') }}" 
                    alt="Profile/Logo" 
                    style="width: 100% !important; height: 100% !important; object-fit: cover !important; display: block !important;" 
                />

                <!-- Tombol Hover 'Ganti Foto' -->
                <a 
                    href="javascript:void(0);" 
                    onclick="document.getElementById('upload-logo-input').click();" 
                    style="position: absolute; inset: 0; background-color: rgba(0, 0, 0, 0.6); color: white; display: flex; flex-direction: column; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.2s ease-in-out; text-decoration: none; font-size: 11px; font-weight: 600;"
                    onmouseover="this.style.opacity='1'"
                    onmouseout="this.style.opacity='0'"
                >
                    <i class="fas fa-camera" style="font-size: 16px; margin-bottom: 4px;"></i>
                    <span>Ganti Foto</span>
                </a>

                <!-- Input file tersembunyi -->
                <input type="file" id="upload-logo-input" style="display: none;" accept="image/*" />
                </div>
            </div>

            <!-- Detail Teks -->
            <div class="flex-none w-auto max-w-full px-3 my-auto">
              <div class="h-full">
                <h5 class="mb-1 font-bold text-slate-700 text-xl">{{ $profile->nama_sekolah ?? 'Nama Sekolah Belum Diisi' }}</h5>
                <p class="mb-0 font-semibold leading-normal text-sm text-slate-400">
                  NPSN: {{ $profile->npsn ?? '-' }} | Kepala Sekolah: {{ $profile->kepala_sekolah ?? '-' }}
                </p>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!-- Detail Informasi ProfileSekolah -->
      <div class="w-full p-6 mx-auto">
        <div class="flex flex-wrap -mx-3">
          <!-- Kartu Detail Profile -->
          <div class="w-full max-w-full px-3 lg:w-8/12 lg:flex-none">
            <div class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border p-6">
              <div class="flex items-center justify-between pb-4 border-b border-gray-200">
                <h6 class="font-bold text-slate-700 mb-0">Informasi Sekolah</h6>
                <a href="#" class="px-4 py-2 text-xs font-bold text-white uppercase transition-all bg-gradient-to-tl from-purple-700 to-pink-500 rounded-lg shadow-soft-md hover:scale-102">
                  <i class="fas fa-edit mr-1"></i> Edit Profile
                </a>
              </div>

              <div class="pt-4">
                <p class="text-sm leading-normal text-slate-500 mb-6">
                  {{ $profile->deskripsi ?? 'Deskripsi sekolah belum diisi.' }}
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                  <div>
                    <span class="text-xs font-bold text-slate-400 uppercase">Kepala Sekolah</span>
                    <p class="text-sm font-semibold text-slate-700 mb-3">{{ $profile->kepala_sekolah ?? '-' }}</p>
                  </div>
                  <div>
                    <span class="text-xs font-bold text-slate-400 uppercase">NPSN</span>
                    <p class="text-sm font-semibold text-slate-700 mb-3">{{ $profile->npsn ?? '-' }}</p>
                  </div>
                  <div>
                    <span class="text-xs font-bold text-slate-400 uppercase">Tahun Berdiri</span>
                    <p class="text-sm font-semibold text-slate-700 mb-3">{{ $profile->tahun_berdiri ?? '-' }}</p>
                  </div>
                  <div>
                    <span class="text-xs font-bold text-slate-400 uppercase">Kontak / Telepon</span>
                    <p class="text-sm font-semibold text-slate-700 mb-3">{{ $profile->kontak ?? '-' }}</p>
                  </div>
                </div>

                <div class="mt-4">
                  <span class="text-xs font-bold text-slate-400 uppercase">Alamat</span>
                  <p class="text-sm font-semibold text-slate-700 mb-3">{{ $profile->alamat ?? '-' }}</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Kartu Visi & Misi -->
          <div class="w-full max-w-full px-3 mt-6 lg:w-4/12 lg:mt-0 lg:flex-none">
            <div class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border p-6">
              <h6 class="font-bold text-slate-700 pb-4 border-b border-gray-200 mb-4">Visi & Misi</h6>
              <div class="text-sm text-slate-600 whitespace-pre-line leading-relaxed">
                {{ $profile->visi_misi ?? 'Visi & Misi belum diisi.' }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>