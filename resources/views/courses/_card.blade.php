<div class="card col">
    <img class="card-img-top" src="http://via.placeholder.com/350x150" alt="Card image cap">
    <div class="card-body">

        <select class="rating">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>

        <h5 class="card-title">{{ $item->title }}</h5>
        <p class="card-text">{{ $item->excerpt }}</p>
        <p class="card-text">{{ $item->author_name }}</p>
        <h6>{{ $item->formatted_date }}</h6>

        <a href="{{ route('courses.show', $item->getKey()) }}" class="btn btn-primary">View Detail</a>
    </div>
</div>
