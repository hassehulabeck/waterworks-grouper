@include('header')
@include('nav')
<section class="p-4 my-4 rounded bg-orange-300">
<form action="/vote" method="post">
@csrf
<label for="firstname">Your name</label>
<input type="text" name="firstname" class="mt-1 mb-8 p-1">
<label for="method">Type of method</label>
<select name="method" id="" class="mt-1 mb-8 p-1">
    <option value="none">None selected</option>
    <option value="map">Map it out</option>
    <option value="graphical">graphical representation</option>
    <option value="history">Focus on history</option>
    <option value="game">Go for the win</option>
    <option value="other">Other (elaborate in comments)</option>
</select>
<label for="comments">Comments (any special tech, needs etc?)</label>
<textarea name="comments" id="" cols="40" rows="6" class="mt-1 mb-8"></textarea>
<input type="submit" value="Enter my information" class="border bg-white py-2 px-4 rounded-md block">
</form>
</section>
@include('methods')

@include('footer')