@extends("layout")

<div class="row">
    <div class="col-sm">
	<form action="/create" method="post">
            <div class="input-group vertical">
                <label for="name">Name</label>
                <input type="text" value="" id="name" name="name">
            </div>
            <div class="input-group vertical">
                <label for="text">Text</label>
                <input type="text" value="" id="text" name="text">
            </div>
            <div class="input-group vertical">
                <input type="submit" class="tertiary" value="Create">
            </div>
        </form>
    </div>
</div>
