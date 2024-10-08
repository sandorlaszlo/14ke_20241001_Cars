<div class="card">
    @isset($car['image'])
        <img src="{{ $car['image'] }}" class="card-img-top" alt="{{ $car['title'] }}">
    @endisset
    <div class="card-body">
        <h5 class="card-title">{{ $car['title'] }}</h5>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><b>Start date of production:</b> {{ $car['start_production'] ?? 'N/A' }}
            </li>
            <li class="list-group-item"><b>Class:</b> {{ $car['class'] ?? 'N/A' }}</li>
        </ul>
        <a href="/cars/{{$car['title']}}" class="btn btn-primary">Details</a>
    </div>
</div>
