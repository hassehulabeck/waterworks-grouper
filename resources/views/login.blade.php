@include('header')
@include('nav')

<section class="bg-gray-400 p-4">
<form action="login" method="post">
    @csrf
    <label for="email" class="block">Email</label>
    <input type="text" name="email" id="" class="block mb-3">
    <label for="password" class="block">Password</label>
    <input type="password" name="password" id="" class="block mb-2">
    <input type="submit" value="Login">
</form>
</section>
@if ($errors->any())
    {{ $errors->first() }}
    
@endif