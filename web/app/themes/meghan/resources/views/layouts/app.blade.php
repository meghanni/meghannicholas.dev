<!doctype html>
<html @php(language_attributes())>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @php(do_action('get_header'))
    @php(wp_head())

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
    :root {

        --primary-10: rgb(249, 252, 253);
        --primary-10-light: rgb(249, 252, 253);
        --primary-10-rgb: 249, 252, 253;


        --primary-50: rgb(224, 241, 245);
        --primary-50-light: rgb(224, 241, 245);
        --primary-50-rgb: 224, 241, 245;


        --primary-100: rgb(193, 226, 235);
        --primary-100-light: rgb(193, 226, 235);
        --primary-100-rgb: 193, 226, 235;


        --primary-200: rgb(131, 198, 214);
        --primary-200-light: rgb(131, 198, 214);
        --primary-200-rgb: 131, 198, 214;


        --primary-300: rgb(69, 169, 194);
        --primary-300-light: rgb(69, 169, 194);
        --primary-300-rgb: 69, 169, 194;


        --primary-400: rgb(7, 141, 174);
        --primary-400-light: rgb(7, 141, 174);
        --primary-400-rgb: 7, 141, 174;


        --primary-500: rgb(0, 112, 154);
        --primary-500-light: rgb(0, 112, 154);
        --primary-500-rgb: 0, 112, 154;


        --primary-600: rgb(0, 90, 123);
        --primary-600-light: rgb(0, 90, 123);
        --primary-600-rgb: 0, 90, 123;


        --primary-700: rgb(0, 67, 92);
        --primary-700-light: rgb(0, 67, 92);
        --primary-700-rgb: 0, 67, 92;


        --primary-800: rgb(0, 45, 61);
        --primary-800-light: rgb(0, 45, 61);
        --primary-800-rgb: 0, 45, 61;


        --primary-900: rgb(0, 22, 31);
        --primary-900-light: rgb(0, 22, 31);
        --primary-900-rgb: 0, 22, 31;


        --primary-950: rgb(0, 11, 15);
        --primary-950-light: rgb(0, 11, 15);
        --primary-950-rgb: 0, 11, 15;


        --secondary-10: rgb(254, 251, 249);
        --secondary-10-light: rgb(254, 251, 249);
        --secondary-10-rgb: 254, 251, 249;


        --secondary-50: rgb(248, 233, 227);
        --secondary-50-light: rgb(248, 233, 227);
        --secondary-50-rgb: 248, 233, 227;


        --secondary-100: rgb(240, 211, 199);
        --secondary-100-light: rgb(240, 211, 199);
        --secondary-100-rgb: 240, 211, 199;


        --secondary-200: rgb(226, 167, 143);
        --secondary-200-light: rgb(226, 167, 143);
        --secondary-200-rgb: 226, 167, 143;


        --secondary-300: rgb(211, 122, 88);
        --secondary-300-light: rgb(211, 122, 88);
        --secondary-300-rgb: 211, 122, 88;


        --secondary-400: rgb(196, 78, 32);
        --secondary-400-light: rgb(196, 78, 32);
        --secondary-400-rgb: 196, 78, 32;


        --secondary-500: rgb(181, 34, 0);
        --secondary-500-light: rgb(181, 34, 0);
        --secondary-500-rgb: 181, 34, 0;


        --secondary-600: rgb(145, 27, 0);
        --secondary-600-light: rgb(145, 27, 0);
        --secondary-600-rgb: 145, 27, 0;


        --secondary-700: rgb(109, 20, 0);
        --secondary-700-light: rgb(109, 20, 0);
        --secondary-700-rgb: 109, 20, 0;


        --secondary-800: rgb(73, 14, 0);
        --secondary-800-light: rgb(73, 14, 0);
        --secondary-800-rgb: 73, 14, 0;


        --secondary-900: rgb(36, 7, 0);
        --secondary-900-light: rgb(36, 7, 0);
        --secondary-900-rgb: 36, 7, 0;


        --secondary-950: rgb(18, 3, 0);
        --secondary-950-light: rgb(18, 3, 0);
        --secondary-950-rgb: 18, 3, 0;


        --grey-10: rgb(252, 252, 252);
        --grey-10-light: rgb(252, 252, 252);
        --grey-10-rgb: 252, 252, 252;


        --grey-50: rgb(239, 240, 240);
        --grey-50-light: rgb(239, 240, 240);
        --grey-50-rgb: 239, 240, 240;


        --grey-100: rgb(222, 224, 225);
        --grey-100-light: rgb(222, 224, 225);
        --grey-100-rgb: 222, 224, 225;


        --grey-200: rgb(190, 193, 195);
        --grey-200-light: rgb(190, 193, 195);
        --grey-200-rgb: 190, 193, 195;


        --grey-300: rgb(157, 163, 164);
        --grey-300-light: rgb(157, 163, 164);
        --grey-300-rgb: 157, 163, 164;


        --grey-400: rgb(124, 132, 134);
        --grey-400-light: rgb(124, 132, 134);
        --grey-400-rgb: 124, 132, 134;


        --grey-500: rgb(92, 101, 104);
        --grey-500-light: rgb(92, 101, 104);
        --grey-500-rgb: 92, 101, 104;


        --grey-600: rgb(73, 81, 83);
        --grey-600-light: rgb(73, 81, 83);
        --grey-600-rgb: 73, 81, 83;


        --grey-700: rgb(55, 61, 62);
        --grey-700-light: rgb(55, 61, 62);
        --grey-700-rgb: 55, 61, 62;


        --grey-800: rgb(37, 40, 42);
        --grey-800-light: rgb(37, 40, 42);
        --grey-800-rgb: 37, 40, 42;


        --grey-900: rgb(18, 20, 21);
        --grey-900-light: rgb(18, 20, 21);
        --grey-900-rgb: 18, 20, 21;


        --grey-950: rgb(9, 10, 10);
        --grey-950-light: rgb(9, 10, 10);
        --grey-950-rgb: 9, 10, 10;



        --primary: var(--primary-500);
        --primaryLight: var(--primary-200);
        --secondary: var(--secondary-500);
        --secondaryLight: var(--secondary-200);
        --white: var(--secondary-10);
        --white-light: var(--secondary-10-light);
        --white-rgb: var(--secondary-10-rgb);
        --black: var(--secondary-950);
        --black-light: var(--secondary-950-light);
        --black-rgb: var(--secondary-950-rgb);
        --headerColor: var(--primary-950);
        --headerColorWhite: var(--primary-10);
        --bodyTextColor: var(--primary-900);
        --bodyTextColorWhite: var(--primary-50);

        --shadow-sm: 0 1px 3px 0 rgba(var(--primary-950-rgb), .1), 0 1px 2px -1px rgba(var(--primary-950-rgb), .1);
        --shadow-md: 0 4px 6px -1px rgba(var(--primary-950-rgb), .1), 0 2px 4px -2px rgba(var(--primary-950-rgb), .1);
        --shadow-lg: 0 10px 15px -3px rgba(var(--primary-950-rgb), .1), 0 4px 6px -4px rgba(var(--primary-950-rgb), .1);
        --shadow-xl: 0 20px 25px -5px rgba(var(--primary-950-rgb), .1), 0 8px 10px -6px rgba(var(--primary-950-rgb), .1);
        --shadow-2xl: 0 25px 50px -12px rgba(var(--primary-950-rgb), .25);

        --grad: linear-gradient(to bottom, var(--primary-200), var(--primary-300));


        --pure-white: white;
        --pure-black: black;
    }

    .light {

        --primary-10: rgb(249, 252, 253);
        --primary-10-rgb: 249, 252, 253;


        --primary-50: rgb(224, 241, 245);
        --primary-50-rgb: 224, 241, 245;


        --primary-100: rgb(193, 226, 235);
        --primary-100-rgb: 193, 226, 235;


        --primary-200: rgb(131, 198, 214);
        --primary-200-rgb: 131, 198, 214;


        --primary-300: rgb(69, 169, 194);
        --primary-300-rgb: 69, 169, 194;


        --primary-400: rgb(7, 141, 174);
        --primary-400-rgb: 7, 141, 174;


        --primary-500: rgb(0, 112, 154);
        --primary-500-rgb: 0, 112, 154;


        --primary-600: rgb(0, 90, 123);
        --primary-600-rgb: 0, 90, 123;


        --primary-700: rgb(0, 67, 92);
        --primary-700-rgb: 0, 67, 92;


        --primary-800: rgb(0, 45, 61);
        --primary-800-rgb: 0, 45, 61;


        --primary-900: rgb(0, 22, 31);
        --primary-900-rgb: 0, 22, 31;


        --primary-950: rgb(0, 11, 15);
        --primary-950-rgb: 0, 11, 15;


        --secondary-10: rgb(254, 251, 249);
        --secondary-10-rgb: 254, 251, 249;


        --secondary-50: rgb(248, 233, 227);
        --secondary-50-rgb: 248, 233, 227;


        --secondary-100: rgb(240, 211, 199);
        --secondary-100-rgb: 240, 211, 199;


        --secondary-200: rgb(226, 167, 143);
        --secondary-200-rgb: 226, 167, 143;


        --secondary-300: rgb(211, 122, 88);
        --secondary-300-rgb: 211, 122, 88;


        --secondary-400: rgb(196, 78, 32);
        --secondary-400-rgb: 196, 78, 32;


        --secondary-500: rgb(181, 34, 0);
        --secondary-500-rgb: 181, 34, 0;


        --secondary-600: rgb(145, 27, 0);
        --secondary-600-rgb: 145, 27, 0;


        --secondary-700: rgb(109, 20, 0);
        --secondary-700-rgb: 109, 20, 0;


        --secondary-800: rgb(73, 14, 0);
        --secondary-800-rgb: 73, 14, 0;


        --secondary-900: rgb(36, 7, 0);
        --secondary-900-rgb: 36, 7, 0;


        --secondary-950: rgb(18, 3, 0);
        --secondary-950-rgb: 18, 3, 0;


        --grey-10: rgb(252, 252, 252);
        --grey-10-rgb: 252, 252, 252;


        --grey-50: rgb(239, 240, 240);
        --grey-50-rgb: 239, 240, 240;


        --grey-100: rgb(222, 224, 225);
        --grey-100-rgb: 222, 224, 225;


        --grey-200: rgb(190, 193, 195);
        --grey-200-rgb: 190, 193, 195;


        --grey-300: rgb(157, 163, 164);
        --grey-300-rgb: 157, 163, 164;


        --grey-400: rgb(124, 132, 134);
        --grey-400-rgb: 124, 132, 134;


        --grey-500: rgb(92, 101, 104);
        --grey-500-rgb: 92, 101, 104;


        --grey-600: rgb(73, 81, 83);
        --grey-600-rgb: 73, 81, 83;


        --grey-700: rgb(55, 61, 62);
        --grey-700-rgb: 55, 61, 62;


        --grey-800: rgb(37, 40, 42);
        --grey-800-rgb: 37, 40, 42;


        --grey-900: rgb(18, 20, 21);
        --grey-900-rgb: 18, 20, 21;


        --grey-950: rgb(9, 10, 10);
        --grey-950-rgb: 9, 10, 10;



        --primary: var(--primary-500);
        --primaryLight: var(--primary-200);
        --secondary: var(--secondary-500);
        --secondaryLight: var(--secondary-200);
        --white: var(--secondary-10);
        --white-light: var(--secondary-10-light);
        --white-rgb: var(--secondary-10-rgb);
        --black: var(--secondary-950);
        --black-light: var(--secondary-950-light);
        --black-rgb: var(--secondary-950-rgb);
        --headerColor: var(--primary-950);
        --headerColorWhite: var(--primary-10);
        --bodyTextColor: var(--primary-900);
        --bodyTextColorWhite: var(--primary-50);

        --shadow-sm: 0 1px 3px 0 rgba(var(--primary-950-rgb), .1), 0 1px 2px -1px rgba(var(--primary-950-rgb), .1);
        --shadow-md: 0 4px 6px -1px rgba(var(--primary-950-rgb), .1), 0 2px 4px -2px rgba(var(--primary-950-rgb), .1);
        --shadow-lg: 0 10px 15px -3px rgba(var(--primary-950-rgb), .1), 0 4px 6px -4px rgba(var(--primary-950-rgb), .1);
        --shadow-xl: 0 20px 25px -5px rgba(var(--primary-950-rgb), .1), 0 8px 10px -6px rgba(var(--primary-950-rgb), .1);
        --shadow-2xl: 0 25px 50px -12px rgba(var(--primary-950-rgb), .25);

        --grad: linear-gradient(to bottom, var(--primary-200), var(--primary-300));


        --pure-white: white;
        --pure-black: black;
    }
