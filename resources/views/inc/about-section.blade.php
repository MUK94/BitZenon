@foreach ($aboutSection as $about)
    <div class="container about">
        <div class="box">
            <div class="heading">
					<i class="fa-solid fa-graduation-cap"></i>
                <h3>Education</h3>
            </div>
            <p>
                {{ $about->intro }}</p>
        </div>
        <div class="box">
            <div class="heading">
                <i class="fa-regular fa-lightbulb"></i>
                <h3> Mission</h3>
            </div>
            <p>
                {{ $about->mission }}</p>
        </div>
        <div class="box">
            <div class="heading">
                <i class="fa-solid fa-code"></i>
                <h3>Expertise</h3>
            </div>
            <p>
                {{ $about->expertise }}</p>
        </div>
        <div class="box">
            <div class="heading">
                <i class="fa-solid fa-asterisk"></i>
                <h3> Why Badroufy ?</h3>
            </div>
            <p>
                {{ $about->goal }}</p>
        </div>
    </div>
@endforeach
