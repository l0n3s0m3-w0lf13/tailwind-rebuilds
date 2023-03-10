<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>l0n3s0m3-w0lf13/example</title>
    @vite(['resources/css/pages.css'])
</head>

<body class="bg-dark-hub">
<!-- Top Navs -->
<div class="text-gray-900 text-sm">
    <!-- Primer nav -->
    <nav class="bg-gray-github text-white px-8 py-3.5 flex items-center justify-between">
        <!-- Parte izquierda -->
        <div class="flex items-center space-x-4">
            <!-- Logo -->
            <a href="#" class="text-white hover:text-gray-400">
                <svg class="w-8 fill-current" viewBox="0 0 16 16" aria-hidden="true">
                    <path fill-rule="evenodd"
                          d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z">
                    </path>
                </svg>
            </a>
            <!-- Search -->
            <div class="relative">
                <!-- Placeholder -->
                <input type="text"
                       class="rounded bg-dark-hub placeholder-gray-300 border border-gray-700 w-68 px-3 py-1"
                       placeholder="Search or jump to...">
                <!-- / -->
                <div class="absolute top-0 right-0 flex items-center h-full">
                    <div class="border border-gray-600 rounded text-xs text-gray-400 px-1.5 mr-1.5">/</div>
                </div>
            </div>
            <!-- Opciones navegaci??n -->
            <ul class="flex items-center font-semibold space-x-4">
                <li><a href="#" class="hover:text-gray-400">Pull requests</a></li>
                <li><a href="#" class="hover:text-gray-400">Issues</a></li>
                <li><a href="#" class="hover:text-gray-400">Codespaces</a></li>
                <li><a href="#" class="hover:text-gray-400">Marketplace</a></li>
                <li><a href="#" class="hover:text-gray-400">Explore</a></li>
            </ul>
        </div>
        <!-- Parte derecha -->
        <div class="flex items-center space-x-4 text-white">
            <!-- Notificaciones -->
            <a href="#" class="relative hover:text-gray-400">
                <svg class="w-4 fill-current" aria-hidden="true" viewBox="0 0 16 16" data-view-component="true">
                    <path
                        d="M8 16a2 2 0 001.985-1.75c.017-.137-.097-.25-.235-.25h-3.5c-.138 0-.252.113-.235.25A2 2 0 008 16z">
                    </path>
                    <path fill-rule="evenodd"
                          d="M8 1.5A3.5 3.5 0 004.5 5v2.947c0 .346-.102.683-.294.97l-1.703 2.556a.018.018 0 00-.003.01l.001.006c0 .002.002.004.004.006a.017.017 0 00.006.004l.007.001h10.964l.007-.001a.016.016 0 00.006-.004.016.016 0 00.004-.006l.001-.007a.017.017 0 00-.003-.01l-1.703-2.554a1.75 1.75 0 01-.294-.97V5A3.5 3.5 0 008 1.5zM3 5a5 5 0 0110 0v2.947c0 .05.015.098.042.139l1.703 2.555A1.518 1.518 0 0113.482 13H2.518a1.518 1.518 0 01-1.263-2.36l1.703-2.554A.25.25 0 003 7.947V5z">
                    </path>
                </svg>

                <div class="bg-blue-600 rounded-full w-2 h-2 absolute top-0 right-0"></div>
            </a>
            <!-- + -->
            <a href="#" class="flex items-center hover:text-gray-400">
                <svg class="w-4 fill-current" aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1"
                     width="16" data-view-component="true">
                    <path fill-rule="evenodd"
                          d="M7.75 2a.75.75 0 01.75.75V7h4.25a.75.75 0 110 1.5H8.5v4.25a.75.75 0 11-1.5 0V8.5H2.75a.75.75 0 010-1.5H7V2.75A.75.75 0 017.75 2z">
                    </path>
                </svg>
                <!-- Dropdown Arrow -->
                <svg class="ml-1 w-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                    <path
                        d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                </svg>
            </a>
            <!-- Avatar -->
            <a href="#" class="flex items-center hover:text-gray-400">
                <img src="https://github.com/l0n3s0m3-w0lf13.png" class="w-5 h-5 rounded-full" alt="avatar">
                <!-- Dropdown Arrow -->
                <svg class="ml-1 w-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                    <path
                        d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                </svg>
            </a>
        </div>
    </nav> <!-- end primer nav -->

    <!-- Segundo nav repo -->
    <div class="repo-stats flex items-center justify-between px-8 py-2">
        <!-- Parte izquierda: Repo name -->
        <div class="flex mt-2">
            <svg class="w-4 fill-current text-gray-400" aria-hidden="true" viewBox="0 0 16 16"
                 data-view-component="true">
                <path fill-rule="evenodd"
                      d="M4 4v2h-.25A1.75 1.75 0 002 7.75v5.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 13.25v-5.5A1.75 1.75 0 0012.25 6H12V4a4 4 0 10-8 0zm6.5 2V4a2.5 2.5 0 00-5 0v2h5zM12 7.5h.25a.25.25 0 01.25.25v5.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-5.5a.25.25 0 01.25-.25H12z">
                </path>
            </svg>

            <div class="flex items-center text-xl ml-2">
                <a href="#" class="text-git-blue hover:underline">l0n3s0m3-w0lf13</a>
                <span class="ml-1 text-gray-400">/</span>
                <a href="#" class="text-git-blue hover:underline font-semibold ml-1">
                    example
                    <span class="absolute ml-2 mt-1 text-gray-400 px-2 font-medium text-xs border border-gray-700 rounded-full">Private</span>
                </a>
            </div>
        </div>
        <!-- Parte derecha: Repo options -->
        <div class="flex space-x-2 text-gray-300 text-xs mt-2">
            <!-- Element -->
            <div class="flex items-center space-x-1 bg-bgray border border-gray-700 rounded-md font-semibold
                            hover:border-gray-500 hover:bg-bgray2">
                <button class="flex items-center pr-3 pl-2 py-1">
                    <!-- Icon -->
                    <svg class="w-5 fill-current text-gray-500 mr-1" aria-hidden="true" height="16"
                         viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                              d="M1.679 7.932c.412-.621 1.242-1.75 2.366-2.717C5.175 4.242 6.527 3.5 8 3.5c1.473 0 2.824.742 3.955 1.715 1.124.967 1.954 2.096 2.366 2.717a.119.119 0 010 .136c-.412.621-1.242 1.75-2.366 2.717C10.825 11.758 9.473 12.5 8 12.5c-1.473 0-2.824-.742-3.955-1.715C2.92 9.818 2.09 8.69 1.679 8.068a.119.119 0 010-.136zM8 2c-1.981 0-3.67.992-4.933 2.078C1.797 5.169.88 6.423.43 7.1a1.619 1.619 0 000 1.798c.45.678 1.367 1.932 2.637 3.024C4.329 13.008 6.019 14 8 14c1.981 0 3.67-.992 4.933-2.078 1.27-1.091 2.187-2.345 2.637-3.023a1.619 1.619 0 000-1.798c-.45-.678-1.367-1.932-2.637-3.023C11.671 2.992 9.981 2 8 2zm0 8a2 2 0 100-4 2 2 0 000 4z">
                        </path>
                    </svg>
                    <div>Unwatch</div>
                    <span class="flex items-center justify-center mx-2 bg-bgray2 w-5 h-5 rounded-full">
                            <div class="">1</div>
                        </span>
                    <!-- Dropdown Arrow -->
                    <svg class="w-1.5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path
                            d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                    </svg>
                </button>
            </div>

            <!-- Element -->
            <div class="flex items-center bg-bgray rounded-md">
                <div
                    class="flex items-center space-x-1 border-l border-t border-b border-gray-700 font-semibold rounded-l-md">
                    <button class="flex items-center pr-3 pl-2 py-1 text-gray-600">
                        <!-- Icon -->
                        <svg class="w-5 fill-current text-gray-600 mr-2" aria-hidden="true" height="16"
                             viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                  d="M5 3.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm0 2.122a2.25 2.25 0 10-1.5 0v.878A2.25 2.25 0 005.75 8.5h1.5v2.128a2.251 2.251 0 101.5 0V8.5h1.5a2.25 2.25 0 002.25-2.25v-.878a2.25 2.25 0 10-1.5 0v.878a.75.75 0 01-.75.75h-4.5A.75.75 0 015 6.25v-.878zm3.75 7.378a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm3-8.75a.75.75 0 100-1.5.75.75 0 000 1.5z">
                            </path>
                        </svg>
                        <div>Fork</div>
                        <span class="flex items-center justify-center ml-2 bg-bgray2 w-5 h-5 rounded-full">
                                <div>0</div>
                            </span>
                    </button>
                </div>

                <div
                    class="py-1.5 border-l border-t border-b border-r border-gray-700 rounded-r-md hover:rounded-r-md hover:border-gray-500 hover:bg-bgray2">
                    <button>
                        <!-- Dropdown Arrow -->
                        <svg class="w-1.5 fill-current mx-3.5" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 320 512">
                            <path
                                d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Element -->
            <div class="flex items-center bg-bgray rounded-md">
                <div
                    class="flex items-center space-x-1 border-t border-b border-l border-gray-700 font-semibold rounded-l-md hover:border-gray-500 hover:bg-bgray2 hover:border-r peer">
                    <button class="flex items-center pr-3 pl-2 py-1">
                        <!-- Icon -->
                        <svg class="w-4 mr-2 ml-1 fill-current text-amber-400 mr-1" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                  d="M8 .25a.75.75 0 01.673.418l1.882 3.815 4.21.612a.75.75 0 01.416 1.279l-3.046 2.97.719 4.192a.75.75 0 01-1.088.791L8 12.347l-3.766 1.98a.75.75 0 01-1.088-.79l.72-4.194L.818 6.374a.75.75 0 01.416-1.28l4.21-.611L7.327.668A.75.75 0 018 .25z">
                            </path>
                        </svg>
                        <div>Starred</div>
                        <span class="flex items-center justify-center ml-2 bg-bgray2 w-5 h-5 rounded-full">
                                <div>69</div>
                            </span>
                    </button>
                </div>

                <div
                    class="py-1.5 border border-gray-700 rounded-r-md hover:border-gray-500 hover:bg-bgray2 peer-hover:border-l-0">
                    <button>
                        <!-- Dropdown Arrow -->
                        <svg class="w-1.5 fill-current mx-3.5" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 320 512">
                            <path
                                d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div> <!-- end repo-stats -->
    </div> <!-- end segundo nav -->

    <!-- Repo nav -->
    <ul class="flex items-center border-b border-gray-800 px-8 mt-4 text-gray-300">
        <li class="font-normal border-b-2 border-select-orange mr-3.5">
            <!-- Element -->
            <button class="p-1.5 mb-2 hover:bg-bgray hover:rounded-md">
                <a href="#" class="flex items-center">
                    <svg class="w-4 mr-1 fill-current text-gray-400" aria-hidden="true" viewBox="0 0 16 16" version="1.1"
                         data-view-component="true">
                        <path fill-rule="evenodd"
                              d="M4.72 3.22a.75.75 0 011.06 1.06L2.06 8l3.72 3.72a.75.75 0 11-1.06 1.06L.47 8.53a.75.75 0 010-1.06l4.25-4.25zm6.56 0a.75.75 0 10-1.06 1.06L13.94 8l-3.72 3.72a.75.75 0 101.06 1.06l4.25-4.25a.75.75 0 000-1.06l-4.25-4.25z">
                        </path>
                    </svg>
                    <span class="ml-1.5 font-semibold">Code</span>
                </a>
            </button>
        </li>
        <!-- Element -->
        <li class="mr-3.5">
            <button class="p-1.5 mb-2 hover:bg-bgray hover:rounded-md">
                <a href="#" class="flex items-center">
                    <svg class="w-4 mr-1 fill-current text-gray-400" aria-hidden="true" viewBox="0 0 16 16"
                         data-view-component="true">
                        <path d="M8 9.5a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path>
                        <path fill-rule="evenodd"
                              d="M8 0a8 8 0 100 16A8 8 0 008 0zM1.5 8a6.5 6.5 0 1113 0 6.5 6.5 0 01-13 0z"></path>
                    </svg>
                    <span class="ml-1.5">Issues</span>
                </a>
            </button>
        </li>
        <!-- Element -->
        <li class="mr-3.5">
            <button class="p-1.5 mb-2 hover:bg-bgray hover:rounded-md">
                <a href="#" class="flex items-center">
                    <svg class="w-4 mr-1 fill-current text-gray-400" aria-hidden="true" viewBox="0 0 16 16"
                         data-view-component="true">
                        <path fill-rule="evenodd"
                              d="M7.177 3.073L9.573.677A.25.25 0 0110 .854v4.792a.25.25 0 01-.427.177L7.177 3.427a.25.25 0 010-.354zM3.75 2.5a.75.75 0 100 1.5.75.75 0 000-1.5zm-2.25.75a2.25 2.25 0 113 2.122v5.256a2.251 2.251 0 11-1.5 0V5.372A2.25 2.25 0 011.5 3.25zM11 2.5h-1V4h1a1 1 0 011 1v5.628a2.251 2.251 0 101.5 0V5A2.5 2.5 0 0011 2.5zm1 10.25a.75.75 0 111.5 0 .75.75 0 01-1.5 0zM3.75 12a.75.75 0 100 1.5.75.75 0 000-1.5z">
                        </path>
                    </svg>
                    <span class="ml-1.5">Pull request</span>
                </a>
            </button>
        </li>
        <!-- Element -->
        <li class="mr-3.5">
            <button class="p-1.5 mb-2 hover:bg-bgray hover:rounded-md">
                <a href="#" class="flex items-center">
                    <svg class="w-4 mr-1 fill-current text-gray-400" aria-hidden="true" viewBox="0 0 16 16"
                         data-view-component="true">
                        <path fill-rule="evenodd"
                              d="M1.5 8a6.5 6.5 0 1113 0 6.5 6.5 0 01-13 0zM8 0a8 8 0 100 16A8 8 0 008 0zM6.379 5.227A.25.25 0 006 5.442v5.117a.25.25 0 00.379.214l4.264-2.559a.25.25 0 000-.428L6.379 5.227z">
                        </path>
                    </svg>
                    <span class="ml-1.5">Actions</span>
                </a>
            </button>
        </li>
        <!-- Element -->
        <li class="mr-3.5">
            <button class="p-1.5 mb-2 hover:bg-bgray hover:rounded-md">
                <a href="#" class="flex items-center">
                    <svg class="w-4 mr-1 fill-current text-gray-400" aria-hidden="true" viewBox="0 0 16 16"
                         data-view-component="true">
                        <path fill-rule="evenodd"
                              d="M0 1.75C0 .784.784 0 1.75 0h12.5C15.216 0 16 .784 16 1.75v12.5A1.75 1.75 0 0114.25 16H1.75A1.75 1.75 0 010 14.25V1.75zM1.5 6.5v7.75c0 .138.112.25.25.25H5v-8H1.5zM5 5H1.5V1.75a.25.25 0 01.25-.25H5V5zm1.5 1.5v8h7.75a.25.25 0 00.25-.25V6.5h-8zm8-1.5h-8V1.5h7.75a.25.25 0 01.25.25V5z">
                        </path>
                    </svg>
                    <span class="ml-1.5">Projects</span>
                </a>
            </button>
        </li>
        <!-- Element -->
        <li class="mr-3.5">
            <button class="p-1.5 mb-2 hover:bg-bgray hover:rounded-md">
                <a href="#" class="flex items-center">
                    <svg class="w-4 mr-1 fill-current text-gray-400" aria-hidden="true" viewBox="0 0 16 16"
                         data-view-component="true">
                        <path fill-rule="evenodd"
                              d="M7.467.133a1.75 1.75 0 011.066 0l5.25 1.68A1.75 1.75 0 0115 3.48V7c0 1.566-.32 3.182-1.303 4.682-.983 1.498-2.585 2.813-5.032 3.855a1.7 1.7 0 01-1.33 0c-2.447-1.042-4.049-2.357-5.032-3.855C1.32 10.182 1 8.566 1 7V3.48a1.75 1.75 0 011.217-1.667l5.25-1.68zm.61 1.429a.25.25 0 00-.153 0l-5.25 1.68a.25.25 0 00-.174.238V7c0 1.358.275 2.666 1.057 3.86.784 1.194 2.121 2.34 4.366 3.297a.2.2 0 00.154 0c2.245-.956 3.582-2.104 4.366-3.298C13.225 9.666 13.5 8.36 13.5 7V3.48a.25.25 0 00-.174-.237l-5.25-1.68zM9 10.5a1 1 0 11-2 0 1 1 0 012 0zm-.25-5.75a.75.75 0 10-1.5 0v3a.75.75 0 001.5 0v-3z">
                        </path>
                    </svg>
                    <span class="ml-1.5">Security</span>
                </a>
            </button>
        </li>
        <!-- Element -->
        <li class="mr-3.5">
            <button class="p-1.5 mb-2 hover:bg-bgray hover:rounded-md">
                <a href="#" class="flex items-center">
                    <svg class="w-4 mr-1 fill-current text-gray-400" aria-hidden="true" viewBox="0 0 16 16"
                         data-view-component="true">
                        <path fill-rule="evenodd"
                              d="M1.5 1.75a.75.75 0 00-1.5 0v12.5c0 .414.336.75.75.75h14.5a.75.75 0 000-1.5H1.5V1.75zm14.28 2.53a.75.75 0 00-1.06-1.06L10 7.94 7.53 5.47a.75.75 0 00-1.06 0L3.22 8.72a.75.75 0 001.06 1.06L7 7.06l2.47 2.47a.75.75 0 001.06 0l5.25-5.25z">
                        </path>
                    </svg>
                    <span class="ml-1.5">Insights</span>
                </a>
            </button>
        </li>
        <!-- Element -->
        <li class="mr-3.5">
            <button class="p-1.5 mb-2 hover:bg-bgray hover:rounded-md">
                <a href="#" class="flex items-center">
                    <svg class="w-4 mr-1 fill-current text-gray-400" aria-hidden="true" viewBox="0 0 16 16"
                         data-view-component="true">
                        <path fill-rule="evenodd"
                              d="M7.429 1.525a6.593 6.593 0 011.142 0c.036.003.108.036.137.146l.289 1.105c.147.56.55.967.997 1.189.174.086.341.183.501.29.417.278.97.423 1.53.27l1.102-.303c.11-.03.175.016.195.046.219.31.41.641.573.989.014.031.022.11-.059.19l-.815.806c-.411.406-.562.957-.53 1.456a4.588 4.588 0 010 .582c-.032.499.119 1.05.53 1.456l.815.806c.08.08.073.159.059.19a6.494 6.494 0 01-.573.99c-.02.029-.086.074-.195.045l-1.103-.303c-.559-.153-1.112-.008-1.529.27-.16.107-.327.204-.5.29-.449.222-.851.628-.998 1.189l-.289 1.105c-.029.11-.101.143-.137.146a6.613 6.613 0 01-1.142 0c-.036-.003-.108-.037-.137-.146l-.289-1.105c-.147-.56-.55-.967-.997-1.189a4.502 4.502 0 01-.501-.29c-.417-.278-.97-.423-1.53-.27l-1.102.303c-.11.03-.175-.016-.195-.046a6.492 6.492 0 01-.573-.989c-.014-.031-.022-.11.059-.19l.815-.806c.411-.406.562-.957.53-1.456a4.587 4.587 0 010-.582c.032-.499-.119-1.05-.53-1.456l-.815-.806c-.08-.08-.073-.159-.059-.19a6.44 6.44 0 01.573-.99c.02-.029.086-.075.195-.045l1.103.303c.559.153 1.112.008 1.529-.27.16-.107.327-.204.5-.29.449-.222.851-.628.998-1.189l.289-1.105c.029-.11.101-.143.137-.146zM8 0c-.236 0-.47.01-.701.03-.743.065-1.29.615-1.458 1.261l-.29 1.106c-.017.066-.078.158-.211.224a5.994 5.994 0 00-.668.386c-.123.082-.233.09-.3.071L3.27 2.776c-.644-.177-1.392.02-1.82.63a7.977 7.977 0 00-.704 1.217c-.315.675-.111 1.422.363 1.891l.815.806c.05.048.098.147.088.294a6.084 6.084 0 000 .772c.01.147-.038.246-.088.294l-.815.806c-.474.469-.678 1.216-.363 1.891.2.428.436.835.704 1.218.428.609 1.176.806 1.82.63l1.103-.303c.066-.019.176-.011.299.071.213.143.436.272.668.386.133.066.194.158.212.224l.289 1.106c.169.646.715 1.196 1.458 1.26a8.094 8.094 0 001.402 0c.743-.064 1.29-.614 1.458-1.26l.29-1.106c.017-.066.078-.158.211-.224a5.98 5.98 0 00.668-.386c.123-.082.233-.09.3-.071l1.102.302c.644.177 1.392-.02 1.82-.63.268-.382.505-.789.704-1.217.315-.675.111-1.422-.364-1.891l-.814-.806c-.05-.048-.098-.147-.088-.294a6.1 6.1 0 000-.772c-.01-.147.039-.246.088-.294l.814-.806c.475-.469.679-1.216.364-1.891a7.992 7.992 0 00-.704-1.218c-.428-.609-1.176-.806-1.82-.63l-1.103.303c-.066.019-.176.011-.299-.071a5.991 5.991 0 00-.668-.386c-.133-.066-.194-.158-.212-.224L10.16 1.29C9.99.645 9.444.095 8.701.031A8.094 8.094 0 008 0zm1.5 8a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM11 8a3 3 0 11-6 0 3 3 0 016 0z">
                        </path>
                    </svg>
                    <span class="ml-1.5">Settings</span>
                </a>
            </button>
        </li>
    </ul> <!-- end repo-nav -->

    <!-- File explorer -->
    <div class="container mx-auto my-8 px-4 flex text-gray-500">
        <div class="file-explorer-container w-3/4 mr-8">
            <div class="branch-navigation flex items-center justify-between text-gray-300">
                <div class="flex items-center space-x-2">
                    <!-- Element -->
                    <div class="flex items-center mr-2 py-1.5 px-1 space-x-1 bg-bgray border border-gray-700 rounded-md font-semibold hover:border-gray-500 hover:bg-bgray2">
                        <button class="flex items-center px-3">
                            <!-- Icon -->
                            <svg class="w-4 fill-current text-gray-500 mr-1" aria-hidden="true" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11.75 2.5a.75.75 0 100 1.5.75.75 0 000-1.5zm-2.25.75a2.25 2.25 0 113 2.122V6A2.5 2.5 0 0110 8.5H6a1 1 0 00-1 1v1.128a2.251 2.251 0 11-1.5 0V5.372a2.25 2.25 0 111.5 0v1.836A2.492 2.492 0 016 7h4a1 1 0 001-1v-.628A2.25 2.25 0 019.5 3.25zM4.25 12a.75.75 0 100 1.5.75.75 0 000-1.5zM3.5 3.25a.75.75 0 111.5 0 .75.75 0 01-1.5 0z"></path>
                            </svg>
                            <span class="ml-1 mr-1.5">main</span>
                            <!-- Dropdown Arrow -->
                            <svg class="w-1.5 fill-current mx-1 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                <path
                                    d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                            </svg>
                        </button>
                    </div>
                    <!-- Element no button -->
                    <a class="flex items-center space-x-1 pr-1 group">
                        <!-- Icon -->
                        <svg class="w-4 fill-current peer group-hover:text-blue-400" aria-hidden="true" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                  d="M11.75 2.5a.75.75 0 100 1.5.75.75 0 000-1.5zm-2.25.75a2.25 2.25 0 113 2.122V6A2.5 2.5 0 0110 8.5H6a1 1 0 00-1 1v1.128a2.251 2.251 0 11-1.5 0V5.372a2.25 2.25 0 111.5 0v1.836A2.492 2.492 0 016 7h4a1 1 0 001-1v-.628A2.25 2.25 0 019.5 3.25zM4.25 12a.75.75 0 100 1.5.75.75 0 000-1.5zM3.5 3.25a.75.75 0 111.5 0 .75.75 0 01-1.5 0z">
                            </path>
                        </svg>
                        <span class="font-semibold group-hover:text-blue-400">1</span>
                        <span class="mr-1 p-1.5 text-gray-500 pl-0 group-hover:text-blue-400">branch</span>
                    </a>
                    <!-- Element no button -->
                    <div class="flex items-center space-x-1 group">
                        <!-- Icon -->
                        <svg class="w-4 fill-current group-hover:text-blue-400" aria-hidden="true" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 7.775V2.75a.25.25 0 01.25-.25h5.025a.25.25 0 01.177.073l6.25 6.25a.25.25 0 010 .354l-5.025 5.025a.25.25 0 01-.354 0l-6.25-6.25a.25.25 0 01-.073-.177zm-1.5 0V2.75C1 1.784 1.784 1 2.75 1h5.025c.464 0 .91.184 1.238.513l6.25 6.25a1.75 1.75 0 010 2.474l-5.026 5.026a1.75 1.75 0 01-2.474 0l-6.25-6.25A1.75 1.75 0 011 7.775zM6 5a1 1 0 100 2 1 1 0 000-2z"></path>
                        </svg>
                        <span class="font-semibold group-hover:text-blue-400">0</span>
                        <span class="mr-1 p-1.5 text-gray-500 pl-0 hover:text-blue-400 group-hover:text-blue-400">tags</span>
                    </div>
                </div>
                <div class="flex items-center space-x-2">
                    <!-- Element -->
                    <div class="flex items-center py-1.5 space-x-1 bg-bgray border border-gray-700 rounded-md font-semibold hover:border-gray-500 hover:bg-bgray2">
                        <button class="flex items-center px-3">
                            <div class="ml-1 mr-1.5">Go to file</div>
                        </button>
                    </div>
                    <!-- Element -->
                    <div class="flex items-center py-1.5 space-x-1 bg-bgray border border-gray-700 rounded-md font-semibold hover:border-gray-500 hover:bg-bgray2">
                        <button class="flex items-center px-3">
                            <div class="ml-1 mr-0 pr-1.5">Add file</div>
                            <!-- Dropdown Arrow -->
                            <svg class="w-1.5 fill-current mb-0.5 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                <path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                            </svg>
                        </button>
                    </div>
                    <!-- Element -->
                    <div class="flex items-center mr-2 py-1.5 px-1 space-x-1 text-gray-100 bg-git-green rounded-md font-semibold hover:bg-git-green-2">
                        <button class="flex items-center px-3">
                            <!-- Icon -->
                            <svg class="w-4 fill-current mr-1" aria-hidden="true" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M4.72 3.22a.75.75 0 011.06 1.06L2.06 8l3.72 3.72a.75.75 0 11-1.06 1.06L.47 8.53a.75.75 0 010-1.06l4.25-4.25zm6.56 0a.75.75 0 10-1.06 1.06L13.94 8l-3.72 3.72a.75.75 0 101.06 1.06l4.25-4.25a.75.75 0 000-1.06l-4.25-4.25z">
                                </path>
                            </svg>
                            <div class="ml-1 mr-1.5">Code</div>
                            <!-- Dropdown Arrow -->
                            <svg class="w-1.5 fill-current mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                <path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div> <!-- end branch-navigation -->
        </div> <!-- end file-explorer-container -->
        <div class="sidebar w-1/4">
            Voluptate duis sint consequat occaecat fugiat ea duis enim tempor duis culpa velit nulla. Deserunt exercitation
            aute fugiat aliquip ut. Dolore ipsum ad do dolor commodo exercitation. Duis nulla duis Lorem in est quis
            reprehenderit sint proident eu consectetur elit consectetur eu. Pariatur eu magna tempor Lorem deserunt mollit
            eu. Consequat sunt commodo laborum et sint enim sint. Ea ipsum consequat est qui aliquip ullamco do incididunt
            ex labore anim sunt velit.
        </div> <!-- end sidebar -->
    </div> <!-- end file explorer -->
</div> <!-- end top navs -->
</body>

</html>
