@extends('_layouts.master')

@section('body')
<section class="container px-4 py-10 mx-auto lg:h-128 lg:space-x-8 lg:flex lg:items-center">
    <div class="w-full text-center lg:text-left lg:w-1/2">
        <h1 class="text-3xl leading-snug text-gray-800 md:text-4xl">
            A <span class="font-semibold">free repository</span> for community  <br class="hidden lg:block"> components using <span class="text-primary">TailwindCSS</span>
        </h1>

        <p class="mt-4 text-lg text-gray-500">Open source Tailwind UI components and templates to <br class="hidden lg:block"> bootstrap your new apps, projects or landing sites!</p>
    </div>
    
    <div class="w-full mt-4 lg:mt-0 lg:w-1/2">
        <img class="w-full h-full max-w-md mx-auto" src="./assets/website-designer-bro.svg" alt="web designer">
    </div>
</section>
@endsection
