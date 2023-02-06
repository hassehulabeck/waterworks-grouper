@include('header')
@include('nav')
@if($votes)
<section class="bg-slate-100 p-4 mt-2">
    <table class="table-auto border-collapse">
        <thead class="border-b-8 border-blue-500 ">
            <tr class="w-full">
                <td class="pl-3 pr-5 text-right">#</td>
                <td class="pr-10 ">Name</td>
                <td class="pr-20 ">Method</td>
                <td class="pr-20 ">Comments</td>
                <td class="pl-20 ">Group</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($votes as $index => $vote)
            <tr class="{{ $vote->group}}">
                <td class="pl-3">{{ $index + 1 }}</td>
                <td> {{ $vote->firstname }} </td>
                <td> {{ $vote->method }} </td>
                <td> {{ $vote->comments }} </td>
                <td class="pl-20 pr-6">
                    {{ $vote->group }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endif

@include('methods')
@include('footer')