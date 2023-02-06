@include ('header')
@include('nav')
<section class="bg-orange-300 rounded p-4 my-3">

    @if($votes)
    <form action="/admin" method="post">
        @csrf
    <table class="table-auto border-collapse">
        <thead>
            <tr class="w-full">
                <td class="pr-5 text-right">#</td>
                <td class="pr-10 ">Name</td>
                <td class="pr-20 ">Method</td>
                <td class="pr-20 ">Comments</td>
                <td class="pr-10 ">Group</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($votes as $index => $vote)
            <tr>
            <td class="">{{ $index + 1 }}</td>
            <td> {{ $vote->firstname }} </td>
            <td> {{ $vote->method }} </td>
            <td> {{ $vote->comments }} </td>
            <td>
                <select name="group[]" id="">
                    <option value="none">None</option>
                    <option {{ $vote->group == 'aqua' ? 'selected' : '' }} value="aqua">Aqua</option>
                    <option {{ $vote->group == 'fors' ? 'selected' : '' }} value="fors">Fors</option>
                    <option {{ $vote->group == 'h2o' ? 'selected' : '' }} value="h2o">H2O</option>
                    <option {{ $vote->group == 'hydro' ? 'selected' : '' }} value="hydro">Hydro</option>
                    <option {{ $vote->group == 'vattenfall' ? 'selected' : '' }} value="vattenfall">Vattenfall</option>
                </select>
                <input type="hidden" name="id[]" value="{{ $vote->id }}">
            </td>
            </tr>
        @endforeach
    </tr>    </tbody>
    </table>
    <input type="submit" value="Indela enligt grupp" class="bg-white border border-blue-600 px-2 py-1 rounded-lg mt-3 hover:bg-slate-200">
    </form>
    @endif

</section>

@include('footer')