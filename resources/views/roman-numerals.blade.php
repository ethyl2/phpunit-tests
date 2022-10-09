<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Convert Numbers to Roman Numerals</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gideon+Roman&display=swap" rel="stylesheet">
  </head>

  <body class="bg-contain bg-center bg-no-repeat bg-black"
    style="background: url('https://images.unsplash.com/photo-1552832230-c0197dd311b5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1996&q=80'); background-repeat: no-repeat;">
  <div class="bg-opacity-90 w-full max-w-xs md:max-w-2xl mt-8 px-4 py-8 bg-white rounded-md container sans-serif mx-auto pt-12 flex flex-col items-center justify-start space-y-6 text-xl md:text-3xl">
    <h1 class="text-yellow-700 text-center font-semibold">
      Convert an positive integer into a Roman numeral.
    </h1>
    <form
      method="POST"
      action="{{ url()->current() }}"
      class="flex flex-col items-center justify-center space-y-4"
    >
      @csrf
      <label
        for="number"
        class="text-sm md:text-base px-8 text-center"
      >
        Enter an integer greater than 0 and less than 4000:
      </label>
      <input
        type="number"
        id="number"
        name="number"
        class="border rounded-md p-2"
        min="0"
        max="3999"
        value="{{ old('number') }}"
        required
      />
      <button
        type="submit"
        class="bg-blue-500 text-white rounded-md px-4 py-2 mx-auto block mb-8 font-bold hover:bg-blue-400"
      >Convert!</button>
    </form>

    <div class="h-16">
      @if($result)
        <p class="pt-4 text-2xl md:text-5xl bold"
          style="font-family: 'Gideon Roman', cursive;"
        >{{ $result }}</p>
      @endif
    </div>
  </div>
  </body>
</html>
