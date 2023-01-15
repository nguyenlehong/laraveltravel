<!DOCTYPE html>
<html lang="en">

@include('frontend.head')

<body>
    @include('frontend.nav')

    <section class="home">
        <div class="home-container">
            <div class="home-main">
                <img src="{{url('public/picture/pic1.jpg')}}" width="900px" height="auto" alt="">
            </div>
            <div class="home-news">
                <h1> phim nay rat la hay</h1>
                <p>quoc gi</p>
                <p>dao dien</p>
                <p>dien vien</p>
                <p><span> the loai:</span> hai vl
                </p>
                <p>noi dung phim</p>
            </div>

        </div>
    </section>
</body>

</html>