<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $zapato->denominacion }}
        </h2>
    </x-slot>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="max-w-2xl mx-auto py-8 px-4 sm:py-8 sm:px-6 lg:max-w-7xl lg:px-8">
                    <!--
  This example requires Tailwind CSS v2.0+

  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    theme: {
      extend: {
        gridTemplateRows: {
          '[auto,auto,1fr]': 'auto auto 1fr',
        },
      },
    },
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->

<div class="bg-white">
    <div>

      <!-- Image gallery -->
      <div class="mt-6 max-w-2xl mx-auto sm:px-6 lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-3 lg:gap-x-8">
        <div class="hidden aspect-w-3 aspect-h-4 rounded-lg overflow-hidden lg:block">
          <img src="{{ $zapato->imagen }}" alt="Two each of gray, white, and black shirts laying flat." class="w-full h-full object-center object-cover">
        </div>
        <div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-8">
          <div class="aspect-w-3 aspect-h-2 rounded-lg overflow-hidden">
            <img src="{{ $zapato->imagen }}" alt="Model wearing plain black basic tee." class="w-full h-full object-center object-cover">
          </div>
          <div class="aspect-w-3 aspect-h-2 rounded-lg overflow-hidden">
            <img src="{{ $zapato->imagen }}" alt="Model wearing plain gray basic tee." class="w-full h-full object-center object-cover">
          </div>
        </div>
        <div class="aspect-w-4 aspect-h-5 sm:rounded-lg sm:overflow-hidden lg:aspect-w-3 lg:aspect-h-4">
          <img src="{{ $zapato->imagen }}" alt="Model wearing plain white basic tee." class="w-full h-full object-center object-cover">
        </div>
      </div>

      <!-- Product info -->
      <div class="max-w-2xl mx-auto pt-10 pb-16 px-4 sm:px-6 lg:max-w-7xl lg:pt-16 lg:pb-24 lg:px-8 lg:grid lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8">
        <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
          <h1 class="text-2xl font-extrabold tracking-tight text-gray-900 sm:text-3xl">{{ $zapato->denominacion }}</h1>
        </div>

        <!-- Options -->
        <div class="mt-4 lg:mt-0 lg:row-span-3">
          <h2 class="sr-only">Product information</h2>
          <p class="text-3xl text-gray-900">{{ $zapato->precio }} €</p>

          <!-- Reviews -->
          <div class="mt-6">
            <h3 class="sr-only">Reviews</h3>
            <div class="flex items-center">
              <div class="flex items-center">
                <!--
                  Heroicon name: solid/star

                  Active: "text-gray-900", Default: "text-gray-200"
                -->
                <svg class="text-gray-900 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>

                <!-- Heroicon name: solid/star -->
                <svg class="text-gray-900 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>

                <!-- Heroicon name: solid/star -->
                <svg class="text-gray-900 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>

                <!-- Heroicon name: solid/star -->
                <svg class="text-gray-900 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>

                <!-- Heroicon name: solid/star -->
                <svg class="text-gray-200 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
              </div>
              <p class="sr-only">4 out of 5 stars</p>
              <a href="#" class="ml-3 text-sm font-medium text-gray-600 hover:text-gray-500">117 reseñas</a>
            </div>
          </div>

          <form class="mt-10" action="{{ route('carritos.add', $zapato) }}" method="POST">
            @csrf
            @method('POST')

            <!-- Colors -->
            <div>
              <h3 class="text-sm text-gray-900 font-medium">Color</h3>

              <fieldset class="mt-4">
                <legend class="sr-only">Choose a color</legend>
                <div class="flex items-center space-x-3">
                  <!--
                    Active and Checked: "ring ring-offset-1"
                    Not Active and Checked: "ring-2"
                  -->
                  <label class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-gray-400">
                    <input type="radio" name="color-choice" value="White" class="sr-only" aria-labelledby="color-choice-0-label">
                    <p id="color-choice-0-label" class="sr-only">White</p>
                    <span aria-hidden="true" class="h-8 w-8 bg-white border border-black border-opacity-10 rounded-full"></span>
                  </label>

                  <!--
                    Active and Checked: "ring ring-offset-1"
                    Not Active and Checked: "ring-2"
                  -->
                  <label class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-gray-400">
                    <input type="radio" name="color-choice" value="Gray" class="sr-only" aria-labelledby="color-choice-1-label">
                    <p id="color-choice-1-label" class="sr-only">Gray</p>
                    <span aria-hidden="true" class="h-8 w-8 bg-gray-200 border border-black border-opacity-10 rounded-full"></span>
                  </label>

                  <!--
                    Active and Checked: "ring ring-offset-1"
                    Not Active and Checked: "ring-2"
                  -->
                  <label class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-gray-900">
                    <input type="radio" name="color-choice" value="Black" class="sr-only" aria-labelledby="color-choice-2-label">
                    <p id="color-choice-2-label" class="sr-only">Black</p>
                    <span aria-hidden="true" class="h-8 w-8 bg-gray-900 border border-black border-opacity-10 rounded-full"></span>
                  </label>
                </div>
              </fieldset>
            </div>

            <!-- Sizes -->
            <div class="mt-10">
              <div class="flex items-center justify-between">
                <h3 class="text-sm text-gray-900 font-medium">Talla</h3>
                <a href="#" class="text-sm font-medium text-gray-600 hover:text-gray-500">Guía de tallas</a>
              </div>

              <fieldset class="mt-4">
                <legend class="sr-only">Choose a size</legend>
                <div class="grid grid-cols-4 gap-4 sm:grid-cols-8 lg:grid-cols-4">
                  <!-- Active: "ring-2 ring-gray-500" -->
                  <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-gray-50 text-gray-200 cursor-not-allowed">
                    <input type="radio" name="size-choice" value="XXS" disabled class="sr-only" aria-labelledby="size-choice-0-label">
                    <p id="size-choice-0-label">39</p>

                    <div aria-hidden="true" class="absolute -inset-px rounded-md border-2 border-gray-200 pointer-events-none">
                      <svg class="absolute inset-0 w-full h-full text-gray-200 stroke-2" viewBox="0 0 100 100" preserveAspectRatio="none" stroke="currentColor">
                        <line x1="0" y1="100" x2="100" y2="0" vector-effect="non-scaling-stroke" />
                      </svg>
                    </div>
                  </label>

                  <!-- Active: "ring-2 ring-gray-500" -->
                  <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                    <input type="radio" name="size-choice" value="XS" class="sr-only" aria-labelledby="size-choice-1-label">
                    <p id="size-choice-1-label">40</p>

                    <!--
                      Active: "border", Not Active: "border-2"
                      Checked: "border-gray-500", Not Checked: "border-transparent"
                    -->
                    <div class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></div>
                  </label>

                  <!-- Active: "ring-2 ring-gray-500" -->
                  <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                    <input type="radio" name="size-choice" value="S" class="sr-only" aria-labelledby="size-choice-2-label">
                    <p id="size-choice-2-label">41</p>

                    <!--
                      Active: "border", Not Active: "border-2"
                      Checked: "border-gray-500", Not Checked: "border-transparent"
                    -->
                    <div class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></div>
                  </label>

                  <!-- Active: "ring-2 ring-gray-500" -->
                  <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                    <input type="radio" name="size-choice" value="M" class="sr-only" aria-labelledby="size-choice-3-label">
                    <p id="size-choice-3-label">42</p>

                    <!--
                      Active: "border", Not Active: "border-2"
                      Checked: "border-gray-500", Not Checked: "border-transparent"
                    -->
                    <div class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></div>
                  </label>

                  <!-- Active: "ring-2 ring-gray-500" -->
                  <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                    <input type="radio" name="size-choice" value="L" class="sr-only" aria-labelledby="size-choice-4-label">
                    <p id="size-choice-4-label">43</p>

                    <!--
                      Active: "border", Not Active: "border-2"
                      Checked: "border-gray-500", Not Checked: "border-transparent"
                    -->
                    <div class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></div>
                  </label>

                  <!-- Active: "ring-2 ring-gray-500" -->
                  <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                    <input type="radio" name="size-choice" value="XL" class="sr-only" aria-labelledby="size-choice-5-label">
                    <p id="size-choice-5-label">44</p>

                    <!--
                      Active: "border", Not Active: "border-2"
                      Checked: "border-gray-500", Not Checked: "border-transparent"
                    -->
                    <div class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></div>
                  </label>

                  <!-- Active: "ring-2 ring-gray-500" -->
                  <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                    <input type="radio" name="size-choice" value="2XL" class="sr-only" aria-labelledby="size-choice-6-label">
                    <p id="size-choice-6-label">45</p>

                    <!--
                      Active: "border", Not Active: "border-2"
                      Checked: "border-gray-500", Not Checked: "border-transparent"
                    -->
                    <div class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></div>
                  </label>

                  <!-- Active: "ring-2 ring-gray-500" -->
                  <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                    <input type="radio" name="size-choice" value="3XL" class="sr-only" aria-labelledby="size-choice-7-label">
                    <p id="size-choice-7-label">46</p>

                    <!--
                      Active: "border", Not Active: "border-2"
                      Checked: "border-gray-500", Not Checked: "border-transparent"
                    -->
                    <div class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></div>
                  </label>
                </div>
              </fieldset>
            </div>
                <button type="submit" class="mt-10 w-full bg-gray-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-semibold text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">Añadir al carrito</button>
          </form>
        </div>

        <div class="py-10 lg:pt-6 lg:pb-16 lg:col-start-1 lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
          <!-- Description and details -->
          <div>
            <h3 class="sr-only">Description</h3>

            <div class="space-y-6">
              <p class="text-base text-gray-900">Al estilo de los años 70. Aclamadas en los 80. Un clásico de los 90. Listas para el futuro. Las Nike Blazer Mid '77 Vintage ofrecen un diseño atemporal y muy cómodo. La parte superior de piel increíblemente impecable combina perfectamente con un llamativo logotipo retro y unos detalles de ante exquisitos para ofrecer una sensación premium. La espuma expuesta en la lengüeta y el acabado de la mediasuela especial hacen que parezca que han salido de los libros de historia. Adelante, perfecciona tu look.</p>
            </div>
          </div>

          <div class="mt-10">
            <h3 class="text-sm font-medium text-gray-900">Características</h3>

            <div class="mt-4">
              <ul role="list" class="pl-4 list-disc text-sm space-y-2">
                <li class="text-gray-400"><span class="text-gray-600">Color mostrado: Blanco/Sail/Peach/Negro</span></li>

                <li class="text-gray-400"><span class="text-gray-600">Modelo: {{ $zapato->codigo }}</span></li>
              </ul>
            </div>
          </div>

          <div class="mt-10">
            <h2 class="text-sm font-medium text-gray-900">Detalles</h2>

            <div class="mt-4 space-y-6">
                <ul role="list" class="pl-4 list-disc text-sm space-y-2">
                    <li class="text-gray-400"><span class="text-gray-600">Parte superior de piel y material sintético para un look impecable y muy cómodo.</span></li>

                    <li class="text-gray-400"><span class="text-gray-600">Tratamiento vintage en la mediasuela que añade un toque de estilo retro.</span></li>

                    <li class="text-gray-400"><span class="text-gray-600">Confección vulcanizada que une la suela exterior con la mediasuela para ofrecer un look atemporal.</span></li>

                    <li class="text-gray-400"><span class="text-gray-600">Espuma expuesta en la lengüeta para un look retro.</span></li>

                    <li class="text-gray-400"><span class="text-gray-600">Suela exterior de caucho con dibujo en espiga para no dejar marcas y ofrecer una excelente tracción y una durabilidad excelentes que dejan huella.</span></li>
                </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