</style>
<style>
    @media (prefers-color-scheme: dark) {
        :root {

            --primary-10: rgb(0, 11, 15);
            --primary-10-rgb: 0, 11, 15;


            --primary-50: rgb(0, 22, 31);
            --primary-50-rgb: 0, 22, 31;


            --primary-100: rgb(0, 45, 61);
            --primary-100-rgb: 0, 45, 61;


            --primary-200: rgb(0, 67, 92);
            --primary-200-rgb: 0, 67, 92;


            --primary-300: rgb(0, 90, 123);
            --primary-300-rgb: 0, 90, 123;


            --primary-400: rgb(0, 112, 154);
            --primary-400-rgb: 0, 112, 154;


            --primary-500: rgb(7, 141, 174);
            --primary-500-rgb: 7, 141, 174;


            --primary-600: rgb(69, 169, 194);
            --primary-600-rgb: 69, 169, 194;


            --primary-700: rgb(131, 198, 214);
            --primary-700-rgb: 131, 198, 214;


            --primary-800: rgb(193, 226, 235);
            --primary-800-rgb: 193, 226, 235;


            --primary-900: rgb(224, 241, 245);
            --primary-900-rgb: 224, 241, 245;


            --primary-950: rgb(249, 252, 253);
            --primary-950-rgb: 249, 252, 253;


            --secondary-10: rgb(18, 3, 0);
            --secondary-10-rgb: 18, 3, 0;


            --secondary-50: rgb(36, 7, 0);
            --secondary-50-rgb: 36, 7, 0;


            --secondary-100: rgb(73, 14, 0);
            --secondary-100-rgb: 73, 14, 0;


            --secondary-200: rgb(109, 20, 0);
            --secondary-200-rgb: 109, 20, 0;


            --secondary-300: rgb(145, 27, 0);
            --secondary-300-rgb: 145, 27, 0;


            --secondary-400: rgb(181, 34, 0);
            --secondary-400-rgb: 181, 34, 0;


            --secondary-500: rgb(196, 78, 32);
            --secondary-500-rgb: 196, 78, 32;


            --secondary-600: rgb(211, 122, 88);
            --secondary-600-rgb: 211, 122, 88;


            --secondary-700: rgb(226, 167, 143);
            --secondary-700-rgb: 226, 167, 143;


            --secondary-800: rgb(240, 211, 199);
            --secondary-800-rgb: 240, 211, 199;


            --secondary-900: rgb(248, 233, 227);
            --secondary-900-rgb: 248, 233, 227;


            --secondary-950: rgb(254, 251, 249);
            --secondary-950-rgb: 254, 251, 249;


            --grey-10: rgb(9, 10, 10);
            --grey-10-rgb: 9, 10, 10;


            --grey-50: rgb(18, 20, 21);
            --grey-50-rgb: 18, 20, 21;


            --grey-100: rgb(37, 40, 42);
            --grey-100-rgb: 37, 40, 42;


            --grey-200: rgb(55, 61, 62);
            --grey-200-rgb: 55, 61, 62;


            --grey-300: rgb(73, 81, 83);
            --grey-300-rgb: 73, 81, 83;


            --grey-400: rgb(92, 101, 104);
            --grey-400-rgb: 92, 101, 104;


            --grey-500: rgb(124, 132, 134);
            --grey-500-rgb: 124, 132, 134;


            --grey-600: rgb(157, 163, 164);
            --grey-600-rgb: 157, 163, 164;


            --grey-700: rgb(190, 193, 195);
            --grey-700-rgb: 190, 193, 195;


            --grey-800: rgb(222, 224, 225);
            --grey-800-rgb: 222, 224, 225;


            --grey-900: rgb(239, 240, 240);
            --grey-900-rgb: 239, 240, 240;


            --grey-950: rgb(252, 252, 252);
            --grey-950-rgb: 252, 252, 252;



            --primary: var(--primary-500);
            --primaryLight: var(--primary-200);
            --secondary: var(--secondary-500);
            --secondaryLight: var(--secondary-200);
            --white: var(--secondary-10);
            --white-light: var(--secondary-10-light);
            --white-rgb: var(--secondary-10-rgb);
            --black: var(--secondary-950);
            --black-light: var(--secondary-950-light);
            --black-rgb: var(--secondary-950-rgb);
            --headerColor: var(--primary-950);
            --headerColorWhite: var(--primary-10);
            --bodyTextColor: var(--primary-900);
            --bodyTextColorWhite: var(--primary-50);

            --shadow-sm: 0 1px 3px 0 rgba(var(--primary-950-rgb), .1), 0 1px 2px -1px rgba(var(--primary-950-rgb), .1);
            --shadow-md: 0 4px 6px -1px rgba(var(--primary-950-rgb), .1), 0 2px 4px -2px rgba(var(--primary-950-rgb), .1);
            --shadow-lg: 0 10px 15px -3px rgba(var(--primary-950-rgb), .1), 0 4px 6px -4px rgba(var(--primary-950-rgb), .1);
            --shadow-xl: 0 20px 25px -5px rgba(var(--primary-950-rgb), .1), 0 8px 10px -6px rgba(var(--primary-950-rgb), .1);
            --shadow-2xl: 0 25px 50px -12px rgba(var(--primary-950-rgb), .25);

            --grad: linear-gradient(to bottom, var(--primary-200), var(--primary-300));


            --pure-white: black;
            --pure-black: white;

        }
    }

    .dark {

        --primary-10: rgb(0, 11, 15);
        --primary-10-rgb: 0, 11, 15;


        --primary-50: rgb(0, 22, 31);
        --primary-50-rgb: 0, 22, 31;


        --primary-100: rgb(0, 45, 61);
        --primary-100-rgb: 0, 45, 61;


        --primary-200: rgb(0, 67, 92);
        --primary-200-rgb: 0, 67, 92;


        --primary-300: rgb(0, 90, 123);
        --primary-300-rgb: 0, 90, 123;


        --primary-400: rgb(0, 112, 154);
        --primary-400-rgb: 0, 112, 154;


        --primary-500: rgb(7, 141, 174);
        --primary-500-rgb: 7, 141, 174;


        --primary-600: rgb(69, 169, 194);
        --primary-600-rgb: 69, 169, 194;


        --primary-700: rgb(131, 198, 214);
        --primary-700-rgb: 131, 198, 214;


        --primary-800: rgb(193, 226, 235);
        --primary-800-rgb: 193, 226, 235;


        --primary-900: rgb(224, 241, 245);
        --primary-900-rgb: 224, 241, 245;


        --primary-950: rgb(249, 252, 253);
        --primary-950-rgb: 249, 252, 253;


        --secondary-10: rgb(18, 3, 0);
        --secondary-10-rgb: 18, 3, 0;


        --secondary-50: rgb(36, 7, 0);
        --secondary-50-rgb: 36, 7, 0;


        --secondary-100: rgb(73, 14, 0);
        --secondary-100-rgb: 73, 14, 0;


        --secondary-200: rgb(109, 20, 0);
        --secondary-200-rgb: 109, 20, 0;


        --secondary-300: rgb(145, 27, 0);
        --secondary-300-rgb: 145, 27, 0;


        --secondary-400: rgb(181, 34, 0);
        --secondary-400-rgb: 181, 34, 0;


        --secondary-500: rgb(196, 78, 32);
        --secondary-500-rgb: 196, 78, 32;


        --secondary-600: rgb(211, 122, 88);
        --secondary-600-rgb: 211, 122, 88;


        --secondary-700: rgb(226, 167, 143);
        --secondary-700-rgb: 226, 167, 143;


        --secondary-800: rgb(240, 211, 199);
        --secondary-800-rgb: 240, 211, 199;


        --secondary-900: rgb(248, 233, 227);
        --secondary-900-rgb: 248, 233, 227;


        --secondary-950: rgb(254, 251, 249);
        --secondary-950-rgb: 254, 251, 249;


        --grey-10: rgb(9, 10, 10);
        --grey-10-rgb: 9, 10, 10;


        --grey-50: rgb(18, 20, 21);
        --grey-50-rgb: 18, 20, 21;


        --grey-100: rgb(37, 40, 42);
        --grey-100-rgb: 37, 40, 42;


        --grey-200: rgb(55, 61, 62);
        --grey-200-rgb: 55, 61, 62;


        --grey-300: rgb(73, 81, 83);
        --grey-300-rgb: 73, 81, 83;


        --grey-400: rgb(92, 101, 104);
        --grey-400-rgb: 92, 101, 104;


        --grey-500: rgb(124, 132, 134);
        --grey-500-rgb: 124, 132, 134;


        --grey-600: rgb(157, 163, 164);
        --grey-600-rgb: 157, 163, 164;


        --grey-700: rgb(190, 193, 195);
        --grey-700-rgb: 190, 193, 195;


        --grey-800: rgb(222, 224, 225);
        --grey-800-rgb: 222, 224, 225;


        --grey-900: rgb(239, 240, 240);
        --grey-900-rgb: 239, 240, 240;


        --grey-950: rgb(252, 252, 252);
        --grey-950-rgb: 252, 252, 252;



        --primary: var(--primary-500);
        --primaryLight: var(--primary-200);
        --secondary: var(--secondary-500);
        --secondaryLight: var(--secondary-200);
        --white: var(--secondary-10);
        --white-light: var(--secondary-10-light);
        --white-rgb: var(--secondary-10-rgb);
        --black: var(--secondary-950);
        --black-light: var(--secondary-950-light);
        --black-rgb: var(--secondary-950-rgb);
        --headerColor: var(--primary-950);
        --headerColorWhite: var(--primary-10);
        --bodyTextColor: var(--primary-900);
        --bodyTextColorWhite: var(--primary-50);

        --shadow-sm: 0 1px 3px 0 rgba(var(--primary-950-rgb), .1), 0 1px 2px -1px rgba(var(--primary-950-rgb), .1);
        --shadow-md: 0 4px 6px -1px rgba(var(--primary-950-rgb), .1), 0 2px 4px -2px rgba(var(--primary-950-rgb), .1);
        --shadow-lg: 0 10px 15px -3px rgba(var(--primary-950-rgb), .1), 0 4px 6px -4px rgba(var(--primary-950-rgb), .1);
        --shadow-xl: 0 20px 25px -5px rgba(var(--primary-950-rgb), .1), 0 8px 10px -6px rgba(var(--primary-950-rgb), .1);
        --shadow-2xl: 0 25px 50px -12px rgba(var(--primary-950-rgb), .25);

        --grad: linear-gradient(to bottom, var(--primary-200), var(--primary-300));


        --pure-white: black;
        --pure-black: white;
    }
</style>
</head>

<body @php(body_class())>
    @php(wp_body_open())

    <div id="app">
        <a class="sr-only focus:not-sr-only" href="#main">
            {{ __('Skip to content', 'sage') }}
        </a>

        @include('sections.header')

        <main id="main" class="main">
            @yield('content')
        </main>

        @hasSection('sidebar')
            <aside class="sidebar">
                @yield('sidebar')
            </aside>
        @endif

        @include('sections.footer')
    </div>

    @php(do_action('get_footer'))
    @php(wp_footer())
</body>


</html>
