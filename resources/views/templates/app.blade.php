{{--
  Template général
--}}

<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- Contenu head -->
      @include('templates.partials.header')
  </head>

  <body>

    <!-- Navigation -->
      @include('templates.partials.nav')

    <!-- CONTENU -->
      <main>
        
        @section('contenu')
        @show

      </main>

    <!-- Footer -->
      @include('templates.partials.footer')

    <!-- Scripts -->
      @include('templates.partials.script')

  </body>

</html>
