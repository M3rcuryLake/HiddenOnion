<!DOCTYPE html>
<html lang="en">
<head>
	  <link rel="shortcut icon" type="image/png" href="favicon.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SilentLake :: Offshore</title>
    <meta name="Allec Scott" content="Blog">
    <meta name="Blogging platform" content="Blogging platform for a keen learner and optimistic developer">
    <meta name="keywords" content="keywords,here">
    <link rel="stylesheet" href="output.css"/>
</head>
<body>
<div class="max-w-5xl mx-auto p-4 text-slate-700">
	<p class="text-center underline decoration-red-400 font-extrabold mt-28 mb-4 text-4xl font-RockSalt">SilentLake</p>
	<p class="font-Neucha text-lg mb-28 font-semibold text-center">Yeah..its me...Ankit Mukherjee...<p>
	<p class="font-Montserrat font-semibold">Sooo...finally...You moved ur ass to find this highly underground single page website (more like a flyer) to get a understanding that im not a regular teen coder u meet in ur everyday life.....cuz a regular teen Mobby Dick never hosts a dark web site (uk...he maybe busy with tiktock or something)<p>
	<p class="font-Montserrat font-semibold mt-10">Well...Im a web developer-freelancer and blah blah....cut out that crap and yeah.....do I even need a dark web site on top of a cloudflare pages, static <a class="font-bold text-red-400" href="https://M3rcuryLake.pages.dev">Blog website</a>? absolutely not....and Im not supposed to....Cuz this is considered a complete waste of time.....yeah...(im a Jee aspirant....dk what that means?...google it)</p>
	<p class="font-Montserrat font-semibold mb-28 mt-10">Yeah but....Shit never goes as planned.....<p>
	<div class="text-red-400 font-Nunito font-semibold ">
          <h2 class="text-slate-700 font-bold text-xl font-Neucha mb-6 underline">:: Onion Link ↗ ::</h2>
          <?php
          if (file_exists(__DIR__.'/../temp/var/lib/tor/hidden_service/hostname')) {
              $output = file_get_contents(__DIR__.'/../temp/var/lib/tor/hidden_service/hostname');
              echo "Onion Link:: <a href=http://$output>$output</a> 🔪";
          } else {
              $output = "No domain";
              echo '<p>Something went wrong (Shit) ...</p>';
          }
          ?>
      </div>
</div>
  <hr class="border-b-8 border-x-0 border-t-0 content-center mx-auto my-10 border-dotted border-red-300 w-10">
  
			<div class="flex justify-center mb-6 mt-20">
        <a href="#!" type="button" class="rounded-full border-2 hover:border-white hover:text-white leading-normal uppercase hover:bg-red-400 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
          <svg aria-hidden="true"
          focusable="false"
          data-prefix="fab"
          data-icon="facebook-f"
          class="w-2 h-full mx-auto"
          role="img"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 320 512">
          <path
            fill="currentColor"
            d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"
          ></path>
          </svg>
        </a>
  
        <a href="mailto:ankitmukherjee814@gmail.com" type="button" class="rounded-full border-2 hover:border-white hover:text-white leading-normal uppercase hover:bg-red-400 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
          <svg aria-hidden="true"
          focusable="false"
          data-prefix="fab"
            data-icon="google"
            class="w-3 h-full mx-auto"
            role="img"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 488 512">
            <path
              fill="currentColor"
              d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"
            ></path>
          </svg>
        </a>
  
        <a href="https://instagram.com/run.____.away" target="_blank" type="button" class="rounded-full border-2 hover:border-white hover:text-white leading-normal uppercase hover:bg-red-400 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
          <svg aria-hidden="true"
          focusable="false"
          data-prefix="fab"
          data-icon="instagram"
            class="w-3 h-full mx-auto"
            role="img"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 448 512">
            <path
              fill="currentColor"
              d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
            ></path>
          </svg>
        </a>
  
        <a href="https://github.com/M3rcuryLake/M3rcuryLake" type="button" target="_blank" class="hover:bg-red-400 rounded-full border-2 hover:border-white hover:text-white leading-normal uppercase focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
          <svg aria-hidden="true"
          focusable="false"
          data-prefix="fab"
          data-icon="github"
            class="w-3 h-full mx-auto"
            role="img"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 496 512">
            <path
              fill="currentColor"
              d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"
            ></path>
          </svg>
        </a>
      </div>

</body>
</html>