<!DOCTYPE html>
<html lang="en">

@include('backend.head')

<body>
    @include('backend.nav')

    <section class="home">
    </section>
    @yield('content')


    {{-- icon --}}
    {{-- https://ionic.io/ionicons/usage --}}
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>