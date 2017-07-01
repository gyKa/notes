@extends("layout")

@section("content")
    <div class="columns">
        <div class="column">
	    <form action="/create" method="post">
	        <div class="field">
                    <p class="control">
                        <input class="input" type="text" value="" name="name" placeholder="Name">
                    </p>
                </div>
                <div class="field">
                    <p class="control">
                        <textarea class="textarea" placeholder="Text" rows="4" cols="50" name="text"></textarea>
                </div>
                <div class="field">
                    <p class="control">
                        <input type="submit" class="button is-primary" value="Submit">
                    </p>
                </div>
            </form>
        </div>
    </div>
@endsection
