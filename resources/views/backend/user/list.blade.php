@extends('backend.index')
@section('content')
<section class="main shadow p-3 mb-5 bg-body-tertiary rounded">
    <h3 class="bg-primary-subtle rounded-3 ps-3 pt-2 pb-2">Danh sách khách hàng</h3>
    <div class="user">
        <div class="user-container">
            <div class=" border rounded user-list">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Gmail</th>

                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i =1;
                        @endphp
                        @foreach ($user as $user)
                        <tr>
                            <th scope="row"> {{$i++}}</th>
                            <td>{{$user->user_email}}</td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="user-chart">
                <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
            </div>
        </div>
    </div>
</section>
<script>
    var xValues = ["2019", "2020", "2021", "2022", "2023"];
    var yValues = [25, 25, 30, 44, 55];
    var barColors = ["red", "green","blue","orange","brown"];
    
    new Chart("myChart", {
      type: "bar",
      data: {
        labels: xValues,
        datasets: [{
          backgroundColor: barColors,
          data: yValues
        }]
      },
      options: {
        legend: {display: false},
        title: {
          display: true,
        //   text: "World Wine Production 2018"
        }
      }
    });
</script>
@endsection


{{-- https://www.w3schools.com/js/tryit.asp?filename=tryai_chartjs_bars_colors_more --}}